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

                    Fasilitas Fakultas
                </span>

                <h2 class="mt-5 text-3xl sm:text-4xl font-black tracking-tight text-[#29357A] dark:text-white">

                    Fasilitas Fakultas Ekonomi
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
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Ruang Kelas Modern</h3>
                    </div>
                </div>

                <!-- 2 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Laboratorium Komputer</h3>
                    </div>
                </div>

                <!-- 3 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Perpustakaan</h3>
                    </div>
                </div>

                <!-- 4 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Area WiFi Kampus</h3>
                    </div>
                </div>

                <!-- 5 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Ruang Seminar</h3>
                    </div>
                </div>

                <!-- 6 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Ruang Diskusi</h3>
                    </div>
                </div>

                <!-- 7 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Ruang Organisasi Mahasiswa
                        </h3>
                    </div>
                </div>

                <!-- 8 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Digital Library</h3>
                    </div>
                </div>

                <!-- 9 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Smart Classroom</h3>
                    </div>
                </div>

                <!-- 10 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Coworking Space</h3>
                    </div>
                </div>

                <!-- 11 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Mushola</h3>
                    </div>
                </div>

                <!-- 12 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Kantin Mahasiswa</h3>
                    </div>
                </div>

                <!-- 13 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Aula Fakultas</h3>
                    </div>
                </div>

                <!-- 14 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Ruang Dosen</h3>
                    </div>
                </div>

                <!-- 15 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Lapangan Olahraga</h3>
                    </div>
                </div>

                <!-- 16 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Pusat Karir</h3>
                    </div>
                </div>

                <!-- 17 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Studio Multimedia</h3>
                    </div>
                </div>

                <!-- 18 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Area Belajar Nyaman</h3>
                    </div>
                </div>

                <!-- 19 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Pusat Informasi Akademik</h3>
                    </div>
                </div>

                <!-- 20 -->
                <div
                    class="group bg-white dark:bg-[#202020] rounded-xs overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1497366412874-3415097a27e7?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-44 object-cover group-hover:scale-105 transition duration-500">
                    <div class="p-4 text-center">
                        <h3 class="text-sm font-bold text-[#29357A] dark:text-white">Ruang Konsultasi Mahasiswa
                        </h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
