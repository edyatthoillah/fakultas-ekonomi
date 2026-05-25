@extends('layouts.app')

@section('title', 'Fasilitas Fakultas Ekonomi')

@section('content')
    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-20 bg-bg-light dark:bg-[#181818]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto">

                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-[#29357A]/10 text-[#29357A] dark:text-blue-300 text-[11px] font-bold tracking-[0.18em] uppercase">

                    {{ $category->name }}
                </span>

                <h2 class="mt-5 text-3xl sm:text-4xl font-black tracking-tight text-[#29357A] dark:text-white">

                    Fakultas Ekonomi
                </h2>

                <p class="mt-5 text-[15px] leading-8 text-gray-600 dark:text-gray-300">
                    Kumpulan data dan informasi terkait penelitian, publikasi ilmiah, penghargaan, serta akreditasi yang
                    mencerminkan capaian dan kontribusi akademik institusi.
                </p>
            </div>

            <!-- Cards -->
            <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card -->
                <!-- 1 -->

                @foreach ($contents as $item)
                    <div
                        class="group h-full bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-sm hover:shadow-xl transition duration-300">

                        <!-- IMAGE -->
                        <div class="overflow-hidden">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                class="w-full h-56 object-cover group-hover:scale-105 transition duration-500">
                        </div>

                        <!-- CONTENT -->
                        <div class="p-4">

                            <!-- TITLE -->
                            <h3 class="text-sm font-bold text-[#29357A] dark:text-white mb-1 line-clamp-1">
                                {{ $item->title }}
                            </h3>

                            <div x-data="{ open: false }">

                                <!-- DESCRIPTION SHORT -->
                                <p class="text-xs text-gray-500 dark:text-gray-300 leading-relaxed">
                                    {{ Str::limit($item->description, 200) }}
                                </p>

                                <!-- BUTTON -->
                                <button @click="open = true" class="mt-1 text-[11px] text-blue-600 hover:underline">

                                    Lihat selengkapnya
                                </button>

                                <!-- MODAL / POPUP -->
                                <!-- MODAL -->
                                <div x-show="open" x-transition.opacity
                                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm p-4"
                                    @click.self="open = false">

                                    <div x-transition.scale
                                        class="bg-white dark:bg-[#202020] w-full max-w-2xl max-h-[90vh] overflow-y-auto rounded-xs shadow-2xl relative">

                                        <!-- Close -->
                                        <button @click="open = false"
                                            class="absolute top-3 right-3 z-10 w-9 h-9 flex items-center justify-center bg-white/90 dark:bg-[#2a2a2a] border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 hover:bg-red-500 hover:text-white transition-all duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>

                                        <!-- Image -->
                                        <div
                                            class="bg-gray-50 dark:bg-[#2a2a2a] border-b border-gray-100 dark:border-gray-800">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                                class="w-full h-auto object-contain">
                                        </div>

                                        <!-- Content -->
                                        <div class="p-6">

                                            <!-- Label -->
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="w-10 h-[3px] bg-[#29357A]"></div>
                                                <span
                                                    class="text-[11px] font-semibold uppercase tracking-widest text-gray-500 dark:text-gray-400">
                                                    Informasi
                                                </span>
                                            </div>

                                            <!-- Title -->
                                            <h3 class="text-xl font-bold text-[#29357A] dark:text-white leading-snug mb-5">
                                                {{ $item->title }}
                                            </h3>

                                            <!-- Description -->
                                            <div
                                                class="text-sm text-gray-600 dark:text-gray-300 leading-7 whitespace-pre-line text-justify">
                                                {{ $item->description }}
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
