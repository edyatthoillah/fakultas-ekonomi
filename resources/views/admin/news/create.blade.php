@extends('layouts.frontend')

@section('title', 'Tambah Berita')

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

    {{-- ERROR VALIDATION --}}
    @if ($errors->any())
        <script>
            toastr.error('Terjadi kesalahan, periksa form kembali');
        </script>
    @endif

    <div class="bg-gray-100 min-h-screen">
        <div class="mx-auto">

            <section class="section main-section bg-white p-4">

                <!-- Breadcrumb -->
                <nav class="flex text-xs text-gray-500 mb-4">
                    <ol class="inline-flex items-center space-x-1">

                        <li>
                            <a href="{{ route('dashboard') }}" class="hover:text-blue-600">
                                Dashboard
                            </a>
                        </li>

                        <li><span class="mx-1">/</span></li>

                        <li>
                            <a href="{{ route('admin.news.index') }}" class="hover:text-blue-600">
                                Berita
                            </a>
                        </li>

                        <li><span class="mx-1">/</span></li>

                        <li class="text-gray-700 font-medium">
                            Tambah Berita
                        </li>

                    </ol>
                </nav>

                <!-- HEADER -->
                <div class="border-t-4 border-green-500 pt-4 mb-4">
                    <h2 class="text-lg font-semibold text-gray-700">
                        Tambah Berita Fakultas Ekonomi
                    </h2>
                </div>

                <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" id="newsForm"
                    class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    @csrf

                    <!-- LEFT -->
                    <div class="md:col-span-2 space-y-4">

                        <!-- TITLE -->
                        <div>
                            <label class="text-sm text-gray-600">Judul Berita</label>
                            <input type="text" name="title"
                                class="w-full border border-gray-300 rounded px-3 py-2 text-sm" value="{{ old('title') }}">
                        </div>

                        <!-- CONTENT (QUILL) -->
                        <div>
                            <label class="text-sm text-gray-600">Isi Berita</label>

                            <div id="editor" class="bg-white border border-gray-300 rounded min-h-[250px]"></div>

                            <input type="hidden" name="content" id="content">
                        </div>

                        <!-- IMAGES -->
                        <div>
                            <label class="text-sm text-gray-600">Gambar Tambahan</label>
                            <input type="file" name="images[]" multiple
                                class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                        </div>

                    </div>

                    <!-- RIGHT -->
                    <div class="space-y-4">

                        <!-- THUMBNAIL -->
                        <div>
                            <label class="text-sm text-gray-600">Thumbnail</label>
                            <input type="file" name="thumbnail"
                                class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                        </div>

                        <!-- CATEGORY -->
                        <select name="category_id" class="w-full border border-gray-300 rounded px-3 py-2 text-sm">

                            <option value="">-- Pilih Kategori --</option>

                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">
                                    {{ $cat->name }}
                                </option>
                            @endforeach

                        </select>
                        <!-- TAGS -->
                        <div>
                            <label class="text-sm text-gray-600">Tags</label>
                            <div class="border p-2 rounded max-h-40 overflow-y-auto">
                                @foreach ($tags as $tag)
                                    <label class="flex items-center gap-2 text-sm">
                                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                                        {{ $tag->name }}
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- STATUS -->
                        <div>
                            <label class="text-sm text-gray-600">Status</label>
                            <select name="status" class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>

                        <!-- BUTTON -->
                        <button type="submit"
                            class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded text-sm">
                            Simpan Berita
                        </button>

                    </div>

                </form>

            </section>
        </div>
    </div>

    <!-- Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // INIT QUILL
            const quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Tulis isi berita di sini...',
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
                        ['link', 'image'],
                        ['clean']
                    ]
                }
            });

            const form = document.getElementById('newsForm');
            const contentInput = document.getElementById('content');

            // IMPORTANT: sebelum submit
            form.addEventListener('submit', function(e) {

                let html = quill.root.innerHTML;

                // safety check (biar tidak kosong/null)
                if (quill.getText().trim().length === 0) {
                    e.preventDefault();
                    toastr.error('Isi berita tidak boleh kosong');
                    return;
                }

                contentInput.value = html;
            });

        });
    </script>

@endsection
