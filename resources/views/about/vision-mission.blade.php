@extends('layouts.app')

@section('title', 'Visi & Misi Fakultas Ekonomi')

@section('content')

    <!-- VISI MISI SECTION -->
    <section class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto mt-4">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                    VISI & MISI
                </span>

                <h2 class="mt-6 text-4xl lg:text-4xl font-black tracking-tight text-[#29357A]">
                    Visi & Misi
                </h2>

                <p class="mt-5 text-gray-600 leading-8 max-w-2xl mx-auto">
                    Arah dan tujuan Fakultas Ekonomi dalam mengembangkan pendidikan,
                    penelitian, dan pengabdian kepada masyarakat guna menghasilkan lulusan
                    yang unggul, profesional, dan berdaya saing.
                </p>

            </div>

            <!-- CONTENT -->
            <div class="mt-14 grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- VISI -->
                <div class="bg-white border border-[#29357A]/10 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">

                    <div class="flex items-center gap-3 mb-6">

                        <div
                            class="w-10 h-10 rounded-xl bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center">

                            <i class="fa-solid fa-eye text-[#29357A]"></i>

                        </div>

                        <h3 class="text-xl font-black text-[#29357A]">
                            Visi
                        </h3>

                    </div>

                    <div class="text-gray-600 leading-8 text-[15px]">
                        {!! $landing->vision !!}
                    </div>

                </div>

                <!-- MISI -->
                <div
                    class="bg-white border border-[#29357A]/10 rounded-2xl p-8 hover:shadow-lg transition-all duration-300">

                    <div class="flex items-center gap-3 mb-6">

                        <div
                            class="w-10 h-10 rounded-xl bg-[#29357A]/5 border border-[#29357A]/10 flex items-center justify-center">

                            <i class="fa-solid fa-bullseye text-[#29357A]"></i>

                        </div>

                        <h3 class="text-xl font-black text-[#29357A]">
                            Misi
                        </h3>

                    </div>

                    <div class="text-gray-600 leading-8 text-[15px]">
                        {!! $landing->mission !!}
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
