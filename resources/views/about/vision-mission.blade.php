@extends('layouts.app')

@section('title', 'Visi & Misi Fakultas Ekonomi')

@section('content')

    <!-- VISI MISI SECTION -->
    <section class="py-20 bg-bg-light dark:bg-[#181818]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto">

                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-[#29357A]/10 text-[#29357A] dark:text-blue-300 text-[11px] font-bold tracking-[0.18em] uppercase">

                    Tentang Kami
                </span>

                <h2 class="mt-5 text-3xl sm:text-4xl font-black tracking-tight text-[#29357A] dark:text-white">

                    Visi & Misi
                </h2>

                <p class="mt-5 text-[15px] leading-8 text-gray-600 dark:text-gray-300">
                    Arah dan tujuan Fakultas Ekonomi dalam mengembangkan pendidikan dan kualitas lulusan.
                </p>

            </div>

            <!-- CONTENT -->
            <div class="mt-14 grid grid-cols-1 lg:grid-cols-2 gap-10">

                <!-- VISI -->
                <div class="bg-white dark:bg-[#202020] p-6 rounded-xs shadow-sm border border-gray-100 dark:border-gray-800">

                    {{-- <h3 class="text-xl font-bold text-[#29357A] dark:text-white mb-4">
                        Visi
                    </h3> --}}

                    <div class="text-gray-600 dark:text-gray-300 leading-8 text-[15px]">
                        {!! $landing->vision !!}
                    </div>

                </div>

                <!-- MISI -->
                <div class="bg-white dark:bg-[#202020] p-6 rounded-xs shadow-sm border border-gray-100 dark:border-gray-800">

                    {{-- <h3 class="text-xl font-bold text-[#29357A] dark:text-white mb-4">
                        Misi
                    </h3> --}}

                    <div class="text-gray-600 dark:text-gray-300 leading-8 text-[15px]">
                        {!! $landing->mission !!}
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
