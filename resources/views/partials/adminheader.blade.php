<header
    class="bg-white shadow-sm h-16 flex items-center justify-between px-4 fixed top-0 right-0 left-0 md:left-64 z-30">

    <!-- Mobile Menu -->
    <button @click="sidebarOpen = true" class="text-gray-500 md:hidden" aria-label="Open sidebar">
        <i class="fas fa-bars text-2xl"></i>
    </button>

    <!-- Spacer -->
    <div class="hidden md:block"></div>

    <!-- Right Menu -->
    <div class="flex items-center gap-4 ml-auto">
        <!-- Profile -->
        <button class="flex items-center gap-2">
            <div class="w-9 h-9 rounded-full bg-blue-100 flex items-center justify-center">
                <i class="fas fa-user text-blue-600"></i>
            </div>

            <span class="hidden md:block text-sm font-medium text-gray-700">
                {{ Auth::user()->name }}
            </span>
        </button>

        <!-- Divider -->
        <div class="h-6 w-px bg-gray-200"></div>

        <!-- Logout -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="flex items-center gap-2 px-4 py-2 rounded-lg bg-red-500 hover:bg-red-600 text-white text-sm transition">
                <i class="fas fa-sign-out-alt"></i>
                <span class="hidden md:inline">Logout</span>
            </button>
        </form>

    </div>

</header>
