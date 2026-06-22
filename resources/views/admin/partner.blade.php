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
                            <span>Kontent Ilmiah</span>
                        </li>

                        <li>
                            <span class="mx-1">/</span>
                            <span class="text-gray-700 font-medium">
                                Partner
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

                                <div x-show="show" x-transition x-init="if ({{ $errors->any() || session('error') ? 'true' : 'false' }}) show = true"
                                    class="fixed inset-0 bg-black/40 z-50 flex items-start justify-center p-4 overflow-y-auto">

                                    <div
                                        class="bg-white rounded-lg shadow-md w-full max-w-md max-h-screen overflow-y-auto relative">

                                        <!-- Header -->
                                        <div class="flex items-center justify-between p-4 border-b">
                                            <h2 class="text-base font-semibold">Tambah Partner</h2>
                                            <button @click="show = false"
                                                class="text-gray-400 hover:text-gray-600 text-xl leading-none">
                                                &times;
                                            </button>
                                        </div>

                                        <!-- Content -->
                                        <div class="p-4">
                                            <form action="{{ route('admin.partner.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <!-- Nama -->
                                                <div>
                                                    <label class="text-sm font-medium">Nama Mitra</label>
                                                    <input type="text" name="name"
                                                        class="w-full border rounded-md mt-1 text-sm px-2 py-1.5 @error('name') border-red-500 @enderror"
                                                        value="{{ old('name') }}">

                                                    @error('name')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <!-- Logo -->
                                                <div class="mt-3">
                                                    <label class="text-sm font-medium">Logo</label>
                                                    <input type="file" name="logo"
                                                        class="w-full border rounded-md mt-1 text-sm px-2 py-1.5 @error('logo') border-red-500 @enderror">

                                                    @error('logo')
                                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="flex justify-end gap-2 pt-3">
                                                    <button type="button" @click="show=false"
                                                        class="bg-gray-400 text-white px-3 py-1.5 rounded-md">Close</button>

                                                    <button type="submit"
                                                        class="bg-blue-600 text-white px-3 py-1.5 rounded-md">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div x-data="modalEditInformation()" class="overflow-x-auto bg-white shadow-sm rounded">

                                <table class="w-full text-sm border border-gray-200">
                                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                                        <tr>
                                            <th class="px-3 py-2 border w-16">No</th>
                                            <th class="px-3 py-2 border">Logo</th>
                                            <th class="px-3 py-2 border">Nama Partner</th>
                                            <th class="px-3 py-2 border w-40">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($partners as $data)
                                            <tr class="hover:bg-gray-50">

                                                <!-- No -->
                                                <td class="text-center px-3 py-2 border">
                                                    {{ $loop->iteration }}
                                                </td>

                                                <!-- Logo -->
                                                <td class="px-3 py-2 border">
                                                    @if ($data->logo)
                                                        <img src="{{ asset('storage/' . $data->logo) }}"
                                                            class="h-20 w-20 object-contain rounded-md border">
                                                    @else
                                                        <div
                                                            class="h-20 w-20 bg-gray-100 flex items-center justify-center text-xs text-gray-400 rounded-md">
                                                            No Logo
                                                        </div>
                                                    @endif
                                                </td>

                                                <!-- Nama -->
                                                <td class="px-3 py-2 border">
                                                    {{ $data->name }}
                                                </td>

                                                <!-- Aksi -->
                                                <td class="px-3 py-2 border">
                                                    <div class="inline-flex">

                                                        <!-- Edit -->
                                                        <button type="button"
                                                            @click="openModal({
                                                                id: {{ $data->id }},
                                                                name: @js($data->name),
                                                                logo: @js(asset('storage/' . $data->logo))
                                                            })"
                                                            class="px-3 py-1 text-xs bg-yellow-500 hover:bg-yellow-600 text-white border border-yellow-700 rounded-l transition">
                                                            Edit
                                                        </button>

                                                        <!-- Delete -->
                                                        <form action="{{ route('admin.partner.destroy', $data->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Yakin ingin menghapus partner ini?')">

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
                                                <td colspan="4" class="text-center py-5 text-gray-500">
                                                    Belum ada data partner.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <!-- Modal Edit -->
                                <div x-show="show" x-cloak x-transition
                                    class="fixed inset-0 bg-black/40 z-50 flex items-start justify-center p-4 overflow-y-auto">

                                    <div
                                        class="bg-white rounded-md shadow-lg w-full max-w-lg max-h-[90vh] overflow-y-auto relative">

                                        <!-- Header -->
                                        <div class="flex items-center justify-between px-5 py-3 bg-blue-600 rounded-t-md">

                                            <div>
                                                <h2 class="text-base font-semibold text-white">
                                                    Edit Partner
                                                </h2>

                                                <p class="text-blue-100 text-xs">
                                                    Perbarui data Partner
                                                </p>
                                            </div>

                                            <button @click="show = false"
                                                class="w-7 h-7 flex items-center justify-center rounded-sm bg-white/20 hover:bg-white/30 text-white transition">
                                                &times;
                                            </button>

                                        </div>

                                        <!-- Content -->
                                        <div class="p-5">

                                            @if ($errors->update->any())
                                                <div class="mb-4 p-3 rounded-md border border-red-200 bg-red-50">
                                                    <ul class="list-disc pl-5 text-sm text-red-600">
                                                        @foreach ($errors->update->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <form id="editPartnerForm" method="POST" enctype="multipart/form-data"
                                                class="space-y-4">

                                                @csrf
                                                @method('PUT')

                                                <!-- Preview -->
                                                <div x-show="form.logo">

                                                    <x-input-label value="Preview Logo"
                                                        class="text-sm font-medium text-gray-700" />

                                                    <div class="mt-2">
                                                        <img :src="form.logo"
                                                            class="h-32 w-32 object-contain rounded-md border bg-white p-2">
                                                    </div>

                                                </div>

                                                <!-- Nama Partner -->
                                                <div>

                                                    <x-input-label value="Nama Partner"
                                                        class="text-sm font-medium text-gray-700" />

                                                    <input type="text" name="name" x-model="form.name"
                                                        class="mt-1 p-3 block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">

                                                    @error('name', 'update')
                                                        <p class="text-red-500 text-xs mt-1">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror

                                                </div>

                                                <!-- Upload Logo -->
                                                <div>

                                                    <x-input-label value="Ganti Logo (Opsional)"
                                                        class="text-sm font-medium text-gray-700" />

                                                    <div class="mt-2 border border-dashed border-gray-300 rounded-md p-3">

                                                        <input type="file" name="logo"
                                                            class="block w-full text-sm text-gray-600
                                                            file:mr-3
                                                            file:px-3
                                                            file:py-1.5
                                                            file:rounded
                                                            file:border-0
                                                            file:bg-blue-50
                                                            file:text-blue-700
                                                            file:text-sm">

                                                    </div>

                                                    @error('logo', 'update')
                                                        <p class="text-red-500 text-xs mt-1">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror

                                                </div>

                                                <!-- Footer -->
                                                <div class="flex justify-end gap-2 border-t pt-4">

                                                    <button type="button" @click="show=false"
                                                        class="px-4 py-2 text-sm text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-md">
                                                        Batal
                                                    </button>

                                                    <button type="submit"
                                                        class="px-4 py-2 text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                                                        Update
                                                    </button>

                                                </div>

                                            </form>

                                        </div>

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
        function modalEditInformation() {
            return {
                show: false,

                form: {
                    id: null,
                    name: '',
                    logo: ''
                },

                openModal(data) {

                    this.show = true;

                    this.form = {
                        id: data.id,
                        name: data.name,
                        logo: data.logo
                    };

                    this.$nextTick(() => {

                        document.getElementById('editPartnerForm').action =
                            "{{ url('admin/partner') }}/" + data.id;

                    });
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


    <script src="{{ asset('assets/js/main.min.js?v=1772427751095') }}"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@endsection
