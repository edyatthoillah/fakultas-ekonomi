    <!-- Footer -->
    <footer class="bg-black text-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

            <!-- Top -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

                <!-- Brand -->
                <div>

                    <!-- Logo + Text -->
                    <div class="flex items-center gap-4">

                        <!-- Logo -->
                        <img src="{{ asset('storage/' . $landing->logo) }}" alt="Logo Fakultas"
                            class="w-14 h-14 object-contain">

                        <!-- Text -->
                        <div>

                            <h2 class="text-2xl font-black tracking-tight text-white">
                                Fakultas Ekonomi
                            </h2>

                            <p class="text-sm text-white/80 mt-1">
                                Universitas Darma Persada
                            </p>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="mt-5 text-[14px] leading-7 text-white/75">
                        {{ $landing->footer_description }}
                    </p>
                </div>

                <!-- Menu -->
                <div>

                    <h3 class="text-lg font-bold text-white mb-5">
                        Menu
                    </h3>

                    <ul class="space-y-3 text-sm text-white/80">

                        <li>
                            <a href="#beranda" class="hover:text-white transition">
                                Beranda
                            </a>
                        </li>

                        <li>
                            <a href="#profil" class="hover:text-white transition">
                                Profil
                            </a>
                        </li>

                        <li>
                            <a href="#peluang" class="hover:text-white transition">
                                Peluang Karir
                            </a>
                        </li>

                        <li>
                            <a href="#kerjasama" class="hover:text-white transition">
                                Kerja Sama
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>

                    <h3 class="text-lg font-bold text-white mb-5">
                        Kontak
                    </h3>

                    <ul class="space-y-4 text-sm text-white/80">

                        <li class="flex items-start gap-3">

                            <iconify-icon icon="solar:map-point-linear" width="18" class="mt-1">
                            </iconify-icon>

                            <span>
                                {{ $landing->address }}
                            </span>
                        </li>

                        <li class="flex items-center gap-3">

                            <iconify-icon icon="solar:phone-calling-linear" width="18">
                            </iconify-icon>

                            <span>
                                {{ $landing->whatsapp }}
                            </span>
                        </li>

                        <li class="flex items-center gap-3">

                            <iconify-icon icon="solar:letter-linear" width="18">
                            </iconify-icon>

                            <span>
                                {{ $landing->email }}
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Social -->
                <div>

                    <h3 class="text-lg font-bold text-white mb-5">
                        Media Sosial
                    </h3>

                    <div class="flex gap-3">

                        <!-- Instagram -->
                        <a href="{{ $landing->instagram }}" target="_blank"
                            class="w-10 h-10 rounded-md bg-white/10 hover:bg-white/20 transition flex items-center justify-center">

                            <i class="fa-brands fa-instagram text-white text-lg"></i>
                        </a>

                        <!-- YouTube -->
                        <a href="{{ url('https://youtu.be/9pN21ckF8rI?si=Vu3ut12peNPpql6x') }}" target="_blank"
                            class="w-10 h-10 rounded-md bg-white/10 hover:bg-white/20 transition flex items-center justify-center">

                            <i class="fa-brands fa-youtube text-white text-lg"></i>
                        </a>

                        <!-- Facebook -->
                        <a href="#" target="_blank"
                            class="w-10 h-10 rounded-md bg-white/10 hover:bg-white/20 transition flex items-center justify-center">

                            <i class="fa-brands fa-facebook-f text-white text-lg"></i>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Bottom -->
            <div
                class="mt-12 pt-6 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4">

                <p class="text-sm text-white/60 text-center md:text-left">
                    © 2026 {{ $landing->app_name }} Universitas Darma Persada.
                </p>

                <div class="flex gap-5 text-sm text-white/60">

                    <a href="#" class="hover:text-white transition">
                        Privasi
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Ketentuan
                    </a>
                </div>
            </div>
        </div>
    </footer>
