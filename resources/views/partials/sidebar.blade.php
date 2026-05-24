<!-- Sidebar -->
<aside
    class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-800 transform transition-transform duration-300 ease-in-out md:translate-x-0"
    :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }">
    <div class="flex items-center justify-between h-16 px-4 bg-gray-900">

        <!-- Logo & App Name -->
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-10 h-10 object-contain">

            <div>
                <h1 class="text-white font-bold text-base leading-none">
                    Fakultas Ekonomi
                </h1>
                <p class="text-gray-400 text-xs">
                    Admin Panel
                </p>
            </div>
        </div>

        <!-- Mobile Close -->
        <button @click="sidebarOpen = false" class="text-white md:hidden" aria-label="Close sidebar">
            <i class="fas fa-times"></i>
        </button>

    </div>
    <nav class="mt-5 overflow-y-auto h-[calc(100vh-4rem)]">
        <a href="#" @click.prevent="activePage = 'dashboard'; sidebarOpen = false"
            class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700"
            :class="{ 'bg-gray-700': activePage === 'dashboard' }">
            <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
        </a>

        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 text-gray-100 hover:bg-gray-700"
                :aria-expanded="open" aria-controls="users-menu">
                <div class="flex items-center">
                    <i class="fas fa-users mr-3"></i>Users
                </div>
                <i class="fas" :class="open ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
            </button>
            <div x-show="open" id="users-menu" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-700">
                <a href="#" @click.prevent="activePage = 'all-users'; sidebarOpen = false"
                    class="block px-8 py-2 text-gray-200 hover:bg-gray-600"
                    :class="{ 'bg-gray-600': activePage === 'all-users' }">All Users</a>
                <a href="#" @click.prevent="activePage = 'add-user'; sidebarOpen = false"
                    class="block px-8 py-2 text-gray-200 hover:bg-gray-600"
                    :class="{ 'bg-gray-600': activePage === 'add-user' }">Add User</a>
                <a href="#" @click.prevent="activePage = 'user-roles'; sidebarOpen = false"
                    class="block px-8 py-2 text-gray-200 hover:bg-gray-600"
                    :class="{ 'bg-gray-600': activePage === 'user-roles' }">User Roles</a>
            </div>
        </div>

        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 text-gray-100 hover:bg-gray-700"
                :aria-expanded="open" aria-controls="settings-menu">
                <div class="flex items-center">
                    <i class="fas fa-cog mr-3"></i>Settings
                </div>
                <i class="fas" :class="open ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
            </button>
            <div x-show="open" id="settings-menu" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95" class="bg-gray-700">
                <a href="#" @click.prevent="activePage = 'general'; sidebarOpen = false"
                    class="block px-8 py-2 text-gray-200 hover:bg-gray-600"
                    :class="{ 'bg-gray-600': activePage === 'general' }">General</a>
                <a href="#" @click.prevent="activePage = 'security'; sidebarOpen = false"
                    class="block px-8 py-2 text-gray-200 hover:bg-gray-600"
                    :class="{ 'bg-gray-600': activePage === 'security' }">Security</a>
                <a href="#" @click.prevent="activePage = 'notifications'; sidebarOpen = false"
                    class="block px-8 py-2 text-gray-200 hover:bg-gray-600"
                    :class="{ 'bg-gray-600': activePage === 'notifications' }">Notifications</a>
            </div>
        </div>

        <a href="#" @click.prevent="activePage = 'analytics'; sidebarOpen = false"
            class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700"
            :class="{ 'bg-gray-700': activePage === 'analytics' }">
            <i class="fas fa-chart-bar mr-3"></i>Analytics
        </a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="flex items-center px-4 py-2 w-full text-gray-100 hover:bg-gray-700"
                :class="{ 'bg-gray-700': activePage === 'logout' }">
                <i class="fas fa-sign-out-alt mr-3"></i>Logout
            </button>
        </form>
    </nav>
</aside>
