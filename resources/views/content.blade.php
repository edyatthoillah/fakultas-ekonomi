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

                <h2 class="mt-6 text-4xl lg:text-5xl font-black tracking-tight text-[#29357A]">
                    Fakultas Ekonomi
                </h2>

                <p class="mt-5 text-gray-600 leading-8 max-w-2xl mx-auto">
                    Kumpulan data dan informasi terkait penelitian, publikasi ilmiah,
                    penghargaan, serta akreditasi yang mencerminkan capaian dan kontribusi
                    akademik institusi.
                </p>

            </div>

            <!-- Cards -->
            <div x-data="{
                open: false,
                title: '',
                image: '',
                description: ''
            }">

                <!-- GRID -->
                <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    @foreach ($contents as $item)
                        <div
                            class="group bg-white border border-[#29357A]/10 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                            <!-- IMAGE -->
                            <div class="relative aspect-[4/3] overflow-hidden">

                                <img src="{{ asset('storage/' . $item->image) }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                    alt="{{ $item->title }}">

                                <!-- Gradient overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/30 via-black/5 to-transparent opacity-0 group-hover:opacity-100 transition">
                                </div>

                                <!-- subtle badge (optional feel modern) -->
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="px-3 py-1 text-[10px] font-bold tracking-wide uppercase bg-white/80 backdrop-blur text-[#29357A] rounded-full">
                                        Content
                                    </span>
                                </div>

                            </div>

                            <!-- CONTENT -->
                            <div class="p-5">

                                <h3 class="text-lg font-bold text-[#29357A] line-clamp-2 leading-snug">
                                    {{ $item->title }}
                                </h3>

                                <p class="mt-2 text-sm text-gray-600 leading-7 line-clamp-3">
                                    {{ Str::limit(strip_tags($item->description), 180) }}
                                </p>

                                <!-- BUTTON -->
                                <button
                                    @click="
                open = true;
                title = @js($item->title);
                image = @js(asset('storage/' . $item->image));
                description = @js($item->description);
            "
                                    class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#29357A] hover:text-[#1f2c66] transition group/button">

                                    <span>Baca Selengkapnya</span>

                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/button:translate-x-1"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">

                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />

                                    </svg>

                                </button>

                            </div>

                        </div>
                    @endforeach

                </div>

                <!-- MODAL -->
                <div x-show="open" x-cloak x-transition.opacity
                    class="fixed inset-0 z-[9999] bg-black/50 backdrop-blur-sm flex items-center justify-center p-4"
                    @keydown.escape.window="open = false">

                    <!-- MODAL BOX -->
                    <div @click.away="open = false" x-transition.scale.duration.200ms
                        class="w-full max-w-2xl bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col max-h-[90vh]">

                        <!-- IMAGE (fixed) -->
                        <div class="relative flex-shrink-0">
                            <img :src="image" :alt="title" class="w-full h-44 sm:h-52 object-cover">

                            <!-- Close -->
                            <button @click="open = false"
                                class="absolute top-3 right-3 w-9 h-9 flex items-center justify-center rounded-full bg-white/90 hover:bg-white text-gray-700 transition">

                                ✕
                            </button>
                        </div>

                        <!-- CONTENT (scrollable) -->
                        <div class="p-5 md:p-6 overflow-y-auto">

                            <!-- TITLE -->
                            <h2 class="text-lg md:text-xl font-bold text-[#29357A] mb-4" x-text="title">
                            </h2>

                            <!-- DESCRIPTION -->
                            <div class="text-sm md:text-base text-gray-600 leading-7 prose max-w-none" x-html="description">
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        .prose img {
            border-radius: 12px;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .prose table {
            width: 100%;
            border-collapse: collapse;
        }

        .prose table td,
        .prose table th {
            border: 1px solid #e5e7eb;
            padding: 8px;
        }

        .prose iframe {
            width: 100%;
            min-height: 400px;
            border-radius: 12px;
        }
    </style>
@endsection
