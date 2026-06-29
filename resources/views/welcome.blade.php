@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- ================= HERO ================= -->
    <section id="beranda" class="relative min-h-screen flex items-center overflow-hidden">

        <!-- Background Image -->
        <div class="absolute inset-0"
            style="
                background-image:
                linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.55), rgba(0,0,0,0.70)),
                url('{{ Storage::url($landing->hero_image) }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            ">
        </div>

        <!-- Grid Pattern -->
        <div
            class="absolute inset-0 opacity-[0.04] bg-[linear-gradient(to_right,#ffffff_1px,transparent_1px),linear-gradient(to_bottom,#ffffff_1px,transparent_1px)] bg-[size:60px_60px] z-[1]">
        </div>

        <!-- Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="flex flex-col items-center justify-center text-center max-w-5xl mx-auto">

                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 border border-white/10 backdrop-blur-md text-yellow-300 text-[11px] font-black tracking-[0.18em] rounded-md mb-7 shadow-lg">

                    <span class="w-2 h-2 bg-yellow-300 rounded-full animate-ping"></span>

                    Universitas Darma Persada
                </div>

                <!-- Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black leading-tight tracking-tight text-white">

                    {{ $landing->app_name }}

                </h1>
                <p class="mt-3 mb-6 text-[15px] max-w-xl font-black leading-tight tracking-tight text-white">
                    {{ $landing->hero_title }}
                </p>

                <!-- Button -->
                <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">

                    <a href="#kerjasama"
                        class="group inline-flex items-center justify-center h-12 px-8 rounded-md bg-gradient-to-r from-yellow-400 via-yellow-300 to-amber-300 text-[#29357A] text-[12px] font-black tracking-[0.15em] shadow-[0_12px_35px_rgba(255,215,0,0.38)] transition-all duration-300 hover:-translate-y-1">

                        KERJASAMA INTERNASIONAL

                    </a>
                </div>

            </div>

        </div>
    </section>




    <!-- Profile Video Section -->
    <section id="profil-kerja-sama" class="relative py-24 bg-white overflow-hidden">

        <!-- Background Blur -->
        <div class="absolute top-0 right-0 w-[380px] h-[380px] bg-blue-100 blur-3xl rounded-full opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-yellow-100 blur-3xl rounded-full opacity-40"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <!-- LEFT CONTENT -->
                <div class="profile-left">

                    <!-- Badge -->
                    <span
                        class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10
                              text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md mb-6">

                        TENTANG KAMI
                    </span>

                    <!-- Title -->
                    <h2 class="text-4xl lg:text-5xl font-black tracking-tight text-[#29357A] leading-tight">
                        {{ $landing->app_name }}<br>
                    </h2>

                    <!-- Description -->
                    <p class="mt-6 text-[15px] leading-8 text-black font-medium max-w-xl">
                        {{ $landing->hero_title }}
                    </p>

                    <!-- Highlight -->
                    <div class="mt-8 space-y-4">

                        <!-- ITEM 1 -->
                        <div class="flex items-start gap-4 bg-[#f4f6fb] border border-gray-200 rounded-xl px-5 py-4">

                            <div
                                class="w-11 h-11 rounded-lg bg-[#29357A] text-white flex items-center justify-center shrink-0">
                                <iconify-icon icon="solar:global-bold" width="20"></iconify-icon>
                            </div>

                            <div>
                                <h4 class="text-[14px] font-black text-[#29357A]">
                                    Kolaborasi Global
                                </h4>
                                <p class="text-[13px] text-black mt-1 leading-6 font-medium">
                                    Kemitraan dengan universitas dan institusi internasional.
                                </p>
                            </div>
                        </div>

                        <!-- ITEM 2 -->
                        <div class="flex items-start gap-4 bg-[#f4f6fb] border border-gray-200 rounded-xl px-5 py-4">

                            <div
                                class="w-11 h-11 rounded-lg bg-yellow-400 text-[#29357A] flex items-center justify-center shrink-0">
                                <iconify-icon icon="solar:users-group-rounded-bold" width="20"></iconify-icon>
                            </div>

                            <div>
                                <h4 class="text-[14px] font-black text-[#29357A]">
                                    Partnership Akademik
                                </h4>
                                <p class="text-[13px] text-black mt-1 leading-6 font-medium">
                                    Program pertukaran, riset bersama, dan kerja sama pendidikan.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT VIDEO -->
                <div class="relative profile-video">

                    <!-- Glow -->
                    <div
                        class="absolute -inset-5 bg-gradient-to-r from-[#29357A]/20 to-yellow-300/20 blur-2xl rounded-[30px]">
                    </div>

                    <!-- Video Card -->
                    <div
                        class="relative overflow-hidden rounded-[22px] border border-gray-200 bg-white
                            shadow-[0_25px_80px_rgba(41,53,122,0.12)]">

                        <div class="aspect-video">

                            <iframe width="580" height="340"
                                src="https://www.youtube.com/embed/7ukl_9yqpPc?si=lbx4Z0TnYMEF9hfb"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        </div>

                        <!-- Bottom Info -->
                        <div
                            class="flex items-center justify-between px-6 py-5
                                bg-gradient-to-r from-[#29357A] to-[#33408d]">

                            <div>
                                <h4 class="text-white text-[14px] font-black tracking-wide">
                                    INTERNATIONAL OFFICE
                                </h4>
                                <p class="text-blue-100 text-[12px] mt-1">
                                    Universitas Darma Persada
                                </p>
                            </div>

                            <div
                                class="w-12 h-12 rounded-full bg-white/10 border border-white/10
                                    backdrop-blur-md flex items-center justify-center text-yellow-300">

                                <iconify-icon icon="solar:globe-bold" width="22"></iconify-icon>
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
                    class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-sm shadow-sm">

                    BIRO KERJA SAMA
                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-black tracking-tight text-[#29357A] leading-tight">
                    {{ $landing->app_name }}
                </h2>

                <p class="mt-5 text-[15px] leading-8 text-black font-bold">
                    Biro Kerja Sama Universitas Darma Persada mengelola kemitraan nasional dan internasional
                    dalam bidang pendidikan, penelitian, pertukaran, dan pengembangan jejaring global.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">

                <!-- 1. MoU & Kemitraan -->
                <div
                    class="group bg-white rounded-sm overflow-hidden border border-gray-200
                    hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)]
                    hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)]
                    transition-all duration-500 hover:-translate-y-2">

                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop"
                            alt="MoU Collaboration"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-sm">
                                MoU
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-[18px] font-black text-[#29357A] mb-3">
                            Kerja Sama & MoU
                        </h3>

                        <p class="text-[14px] leading-7 text-black font-bold">
                            Pengelolaan kerja sama dengan institusi nasional dan internasional
                            melalui penandatanganan MoU, MoA, dan IA.
                        </p>
                    </div>
                </div>

                <!-- 2. Mitra Internasional -->
                <div
                    class="group bg-white rounded-sm overflow-hidden border border-gray-200
                    hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)]
                    hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)]
                    transition-all duration-500 hover:-translate-y-2">

                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1200&auto=format&fit=crop"
                            alt="International Partners"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-sm">
                                GLOBAL
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-[18px] font-black text-[#29357A] mb-3">
                            Mitra Internasional
                        </h3>

                        <p class="text-[14px] leading-7 text-black font-bold">
                            Membangun jaringan dengan universitas dan lembaga luar negeri
                            untuk kolaborasi akademik dan riset global.
                        </p>
                    </div>
                </div>

                <!-- 3. Mobilitas Akademik -->
                <div
                    class="group bg-white rounded-sm overflow-hidden border border-gray-200
                    hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)]
                    hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)]
                    transition-all duration-500 hover:-translate-y-2">

                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=1200&auto=format&fit=crop"
                            alt="Student Exchange"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-sm">
                                EXCHANGE
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-[18px] font-black text-[#29357A] mb-3">
                            Mobilitas Internasional
                        </h3>

                        <p class="text-[14px] leading-7 text-black font-bold">
                            Program pertukaran mahasiswa dan dosen melalui skema student exchange,
                            visiting lecturer, dan joint program.
                        </p>
                    </div>
                </div>

                <!-- 4. Pengembangan Jejaring -->
                <div
                    class="group bg-white rounded-sm overflow-hidden border border-gray-200
                    hover:border-[#29357A]/20 shadow-[0_10px_40px_rgba(0,0,0,0.04)]
                    hover:shadow-[0_20px_60px_rgba(41,53,122,0.12)]
                    transition-all duration-500 hover:-translate-y-2">

                    <div class="relative overflow-hidden h-56">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1200&auto=format&fit=crop"
                            alt="Networking"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#29357A]/80 via-[#29357A]/10 to-transparent">
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span
                                class="px-3 py-1 bg-yellow-400 text-[#29357A] text-[10px] font-black tracking-[0.14em] rounded-sm">
                                NETWORK
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-[18px] font-black text-[#29357A] mb-3">
                            Jejaring Global
                        </h3>

                        <p class="text-[14px] leading-7 text-black font-bold">
                            Penguatan jaringan internasional untuk mendukung reputasi universitas,
                            riset kolaboratif, dan program global.
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

    <section class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mb-12">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-sm shadow-sm">
                    SEBARAN MITRA
                </span>

                <h2 class="mt-5 text-4xl lg:text-5xl font-black text-[#29357A]">
                    Peta Mitra Kerja Sama Internasional
                </h2>

                <p class="mt-5 text-[15px] leading-8 text-black font-bold">
                    Visualisasi sebaran mitra kerja sama Universitas Darma Persada di berbagai negara
                    untuk mendukung kolaborasi global.
                </p>

            </div>

            <!-- MAP -->
            <div id="viewDiv"
                class="w-full h-[520px] rounded-sm overflow-hidden border border-gray-200 shadow-[0_10px_40px_rgba(0,0,0,0.05)]">
            </div>

        </div>

    </section>

    <!-- Latest News -->
    <section id="berita" class="py-6 bg-[#F8F9FC] overflow-hidden">

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

    <!-- CTA Section -->
    <section id="kontak" class="pt-6 mb-16 overflow-hidden">

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative bg-white  px-8 md:px-12 lg:px-16  text-center overflow-hidden">

                <!-- Badge -->
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                    Kontak Kami

                </span>

                <!-- Heading -->
                <h2 class="mt-6 text-4xl lg:text-5xl font-black tracking-tight text-[#29357A] leading-tight">

                    {{ $landing->app_name }}

                </h2>

                <!-- CTA ACTION BUTTONS (PKS UI STYLE) -->
                <div class="mt-10 flex justify-center gap-5">

                    <!-- PHONE -->
                    <a href="tel:+628000000000"
                        class="group relative w-14 h-14 flex items-center justify-center
              rounded-full bg-[#29357A] text-white
              shadow-md hover:shadow-xl hover:-translate-y-1
              hover:bg-[#1f2c66] transition-all duration-300">

                        <iconify-icon icon="solar:phone-linear" width="20"
                            class="transition-transform duration-300 group-hover:scale-110">
                        </iconify-icon>

                        <span
                            class="absolute inset-0 rounded-full border border-[#29357A]/40
                     group-hover:scale-125 transition"></span>
                    </a>

                    <!-- EMAIL -->
                    <a href="mailto:info@unsada.ac.id"
                        class="group relative w-14 h-14 flex items-center justify-center
              rounded-full bg-[#29357A] text-white
              shadow-md hover:shadow-xl hover:-translate-y-1
              hover:bg-[#1f2c66] transition-all duration-300">

                        <iconify-icon icon="solar:letter-linear" width="20"
                            class="transition-transform duration-300 group-hover:scale-110">
                        </iconify-icon>

                        <span
                            class="absolute inset-0 rounded-full border border-[#29357A]/40
                     group-hover:scale-125 transition"></span>
                    </a>

                    <!-- MAPS -->
                    <a href="https://maps.google.com" target="_blank"
                        class="group relative w-14 h-14 flex items-center justify-center
              rounded-full bg-[#29357A] text-white
              shadow-md hover:shadow-xl hover:-translate-y-1
              hover:bg-[#1f2c66] transition-all duration-300">

                        <iconify-icon icon="solar:map-point-linear" width="20"
                            class="transition-transform duration-300 group-hover:scale-110">
                        </iconify-icon>

                        <span
                            class="absolute inset-0 rounded-full border border-[#29357A]/40
                     group-hover:scale-125 transition"></span>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://js.arcgis.com/4.27/esri/themes/light/main.css">
    <script src="https://js.arcgis.com/4.27/"></script>

    <script>
        const mitra = @json($partners);

        require([
            "esri/Map",
            "esri/views/MapView",
            "esri/Graphic",
            "esri/layers/GraphicsLayer"
        ], function(Map, MapView, Graphic, GraphicsLayer) {
            const map = new Map({
                basemap: "streets-navigation-vector"
            });

            const view = new MapView({
                container: "viewDiv",
                map: map,

                center: [120, 10],
                zoom: 3,

                constraints: {
                    snapToZoom: false
                },

                navigation: {
                    momentumEnabled: true,
                    mouseWheelZoomEnabled: true,
                    browserTouchPanEnabled: true,
                },

                ui: {
                    components: ["zoom"]
                },

                popup: {
                    dockEnabled: true,
                    dockOptions: {
                        buttonEnabled: false, // sembunyikan tombol undock
                        breakpoint: false, // selalu dock meskipun desktop
                        position: "bottom-right" // bottom-left | top-right | top-left
                    }
                }
            });

            view.when(() => {

                view.goTo({
                    center: [120, 10],
                    zoom: 3
                }, {
                    duration: 2500,
                    easing: "ease-in-out"
                });

            });

            const graphicsLayer = new GraphicsLayer();
            map.add(graphicsLayer);

            mitra.forEach((m) => {

                if (!m.latitude || !m.longitude) return;

                const point = {
                    type: "point",
                    longitude: parseFloat(m.longitude),
                    latitude: parseFloat(m.latitude)
                };

                const logoUrl = m.logo ?
                    "{{ asset('storage') }}/" + m.logo :
                    null;

                // Marker Premium
                const symbol = {
                    type: "simple-marker",

                    style: "circle",

                    color: [41, 53, 122, 0.95],

                    size: "20px",

                    outline: {
                        color: "#ffffff",
                        width: 3
                    }
                };

                const graphic = new Graphic({

                    geometry: point,

                    symbol: symbol,

                    popupTemplate: {
                        title: "",

                        content: `
                        <div style="
                            width:300px;
                            font-family:Inter,sans-serif;
                        ">

                            ${
                        logoUrl
                        ? `
                                                                                                                                                                                                                                                                                                                                                <div style="
                                                                                                                                                                                                                                                                                                                                                    display:flex;
                                                                                                                                                                                                                                                                                                                                                    justify-content:center;
                                                                                                                                                                                                                                                                                                                                                    margin-bottom:18px;
                                                                                                                                                                                                                                                                                                                                                ">
                                                                                                                                                                                                                                                                                                                                                    <img src="${logoUrl}"
                                                                                                                                                                                                                                                                                                                                                         style="
                                                                                                                                                                                                                                                                                                                                                            width:90px;
                                                                                                                                                                                                                                                                                                                                                            height:90px;
                                                                                                                                                                                                                                                                                                                                                            object-fit:contain;
                                                                                                                                                                                                                                                                                                                                                            border-radius:16px;
                                                                                                                                                                                                                                                                                                                                                            background:#fff;
                                                                                                                                                                                                                                                                                                                                                            padding:8px;
                                                                                                                                                                                                                                                                                                                                                            box-shadow:0 8px 30px rgba(0,0,0,.08);
                                                                                                                                                                                                                                                                                                                                                         ">
                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                `
                                : ''
                            }

                            <h3 style="
                                font-size:18px;
                                font-weight:800;
                                color:#29357A;
                                margin-bottom:10px;
                            ">
                                ${m.name}
                            </h3>

                            <div style="
                                display:inline-block;
                                background:#29357A10;
                                color:#29357A;
                                padding:6px 12px;
                                border-radius:999px;
                                font-size:11px;
                                font-weight:700;
                                margin-bottom:14px;
                            ">
                                MITRA INTERNASIONAL
                            </div>

                            <p style="
                                color:#555;
                                font-size:13px;
                                line-height:1.8;
                                text-align:justify;
                            ">
                                ${m.description ?? '-'}
                            </p>

                        </div>
            `
                    }
                });

                graphicsLayer.add(graphic);
            });

            if (graphicsLayer.graphics.length > 0) {

                view.when(() => {
                    view.goTo({
                        center: [130, 10],
                        zoom: 2.5
                    });
                });

            }
        });
    </script>

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
