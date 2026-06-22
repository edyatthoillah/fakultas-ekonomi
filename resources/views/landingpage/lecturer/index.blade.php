@extends('layouts.app')

@section('title', 'Tenaga Pendidik Fakultas Ekonomi')

@section('content')
    <section id="tenaga-pengajar" class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mb-12 mt-4">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                    TENAGA PENDIDIK
                </span>

                <h2 class="mt-6 text-4xl lg:text-4xl font-black tracking-tight text-[#29357A]">
                    Dosen Fakultas Ekonomi
                </h2>

                <p class="mt-5 text-black font-bold leading-8">
                    Mengenal lebih dekat para dosen dan tenaga pengajar yang berperan
                    dalam mendukung proses pendidikan di Fakultas Ekonomi.
                </p>

            </div>
            <!-- List Dosen -->
            <div class="grid md:grid-cols-2 gap-4">

                @forelse($lecturersByProgram as $program => $lecturers)

                    <!-- Header Program Studi -->
                    <div class="mt-4">

                        <div class="mb-8">

                            <h2 class="mt-4 text-3xl font-black tracking-tight text-[#29357A]">
                                {{ $program ?: 'Program Studi Belum Ditentukan' }}
                            </h2>

                        </div>

                        <!-- Grid Tetap 2 Kolom -->
                        <div class="grid md:grid-cols-1 gap-4">

                            @foreach ($lecturers as $lecturer)
                                <a href="{{ route('lecturers.show', $lecturer->id) }}"
                                    class="group block bg-white border border-[#29357A]/10 rounded-2xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                                    <div class="grid grid-cols-[140px_1fr]">

                                        <!-- Foto -->
                                        <div class="overflow-hidden">

                                            @if ($lecturer->photo)
                                                <img src="{{ asset('storage/' . $lecturer->photo) }}"
                                                    alt="{{ $lecturer->name }}"
                                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                                            @else
                                                <div
                                                    class="w-full h-full min-h-[180px] bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                                                    No Photo
                                                </div>
                                            @endif

                                        </div>

                                        <!-- Detail -->
                                        <div class="p-5 flex flex-col justify-center">

                                            <h3
                                                class="text-xl font-black text-[#29357A] leading-snug group-hover:text-[#1f2c66] transition">
                                                {{ $lecturer->name }}
                                            </h3>

                                            <div class="mt-3 text-sm text-gray-600 space-y-1">

                                                {{-- <p>
                                                    <span class="font-semibold text-[#29357A]">NIP:</span>
                                                    {{ $lecturer->nip ?: '-' }}
                                                </p> --}}

                                                <p>
                                                    <span class="font-semibold text-[#29357A]">NIDN:</span>
                                                    {{ $lecturer->nidn ?: '-' }}
                                                </p>

                                                <p>
                                                    <span class="font-semibold text-[#29357A]">Jabatan:</span>
                                                    {{ $lecturer->position ?: '-' }}
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </a>
                            @endforeach

                        </div>

                    </div>

                @empty

                    <div class="text-center py-16">

                        <div class="text-gray-500 dark:text-gray-400">
                            Belum ada data tenaga pengajar.
                        </div>

                    </div>

                @endforelse

            </div>

        </div>

    </section>
@endsection
