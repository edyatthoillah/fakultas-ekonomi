@extends('layouts.frontend')

@section('title', 'Dashboard')

@section('content')
    <!-- Toastr -->
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "4000",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    {{-- SUCCESS --}}
    @foreach (['success', 'successedit', 'successeditgambar', 'successdelete'] as $msg)
        @if (Session::has($msg))
            <script>
                toastr.success('{{ Session::get($msg) }}');
            </script>
        @endif
    @endforeach

    {{-- ERROR GLOBAL --}}
    @if (session('error'))
        <script>
            toastr.error('{{ session('error') }}');
        </script>
    @endif

    {{-- ERROR STORE (Tambah) --}}
    @if ($errors->store->any())
        <script>
            toastr.error('Gagal menambahkan data');
        </script>
    @endif

    {{-- ERROR UPDATE (Edit) --}}
    @if ($errors->update->any())
        <script>
            toastr.error('Gagal mengupdate data');
        </script>
    @endif

    <div class=" bg-gray-100">
        <div class="mx-auto">
            <section class="section main-section bg-white p-4">
                <!-- Breadcrumb -->
                <nav class="flex text-xs text-gray-500 mb-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1">

                        <li>
                            <a href="{{ route('dashboard') }}" class="hover:text-blue-600">
                                Dashboard
                            </a>
                        </li>

                        <li>
                            <span class="mx-1">/</span>
                            <span>Fasilitas</span>
                        </li>

                        <li>
                            <span class="mx-1">/</span>
                            <span class="text-gray-700 font-medium">
                                Tenaga Pengajar
                            </span>
                        </li>

                    </ol>
                </nav>

                <div class="border-t-4 border-green-500 pt-4 flex gap-6 rounded-sm py-3">

                    <div class="bg-white border border-gray-300 w-full h-full shadow-sm p-4">
                        <div x-data="previewModalAdd()" @keydown.escape.window="show = false">
                            <div class="mb-4">


                                <!-- Header & Add Button -->
                                <div class="flex justify-between items-center mb-3">
                                    <h2 class="font-semibold text-gray-700 text-md">Fasilitas</h2>
                                    <div class="flex gap-1">
                                        <!-- Kembali -->
                                        <!-- Kembali -->
                                        <a href="{{ route('dashboard') }}"
                                            class="flex items-center gap-1 bg-cyan-500 hover:bg-cyan-600 text-white text-xs px-3 py-1 border border-cyan-600 leading-none">
                                            <span>Kembali ke Dashboard</span>
                                        </a>

                                        <!-- Tambah -->
                                        <button @click="openModalAddHero()"
                                            class="flex items-center gap-1 bg-blue-600 hover:bg-blue-700 text-white text-xs px-3 py-2 border border-blue-700 leading-none">

                                            <span>Tambah</span>
                                        </button>

                                    </div>
                                </div>

                                <div x-show="show" x-cloak x-transition.opacity x-init="if ({{ $errors->any() || session('error') ? 'true' : 'false' }}) show = true"
                                    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50">

                                    <!-- Modal -->
                                    <div x-transition.scale
                                        class="relative w-full max-w-2xl bg-white rounded shadow-xl overflow-hidden">

                                        <!-- Header -->
                                        <div class="flex items-center justify-between px-4 py-3 bg-blue-600">

                                            <div>
                                                <h2 class="text-base font-semibold text-white">
                                                    Tambah Tenaga Pengajar
                                                </h2>

                                                <p class="text-xs text-blue-100">
                                                    Tambahkan data tenaga pengajar Fakultas Ekonomi
                                                </p>
                                            </div>

                                            <button @click="show = false"
                                                class="w-7 h-7 flex items-center justify-center rounded bg-white/20 hover:bg-white/30 text-white transition">

                                                <i class="fas fa-times text-xs"></i>

                                            </button>

                                        </div>

                                        <!-- Content -->
                                        <div class="max-h-[70vh] overflow-y-auto p-4">

                                            @if ($errors->any())
                                                <div class="mb-4 p-3 border border-red-200 bg-red-50 rounded">

                                                    <h4 class="text-sm font-medium text-red-700 mb-2">
                                                        Terjadi Kesalahan
                                                    </h4>

                                                    <ul class="space-y-1 text-sm text-red-600">
                                                        @foreach ($errors->all() as $error)
                                                            <li>• {{ $error }}</li>
                                                        @endforeach
                                                    </ul>

                                                </div>
                                            @endif

                                            <!-- FORM TAMBAH DOSEN -->
                                            <form id="addFacilityForm" action="{{ route('admin.lecturers.store') }}"
                                                method="POST" enctype="multipart/form-data" class="space-y-5">

                                                @csrf

                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                                    <!-- Nama Lengkap -->
                                                    <div class="md:col-span-2">
                                                        <x-input-label value="Nama Lengkap"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="text" name="name" value="{{ old('name') }}"
                                                            placeholder="Masukkan nama dosen"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- NIDN -->
                                                    <div>
                                                        <x-input-label value="NIDN"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="text" name="nidn" value="{{ old('nidn') }}"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- NIP -->
                                                    <div>
                                                        <x-input-label value="NIP"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="text" name="nip" value="{{ old('nip') }}"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- NUPTK -->
                                                    <div>
                                                        <x-input-label value="NUPTK"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="text" name="nuptk" value="{{ old('nuptk') }}"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- Jabatan -->
                                                    <div>
                                                        <x-input-label value="Jabatan"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="text" name="position" value="{{ old('position') }}"
                                                            placeholder="Lektor, Asisten Ahli, dll"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- Program Studi -->
                                                    <div class="md:col-span-2">
                                                        <x-input-label value="Program Studi"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <select name="study_program"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                            <option value="">-- Pilih Program Studi --</option>
                                                            <option value="S1 Manajemen"
                                                                {{ old('study_program') == 'S1 Manajemen' ? 'selected' : '' }}>
                                                                S1 Manajemen
                                                            </option>
                                                            <option value="S1 Akuntansi"
                                                                {{ old('study_program') == 'S1 Akuntansi' ? 'selected' : '' }}>
                                                                S1 Akuntansi
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <!-- Email -->
                                                    <div>
                                                        <x-input-label value="Email"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="email" name="email" value="{{ old('email') }}"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- No HP -->
                                                    <div>
                                                        <x-input-label value="No. HP"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="text" name="phone" value="{{ old('phone') }}"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- Urutan -->
                                                    <div>
                                                        <x-input-label value="Urutan Tampil"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="number" name="order" value="{{ old('order', 0) }}"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- Status -->
                                                    <div class="flex items-center mt-5">

                                                        <label class="inline-flex items-center gap-2 cursor-pointer">

                                                            <input type="checkbox" name="is_active" value="1"
                                                                checked
                                                                class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">

                                                            <span class="text-sm text-gray-700">
                                                                Aktif Ditampilkan
                                                            </span>

                                                        </label>

                                                    </div>

                                                    <!-- Upload Foto -->
                                                    <div class="md:col-span-2">

                                                        <x-input-label value="Foto Dosen"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <div class="mt-1 border border-dashed border-gray-300 rounded p-3">

                                                            <input type="file" name="photo"
                                                                class="block w-full text-sm text-gray-600
                                                                    file:mr-3
                                                                    file:px-3
                                                                    file:py-1.5
                                                                    file:rounded
                                                                    file:border
                                                                    file:border-gray-200
                                                                    file:bg-gray-50
                                                                    file:text-gray-700">

                                                        </div>

                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                        <div class="flex justify-end gap-2 px-4 py-3 border-t bg-gray-50">

                                            <button type="button" @click="show = false"
                                                class="px-4 py-2 text-sm text-gray-700 border rounded hover:bg-gray-100">
                                                Batal
                                            </button>

                                            <button type="submit" form="addFacilityForm"
                                                class="px-4 py-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">
                                                Simpan
                                            </button>

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div x-data="modalEditInformation()" class="overflow-x-auto bg-white shadow-sm rounded">

                            <table class="w-full text-sm border border-gray-200">
                                <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                                    <tr>
                                        <th class="px-3 py-2 border w-16">No</th>
                                        <th class="px-3 py-2 border">Foto</th>
                                        <th class="px-3 py-2 border">Nama</th>
                                        <th class="px-3 py-2 border">NIDN</th>
                                        <th class="px-3 py-2 border">Jabatan</th>
                                        <th class="px-3 py-2 border">Program Studi</th>
                                        <th class="px-3 py-2 border">Status</th>
                                        <th class="px-3 py-2 border">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($lecturers as $data)
                                        <tr class="hover:bg-gray-50">

                                            <td class="text-center px-3 py-2 border">
                                                {{ $loop->iteration }}
                                            </td>

                                            <td class="px-3 py-2 border">
                                                @if ($data->photo)
                                                    <img src="{{ asset('storage/' . $data->photo) }}"
                                                        class="h-16 w-16 object-cover rounded-md border">
                                                @else
                                                    <div
                                                        class="h-16 w-16 rounded-md border bg-gray-100 flex items-center justify-center text-xs text-gray-400">
                                                        No Image
                                                    </div>
                                                @endif
                                            </td>

                                            <td class="px-3 py-2 border">
                                                <div class="font-medium text-gray-800">
                                                    {{ $data->name }}
                                                </div>

                                                @if ($data->email)
                                                    <div class="text-xs text-gray-500">
                                                        {{ $data->email }}
                                                    </div>
                                                @endif
                                            </td>

                                            <td class="px-3 py-2 border">
                                                {{ $data->nidn ?: '-' }}
                                            </td>

                                            <td class="px-3 py-2 border">
                                                {{ $data->position ?: '-' }}
                                            </td>

                                            <td class="px-3 py-2 border">
                                                {{ $data->study_program ?: '-' }}
                                            </td>

                                            <td class="px-3 py-2 border text-center">
                                                @if ($data->is_active)
                                                    <span
                                                        class="inline-flex items-center px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full">
                                                        Aktif
                                                    </span>
                                                @else
                                                    <span
                                                        class="inline-flex items-center px-2 py-1 text-xs font-medium bg-red-100 text-red-700 rounded-full">
                                                        Nonaktif
                                                    </span>
                                                @endif
                                            </td>

                                            <td class="px-3 py-2 border">
                                                <div class="inline-flex">

                                                    <!-- EDIT -->
                                                    <button type="button"
                                                        @click="openModal({
                                id: {{ $data->id }},
                                name: @js($data->name),
                                nidn: @js($data->nidn),
                                nip: @js($data->nip),
                                nuptk: @js($data->nuptk),
                                position: @js($data->position),
                                study_program: @js($data->study_program),
                                email: @js($data->email),
                                phone: @js($data->phone),
                                order: {{ $data->order }},
                                is_active: {{ $data->is_active ? 'true' : 'false' }},
                                photo: @js($data->photo ? asset('storage/' . $data->photo) : null)
                            })"
                                                        class="px-3 py-1 text-xs bg-yellow-500 hover:bg-yellow-600 text-white border border-yellow-700 rounded-l transition">

                                                        Edit
                                                    </button>

                                                    <!-- DELETE -->
                                                    <form action="{{ route('admin.lecturers.destroy', $data->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Yakin ingin menghapus tenaga pengajar ini?')">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"
                                                            class="px-3 py-1 text-xs bg-red-600 hover:bg-red-700 text-white border border-red-800 rounded-r -ml-px transition">

                                                            Delete
                                                        </button>

                                                    </form>

                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-5 text-gray-500">
                                                Belum ada data tenaga pengajar.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- Modal Edit -->
                            <!-- Modal Edit Fasilitas -->
                            <div x-show="show" x-cloak x-transition.opacity
                                class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50">

                                <div x-transition.scale
                                    class="relative w-full max-w-2xl bg-white rounded-xs shadow-xl overflow-hidden">

                                    <!-- Header -->
                                    <div class="flex items-center justify-between px-4 py-3 bg-blue-600">

                                        <div>
                                            <h2 class="text-base font-semibold text-white">
                                                Edit Data Dosen
                                            </h2>

                                            <p class="text-xs text-blue-100">
                                                Perbarui informasi dosen
                                            </p>
                                        </div>

                                        <button @click="show = false"
                                            class="w-7 h-7 flex items-center justify-center rounded bg-white/20 hover:bg-white/30 text-white transition">
                                            <i class="fas fa-times text-xs"></i>
                                        </button>

                                    </div>

                                    <!-- Content -->
                                    <div class="max-h-[70vh] overflow-y-auto p-4">

                                        @if ($errors->update->any())
                                            <div class="mb-4 p-3 border border-red-200 bg-red-50 rounded">
                                                <ul class="text-sm text-red-600 space-y-1">
                                                    @foreach ($errors->update->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <form id="editFacilityForm" method="POST" enctype="multipart/form-data"
                                            class="space-y-5">

                                            @csrf
                                            @method('PUT')

                                            <!-- Preview Foto -->
                                            <div x-show="form.photo">

                                                <x-input-label value="Foto Saat Ini"
                                                    class="text-xs font-medium text-gray-600" />

                                                <div class="mt-2">
                                                    <img :src="form.photo"
                                                        class="h-24 w-24 object-cover rounded border border-gray-300">
                                                </div>

                                            </div>

                                            <!-- Form Fields -->
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                                <!-- Nama Lengkap -->
                                                <div class="md:col-span-2">
                                                    <x-input-label value="Nama Lengkap"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="text" name="name" x-model="form.name"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- NIDN -->
                                                <div>
                                                    <x-input-label value="NIDN"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="text" name="nidn" x-model="form.nidn"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- NIP -->
                                                <div>
                                                    <x-input-label value="NIP"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="text" name="nip" x-model="form.nip"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- NUPTK -->
                                                <div>
                                                    <x-input-label value="NUPTK"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="text" name="nuptk" x-model="form.nuptk"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- Jabatan -->
                                                <div>
                                                    <x-input-label value="Jabatan"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="text" name="position" x-model="form.position"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- Program Studi -->
                                                <div class="md:col-span-2">
                                                    <x-input-label value="Program Studi"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <select name="study_program" x-model="form.study_program"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                        <option value="">-- Pilih Program Studi --</option>
                                                        <option value="S1 Manajemen">S1 Manajemen</option>
                                                        <option value="S1 Akuntansi">S1 Akuntansi</option>
                                                    </select>
                                                </div>

                                                <!-- Email -->
                                                <div>
                                                    <x-input-label value="Email"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="email" name="email" x-model="form.email"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- No HP -->
                                                <div>
                                                    <x-input-label value="No. HP"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="text" name="phone" x-model="form.phone"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- Urutan -->
                                                <div>
                                                    <x-input-label value="Urutan Tampil"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="number" name="order" x-model="form.order"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- Status -->
                                                <div class="flex items-center mt-5">

                                                    <label class="inline-flex items-center gap-2 cursor-pointer">

                                                        <input type="checkbox" name="is_active" value="1"
                                                            :checked="form.is_active"
                                                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">

                                                        <span class="text-sm text-gray-700">
                                                            Aktif Ditampilkan
                                                        </span>

                                                    </label>

                                                </div>

                                            </div>

                                            <!-- Upload Foto -->
                                            <div>

                                                <x-input-label value="Ganti Foto (Opsional)"
                                                    class="text-xs font-medium text-gray-600" />

                                                <div class="mt-1 border border-dashed border-gray-300 rounded p-3">

                                                    <input type="file" name="photo"
                                                        class="block w-full text-sm text-gray-600
                                                        file:mr-3
                                                        file:px-3
                                                        file:py-1.5
                                                        file:rounded
                                                        file:border
                                                        file:border-gray-200
                                                        file:bg-gray-50
                                                        file:text-gray-700">

                                                </div>

                                                @error('photo', 'update')
                                                    <p class="mt-2 text-sm text-red-500">
                                                        {{ $message }}
                                                    </p>
                                                @enderror

                                            </div>
                                        </form>

                                    </div>

                                    <!-- Footer -->
                                    <div class="flex justify-end gap-2 px-4 py-3 border-t bg-gray-50">

                                        <button type="button" @click="show = false"
                                            class="px-4 py-2 text-sm text-gray-700 border rounded hover:bg-gray-100">
                                            Batal
                                        </button>

                                        <button type="submit" form="editFacilityForm"
                                            class="px-4 py-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">
                                            Simpan
                                        </button>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        function previewModalAdd() {
            return {
                show: false,
                data: {},
                openModalAddHero(item) {
                    this.data = item
                    this.show = true
                }
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#submittedTable').DataTable({
                pageLength: 5,
                responsive: true
            });
        });
    </script>

    <script>
        function modalEditInformation() {
            return {
                show: false,

                form: {
                    id: null,
                    name: '',
                    nidn: '',
                    nip: '',
                    nuptk: '',
                    position: '',
                    study_program: '',
                    email: '',
                    phone: '',
                    order: '',
                    is_active: false,
                    photo: ''
                },

                openModal(data) {

                    this.show = true;

                    this.form = {
                        ...data
                    };

                    this.$nextTick(() => {

                        const form = document.getElementById('editFacilityForm');

                        form.action = `/admin/lecturers/${data.id}`;

                        console.log(form.action);

                    });
                }
            }
        }
    </script>


    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@endsection
