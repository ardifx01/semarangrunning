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
         <div class="row" style="margin-right: 10px; margin-left:10px;">
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
                onclick="location.href='{{ route('bekrkhunianindex') }}';"
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

           <a href="/bekrkhunianpemohon">
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
<html>
<head>
    <style>
        @page {
            size: A4;
            margin: 1cm;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
        }
        .download-btn-container {
            text-align: center;
            margin: 20px 0;
        }
        .download-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        .halaman-pertama {
            width: 100%;
            page-break-after: always;
        }
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .header-text {
            text-align: center;
        }
        .header-text h3 {
            margin: 0;
            font-size: 14px;
        }
        .header-text p {
            margin: 0;
            font-size: 14px;
        }
        .divider-line {
            border: 3px solid black;
            width: 100%;
            margin: 10px 0;
        }
        .document-title {
            margin: 0;
            font-size: 14px;
            text-align: center;
        }
        .section-title {
            color: navy;
            font-weight: 800;
            font-size: 14px;
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            table-layout: fixed;
        }
        table td {
            padding: 4px;
            vertical-align: top;
            word-wrap: break-word;
        }
        table thead td {
            text-align: center;
            font-weight: bold;
        }
        .logo {
            width: 80px;
            height: auto;
            margin-right: 15px;
            margin-top: 5px;
        }
        .break-before {
            page-break-before: always;
        }



    </style>
    <!-- Include html2pdf library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>



    <div style="display: flex; justify-content: flex-end; gap: 10px;">
    {{-- @canany(['superadmin', 'admin', 'pemohon']) --}}
    @canany(['superadmin', 'admin'])
    <a href="/krkhuniannoterbit/{{ $data->id }}" class="button-lolos"
        style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none; display: inline-block; font-size:16px; font-weight:600; text-align:center; border:none; cursor:pointer;"
        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.style.textDecoration='none';"
        onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.style.textDecoration='none';">
        Terbitkan Nomor Dinas
    </a>
    @endcanany

  <button class="button-lolos" onclick="downloadPDF()"
     style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 4px; border:none; cursor:pointer; font-size:16px; font-weight:600; transition: all 0.3s ease;"
     onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
     onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white';">
    Download PDF
  </button>
</div>

    <div id="contentToPrint">
        <div class="halaman-pertama">
            <div class="halaman-pertamaku">
                <div class="header-container">
                    <!-- Logo -->
                    <img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo Kabupaten Blora" width="80px;" style="margin-right:10px;" class="logo">
                    <img src="/assets/icon/pupr.png" alt="Logo Kabupaten Blora" width="80px;" style="margin-right:50px;" class="logo">

                    <!-- Teks Kop -->
                    <div class="header-text">
                        <h3>PEMERINTAH KABUPATEN BLORA</h3>
                        <h3>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
                        <p>Jl. Nusantara No. 62 Telp. (0296) 531004</p>
                        <h3>KABUPATEN BLORA 58214 PROVINSI JAWA TENGAH</h3>

                    </div>
                </div>
                <style>
    br {
        line-height: 1 !important;
        margin: 0 !important;
        padding: 0 !important;
    }
