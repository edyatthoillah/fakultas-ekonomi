@extends('layouts.frontend')

@section('title', 'Dashboard')

@section('content')
    <!-- Dashboard Content -->
    <div x-show="activePage === 'dashboard'">
        <h1 class="text-2xl font-bold mb-6">Dashboard Overview</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-users text-blue-500 text-2xl mr-4"></i>
                    <div>
                        <p class="text-gray-500">Total Users</p>
                        <h3 class="text-xl font-bold">1,234</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-dollar-sign text-green-500 text-2xl mr-4"></i>
                    <div>
                        <p class="text-gray-500">Revenue</p>
                        <h3 class="text-xl font-bold">$12,345</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-chart-line text-purple-500 text-2xl mr-4"></i>
                    <div>
                        <p class="text-gray-500">Growth</p>
                        <h3 class="text-xl font-bold">+15%</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <i class="fas fa-tasks text-yellow-500 text-2xl mr-4"></i>
                    <div>
                        <p class="text-gray-500">Tasks</p>
                        <h3 class="text-xl font-bold">23</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All Users Content -->
    <div x-show="activePage === 'all-users'">
        <h1 class="text-2xl font-bold mb-6">All Users</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>This is the All Users page content</p>
        </div>
    </div>

    <!-- Add User Content -->
    <div x-show="activePage === 'add-user'">
        <h1 class="text-2xl font-bold mb-6">Add User</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>This is the Add User page content</p>
        </div>
    </div>

    <!-- User Roles Content -->
    <div x-show="activePage === 'user-roles'">
        <h1 class="text-2xl font-bold mb-6">User Roles</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>This is the User Roles page content</p>
        </div>
    </div>

    <!-- General Settings Content -->
    <div x-show="activePage === 'general'">
        <h1 class="text-2xl font-bold mb-6">General Settings</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>This is the General Settings page content</p>
        </div>
    </div>

    <!-- Security Settings Content -->
    <div x-show="activePage === 'security'">
        <h1 class="text-2xl font-bold mb-6">Security Settings</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>This is the Security Settings page content</p>
        </div>
    </div>

    <!-- Notifications Settings Content -->
    <div x-show="activePage === 'notifications'">
        <h1 class="text-2xl font-bold mb-6">Notifications Settings</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>This is the Notifications Settings page content</p>
        </div>
    </div>

    <!-- Analytics Content -->
    <div x-show="activePage === 'analytics'">
        <h1 class="text-2xl font-bold mb-6">Analytics</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>This is the Analytics page content</p>
        </div>
    </div>

    <!-- Logout Content -->
    <div x-show="activePage === 'logout'">
        <h1 class="text-2xl font-bold mb-6">Logout</h1>
        <div class="bg-white p-6 rounded-lg shadow">
            <p>You have been logged out</p>
        </div>
    </div>
@endsection
