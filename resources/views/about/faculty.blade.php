@extends('layouts.app')

@section('title', 'Fakultas Ekonomi')

@section('content')

    <!-- ABOUT SECTION -->
    <section class="py-20 bg-bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mt-4 mx-auto">

                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] uppercase">

                    Tentang Kami
                </span>

                <h2 class="mt-5 text-4xl sm:text-4xl lg:text-4xl font-black tracking-tight text-[#29357A]">

                    {{ $landing->app_name }}
                </h2>

            </div>

            <!-- CONTENT -->
            <div class="mt-14 flex flex-col gap-10">

                <!-- IMAGE -->
                <div class="w-full">

                    @if ($landing->about_us_image)
                        <img src="{{ asset('storage/' . $landing->about_us_image) }}"
                            class="w-full h-full object-cover rounded-xs shadow-md">
                    @else
                        <div class="w-full h-full bg-gray-200 dark:bg-[#2a2a2a] rounded-xs flex items-center justify-center">
                            <span class="text-gray-500">No Image</span>
                        </div>
                    @endif

                </div>

                <!-- TEXT -->
                <div>

                    <h3 class="text-xl font-bold text-black mb-4">
                        Tentang {{ $landing->app_name }}
                    </h3>

                    <div class="text-black leading-8 text-[15px]">
                        {!! nl2br(e($landing->about_us)) !!}
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
