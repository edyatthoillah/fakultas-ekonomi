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
                                        <!-- Header -->
                                        <div class="flex items-center justify-between p-4 border-b">
                                            <h2 class="text-base font-semibold">Tambah Tenaga Pengajar</h2>
                                            <button @click="show = false"
                                                class="text-gray-400 hover:text-gray-600 text-xl leading-none">
                                                &times;
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
                                                method="POST" class="space-y-5">

                                                @csrf

                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                                    <!-- Nama Dokumen -->
                                                    <div class="md:col-span-2">
                                                        <x-input-label value="Nama Dokumen"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="text" name="document_name"
                                                            value="{{ old('document_name') }}"
                                                            placeholder="Masukkan nama dokumen"
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- Link Dokumen -->
                                                    <div class="md:col-span-2">
                                                        <x-input-label value="Link Dokumen"
                                                            class="text-xs font-medium text-gray-600" />

                                                        <input type="text" name="document_link"
                                                            value="{{ old('document_link') }}" placeholder="https://..."
                                                            class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                    </div>

                                                    <!-- Status -->
                                                    <div class="flex items-center mt-2">

                                                        <label class="inline-flex items-center gap-2 cursor-pointer">

                                                            <input type="checkbox" name="status" value="active" checked
                                                                class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">

                                                            <span class="text-sm text-gray-700">
                                                                Aktif Ditampilkan
                                                            </span>

                                                        </label>

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
                                        <th class="px-3 py-2 border">Nama Dokumen</th>
                                        <th class="px-3 py-2 border">Link</th>
                                        <th class="px-3 py-2 border">Status</th>
                                        <th class="px-3 py-2 border">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($lecturers as $data)
                                        <tr class="hover:bg-gray-50">

                                            <!-- No -->
                                            <td class="text-center px-3 py-2 border">
                                                {{ $loop->iteration }}
                                            </td>

                                            <!-- Nama Dokumen -->
                                            <td class="px-3 py-2 border font-medium text-gray-800">
                                                {{ $data->document_name }}
                                            </td>

                                            <!-- Link -->
                                            <td class="px-3 py-2 border">
                                                <a href="{{ $data->document_link }}" target="_blank"
                                                    class="text-blue-600 hover:underline break-all">
                                                    {{ $data->document_link }}
                                                </a>
                                            </td>

                                            <!-- Status -->
                                            <td class="px-3 py-2 border text-center">
                                                @if ($data->status === 'active')
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

                                            <!-- Aksi -->
                                            <td class="px-3 py-2 border">
                                                <div class="inline-flex">

                                                    <!-- EDIT -->
                                                    <button type="button"
                                                        @click="openModal({
                                id: {{ $data->id }},
                                document_name: @js($data->document_name),
                                document_link: @js($data->document_link),
                                status: @js($data->status)
                            })"
                                                        class="px-3 py-1 text-xs bg-yellow-500 hover:bg-yellow-600 text-white border border-yellow-700 rounded-l transition">
                                                        Edit
                                                    </button>

                                                    <!-- DELETE -->
                                                    <form action="{{ route('admin.lecturers.destroy', $data->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">

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
                                            <td colspan="5" class="text-center py-5 text-gray-500">
                                                Belum ada data.
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
                                    <!-- Header -->
                                    <div class="flex items-center justify-between p-4 border-b">
                                        <h2 class="text-base font-semibold">Edit Data Pengajar</h2>
                                        <button @click="show = false"
                                            class="text-gray-400 hover:text-gray-600 text-xl leading-none">
                                            &times;
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

                                        <form id="editFacilityForm" method="POST" class="space-y-5">

                                            @csrf
                                            @method('PUT')

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                                <!-- Nama Dokumen -->
                                                <div class="md:col-span-2">
                                                    <x-input-label value="Nama Dokumen"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="text" name="document_name"
                                                        x-model="form.document_name"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- Link Dokumen -->
                                                <div class="md:col-span-2">
                                                    <x-input-label value="Link Dokumen"
                                                        class="text-xs font-medium text-gray-600" />

                                                    <input type="text" name="document_link"
                                                        x-model="form.document_link"
                                                        class="mt-1 w-full h-10 px-3 text-sm border border-gray-300 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                                </div>

                                                <!-- Status -->
                                                <div class="flex items-center mt-2">

                                                    <label class="inline-flex items-center gap-2 cursor-pointer">

                                                        <input type="checkbox" name="status" value="active"
                                                            :checked="form.status === 'active'"
                                                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">

                                                        <span class="text-sm text-gray-700">
                                                            Aktif Ditampilkan
                                                        </span>

                                                    </label>

                                                </div>

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
                    document_name: '',
                    document_link: '',
                    status: 'active',
                },

                openModal(data) {

                    this.show = true;

                    this.form = {
                        id: data.id ?? null,
                        document_name: data.document_name ?? '',
                        document_link: data.document_link ?? '',
                        status: data.status ?? 'active',
                    };

                    this.$nextTick(() => {

                        const form = document.getElementById('editFacilityForm');

                        form.action = `/admin/lecturers/${data.id}`;

                    });
                }
            }
        }
    </script>


    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
@endsection
