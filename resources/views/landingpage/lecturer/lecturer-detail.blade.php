@extends('layouts.app')

@section('title', $lecturer->name)

@section('content')
    <section class="py-12 bg-white min-h-screen mt-16">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-4 gap-6">

                <!-- DETAIL -->
                <div class="lg:col-span-3">

                    <div class="bg-white border border-[#29357A]/10 rounded-2xl overflow-hidden shadow-sm">

                        <!-- Header -->
                        <div class="border-b border-[#29357A]/10 bg-white">

                            <div class="px-6 py-5">

                                <button class="text-sm font-bold text-[#29357A] border-b-2 border-[#29357A] pb-2">
                                    Data Dosen
                                </button>

                            </div>

                        </div>

                        <!-- Content -->
                        <div class="p-6">

                            <div class="grid md:grid-cols-2 gap-6 text-sm">

                                <!-- Item -->
                                <div>
                                    <p class="text-xs font-semibold text-black uppercase tracking-wide">
                                        Nama Lengkap
                                    </p>
                                    <p class="mt-1 text-gray-700 font-medium">
                                        {{ $lecturer->name }}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold text-black uppercase tracking-wide">
                                        Program Studi
                                    </p>
                                    <p class="mt-1 text-gray-700">
                                        {{ $lecturer->study_program ?: '-' }}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold text-black uppercase tracking-wide">
                                        NIP
                                    </p>
                                    <p class="mt-1 text-gray-700">
                                        {{ $lecturer->nip ?: '-' }}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold text-black uppercase tracking-wide">
                                        Email
                                    </p>
                                    <p class="mt-1 text-gray-700">
                                        {{ $lecturer->email ?: '-' }}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold text-black uppercase tracking-wide">
                                        NIDN
                                    </p>
                                    <p class="mt-1 text-gray-700">
                                        {{ $lecturer->nidn ?: '-' }}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold text-black uppercase tracking-wide">
                                        No. Telepon
                                    </p>
                                    <p class="mt-1 text-gray-700">
                                        {{ $lecturer->phone ?: '-' }}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold text-black uppercase tracking-wide">
                                        NUPTK
                                    </p>
                                    <p class="mt-1 text-gray-700">
                                        {{ $lecturer->nuptk ?: '-' }}
                                    </p>
                                </div>

                                <div>
                                    <p class="text-xs font-semibold text-black uppercase tracking-wide">
                                        Jabatan Fungsional
                                    </p>
                                    <p class="mt-1 text-gray-700">
                                        {{ $lecturer->position ?: '-' }}
                                    </p>
                                </div>

                            </div>

                            <!-- Button -->
                            <div class="mt-10 flex justify-end">

                                <a href="{{ route('lecturers.index') }}"
                                    class="px-5 py-2.5 text-sm font-semibold bg-[#29357A] hover:bg-[#1f2c66] text-white rounded-xl transition-all duration-300">

                                    Kembali

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- SIDEBAR -->
                <div>

                    <div
                        class="bg-white border border-[#29357A]/10 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">

                        <!-- Foto -->
                        @if ($lecturer->photo)
                            <div class="aspect-[3/4] overflow-hidden bg-gray-50">
                                <img src="{{ asset('storage/' . $lecturer->photo) }}" alt="{{ $lecturer->name }}"
                                    class="w-full h-full object-cover transition duration-500 hover:scale-105">
                            </div>
                        @else
                            <div class="aspect-[3/4] bg-gray-50 flex items-center justify-center text-gray-400 text-sm">
                                No Photo
                            </div>
                        @endif

                        <!-- Info -->
                        <div class="p-5 text-center">

                            <h3 class="text-lg font-black text-[#29357A] leading-snug">
                                {{ $lecturer->name }}
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                {{ $lecturer->position ?: 'Tenaga Pengajar' }}
                            </p>

                            <!-- Program -->
                            <div class="mt-4">
                                <span
                                    class="inline-flex items-center px-3 py-1.5 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-xs font-bold rounded-md">

                                    {{ $lecturer->study_program ?: '-' }}

                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
