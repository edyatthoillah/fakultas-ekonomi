@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- ================= HERO ================= -->
    <section id="beranda" class="relative pt-28 lg:pt-36 pb-20 overflow-hidden bg-[#f4f6fb]">

        <!-- Background -->
        <div
            class="absolute top-0 left-0 w-full h-[540px] bg-gradient-to-br from-[#1f2c6c] via-[#29357A] to-[#3d4fc4] rounded-b-[28px]">
        </div>

        <!-- Glow -->
        <div class="absolute top-20 right-[-100px] w-[500px] h-[500px] bg-blue-400/20 blur-3xl rounded-full animate-pulse">
        </div>

        <div class="absolute bottom-0 left-[-120px] w-[380px] h-[380px] bg-cyan-400/10 blur-3xl rounded-full">
        </div>

        <!-- Grid Pattern -->
        <div
            class="absolute inset-0 opacity-[0.04] bg-[linear-gradient(to_right,#ffffff_1px,transparent_1px),linear-gradient(to_bottom,#ffffff_1px,transparent_1px)] bg-[size:60px_60px]">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT -->
                <div class="max-w-2xl">

                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 border border-white/10 backdrop-blur-md text-yellow-300 text-[11px] font-black tracking-[0.18em] rounded-md mb-7 shadow-lg hover:scale-[1.02] transition-all duration-300">

                        <span class="w-2 h-2 bg-yellow-300 rounded-full animate-ping">
                        </span>

                        WEBSITE RESMI FAKULTAS
                    </div>

                    <!-- Heading -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-[1.05] tracking-tight text-white mb-6">

                        {{ $landing->app_name }} <br>

                        <span class="bg-gradient-to-r from-blue-100 to-cyan-200 bg-clip-text text-transparent">
                            Universitas Darma Persada
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="text-[15px] leading-8 text-blue-100/90 max-w-xl mb-10 font-medium">

                        {{ $landing->hero_title }}
                    </p>

                    <!-- Button -->
                    <div class="flex flex-col sm:flex-row gap-4">

                        <!-- Primary -->
                        <a href="{{ url('https://pmb.unsada.ac.id/') }}"
                            class="group relative overflow-hidden inline-flex items-center justify-center h-12 px-8 rounded-md bg-gradient-to-r from-yellow-400 via-yellow-300 to-amber-300 text-[#29357A] text-[12px] font-black tracking-[0.15em] shadow-[0_12px_35px_rgba(255,215,0,0.38)] transition-all duration-300 hover:-translate-y-1 hover:scale-[1.02]">

                            <!-- Glow -->
                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-300 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.35),transparent_70%)]">
                            </div>

                            <!-- Shine -->
                            <div
                                class="absolute top-0 left-[-120%] w-[120%] h-full bg-gradient-to-r from-transparent via-white/40 to-transparent skew-x-12 group-hover:left-[120%] transition-all duration-700">
                            </div>

                            <span class="relative z-10 flex items-center gap-2">
                                PENDAFTARAN

                                <iconify-icon icon="solar:arrow-right-up-linear"
                                    class="transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-1">
                                </iconify-icon>
                            </span>
                        </a>

                        <!-- Secondary -->
                        <a href="#profil-fakultas"
                            class="group relative overflow-hidden inline-flex items-center justify-center h-12 px-8 rounded-md bg-gradient-to-r from-yellow-400 via-yellow-300 to-amber-300 border border-yellow-200/40 text-[#29357A] text-[12px] font-black tracking-[0.15em] shadow-[0_12px_35px_rgba(255,215,0,0.30)] transition-all duration-300 hover:-translate-y-1 hover:scale-[1.02]">

                            <!-- Glow -->
                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-300 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.25),transparent_70%)]">
                            </div>

                            <!-- Shine -->
                            <div
                                class="absolute top-0 left-[-120%] w-[120%] h-full bg-gradient-to-r from-transparent via-white/35 to-transparent skew-x-12 group-hover:left-[120%] transition-all duration-700">
                            </div>

                            <span class="relative z-10 flex items-center gap-2">

                                PROFIL FAKULTAS

                                <iconify-icon icon="solar:arrow-right-linear"
                                    class="transition-transform duration-300 group-hover:translate-x-1">
                                </iconify-icon>
                            </span>
                        </a>
                    </div>

                    <!-- Mini Stats -->
                    <div class="grid grid-cols-3 gap-3 pt-7">

                        <!-- Item -->
                        <div
                            class="group relative overflow-hidden rounded-lg bg-gradient-to-br from-[#4154c7] via-[#33408d] to-[#29357A] border border-blue-300/10 px-3 py-2.5 hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 shadow-[0_10px_28px_rgba(37,99,235,0.25)]">

                            <!-- Glow -->
                            <div
                                class="absolute -top-4 -right-4 w-14 h-14 bg-blue-400/25 rounded-full blur-2xl group-hover:scale-125 transition duration-500">
                            </div>

                            <!-- Shine -->
                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full">
                            </div>

                            <div class="relative flex items-center gap-2">

                                <h3 class="text-lg lg:text-xl font-black text-white leading-none">
                                    25+
                                </h3>

                                <p class="text-[8px] tracking-[0.14em] text-blue-100 font-bold uppercase">
                                    Dosen
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="group relative overflow-hidden rounded-lg bg-gradient-to-br from-[#4154c7] via-[#33408d] to-[#29357A] border border-blue-300/10 px-3 py-2.5 hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 shadow-[0_10px_28px_rgba(37,99,235,0.25)]">

                            <!-- Glow -->
                            <div
                                class="absolute -top-4 -right-4 w-14 h-14 bg-cyan-300/20 rounded-full blur-2xl group-hover:scale-125 transition duration-500">
                            </div>

                            <!-- Shine -->
                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full">
                            </div>

                            <div class="relative flex items-center gap-2">

                                <h3 class="text-lg lg:text-xl font-black text-white leading-none">
                                    1.2K+
                                </h3>

                                <p class="text-[8px] tracking-[0.14em] text-blue-100 font-bold uppercase">
                                    Mahasiswa
                                </p>
                            </div>
                        </div>

                        <!-- Item -->
                        <div
                            class="group relative overflow-hidden rounded-lg bg-gradient-to-br from-[#4154c7] via-[#33408d] to-[#29357A] border border-blue-300/10 px-3 py-2.5 hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 shadow-[0_10px_28px_rgba(37,99,235,0.25)]">

                            <!-- Glow -->
                            <div
                                class="absolute -top-4 -right-4 w-14 h-14 bg-yellow-300/20 rounded-full blur-2xl group-hover:scale-125 transition duration-500">
                            </div>

                            <!-- Shine -->
                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full">
                            </div>

                            <div class="relative flex items-center gap-2">

                                <h3 class="text-lg lg:text-xl font-black text-white leading-none">
                                    A
                                </h3>

                                <p class="text-[8px] tracking-[0.14em] text-blue-100 font-bold uppercase">
                                    Akreditasi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="relative">

                    <!-- Glow -->
                    <div class="absolute -inset-4 bg-blue-500/20 blur-2xl rounded-[30px]">
                    </div>

                    <!-- Main Image -->
                    <div
                        class="group relative rounded-[24px] overflow-hidden border border-white/10 shadow-[0_20px_60px_rgba(0,0,0,0.35)] bg-white/10 backdrop-blur-md">

                        <img src="{{ asset('storage/' . $landing->hero_image) }}" alt="Fakultas Ekonomi"
                            class="w-full h-[520px] object-cover scale-100 group-hover:scale-105 transition-transform duration-[4000ms]">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1e2b67]/90 via-[#29357A]/20 to-transparent">
                        </div>

                        <!-- Floating Info -->
                        <div
                            class="absolute bottom-5 left-5 right-5 bg-white/90 backdrop-blur-md p-4 rounded-xl shadow-2xl border border-white/50 flex items-center gap-4 hover:translate-y-[-2px] transition-all duration-300">

                            <div
                                class="w-12 h-12 rounded-lg bg-gradient-to-br from-[#29357A] to-[#3d4fc4] flex items-center justify-center text-white shadow-lg">

                                <iconify-icon icon="solar:verified-check-bold" width="22">
                                </iconify-icon>
                            </div>

                            <div>

                                <h4 class="text-[13px] font-black tracking-wide text-[#29357A]">
                                    Dr. Sukardi., S.E., M.M Dekan FE Unsada
                                </h4>

                                <p class="text-[11px] text-gray-500 mt-1 leading-relaxed">
                                    Mendukung pendidikan berkualitas dan lulusan siap kerja.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Card -->
                    <div
                        class="hidden lg:flex absolute -left-10 top-10 bg-white/95 backdrop-blur-md shadow-2xl rounded-xl border border-white px-5 py-4 items-center gap-4 animate-bounce [animation-duration:4s]">

                        <div
                            class="w-11 h-11 rounded-lg bg-yellow-400 flex items-center justify-center text-[#29357A] shadow-md">

                            <iconify-icon icon="solar:book-bookmark-bold" width="20">
                            </iconify-icon>
                        </div>

                        <div>

                            <h4 class="text-[12px] font-black text-[#29357A] tracking-wide">
                                KURIKULUM MODERN
                            </h4>

                            <p class="text-[10px] text-gray-500 mt-1">
                                Berbasis kebutuhan industri
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Profile Video Section -->
    <section id="profil-fakultas" class="relative py-24 bg-white overflow-hidden">

        <!-- Background Blur -->
        <div class="absolute top-0 right-0 w-[380px] h-[380px] bg-blue-100 blur-3xl rounded-full opacity-50">
        </div>

        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-yellow-100 blur-3xl rounded-full opacity-40">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <!-- Left Content -->
                <div>

                    <!-- Badge -->
                    <span
                        class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md mb-6">

                        PROFILE FAKULTAS
                    </span>

                    <!-- Title -->
                    <h2 class="text-4xl lg:text-5xl font-black tracking-tight text-[#29357A] leading-tight">
                        Mengenal Lebih Dekat <br>
                        Fakultas Ekonomi UNSADA
                    </h2>

                    <!-- Description -->
                    <p class="mt-6 text-[15px] leading-8 text-gray-600 max-w-xl">
                        {{ $landing->about_us }}
                    </p>

                    <!-- Highlight -->
                    <div class="mt-8 space-y-4">

                        <div class="flex items-start gap-4 bg-[#f4f6fb] border border-gray-200 rounded-xl px-5 py-4">

                            <div
                                class="w-11 h-11 rounded-lg bg-[#29357A] text-white flex items-center justify-center shrink-0">

                                <iconify-icon icon="solar:book-bookmark-bold" width="20"></iconify-icon>
                            </div>

                            <div>
                                <h4 class="text-[14px] font-black text-[#29357A]">
                                    Kurikulum Modern
                                </h4>

                                <p class="text-[13px] text-gray-600 mt-1 leading-6">
                                    Pembelajaran berbasis industri dan teknologi digital.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 bg-[#f4f6fb] border border-gray-200 rounded-xl px-5 py-4">

                            <div
                                class="w-11 h-11 rounded-lg bg-yellow-400 text-[#29357A] flex items-center justify-center shrink-0">

                                <iconify-icon icon="solar:users-group-rounded-bold" width="20"></iconify-icon>
                            </div>

                            <div>
                                <h4 class="text-[14px] font-black text-[#29357A]">
                                    Lingkungan Akademik Aktif
                                </h4>

                                <p class="text-[13px] text-gray-600 mt-1 leading-6">
                                    Mendukung pengembangan kreativitas dan soft skill mahasiswa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Video -->
                <div class="relative">

                    <!-- Glow -->
                    <div
                        class="absolute -inset-5 bg-gradient-to-r from-[#29357A]/20 to-yellow-300/20 blur-2xl rounded-[30px]">
                    </div>

                    <!-- Video Card -->
                    <div
                        class="relative overflow-hidden rounded-[22px] border border-gray-200 bg-white shadow-[0_25px_80px_rgba(41,53,122,0.12)]">

                        <!-- YouTube Embed -->
                        <div class="aspect-video">

                            <iframe class="w-full h-full"
                                src="https://www.youtube.com/embed/9pN21ckF8rI?autoplay=1&mute=1&loop=1&playlist=9pN21ckF8rI&controls=1&rel=0&modestbranding=1"
                                title="Profil Fakultas Ekonomi" frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen>
                            </iframe>
                        </div>

                        <!-- Bottom Info -->
                        <div
                            class="flex items-center justify-between px-6 py-5 bg-gradient-to-r from-[#29357A] to-[#33408d]">

                            <div>
                                <h4 class="text-white text-[14px] font-black tracking-wide">
                                    FAKULTAS EKONOMI
                                </h4>

                                <p class="text-blue-100 text-[12px] mt-1">
                                    Universitas Darma Persada
                                </p>
                            </div>

                            <div
                                class="w-12 h-12 rounded-full bg-white/10 border border-white/10 backdrop-blur-md flex items-center justify-center text-yellow-300">

                                <iconify-icon icon="solar:play-bold" width="22"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Career Section -->
    <section id="karir" class="py-24 overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mb-16">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md shadow-sm">

                    PELUANG KARIR
                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-black tracking-tight text-[#29357A] leading-tight">
                    Prospek Karir Lulusan
                </h2>

                <p class="mt-5 text-[15px] leading-8 text-gray-600">
                    Lulusan Fakultas Ekonomi Universitas Darma Persada memiliki peluang karir luas
                    di berbagai sektor industri, bisnis, keuangan, dan pemerintahan.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">

                <!-- Card -->
                <div
                    class="group bg-white rounded-[20px] overflow-hidden border border-gray-200 hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)] transition-all duration-500 hover:-translate-y-2">

                    <!-- Image -->
                    <div class="relative overflow-hidden h-56">

                        <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1200&auto=format&fit=crop"
                            alt="Akuntan"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">

                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-md">
                                AKUNTANSI
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">

                        <h3 class="text-[20px] font-black text-[#29357A] mb-3">
                            Akuntan Profesional
                        </h3>

                        <p class="text-[14px] leading-7 text-gray-600">
                            Berkarir sebagai auditor, akuntan publik, konsultan pajak,
                            maupun financial analyst di perusahaan nasional dan internasional.
                        </p>
                    </div>
                </div>

                <!-- Card -->
                <div
                    class="group bg-white rounded-[20px] overflow-hidden border border-gray-200 hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)] transition-all duration-500 hover:-translate-y-2">

                    <!-- Image -->
                    <div class="relative overflow-hidden h-56">

                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200&auto=format&fit=crop"
                            alt="Manajemen"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">

                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-md">
                                MANAJEMEN
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">

                        <h3 class="text-[20px] font-black text-[#29357A] mb-3">
                            Business Manager
                        </h3>

                        <p class="text-[14px] leading-7 text-gray-600">
                            Memiliki kompetensi dalam pengelolaan bisnis, strategi perusahaan,
                            pemasaran, dan pengembangan sumber daya manusia.
                        </p>
                    </div>
                </div>

                <!-- Card -->
                <div
                    class="group bg-white rounded-[20px] overflow-hidden border border-gray-200 hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)] transition-all duration-500 hover:-translate-y-2">

                    <!-- Image -->
                    <div class="relative overflow-hidden h-56">

                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200&auto=format&fit=crop"
                            alt="Entrepreneur"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">

                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-md">
                                ENTREPRENEUR
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">

                        <h3 class="text-[20px] font-black text-[#29357A] mb-3">
                            Wirausaha Modern
                        </h3>

                        <p class="text-[14px] leading-7 text-gray-600">
                            Mengembangkan bisnis mandiri berbasis digital, startup,
                            UMKM modern, hingga industri kreatif berbasis teknologi.
                        </p>
                    </div>
                </div>

                <!-- Card -->
                <div
                    class="group bg-white rounded-[20px] overflow-hidden border border-gray-200 hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)] transition-all duration-500 hover:-translate-y-2">

                    <!-- Image -->
                    <div class="relative overflow-hidden h-56">

                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=1200&auto=format&fit=crop"
                            alt="Perbankan"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">

                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-md">
                                PERBANKAN
                            </span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-6">

                        <h3 class="text-[20px] font-black text-[#29357A] mb-3">
                            Staff Perbankan
                        </h3>

                        <p class="text-[14px] leading-7 text-gray-600">
                            Berpeluang bekerja di sektor perbankan, lembaga keuangan,
                            fintech, serta bidang investasi dan pasar modal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section id="kerjasama" class="py-20 bg-[#f4f6fb] overflow-hidden border-y border-gray-200">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-14">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md shadow-sm">

                    KERJA SAMA
                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-black tracking-tight text-[#29357A]">
                    Mitra & Kerja Sama
                </h2>

                <p class="mt-5 text-[15px] leading-8 text-gray-600">
                    Fakultas Ekonomi Universitas Darma Persada menjalin kerja sama
                    dengan berbagai institusi pendidikan, perusahaan, dan industri nasional maupun Internasional.
                </p>
            </div>
        </div>

        <!-- Infinite Carousel -->
        <div class="relative">

            <!-- Fade Left -->
            <div
                class="absolute left-0 top-0 bottom-0 w-28 bg-gradient-to-r from-[#f4f6fb] to-transparent z-10 pointer-events-none">
            </div>

            <!-- Fade Right -->
            <div
                class="absolute right-0 top-0 bottom-0 w-28 bg-gradient-to-l from-[#f4f6fb] to-transparent z-10 pointer-events-none">
            </div>

            <!-- Wrapper -->
            <div class="marquee-wrapper">

                <!-- Track -->
                <div class="marquee-track">

                    @foreach ($partners as $item)
                        <div class="partner-card">
                            <img src="{{ asset('storage/' . $item->logo) }}" class="partner-logo">
                            <h3 class="partner-title">{{ $item->name }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <style>
        .marquee-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .marquee-track {
            display: flex;
            align-items: center;
            gap: 20px;
            width: max-content;
            animation: marqueeLoop 18s linear infinite;
        }

        @keyframes marqueeLoop {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-50% - 10px));
            }
        }

        .partner-card {
            min-width: 210px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 22px 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all .3s ease;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.04);
        }

        .partner-card:hover {
            transform: translateY(-4px);
            border-color: rgba(41, 53, 122, 0.15);
            box-shadow: 0 14px 35px rgba(41, 53, 122, 0.08);
        }

        .partner-logo {
            height: 42px;
            object-fit: contain;
        }

        .partner-title {
            margin-top: 16px;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #29357A;
            text-align: center;
        }
    </style>

    <!-- Latest News -->
    <section id="berita" class="py-20 bg-bg-light dark:bg-[#181818]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-[#29357A] dark:text-white tracking-tight">Berita Terkini
                    </h2>
                    <p class="mt-2 text-text-sec dark:text-gray-400">Informasi terbaru seputar kegiatan dinas dan
                        teknologi.</p>
                </div>
                <a href="#"
                    class="hidden md:inline-flex items-center px-4 py-2 border border-primary text-[#29357A] dark:text-blue-400 dark:border-blue-400 rounded-lg hover:bg-primary hover:text-white transition-all text-sm font-medium">
                    Lihat Semua
                </a>
            </div>

            <style>
                /* Hide scrollbar (cross-browser) */
                .no-scrollbar::-webkit-scrollbar {
                    display: none;
                }

                .no-scrollbar {
                    -ms-overflow-style: none;
                    /* IE & Edge */
                    scrollbar-width: none;
                    /* Firefox */
                }
            </style>

            <div class="w-full overflow-x-auto scroll-smooth pb-4 no-scrollbar">

                <div class="flex gap-6 w-max snap-x snap-mandatory px-2">

                    @foreach ($news as $item)
                        <article
                            class="max-w-[300px] md:max-w-[350px] snap-start bg-white dark:bg-surface rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-border-light dark:border-gray-700 flex flex-col">

                            <!-- IMAGE / SLIDER -->
                            <div class="h-48 overflow-hidden">

                                @if ($item->images->count() > 1)
                                    <div class="swiper newsSwiper-{{ $item->id }} h-48">
                                        <div class="swiper-wrapper">

                                            @if ($item->thumbnail)
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('storage/' . $item->thumbnail) }}"
                                                        class="w-full h-48 object-cover">
                                                </div>
                                            @endif

                                            @foreach ($item->images as $img)
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('storage/' . $img->image_path) }}"
                                                        class="w-full h-48 object-cover">
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                @else
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}"
                                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500">
                                @endif

                            </div>

                            <!-- CONTENT -->
                            <div class="p-6 flex-1 flex flex-col">

                                <span class="text-xs font-semibold text-text-sec mb-2 flex items-center gap-1">
                                    📅 {{ $item->created_at->format('d M Y') }}
                                </span>

                                <h3 class="text-lg font-bold text-[#29357A] dark:text-blue-400 mb-3 line-clamp-2">
                                    {{ $item->title }}
                                </h3>

                                <p class="text-text-sec text-sm line-clamp-3 mb-4 flex-1">
                                    {{ Str::limit(strip_tags($item->content), 100) }}
                                </p>

                                <a href="{{ route('news.frontend.show', $item->slug) }}"
                                    class="inline-flex items-center text-[#29357A] dark:text-blue-400 text-sm font-semibold hover:underline">
                                    Baca Selengkapnya →
                                </a>

                            </div>

                        </article>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-bg-light dark:bg-[#181818]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-[#29357A] dark:text-white tracking-tight mb-8 text-center">
                Tanya Jawab (FAQ)
            </h2>

            <div class="space-y-4">

                <!-- FAQ 1 -->
                <details
                    class="group bg-white dark:bg-surface rounded-xl border border-border-light dark:border-gray-700 overflow-hidden">

                    <summary
                        class="flex justify-between items-center cursor-pointer p-6 font-semibold text-[#29357A] dark:text-blue-400">

                        Apa saja program studi yang tersedia di Fakultas Ekonomi Universitas Darma Persada?

                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>

                    <div class="px-6 pb-6 text-text-sec text-sm leading-relaxed">
                        Fakultas Ekonomi Universitas Darma Persada menyediakan beberapa program studi yang berfokus
                        pada
                        pengembangan ilmu ekonomi dan bisnis, seperti Manajemen, Akuntansi, dan program lainnya yang
                        mendukung kebutuhan dunia kerja modern.
                    </div>
                </details>

                <!-- FAQ 2 -->
                <details
                    class="group bg-white dark:bg-surface rounded-xl border border-border-light dark:border-gray-700 overflow-hidden">

                    <summary
                        class="flex justify-between items-center cursor-pointer p-6 font-semibold text-[#29357A] dark:text-blue-400">

                        Bagaimana proses pendaftaran mahasiswa baru?

                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>

                    <div class="px-6 pb-6 text-text-sec text-sm leading-relaxed">
                        Calon mahasiswa dapat melakukan pendaftaran secara online melalui website resmi Universitas
                        Darma
                        Persada dengan mengisi formulir pendaftaran, mengunggah dokumen persyaratan, dan mengikuti
                        tahapan
                        seleksi yang telah ditentukan.
                    </div>
                </details>

                <!-- FAQ 3 -->
                <details
                    class="group bg-white dark:bg-surface rounded-xl border border-border-light dark:border-gray-700 overflow-hidden">

                    <summary
                        class="flex justify-between items-center cursor-pointer p-6 font-semibold text-[#29357A] dark:text-blue-400">

                        Apakah Fakultas Ekonomi menyediakan program magang?

                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>

                    <div class="px-6 pb-6 text-text-sec text-sm leading-relaxed">
                        Ya, Fakultas Ekonomi Universitas Darma Persada menyediakan program magang dan kerja praktik
                        yang
                        bekerja sama dengan berbagai perusahaan, instansi, dan dunia industri untuk meningkatkan
                        pengalaman
                        mahasiswa sebelum lulus.
                    </div>
                </details>

                <!-- FAQ 4 -->
                <details
                    class="group bg-white dark:bg-surface rounded-xl border border-border-light dark:border-gray-700 overflow-hidden">

                    <summary
                        class="flex justify-between items-center cursor-pointer p-6 font-semibold text-[#29357A] dark:text-blue-400">

                        Apakah tersedia beasiswa untuk mahasiswa?

                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>

                    <div class="px-6 pb-6 text-text-sec text-sm leading-relaxed">
                        Fakultas Ekonomi Universitas Darma Persada menyediakan berbagai informasi terkait program
                        beasiswa,
                        baik dari pemerintah, yayasan, maupun mitra perusahaan untuk mahasiswa berprestasi maupun
                        yang
                        membutuhkan dukungan biaya pendidikan.
                    </div>
                </details>

                <!-- FAQ 5 -->
                <details
                    class="group bg-white dark:bg-surface rounded-xl border border-border-light dark:border-gray-700 overflow-hidden">

                    <summary
                        class="flex justify-between items-center cursor-pointer p-6 font-semibold text-[#29357A] dark:text-blue-400">

                        Bagaimana fasilitas pendukung pembelajaran di Fakultas Ekonomi?

                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </summary>

                    <div class="px-6 pb-6 text-text-sec text-sm leading-relaxed">
                        Fakultas Ekonomi didukung dengan ruang kelas modern, laboratorium komputer, perpustakaan,
                        koneksi internet, serta berbagai kegiatan organisasi mahasiswa untuk menunjang proses
                        belajar dan
                        pengembangan soft skill mahasiswa.
                    </div>
                </details>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="kontak" class="relative py-16 overflow-hidden bg-bg-light dark:bg-[#181818]">

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <!-- Label -->
            <div
                class="inline-flex items-center justify-center px-5 h-10 rounded-xl border border-gray-300 dark:border-gray-700 text-[#29357A] dark:text-blue-300 text-[11px] font-bold tracking-[0.18em] uppercase bg-white dark:bg-[#202020] shadow-sm">

                Wujudkan Karir Impian
            </div>

            <!-- Heading -->
            <h2
                class="mt-6 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight text-[#29357A] dark:text-white">

                Wujudkan Masa Depan Bersama <br>

                <span class="text-[#29357A]/90 dark:text-blue-300">
                    Fakultas Ekonomi UNSADA
                </span>
            </h2>

            <!-- Description -->
            <p class="mt-6 text-[15px] leading-8 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto font-medium">

                Bergabunglah bersama lingkungan akademik yang inovatif,
                profesional, dan berorientasi pada dunia industri untuk
                mencetak generasi unggul yang siap bersaing global.
            </p>

            <!-- Button -->
            <div class="mt-8 flex justify-center">

                <a href="#pendaftaran"
                    class="group inline-flex items-center justify-center h-12 px-8 rounded-xl bg-[#29357A] hover:bg-[#1f2b68] text-white text-[12px] font-bold tracking-[0.15em] uppercase transition-all duration-300 hover:-translate-y-1 shadow-lg">

                    <span class="flex items-center gap-2">

                        Daftar Sekarang

                        <i class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1">
                        </i>
                    </span>
                </a>
            </div>

        </div>
    </section>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            @foreach ($news as $item)
                @if ($item->images->count() > 1 || $item->thumbnail)

                    new Swiper(".newsSwiper-{{ $item->id }}", {
                        loop: true,
                        autoplay: {
                            delay: 3000,
                        },
                    });
                @endif
            @endforeach

        });
    </script>
@endsection
