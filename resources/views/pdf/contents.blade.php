<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Daftar Dokumen Kerja Sama</title>

    <style>
        @page {
            margin: 25px;
        }

        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            color: #333;
        }

        .header {
            width: 100%;
            margin-bottom: 15px;
        }

        .header table {
            width: 100%;
            border: none;
        }

        .header td {
            border: none;
            vertical-align: top;
        }

        .logo {
            width: 85px;
        }

        .institution {
            padding-left: 10px;
        }

        .institution h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .institution p {
            margin: 2px 0;
            font-size: 11px;
        }

        .line {
            border-top: 2px solid #000;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 15px;
        }

        .info table {
            width: 100%;
            border: none;
        }

        .info td {
            border: none;
            padding: 2px 0;
            font-size: 11px;
        }

        .content-table {
            width: 100%;
            border-collapse: collapse;
        }

        .content-table th {
            background: #e9ecef;
            border: 1px solid #bfc5ca;
            padding: 8px;
            text-align: left;
            font-weight: bold;
        }

        .content-table td {
            border: 1px solid #bfc5ca;
            padding: 8px;
        }

        .text-center {
            text-align: center;
        }

        .footer-note {
            margin-top: 15px;
            font-size: 10px;
        }

        .signature {
            margin-top: 60px;
            width: 100%;
        }

        .signature table {
            width: 100%;
            border: none;
        }

        .signature td {
            border: none;
            text-align: center;
            width: 50%;
        }

        .sign-space {
            height: 70px;
        }

        .name {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- HEADER -->

    <div class="header">
        <table>
            <tr>
                <td width="100">
                    <img src="{{ public_path('storage/' . $landing->logo) }}" class="logo">
                </td>
                <td class="institution">
                    <p><strong>{{ $category->name }}</strong></p>
                    <p><strong>{{ $landing->app_name }} Universitas Darma Persada</strong></p>
                    <p>Jl. Taman Malaka Selatan, Pondok Kelapa, Jakarta Timur 13450</p>
                    <p>Telp. {{ $landing->whatsapp }}, Email
                        : {{ $landing->email }}</p>
                </td>
            </tr>
        </table>

        <div class="line"></div>
    </div>

    <!-- INFORMASI -->

    <div class="info">
        <table>
            <tr>
                <td width="50%">
                    <strong>Kategori Dokumen</strong> :
                    {{ $category->name }}
                </td>

                <td width="50%" style="text-align:right">
                    <strong>Tanggal Cetak</strong> :
                    {{ now()->locale('id')->translatedFormat('l, d F Y') }}
                </td>
            </tr>
        </table>
    </div>

    <!-- TABEL -->

    <table class="content-table">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="45%">Mitra Kerjasama</th>
                <th width="15%">Berlaku Dari</th>
                <th width="15%">Berlaku Sampai</th>
                <th width="20%">Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse($contents as $content)
                <tr>
                    <td class="text-center">
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $content->title }}
                    </td>

                    <td class="text-center">
                        {{ $content->valid_from?->format('d-m-Y') }}
                    </td>

                    <td class="text-center">
                        {{ $content->valid_until?->format('d-m-Y') }}
                    </td>

                    <td class="text-center">
                        @if ($content->valid_until && $content->valid_until >= now())
                            Aktif
                        @else
                            Kadaluarsa
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        Tidak ada data dokumen.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- CATATAN -->

    <div class="footer-note">
        Dokumen ini merupakan laporan resmi {{ $landing->app_name }} Universitas Darma Persada dan digunakan
        untuk keperluan administrasi serta dokumen kerja sama.
    </div>

    <!-- TANDA TANGAN -->

    {{-- <div class="signature">
        <table>
            <tr>
                <td>
                    Mengetahui,<br>
                    Kepala Pusat Kerja Sama &
                    Hubungan Internasional
                </td>

                <td>
                    Jakarta,
                    {{ now()->locale('id')->translatedFormat('d F Y') }}
                </td>
            </tr>

            <tr>
                <td class="sign-space"></td>
                <td class="sign-space"></td>
            </tr>

            <tr>
                <td>
                    <span class="name">
                        ....................................
                    </span>
                </td>

                <td>
                    <span class="name">
                        Admin {{ $landing->app_name }}
                    </span>
                </td>
            </tr>
        </table>
    </div> --}}

</body>

</html>
