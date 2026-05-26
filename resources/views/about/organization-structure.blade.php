@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')

    <!-- STRUKTUR ORGANISASI SECTION -->
    <section class="py-20 bg-bg-light dark:bg-[#181818]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mb-10">

                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-[#29357A]/10 text-[#29357A] dark:text-blue-300 text-[11px] font-bold tracking-[0.18em] uppercase">
                    Struktur Organisasi
                </span>

                <h2 class="mt-5 text-3xl sm:text-4xl font-black tracking-tight text-[#29357A] dark:text-white">
                    Fakultas Ekonomi
                </h2>

            </div>
            <!-- IMAGE FULL (STRUCTURE ORGANIZATION) -->
            <div class="w-full flex justify-center">

                @if ($landing->organization_structure)
                    <div class="relative w-full max-w-5xl">

                        <!-- Card Wrapper -->
                        <div
                            class="bg-white dark:bg-[#1f1f1f] rounded-xl shadow-lg border border-gray-100 dark:border-[#2a2a2a] p-3">

                            <!-- Label kecil -->
                            <div class="mb-3 flex items-center justify-between">
                                <span
                                    class="text-xs font-semibold tracking-widest uppercase text-[#29357A] dark:text-blue-300">
                                    Struktur Organisasi
                                </span>
                            </div>

                            <!-- Image -->
                            <div class="overflow-hidden rounded-lg bg-gray-50 dark:bg-[#2a2a2a]">
                                <img src="{{ asset('storage/' . $landing->organization_structure) }}"
                                    class="w-full h-auto max-h-[80vh] object-contain mx-auto transition-transform duration-300 hover:scale-[1.02]"
                                    alt="Struktur Organisasi">
                            </div>

                        </div>

                    </div>
                @else
                    <div class="w-full max-w-5xl mx-auto">
                        <div
                            class="h-[420px] bg-gray-100 dark:bg-[#2a2a2a] rounded-xl border border-dashed border-gray-300 dark:border-gray-600 flex flex-col items-center justify-center">

                            <svg class="w-10 h-10 text-gray-400 mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14" />
                            </svg>

                            <span class="text-gray-500 text-sm">Belum ada struktur organisasi</span>

                        </div>
                    </div>
                @endif

            </div>

        </div>

    </section>

@endsection
