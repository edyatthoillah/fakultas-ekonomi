    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-[#29357A] border-b border-white/10 shadow-lg">

        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="flex justify-between items-center h-[64px]">

                <!-- Logo -->
                <a href="" class="flex items-center gap-3">

                    <!-- Logo -->
                    <div class="bg-white/10 border border-white/10 rounded-md p-1.5 backdrop-blur-sm">
                        <img src="{{ asset('assets/images/logo.png') }}" class="h-8 w-auto object-contain">
                    </div>

                    <!-- Text -->
                    <div class="hidden sm:block leading-tight">

                        <h1 class="text-[22px] font-black tracking-tight text-white leading-none">
                            UNSADA
                        </h1>

                        <p class="text-[9px] tracking-[0.18em] text-blue-100 mt-0.5 font-medium">
                            Fakultas Ekonomi
                        </p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-6">

                    <a href="{{ route('landingpage') }}"
                        class="text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">
                        Beranda
                    </a>

                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">

                            Fasilitas

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13"></iconify-icon>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[220px] bg-white border border-gray-200 shadow-lg
               opacity-0 invisible translate-y-1
               group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
               transition-all duration-200 z-50 rounded-xs overflow-hidden">

                            @foreach ($facilityCategories as $category)
                                <a href="{{ route('facility.category', $category->slug) }}"
                                    class="block px-4 py-2 text-[11px] font-semibold text-gray-700
                       hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                    {{ $category->name }}

                                </a>
                            @endforeach

                        </div>

                    </div>

                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">

                            Konten Ilmiah

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13"></iconify-icon>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[240px] bg-white border border-gray-200 shadow-lg
               opacity-0 invisible translate-y-1
               group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
               transition-all duration-200 z-50 rounded-xs overflow-hidden">

                            @foreach ($contentCategories as $category)
                                <a href="{{ route('content.category', $category->slug) }}"
                                    class="block px-4 py-2 text-[11px] font-semibold text-gray-700
                       hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                    {{ $category->name }}

                                </a>
                            @endforeach

                        </div>

                    </div>

                    <div class="relative group">

                        <button
                            class="flex items-center gap-1 text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">

                            Mahasiswa

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13">
                            </iconify-icon>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[260px] bg-[#f5f5f5] border border-gray-300 shadow-lg opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">

                            <a href="#himpunan-mahasiswa"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Himpunan Mahasiswa
                            </a>

                            <a href="#mahasiswa-berprestasi"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Mahasiswa Berprestasi
                            </a>

                            <a href="#kegiatan-mahasiswa"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Kegiatan Mahasiswa
                            </a>

                            <a href="#praktek-kerja-magang"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Praktek Kerja Magang
                            </a>

                        </div>
                    </div>

                    <div class="relative group">

                        <button
                            class="flex items-center gap-1 text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">

                            Pusat Informasi

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13">
                            </iconify-icon>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[270px] bg-[#f5f5f5] border border-gray-300 shadow-lg opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">

                            <a href="#kolaborasi-kerjasama"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Kolaborasi dan Kerja Sama
                            </a>

                            <a href="#seminar"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Seminar
                            </a>

                            <a href="#beasiswa"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Beasiswa
                            </a>

                            <a href="#peluang-kerja"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Peluang Kerja
                            </a>

                            <a href="#sosial-media"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Sosial Media
                            </a>

                            <a href="#profil-lulusan"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Profil Lulusan
                            </a>

                        </div>
                    </div>

                    <div class="relative group">

                        <button
                            class="flex items-center gap-1 text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">

                            Jurusan

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13">
                            </iconify-icon>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[200px] bg-[#f5f5f5] border border-gray-300 shadow-lg opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">

                            <a href="#manajemen"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Manajemen
                            </a>

                            <a href="#akuntansi"
                                class="block px-4 py-3 text-[11px] font-semibold text-[#1d2d74] hover:bg-gray-200 transition">

                                Akuntansi
                            </a>

                        </div>
                    </div>

                    <a href="#berita"
                        class="text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">
                        Berita
                    </a>
                    <a href="#berita"
                        class="text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">
                        Brosur
                    </a>
                </div>


                <!-- Right Button -->
                <div class="hidden lg:flex items-center">

                    <a href="{{ url('https://pmb.unsada.ac.id/') }}"
                        class="h-9 px-5 inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-[#1d2d74] text-[11px] font-bold tracking-wider rounded-sm transition-all duration-200 shadow-md">

                        Pendaftaran
                    </a>
                </div>

                <!-- Mobile Button -->
                <div class="lg:hidden">

                    <button id="mobile-menu-btn"
                        class="w-9 h-9 flex items-center justify-center rounded-md bg-white/10 border border-white/10 text-white">

                        <iconify-icon icon="solar:hamburger-menu-linear" width="20">
                        </iconify-icon>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-[#29357A] border-t border-white/10">

            <div class="px-4 py-4 space-y-1">

                <!-- Beranda -->
                <a href="{{ route('landingpage') }}"
                    class="block py-3 text-[12px] font-semibold tracking-wide text-white border-b border-white/10">
                    Beranda
                </a>

                <!-- Dosen -->
                <div class="py-3 border-b border-white/10">

                    <p class="text-[12px] font-bold tracking-wide text-yellow-300 mb-3">
                        Dosen
                    </p>

                    <div class="pl-3 space-y-3">

                        <a href="{{ route('tutor') }}" class="block text-[12px] text-blue-100 hover:text-white">

                            Tenaga Pendidik
                        </a>

                        <a href="#kegiatan-dosen" class="block text-[12px] text-blue-100 hover:text-white">

                            Kegiatan Dosen
                        </a>
                    </div>
                </div>

                <!-- Penelitian -->
                <div class="py-3 border-b border-white/10">

                    <p class="text-[12px] font-bold tracking-wide text-yellow-300 mb-3">
                        Penelitian
                    </p>

                    <div class="pl-3 space-y-3">

                        <a href="#penelitian" class="block text-[12px] text-blue-100 hover:text-white">

                            Penelitian
                        </a>

                        <a href="#pengabdian" class="block text-[12px] text-blue-100 hover:text-white">

                            Pengabdian Kepada Masyarakat
                        </a>

                        <a href="#publikasi" class="block text-[12px] text-blue-100 hover:text-white">

                            Publikasi Ilmiah
                        </a>

                        <a href="#penghargaan" class="block text-[12px] text-blue-100 hover:text-white">

                            Penghargaan
                        </a>
                    </div>
                </div>

                <!-- Mahasiswa -->
                <div class="py-3 border-b border-white/10">

                    <p class="text-[12px] font-bold tracking-wide text-yellow-300 mb-3">
                        Mahasiswa
                    </p>

                    <div class="pl-3 space-y-3">

                        <a href="#himpunan-mahasiswa" class="block text-[12px] text-blue-100 hover:text-white">

                            Himpunan Mahasiswa
                        </a>

                        <a href="#mahasiswa-berprestasi" class="block text-[12px] text-blue-100 hover:text-white">

                            Mahasiswa Berprestasi
                        </a>

                        <a href="#kegiatan-mahasiswa" class="block text-[12px] text-blue-100 hover:text-white">

                            Kegiatan Mahasiswa
                        </a>

                        <a href="#praktek-kerja-magang" class="block text-[12px] text-blue-100 hover:text-white">

                            Praktek Kerja Magang
                        </a>
                    </div>
                </div>

                <!-- Pusat Informasi -->
                <div class="py-3 border-b border-white/10">

                    <p class="text-[12px] font-bold tracking-wide text-yellow-300 mb-3">
                        Pusat Informasi
                    </p>

                    <div class="pl-3 space-y-3">

                        <a href="#kolaborasi-kerjasama" class="block text-[12px] text-blue-100 hover:text-white">

                            Kolaborasi dan Kerja Sama
                        </a>

                        <a href="#seminar" class="block text-[12px] text-blue-100 hover:text-white">

                            Seminar
                        </a>

                        <a href="#beasiswa" class="block text-[12px] text-blue-100 hover:text-white">

                            Beasiswa
                        </a>

                        <a href="#peluang-kerja" class="block text-[12px] text-blue-100 hover:text-white">

                            Peluang Kerja
                        </a>

                        <a href="#sosial-media" class="block text-[12px] text-blue-100 hover:text-white">

                            Sosial Media
                        </a>

                        <a href="#profil-lulusan" class="block text-[12px] text-blue-100 hover:text-white">

                            Profil Lulusan
                        </a>
                    </div>
                </div>

                <div class="py-3 border-b border-white/10">

                    <p class="text-[12px] font-bold tracking-wide text-yellow-300 mb-3">
                        Jurusan
                    </p>

                    <div class="pl-3 space-y-3">

                        <a href="#manajemen" class="block text-[12px] text-blue-100 hover:text-white">

                            Manajemen
                        </a>

                        <a href="#akuntansi" class="block text-[12px] text-blue-100 hover:text-white">

                            Akuntansi
                        </a>

                    </div>
                </div>
                <!-- Fasilitas -->
                <a href="#berita"
                    class="block py-3 text-[12px] font-semibold tracking-wide text-white border-b border-white/10">
                    Berita
                </a>

                <a href="#berita"
                    class="block py-3 text-[12px] font-semibold tracking-wide text-white border-b border-white/10">
                    Brosur
                </a>
                <!-- Pendaftaran Button -->
                <div class="pt-4">

                    <a href="{{ url('https://pmb.unsada.ac.id/') }}"
                        class="flex items-center justify-center h-10 w-full bg-yellow-400 hover:bg-yellow-300 text-[#1d2d74] text-[11px] font-bold tracking-wider rounded-sm transition">

                        Pendaftaran
                    </a>
                </div>

            </div>
        </div>
    </nav>


    <!-- Interactive Scripts -->
    <script>
        // Toggle Mobile Menu
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Toggle Dark Mode
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleBtnMobile = document.getElementById('theme-toggle-mobile');

        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            const isDark = document.documentElement.classList.contains('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        }

        themeToggleBtn.addEventListener('click', toggleDarkMode);
        themeToggleBtnMobile.addEventListener('click', toggleDarkMode);

        // Check local storage
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
