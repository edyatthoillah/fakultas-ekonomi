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

            </div>
            <div id="section-landing">

                <form action="{{ route('admin.study-programs.update', $studyProgram) }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <!-- IDENTITAS PROGRAM STUDI -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Identitas Program Studi
                            </h3>
                        </div>

                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Nama Program Studi
                                </label>

                                <input type="text" name="name" value="{{ old('name', $studyProgram->name) }}"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Hero Title
                                </label>

                                <input type="text" name="hero_title"
                                    value="{{ old('hero_title', $studyProgram->hero_title) }}"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                            </div>

                        </div>

                    </div>

                    <!-- MEDIA -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Media Program Studi
                            </h3>
                        </div>

                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">

                            @foreach ([
            'logo' => 'Logo',
            'hero_image' => 'Hero Image',
            'head_of_program_photo' => 'Foto Kaprodi',
            'organization_structure' => 'Struktur Organisasi',
        ] as $field => $label)
                                <div class="bg-gray-50 border border-gray-200 rounded-xs p-3">

                                    <label class="block text-xs font-medium text-gray-700 mb-2">
                                        {{ $label }}
                                    </label>

                                    @if ($studyProgram->$field)
                                        <img src="{{ asset('storage/' . $studyProgram->$field) }}"
                                            class="w-full h-28 object-cover rounded-xs border bg-white">
                                    @else
                                        <div
                                            class="w-full h-28 border rounded-xs bg-white flex items-center justify-center text-xs text-gray-400">
                                            Belum ada gambar
                                        </div>
                                    @endif

                                    <input type="file" name="{{ $field }}"
                                        class="mt-2 w-full text-xs border border-gray-300 rounded-xs p-1.5">

                                </div>
                            @endforeach

                        </div>

                    </div>

                    <!-- PROFIL -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Profil Program Studi
                            </h3>
                        </div>

                        <div class="p-4">

                            <label class="block text-xs font-medium text-gray-700 mb-1">
                                Deskripsi
                            </label>

                            <textarea name="description" rows="6" class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">{{ old('description', $studyProgram->description) }}</textarea>

                        </div>

                    </div>

                    <!-- SAMBUTAN KAPRODI -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Sambutan Kaprodi
                            </h3>
                        </div>

                        <div class="p-4 space-y-3">

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Nama Kaprodi
                                </label>

                                <input type="text" name="head_of_program"
                                    value="{{ old('head_of_program', $studyProgram->head_of_program) }}"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Sambutan Kaprodi
                                </label>

                                <textarea name="head_of_program_greeting" rows="6"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">{{ old('head_of_program_greeting', $studyProgram->head_of_program_greeting) }}</textarea>
                            </div>

                        </div>

                    </div>

                    <!-- VISI MISI -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4 ">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Visi dan Misi
                            </h3>
                        </div>

                        <!-- VISI -->
                        <div class="p-4 space-y-3">
                            <label class="block text-xs font-medium text-gray-700 mb-1">
                                Visi
                            </label>

                            <div id="vision-editor" class="bg-white min-h-[250px]"></div>

                            <input type="hidden" name="vision" id="vision-input"
                                value="{{ old('vision', $studyProgram->vision) }}">
                        </div>

                        <!-- MISI -->
                        <div class="p-4 space-y-3">
                            <label class="block text-xs font-medium text-gray-700 mb-1">
                                Misi
                            </label>

                            <div id="mission-editor" class="bg-white min-h-[350px]"></div>

                            <input type="hidden" name="mission" id="mission-input"
                                value="{{ old('mission', $studyProgram->mission) }}">
                        </div>

                    </div>

                    <!-- AKREDITASI -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Akreditasi
                            </h3>
                        </div>

                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Status Akreditasi
                                </label>

                                <input type="text" name="accreditation"
                                    value="{{ old('accreditation', $studyProgram->accreditation) }}"
                                    placeholder="Unggul / Baik Sekali / Baik"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Nomor SK Akreditasi
                                </label>

                                <input type="text" name="accreditation_number"
                                    value="{{ old('accreditation_number', $studyProgram->accreditation_number) }}"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                            </div>

                        </div>

                    </div>

                    <!-- KONTAK -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Kontak Program Studi
                            </h3>
                        </div>

                        <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Email
                                </label>

                                <input type="email" name="email" value="{{ old('email', $studyProgram->email) }}"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">
                                    Nomor Telepon
                                </label>

                                <input type="text" name="phone" value="{{ old('phone', $studyProgram->phone) }}"
                                    class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2">
                            </div>

                        </div>

                    </div>

                    <!-- BROSUR -->
                    <div class="bg-white border border-gray-200 rounded-xs shadow-sm mb-4">

                        <div class="px-4 py-2 border-b bg-gray-50">
                            <h3 class="text-sm font-semibold text-gray-800">
                                Brosur Program Studi
                            </h3>
                        </div>

                        <div class="p-4">

                            <label class="block text-xs font-medium text-gray-700 mb-1">
                                Link Brosur
                            </label>

                            <input type="url" name="brochure_file"
                                value="{{ old('brochure_file', $studyProgram->brochure_file) }}"
                                placeholder="https://drive.google.com/file/d/..."
                                class="w-full text-sm rounded-xs border border-gray-300 px-3 py-2 focus:ring-1 focus:ring-blue-500 focus:border-blue-500">

                            <p class="mt-2 text-xs text-gray-500">
                                Masukkan URL brosur dari Google Drive, OneDrive, Dropbox, atau website resmi.
                            </p>

                            @if ($studyProgram->brochure_file)
                                <div class="mt-3">

                                    <a href="{{ $studyProgram->brochure_file }}" target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 text-xs font-medium text-blue-600 hover:text-blue-800">

                                        <i class="fas fa-external-link-alt"></i>

                                        Lihat Brosur Saat Ini

                                    </a>

                                </div>
                            @endif

                            @error('brochure_file')
                                <p class="mt-2 text-xs text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 text-xs rounded-xs bg-green-600 hover:bg-green-700 text-white font-medium">
                            Simpan Perubahan
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const toolbarOptions = [
                [{
                    header: [1, 2, 3, false]
                }],
                ['bold', 'italic', 'underline'],
                [{
                    list: 'ordered'
                }, {
                    list: 'bullet'
                }],
                ['link'],
                ['clean']
            ];

            // VISI
            const visionQuill = new Quill('#vision-editor', {
                theme: 'snow',
                placeholder: 'Masukkan visi...',
                modules: {
                    toolbar: toolbarOptions
                }
            });

            visionQuill.root.innerHTML =
                document.getElementById('vision-input').value;

            visionQuill.on('text-change', function() {
                document.getElementById('vision-input').value =
                    visionQuill.root.innerHTML;
            });

            // MISI
            const missionQuill = new Quill('#mission-editor', {
                theme: 'snow',
                placeholder: 'Masukkan misi...',
                modules: {
                    toolbar: toolbarOptions
                }
            });

            missionQuill.root.innerHTML =
                document.getElementById('mission-input').value;

            missionQuill.on('text-change', function() {
                document.getElementById('mission-input').value =
                    missionQuill.root.innerHTML;
            });

        });
    </script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@endsection
