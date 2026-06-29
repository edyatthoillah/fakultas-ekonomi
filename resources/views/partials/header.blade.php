    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-[#29357A] border-b border-white/10 shadow-lg">

        <div class="max-w-7xl mx-auto px-4 lg:px-6">
            <div class="flex justify-between items-center h-[74px]">

                <!-- Logo -->
                <a href="{{ route('landingpage') }}" class="flex items-center gap-4 group">

                    <!-- Logo Box -->
                    <div
                        class="relative bg-white/10 border border-white/10 rounded-xl p-2.5 backdrop-blur-md
                shadow-sm group-hover:shadow-lg group-hover:scale-105 transition-all duration-300">

                        <img src="{{ asset('storage/' . $landing->logo) }}"
                            class="h-11 sm:h-12 lg:h-14 w-auto object-contain">

                        <!-- glow effect -->
                        <div class="absolute inset-0 rounded-xl bg-white/5 opacity-0 group-hover:opacity-100 transition">
                        </div>
                    </div>

                    <!-- Text -->
                    <div class="hidden sm:block leading-tight">

                        <h1
                            class="text-[30px] lg:text-[34px] font-extrabold tracking-tight text-white leading-none
                   group-hover:text-yellow-300 transition">
                            UNSADA
                        </h1>

                        <p class="text-[11px] lg:text-[12px] tracking-[0.22em] text-blue-100 mt-1 font-medium ">
                            {{ $landing->app_name }}
                        </p>

                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-6">

                    <a href="{{ route('landingpage') }}"
                        class="text-[13px] font-bold  tracking-wide text-white hover:text-yellow-300 transition">
                        Beranda
                    </a>

                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[13px] font-bold tracking-wide text-white hover:text-yellow-300 transition">

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

                                {{ $landing->app_name }}

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
                        </div>

                    </div>

                    <div class="relative group">

                        <button
                            class="flex items-center gap-1 text-[13px] font-bold tracking-wide text-white hover:text-yellow-300 transition">

                            Mitra & Kerja Sama
                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13">
                            </iconify-icon>

                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[200px] bg-[#f5f5f5] border border-gray-300 shadow-lg opacity-0 invisible translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">

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
                            class="flex items-center gap-1 text-[13px] font-bold tracking-wide text-white hover:text-yellow-300 transition">

                            Dokumen

                            <iconify-icon icon="solar:alt-arrow-down-linear" width="13"></iconify-icon>
                        </button>

                        <!-- DROPDOWN -->
                        <div
                            class="absolute left-0 top-full mt-2 w-[240px] bg-white border border-gray-200 shadow-lg
                        opacity-0 invisible translate-y-1
                        group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                        transition-all duration-200 z-50 rounded-xs overflow-hidden">

                            @foreach ($lecturer as $category)
                                <a href="{{ route('documents.show', $category->id) }}"
                                    class="block px-4 py-2 text-[13px] font-semibold text-gray-700
                        hover:bg-gray-100 hover:text-[#1d2d74] transition">

                                    {{ $category->document_name }}

                                </a>
                            @endforeach

                        </div>

                    </div>



                    <div class="relative group">

                        <!-- BUTTON -->
                        <a href="{{ route('news.frontend.index') }}"
                            class="flex items-center gap-1 text-[13px] font-bold tracking-wide text-white hover:text-yellow-300 transition">

                            Berita
                        </a>

                    </div>

                    <div class="relative group">

                        <!-- BUTTON -->
                        <button
                            class="flex items-center gap-1 text-[13px] font-bold tracking-wide text-white hover:text-yellow-300 transition">

                            Galeri

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

                        </div>

                    </div>

                </div>


                <!-- Right Button -->
                <div class="hidden lg:flex items-center gap-3">

                    <!-- Telp -->
                    <a href="tel:+628000000000"
                        class="w-10 h-10 flex items-center justify-center rounded-full
              bg-white/10 border border-white/20 text-white
              hover:bg-yellow-400 hover:text-[#1d2d74]
              hover:scale-110 transition-all duration-200"
                        title="Hubungi Kami">

                        <iconify-icon icon="solar:phone-linear" width="18"></iconify-icon>
                    </a>

                    <!-- Email -->
                    <a href="mailto:info@unsada.ac.id"
                        class="w-10 h-10 flex items-center justify-center rounded-full
              bg-white/10 border border-white/20 text-white
              hover:bg-yellow-400 hover:text-[#1d2d74]
              hover:scale-110 transition-all duration-200"
                        title="Email Kami">

                        <iconify-icon icon="solar:letter-linear" width="18"></iconify-icon>
                    </a>

                    <!-- Maps -->
                    <a href="https://maps.google.com" target="_blank"
                        class="w-10 h-10 flex items-center justify-center rounded-full
              bg-white/10 border border-white/20 text-white
              hover:bg-yellow-400 hover:text-[#1d2d74]
              hover:scale-110 transition-all duration-200"
                        title="Lokasi Kami">

                        <iconify-icon icon="solar:map-point-linear" width="18"></iconify-icon>
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
        <div id="mobile-menu"
            class="hidden lg:hidden bg-white border-t border-[#29357A]/10 shadow-xl max-h-[calc(100vh-74px)] overflow-y-auto">

            <div class="p-4 space-y-3">

                <!-- Beranda -->
                <a href="{{ route('landingpage') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-2xl
            text-[#29357A] font-semibold text-sm
            hover:bg-[#29357A]/5 transition">

                    <iconify-icon icon="solar:home-2-linear" width="18"></iconify-icon>
                    Beranda

                </a>

                <!-- Tentang Kami -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-2xl overflow-hidden bg-white">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3
                text-[#29357A] font-semibold text-sm bg-gray-50">

                        <div class="flex items-center gap-3">
                            <iconify-icon icon="solar:user-id-linear" width="18"></iconify-icon>
                            Tentang Kami
                        </div>

                        <iconify-icon icon="solar:alt-arrow-down-linear" width="16" class="transition duration-300"
                            :class="{ 'rotate-180': open }">
                        </iconify-icon>

                    </button>

                    <div x-show="open" x-collapse class="bg-white">

                        <a href="{{ route('about.fakultas-ekonomi') }}"
                            class="block px-6 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                            {{ $landing->app_name }}

                        </a>

                        <a href="{{ route('about.visi-misi') }}"
                            class="block px-6 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                            Visi Misi

                        </a>

                        <a href="{{ route('about.struktur-organisasi') }}"
                            class="block px-6 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                            Struktur Organisasi

                        </a>

                    </div>

                </div>

                <!-- Mitra & Kerja Sama -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-2xl overflow-hidden bg-white">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3
                text-[#29357A] font-semibold text-sm bg-gray-50">

                        <div class="flex items-center gap-3">
                            <iconify-icon icon="solar:users-group-rounded-linear" width="18"></iconify-icon>
                            Mitra & Kerja Sama
                        </div>

                        <iconify-icon icon="solar:alt-arrow-down-linear" width="16"
                            class="transition duration-300" :class="{ 'rotate-180': open }">
                        </iconify-icon>

                    </button>

                    <div x-show="open" x-collapse>

                        @foreach ($contentCategories as $category)
                            <a href="{{ route('content.category', $category->slug) }}"
                                class="block px-6 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                                {{ $category->name }}

                            </a>
                        @endforeach

                    </div>

                </div>

                <!-- Dokumen -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-2xl overflow-hidden bg-white">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3
                text-[#29357A] font-semibold text-sm bg-gray-50">

                        <div class="flex items-center gap-3">
                            <iconify-icon icon="solar:document-text-linear" width="18"></iconify-icon>
                            Dokumen
                        </div>

                        <iconify-icon icon="solar:alt-arrow-down-linear" width="16"
                            class="transition duration-300" :class="{ 'rotate-180': open }">
                        </iconify-icon>

                    </button>

                    <div x-show="open" x-collapse>

                        @foreach ($lecturer as $doc)
                            <a href="{{ route('documents.show', $doc->id) }}"
                                class="block px-6 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                                {{ $doc->document_name }}

                            </a>
                        @endforeach

                    </div>

                </div>

                <!-- Berita -->
                <a href="{{ route('news.frontend.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-2xl
            text-[#29357A] font-semibold text-sm
            hover:bg-[#29357A]/5 transition">

                    <iconify-icon icon="solar:newspaper-linear" width="18"></iconify-icon>
                    Berita

                </a>

                <!-- Galeri -->
                <div x-data="{ open: false }" class="border border-gray-100 rounded-2xl overflow-hidden bg-white">

                    <button @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3
                text-[#29357A] font-semibold text-sm bg-gray-50">

                        <div class="flex items-center gap-3">
                            <iconify-icon icon="solar:gallery-linear" width="18"></iconify-icon>
                            Galeri
                        </div>

                        <iconify-icon icon="solar:alt-arrow-down-linear" width="16"
                            class="transition duration-300" :class="{ 'rotate-180': open }">
                        </iconify-icon>

                    </button>

                    <div x-show="open" x-collapse>

                        @foreach ($informationCategories as $category)
                            <a href="{{ route('information.category', $category->slug) }}"
                                class="block px-6 py-3 text-sm text-gray-600 hover:bg-[#29357A]/5">

                                {{ $category->name }}

                            </a>
                        @endforeach

                    </div>

                </div>

                <!-- CTA -->
                <div class="pt-3">

                    <div class="grid grid-cols-3 gap-2">

                        <a href="tel:+628000000000"
                            class="h-12 rounded-xl bg-[#29357A] text-white flex items-center justify-center">

                            <iconify-icon icon="solar:phone-linear" width="20"></iconify-icon>

                        </a>

                        <a href="mailto:info@unsada.ac.id"
                            class="h-12 rounded-xl bg-[#29357A] text-white flex items-center justify-center">

                            <iconify-icon icon="solar:letter-linear" width="20"></iconify-icon>

                        </a>

                        <a href="https://maps.google.com" target="_blank"
                            class="h-12 rounded-xl bg-[#29357A] text-white flex items-center justify-center">

                            <iconify-icon icon="solar:map-point-linear" width="20"></iconify-icon>

                        </a>

                    </div>

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
