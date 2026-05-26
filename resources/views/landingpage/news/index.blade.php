@extends('layouts.app')

@section('title', 'Berita Fakultas Ekonomi')

@section('content')

    <!-- NEWS SECTION -->
    <section id="berita" class="py-20 bg-bg-light dark:bg-[#181818]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- HEADER -->
            <div class="text-center max-w-3xl mx-auto">

                <!-- LABEL -->
                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-[#29357A]/10 text-[#29357A]
                dark:text-blue-300 text-[11px] font-bold tracking-[0.18em] uppercase">

                    Berita Terbaru
                </span>

                <!-- TITLE -->
                <h2 class="mt-5 text-3xl sm:text-4xl font-black tracking-tight text-[#29357A] dark:text-white">
                    Berita Fakultas Ekonomi
                </h2>

                <!-- DESCRIPTION -->
                <p class="mt-5 text-[15px] leading-8 text-gray-600 dark:text-gray-300">
                    Kumpulan informasi terbaru seputar kegiatan akademik, pengumuman, seminar,
                    prestasi mahasiswa, dan berbagai aktivitas Fakultas Ekonomi yang terus berkembang.
                </p>

            </div>

            <!-- OPTIONAL: NEWS GRID (SIAP NANTI) -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @forelse ($news as $item)
                    <div class="bg-white dark:bg-[#1f1f1f] rounded-lg shadow overflow-hidden">

                        <!-- IMAGE -->
                        @if ($item->thumbnail)
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" class="w-full h-48 object-cover">
                        @endif

                        <!-- CONTENT -->
                        <div class="p-4">

                            <!-- CATEGORY -->
                            @if ($item->category)
                                <span class="text-[11px] text-blue-600 font-semibold">
                                    {{ $item->category->name }}
                                </span>
                            @endif

                            <!-- TITLE -->
                            <h3 class="mt-2 font-bold text-gray-800 dark:text-white text-lg">
                                {{ $item->title }}
                            </h3>

                            <!-- EXCERPT -->
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                                {{ Str::limit(strip_tags($item->content), 100) }}
                            </p>

                            <!-- READ MORE -->
                            <a href="{{ route('news.frontend.show', $item->slug) }}"
                                class="inline-block mt-3 text-sm text-[#29357A] font-semibold hover:underline">
                                Baca Selengkapnya →
                            </a>

                        </div>

                    </div>

                @empty

                    <div class="col-span-full text-center text-gray-500">
                        Belum ada berita tersedia.
                    </div>
                @endforelse

            </div>

            <!-- PAGINATION -->
            <div class="mt-10">
                {{ $news->links() }}
            </div>

        </div>

    </section>

@endsection
