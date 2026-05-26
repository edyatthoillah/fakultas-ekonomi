@extends('layouts.frontend')

@section('title', 'Dashboard')

@section('content')
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    <!-- Session Toastr -->
    @foreach (['success', 'successedit', 'successeditgambar', 'successdelete'] as $msg)
        @if (Session::has($msg))
            <script>
                toastr.success('{{ Session::get($msg) }}', '');
            </script>
        @endif
    @endforeach
    @if ($errors->any())
        <script>
            toastr.error('Gagal Ditambahkan', '');
        </script>
    @endif

    <div class="bg-white border border-gray-300 shadow-sm px-4 pb-4">
        <div class="mb-4">
            <div class="flex items-center justify-between my-4">

                <!-- Left: Title -->
                <div>
                    <h2 class="text-lg font-semibold text-gray-800 leading-tight">
                        Pengaturan Landing Page
                    </h2>
                    <p class="text-xs text-gray-500 mt-0.5">
                        Kelola informasi utama yang ditampilkan pada website.
                    </p>
                </div>

                <!-- Right: Buttons -->
                <div class="flex items-center gap-2 text-xs font-medium">

                    <a href="javascript:void(0)" id="btn-landing"
                        class="nav-btn px-3 py-1 border border-gray-300 text-gray-600 rounded-xs hover:bg-gray-100 transition">
                        Landing Page
                    </a>

                    <a href="javascript:void(0)" id="btn-visi"
                        class="nav-btn px-3 py-1 border border-gray-300 text-gray-600 rounded-xs hover:bg-gray-100 transition">
                        Visi Misi
                    </a>

                </div>

            </div>
            <div id="section-landing">

                <form action="{{ route('admin.landingpage.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- IDENTITAS WEBSITE -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Identitas Website
                            </h3>
                        </div>

                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Nama Aplikasi
                                </label>

                                <input type="text" name="app_name" value="{{ $landing->app_name ?? '' }}"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2 focus:ring-1 focus:ring-green-500"
                                    required>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Link Brosur
                                </label>

                                <input type="text" name="leaflet_link" value="{{ $landing->leaflet_link ?? '' }}"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2 focus:ring-1 focus:ring-blue-500">
                            </div>

                        </div>
                    </div>

                    <!-- MEDIA WEBSITE -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Media Website
                            </h3>
                        </div>

                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">

                            @foreach ([
            'logo' => 'Logo',
            'hero_image' => 'Hero',
            'about_us_image' => 'Tentang Kami',
            'organization_structure' => 'Struktur',
        ] as $field => $label)
                                <div class="bg-gray-50 border border-gray-200 rounded-xs p-3">

                                    <label class="block text-xs font-medium text-gray-700 mb-2">
                                        {{ $label }}
                                    </label>

                                    <img src="{{ asset('storage/' . $landing->$field) }}"
                                        class="w-full h-28 object-cover rounded-xs border bg-white">

                                    <input type="file" name="{{ $field }}"
                                        class="mt-2 w-full text-xs border border-gray-300 rounded-xs p-1.5">

                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- KONTEN -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Konten Landing Page
                            </h3>
                        </div>

                        <div class="p-4 space-y-3">

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Hero Title
                                </label>

                                <textarea name="hero_title" rows="3" class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">{{ $landing->hero_title ?? '' }}</textarea>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Tentang Kami
                                </label>

                                <textarea name="about_us" rows="4" class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">{{ $landing->about_us ?? '' }}</textarea>
                            </div>

                        </div>
                    </div>

                    <!-- KONTAK -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Kontak
                            </h3>
                        </div>

                        <div class="p-4 grid grid-cols-1 md:grid-cols-3 gap-3">

                            @foreach (['instagram', 'email', 'whatsapp'] as $field)
                                <input type="text" name="{{ $field }}" value="{{ $landing->$field ?? '' }}"
                                    placeholder="{{ ucfirst($field) }}"
                                    class="text-sm rounded-xs border border-gray-300 px-3 py-2">
                            @endforeach

                        </div>
                    </div>

                    <!-- FOOTER -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Footer
                            </h3>
                        </div>

                        <div class="p-4 space-y-3">
                            <label class="block text-xs font-medium text-gray-700 mb-1">
                                Deskripsi Footer
                            </label>
                            <textarea name="footer_description" rows="3" class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                    {{ $landing->footer_description ?? '' }}
                </textarea>
                            <label class="block text-xs font-medium text-gray-700 mb-1">
                                Alamat
                            </label>
                            <textarea name="address" rows="3" class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                    {{ $landing->address ?? '' }}
                </textarea>

                        </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 text-xs rounded-xs bg-green-600 hover:bg-green-700 text-white font-medium">
                            Simpan
                        </button>
                    </div>

                </form>

            </div>

            <div id="section-visi" class="hidden">

                <form id="form-visi" action="{{ route('admin.landingpage.updatevisionmission') }}" method="POST">
                    @csrf
                    <!-- CARD -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm">

                        <!-- Header Card -->
                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Pengelolaan Visi & Misi
                            </h3>
                            <p class="text-xs text-gray-500 mt-0.5">
                                Kelola konten visi dan misi yang ditampilkan pada website.
                            </p>
                        </div>

                        <!-- Content -->
                        <div class="p-4">

                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">

                                <!-- VISI -->
                                <div class="bg-gray-50 border border-gray-200 rounded-xs p-4 flex flex-col">

                                    <div class="flex items-center gap-3 mb-3">

                                        <div class="w-8 h-8 rounded-xs bg-green-100 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-gray-800">
                                                Visi
                                            </h3>
                                            <p class="text-xs text-gray-500">
                                                Tujuan jangka panjang institusi
                                            </p>
                                        </div>

                                    </div>

                                    <div id="vision-editor"
                                        class="bg-white border border-gray-300 rounded-xs min-h-[140px]">
                                    </div>

                                    <input type="hidden" name="vision" id="vision">

                                </div>

                                <!-- MISI -->
                                <div class="bg-gray-50 border border-gray-200 rounded-xs p-4 flex flex-col">

                                    <div class="flex items-center gap-3 mb-3">

                                        <div class="w-8 h-8 rounded-xs bg-blue-100 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                                            </svg>
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-gray-800">
                                                Misi
                                            </h3>
                                            <p class="text-xs text-gray-500">
                                                Langkah strategis mencapai visi
                                            </p>
                                        </div>

                                    </div>

                                    <div id="mission-editor"
                                        class="bg-white border border-gray-300 rounded-xs min-h-[140px]">
                                    </div>

                                    <input type="hidden" name="mission" id="mission">

                                </div>

                            </div>

                            <!-- FOOTER -->
                            <div class="mt-4 pt-3 border-t border-gray-200 flex justify-end">
                                <button type="submit"
                                    class="px-4 py-2 text-xs rounded-xs bg-green-600 hover:bg-green-700 text-white font-medium transition">
                                    Simpan Perubahan
                                </button>
                            </div>

                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>

    <style>
        <style>#vision-editor,
        #mission-editor {
            min-height: 450px;
        }

        #vision-editor .ql-container,
        #mission-editor .ql-container {
            min-height: 390px;
        }

        #vision-editor .ql-editor,
        #mission-editor .ql-editor {
            min-height: 350px;
        }
    </style>
    </style>
    <script>
        const btnLanding = document.getElementById('btn-landing');
        const btnVisi = document.getElementById('btn-visi');

        const sectionLanding = document.getElementById('section-landing');
        const sectionVisi = document.getElementById('section-visi');

        function setActiveTab(tab) {

            // reset semua state dulu (INI KUNCI FIX)
            sectionLanding.classList.add('hidden');
            sectionVisi.classList.add('hidden');

            btnLanding.classList.remove('bg-gray-100', 'text-gray-900');
            btnVisi.classList.remove('bg-gray-100', 'text-gray-900');

            // aktifkan sesuai tab
            if (tab === 'landing') {
                sectionLanding.classList.remove('hidden');

                btnLanding.classList.add('bg-gray-100', 'text-gray-900');

            } else {
                sectionVisi.classList.remove('hidden');

                btnVisi.classList.add('bg-gray-100', 'text-gray-900');
            }
        }

        // default
        setActiveTab('landing');

        btnLanding.addEventListener('click', function() {
            setActiveTab('landing');
        });

        btnVisi.addEventListener('click', function() {
            setActiveTab('visi');
        });
    </script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        const visionQuill = new Quill('#vision-editor', {
            theme: 'snow',
            placeholder: 'Tulis visi...',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, false]
                    }],
                    ['bold', 'italic'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['clean']
                ]
            }
        });

        const missionQuill = new Quill('#mission-editor', {
            theme: 'snow',
            placeholder: 'Tulis misi...',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, false]
                    }],
                    ['bold', 'italic'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['clean']
                ]
            }
        });

        // set data lama
        visionQuill.root.innerHTML = `{!! $landing->vision ?? '' !!}`;
        missionQuill.root.innerHTML = `{!! $landing->mission ?? '' !!}`;

        document.addEventListener('DOMContentLoaded', function() {

            const form = document.getElementById('form-visi');

            form.addEventListener('submit', function() {

                document.getElementById('vision').value = visionQuill.root.innerHTML;
                document.getElementById('mission').value = missionQuill.root.innerHTML;

            });

        });
    </script>



    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@endsection
