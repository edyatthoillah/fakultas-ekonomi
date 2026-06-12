@extends('layouts.app')

@section('title', 'Fasilitas Fakultas Ekonomi')

@section('content')
    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mt-4 mx-auto">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                    {{ strtoupper($category->name) }}
                </span>

                <h2 class="mt-6 text-4xl lg:text-4xl font-black tracking-tight text-[#29357A]">
                    Fakultas Ekonomi
                </h2>

                <p class="mt-5 text-black font-bold leading-8 max-w-2xl mx-auto">
                    Kumpulan data dan informasi terkait penelitian, publikasi ilmiah,
                    penghargaan, serta akreditasi yang mencerminkan capaian dan kontribusi
                    akademik institusi.
                </p>

            </div>

            <!-- WRAPPER ALPINE -->
            <div x-data="{ open: false, item: {} }">

                <!-- CARDS -->
                <div class="mt-14 grid grid-cols-2 md:grid-cols-3 gap-6">

                    @foreach ($students as $item)
                        <div
                            class="group bg-white border border-[#29357A]/10 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                            <!-- IMAGE -->
                            <div class="overflow-hidden aspect-[4/3]">
                                <img src="{{ asset('storage/' . $item->image) }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                                    alt="{{ $item->name }}">
                            </div>

                            <!-- CONTENT -->
                            <div class="p-5">

                                <h3 class="text-base font-bold text-[#29357A] mb-2 line-clamp-1">
                                    {{ $item->name }}
                                </h3>

                                <p class="text-sm text-black font-bold leading-6">
                                    {{ Str::limit(trim(strip_tags(html_entity_decode($item->description))), 160) }}
                                </p>

                                <!-- BUTTON -->
                                <div class="mt-4">
                                    <button
                                        @click="
                                            open = true;
                                            item = {
                                                name: @js($item->name),
                                                institution: @js($item->institution),
                                                image: @js(asset('storage/' . $item->image)),
                                                description: @js(trim(strip_tags(html_entity_decode($item->description))))
                                            }
                                        "
                                        class="inline-flex items-center gap-1 text-sm font-semibold text-[#29357A] hover:text-[#1f2c66] transition group/button">

                                        <span>Lihat selengkapnya</span>

                                        <svg class="w-4 h-4 transition-transform duration-300 group-hover/button:translate-x-1"
                                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">

                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />

                                        </svg>

                                    </button>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>

                <!-- MODAL (GLOBAL - FIXED) -->
                <div x-show="open" x-cloak x-transition.opacity
                    class="fixed inset-0 z-50 bg-black/60 backdrop-blur-md flex items-center justify-center p-4"
                    @keydown.escape.window="open = false">

                    <div @click.away="open = false" x-transition.scale.duration.200ms
                        class="w-full max-w-xl bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh]">

                        <!-- IMAGE -->
                        <div class="relative flex-shrink-0">

                            <img :src="item.image" alt="image" class="w-full h-52 object-cover">

                            <!-- CLOSE -->
                            <button @click="open = false"
                                class="absolute top-3 right-3 w-9 h-9 flex items-center justify-center rounded-full bg-white/90 hover:bg-white text-gray-700 transition shadow">
                                ✕
                            </button>

                        </div>

                        <!-- TITLE SECTION (NO OVERLAP) -->
                        <div class="px-6 pt-5 pb-3 border-b border-gray-100">

                            <h3 class="text-lg font-bold text-black leading-snug" x-text="item.name">
                            </h3>

                            <p class="text-sm text-black font-bold mt-1" x-show="item.institution"
                                x-text="item.institution">
                            </p>

                        </div>

                        <!-- CONTENT -->
                        <div class="p-6 overflow-y-auto">

                            <p class="text-sm leading-7 text-black font-bold" x-text="item.description">
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
