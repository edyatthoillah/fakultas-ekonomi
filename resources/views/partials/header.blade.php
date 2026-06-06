    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-[#29357A] border-b border-white/10 shadow-lg">

        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="flex justify-between items-center h-[74px]">

                <!-- Logo -->
                <a href="{{ route('landingpage') }}" class="flex items-center gap-3">

                    <!-- Logo -->
                    <div class="bg-white/10 border border-white/10 rounded-md p-1.5 backdrop-blur-sm">
                        <img src="{{ asset('storage/' . $landing->logo) }}" class="h-10 w-auto object-contain">
                    </div>

                    <!-- Text -->
                    <div class="hidden sm:block leading-tight">

                        <h1 class="text-[28px] font-black tracking-tight text-white leading-none">
                            UNSADA
                        </h1>

                        <p class="text-[11px] tracking-[0.18em] text-blue-100 mt-0.5 font-medium">
                            {{ $landing->app_name }}
                        </p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-6">

                    {{-- <a href="{{ route('landingpage') }}"
                        class="text-[12px] font-semibold tracking-wide text-white hover:text-yellow-300 transition">
                        Beranda
                    </a> --}}

                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[14px] tracking-wide text-white hover:text-yellow-300 transition">

                            Tentang Kami

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13"></iconify-icon>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[220px] bg-white border border-gray-200 shadow-lg
                            opacity-0 invisible translate-y-1
                            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                            transition-all duration-200 z-50 rounded-xs overflow-hidden">

                            <!-- Fakultas Ekonomi -->
                            <a href="{{ route('about.fakultas-ekonomi') }}"
                                class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                                hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                Fakultas Ekonomi

                            </a>

                            <!-- Visi Misi -->
                            <a href="{{ route('about.visi-misi') }}"
                                class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                                hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                Visi Misi

                            </a>

                            <!-- Struktur Organisasi -->
                            <a href="{{ route('about.struktur-organisasi') }}"
                                class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                                    hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                Struktur Organisasi

                            </a>
                            <a href="{{ route('lecturers.index') }}"
                                class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                                    hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                Tenaga Pengajar

                            </a>

                            <a href="{{ url('https://jurnalfe.unsada.ac.id/index.php/jmafe') }}"
                                class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                                    hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                Jurnal Fakultas Ekonomi

                            </a>
                        </div>

                    </div>

                    <div class="relative group">

                        <button
                            class="flex items-center gap-1 text-[14px] tracking-wide text-white hover:text-yellow-300 transition">

                            Program Studi
                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13">
                            </iconify-icon>

                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[200px] bg-[#f5f5f5] border border-gray-300 shadow-lg opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">

                            @foreach ($studyPrograms as $studyProgram)
                                <a href="{{ route('study-programs.show', $studyProgram->slug) }}"
                                    class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                                    hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                    {{ $studyProgram->name }}

                                </a>
                            @endforeach

                        </div>

                    </div>

                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[14px] tracking-wide text-white hover:text-yellow-300 transition">

                            Mahasiswa & Alumni

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13"></iconify-icon>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[220px] bg-white border border-gray-200 shadow-lg
                            opacity-0 invisible translate-y-1
                            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                            transition-all duration-200 z-50 rounded-xs overflow-hidden">

                            @foreach ($studentCategories as $category)
                                <a href="{{ route('students.category', $category->slug) }}"
                                    class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                         hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                    {{ $category->name }}

                                </a>
                            @endforeach

                        </div>

                    </div>

                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[14px] tracking-wide text-white hover:text-yellow-300 transition">

                            Fasilitas

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13"></iconify-icon>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[240px] bg-white border border-gray-200 shadow-lg
                        opacity-0 invisible translate-y-1
                        group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                        transition-all duration-200 z-50 rounded-xs overflow-hidden">

                            @foreach ($facilityCategories as $facility)
                                <a href="{{ route('facility.category', $facility->slug) }}"
                                    class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                       hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                    {{ $facility->name }}

                                </a>
                            @endforeach

                        </div>

                    </div>

                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[14px] tracking-wide text-white hover:text-yellow-300 transition">

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
                                    class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                       hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                    {{ $category->name }}

                                </a>
                            @endforeach

                        </div>

                    </div>



                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[14px] tracking-wide text-white hover:text-yellow-300 transition">

                            Pusat Informasi

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13"></iconify-icon>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[220px] bg-white border border-gray-200 shadow-lg
                            opacity-0 invisible translate-y-1
                            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                            transition-all duration-200 z-50 rounded-xs overflow-hidden">

                            @foreach ($informationCategories as $category)
                                <a href="{{ route('information.category', $category->slug) }}"
                                    class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                                     hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                    {{ $category->name }}

                                </a>
                            @endforeach
                            <a href="{{ url('https://karirlink.id/') }}"
                                class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                                     hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                Pusat Karir

                            </a>

                        </div>

                    </div>

                </div>


                <!-- Right Button -->
                <div class="hidden lg:flex items-center">

                    <a href="{{ url('https://pmb.unsada.ac.id/') }}"
                        class="h-9 px-5 inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-[#1d2d74] text-[13px] font-bold tracking-wider rounded-sm transition-all duration-200 shadow-md">

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
        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden lg:hidden bg-white border-t border-[#29357A]/10 shadow-lg max-h-[calc(100vh-80px)] overflow-y-auto">

            <div class="p-4 space-y-2">

                <!-- Beranda -->
                <a href="{{ route('landingpage') }}"
                    class="flex items-center py-3 px-4 rounded-xl text-sm font-semibold text-[#29357A] hover:bg-[#29357A]/5 transition">
                    Beranda
                </a>

                <!-- Tentang Kami -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-xl overflow-hidden">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 bg-gray-50 text-[#29357A] font-semibold text-sm">

                        <span>Tentang Kami</span>

                        <i class="fa-solid fa-chevron-down transition" :class="{ 'rotate-180': open }"></i>

                    </button>

                    <div x-show="open" x-collapse class="bg-white">

                        <a href="{{ route('about.fakultas-ekonomi') }}"
                            class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">
                            Fakultas Ekonomi
                        </a>

                        <a href="{{ route('about.visi-misi') }}"
                            class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">
                            Visi Misi
                        </a>

                        <a href="{{ route('about.struktur-organisasi') }}"
                            class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">
                            Struktur Organisasi
                        </a>

                        <a href="{{ route('lecturers.index') }}"
                            class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">
                            Tenaga Pengajar
                        </a>

                    </div>

                </div>

                <!-- Fasilitas -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-xl overflow-hidden">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 bg-gray-50 text-[#29357A] font-semibold text-sm">

                        <span>Fasilitas</span>

                        <i class="fa-solid fa-chevron-down transition" :class="{ 'rotate-180': open }"></i>

                    </button>

                    <div x-show="open" x-collapse>

                        @foreach ($facilityCategories as $facility)
                            <a href="{{ route('facility.category', $facility->slug) }}"
                                class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                                {{ $facility->name }}

                            </a>
                        @endforeach

                    </div>

                </div>

                <!-- Konten Ilmiah -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-xl overflow-hidden">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 bg-gray-50 text-[#29357A] font-semibold text-sm">

                        <span>Konten Ilmiah</span>

                        <i class="fa-solid fa-chevron-down transition" :class="{ 'rotate-180': open }"></i>

                    </button>

                    <div x-show="open" x-collapse>

                        @foreach ($contentCategories as $category)
                            <a href="{{ route('content.category', $category->slug) }}"
                                class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                                {{ $category->name }}

                            </a>
                        @endforeach

                    </div>

                </div>

                <!-- Mahasiswa & Alumni -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-xl overflow-hidden">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 bg-gray-50 text-[#29357A] font-semibold text-sm">

                        <span>Mahasiswa & Alumni</span>

                        <i class="fa-solid fa-chevron-down transition" :class="{ 'rotate-180': open }"></i>

                    </button>

                    <div x-show="open" x-collapse>

                        @foreach ($studentCategories as $category)
                            <a href="{{ route('students.category', $category->slug) }}"
                                class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                                {{ $category->name }}

                            </a>
                        @endforeach

                    </div>

                </div>

                <!-- Pusat Informasi -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-xl overflow-hidden">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 bg-gray-50 text-[#29357A] font-semibold text-sm">

                        <span>Pusat Informasi</span>

                        <i class="fa-solid fa-chevron-down transition" :class="{ 'rotate-180': open }"></i>

                    </button>

                    <div x-show="open" x-collapse>

                        @foreach ($informationCategories as $category)
                            <a href="{{ route('information.category', $category->slug) }}"
                                class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                                {{ $category->name }}

                            </a>
                        @endforeach

                    </div>

                </div>

                <!-- Program Studi -->
                <!-- Program Studi -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-xl overflow-hidden">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 bg-gray-50 text-[#29357A] font-semibold text-sm">

                        <span>Program Studi</span>

                        <i class="fa-solid fa-chevron-down transition duration-300" :class="{ 'rotate-180': open }">
                        </i>

                    </button>

                    <div x-show="open" x-collapse class="bg-white">

                        @foreach ($studyPrograms as $studyProgram)
                            <a href="{{ route('study-programs.show', $studyProgram->slug) }}"
                                class="block px-5 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5 hover:text-[#29357A] transition">

                                {{ $studyProgram->name }}

                            </a>
                        @endforeach

                    </div>

                </div>

                <!-- CTA -->
                <div class="pt-4">

                    <a href="https://pmb.unsada.ac.id/"
                        class="flex items-center justify-center h-12 w-full rounded-xl bg-[#29357A] hover:bg-[#1f2c66] text-white text-sm font-bold transition shadow-lg">

                        Pendaftaran Mahasiswa Baru

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


    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs/dist/cdn.min.js"></script>
