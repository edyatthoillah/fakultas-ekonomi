<!-- SIDEBAR -->
<aside
    class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-900 text-white
           transform transition-transform duration-300 ease-in-out
           md:translate-x-0 shadow-2xl"
    :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }">

    <!-- HEADER -->
    <div class="flex items-center justify-between h-16 px-4 border-b border-gray-800 bg-gray-950">

        <div class="flex items-center gap-3">

            <img src="{{ asset('assets/images/logo.png') }}" class="w-9 h-9 object-contain rounded-sm bg-white p-1">

            <div>
                <h1 class="text-sm font-bold leading-tight">
                    Fakultas Ekonomi
                </h1>
                <p class="text-[11px] text-gray-400">
                    Admin Panel
                </p>
            </div>

        </div>

        <button @click="sidebarOpen = false" class="md:hidden text-gray-300 hover:text-white">
            <i class="fas fa-times"></i>
        </button>

    </div>

    <!-- NAV -->
    <nav class="mt-4 px-2 space-y-1 overflow-y-auto h-[calc(100vh-4rem)]">

        <!-- DASHBOARD -->
        {{-- <a href="{{ route('dashboard') }}" @click.prevent="activePage = 'dashboard'; sidebarOpen = false"
            class="flex items-center gap-3 px-3 py-2 rounded-md text-sm
                   hover:bg-gray-800 transition"
            :class="{ 'bg-gray-800': activePage === 'dashboard' }">

            <i class="fas fa-tachometer-alt text-gray-300"></i>
            Dashboard

        </a> --}}

        <!-- LANDING PAGE -->
        <a href="{{ route('admin.landingpage.index') }}"
            class="flex items-center gap-3 px-3 py-2 rounded-md text-sm transition
                   hover:bg-gray-800
                   {{ request()->routeIs('admin.landingpage.*') ? 'bg-gray-800 border-l-4 border-blue-500' : 'text-gray-200' }}">

            <i class="fas fa-home text-gray-300"></i>
            Halaman Beranda

        </a>

        <!-- FACILITY -->
        <div x-data="{ openFacility: {{ request()->is('admin/fasilitas*') ? 'true' : 'false' }} }" class="space-y-1">

            <button @click="openFacility = !openFacility"
                class="w-full flex items-center justify-between px-3 py-2 rounded-md text-sm
                       hover:bg-gray-800 transition">

                <div class="flex items-center gap-3">
                    <i class="fas fa-building text-gray-300"></i>
                    Fasilitas
                </div>

                <i class="fas text-xs" :class="openFacility ? 'fa-chevron-up' : 'fa-chevron-down'"></i>

            </button>

            <div x-show="openFacility" x-transition class="pl-6 space-y-1">

                @foreach ($facilityCategories as $category)
                    <a href="{{ route('admin.facilities.category', $category->slug) }}"
                        class="block px-3 py-2 rounded-md text-xs text-gray-300
                               hover:bg-gray-800 hover:text-white transition">

                        {{ $category->name }}

                    </a>
                @endforeach

            </div>
        </div>

        <!-- CONTENT -->
        <div x-data="{ openContent: {{ request()->is('admin/content*') ? 'true' : 'false' }} }" class="space-y-1">

            <button @click="openContent = !openContent"
                class="w-full flex items-center justify-between px-3 py-2 rounded-md text-sm
                       hover:bg-gray-800 transition">

                <div class="flex items-center gap-3">
                    <i class="fas fa-folder-open text-gray-300"></i>
                    Konten Ilmiah
                </div>

                <i class="fas text-xs" :class="openContent ? 'fa-chevron-up' : 'fa-chevron-down'"></i>

            </button>

            <div x-show="openContent" x-transition class="pl-6 space-y-1">

                @foreach ($contentCategories as $category)
                    <a href="{{ route('admin.content.category', $category->slug) }}"
                        class="block px-3 py-2 rounded-md text-xs text-gray-300
                               hover:bg-gray-800 hover:text-white transition">

                        {{ $category->name }}

                    </a>
                @endforeach

            </div>
        </div>

        <!-- STUDENT -->
        <div x-data="{ openStudent: {{ request()->is('admin/students*') ? 'true' : 'false' }} }" class="space-y-1">

            <button @click="openStudent = !openStudent"
                class="w-full flex items-center justify-between px-3 py-2 rounded-md text-sm
               hover:bg-gray-800 transition">

                <div class="flex items-center gap-3">
                    <i class="fas fa-user-graduate text-gray-300"></i>
                    Mahasiswa
                </div>

                <i class="fas text-xs" :class="openStudent ? 'fa-chevron-up' : 'fa-chevron-down'"></i>

            </button>

            <div x-show="openStudent" x-transition class="pl-6 space-y-1">

                @foreach ($studentCategories as $category)
                    <a href="{{ route('admin.students.category', $category->slug) }}"
                        class="block px-3 py-2 rounded-md text-xs text-gray-300
                       hover:bg-gray-800 hover:text-white transition">

                        {{ $category->name }}

                    </a>
                @endforeach

            </div>

        </div>

        <!-- LOGOUT -->
        <form action="{{ route('logout') }}" method="POST" class="pt-4">
            @csrf

            <button type="submit"
                class="flex items-center gap-3 w-full px-3 py-2 rounded-md text-sm
                       text-red-400 hover:bg-red-500/10 transition">

                <i class="fas fa-sign-out-alt"></i>
                Logout

            </button>

        </form>

    </nav>
</aside>