</style>

                <br>

                <!-- Garis dan Judul -->
                <div>
                    <div class="divider-line"></div>
                    <h5 class="document-title">PERMOHONAN KETERANGAN RENCANA KOTA (KRK) FUNGSI HUNIAN</h5>
                </div>
                <br>
            </div>

            <h5 class="section-title">I. INFORMASI ADMINISTRASI</h5>

            <div class="table-responsive">
                <table class="zebra-table table-striped">
                    <thead>
                        <tr>
                            <td style="width: 5%;">No</td>
                            <td style="width: 35%;">Item</td>
                            <td style="width: 5%;">:</td>
                            <td style="width: 55%;">Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td style="text-align: left;">Nomor Dinas</td>
                            <td>:</td>
                            <td style="text-align: left;">
                                @if($data->nomordinasasal)
                                    {{ $data->nomordinasasal }}
                                @else
                                    <span style="color: red;">Belum Dibuatkan</span>
                                @endif
                            </td>
                        </tr>

                        @if($subdata->count())
                        @foreach($subdata as $i => $item)
                        <tr>
                        <td style="text-align: center;">2</td>
                                    <td style="text-align: left;">Nomor Registrasi KRK</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->nomorregistrasi ?? '-' }}</td>
                                </tr>

                        @endforeach
                        @endif

                        <tr>
                            <td style="text-align: center;">3</td>
                            <td style="text-align: left;">Tanggal KRK Di Buat</td>
                            <td>:</td>
                        <td style="text-align: left;">
                            @if($data->tanggalpermohonan)
                                {{ \Carbon\Carbon::parse($data->tanggalpermohonan)->translatedFormat('d F Y') }}
                            @else
                                <span style="color: red;">Belum Dibuatkan</span>
                            @endif
                        </td>
                        </tr>

                        <tr>
                            <td style="text-align: center;">4</td>
                            <td style="text-align: left;">Nomor Induk Kependudukan (NIK)</td>
                            <td>:</td>
                            <td style="text-align: left;">
                                @if($data->nik)
                                    {{ $data->nik }}
                                @else
                                    <span style="color: red;">Belum Dibuatkan</span>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: center;">5</td>
                            <td style="text-align: left;">Nama Pemohon a/n Perorangan</td>
                            <td>:</td>
                            <td style="text-align: left;">
                                @if($data->perorangan)
                                    {{ $data->perorangan }}
                                @else
                                    <span style="color: red;">Belum Dibuatkan</span>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: center;">6</td>
                            <td style="text-align: left;">Nama Pemohon a/n Perusahaan</td>
                            <td>:</td>
                            <td style="text-align: left;">
                                @if($data->perusahaan)
                                    {{ $data->perusahaan }}
                                @else
                                    <span style="color: red;">Belum Dibuatkan</span>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: center;">7</td>
                            <td style="text-align: left;">No Telepon</td>
                            <td>:</td>
                            <td style="text-align: left;">
                                @if($data->notelepon)
                                    {{ $data->notelepon }}
                                @else
                                    <span style="color: red;">Belum Dibuatkan</span>
                                @endif
                            </td>
                        </tr>
      <tr>
    <td style="text-align: center;">8</td>
    <td style="text-align: left;">Alamat Pemohon</td>
    <td>:</td>
    <td style="text-align: left; padding-left: 0; margin-left: 0;
               white-space: normal; word-wrap: break-word; overflow-wrap: break-word; overflow-x: hidden;">
        @if($data->alamatpemohon)
{{ $data->alamatpemohon }} <br> Kabupaten Blora, Provinsi Jawa Tengah
        @else
<span style="color: red;">Belum Dibuatkan</span>
        @endif
    </td>
</tr>

<tr>
    <td style="text-align: center;">9</td>
    <td style="text-align: left;">Lokasi Bangunan</td>
    <td>:</td>
    <td style="text-align: left; padding-left: 0; margin-left: 0;
               white-space: normal; word-wrap: break-word; overflow-wrap: break-word; overflow-x: hidden;">
        @if($data->lokasibangunan)
{{ $data->lokasibangunan }} <br> Kabupaten Blora, Provinsi Jawa Tengah
        @else
<span style="color: red;">Belum Dibuatkan</span>
        @endif
    </td>
</tr>

                </tbody>
                </table>
            </div>
