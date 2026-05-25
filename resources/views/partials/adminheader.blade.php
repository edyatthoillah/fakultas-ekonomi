<header
    class="bg-white shadow-sm h-16 flex items-center justify-between px-4 fixed top-0 right-0 left-0 md:left-64 z-30">

    <!-- Mobile Menu -->
    <button @click="sidebarOpen = true" class="text-gray-500 md:hidden" aria-label="Open sidebar">
        <i class="fas fa-bars text-2xl"></i>
    </button>

    <!-- Spacer -->
    <div class="hidden md:block"></div>

    <!-- Right Menu -->
    <div class="flex items-center gap-4 ml-auto" x-data="{ open: false }">

        <!-- Profile Button -->
        <button @click="open = !open" class="flex items-center gap-2 relative">

            <div class="w-9 h-9 rounded-full bg-blue-100 flex items-center justify-center">
                <i class="fas fa-user text-blue-600"></i>
            </div>

            <span class="hidden md:block text-sm font-medium text-gray-700">
                {{ Auth::user()->name }}
            </span>

            <!-- Dropdown Icon -->
            <i class="fas fa-chevron-down text-xs text-gray-500"></i>

        </button>

        <!-- Dropdown -->
        <div x-show="open" x-transition @click.away="open = false"
            class="absolute right-4 top-14 w-44 bg-white border border-gray-100 rounded-md shadow-lg overflow-hidden z-50">

            <!-- User Info -->
            <div class="px-4 py-3 border-b bg-gray-50">
                <p class="text-sm font-medium text-gray-700">
                    {{ Auth::user()->name }}
                </p>
                <p class="text-xs text-gray-400">
                    Administrator
                </p>
            </div>

            <!-- Logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit"
                    class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition">

                    <i class="fas fa-sign-out-alt"></i>
                    Logout

                </button>
            </form>

        </div>

        <!-- Divider (optional, bisa dihapus kalau sudah dropdown) -->
        <div class="h-6 w-px bg-gray-200"></div>

    </div>

</header>
