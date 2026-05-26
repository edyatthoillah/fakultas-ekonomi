@extends('layouts.frontend')

@section('title', $news->title)

@section('content')

    <!-- Toastr -->
    <script>
        toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "4000"
        }
    </script>

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
                            {{ $news->title }}
                        </li>

                    </ol>
                </nav>

                <!-- HEADER -->
                <div class="border-t-4 border-green-500 pt-4 mb-6">

                    <h1 class="text-2xl font-bold text-gray-800 mb-2">
                        {{ $news->title }}
                    </h1>

                    <div class="flex flex-wrap items-center gap-2 text-xs text-gray-500">

                        <!-- Category -->
                        @if ($news->category)
                            <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded">
                                {{ $news->category->name }}
                            </span>
                        @endif

                        <!-- Status -->
                        <span class="bg-gray-200 px-2 py-1 rounded">
                            {{ ucfirst($news->status) }}
                        </span>

                        <!-- Views -->
                        <span>
                            👁 {{ $news->views ?? 0 }} views
                        </span>

                        <!-- Date -->
                        <span>
                            {{ $news->created_at->format('d M Y') }}
                        </span>

                    </div>
                </div>

                <!-- CONTENT GRID -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                    <!-- LEFT -->
                    <div class="lg:col-span-2 space-y-6">

                        <!-- THUMBNAIL -->
                        @if ($news->thumbnail)
                            <img src="{{ asset('storage/' . $news->thumbnail) }}"
                                class="w-full h-80 object-cover rounded shadow">
                        @endif

                        <!-- IMAGES GALLERY -->
                        @if ($news->images->count())
                            <div>
                                <h3 class="font-semibold mb-2">Gambar</h3>

                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">

                                    @foreach ($news->images as $img)
                                        <img src="{{ asset('storage/' . $img->image_path) }}"
                                            class="w-full h-32 object-cover rounded">
                                    @endforeach

                                </div>
                            </div>
                        @endif

                        <!-- CONTENT -->
                        <div class="prose max-w-none text-gray-700">
                            {!! $news->content !!}
                        </div>

                    </div>

                    <!-- RIGHT -->
                    <div class="space-y-4">

                        <!-- TAGS -->
                        <div class="bg-white border p-3 rounded shadow-sm">

                            <h3 class="text-sm font-semibold mb-2">Tags</h3>

                            <div class="flex flex-wrap gap-2">

                                @forelse($news->tags as $tag)
                                    <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">
                                        #{{ $tag->name }}
                                    </span>
                                @empty
                                    <span class="text-xs text-gray-400">Tidak ada tag</span>
                                @endforelse

                            </div>

                        </div>

                        <!-- INFO -->
                        <div class="bg-white border p-3 rounded shadow-sm text-sm text-gray-600">

                            <p><b>Penulis:</b> {{ $news->user->name ?? '-' }}</p>
                            <p><b>Kategori:</b> {{ $news->category->name ?? '-' }}</p>
                            <p><b>Status:</b> {{ ucfirst($news->status) }}</p>
                            <p><b>Dibuat:</b> {{ $news->created_at->format('d M Y H:i') }}</p>

                        </div>

                    </div>

                </div>

            </section>
        </div>
    </div>

@endsection
