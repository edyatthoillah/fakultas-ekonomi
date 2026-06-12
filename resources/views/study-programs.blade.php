@extends('layouts.app')

@section('title', $studyProgram->name)

@section('content')

    <!-- HERO -->
    <section class="relative min-h-screen flex items-center overflow-hidden">

        <!-- Background -->
        <img src="{{ asset('storage/' . $studyProgram->hero_image) }}" alt="{{ $studyProgram->name }}"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#0f172a]/90 via-[#1d2d74]/75 to-[#1d2d74]/40">
        </div>

        <!-- Decorative Blur -->
        <div class="absolute top-20 right-20 w-72 h-72 bg-yellow-400/20 rounded-lg blur-3xl">
        </div>

        <div class="absolute bottom-20 left-20 w-72 h-72 bg-blue-400/20 rounded-lg blur-3xl">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full">

            <div class="max-w-4xl">

                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-white/10 backdrop-blur-md border border-white/20 text-white text-sm mb-6">

                    @if ($studyProgram->logo)
                        <img src="{{ asset('storage/' . $studyProgram->logo) }}" class="w-5 h-5 object-contain">
                    @endif

                    <span>Fakultas Ekonomi</span>

                </div>

                <!-- Title -->
                <h1 class="text-5xl lg:text-7xl font-extrabold text-white leading-tight mb-6">

                    {{ $studyProgram->hero_title ?: $studyProgram->name }}

                </h1>

                <!-- Subtitle -->
                <p class="text-md lg:text-2xl text-white/90 leading-relaxed max-w-3xl">

                    Program Studi {{ $studyProgram->name }}
                    yang berkomitmen menghasilkan lulusan profesional,
                    kompeten, dan siap bersaing di tingkat nasional maupun global.

                </p>

                <!-- Info -->
                <div class="flex flex-wrap gap-4 mt-10">

                    @if ($studyProgram->accreditation)
                        <div class="px-5 py-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl">

                            <div class="text-xs text-white/70 uppercase">
                                Akreditasi
                            </div>

                            <div class="text-md font-semibold text-white">
                                {{ $studyProgram->accreditation }}
                            </div>

                        </div>
                    @endif

                    @if ($studyProgram->head_of_program)
                        <div class="px-5 py-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl">

                            <div class="text-xs text-white/70 uppercase">
                                Ketua Program Studi
                            </div>

                            <div class="text-md font-semibold text-white">
                                {{ $studyProgram->head_of_program }}
                            </div>

                        </div>
                    @endif

                </div>

                <!-- CTA -->
                <div class="flex flex-wrap gap-4 mt-10">

                    <a href="#profil"
                        class="px-8 py-4 bg-yellow-400 text-[#1d2d74] font-semibold rounded-lg hover:bg-yellow-300 transition">

                        Profil Program Studi

                    </a>

                    @if ($studyProgram->brochure_file)
                        <a href="{{ asset('storage/' . $studyProgram->brochure_file) }}" target="_blank"
                            class="px-8 py-4 border border-white/30 text-white rounded-lg backdrop-blur-md hover:bg-white/10 transition">

                            Download Brosur

                        </a>
                    @endif

                </div>

            </div>

        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white animate-bounce">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

            </svg>

        </div>

    </section>

    <!-- PROFIL -->
    <section id="profil" class="relative py-24 bg-white overflow-hidden">

        <!-- Background Decoration -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-50 rounded-lg blur-3xl opacity-70"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-yellow-50 rounded-lg blur-3xl opacity-70"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-12 gap-12 items-start">

                <!-- Logo & Identity -->
                <div class="lg:col-span-4">

                    <div class="sticky top-24">

                        <div class="bg-white border border-gray-100 rounded-lg shadow-xl p-8 text-center">

                            @if ($studyProgram->logo)
                                <img src="{{ asset('storage/' . $studyProgram->logo) }}" alt="{{ $studyProgram->name }}"
                                    class="w-32 h-32 mx-auto object-contain mb-6">
                            @endif

                            <span
                                class="inline-flex items-center px-4 py-2 rounded-lg bg-blue-50 text-[#1d2d74] text-sm font-semibold mb-4">

                                Fakultas Ekonomi

                            </span>

                            <h2 class="text-3xl font-bold text-[#1d2d74] mb-2">
                                {{ $studyProgram->name }}
                            </h2>

                            <p class="text-black font-bold">
                                Program Studi
                            </p>

                            @if ($studyProgram->accreditation)
                                <div class="mt-6 p-4 rounded-2xl bg-gradient-to-r from-[#1d2d74] to-[#29357A] text-white">

                                    <div class="text-xs uppercase tracking-widest opacity-80">
                                        Akreditasi
                                    </div>

                                    <div class="text-2xl font-bold mt-1">
                                        {{ $studyProgram->accreditation }}
                                    </div>

                                </div>
                            @endif

                        </div>

                    </div>

                </div>

                <!-- Content -->
                <div class="lg:col-span-8">

                    <div class="mb-8">

                        <span class="inline-block px-4 py-2 bg-yellow-100 text-yellow-700 rounded-lg text-sm font-semibold">

                            Tentang Program Studi

                        </span>

                        <h2 class="mt-4 text-4xl font-bold text-[#1d2d74] leading-tight">

                            Mengenal Lebih Dekat
                            {{ $studyProgram->name }}

                        </h2>

                        <div class="w-24 h-1 bg-yellow-400 mt-5 rounded-lg"></div>

                    </div>

                    <div class="bg-white rounded-lg border border-gray-100 shadow-lg p-8 lg:p-10">

                        <div class="prose prose-lg max-w-none text-black font-bold leading-relaxed">

                            {!! $studyProgram->description !!}

                        </div>

                    </div>

                    <!-- Highlight -->
                    <div class="grid md:grid-cols-2 gap-6 mt-8">

                        <div class="bg-blue-50 border border-blue-100 rounded-2xl p-6">

                            <h3 class="font-bold text-[#1d2d74] mb-2">
                                Program Berkualitas
                            </h3>

                            <p class="text-black font-bold text-sm leading-relaxed">
                                Didukung kurikulum yang relevan dengan kebutuhan dunia kerja,
                                dunia usaha, dan perkembangan teknologi terkini.
                            </p>

                        </div>

                        <div class="bg-yellow-50 border border-yellow-100 rounded-2xl p-6">

                            <h3 class="font-bold text-[#1d2d74] mb-2">
                                Lulusan Kompetitif
                            </h3>

                            <p class="text-black font-bold text-sm leading-relaxed">
                                Menghasilkan lulusan yang profesional, adaptif,
                                dan siap bersaing di tingkat nasional maupun global.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- SAMBUTAN KAPRODI -->
    <section class="relative py-24 bg-gradient-to-b from-gray-50 to-white overflow-hidden">

        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-50 rounded-lg blur-3xl opacity-70"></div>
        <div class="absolute bottom-0 left-0 w-72 h-72 bg-yellow-50 rounded-lg blur-3xl opacity-70"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center mb-16">

                <span class="inline-flex items-center px-4 py-2 rounded-lg bg-blue-50 text-[#1d2d74] text-sm font-semibold">

                    Sambutan Kaprodi

                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-bold text-[#1d2d74]">
                    Ketua Program Studi
                </h2>

                <div class="w-24 h-1 bg-yellow-400 rounded-lg mx-auto mt-5"></div>

            </div>

            <div class="grid lg:grid-cols-12 gap-10 items-start">

                <!-- Foto Kaprodi -->
                <div class="lg:col-span-4">

                    <div class="bg-white rounded-lg border border-gray-100 shadow-xl overflow-hidden">

                        @if ($studyProgram->head_of_program_photo)
                            <img src="{{ asset('storage/' . $studyProgram->head_of_program_photo) }}"
                                alt="{{ $studyProgram->head_of_program }}" class="w-full aspect-[4/5] object-cover">
                        @endif

                        <div class="p-6 text-center">

                            <h3 class="text-2xl font-bold text-[#1d2d74]">
                                {{ $studyProgram->head_of_program }}
                            </h3>

                            <p class="text-black font-bold mt-2">
                                Ketua Program Studi {{ $studyProgram->name }}
                            </p>

                            @if ($studyProgram->accreditation)
                                <div
                                    class="inline-flex mt-5 px-4 py-2 rounded-lg bg-yellow-100 text-yellow-700 text-sm font-semibold">

                                    Akreditasi {{ $studyProgram->accreditation }}

                                </div>
                            @endif

                        </div>

                    </div>

                </div>

                <!-- Sambutan -->
                <div class="lg:col-span-8">

                    <div class="bg-white rounded-lg border border-gray-100 shadow-xl p-8 lg:p-12">

                        <!-- Quote -->
                        <div class="mb-6">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-yellow-400" fill="currentColor"
                                viewBox="0 0 24 24">

                                <path
                                    d="M7.17 6A5.001 5.001 0 002 11v7h7v-7H5.1A3.001 3.001 0 017.17 8H9V6H7.17zm10 0A5.001 5.001 0 0012 11v7h7v-7h-3.9A3.001 3.001 0 0117.17 8H19V6h-1.83z" />

                            </svg>

                        </div>

                        <div x-data="{ expanded: false }">

                            <!-- Ringkasan -->
                            <div x-show="!expanded" class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                                {!! nl2br(e(\Illuminate\Support\Str::words(strip_tags($studyProgram->head_of_program_greeting), 100, '...'))) !!}
                            </div>

                            <!-- Teks lengkap -->
                            <div x-show="expanded" x-transition
                                class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                                {!! $studyProgram->head_of_program_greeting !!}
                            </div>

                            <!-- Tombol -->
                            <button @click="expanded = !expanded"
                                class="mt-4 text-[#1d2d74] font-semibold hover:text-yellow-600 transition">

                                <span x-show="!expanded">Baca Selengkapnya →</span>
                                <span x-show="expanded">Tampilkan Lebih Sedikit ←</span>

                            </button>

                        </div>

                        <div class="mt-10 pt-6 border-t border-gray-100">

                            <h4 class="text-xl font-bold text-[#1d2d74]">
                                {{ $studyProgram->head_of_program }}
                            </h4>

                            <p class="text-black font-bold">
                                Ketua Program Studi {{ $studyProgram->name }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- VISI & MISI -->
    <section class="relative py-24 bg-white overflow-hidden">

        <!-- Decoration -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-50 rounded-lg blur-3xl opacity-70"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-yellow-50 rounded-lg blur-3xl opacity-70"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center mb-16">

                <span
                    class="inline-flex items-center px-4 py-2 rounded-lg bg-blue-50 text-[#1d2d74] text-sm font-semibold">

                    Arah dan Tujuan

                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-bold text-[#1d2d74]">
                    Visi & Misi
                </h2>

                <p class="mt-4 text-black font-bold max-w-3xl mx-auto">
                    Landasan dalam mengembangkan pendidikan, penelitian,
                    dan pengabdian kepada masyarakat di Program Studi
                    {{ $studyProgram->name }}.
                </p>

                <div class="w-24 h-1 bg-yellow-400 rounded-lg mx-auto mt-5"></div>

            </div>

            <div class="grid lg:grid-cols-2 gap-8">

                <!-- VISI -->
                <div
                    class="relative overflow-hidden rounded-lg bg-gradient-to-br from-[#1d2d74] to-[#29357A] p-10 text-white shadow-2xl">

                    <div class="absolute -top-12 -right-12 w-40 h-40 bg-white/10 rounded-lg">
                    </div>

                    <div class="relative">

                        <div
                            class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-sm flex items-center justify-center mb-6">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.55-2.27a1 1 0 011.45.9v6.74a1 1 0 01-1.45.89L15 14m-6 4h6a2 2 0 002-2V8a2 2 0 00-2-2H9a2 2 0 00-2 2v8a2 2 0 002 2z" />

                            </svg>

                        </div>

                        <h3 class="text-3xl font-bold mb-6">
                            Visi
                        </h3>

                        <div x-data="{ expanded: false }">

                            <div x-show="!expanded" class="text-white/90 leading-relaxed text-md">
                                {!! nl2br(e(\Illuminate\Support\Str::words(strip_tags($studyProgram->vision), 60, '...'))) !!}
                            </div>

                            <div x-show="expanded" x-transition class="text-white/90 leading-relaxed text-md">
                                {!! $studyProgram->vision !!}
                            </div>

                            <button @click="expanded = !expanded"
                                class="mt-3 text-yellow-300 hover:text-yellow-200 font-medium">
                                <span x-show="!expanded">Baca Selengkapnya →</span>
                                <span x-show="expanded">Tampilkan Lebih Sedikit ←</span>
                            </button>

                        </div>

                    </div>

                </div>

                <!-- MISI -->
                <div class="relative overflow-hidden rounded-lg bg-white border border-gray-100 p-10 shadow-2xl">

                    <div class="absolute -bottom-12 -left-12 w-40 h-40 bg-yellow-100 rounded-lg opacity-50">
                    </div>

                    <div class="relative">

                        <div
                            class="w-16 h-16 rounded-2xl bg-yellow-100 text-yellow-600 flex items-center justify-center mb-6">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5-2a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                        </div>

                        <h3 class="text-3xl font-bold text-[#1d2d74] mb-6">
                            Misi
                        </h3>

                        <div class="text-gray-700 leading-relaxed">
                            <div x-data="{ expanded: false }">

                                <div x-show="!expanded" class="text-gray-700 leading-relaxed">
                                    {!! nl2br(e(\Illuminate\Support\Str::words(strip_tags($studyProgram->mission), 60, '...'))) !!}
                                </div>

                                <div x-show="expanded" x-transition class="text-gray-700 leading-relaxed">
                                    {!! $studyProgram->mission !!}
                                </div>

                                <button @click="expanded = !expanded"
                                    class="mt-3 text-[#1d2d74] hover:text-yellow-600 font-medium transition">
                                    <span x-show="!expanded">Baca Selengkapnya →</span>
                                    <span x-show="expanded">Tampilkan Lebih Sedikit ←</span>
                                </button>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- STRUKTUR ORGANISASI -->
    @if ($studyProgram->organization_structure)
        <section class="relative py-24 bg-gradient-to-b from-gray-50 to-white overflow-hidden">

            <!-- Decoration -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-50 rounded-lg blur-3xl opacity-70"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-yellow-50 rounded-lg blur-3xl opacity-70"></div>

            <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

                <!-- Heading -->
                <div class="text-center mb-16">

                    <span
                        class="inline-flex items-center px-4 py-2 rounded-lg bg-blue-50 text-[#1d2d74] text-sm font-semibold">

                        Tata Kelola Program Studi

                    </span>

                    <h2 class="mt-5 text-4xl lg:text-5xl font-bold text-[#1d2d74]">
                        Struktur Organisasi
                    </h2>

                    <p class="mt-4 text-gray-600 max-w-3xl mx-auto">
                        Struktur organisasi Program Studi
                        {{ $studyProgram->name }}
                        sebagai bentuk tata kelola yang mendukung pelaksanaan
                        pendidikan, penelitian, dan pengabdian kepada masyarakat.
                    </p>

                    <div class="w-24 h-1 bg-yellow-400 rounded-lg mx-auto mt-5"></div>

                </div>

                <!-- Card -->
                <div class="bg-white rounded-lg border border-gray-100 shadow-2xl overflow-hidden">

                    <!-- Header -->
                    <div class="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-[#1d2d74] to-[#29357A]">

                        <h3 class="text-xl font-semibold text-white">
                            Struktur Organisasi Program Studi
                            {{ $studyProgram->name }}
                        </h3>

                    </div>

                    <!-- Image -->
                    <div class="p-4 lg:p-8">

                        <a href="{{ asset('storage/' . $studyProgram->organization_structure) }}" target="_blank">

                            <img src="{{ asset('storage/' . $studyProgram->organization_structure) }}"
                                alt="Struktur Organisasi {{ $studyProgram->name }}"
                                class="w-full rounded-2xl border border-gray-200 hover:scale-[1.01] transition duration-300">

                        </a>

                    </div>

                </div>

                <!-- Information -->
                <div class="mt-8">

                    <div class="bg-blue-50 border border-blue-100 rounded-2xl p-6">

                        <div class="flex items-start gap-4">

                            <div
                                class="w-12 h-12 rounded-xl bg-[#1d2d74] text-white flex items-center justify-center shrink-0">

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </div>

                            <div>

                                <h4 class="font-semibold text-[#1d2d74] mb-2">
                                    Informasi
                                </h4>

                                <p class="text-gray-600 leading-relaxed">
                                    Klik gambar struktur organisasi untuk melihat
                                    ukuran penuh dan memudahkan pembacaan detail
                                    jabatan serta hubungan koordinasi antar unit.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    @endif

    <!-- INFORMASI PROGRAM STUDI -->
    <section class="relative py-24 bg-gradient-to-b from-gray-50 to-white overflow-hidden">

        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-50 rounded-full blur-3xl opacity-70"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-yellow-50 rounded-full blur-3xl opacity-70"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center mb-16">

                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-blue-50 text-[#1d2d74] text-sm font-semibold">

                    Informasi Program Studi

                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-bold text-[#1d2d74]">
                    Akreditasi & Kontak
                </h2>

                <p class="mt-4 text-black font-bold max-w-3xl mx-auto">
                    Informasi resmi mengenai akreditasi, kontak, dan dokumen
                    Program Studi {{ $studyProgram->name }}.
                </p>

                <div class="w-24 h-1 bg-yellow-400 rounded-full mx-auto mt-5"></div>

            </div>

            <div class="grid lg:grid-cols-3 gap-8">

                <!-- Akreditasi -->
                <div class="bg-white rounded-lg border border-gray-100 shadow-xl p-8">

                    <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6">

                        <iconify-icon icon="solar:verified-check-bold" class="text-2xl text-[#1d2d74]">
                        </iconify-icon>

                    </div>

                    <h3 class="text-xl font-bold text-[#1d2d74] mb-6">
                        Akreditasi
                    </h3>

                    <div class="space-y-4">

                        <div>
                            <p class="text-sm text-black font-bold">
                                Status
                            </p>

                            <p class="text-3xl font-bold text-[#1d2d74]">
                                {{ $studyProgram->accreditation ?: '-' }}
                            </p>
                        </div>

                        <div>
                            <p class="text-sm text-black font-bold">
                                Nomor SK
                            </p>

                            <p class="text-gray-700">
                                {{ $studyProgram->accreditation_number ?: '-' }}
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Kontak -->
                <div class="bg-white rounded-lg border border-gray-100 shadow-xl p-8">

                    <div class="w-14 h-14 rounded-2xl bg-yellow-50 flex items-center justify-center mb-6">

                        <iconify-icon icon="solar:phone-bold" class="text-2xl text-yellow-600">
                        </iconify-icon>

                    </div>

                    <h3 class="text-xl font-bold text-[#1d2d74] mb-6">
                        Kontak
                    </h3>

                    <div class="space-y-5">

                        <div>
                            <p class="text-sm text-black font-bold">
                                Email
                            </p>

                            <p class="text-gray-700 break-all">
                                {{ $studyProgram->email ?: '-' }}
                            </p>
                        </div>

                        <div>
                            <p class="text-sm text-black font-bold">
                                Telepon
                            </p>

                            <p class="text-gray-700">
                                {{ $studyProgram->phone ?: '-' }}
                            </p>
                        </div>

                    </div>

                </div>

                <!-- Brosur -->
                <div class="bg-gradient-to-br from-[#1d2d74] to-[#29357A] rounded-lg shadow-xl p-8 text-white">

                    <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center mb-6">

                        <iconify-icon icon="solar:document-bold" class="text-2xl">
                        </iconify-icon>

                    </div>

                    <h3 class="text-xl font-bold mb-4">
                        Brosur Program Studi
                    </h3>

                    <p class="text-white/80 leading-relaxed mb-8">
                        Lihat atau unduh brosur resmi Program Studi
                        {{ $studyProgram->name }}
                        untuk memperoleh informasi mengenai kurikulum,
                        fasilitas, profil lulusan, dan kegiatan akademik.
                    </p>

                    @if ($studyProgram->brochure_file)
                        <a href="{{ $studyProgram->brochure_file }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-yellow-400 text-[#1d2d74] font-semibold rounded-xl hover:bg-yellow-300 transition">

                            <iconify-icon icon="solar:document-text-bold"></iconify-icon>

                            Lihat Brosur

                        </a>
                    @else
                        <div class="inline-flex items-center px-5 py-3 rounded-xl bg-white/10">

                            Brosur belum tersedia

                        </div>
                    @endif

                </div>

            </div>

        </div>

    </section>

@endsection
