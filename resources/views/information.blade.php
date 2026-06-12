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
                    Kumpulan data dan informasi terkait penelitian, publikasi ilmiah, penghargaan, serta akreditasi yang
                    mencerminkan capaian dan kontribusi akademik institusi.
                </p>

            </div>


            <div x-data="{ open: false, item: {} }">

                <!-- GRID -->
                <div class="grid md:grid-cols-2 mt-14 lg:grid-cols-3 gap-6">

                    @foreach ($contents as $item)
                        <div
                            class="group bg-white border border-[#29357A]/10 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                            <!-- IMAGE -->
                            <div class="overflow-hidden aspect-[4/3]">
                                <img src="{{ asset('storage/' . $item->image) }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-700"
                                    alt="{{ $item->title }}">
                            </div>

                            <!-- CONTENT -->
                            <div class="p-5">

                                <h3 class="text-base font-bold text-[#29357A] line-clamp-1">
                                    {{ $item->title }}
                                </h3>

                                <p class="mt-2 text-sm text-black font-bold leading-6">
                                    {{ Str::limit(strip_tags($item->description), 160) }}
                                </p>

                                <button
                                    @click="
                            open = true;
                            item = {
                                title: @js($item->title),
                                image: @js(asset('storage/' . $item->image)),
                                description: @js(strip_tags($item->description))
                            }
                        "
                                    class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-[#29357A] hover:text-[#1f2c66] transition group/button">

                                    <span>Lihat selengkapnya</span>

                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/button:translate-x-1"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />

                                    </svg>

                                </button>

                            </div>

                        </div>
                    @endforeach

                </div>

                <!-- MODAL GLOBAL -->
                <div x-show="open" x-cloak x-transition.opacity
                    class="fixed inset-0 z-50 bg-black/60 backdrop-blur-md flex items-center justify-center p-4"
                    @keydown.escape.window="open = false">

                    <div @click.away="open = false" x-transition.scale.duration.200ms
                        class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh]">

                        <!-- IMAGE HERO -->
                        <div class="relative flex-shrink-0">

                            <img :src="item.image" class="w-full h-52 object-cover">

                            <button @click="open = false"
                                class="absolute top-3 right-3 w-9 h-9 flex items-center justify-center rounded-full bg-white/90 hover:bg-white text-gray-700 transition shadow">

                                ✕

                            </button>

                        </div>

                        <!-- CONTENT -->
                        <div class="p-6 overflow-y-auto">

                            <!-- LABEL -->
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-[3px] bg-[#29357A]"></div>
                                <span class="text-[11px] font-bold uppercase tracking-widest text-black">
                                    Informasi
                                </span>
                            </div>

                            <!-- TITLE -->
                            <h3 class="text-xl font-bold text-[#29357A] mb-4" x-text="item.title">
                            </h3>

                            <!-- DESCRIPTION -->
                            <div class="text-sm text-black font-bold leading-7" x-text="item.description">
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
