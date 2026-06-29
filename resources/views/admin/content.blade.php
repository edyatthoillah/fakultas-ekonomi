@extends('layouts.frontend')

@section('title', 'Dashboard')

@section('content')
    <!-- Toastr -->
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "4000",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    {{-- SUCCESS --}}
    @foreach (['success', 'successedit', 'successeditgambar', 'successdelete'] as $msg)
        @if (Session::has($msg))
            <script>
                toastr.success('{{ Session::get($msg) }}');
            </script>
        @endif
    @endforeach

    {{-- ERROR GLOBAL --}}
    @if (session('error'))
        <script>
            toastr.error('{{ session('error') }}');
        </script>
    @endif

    {{-- ERROR STORE (Tambah) --}}
    @if ($errors->store->any())
        <script>
            toastr.error('Gagal menambahkan data');
        </script>
    @endif

    {{-- ERROR UPDATE (Edit) --}}
    @if ($errors->update->any())
        <script>
            toastr.error('Gagal mengupdate data');
        </script>
    @endif

    <div class=" bg-gray-100">
        <div class="mx-auto">
            <section class="section main-section bg-white p-4">
                <!-- Breadcrumb -->
                <nav class="flex text-xs text-gray-500 mb-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1">

                        <li>
                            <a href="{{ route('dashboard') }}" class="hover:text-blue-600">
                                Dashboard
                            </a>
                        </li>

                        <li>
                            <span class="mx-1">/</span>
                            <span>Mitra & Kerjasama</span>
                        </li>

                        <li>
                            <span class="mx-1">/</span>
                            <span class="text-gray-700 font-medium">
                                {{ $category->name }}
                            </span>
                        </li>

                    </ol>
                </nav>

                <div class="border-t-4 border-green-500 pt-4 flex gap-6 rounded-sm py-3">

                    <div class="bg-white border border-gray-300 w-full h-full shadow-sm p-4">
                        <div x-data="previewModalAdd()" @keydown.escape.window="show = false">
                            <div class="mb-4">


                                <!-- Header & Add Button -->
                                <div class="flex justify-between items-center mb-3">
                                    <h2 class="font-semibold text-gray-700 text-md">{{ $category->name }}</h2>
                                    <div class="flex gap-1">
                                        <!-- Kembali -->
                                        <!-- Kembali -->
                                        <a href="{{ route('dashboard') }}"
                                            class="flex items-center gap-1 bg-cyan-500 hover:bg-cyan-600 text-white text-xs px-3 py-1 border border-cyan-600 leading-none">
                                            <span>Kembali ke Dashboard</span>
                                        </a>

                                        <a href="{{ route('contents.print', $category->id) }}" target="_blank"
                                            class="flex items-center gap-1 bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 border border-cyan-600 leading-none">
                                            Cetak PDF
                                        </a>

                                        <!-- Tambah -->
                                        <button @click="openModalAddHero()"
                                            class="flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white text-xs px-3 py-2 border border-blue-700 leading-none">

                                            <span>Tambah</span>
                                        </button>

                                    </div>
                                </div>

                                <div x-show="show" x-transition x-init="if ({{ $errors->any() || session('error') ? 'true' : 'false' }}) show = true"
                                    class="fixed inset-0 bg-black/40 z-50 flex items-start justify-center p-4 overflow-y-auto">

                                    <div
                                        class="bg-white rounded-lg shadow-md w-full max-w-md max-h-screen overflow-y-auto relative">

                                        <!-- Header -->
                                        <div class="flex items-center justify-between p-4 border-b">
                                            <h2 class="text-base font-semibold">Tambah {{ $category->name }}</h2>
                                            <button @click="show = false"
                                                class="text-gray-400 hover:text-gray-600 text-xl leading-none">
                                                &times;
                                            </button>
                                        </div>

                                        <!-- Content -->
                                        <div class="px-4 pb-4">
                                            <form id="createContentForm" action="{{ route('admin.content.store') }}"
                                                method="POST" class="space-y-4">

                                                @csrf

                                                <!-- CATEGORY ID -->
                                                <input type="hidden" name="content_category_id"
                                                    value="{{ $category->id }}">

                                                <!-- NAMA MITRA -->
                                                <div>
                                                    <x-input-label value="Nama Mitra" class="text-sm" />

                                                    <input type="text" name="title" value="{{ old('title') }}"
                                                        class="mt-1 block w-full text-sm border-gray-300 rounded-md shadow-sm px-3 py-2"
                                                        placeholder="Masukkan nama mitra">

                                                    @error('title')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <!-- MASA BERLAKU AWAL -->
                                                <div>
                                                    <x-input-label value="Masa Berlaku Awal" class="text-sm" />

                                                    <input type="date" name="valid_from" value="{{ old('valid_from') }}"
                                                        class="mt-1 block w-full text-sm border-gray-300 rounded-md shadow-sm px-3 py-2">

                                                    @error('valid_from')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <!-- MASA BERLAKU AKHIR -->
                                                <div>
                                                    <x-input-label value="Masa Berlaku Akhir" class="text-sm" />

                                                    <input type="date" name="valid_until"
                                                        value="{{ old('valid_until') }}"
                                                        class="mt-1 block w-full text-sm border-gray-300 rounded-md shadow-sm px-3 py-2">

                                                    @error('valid_until')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <!-- LINK DOKUMEN -->
                                                <div>
                                                    <x-input-label value="Link Dokumen" class="text-sm" />

                                                    <input type="url" name="document_url"
                                                        value="{{ old('document_url') }}"
                                                        class="mt-1 block w-full text-sm border-gray-300 rounded-md shadow-sm px-3 py-2"
                                                        placeholder="https://">

                                                    @error('document_url')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <!-- ACTION -->
                                                <div class="flex justify-end gap-2 pt-2">

                                                    <button type="button" @click="show=false"
                                                        class="bg-gray-400 hover:bg-gray-500 text-white text-sm px-3 py-1.5 rounded-md">
                                                        Close
                                                    </button>

                                                    <button type="submit"
                                                        class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1.5 rounded-md">
                                                        Simpan
                                                    </button>

                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Table News -->
                            <div x-data="modalEditInformation()" class="overflow-x-auto bg-white shadow-sm rounded">

                                <table class="w-full text-sm border border-gray-200">
                                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                                        <tr>
                                            <th class="px-3 py-2 border w-14">No</th>
                                            <th class="px-3 py-2 border">Nama Mitra</th>
                                            <th class="px-3 py-2 border">Masa Berlaku Awal</th>
                                            <th class="px-3 py-2 border">Masa Berlaku Akhir</th>
                                            <th class="px-3 py-2 border">Dokumen</th>
                                            <th class="px-3 py-2 border w-40">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($contents as $data)
                                            <tr class="hover:bg-gray-50">

                                                <!-- No -->
                                                <td class="text-center px-3 py-2 border">
                                                    {{ $contents->firstItem() + $loop->index }}
                                                </td>

                                                <!-- Nama Mitra -->
                                                <td class="px-3 py-2 border font-medium">
                                                    {{ $data->title }}
                                                </td>

                                                <!-- Masa Berlaku Awal -->
                                                <td class="px-3 py-2 border text-center">
                                                    {{ \Carbon\Carbon::parse($data->valid_from)->format('d M Y') }}
                                                </td>

                                                <!-- Masa Berlaku Akhir -->
                                                <td class="px-3 py-2 border text-center">
                                                    {{ \Carbon\Carbon::parse($data->valid_until)->format('d M Y') }}
                                                </td>

                                                <!-- Dokumen -->
                                                <td class="px-3 py-2 border text-center">
                                                    @if ($data->document_url)
                                                        <a href="{{ $data->document_url }}" target="_blank"
                                                            class="text-blue-600 hover:text-blue-800 underline">
                                                            Lihat Dokumen
                                                        </a>
                                                    @else
                                                        <span class="text-gray-400">
                                                            Tidak ada
                                                        </span>
                                                    @endif
                                                </td>

                                                <!-- Action -->
                                                <td class="px-3 py-2 border">
                                                    <div class="inline-flex">

                                                        <!-- EDIT -->
                                                        <button type="button"
                                                            @click="openModal({
                                id: {{ $data->id }},
                                title: @js($data->title),
                                valid_from: @js($data->valid_from),
                                valid_until: @js($data->valid_until),
                                document_url: @js($data->document_url)
                            })"
                                                            class="px-3 py-1 text-xs bg-yellow-500 hover:bg-yellow-600 text-white border border-yellow-700 rounded-l transition">
                                                            Edit
                                                        </button>

                                                        <!-- DELETE -->
                                                        <form action="{{ route('admin.content.destroy', $data->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Yakin ingin menghapus data mitra ini?')">

                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit"
                                                                class="px-3 py-1 text-xs bg-red-600 hover:bg-red-700 text-white border border-red-800 rounded-r -ml-px transition">
                                                                Delete
                                                            </button>

                                                        </form>

                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center py-5 text-gray-500">
                                                    Belum ada data mitra kerja sama.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <!-- Modal Edit -->
                                <!-- Modal Edit Fasilitas -->
                                <div x-show="show" x-cloak x-transition
                                    class="fixed inset-0 bg-black/40 z-50 flex items-start justify-center p-4 overflow-y-auto">

                                    <div
                                        class="bg-white rounded-md shadow-lg w-full max-w-lg max-h-[90vh] overflow-y-auto relative">


                                        <!-- Header -->
                                        <div class="flex items-center justify-between p-4 border-b">
                                            <h2 class="text-base font-semibold">Edit {{ $category->name }}</h2>
                                            <button @click="show = false"
                                                class="text-gray-400 hover:text-gray-600 text-xl leading-none">
                                                &times;
                                            </button>
                                        </div>

                                        <!-- Content -->
                                        <div class="px-4">

                                            @if ($errors->update->any())
                                                <div class="mb-4 p-3 rounded-md border border-red-200 bg-red-50">
                                                    <ul class="list-disc pl-5 text-sm text-red-600">
                                                        @foreach ($errors->update->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <form id="editContentForm" method="POST" class="space-y-4">

                                                @csrf
                                                @method('PUT')

                                                <!-- NAMA MITRA -->
                                                <div>

                                                    <x-input-label value="Nama Mitra"
                                                        class="text-sm font-medium text-gray-700" />

                                                    <input type="text" name="title" x-model="form.title"
                                                        class="mt-1 p-3 block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">

                                                </div>

                                                <!-- MASA BERLAKU AWAL -->
                                                <div>

                                                    <x-input-label value="Masa Berlaku Awal"
                                                        class="text-sm font-medium text-gray-700" />

                                                    <input type="date" name="valid_from" x-model="form.valid_from"
                                                        class="mt-1 p-3 block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">

                                                </div>

                                                <!-- MASA BERLAKU AKHIR -->
                                                <div>

                                                    <x-input-label value="Masa Berlaku Akhir"
                                                        class="text-sm font-medium text-gray-700" />

                                                    <input type="date" name="valid_until" x-model="form.valid_until"
                                                        class="mt-1 p-3 block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">

                                                </div>

                                                <!-- LINK DOKUMEN -->
                                                <div>

                                                    <x-input-label value="Link Dokumen"
                                                        class="text-sm font-medium text-gray-700" />

                                                    <input type="url" name="document_url" x-model="form.document_url"
                                                        placeholder="https://"
                                                        class="mt-1 p-3 block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">

                                                </div>

                                                <!-- PREVIEW LINK -->
                                                <div x-show="form.document_url">

                                                    <a :href="form.document_url" target="_blank"
                                                        class="text-sm text-blue-600 hover:text-blue-800 underline">
                                                        Lihat Dokumen Saat Ini
                                                    </a>

                                                </div>

                                                <!-- Footer -->
                                                <div class="flex justify-end gap-2 border-t pt-4">

                                                    <button type="button" @click="show=false"
                                                        class="px-4 py-2 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-md">
                                                        Batal
                                                    </button>

                                                    <button type="submit"
                                                        class="px-4 py-2 text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                                                        Update
                                                    </button>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        function previewModalAdd() {
            return {
                show: false,
                data: {},
                openModalAddHero(item) {
                    this.data = item
                    this.show = true
                }
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#submittedTable').DataTable({
                pageLength: 5,
                responsive: true
            });
        });
    </script>

    <script>
        function modalEditInformation() {
            return {

                show: false,

                form: {
                    id: null,
                    title: '',
                    valid_from: '',
                    valid_until: '',
                    document_url: ''
                },

                openModal(data) {

                    this.show = true;

                    this.form = {
                        id: data.id ?? null,
                        title: data.title ?? '',
                        valid_from: data.valid_from ?? '',
                        valid_until: data.valid_until ?? '',
                        document_url: data.document_url ?? ''
                    };

                    this.$nextTick(() => {
                        document.getElementById('editContentForm').action =
                            '/admin/content/' + data.id;
                    });
                }
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <script>
        const quillDescription = new Quill('#description-editor', {
            theme: 'snow',
            placeholder: 'Masukkan deskripsi content...',
            modules: {
                toolbar: [
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
                ]
            }
        });

        const createForm = document.getElementById('createContentForm');

        createForm.addEventListener('submit', function() {
            document.getElementById('description').value =
                quillDescription.root.innerHTML;
        });
    </script>

    <script>
        let editQuill;

        document.addEventListener('DOMContentLoaded', function() {

            editQuill = new Quill('#edit-description-editor', {
                theme: 'snow',
                placeholder: 'Masukkan deskripsi...',
                modules: {
                    toolbar: [
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
                    ]
                }
            });

            editQuill.on('text-change', function() {
                document.getElementById('edit_description').value =
                    editQuill.root.innerHTML;

                document.getElementById('edit_description')
                    .dispatchEvent(new Event('input'));
            });
        });
    </script>

    <script src="{{ asset('assets/js/main.min.js?v=1772427751095') }}"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@endsection
