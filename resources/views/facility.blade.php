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

                    Berbagai fasilitas modern tersedia untuk mendukung kegiatan akademik,
                    penelitian, organisasi mahasiswa, dan pengembangan kompetensi mahasiswa.
                </p>
            </div>

            <!-- Cards -->
            <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">

                <!-- Card -->
                <!-- 1 -->

                @foreach ($facilities as $item)
                    <div
                        class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                        <img src="{{ asset('storage/' . $item->image) }}"
                            class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                        <div class="p-4 text-center">
                            <h3 class="text-sm font-bold text-[#29357A] dark:text-white">{{ $item->description }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
