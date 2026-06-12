@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')

    <!-- STRUKTUR ORGANISASI SECTION -->
    <section class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mb-12 mt-4">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                    STRUKTUR ORGANISASI
                </span>

                <h2 class="mt-6 text-4xl lg:text-4xl font-black tracking-tight text-[#29357A]">
                    Fakultas Ekonomi
                </h2>

                <p class="mt-5 text-black font-bold  leading-8 max-w-2xl mx-auto">
                    Struktur kepemimpinan dan organisasi Fakultas Ekonomi yang mendukung
                    tata kelola akademik, administrasi, dan pengembangan institusi secara profesional.
                </p>

            </div>
            <!-- IMAGE FULL (STRUCTURE ORGANIZATION) -->
            <div class="w-full flex justify-center">

                @if ($landing->organization_structure)
                    <div class="relative w-full max-w-6xl">

                        <!-- Card Wrapper -->
                        <div
                            class="bg-white rounded-2xl border border-[#29357A]/10 p-4 hover:shadow-lg transition-all duration-300">

                            <!-- Label -->
                            <div class="mb-4 flex items-center gap-3">

                                <div
                                    class="w-9 h-9 rounded-xl bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center">

                                    <i class="fa-solid fa-sitemap text-[#29357A] text-sm"></i>

                                </div>

                                <span class="text-xs font-black tracking-[0.18em] uppercase text-[#29357A]">
                                    Struktur Organisasi
                                </span>

                            </div>

                            <!-- Image -->
                            <div class="overflow-hidden rounded-xl bg-gray-50 border border-gray-100">

                                <img src="{{ asset('storage/' . $landing->organization_structure) }}"
                                    class="w-full h-auto max-h-[80vh] object-contain mx-auto transition-transform duration-500 hover:scale-[1.01]"
                                    alt="Struktur Organisasi">

                            </div>

                        </div>

                    </div>
                @else
                    <div class="w-full max-w-6xl">

                        <div
                            class="h-[420px] bg-gray-50 rounded-2xl border border-dashed border-[#29357A]/20 flex flex-col items-center justify-center">

                            <div
                                class="w-16 h-16 rounded-2xl bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center mb-4">

                                <i class="fa-solid fa-sitemap text-[#29357A] text-xl"></i>

                            </div>

                            <span class="text-gray-500 font-medium">
                                Belum ada struktur organisasi
                            </span>

                        </div>

                    </div>
                @endif

            </div>

        </div>

    </section>

@endsection