<br>
            <h5 class="section-title">II. INFORMASI INTERNSITAS BANGUNAN GEDUNG</h5>
            <div class="table-responsive">
                <table id="dataTable" class="zebra-table table-striped">
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
                            @foreach($subdata as $i => $item)
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td style="text-align: left;">Kepadatan</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->kepadatan ?? '-' }}</td>
                                </tr>

                                <tr>
                                    <td style="text-align: center;">2</td>
                                    <td style="text-align: left;">Jumlah Lantai</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->luaslantaimaksimal ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3</td>
                                    <td style="text-align: left;">Luas Bangunan Maksimal</td>
                                    <td>:</td>
                    <td style="text-align: left;">
                {{ $item->luasbangunan ? $item->luasbangunan . ' M²' : '-' }}
                    </td>
            </tr>
                                <tr>
                                    <td style="text-align: center;">4</td>
                                    <td style="text-align: left;">Luas Lantai Maksimal</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->luaslantaimaksimal ?? 'Belum di buatkan' }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">5</td>
                                    <td style="text-align: left;">Fungsi Utama Bangunan</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->fungsibangunan ?? 'Belum di buatkan' }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">6</td>
                                    <td style="text-align: left;">(GSB) Garis Sempadan Bangunan</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->gsb ?? 'Belum di buatkan' }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">7</td>
                                    <td style="text-align: left;">(KDB) Koefisien Dasar Bangunan</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->kdb ?? 'Belum di buatkan' }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">8</td>
                                    <td style="text-align: left;">(KLB) Koefisien Lantai Bangunan</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->klb ?? 'Belum di buatkan' }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">9</td>
                                    <td style="text-align: left;">(KLH) Koefisien Lahan Hijau</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->klh ?? 'Belum di buatkan' }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">10</td>
                                    <td style="text-align: left;">(KDH) Koefisien Dasar Hijau</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->kdh ?? 'Belum di buatkan' }}%</td>
                                </tr>

                                <tr>
                                    <td style="text-align: center;">11</td>
                                    <td style="text-align: left;">Jaringan Utilitas Kota</td>
                                    <td>:</td>
                                    <td style="text-align: left;">{{ $item->jaringanutilitas ?? 'Belum di buatkan' }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>

                <br>

<style>
  .content {
    font-size: 12px;
    font-family: Arial, sans-serif;
    line-height: 1.4;
    max-width: 800px;
    margin: 20px auto;
  }
  .section-title {
    font-weight: bold;
    margin-top: 20px;
    margin-bottom: 10px;
  }
  ol {
    padding-left: 20px;
    margin: 0 0 20px 0;
  }
  ol li {
    margin-bottom: 6px;
    text-align: justify;
  }
</style>

<div class="content">
  <div class="section-title">Dasar Pertimbangan</div>
  <ol>
    <p>1. KEPUTUSAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT NOMOR 1688/KPTS/M/2022 TENTANG PENETAPAN <br> RUAS JALAN MENURUT STATUSNYA SEBAGAI JALAN NASIONAL</p>
    <p>2. KEPUTUSAN GUBERNUR JAWA TENGAH NOMOR 622 / 12 TAHUN 2023 TENTANG PENETAPAN RUAS JALAN DALAM <br> JARINGAN JALAN <br> KOLEKTOR PRIMER -4, JALAN LOKAL PRIMER, JALAN LINGKUNGAN PRIMER, JALAN ARTERI SEKUNDER, JALAN KOLEKTOR SEKUNDER, JALAN LOKAL SEKUNDER DAN JALAN LINGKUNGAN SEKUNDER DI PROVINSI JAWA TENGAH</p>
    <p>3 PERATURAN DAERAH KABUPATEN BLORA NOMOR 1 TAHUN 2016 TENTANG BANGUNAN GEDUNG</p>
    <p>4. PERATURAN DAERAH KABUPATEN BLORA NOMOR 11 TAHUN 2018 TENTANG PERUBAHAN ATAS PERATURAN DAERAH <br> KABUPATEN BLORA NOMOR 1 TAHUN 2016 TENTANG BANGUNAN GEDUNG</p>
    <p>5. PERATURAN DAERAH KABUPATEN BLORA NOMOR 5 TAHUN 2021 TENTANG RENCANA TATA RUANG <br>WILAYAH KABUPATEN BLORA</p>
    <p>6. SK BUPATI NO. 620/175/2023 TENTANG PENETAPAN STATUS RUAS JALAN SEBAGAI JALAN KABUPATEN DI WILAYAH <br> KABUPATEN BLORA</p>
  </ol>
<br><br><br><br><br><br><br><br><br><br>
  <div class="section-title">Ketentuan lain-lain:</div>
  <ol>
    <p>1. Harus menyediakan Ruang Terbuka Hijau (RTH) privat minimal seluas 10% dari luas persil.</p>
<p>2. Dilarang memperkecil atau memperbesar volume debit kapasitas saluran umum (drainase kota) dan atau menutup saluran umum.</p>
<p>3. Rencana bangunan menyesuaikan dengan ketentuan teknik yang tercantum dalam lembar ini.</p>
<p>4. Rencana bangunan mempertimbangkan faktor keselamatan, kenyamanan, kesehatan dan kemudahan bagi pengguna bangunan.</p>
<p>5. Keharusan membuat lubang resapan biopori.</p>
<p>6. Keharusan menanam pohon pelindung dan pembuatan sumur resapan air hujan.</p>
<p>7. Perkerasan halaman harus dengan struktur yang kuat.</p>
<p>8. Wajib menyediakan tempat/area parkir.</p>
<p>9. Bidang tanah yang terkena GSB dipergunakan untuk kepentingan umum.</p>
<p>10. Semua ketentuan dalam KRK ini didasarkan pada peraturan yang berlaku di Kabupaten Blora pada saat ini. Apabila dikemudian hari terdapat ketentuan yang tidak sesuai, maka akan diperbaiki sesuai dengan peraturan yang ada. KRK ini bersifat sementara.</p>
  </ol>
</div>

</div>
        </div>
    </div>

<style>
    /* Styling PDF khusus saat download */
    .pdf-export table,
    .pdf-export td,
    .pdf-export th {
        font-size: 14px !important;
    }

    /* Reset margin dan padding atas agar PDF rapi */
    .pdf-export,
    .pdf-export * {
        margin: 0 !important;
        padding: 0 !important;
        box-sizing: border-box;
    }
    .pdf-export img {
    margin-right: 10px !important;
}

</style>

<script>
    function downloadPDF() {
        const element = document.getElementById('contentToPrint');

        // Tambahkan class untuk styling PDF
        element.classList.add('pdf-export');

        const opt = {
            margin: [1, 1, 1, 1], // Top, Left, Bottom, Right in cm
            filename: 'KRK_Fungsi_Hunian.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2, useCORS: true },
            jsPDF: { unit: 'cm', format: 'a4', orientation: 'portrait' }
        };

        html2pdf().set(opt).from(element).save().then(() => {
            // Hapus class styling setelah selesai
            element.classList.remove('pdf-export');
        });
    }
</script>
</body>
</html>
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
