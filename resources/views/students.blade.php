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
            <div class="mt-14 grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Card -->
                <!-- 1 -->

                @foreach ($students as $item)
                    <div
                        class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-sm hover:shadow-xl transition duration-300">

                        <!-- IMAGE -->
                        <div class="overflow-hidden">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                class="w-full object-cover group-hover:scale-105 transition duration-500">
                        </div>

                        <!-- CONTENT -->
                        <div class="p-4">

                            <!-- TITLE -->
                            <h3 class="text-sm font-bold text-[#29357A] dark:text-white mb-1 line-clamp-1">
                                {{ $item->name }}
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
                                <div x-show="open" x-transition
                                    class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

                                    <div
                                        class="bg-white dark:bg-[#202020] w-[90%] md:w-[600px] p-5 rounded-xs shadow-lg relative">

                                        <!-- CLOSE -->
                                        <button @click="open = false"
                                            class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-sm">
                                            ✕
                                        </button>

                                        <!-- TITLE -->
                                        <h3 class="text-sm font-bold text-[#29357A] mb-3">
                                            {{ $item->name }}
                                        </h3>

                                        <!-- FULL DESCRIPTION -->
                                        <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                                            {{ $item->description }}
                                        </p>

                                        <!-- OPTIONAL INFO -->
                                        @if ($item->institution)
                                            <p class="text-xs mt-3 text-gray-500">
                                                {{ $item->institution }}
                                            </p>
                                        @endif

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
