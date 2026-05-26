@extends('layouts.app')

@section('title', 'Fakultas Ekonomi')

@section('content')

    <!-- ABOUT SECTION -->
    <section class="py-20 bg-bg-light dark:bg-[#181818]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto">

                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-[#29357A]/10 text-[#29357A] dark:text-blue-300 text-[11px] font-bold tracking-[0.18em] uppercase">

                    Tentang Kami
                </span>

                <h2 class="mt-5 text-3xl sm:text-4xl font-black tracking-tight text-[#29357A] dark:text-white">

                    Fakultas Ekonomi
                </h2>

            </div>

            <!-- CONTENT -->
            <div class="mt-14 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

                <!-- IMAGE -->
                <div class="w-full">

                    @if ($landing->about_us_image)
                        <img src="{{ asset('storage/' . $landing->about_us_image) }}"
                            class="w-full h-[400px] object-cover rounded-xs shadow-md">
                    @else
                        <div
                            class="w-full h-[400px] bg-gray-200 dark:bg-[#2a2a2a] rounded-xs flex items-center justify-center">
                            <span class="text-gray-500">No Image</span>
                        </div>
                    @endif

                </div>

                <!-- TEXT -->
                <div>

                    <h3 class="text-xl font-bold text-[#29357A] dark:text-white mb-4">
                        Tentang Fakultas Ekonomi
                    </h3>

                    <div class="text-gray-600 dark:text-gray-300 leading-8 text-[15px]">
                        {!! nl2br(e($landing->about_us)) !!}
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
