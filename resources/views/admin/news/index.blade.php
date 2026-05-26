@extends('layouts.frontend')

@section('title', 'Berita Fakultas Ekonomi')

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
    @foreach (['success', 'successedit', 'successdelete'] as $msg)
        @if (Session::has($msg))
            <script>
                toastr.success('{{ Session::get($msg) }}');
            </script>
        @endif
    @endforeach

    {{-- ERROR --}}
    @if (session('error'))
        <script>
            toastr.error('{{ session('error') }}');
        </script>
    @endif

    <div class="bg-gray-100 min-h-screen">
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
                            <span class="text-gray-700 font-medium">Berita</span>
                        </li>

                    </ol>
                </nav>

                <!-- HEADER -->
                <div class="border-t-4 border-green-500 pt-4 flex justify-between items-center mb-4">

                    <h2 class="text-lg font-semibold text-gray-700">
                        Berita Fakultas Ekonomi
                    </h2>

                    <a href="{{ route('admin.news.create') }}"
                        class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-xs rounded">
                        + Tambah Berita
                    </a>

                </div>

                <!-- TABLE -->
                <div class="bg-white border border-gray-300 shadow-sm p-4 rounded">

                    <table id="newsTable" class="w-full text-sm border border-gray-200">
                        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                            <tr>
                                <th class="px-3 py-2 border">No</th>
                                <th class="px-3 py-2 border">Thumbnail</th>
                                <th class="px-3 py-2 border">Judul</th>
                                <th class="px-3 py-2 border">Kategori</th>
                                <th class="px-3 py-2 border">Status</th>
                                <th class="px-3 py-2 border">Views</th>
                                <th class="px-3 py-2 border">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($news as $data)
                                <tr class="hover:bg-gray-50">

                                    <td class="text-center px-3 py-2 border">
                                        {{ $loop->iteration }}
                                    </td>

                                    <!-- THUMBNAIL -->
                                    <td class="px-3 py-2 border">
                                        @if ($data->thumbnail)
                                            <img src="{{ asset('storage/' . $data->thumbnail) }}"
                                                class="h-16 w-16 object-cover rounded">
                                        @else
                                            <span class="text-gray-400 text-xs">No image</span>
                                        @endif
                                    </td>

                                    <!-- TITLE -->
                                    <td class="px-3 py-2 border font-medium text-gray-700">
                                        {{ $data->title }}
                                    </td>

                                    <!-- CATEGORY -->
                                    <td class="px-3 py-2 border">
                                        {{ $data->category->name ?? '-' }}
                                    </td>

                                    <!-- STATUS -->
                                    <td class="px-3 py-2 border">
                                        @if ($data->status == 'published')
                                            <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                                                Published
                                            </span>
                                        @else
                                            <span class="px-2 py-1 text-xs bg-gray-200 text-gray-600 rounded">
                                                Draft
                                            </span>
                                        @endif
                                    </td>

                                    <!-- VIEWS -->
                                    <td class="px-3 py-2 border text-center">
                                        {{ $data->views }}
                                    </td>

                                    <!-- ACTION -->
                                    <td class="px-3 py-2 border">
                                        <div class="inline-flex">

                                            <!-- EDIT -->
                                            <a href="{{ route('admin.news.edit', $data->id) }}"
                                                class="px-3 py-1 text-xs bg-yellow-500 hover:bg-yellow-600 text-white rounded-l">
                                                Edit
                                            </a>

                                            <!-- SHOW -->
                                            <a href="{{ route('admin.news.show', $data->id) }}"
                                                class="px-3 py-1 text-xs bg-blue-500 hover:bg-blue-600 text-white">
                                                View
                                            </a>

                                            <!-- DELETE -->
                                            <form action="{{ route('admin.news.destroy', $data->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus berita ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="px-3 py-1 text-xs bg-red-600 hover:bg-red-700 text-white rounded-r">
                                                    Delete
                                                </button>

                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </section>
        </div>
    </div>

    <!-- DATA TABLE -->
    <script>
        $(document).ready(function() {
            $('#newsTable').DataTable({
                pageLength: 5,
                responsive: true
            });
        });
    </script>

    <script src="{{ asset('assets/js/main.min.js?v=1772427751095') }}"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

@endsection
