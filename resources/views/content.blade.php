@extends('layouts.app')

@section('title', 'Fasilitas Fakultas Ekonomi')

@section('content')
    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center max-w-3xl mt-4 mx-auto">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 bg-[#29357A]/5 border border-[#29357A]/10 text-[#29357A] text-[11px] font-black tracking-[0.18em] rounded-md">

                    {{ strtoupper($category->name) }}

                </span>

                <h2 class="mt-6 text-4xl lg:text-5xl font-black tracking-tight text-[#29357A]">
                    Daftar {{ $category->name }}
                </h2>

            </div>
            <div class="w-full bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">

                <!-- Header -->
                <div class="px-6 py-5 border-b border-gray-100">
                    <h3 class="text-2xl font-bold text-[#29357A]">
                        Daftar Mitra Kerja Sama
                    </h3>

                    <p class="mt-1 text-sm text-gray-500">
                        Data mitra kerja sama yang telah terjalin melalui {{ $landing->app_name }} Universitas Darma
                        Persada.
                    </p>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">

                    <table class="w-full min-w-full">

                        <thead>
                            <tr class="bg-[#29357A] text-white">

                                <th class="w-20 px-6 py-4 text-left text-sm font-semibold">
                                    No
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold">
                                    Nama Mitra
                                </th>

                                <th class="w-56 px-6 py-4 text-center text-sm font-semibold">
                                    Masa Berlaku Awal
                                </th>

                                <th class="w-56 px-6 py-4 text-center text-sm font-semibold">
                                    Masa Berlaku Akhir
                                </th>

                                {{-- <th class="w-40 px-6 py-4 text-center text-sm font-semibold">
                                    Status
                                </th> --}}

                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">

                            @forelse ($contents as $item)
                                <tr class="hover:bg-blue-50 transition-all duration-200">

                                    <!-- No -->
                                    <td class="px-6 py-5 text-gray-600">
                                        {{ $loop->iteration }}
                                    </td>

                                    <!-- Nama Mitra -->
                                    <td class="px-6 py-5">

                                        <div class="font-semibold text-gray-800 text-base">
                                            {{ $item->title }}
                                        </div>

                                    </td>

                                    <!-- Masa Berlaku Awal -->
                                    <td class="px-6 py-5 text-center text-gray-600 whitespace-nowrap">
                                        {{ \Carbon\Carbon::parse($item->valid_from)->format('d M Y') }}
                                    </td>

                                    <!-- Masa Berlaku Akhir -->
                                    <td class="px-6 py-5 text-center text-gray-600 whitespace-nowrap">
                                        {{ \Carbon\Carbon::parse($item->valid_until)->format('d M Y') }}
                                    </td>

                                    {{-- <!-- Status -->
                                    <td class="px-6 py-5 text-center">

                                        @if (\Carbon\Carbon::parse($item->valid_until)->gte(now()))
                                            <span
                                                class="inline-flex items-center px-4 py-2 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                                Aktif
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-4 py-2 rounded-full text-xs font-bold bg-red-100 text-red-700">
                                                Berakhir
                                            </span>
                                        @endif

                                    </td> --}}

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-16 text-center">

                                        <div class="flex flex-col items-center">

                                            <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M9 17v-2m3 2v-4m3 4v-6M5 21h14a2 2 0 002-2V7.828a2 2 0 00-.586-1.414l-4.828-4.828A2 2 0 0014.172 1H5a2 2 0 00-2 2v16a2 2 0 002 2z" />
                                            </svg>

                                            <p class="text-gray-500">
                                                Belum ada data mitra kerja sama.
                                            </p>

                                        </div>

                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>
        </div>
    </section>

    <style>
        .prose img {
            border-radius: 12px;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .prose table {
            width: 100%;
            border-collapse: collapse;
        }

        .prose table td,
        .prose table th {
            border: 1px solid #e5e7eb;
            padding: 8px;
        }

        .prose iframe {
            width: 100%;
            min-height: 400px;
            border-radius: 12px;
        }
    </style>
@endsection
