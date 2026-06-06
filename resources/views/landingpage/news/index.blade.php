@extends('layouts.app')

@section('title', 'Berita Fakultas Ekonomi')

@section('content')

    <!-- NEWS SECTION -->
    <section id="berita" class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADER -->
            <div class="text-center max-w-3xl mt-4 mx-auto">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                    Berita Terbaru
                </span>

                <h2 class="mt-6 text-4xl lg:text-4xl font-black tracking-tight text-[#29357A]">
                    Berita Fakultas Ekonomi
                </h2>

                <p class="mt-5 text-gray-600 leading-8 max-w-2xl mx-auto">
                    Kumpulan informasi terbaru seputar kegiatan akademik, pengumuman, seminar,
                    prestasi mahasiswa, dan berbagai aktivitas Fakultas Ekonomi yang terus berkembang.
                </p>

            </div>
            <!-- OPTIONAL: NEWS GRID (SIAP NANTI) -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @forelse ($news as $item)
                    <div
                        class="group bg-white rounded-2xl overflow-hidden border border-[#29357A]/10 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                        <!-- IMAGE -->
                        <div class="relative overflow-hidden">

                            @if ($item->thumbnail)
                                <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}"
                                    class="w-full h-56 object-cover group-hover:scale-105 transition duration-700">
                            @endif

                            <!-- Overlay Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                            </div>

                            <!-- Category -->
                            @if ($item->category)
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1 bg-white/95 backdrop-blur text-[#29357A] text-[11px] font-bold tracking-wide rounded-lg">
                                        {{ $item->category->name }}
                                    </span>
                                </div>
                            @endif

                        </div>

                        <!-- CONTENT -->
                        <div class="p-5">

                            <!-- Title -->
                            <h3
                                class="text-lg font-black text-[#29357A] leading-snug line-clamp-2 group-hover:text-[#1f2c66] transition">
                                {{ $item->title }}
                            </h3>

                            <!-- Divider -->
                            <div class="w-12 h-1 bg-[#29357A] rounded-full mt-3 mb-4"></div>

                            <!-- Excerpt -->
                            <p class="text-sm text-gray-600 leading-7 line-clamp-3">
                                {{ Str::limit(strip_tags($item->content), 120) }}
                            </p>

                            <!-- Footer -->
                            <div class="mt-5 flex items-center justify-between">

                                <span class="text-xs text-gray-400">
                                    {{-- {{ $item->created_at->translatedFormat('d M Y') }} --}}
                                </span>

                                <a href="{{ route('news.frontend.show', $item->slug) }}"
                                    class="inline-flex items-center gap-2 text-sm font-semibold text-[#29357A] hover:text-[#1f2c66] transition group/link">

                                    <span>Baca Selengkapnya</span>

                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/link:translate-x-1"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />

                                    </svg>

                                </a>

                            </div>

                        </div>

                    </div>

                @empty

                    <div class="col-span-full text-center text-gray-500">
                        Belum ada berita tersedia.
                    </div>
                @endforelse

            </div>

            <!-- PAGINATION -->
            <!-- PAGINATION -->
            @if ($news->hasPages())
                <div class="mt-14 flex justify-center">

                    <div class="flex items-center gap-2">

                        {{-- Previous --}}
                        @if ($news->onFirstPage())
                            <span
                                class="w-11 h-11 flex items-center justify-center rounded-xl border border-gray-200 text-gray-300 cursor-not-allowed">
                                <i class="fa-solid fa-chevron-left text-sm"></i>
                            </span>
                        @else
                            <a href="{{ $news->previousPageUrl() }}"
                                class="w-11 h-11 flex items-center justify-center rounded-xl border border-[#29357A]/15 text-[#29357A] hover:bg-[#29357A]/5 transition">
                                <i class="fa-solid fa-chevron-left text-sm"></i>
                            </a>
                        @endif

                        {{-- Number --}}
                        @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                            @if ($page == $news->currentPage())
                                <span
                                    class="w-11 h-11 flex items-center justify-center rounded-xl bg-[#29357A] text-white font-semibold shadow-md">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}"
                                    class="w-11 h-11 flex items-center justify-center rounded-xl border border-[#29357A]/15 text-[#29357A] hover:bg-[#29357A]/5 transition">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach

                        {{-- Next --}}
                        @if ($news->hasMorePages())
                            <a href="{{ $news->nextPageUrl() }}"
                                class="w-11 h-11 flex items-center justify-center rounded-xl border border-[#29357A]/15 text-[#29357A] hover:bg-[#29357A]/5 transition">
                                <i class="fa-solid fa-chevron-right text-sm"></i>
                            </a>
                        @else
                            <span
                                class="w-11 h-11 flex items-center justify-center rounded-xl border border-gray-200 text-gray-300 cursor-not-allowed">
                                <i class="fa-solid fa-chevron-right text-sm"></i>
                            </span>
                        @endif

                    </div>

                </div>
            @endif

        </div>

    </section>

@endsection
