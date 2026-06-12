@extends('layouts.app')

@section('title', 'Fasilitas Fakultas Ekonomi')

@section('content')
    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
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
                    Berbagai fasilitas modern tersedia untuk mendukung kegiatan akademik,
                    penelitian, organisasi mahasiswa, dan pengembangan kompetensi mahasiswa.
                </p>

            </div>
            <!-- Cards -->
            <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6">

                <!-- Card -->
                <!-- 1 -->

                @foreach ($facilities as $item)
                    <div
                        class="group bg-white border border-[#29357A]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                        <!-- Image -->
                        <div class="relative overflow-hidden">

                            <img src="{{ asset('storage/' . $item->image) }}"
                                class="w-full h-48 object-cover transition duration-500 group-hover:scale-105"
                                alt="Fasilitas">

                            <!-- Overlay soft -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition">
                            </div>

                        </div>

                        <!-- Content -->
                        <div class="p-4 text-center">

                            <h3
                                class="text-sm font-semibold text-[#29357A] leading-snug group-hover:text-[#1f2c66] transition">
                                {{ $item->description }}
                            </h3>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
