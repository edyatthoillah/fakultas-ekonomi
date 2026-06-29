@extends('layouts.app')

@section('title', $news->title)

@section('content')

    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <!-- HEADER -->
            <div class="max-w-4xl mx-auto text-center mb-12">

                @if ($news->category)
                    <span
                        class="inline-flex items-center px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-xs font-black tracking-[0.15em] rounded-lg uppercase">
                        {{ $news->category->name }}
                    </span>
                @endif

                <h1 class="mt-6 text-3xl lg:text-5xl font-black text-[#29357A] leading-tight">
                    {{ $news->title }}
                </h1>

                {{-- <div class="mt-6 flex flex-wrap justify-center gap-3">

                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-gray-50 border border-gray-100 text-sm text-gray-600">

                        <svg class="w-4 h-4 text-[#29357A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>

                        {{ $news->published_at?->translatedFormat('d F Y') }}
                    </div>

                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-gray-50 border border-gray-100 text-sm text-gray-600">

                        <svg class="w-4 h-4 text-[#29357A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>

                        {{ $news->user->name ?? 'Administrator' }}
                    </div>

                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-gray-50 border border-gray-100 text-sm text-gray-600">

                        <svg class="w-4 h-4 text-[#29357A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>

                        {{ number_format($news->views) }} kali dibaca
                    </div>

                </div> --}}

            </div>

            <!-- THUMBNAIL -->
            @if ($news->thumbnail)
                <div class="mb-8">
                    <img src="{{ asset('storage/' . $news->thumbnail) }}"
                        class="w-full h-[400px] object-cover rounded-lg shadow">
                </div>
            @endif

        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-12 gap-10">
            <div class="lg:col-span-8">


                <!-- CONTENT -->
                <div
                    class="prose prose-lg max-w-none

                        text-black

                        prose-headings:text-[#29357A]
                        prose-headings:font-bold
                        prose-headings:scroll-mt-24

                        prose-p:text-black
                        prose-p:leading-8
                        prose-p:mb-5

                        prose-strong:text-black
                        prose-strong:font-semibold

                        prose-li:text-black
                        prose-li:leading-8

                        prose-blockquote:border-l-4
                        prose-blockquote:border-[#29357A]
                        prose-blockquote:bg-[#29357A]/5
                        prose-blockquote:py-2
                        prose-blockquote:px-4
                        prose-blockquote:italic

                        prose-a:text-[#29357A]
                        prose-a:no-underline
                        hover:prose-a:text-[#1f2c66]

                        prose-img:rounded-2xl
                        prose-img:shadow-lg
                        prose-img:mx-auto

                        prose-table:w-full
                        prose-table:border-collapse

                        prose-th:border
                        prose-th:border-gray-300
                        prose-th:bg-gray-100
                        prose-th:p-3

                        prose-td:border
                        prose-td:border-gray-300
                        prose-td:p-3

                        prose-ul:list-disc
                        prose-ol:list-decimal

                        prose-hr:border-gray-200
">
                    {!! $news->content !!}
                </div>

                @if ($news->images->count())
                    <div class="my-10">

                        <h3 class="text-lg font-semibold text-black mb-4">
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
            </div>

            <aside class="lg:col-span-4 space-y-6 sticky top-24 self-start">

                <!-- POPULAR NEWS -->
                <div class="bg-white border border-gray-300 rounded-sm shadow-sm">
                    <div class="px-4 py-3 border-b border-gray-200">
                        <h3 class="text-sm font-bold text-[#29357A] uppercase tracking-wide">
                            Berita Populer
                        </h3>
                    </div>

                    <div class="divide-y divide-gray-100">
                        @foreach ($popularNews as $item)
                            <a href="{{ route('news.frontend.show', $item->slug) }}"
                                class="flex gap-3 p-4 hover:bg-gray-50 transition">

                                @if ($item->thumbnail)
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}"
                                        class="w-14 h-14 rounded-sm object-cover border border-gray-200">
                                @endif

                                <div class="flex-1 min-w-0">
                                    <h4
                                        class="text-xs font-semibold text-gray-900 line-clamp-2 leading-snug group-hover:text-[#29357A]">
                                        {{ $item->title }}
                                    </h4>

                                    <p class="text-[11px] text-gray-500 mt-1">
                                        {{ $item->published_at?->translatedFormat('d M Y') }}
                                    </p>
                                </div>

                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- CATEGORY -->
                <div class="bg-white border border-gray-300 rounded-sm shadow-sm">
                    <div class="px-4 py-3 border-b border-gray-200">
                        <h3 class="text-sm font-bold text-[#29357A] uppercase tracking-wide">
                            Kategori
                        </h3>
                    </div>

                    <div class="p-4">
                        <div class="text-xs font-semibold text-gray-800 mb-3">
                            {{ $news->category->name ?? '-' }}
                        </div>

                        <div class="divide-y divide-gray-100">
                            @foreach ($relatedNews as $item)
                                <a href="{{ route('news.frontend.show', $item->slug) }}"
                                    class="block py-3 hover:bg-gray-50 transition">

                                    <h4 class="text-xs font-medium text-gray-900 line-clamp-2 leading-snug">
                                        {{ $item->title }}
                                    </h4>

                                    <p class="text-[11px] text-gray-500 mt-1">
                                        {{ $item->published_at?->translatedFormat('d M Y') }}
                                    </p>

                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- STATISTICS -->
                <div class="bg-white border border-gray-300 rounded-sm shadow-sm">
                    <div class="px-4 py-3 border-b border-gray-200">
                        <h3 class="text-sm font-bold text-[#29357A] uppercase tracking-wide">
                            Statistik
                        </h3>
                    </div>

                    <div class="p-4 space-y-3 text-xs">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Dibaca</span>
                            <span class="font-semibold text-gray-900">{{ number_format($news->views) }}</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-600">Kategori</span>
                            <span class="font-semibold text-gray-900">
                                {{ $news->category->name ?? '-' }}
                            </span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-600">Tag</span>
                            <span class="font-semibold text-gray-900">
                                {{ $news->tags->count() }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-8 border-t border-gray-200">

                    <h3 class="text-base font-bold text-[#29357A] mb-4">
                        Bagikan Berita
                    </h3>

                    <div class="flex flex-wrap gap-2">

                        <!-- WhatsApp -->
                        <a href="https://wa.me/?text={{ urlencode($news->title . ' ' . request()->url()) }}"
                            target="_blank"
                            class="inline-flex items-center gap-2 px-3 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-700 hover:border-green-500 hover:text-green-600 hover:shadow-sm transition-all duration-200">

                            <i class="fab fa-whatsapp text-green-500"></i>
                            <span>WhatsApp</span>

                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                            target="_blank"
                            class="inline-flex items-center gap-2 px-3 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-700 hover:border-blue-500 hover:text-blue-600 hover:shadow-sm transition-all duration-200">

                            <i class="fab fa-facebook-f text-blue-600"></i>
                            <span>Facebook</span>

                        </a>

                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}"
                            target="_blank"
                            class="inline-flex items-center gap-2 px-3 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-700 hover:border-sky-600 hover:text-sky-700 hover:shadow-sm transition-all duration-200">

                            <i class="fab fa-linkedin-in text-sky-700"></i>
                            <span>LinkedIn</span>

                        </a>

                        <!-- Copy Link -->
                        <button onclick="navigator.clipboard.writeText('{{ request()->url() }}')"
                            class="inline-flex items-center gap-2 px-3 py-2 rounded-md border border-gray-200 bg-white text-sm font-medium text-gray-700 hover:border-[#29357A] hover:text-[#29357A] hover:shadow-sm transition-all duration-200">

                            <i class="fa-solid fa-link text-xs"></i>
                            <span>Salin Link</span>

                        </button>

                    </div>

                </div>

                <!-- TAGS -->
                @if ($news->tags->count())
                    <div class="mt-10">

                        <h3 class="font-semibold text-[#29357A] mb-4">
                            Tag Berita
                        </h3>

                        <div class="flex flex-wrap gap-2">

                            @foreach ($news->tags as $tag)
                                <span
                                    class="px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 rounded-full text-sm text-[#29357A] font-medium">
                                    #{{ $tag->name }}
                                </span>
                            @endforeach

                        </div>

                    </div>
                @endif

                <!-- RELATED NEWS -->
                @if ($relatedNews->count())

                    <div class="mt-20">

                        <div class="flex items-center justify-between mb-8">

                            <h2 class="text-2xl font-black text-[#29357A]">
                                Berita Terkait
                            </h2>

                            <div class="w-20 h-1 bg-[#29357A] rounded-full"></div>

                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            @foreach ($relatedNews as $item)
                                <a href="{{ route('news.frontend.show', $item->slug) }}"
                                    class="group bg-white rounded-2xl overflow-hidden border border-[#29357A]/10 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all">

                                    @if ($item->thumbnail)
                                        <img src="{{ asset('storage/' . $item->thumbnail) }}"
                                            class="w-full h-48 object-cover group-hover:scale-105 transition duration-700">
                                    @endif

                                    <div class="p-5">

                                        <div class="text-xs text-gray-500 mb-2">
                                            {{ $item->published_at?->translatedFormat('d M Y') }}
                                        </div>

                                        <h3 class="font-bold text-[#29357A] line-clamp-2 group-hover:text-[#1f2c66]">

                                            {{ $item->title }}

                                        </h3>

                                    </div>

                                </a>
                            @endforeach

                        </div>

                    </div>

                @endif

            </aside>

        </div>

    </section>

@endsection
