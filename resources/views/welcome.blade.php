@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- ================= HERO ================= -->
    <section id="beranda" class="relative pt-28 lg:pt-36 pb-20 overflow-hidden bg-[#f4f6fb]">

        <!-- Background -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-[#1f2c6c] via-[#29357A] to-[#3d4fc4]">
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

                        <!-- Kurikulum Adaptif -->
                        <div
                            class="group relative overflow-hidden rounded-lg bg-gradient-to-br from-[#4154c7] via-[#33408d] to-[#29357A] border border-blue-300/10 px-3 py-2.5 hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 shadow-[0_10px_28px_rgba(37,99,235,0.25)]">

                            <div
                                class="absolute -top-4 -right-4 w-14 h-14 bg-blue-400/25 rounded-full blur-2xl group-hover:scale-125 transition duration-500">
                            </div>

                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full">
                            </div>

                            <div class="relative">
                                <h3 class="text-sm lg:text-base font-black text-white leading-tight">
                                    Fasilitas
                                </h3>

                                <p class="text-[8px] tracking-[0.14em] text-blue-100 font-bold uppercase mt-1">
                                    Terbaik
                                </p>
                            </div>
                        </div>

                        <!-- Dosen Profesional -->
                        <div
                            class="group relative overflow-hidden rounded-lg bg-gradient-to-br from-[#4154c7] via-[#33408d] to-[#29357A] border border-blue-300/10 px-3 py-2.5 hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 shadow-[0_10px_28px_rgba(37,99,235,0.25)]">

                            <div
                                class="absolute -top-4 -right-4 w-14 h-14 bg-cyan-300/20 rounded-full blur-2xl group-hover:scale-125 transition duration-500">
                            </div>

                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full">
                            </div>

                            <div class="relative">
                                <h3 class="text-sm lg:text-base font-black text-white leading-tight">
                                    Dosen
                                </h3>

                                <p class="text-[8px] tracking-[0.14em] text-blue-100 font-bold uppercase mt-1">
                                    Profesional
                                </p>
                            </div>
                        </div>

                        <!-- Lulusan Berdaya Saing -->
                        <div
                            class="group relative overflow-hidden rounded-lg bg-gradient-to-br from-[#4154c7] via-[#33408d] to-[#29357A] border border-blue-300/10 px-3 py-2.5 hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 shadow-[0_10px_28px_rgba(37,99,235,0.25)]">

                            <div
                                class="absolute -top-4 -right-4 w-14 h-14 bg-yellow-300/20 rounded-full blur-2xl group-hover:scale-125 transition duration-500">
                            </div>

                            <div
                                class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full">
                            </div>

                            <div class="relative">
                                <h3 class="text-sm lg:text-base font-black text-white leading-tight">
                                    Lulusan
                                </h3>

                                <p class="text-[8px] tracking-[0.14em] text-blue-100 font-bold uppercase mt-1">
                                    Terbaik
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
                                    Dr. Sukardi., S.E., M.M
                                </h4>

                                <p class="text-[12px] text-black font-bold mt-1 leading-relaxed">
                                    Dekan Fakultas Ekonomi Universitas Darma Persada
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
                                LULUSAN UNGGUL
                            </h4>

                            <p class="text-[10px] text-gray-500 mt-1">
                                Siap bersaing global
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
                <div class="profile-left">

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
                    <p class="mt-6 text-[15px] leading-8 text-black font-bold max-w-xl">
                        {{ $landing->hero_title }}
                    </p>

                    <!-- Highlight -->
                    <div class="mt-8 space-y-4">

                        <div
                            class="profile-item flex items-start gap-4 bg-[#f4f6fb] border border-gray-200 rounded-xl px-5 py-4">

                            <div
                                class="w-11 h-11 rounded-lg bg-[#29357A] text-white flex items-center justify-center shrink-0">

                                <iconify-icon icon="solar:book-bookmark-bold" width="20"></iconify-icon>
                            </div>

                            <div>
                                <h4 class="text-[14px] font-black text-[#29357A]">
                                    Kurikulum Modern
                                </h4>

                                <p class="text-[13px] text-black mt-1 leading-6 font-bold">
                                    Pembelajaran berbasis industri dan teknologi digital.
                                </p>
                            </div>
                        </div>

                        <div
                            class="profile-item flex items-start gap-4 bg-[#f4f6fb] border border-gray-200 rounded-xl px-5 py-4">
                            <div
                                class="w-11 h-11 rounded-lg bg-yellow-400 text-[#29357A] flex items-center justify-center shrink-0">

                                <iconify-icon icon="solar:users-group-rounded-bold" width="20"></iconify-icon>
                            </div>

                            <div>
                                <h4 class="text-[14px] font-black text-[#29357A]">
                                    Lingkungan Akademik Aktif
                                </h4>

                                <p class="text-[13px] text-black mt-1 leading-6 font-bold">
                                    Mendukung pengembangan kreativitas dan soft skill mahasiswa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Video -->
                <div class="relative profile-video">

                    <!-- Glow -->
                    <div
                        class="profile-glow absolute -inset-5 bg-gradient-to-r from-[#29357A]/20 to-yellow-300/20 blur-2xl rounded-[30px]">
                    </div>

                    <!-- Video Card -->
                    <div
                        class="relative overflow-hidden rounded-[22px] border border-gray-200 bg-white shadow-[0_25px_80px_rgba(41,53,122,0.12)]">

                        <!-- YouTube Embed -->
                        <div class="aspect-video">

                            <iframe class="w-full h-full"
                                src="https://www.youtube.com/embed/9pN21ckF8rI?autoplay=1&mute=0&loop=1&playlist=9pN21ckF8rI&controls=1&rel=0&modestbranding=1"
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

    <style>
        /* ==========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       PROFILE SECTION ANIMATION
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ========================== */

        .profile-left {
            opacity: 0;
            transform: translateY(60px);
            transition: all 1s cubic-bezier(.16, 1, .3, 1);
        }

        .profile-left.show {
            opacity: 1;
            transform: translateY(0);
        }

        .profile-item {
            opacity: 0;
            transform: translateY(40px);
            transition:
                opacity .8s ease,
                transform .8s cubic-bezier(.16, 1, .3, 1);
        }

        .profile-item.show {
            opacity: 1;
            transform: translateY(0);
        }

        .profile-video {
            opacity: 0;
            transform: translateX(80px) scale(.92);
            transition: all 1.2s cubic-bezier(.16, 1, .3, 1);
        }

        .profile-video.show {
            opacity: 1;
            transform: translateX(0) scale(1);
        }

        /* Floating glow */

        .profile-glow {
            animation: profileFloat 8s ease-in-out infinite;
        }

        @keyframes profileFloat {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        /* Hover highlight */

        .profile-item:hover {
            transform: translateY(-4px);
            transition: .3s ease;
        }

        /* Optional: smooth video hover */

        .profile-video .aspect-video iframe {
            transition: transform 1.2s ease;
        }

        .profile-video:hover iframe {
            transform: scale(1.03);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const observerItems = () => {

                const items = document.querySelectorAll('.profile-item');

                items.forEach((item, index) => {

                    setTimeout(() => {
                        item.classList.add('show');
                    }, 250 + (index * 180));

                });

            };

            const resetItems = () => {

                document.querySelectorAll('.profile-item').forEach(item => {
                    item.classList.remove('show');
                });

            };

            const profileObserver = new IntersectionObserver((entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        // Left Content
                        if (entry.target.classList.contains('profile-left')) {
                            entry.target.classList.add('show');
                            observerItems();
                        }

                        // Video
                        if (entry.target.classList.contains('profile-video')) {

                            setTimeout(() => {
                                entry.target.classList.add('show');
                            }, 200);

                        }

                    } else {

                        // Reset animasi saat keluar viewport
                        if (entry.target.classList.contains('profile-left')) {
                            entry.target.classList.remove('show');
                            resetItems();
                        }

                        if (entry.target.classList.contains('profile-video')) {
                            entry.target.classList.remove('show');
                        }

                    }

                });

            }, {
                threshold: 0.2
            });

            document.querySelectorAll('.profile-left, .profile-video')
                .forEach(el => profileObserver.observe(el));

        });
    </script>

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

                <p class="mt-5 text-[15px] leading-8 text-black font-bold">
                    Lulusan Fakultas Ekonomi Universitas Darma Persada memiliki peluang karir luas
                    di berbagai sektor industri, bisnis, keuangan, dan pemerintahan.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">

                <!-- Pelaku Bisnis/Wirausaha -->
                <div
                    class="career-card group bg-white rounded-[20px] overflow-hidden border border-gray-200 hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)] transition-all duration-500 hover:-translate-y-2">

                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200&auto=format&fit=crop"
                            alt="Pelaku Bisnis"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-md">
                                WIRAUSAHA
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-[20px] font-black text-[#29357A] mb-3">
                            Pelaku Bisnis/Wirausaha
                        </h3>

                        <p class="text-[14px] leading-7 text-black font-bold">
                            Orang yang memiliki visi dan kompetensi dalam membangun dan
                            mengelola bisnis yang baik.
                        </p>
                    </div>
                </div>

                <!-- Manajer Lini -->
                <div
                    class="career-card group bg-white rounded-[20px] overflow-hidden border border-gray-200 hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)] transition-all duration-500 hover:-translate-y-2">

                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1200&auto=format&fit=crop"
                            alt="Manajer Lini"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-md">
                                MANAJERIAL
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-[20px] font-black text-[#29357A] mb-3">
                            Manajer Lini
                        </h3>

                        <p class="text-[14px] leading-7 text-black font-bold">
                            Orang yang ahli dalam mengelola tugas-tugas manajerial dalam
                            perusahaan.
                        </p>
                    </div>
                </div>

                <!-- Pendidik/Pengajar -->
                <div
                    class="career-card group bg-white rounded-[20px] overflow-hidden border border-gray-200 hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)] transition-all duration-500 hover:-translate-y-2">

                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
                            alt="Pendidik"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-md">
                                PENDIDIKAN
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-[20px] font-black text-[#29357A] mb-3">
                            Pendidik/Pengajar
                        </h3>

                        <p class="text-[14px] leading-7 text-black font-bold">
                            Orang yang memiliki kompetensi untuk merancang dan melaksanakan
                            proses pembelajaran yang efektif serta memiliki pemahaman mendalam
                            tentang bidang ajarnya.
                        </p>
                    </div>
                </div>

                <!-- Konsultan -->
                <div
                    class="career-card group bg-white rounded-[20px] overflow-hidden border border-gray-200 hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)] transition-all duration-500 hover:-translate-y-2">

                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1200&auto=format&fit=crop"
                            alt="Konsultan"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-md">
                                KONSULTAN
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-[20px] font-black text-[#29357A] mb-3">
                            Konsultan
                        </h3>

                        <p class="text-[14px] leading-7 text-black font-bold">
                            Orang yang ahli dalam menganalisis masalah, menyusun strategi,
                            serta memberikan solusi dan rekomendasi kepada klien.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* ==========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               Smooth Reveal Animation
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ========================== */

        .reveal-up {
            opacity: 0;
            transform: translateY(30px);
            transition:
                opacity 1.1s cubic-bezier(0.22, 1, 0.36, 1),
                transform 1.1s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: opacity, transform;
        }

        .reveal-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* ==========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               Career Cards
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ========================== */

        .career-card {
            opacity: 0;
            transform: translateY(35px) scale(0.98);
            transition:
                opacity 1s cubic-bezier(0.22, 1, 0.36, 1),
                transform 1s cubic-bezier(0.22, 1, 0.36, 1);
            will-change: opacity, transform;
        }

        .career-card.show {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        /* Smooth hover */

        .career-card {
            transition:
                opacity 1s cubic-bezier(0.22, 1, 0.36, 1),
                transform 1s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow .45s ease,
                border-color .45s ease;
        }

        .career-card:hover {
            transform: translateY(-6px);
        }

        /* Reduce motion preference */

        @media (prefers-reduced-motion: reduce) {

            .reveal-up,
            .career-card {
                transition: none;
                opacity: 1;
                transform: none;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const observer = new IntersectionObserver((entries) => {

                entries.forEach(entry => {

                    // Saat masuk viewport
                    if (entry.isIntersecting) {

                        if (entry.target.classList.contains('reveal-up')) {
                            entry.target.classList.add('show');
                        }

                        if (entry.target.classList.contains('career-card')) {
                            entry.target.classList.add('show');
                        }

                    } else {

                        // Saat keluar viewport
                        entry.target.classList.remove('show');
                    }

                });

            }, {
                threshold: 0.15
            });

            document.querySelectorAll('.reveal-up')
                .forEach(el => observer.observe(el));

            const cards = document.querySelectorAll('.career-card');

            cards.forEach((card, index) => {

                const cardObserver = new IntersectionObserver((entries) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            setTimeout(() => {
                                entry.target.classList.add('show');
                            }, index * 120);

                        } else {

                            entry.target.classList.remove('show');
                        }

                    });

                }, {
                    threshold: 0.15
                });

                cardObserver.observe(card);
            });

        });
    </script>

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

                <p class="mt-5 text-[15px] leading-8 text-black font-bold">
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
    <section id="berita" class="py-24 bg-[#F8F9FC] overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-14">

                <!-- Left -->
                <div>

                    <span
                        class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                        BERITA & INFORMASI

                    </span>

                    <h2 class="mt-5 text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-[#29357A]">
                        Berita Terkini
                    </h2>

                </div>

                <!-- Right -->
                <div class="flex justify-start lg:justify-end">

                    <a href="{{ route('news.frontend.index') }}"
                        class="group inline-flex items-center gap-3 px-5 py-3 rounded-xl bg-white text-[#29357A] font-semibold border border-[#29357A]/10 hover:border-[#29357A]/20 hover:shadow-md transition-all duration-300">

                        <span>Lihat Semua Berita</span>

                        <i
                            class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1">
                        </i>

                    </a>

                </div>

            </div>
            <!-- Slider -->
            <div class="relative">

                <div class="swiper beritaSwiper">

                    <div class="swiper-wrapper">

                        @foreach ($news as $item)
                            <div class="swiper-slide h-auto">

                                <article
                                    class="group bg-white rounded-lg overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 h-full flex flex-col">

                                    <!-- IMAGE -->
                                    <div class="relative overflow-hidden">

                                        @if ($item->images->count() > 1)
                                            <div class="swiper newsSwiper-{{ $item->id }} h-56">

                                                <div class="swiper-wrapper">

                                                    @if ($item->thumbnail)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/' . $item->thumbnail) }}"
                                                                class="w-full h-56 object-cover">
                                                        </div>
                                                    @endif

                                                    @foreach ($item->images as $img)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/' . $img->image_path) }}"
                                                                class="w-full h-56 object-cover">
                                                        </div>
                                                    @endforeach

                                                </div>

                                            </div>
                                        @else
                                            <img src="{{ asset('storage/' . $item->thumbnail) }}"
                                                class="w-full h-56 object-cover transition duration-700 group-hover:scale-110">
                                        @endif

                                    </div>

                                    <!-- CONTENT -->
                                    <div class="p-6 flex flex-col flex-1">

                                        {{-- <span
                                            class="inline-flex items-center gap-2 text-xs font-semibold text-gray-500 mb-3">
                                            <i class="fa-regular fa-calendar"></i>
                                            {{ $item->created_at->format('d M Y') }}
                                        </span> --}}

                                        <h3 class="text-xl font-bold text-[#29357A] mb-3 line-clamp-2 leading-snug">
                                            {{ $item->title }}
                                        </h3>

                                        <p class="text-black font-bold text-sm leading-7 line-clamp-3 flex-1">
                                            {{ Str::limit(strip_tags($item->content), 120) }}
                                        </p>

                                        <a href="{{ route('news.frontend.show', $item->slug) }}"
                                            class="mt-6 inline-flex items-center gap-2 font-bold text-[#29357A] hover:gap-3 transition-all">

                                            Baca Selengkapnya

                                            <i class="fa-solid fa-arrow-right text-xs"></i>

                                        </a>

                                    </div>

                                </article>

                            </div>
                        @endforeach

                    </div>

                </div>

                <!-- Navigation -->
                <div class="flex items-center justify-center gap-6 mt-10">

                    <div class="berita-prev">
                        <button
                            class="w-11 h-11 rounded-full border border-[#29357A]/20 bg-white text-[#29357A] hover:bg-[#29357A]/5 hover:border-[#29357A]/40 transition-all duration-300">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                    </div>

                    <div class="swiper-pagination !relative !bottom-auto !w-auto"></div>

                    <div class="berita-next">
                        <button
                            class="w-11 h-11 rounded-full border border-[#29357A]/20 bg-white text-[#29357A] hover:bg-[#29357A]/5 hover:border-[#29357A]/40 transition-all duration-300">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <!-- FAQ Section -->
    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-gray-50 overflow-hidden">

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mb-16">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md shadow-sm">

                    FAQ
                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-black tracking-tight text-[#29357A] leading-tight">
                    Pertanyaan yang Sering Diajukan
                </h2>

                <p class="mt-5 text-[15px] leading-8 text-black font-bold">
                    Temukan jawaban atas berbagai pertanyaan seputar Fakultas Ekonomi
                    Universitas Darma Persada mulai dari program studi, pendaftaran,
                    fasilitas, hingga peluang pengembangan mahasiswa.
                </p>

            </div>

            <div class="space-y-5">
                <details
                    class="group relative bg-white rounded-lg border border-slate-200/80 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:border-[#29357A]/15 hover:shadow-[0_25px_60px_rgba(41,53,122,0.08)] open:border-[#29357A]/20 open:shadow-[0_25px_60px_rgba(41,53,122,0.10)]">

                    <!-- Accent Line -->
                    <div
                        class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-[#29357A] to-[#4354b5] scale-y-0 origin-top transition-transform duration-500 group-open:scale-y-100">
                    </div>

                    <summary
                        class="flex items-center justify-between gap-6 cursor-pointer px-8 lg:px-10 py-7 lg:py-8 list-none">

                        <div class="flex-1">

                            <h3
                                class="text-[18px] lg:text-[21px] font-extrabold tracking-tight text-[#29357A] leading-relaxed transition-all duration-300 group-hover:text-[#1f2c66] group-open:text-[#1f2c66]">

                                Apa saja program studi yang tersedia di Fakultas Ekonomi Universitas Darma Persada?

                            </h3>

                        </div>

                        <div
                            class="w-14 h-14 my-4 rounded-full bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-[#29357A]/10 group-hover:scale-105 group-open:bg-[#29357A] group-open:border-[#29357A]">

                            <i
                                class="fa-solid fa-plus text-[#29357A] text-sm transition-all duration-300 group-open:rotate-45 group-open:text-white">
                            </i>

                        </div>

                    </summary>

                    <div class="px-8 lg:px-10 animate-faq">

                        <div class="border-t border-slate-100 py-6">

                            <p class="text-black text-[15px] lg:text-[16px] leading-8 lg:leading-9 font-bold">
                                Fakultas Ekonomi Universitas Darma Persada menyediakan beberapa program studi yang berfokus
                                pada pengembangan ilmu ekonomi dan bisnis, seperti Manajemen, Akuntansi, dan program lainnya
                                yang mendukung kebutuhan dunia kerja modern.
                            </p>

                        </div>

                    </div>

                </details>

                <details
                    class="group relative bg-white rounded-lg border border-slate-200/80 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:border-[#29357A]/15 hover:shadow-[0_25px_60px_rgba(41,53,122,0.08)] open:border-[#29357A]/20 open:shadow-[0_25px_60px_rgba(41,53,122,0.10)]">

                    <!-- Accent Line -->
                    <div
                        class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-[#29357A] to-[#4354b5] scale-y-0 origin-top transition-transform duration-500 group-open:scale-y-100">
                    </div>

                    <summary
                        class="flex items-center justify-between gap-6 cursor-pointer px-8 lg:px-10 py-7 lg:py-8 list-none">

                        <div class="flex-1">

                            <h3
                                class="text-[18px] lg:text-[21px] font-extrabold tracking-tight text-[#29357A] leading-relaxed transition-all duration-300 group-hover:text-[#1f2c66] group-open:text-[#1f2c66]">

                                Bagaimana proses pendaftaran mahasiswa baru?

                            </h3>

                        </div>

                        <div
                            class="w-14 h-14 my-4 rounded-full bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-[#29357A]/10 group-hover:scale-105 group-open:bg-[#29357A] group-open:border-[#29357A]">

                            <i
                                class="fa-solid fa-plus text-[#29357A] text-sm transition-all duration-300 group-open:rotate-45 group-open:text-white">
                            </i>

                        </div>

                    </summary>

                    <div class="px-8 lg:px-10 animate-faq">

                        <div class="border-t border-slate-100 py-6">

                            <p class="text-black text-[15px] lg:text-[16px] leading-8 lg:leading-9 font-bold">
                                Calon mahasiswa dapat melakukan pendaftaran secara online melalui website resmi Universitas
                                Darma Persada dengan mengisi formulir pendaftaran, mengunggah dokumen persyaratan, dan
                                mengikuti tahapan seleksi yang telah ditentukan.
                            </p>

                        </div>

                    </div>

                </details>

                <details
                    class="group relative bg-white rounded-lg border border-slate-200/80 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:border-[#29357A]/15 hover:shadow-[0_25px_60px_rgba(41,53,122,0.08)] open:border-[#29357A]/20 open:shadow-[0_25px_60px_rgba(41,53,122,0.10)]">

                    <!-- Accent Line -->
                    <div
                        class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-[#29357A] to-[#4354b5] scale-y-0 origin-top transition-transform duration-500 group-open:scale-y-100">
                    </div>

                    <summary
                        class="flex items-center justify-between gap-6 cursor-pointer px-8 lg:px-10 py-7 lg:py-8 list-none">

                        <div class="flex-1">

                            <h3
                                class="text-[18px] lg:text-[21px] font-extrabold tracking-tight text-[#29357A] leading-relaxed transition-all duration-300 group-hover:text-[#1f2c66] group-open:text-[#1f2c66]">

                                Apakah Fakultas Ekonomi menyediakan program magang?

                            </h3>

                        </div>

                        <div
                            class="w-14 h-14 my-4 rounded-full bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-[#29357A]/10 group-hover:scale-105 group-open:bg-[#29357A] group-open:border-[#29357A]">

                            <i
                                class="fa-solid fa-plus text-[#29357A] text-sm transition-all duration-300 group-open:rotate-45 group-open:text-white">
                            </i>

                        </div>

                    </summary>

                    <div class="px-8 lg:px-10 animate-faq">

                        <div class="border-t border-slate-100 py-6">

                            <p class="text-black text-[15px] lg:text-[16px] leading-8 lg:leading-9 font-bold">
                                Ya, Fakultas Ekonomi Universitas Darma Persada menyediakan program magang dan kerja praktik
                                yang bekerja sama dengan berbagai perusahaan, instansi, dan dunia industri untuk
                                meningkatkan pengalaman mahasiswa sebelum lulus.
                            </p>

                        </div>

                    </div>

                </details>

                <details
                    class="group relative bg-white rounded-lg border border-slate-200/80 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:border-[#29357A]/15 hover:shadow-[0_25px_60px_rgba(41,53,122,0.08)] open:border-[#29357A]/20 open:shadow-[0_25px_60px_rgba(41,53,122,0.10)]">

                    <!-- Accent Line -->
                    <div
                        class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-[#29357A] to-[#4354b5] scale-y-0 origin-top transition-transform duration-500 group-open:scale-y-100">
                    </div>

                    <summary
                        class="flex items-center justify-between gap-6 cursor-pointer px-8 lg:px-10 py-7 lg:py-8 list-none">

                        <div class="flex-1">

                            <h3
                                class="text-[18px] lg:text-[21px] font-extrabold tracking-tight text-[#29357A] leading-relaxed transition-all duration-300 group-hover:text-[#1f2c66] group-open:text-[#1f2c66]">

                                Apakah tersedia beasiswa untuk mahasiswa?

                            </h3>

                        </div>

                        <div
                            class="w-14 h-14 my-4 rounded-full bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-[#29357A]/10 group-hover:scale-105 group-open:bg-[#29357A] group-open:border-[#29357A]">

                            <i
                                class="fa-solid fa-plus text-[#29357A] text-sm transition-all duration-300 group-open:rotate-45 group-open:text-white">
                            </i>

                        </div>

                    </summary>

                    <div class="px-8 lg:px-10 animate-faq">

                        <div class="border-t border-slate-100 py-6">

                            <p class="text-black text-[15px] lg:text-[16px] leading-8 lg:leading-9 font-bold">
                                Fakultas Ekonomi Universitas Darma Persada menyediakan berbagai informasi terkait program
                                beasiswa, baik dari pemerintah, yayasan, maupun mitra perusahaan untuk mahasiswa berprestasi
                                maupun yang membutuhkan dukungan biaya pendidikan.
                            </p>

                        </div>

                    </div>

                </details>

                <details
                    class="group relative bg-white rounded-lg border border-slate-200/80 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:border-[#29357A]/15 hover:shadow-[0_25px_60px_rgba(41,53,122,0.08)] open:border-[#29357A]/20 open:shadow-[0_25px_60px_rgba(41,53,122,0.10)]">

                    <!-- Accent Line -->
                    <div
                        class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-[#29357A] to-[#4354b5] scale-y-0 origin-top transition-transform duration-500 group-open:scale-y-100">
                    </div>

                    <summary
                        class="flex items-center justify-between gap-6 cursor-pointer px-8 lg:px-10 py-7 lg:py-8 list-none">

                        <div class="flex-1">

                            <h3
                                class="text-[18px] lg:text-[21px] font-extrabold tracking-tight text-[#29357A] leading-relaxed transition-all duration-300 group-hover:text-[#1f2c66] group-open:text-[#1f2c66]">

                                Bagaimana fasilitas pendukung pembelajaran di Fakultas Ekonomi?

                            </h3>

                        </div>

                        <div
                            class="w-14 h-14 my-4 rounded-full bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-[#29357A]/10 group-hover:scale-105 group-open:bg-[#29357A] group-open:border-[#29357A]">

                            <i
                                class="fa-solid fa-plus text-[#29357A] text-sm transition-all duration-300 group-open:rotate-45 group-open:text-white">
                            </i>

                        </div>

                    </summary>

                    <div class="px-8 lg:px-10 animate-faq">

                        <div class="border-t border-slate-100 py-6">

                            <p class="text-black text-[15px] lg:text-[16px] leading-8 lg:leading-9 font-bold">
                                Fakultas Ekonomi didukung dengan ruang kelas modern,
                                laboratorium komputer, perpustakaan, koneksi internet,
                                serta berbagai kegiatan organisasi mahasiswa untuk
                                menunjang proses belajar dan pengembangan soft skill
                                mahasiswa.
                            </p>

                        </div>

                    </div>

                </details>

            </div>

        </div>

    </section>

    <style>
        details summary::-webkit-details-marker {
            display: none;
        }

        details summary {
            list-style: none;
        }

        @keyframes faqFade {
            from {
                opacity: 0;
                transform: translateY(-8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        details[open] .animate-faq {
            animation: faqFade .35s ease;
        }

        details[open] {
            transform: translateY(-2px);
        }

        details[open] summary {
            padding-bottom: 1.5rem;
        }
    </style>

    <!-- CTA Section -->
    <section id="kontak" class="py-24 overflow-hidden">

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative bg-white  px-8 md:px-12 lg:px-16  text-center overflow-hidden">

                <!-- Badge -->
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                    WUJUDKAN KARIR IMPIAN

                </span>

                <!-- Heading -->
                <h2 class="mt-6 text-4xl lg:text-5xl font-black tracking-tight text-[#29357A] leading-tight">

                    Wujudkan Masa Depan Bersama
                    <br>

                    <span class="text-[#29357A]/80">
                        Fakultas Ekonomi UNSADA
                    </span>

                </h2>

                <!-- Description -->
                <p class="mt-6 max-w-2xl mx-auto text-[15px] lg:text-[16px] font-bold leading-8 text-black">

                    Bergabunglah bersama lingkungan akademik yang inovatif,
                    profesional, dan berorientasi pada dunia industri untuk
                    mencetak generasi unggul yang siap bersaing di tingkat
                    nasional maupun global.

                </p>

                <!-- CTA -->
                <div class="mt-10 flex justify-center">

                    <a href="https://pmb.unsada.ac.id/" target="_blank"
                        class="group inline-flex items-center gap-3 rounded-2xl border border-[#29357A] bg-[#29357A] px-8 py-4 text-white font-bold uppercase tracking-[0.08em] transition-all duration-300 hover:bg-[#1f2c66] hover:border-[#1f2c66] hover:-translate-y-1 hover:shadow-xl">

                        <span>Daftar Sekarang</span>

                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10">

                            <i
                                class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1">
                            </i>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            new Swiper('.beritaSwiper', {
                slidesPerView: 1,
                spaceBetween: 24,
                loop: true,

                navigation: {
                    nextEl: '.berita-next',
                    prevEl: '.berita-prev',
                },

                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    }
                }
            });

            @foreach ($news as $item)

                @if ($item->images->count() > 1)
                    new Swiper('.newsSwiper-{{ $item->id }}', {
                        loop: true,
                        autoplay: {
                            delay: 2500,
                        }
                    });
                @endif
            @endforeach
        });
    </script>
@endsection
