<style>
 body {
        font-family: 'Poppins', sans-serif;
    }
    .zebra-table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    border: 1px solid #e5e7eb;
}

.zebra-table th {
    background-color: #ADD8E6; /* biru muda */
    color: black;
    text-align: center;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    white-space: nowrap;
}

.zebra-table td {
    text-align: center;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    white-space: nowrap;
}

.zebra-table tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

.zebra-table tbody tr:nth-child(even) {
    background-color: #f1f1f1;
}

.zebra-table tbody tr:hover {
    background-color: #ffd100 !important;
}

th {
    background-color: #ADD8E6;
}

</style>

@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <!--begin::App Wrapper-->
 <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_administrator.00_baganterpisah.09_button')
{{-- ---------------------------------------------------------------------- --}}

   @include('backend.00_administrator.00_baganterpisah.03_sidebar')
   @include('frontend.android.00_fiturmenu.06_alert')


   <!--begin::App Main-->
   <main class="app-main"
      style="
    background: linear-gradient(to bottom, #7de3f1, #ffffff);
    margin: 0;
    padding: 0;
    position: relative;
    left: 0;
  ">
     <!--begin::App Content Header-->
     <div class="app-content-header">
       <!--begin::Container-->
       <div class="container-fluid">
         <!--begin::Row-->
         <div class="row">

@include('backend.00_administrator.00_baganterpisah.10_selamatdatang')

           {{-- <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div> --}}

         </div>
         <!--end::Row-->
       </div>
       <!--end::Container-->
     </div>

     <!-- Menampilkan pesan sukses -->
<br>
     {{-- ======================================================= --}}
     {{-- ALERT --}}

     {{-- @include('backend.00_administrator.00_baganterpisah.06_alert') --}}

     {{-- ======================================================= --}}

     <div class="container-fluid">
         <!--begin::Row-->
         <div class="putih row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
  {{-- @include('backend.00_administrator.00_baganterpisah.10_selamatdatang') --}}

</div>
<!-- /.card-header -->
<div class="card-header">

    @include('backend.00_administrator.00_baganterpisah.11_judulhalaman')
                     </div>

         @canany(['konsultanbantek'])
   <div style="display: flex; justify-content: flex-end; margin-bottom:10px;">
    <button class="button-kembali"
            type="button"
            onclick="location.href='{{ url()->previous() }}';"
            style="cursor: pointer; color:black;">
        <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
    </button>
</div>

@endcanany

         @canany(['dinas'])
    <div style="display: flex; justify-content: flex-end; margin-bottom:10px;">
        <button class="button-kembali"
                type="button"
                onclick="location.href='{{ route('bebantekdinasasistensiindex') }}';"
                style="cursor: pointer; color:black;">
            <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
        </button>
    </div>

@endcanany

         @canany(['pemohonbantek'])
    <div style="display: flex; justify-content: flex-end; margin-bottom:10px;">
        <button class="button-kembali"
                type="button"
                onclick="location.href='{{ route('bebantekpemohonasistensiindex') }}';"
                style="cursor: pointer; color:black;">
            <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
        </button>
    </div>

@endcanany

         @canany(['superadmin', 'admin'])
    <div style="display: flex; justify-content: flex-end; margin-bottom:5px;">

        <button class="button-validasinew"
                type="button"
                onclick="location.href='{{ route('krkusaha.index') }}';"
                style="cursor: pointer; color:white;">
            <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
        </button>
    </div>
@endcanany

<br>
<br>
      <hr>
                 <!-- /.card-header -->

                         <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">


{{-- @canany(['super_admin', 'admin', 'lsppenerbit'])

<form action="{{ route('peserta.downloadSemua', $data->id) }}" method="POST">
    @csrf
<button type="submit"
    onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'"
    onmouseout="this.style.background='linear-gradient(135deg, #d4af37, #4CAF50)'; this.style.color='white'; this.style.transform='scale(1)'"
    style="
        background: linear-gradient(135deg, #d4af37, #4CAF50);
        color: white;
        border: none;
        margin-right: 10px;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    "
>
    <!-- Ikon Download -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16">
        <path d="M.5 9.9v2.6c0 .6.5 1 1 1h13c.6 0 1-.4 1-1V9.9c0-.5-.4-1-1-1s-1 .5-1 1v1.6H2.5V9.9c0-.5-.5-1-1-1s-1 .5-1 1z"/>
        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3.182-3.182a.5.5 0 1 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.172 7.964a.5.5 0 1 0-.708.708l3.182 3.182z"/>
    </svg>
    Download Berkas .zip/.rar Peserta
</button>


</form>

@endcanany --}}


@can('pemohon')

           <a href="/bekrkusahapemohon">
    <button
  style="
    background: linear-gradient(45deg, #6c757d, #adb5bd);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-right:10px;
  "
  onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'"
  onmouseout="this.style.background='linear-gradient(45deg, #6c757d, #adb5bd)'; this.style.color='white'; this.style.transform='scale(1)'"
>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
    viewBox="0 0 16 16">
    <path fill-rule="evenodd"
      d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
  </svg>
  Kembali
</button>

</a>


@endcan

@can('lsppenerbit')
   <button
    onclick="history.back();"
    onmouseover="this.style.background = 'white'; this.style.color = 'black';"
    onmouseout="this.style.background = 'linear-gradient(to right, black, white)'; this.style.color = 'white';"
    style="background: linear-gradient(to right, black, white); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16" style="margin-right: 8px;">
        <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
    </svg>
    Kembali
</button>

@endcan



                 </div>

                    </div>


<style>
    .halaman-pertama {
        width: 80%;
        margin: auto;
        padding: 20px;
        /* border: 1px solid black; */
    }

    .halaman-kedua {
        width: 80%;
        margin: auto;
        padding: 20px;
        /* border: 1px solid black; */
    }

    /* Styling untuk kop surat */
    .header-surat {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
        margin-top:-50px;
    }

    .header-surat img {
        width: 300px; /* Perbesar sedikit agar lebih proporsional */
        height: 300px;
        margin-right: 50px; /* Jarak antara logo dan teks */
        margin-bottom: 300px; /* Jarak antara logo dan teks */
    }

    .header-surat-text {
        flex: 1; /* Supaya teks mengisi sisa ruang */
    }

    .header-surat h3, .header-surat h4, .header-surat p {
        margin: 2px 0; /* Supaya tidak ada jarak berlebihan */
        font-size: 20px; /* Sesuaikan ukuran font */
    }

    .header-surat h4 {
        font-size: 14px;
        font-weight: normal;
    }

    /* Tambahkan font Poppins ke seluruh halaman */
    .container-surat {
        font-family: 'times new roman', sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        font-size: 16px; /* Sesuaikan ukuran teks */
    }

    th {
        background-color: #ddd;
        font-weight: 600; /* Lebih tebal agar judul tabel lebih jelas */
    }
</style>


    <br>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .zebra-table {
            width: 100%;
            border-collapse: collapse;
        }
        .zebra-table td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        .zebra-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .button-download {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .button-download:hover {
            background-color: #45a049;
        }
        .button-dikembalikan {
            background-color: #f8f9fa;
            color: #212529;
            padding: 8px 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .button-dikembalikan:hover {
            background-color: #e2e6ea;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>

<!-- Container for the content you want to download -->
    <div style="width: 100%; padding: 20px;">
    <!-- Container for the content you want to download -->
<!DOCTYPE html>
<html lang="id">
<head>
  <style>
    @page {
      size: A4;
      margin: 0;
    }
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f2f2f2;
      font-size: 12px;
    }
    .halaman {
      width: 21cm;
      height: 29.7cm;
      margin: auto;
      background: white;
      padding: 2cm;
      box-sizing: border-box;
      border: 1px solid black;
    }
    .kop {
      text-align: center;
      border-bottom: 2px solid black;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    .kop h3 {
      margin: 2px 0;
      font-size: 16px;
    }
    .kop p {
      margin: 4px 0;
      font-size: 13px;
    }
    .logo {
      height: 80px;
    }
    .judul-surat {
      text-align: center;
      font-weight: bold;
      text-decoration: underline;
      margin-bottom: 20px;
      font-size: 14px;
    }
    .isi-surat p {
      text-align: justify;
      line-height: 1.6;
      margin-bottom: 10px;
    }
    .tabel-info {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
      font-size: 12px;
    }
    .tabel-info td {
      padding: 4px;
    }
    .ttd {
      text-align: right;
      margin-top: 40px;
    }
    @media print {
      body {
        background: white;
      }
    }

  </style>
</head>

<div style="text-align: center; margin: 20px;">
  <button class="button-baru" onclick="downloadPDF()" style="background-color: #e3342f; color: black; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">
    📄 Download Berkas Final KRK (PDF)
  </button>
</div>

<body>
  <div class="halaman">
    <div class="kop">
      <img src="/assets/abgblora/logo/logokabupatenblora.png" class="logo" style="float: left;">
      {{-- <img src="/assets/icon/pupr.png" class="logo" style="float: right;"> --}}
      <div style="display: inline-block;">
        <h3>PEMERINTAH KABUPATEN BLORA</h3>
        <h3>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
        <p>Jl. Nusantara No. 62 Telp. (0296) 531004</p>
        <h3>BLORA 58214</h3>
      </div>
      <div style="clear: both;"></div>
    </div>

    <div style="font-family: Arial, sans-serif; font-size: 12px; line-height: 1.5;">

    {{-- 1. Judul --}}
    <div style="text-align: center; font-weight: bold; font-size: 12px; margin-top:-15px;">
        KETERANGAN RENCANA KOTA <br>
Nomor: 640/{{ $data->id }}.FU/{{ date('Y') }}
    </div>

    {{-- 2. Paragraf Pembuka --}}
<style>
    .zebra-table td, .zebra-table th {
        font-size: 12px;
        padding: 4px;
    }
</style>
<br>
<h5 class="section-title" style="font-size:12px;">I. INFORMASI ADMINISTRASI</h5>

<div class="table-responsive">
    <table class="zebra-table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <td style="width: 5%;">No</td>
                <td style="width: 35%;">Item</td>
                <td style="width: 5%;">:</td>
                <td style="width: 55%;">Keterangan</td>
            </tr>
        </thead>
        <tbody>
            {{-- <tr>
                <td style="text-align: center;">1</td>
                <td>Nomor Dinas</td>
                <td>:</td>
                <td>
                    {{ $data->nomordinasasal ?? 'Belum Dibuatkan' }}
                </td>
            </tr> --}}

            @if($subdata->count())
                @foreach($subdata as $i => $item)
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td style="text-align: left;">Nomor Registrasi KRK</td>
                        <td>:</td>
                        <td style="text-align: left;">{{ $item->nomorregistrasi ?? '-' }}</td>
                    </tr>
                @endforeach
            @endif

            <tr>
                <td style="text-align: center;">2</td>
                <td style="text-align: left;">Tanggal KRK Di Buat</td>
                <td>:</td>
                <td style="text-align: left;">
                    {{ $data->tanggalpermohonan ? \Carbon\Carbon::parse($data->tanggalpermohonan)->translatedFormat('d F Y') : 'Belum Dibuatkan' }}
                </td>
            </tr>

            <tr>
                <td style="text-align: center;">4</td>
                <td style="text-align: left;">Nomor Induk Kependudukan (NIK)</td>
                <td>:</td>
                <td style="text-align: left;">{{ $data->nik ?? 'Belum Dibuatkan' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">5</td>
                <td style="text-align: left;">Nama Pemohon</td>
                <td>:</td>
                <td style="text-align: left;">{{ $data->perorangan ?? 'Belum Dibuatkan' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">6</td>
                <td>Nama Pemohon a/n Perusahaan</td>
                <td>:</td>
                <td>{{ $data->perusahaan ?? 'Belum Dibuatkan' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">7</td>
                <td>No Telepon</td>
                <td>:</td>
                <td>{{ $data->notelepon ?? 'Belum Dibuatkan' }}</td>
            </tr>
<tr>
    <td style="text-align: center;">8</td>
    <td>Alamat Pemohon</td>
    <td>:</td>
    <td style="white-space: normal; word-wrap: break-word; overflow-wrap: break-word;">
        {{ $data->alamatpemohon ? $data->alamatpemohon . ', Kabupaten Blora, Provinsi Jawa Tengah' : 'Belum Dibuatkan' }}
    </td>
</tr>

<tr>
    <td style="text-align: center;">9</td>
    <td>Lokasi Bangunan</td>
    <td>:</td>
    <td style="white-space: normal; word-wrap: break-word; overflow-wrap: break-word;">
        {{ $data->lokasibangunan ? $data->lokasibangunan . ', Kabupaten Blora, Provinsi Jawa Tengah' : 'Belum Dibuatkan' }}
    </td>
</tr>

        </tbody>
    </table>
</div>

<br>

<h5 class="section-title" style="font-size: 12px;">II. INFORMASI INTENSITAS BANGUNAN GEDUNG</h5>
<div class="table-responsive">
    <table class="zebra-table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <td style="width: 5%;">No</td>
                <td style="width: 35%;">Item</td>
                <td style="width: 5%;">:</td>
                <td style="width: 55%;">Keterangan</td>
            </tr>
        </thead>
        <tbody>
            @if($subdata->count())
                @foreach($subdata as $item)
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>Kepadatan</td>
                        <td>:</td>
                        <td>{{ $item->kepadatan ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">2</td>
                        <td>Jumlah Lantai</td>
                        <td>:</td>
                        <td>{{ $item->luaslantaimaksimal ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">3</td>
                        <td>Luas Bangunan Maksimal</td>
                        <td>:</td>
                        <td>{{ $item->luasbangunan ? $item->luasbangunan . ' M²' : '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">4</td>
                        <td>Luas Lantai Maksimal</td>
                        <td>:</td>
                        <td>{{ $item->luaslantaimaksimal ?? 'Belum Dibuatkan' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">5</td>
                        <td>Fungsi Utama Bangunan</td>
                        <td>:</td>
                        <td>{{ $item->fungsibangunan ?? 'Belum Dibuatkan' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">6</td>
                        <td>(GSB) Garis Sempadan Bangunan</td>
                        <td>:</td>
                        <td>{{ $item->gsb ?? 'Belum Dibuatkan' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">7</td>
                        <td>(KDB) Koefisien Dasar Bangunan</td>
                        <td>:</td>
                        <td>{{ $item->kdb ?? 'Belum Dibuatkan' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">8</td>
                        <td>(KLB) Koefisien Lantai Bangunan</td>
                        <td>:</td>
                        <td>{{ $item->klb ?? 'Belum Dibuatkan' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">9</td>
                        <td>(KLH) Koefisien Lahan Hijau</td>
                        <td>:</td>
                        <td>{{ $item->klh ?? 'Belum Dibuatkan' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">10</td>
                        <td>(KDH) Koefisien Dasar Hijau</td>
                        <td>:</td>
                        <td>{{ $item->kdh ? $item->kdh . '%' : 'Belum Dibuatkan' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">11</td>
                        <td>Jaringan Utilitas Kota</td>
                        <td>:</td>
                        <td>{{ $item->jaringanutilitas ?? 'Belum Dibuatkan' }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>


    {{-- <p>
        Konsultasi TPA Kabupaten Blora yang memeriksa dokumen rencana teknis pada hari
        {{ \Carbon\Carbon::parse($surat->tanggalkehadiran ?? now())->translatedFormat('l') }}
        tanggal {{ \Carbon\Carbon::parse($surat->tanggalkehadiran ?? now())->format('d') }}
        bulan {{ \Carbon\Carbon::parse($surat->tanggalkehadiran ?? now())->translatedFormat('F') }}
        tahun Dua Ribu Dua Puluh Lima untuk :
    </p> --}}

</div>

</div>


<div class="halaman">
  <div class="content">

    <div class="section-title" style="font-size:12px;">Dasar Pertimbangan</div>
    <ol style="font-size:12px;">
      <li>Keputusan Menteri Pekerjaan Umum dan Perumahan Rakyat Nomor 1688/KPTS/M/2022 tentang Penetapan Ruas Jalan Menurut Statusnya sebagai Jalan Nasional.</li>
      <li>Keputusan Gubernur Jawa Tengah Nomor 622 / 12 Tahun 2023 tentang Penetapan Ruas Jalan dalam Jaringan Jalan Kolektor Primer - 4, Jalan Lokal Primer, Jalan Lingkungan Primer, Jalan Arteri Sekunder, Jalan Kolektor Sekunder, Jalan Lokal Sekunder dan Jalan Lingkungan Sekunder di Provinsi Jawa Tengah.</li>
      <li>Peraturan Daerah Kabupaten Blora Nomor 1 Tahun 2016 tentang Bangunan Gedung.</li>
      <li>Peraturan Daerah Kabupaten Blora Nomor 11 Tahun 2018 tentang Perubahan atas Peraturan Daerah Kabupaten Blora Nomor 1 Tahun 2016 tentang Bangunan Gedung.</li>
      <li>Peraturan Daerah Kabupaten Blora Nomor 5 Tahun 2021 tentang Rencana Tata Ruang Wilayah Kabupaten Blora.</li>
      <li>SK Bupati No. 620/175/2023 tentang Penetapan Status Ruas Jalan sebagai Jalan Kabupaten di Wilayah Kabupaten Blora.</li>
    </ol>

    <hr>

    <div class="section-title" style="font-size:12px;">Ketentuan Lain-Lain</div>
    <ol style="font-size:12px;">
      <li>Harus menyediakan Ruang Terbuka Hijau (RTH) privat minimal seluas 10% dari luas persil.</li>
      <li>Dilarang memperkecil atau memperbesar volume debit kapasitas saluran umum (drainase kota) dan/atau menutup saluran umum.</li>
      <li>Rencana bangunan menyesuaikan dengan ketentuan teknik yang tercantum dalam lembar ini.</li>
      <li>Rencana bangunan mempertimbangkan faktor keselamatan, kenyamanan, kesehatan dan kemudahan bagi pengguna bangunan.</li>
      <li>Keharusan membuat lubang resapan biopori.</li>
      <li>Keharusan menanam pohon pelindung dan pembuatan sumur resapan air hujan.</li>
      <li>Perkerasan halaman harus dengan struktur yang kuat.</li>
      <li>Wajib menyediakan tempat/area parkir.</li>
      <li>Bidang tanah yang terkena GSB dipergunakan untuk kepentingan umum.</li>
      <li>Semua ketentuan dalam KRK ini didasarkan pada peraturan yang berlaku di Kabupaten Blora pada saat ini. Apabila dikemudian hari terdapat ketentuan yang tidak sesuai, maka akan diperbaiki sesuai dengan peraturan yang ada. KRK ini bersifat sementara.</li>
    </ol>

  </div>
</div>

</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
  const { jsPDF } = window.jspdf;

  async function downloadPDF() {
    const element = document.querySelector('.halaman, .halaman'); // ✅ UBAH DARI .halaman-pertama KE .halaman
    if (!element) return alert('Halaman tidak ditemukan.');

    const canvas = await html2canvas(element, {
      scale: 2,
      logging: false,
      useCORS: true,
      allowTaint: true,
      scrollX: 0,
      scrollY: 0,
      windowWidth: element.scrollWidth,
      windowHeight: element.scrollHeight
    });

    const imgData = canvas.toDataURL('image/jpeg', 0.95);
    const imgWidthPx = canvas.width;
    const imgHeightPx = canvas.height;

    const pdf = new jsPDF({
      orientation: imgWidthPx > imgHeightPx ? 'landscape' : 'portrait',
      unit: 'mm',
      format: 'a4'
    });

    const pageWidth = pdf.internal.pageSize.getWidth();
    const pageHeight = pdf.internal.pageSize.getHeight();

    const ratio = Math.min(
      pageWidth / (imgWidthPx / 2.8346),
      pageHeight / (imgHeightPx / 2.8346)
    );

    const imgWidth = (imgWidthPx / 2.8346) * ratio;
    const imgHeight = (imgHeightPx / 2.8346) * ratio;

    const x = (pageWidth - imgWidth) / 2;
    const y = (pageHeight - imgHeight) / 2;

    pdf.addImage(imgData, 'JPEG', x, y, imgWidth, imgHeight);
    pdf.save("berkas-final_krk_usaha.pdf");
  }
</script>



</div>
        </div>
    </div>


        </div>
    </div>

    <!-- Download button (will not appear in PDF) -->
{{-- Tombol hapus tidak ikut di dalam table --}}
    <!-- Form dan tombol trigger modal -->

</div>

<br>

</div>


</div>

<br>

</div>
</div>

                      <br><br><br>
                        </div>
                    </div>
</form>

<br>
<!-- Modal untuk preview dokumen -->

                    <!-- /.card-body -->
                </div>


                 {{-- @include('backend.00_administrator.00_baganterpisah.07_paginations') --}}

                 <br><br>

             </div>
             <!-- /.card -->
         </div>
         <!-- /.col -->
     </div>
     <!--end::Row-->
     </div>
               <!--end::Container-->
     <!--end::App Content Header-->
     <!--begin::App Content-->
       <!--end::App Content-->
   </main>
   <!--end::App Main-->
 </div>
 </div>


   @include('backend.00_administrator.00_baganterpisah.02_footer')

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
   <script>
    function exportTableToExcel(tableID, filename = '') {
        var table = document.getElementById(tableID);
        var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet 1"});
        return XLSX.writeFile(wb, filename + '.xlsx');
    }
    </script>
