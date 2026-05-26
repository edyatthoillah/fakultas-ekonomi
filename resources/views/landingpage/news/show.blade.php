@extends('layouts.app')

@section('title', $news->title)

@section('content')

    <section class="py-20 bg-bg-light dark:bg-[#181818]">

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- CATEGORY + META -->
            <div class="mb-6 text-center">

                @if ($news->category)
                    <span class="inline-block px-3 py-1 text-xs bg-blue-100 text-blue-700 rounded-full">
                        {{ $news->category->name }}
                    </span>
                @endif

                <h1 class="mt-4 text-3xl sm:text-4xl font-bold text-[#29357A] dark:text-white">
                    {{ $news->title }}
                </h1>

                <div class="mt-3 text-sm text-gray-500 dark:text-gray-400 flex justify-center gap-4">

                    <span>
                        📅 {{ $news->created_at->format('d M Y') }}
                    </span>

                    <span>
                        👁 {{ $news->views ?? 0 }} views
                    </span>

                    <span>
                        ✍ {{ $news->user->name ?? 'Admin' }}
                    </span>

                </div>

            </div>

            <!-- THUMBNAIL -->
            @if ($news->thumbnail)
                <div class="mb-8">
                    <img src="{{ asset('storage/' . $news->thumbnail) }}"
                        class="w-full h-[400px] object-cover rounded-lg shadow">
                </div>
            @endif

            @if ($news->images->count())
                <div class="my-10">

                    <h3 class="text-lg font-semibold text-[#29357A] dark:text-white mb-4">
                        Galeri Kegiatan
                    </h3>

                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">

                        @foreach ($news->images as $image)
                            <a href="{{ asset('storage/' . $image->image_path) }}" target="_blank">

                                <img src="{{ asset('storage/' . $image->image_path) }}"
                                    class="w-full h-32 object-cover rounded-lg shadow hover:scale-105 transition">

                            </a>
                        @endforeach

                    </div>

                </div>
            @endif

            <!-- CONTENT -->
            <div class="prose max-w-none dark:prose-invert text-gray-700 dark:text-gray-300">
                {!! $news->content !!}
            </div>

            <!-- TAGS -->
            @if ($news->tags->count())
                <div class="mt-10 flex flex-wrap gap-2">

                    @foreach ($news->tags as $tag)
                        <span class="px-3 py-1 text-xs bg-green-100 text-green-700 rounded-full">
                            #{{ $tag->name }}
                        </span>
                    @endforeach

                </div>
            @endif

            <!-- RELATED NEWS -->
            @if (isset($relatedNews) && $relatedNews->count())
                <div class="mt-16">

                    <h2 class="text-xl font-bold text-[#29357A] dark:text-white mb-6">
                        Berita Terkait
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                        @foreach ($relatedNews as $item)
                            <a href="{{ route('news.frontend.show', $item->slug) }}"
                                class="bg-white dark:bg-[#1f1f1f] rounded-lg shadow overflow-hidden block">

                                @if ($item->thumbnail)
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" class="w-full h-40 object-cover">
                                @endif

                                <div class="p-4">

                                    <h3 class="font-semibold text-gray-800 dark:text-white">
                                        {{ $item->title }}
                                    </h3>

                                    <p class="text-xs text-gray-500 mt-1">
                                        {{ $item->created_at->format('d M Y') }}
                                    </p>

                                </div>

                            </a>
                        @endforeach

                    </div>

                </div>
            @endif

        </div>

    </section>

@endsection
