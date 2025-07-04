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

       <a href="{{ url()->previous() }}">
    <button class="button-validasinew" type="button" style="cursor: pointer; color:white;">
        <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
    </button>
</a>

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
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Surat Pemberitahuan Verifikasi SIMBG</title>
  <style>
    @page {
      size: A4;
      margin: 0;
    }
    body {
      font-family: 'Times New Roman', Times, serif;
      margin: 0;
      background: #f2f2f2;
      font-size: 12px;
    }
    .halaman-pertama {
      width: 21cm;
      height: 29.7cm;
      margin: auto;
      background: white;
      padding: 1cm 2cm;
      box-sizing: border-box;
      border: 1px solid black;
      page-break-after: always;
    }
    table.header-table {
      width: 100%;
      border-bottom: 2px solid black;
    }
    table.header-table td {
      vertical-align: middle;
    }
    .logo {
      height: 80px;
    }
    .header-text {
      text-align: center;
    }
    .header-text h3 {
      margin: 2px 0;
      font-size: 16px;
      font-weight: bold;
    }
    .header-text p {
      margin: 4px 0;
      font-size: 13px;
    }
    .download-container {
      text-align: center;
      margin: 20px 0;
    }
    .download-btn {
      background-color: navy;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    table.isian {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
      font-size: 12px;
    }
    table.isian td, table.isian th {
      padding: 5px;
      border: 1px solid #000;
      vertical-align: top;
    }
    p {
      font-size: 12px;
    }
    @media print {
      .download-container {
        display: none;
      }
      .halaman-pertama {
        box-shadow: none;
        border: none !important;
      }
      body {
        background: white;
      }
    }
  </style>
</head>
<body>

    <div class="download-container">
  <style>
    .download-btn {
      background-color: red;
      color: white;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .download-btn:hover {
      background-color: white;
      color: black;
      border: 1px solid red;
    }
  </style>
  <button class="download-btn" onclick="downloadPDF()"><i class="bi bi-download"></i> Download PDF</button>
</div>

{{-- <div class="download-container">
  <button class="download-btn" onclick="downloadPDF()">Download PDF</button>
</div> --}}

<!-- HALAMAN PERTAMA -->
<div class="halaman-pertama">
  <table class="header-table">
    <tr>
      <td style="width: 80px;"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo Kabupaten Blora" class="logo" /></td>
      <td class="header-text">
        <h3>PEMERINTAH KABUPATEN BLORA</h3>
        <h3>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
        <p>Jl. Nusantara No. 62 Telp. (0296) 531004</p>
        <h3>BLORA 58214 </h3>
      </td>
      {{-- <td style="width: 80px; text-align: right;"><img src="/assets/icon/pupr.png" alt="Logo PUPR" class="logo" /></td> --}}
    </tr>
  </table>

  <p style="text-align: right; margin-top: 20px;">Blora, {{ $surat ? \Carbon\Carbon::parse($surat->tanggalpemberitahuan)->translatedFormat('d F Y') : '-' }}</p>

  <p>
    <strong>Nomor</strong> : 640/OPRT-{{ $surat->pbgslfbangunan->noregissimbg ?? '-' }}/{{ $surat->pemberitahuanke ?? '-' }}/2024<br />
    <strong>Lampiran</strong> : 1 Bandel<br />
    <strong>Perihal</strong> : <u style="text-decoration: none;">Pemberitahuan Verifikasi {{ $surat->pbgslfbangunan->jenispengajuanpbgslfper->jenispengajuan ?? '-' }}</u>
  </p>

  <p>Kepada Yth:<br />Pemohon<br />Di Tempat</p>
  <p>Dengan ini kami sampaikan hasil verifikasi Pemohon sebagai berikut :</p>

  <table class="isian">
    <tr><td>No. Registrasi</td><td>{{ $surat->pbgslfbangunan->noregissimbg ?? '-' }}</td></tr>
<tr><td>Nama Lengkap Pemilik</td><td>{{ $surat->datapemilik->namapemilik ?? '-' }}</td></tr>
    <tr><td>Jenis Konsultasi</td><td>{{ $surat->databangunanpbg->jenisperkonsultasi->jenis ?? '-' }}</td></tr>
    <tr><td>Lokasi Bangunan</td><td>{{ $surat->databangunanpbg->lokasibangunan ?? '-' }}</td></tr>
    <tr><td>Fungsi Bangunan</td><td>{{ $surat->databangunanpbg->fungsibangunanpbg->fungsi ?? '-' }}</td></tr>
    <tr><td>No. Telepon</td><td>{{ $surat->datapemilik->nomortelepon ?? '-' }}</td></tr>
    <tr><td>Email</td><td>{{ $surat->datapemilik->email ?? '-' }}</td></tr>
  </table>

  <p style="margin-top: 10px;">Setelah dilakukan Verifikasi terhadap Data Bangunan, Data Tanah, Data Umum dan Ketentuan Teknis, maka data disimpulkan:</p>
  <p><strong>{{ $surat->pilihancatatan ?? '-' }}</strong></p>
  <p>Adapun cek list Verifikasi Permohonan {{ $surat->pbgslfbangunan->noregissimbg ?? '-' }} terlampir.</p>
  <p style="text-align: justify;">
  Bagi Pemohon yang tidak lengkap segera melengkapi data. Kesekretariatan SIMBG menyediakan berbagai kanal informasi baik secara offline di Loket 9 Mall Pelayanan Publik (MPP) Kab. Blora dan secara online di platform media sosial Instagram <strong>@dpuprblora</strong> dan TikTok <strong>@bangunan.gedung.dpupr</strong> guna memberikan informasi yang jelas kepada pemohon.
</p>
<p>
  Demikian pemberitahuan ini kami sampaikan dan kami ucapkan terima kasih.
</p>
<div style="display: flex; justify-content: flex-end; margin-top: 40px;">
  <div style="text-align: left;">
    <p>
      KESEKRETARIATAN SIMBG KAB. BLORA<br />
      DINAS PEKERJAAN UMUM DAN PENATAAN RUANG<br />
      KABUPATEN BLORA
    </p>
    <img src="/assets/abgblora/logo/barcodesimbg.png" alt="QR Code" style="height: 100px" />
    <p>OPERATOR SIMBG</p>
  </div>
</div>
</div>

<!-- HALAMAN KEDUA -->
<div class="halaman-pertama">
    <p style="margin-left:300px;">
    <strong>Nomor</strong> : 640/OPRT-{{ $surat->pbgslfbangunan->noregissimbg ?? '-' }}/{{ $surat->pemberitahuanke ?? '-' }}/2024<br />
    <strong>Lampiran</strong> : 1 Bandel<br />
    <strong>Perihal</strong> : <u style="text-decoration: none;">Pemberitahuan Verifikasi {{ $surat->pbgslfbangunan->jenispengajuanpbgslfper->jenispengajuan ?? '-' }}</u>
  </p>

  <h5 style="margin-top : -10px; text-align: center; font-weight: bold; text-decoration: underline; margin-bottom: 10px; font-size: 12px; font-family: 'Poppins', sans-serif;">
    CEK LIST VERIFIKASI DOKUMEN
  </h5>

  <h6><strong style="font-size: 12px; font-family: 'Poppins', sans-serif; margin-top: -20px;">A. DATA BANGUNAN</strong></h6>
  <table class="isian" style="margin-top: -5px;">
    <thead style="font-size: 12px; font-family: 'Poppins', sans-serif;">
      <tr>
        <th style="width: 40px;">NO</th>
        <th>DATA BANGUNAN</th>
        <th style="width: 200px; text-align:center;">VERIFIKASI</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td rowspan="5">1.</td>
        <td colspan="2"><strong>DATA PEMILIK</strong></td>
      </tr>
      <tr>
        <td>Nama Pemilik</td>
            <td>{{ $surat->datapemilik->namapemilik ?? '-' }}</td>
      </tr>
      <tr>
        <td>Alamat Pemilik Bangunan</td>
        <td>{{ $surat->datapemilik->alamatpemilik ?? '-' }}</td>
      </tr>
      <tr>
        <td>No. Telepon</td>
        <td>{{ $surat->datapemilik->nomortelepon ?? '-' }}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>{{ $surat->datapemilik->email ?? '-' }}</td>
      </tr>
      <tr>
        <td colspan="3"><em>Catatan data pemilik :</em> {{ $surat->datapemilik->catatan ?? '-' }}</td>
      </tr>
      <tr>
        <td rowspan="9">2.</td>
        <td colspan="2"><strong>DATA UMUM BANGUNAN GEDUNG</strong></td>
      </tr>
      <tr>
        <td>Jenis Permohonan Konsultasi</td>
        <td>{{ $surat->pbgslfbangunan->jenispengajuanpbgslfper->jenispengajuan ?? '-' }}</td>
      </tr>
      <tr>
        <td>Fungsi Bangunan</td>
        <td>{{ $surat->databangunanpbg->fungsibangunanpbg->fungsi ?? '-' }}</td>
      </tr>
      <tr>
        <td>Lokasi Bangunan</td>
        <td>{{ $surat->databangunanpbg->lokasibangunan ?? '-' }}</td>
      </tr>
      <tr>
        <td>Nama Bangunan</td>
        <td>{{ $surat->databangunanpbg->namabangunan ?? '-' }}</td>
      </tr>
      <tr>
        <td>Luas Lantai</td>
        <td>{{ $surat->databangunanpbg->luasbangunan ?? '-' }} Meter<sup>2</sup></td>
      </tr>
      <tr>
        <td>Tinggi Bangunan</td>
        <td>{{ $surat->databangunanpbg->tinggibangunan ?? '-' }} Meter</td>
      </tr>
      <tr>
        <td>Jumlah Lantai</td>
        <td>{{ $surat->databangunanpbg->jumlahlantai ?? '-' }} Lantai </td>
      </tr>
      <tr>
        <td>Perancang Dokumen Teknis</td>
        <td style="text-align: left; text-transform:uppercase;">{{ $surat->databangunanpbg->pilihancatatan ?? '-' }}</td>
      </tr>
      <tr>
        <td colspan="3"><em>Catatan Data Bangunan :</em> {{ $surat->databangunanpbg->catatan ?? '-' }}</td>
      </tr>
    </tbody>
  </table>

  <h6 style="margin-top: 10px; font-size: 12px; font-family: 'Poppins', sans-serif;" ><strong>B. DATA TANAH</strong></h6>
  <table class="isian" style="margin-top: -5px;">
    <thead style="font-size: 12px; font-family: 'Poppins', sans-serif;">
      <tr>
        <th style="width: 40px;">NO</th>
        <th>DATA TANAH</th>
        <th style="width: 200px; text-align:center;">VERIFIKASI</th>
      </tr>
    </thead>
    <tbody style="font-size: 12px; font-family: 'Poppins', sans-serif;">
      <tr>
        <td>1.</td>
        <td>ISIAN DATA TANAH</td>
        <td style="text-align: center; text-transform:uppercase;">
        {{ $surat->datatanahpbg->isiandatatanah ?? '-' }}
    </td>
</tr>
      <tr>
        <td rowspan="2">2.</td>
        <td><strong>KETENTUAN TEKNIS TANAH</strong></td>
        <td></td>
    </tr>
    <tr>
        <td>
            Gambar Batas tanah yang dikuasai termasuk gambar bangunan gedung yang sudah ada (eksisting) pada area/persil yang akan dibangun
        </td>
        <td style="text-align: center; text-transform:uppercase;">
            {{ $surat->datatanahpbg->penyelidikan ?? '-' }}
        </td>
    </tr>
    <tr>
        <tr>
            <td rowspan="2"></td>
            <td>Gambar dan informasi tentang hasil penyelidikan tanah untuk bangunan tidak sederhana</td>
            <td style="text-align: center; text-transform:uppercase;">
                {{ $surat->datatanahpbg->layout ?? '-' }}
            </td>
        </tr>
        </tr>
      <tr>

    <tr>
        <tr>
            <td rowspan="2"></td>
            <td>Berkas Dukung lainnya</td>
            <td style="text-align: center; text-transform:uppercase;">
                {{ $surat->datatanahpbg->berkas4 ?? '-' }}
            </td>
        </tr>
        </tr>
      <tr>
        <tr>
        <td colspan="3"><em>Catatan Data Tanah:</em> {{ $surat->datatanahpbg->catatan ?? '-' }}</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- HALAMAN KETIGA -->
<div class="halaman-pertama">
  <h6 style="margin-top: 25px; font-size: 12px; font-family: 'Poppins', sans-serif;">
    <strong>C. DATA UMUM</strong>
  </h6>
  <table class="isian" style="font-size: 12px; font-family: 'Poppins', sans-serif; margin-top: -5px;">
    <thead>
      <tr>
        <th style="width: 40px;">NO</th>
        <th>DOKUMEN UMUM</th>
        <th style="width: 200px; text-align:center;">VERIFIKASI</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Informasi KTP/KITAS*</td>
        <td style="text-align: center; text-transform: uppercase;">{{ $surat->dataumumpbg->berkas1 ?? '-' }}</td>
      </tr>
      <tr>
          <td>2.</td>
          <td>Informasi KRK/KRPR*</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dataumumpbg->berkas2 ?? '-' }}</td>
      </tr>
      <tr>
          <td>3.</td>
          <td>Surat Perjanjian pemanfaatan tanah antara pemilik tanah dan Pemilik Bangunan Gedung (Dalam hal pemilik tanah bukan pemilik bangunan gedung)</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dataumumpbg->berkas3 ?? '-' }}</td>
      </tr>
      <tr>
          <td>4.</td>
          <td>Dokumen lingkungan sesuai peraturan perundangan (AMDAL/AMDAL Lalin, UKL/UPL, SPPL)/Izin Lokasi*</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dataumumpbg->berkas4 ?? '-' }}</td>
      </tr>
      <tr>
          <td>5.</td>
          <td>Berkas Dukung Lainnya </td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dataumumpbg->berkas5 ?? '-' }}</td>
      </tr>
      <tr>
          <td colspan="3"><em>Catatan Data Umum :</em> {{ $surat->dataumumpbg->catatan ?? '-' }}</td>
      </tr>
  </tbody>
  </table>

  <h6 style="margin-top: 25px; font-size: 12px; font-family: 'Poppins', sans-serif;">
      <strong>D. DOKUMEN TEKNIS </strong>
  </h6>
  <table class="isian" style="font-size: 12px; font-family: 'Poppins', sans-serif; margin-top:-5px;">
    <thead>
        <tr>
            <th style="width: 40px;">NO</th>
            <th>DOKUMEN ARSITEKTUR</th>
        <th style="width: 200px; text-align:center;">VERIFIKASI</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>1.</td>
          <td>Rekomendasi Peil Banjir</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas1 ?? '-' }}</td>
      </tr>
      <tr>
          <td>2.</td>
          <td>Sfesifikasi Teknis Arsitektur Bangunan </td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas2 ?? '-' }}</td>
      </tr>
      <tr>
          <td>3.</td>
          <td>Gambar Rencana Detail Bangunan </td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas3 ?? '-' }}</td>
      </tr>
      <tr>
          <td>4.</td>
          <td>Gambar Rencana Tata Ruang Luar</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas4 ?? '-' }}</td>
      </tr>
      <tr>
          <td>5.</td>
          <td>Gambar Rencana Tata Ruang Dalam</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas5 ?? '-' }}</td>
      </tr>
      <tr>
          <td>6.</td>
          <td>Gambar Rencana Tampak Bangunan</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas6 ?? '-' }}</td>
      </tr>
      <tr>
          <td>7.</td>
          <td>Gambar Rencana Potongan Bangunan</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas7 ?? '-' }}</td>
      </tr>
      <tr>
          <td>8.</td>
          <td>Gambar Rencana Denah Bangunan</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas8 ?? '-' }}</td>
      </tr>
      <tr>
          <td>9.</td>
          <td>Gambar Rencana Tapak Bangunan</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas9 ?? '-' }}</td>
      </tr>
      <tr>
          <td>10.</td>
          <td>Gambar Situasi</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisarsi->berkas10 ?? '-' }}</td>
      </tr>
      <tr>
        <td colspan="3"><em>Catatan Dok. Arsitektur :</em>{{ $surat->dokumenteknisarsi->catatan ?? '-' }}</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- HALAMAN KEEMPAT -->
<div class="halaman-pertama">
  <table class="isian" style="font-size: 12px; font-family: 'Poppins', sans-serif;">
    <thead>
      <tr>
        <th style="width: 40px;">NO</th>
        <th>DOKUMEN STRUKTUR </th>
        <th style="width: 200px; text-align:center;" >VERIFIKASI</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Spesifikasi Teknis Struktur Bangunan*</td>
        <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas1 ?? '-' }}</td>
      </tr>
      <tr>
          <td>2.</td>
          <td>Perhitungan Teknis Struktur</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas2 ?? '-' }}</td>
      </tr>
      <tr>
          <td>3.</td>
          <td>Gambar Rencana Dan Details Teknis Tangga</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas3 ?? '-' }}</td>
      </tr>
      <tr>
          <td>4.</td>
          <td>Gambar Rencana dan Detail Teknis Plat Lantai</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas4 ?? '-' }}</td>
      </tr>
      <tr>
          <td>5.</td>
          <td>Gambar Rencana dan Detail Teknis Penutup</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas5 ?? '-' }}</td>
      </tr>
      <tr>
          <td>6.</td>
          <td>Gambar Rencana dan Detail Teknis Rangka Atap</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas6 ?? '-' }}</td>
      </tr>
      <tr>
          <td>7.</td>
          <td>Gambar Rencana dan Detail Teknis Balok</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas7 ?? '-' }}</td>
      </tr>
      <tr>
          <td>8.</td>
          <td>Gambar Rencana dan Detail Teknis Kolom</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas8 ?? '-' }}</td>
      </tr>
      <tr>
          <td>9.</td>
          <td>Gambar Rencana dan Detail Teknis Fondasi dan Sloof</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknisstruk->berkas9 ?? '-' }}</td>
      </tr>
      </tr>
      <tr>
          <td colspan="3"><em>Catatan Data Umum :</em> {{ $surat->dokumenteknisstruk->catatan ?? '-' }}</td>
      </tr>
  </tbody>
  </table>

  <table class="isian" style="font-size: 12px; font-family: 'Poppins', sans-serif;">
    <thead>
        <tr>
            <th style="width: 40px;">NO</th>
            <th>DOKUMEN MEKANIKAL DAN ELEKTRIKAL </th>
        <th style="width: 200px; text-align:center;">VERIFIKASI</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>1.</td>
          <td>Spesifikasi Teknis Mekanikal, Elektrikal dan Plumbing</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas1 ?? '-' }}</td>
      </tr>
      <tr>
          <td>2.</td>
          <td>Perhitungan Teknis Mekanikal, Elektrikal dan Plumbing</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas2 ?? '-' }}</td>
      </tr>
      <tr>
          <td>3.</td>
          <td>Gambar Rencana Dan Detail Sistem Proteksi Kebakaran</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas3 ?? '-' }}</td>
      </tr>
      <tr>
          <td>4.</td>
          <td>Gambar Rencana Dan Detail Pengelolaan Sampah</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas4 ?? '-' }}</td>
      </tr>
      <tr>
          <td>5.</td>
          <td>Gambar Rencana Dan Detail Pengelolaan Drainase</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas5 ?? '-' }}</td>
      </tr>
      <tr>
          <td>6.</td>
          <td>Gambar Rencana Dan Detail Pengelolaan Air Limbah</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas6 ?? '-' }}</td>
      </tr>
      <tr>
          <td>7.</td>
          <td>Gambar Rencana Dan Detail Pengelolaan Air Hujan</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas7 ?? '-' }}</td>
      </tr>
      <tr>
          <td>8.</td>
          <td>Gambar Rencana Dan Detail Pengelolaan Air Bersih</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas8 ?? '-' }}</td>
      </tr>
      <tr>
          <td>9.</td>
          <td>Gambar Rencana Dan Detail Pecahayaan Umum, dan Pencahayaan Khusus</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas9 ?? '-' }}</td>
      </tr>
      <tr>
          <td>10.</td>
          <td>Gambar Rencana Dan Detail Sumber Listrik dan Jaringan Listrik</td>
          <td style="text-align: center; text-transform: uppercase;">{{ $surat->dokumenteknismep->berkas10 ?? '-' }}</td>
      </tr>

      <tr>
        <td colspan="3"><em>Catatan Dok. Mekanikal Elektrikal Plumbing :</em>{{$surat->dokumenteknismep->catatan ?? '-' }}</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- HALAMAN KELIMA -->
<div class="halaman-pertama">
  <table class="isian" style="font-size: 12px; font-family: 'Poppins', sans-serif;">
    <thead>
      <tr>
        <th style="width: 40px;">NO</th>
        <th>DOKUMEN TEKNIS GEDUNG EKSISTING DOKUMEN SLF  </th>
        <th style="width: 200px; text-align:center;" >VERIFIKASI</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Laporan Pemeriksaan Kelaikan Fungsi Bangunan Gedung</td>
        <td style="text-align: center; text-transform: uppercase;">{{ optional($surat->dokumenteknisslfpbg)->berkas1 ?? '-' }}</td>
      </tr>
      <tr>
          <td>2.</td>
          <td>Laporan Pemeriksaan Berkala Bangunan Gedung</td>
          <td style="text-align: center; text-transform: uppercase;">{{ optional($surat->dokumenteknisslfpbg)->berkas2 ?? '-' }}</td>
      </tr>
      <tr>
          <td>3.</td>
          <td>Gambar Bangunan Gedung Terbangun </td>
          <td style="text-align: center; text-transform: uppercase;">{{ optional($surat->dokumenteknisslfpbg)->berkas3 ?? '-' }}</td>
      </tr>
      <tr>
          <td>4.</td>
          <td>Perhitungan Teknis dan Dokumen Rencana Saat Pembangunan Gedung</td>
          <td style="text-align: center; text-transform: uppercase;">{{ optional($surat->dokumenteknisslfpbg)->berkas4 ?? '-' }}</td>
      </tr>
      <tr>
          <td>5.</td>
          <td>Gambar Detail Struktur Bangunan</td>
          <td style="text-align: center; text-transform: uppercase;">{{ optional($surat->dokumenteknisslfpbg)->berkas5 ?? '-' }}</td>
      </tr>
      <tr>
          <td>6.</td>
          <td>Data Tenaga Ahli Pengkaji Teknis Bersertifikat</td>
          <td style="text-align: center; text-transform: uppercase;">{{ optional($surat->dokumenteknisslfpbg)->berkas6 ?? '-' }}</td>
      </tr>

          <tr>
          <td colspan="3"><em>Catatan Kajian Teknis SLF :</em> {{ $surat->dokumenteknisslfpbg->catatan ?? '-' }}</td>
      </tr>
  </tbody>
  </table>

<div style="display: flex; justify-content: flex-end; margin-top: 40px;">
  <div style="text-align: left;">
    <p>
      KESEKRETARIATAN SIMBG KAB. BLORA<br />
      DINAS PEKERJAAN UMUM DAN PENATAAN RUANG<br />
      KABUPATEN BLORA
    </p>
    <img src="/assets/abgblora/logo/barcodesimbg.png" alt="QR Code" style="height: 100px" />
    <p>OPERATOR SIMBG</p>
  </div>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
  // Inisialisasi jsPDF
  const { jsPDF } = window.jspdf;

  async function downloadPDF() {
    const pages = document.querySelectorAll('.halaman-pertama');
    const zip = new JSZip();
    const imgFolder = zip.folder("Surat_Pemberitahuan");

    // Array untuk menyimpan data gambar
    const imagesData = [];

    // Loop melalui setiap halaman
    for (let i = 0; i < Math.min(pages.length, 5); i++) {
      const page = pages[i];

      // Gunakan html2canvas untuk mengkonversi ke canvas
      const canvas = await html2canvas(page, {
        scale: 2,
        logging: false,
        useCORS: true,
        allowTaint: true,
        scrollX: 0,
        scrollY: 0,
        windowWidth: page.scrollWidth,
        windowHeight: page.scrollHeight
      });

      // Konversi canvas ke JPEG
      const imgData = canvas.toDataURL('image/jpeg', 0.9);

      // Simpan data gambar untuk PDF
      imagesData.push({
        data: imgData,
        width: canvas.width,
        height: canvas.height
      });

      // Tambahkan ke ZIP
      imgFolder.file(`halaman-${i+1}.jpg`, imgData.substr(imgData.indexOf(',')+1), {
        base64: true
      });
    }

    // Buat PDF dari semua gambar
    if (imagesData.length > 0) {
      const pdf = new jsPDF({
        orientation: imagesData[0].width > imagesData[0].height ? 'landscape' : 'portrait',
        unit: 'mm'
      });

      imagesData.forEach((img, index) => {
        if (index > 0) {
          pdf.addPage();
        }

        // Hitung dimensi halaman PDF (A4)
        const pageWidth = pdf.internal.pageSize.getWidth();
        const pageHeight = pdf.internal.pageSize.getHeight();

        // Hitung rasio untuk memastikan gambar pas di halaman
        const ratio = Math.min(
          pageWidth / (img.width / 2.8346), // 2.8346 untuk konversi px ke mm (96dpi)
          pageHeight / (img.height / 2.8346)
        );

        const imgWidth = (img.width / 2.8346) * ratio;
        const imgHeight = (img.height / 2.8346) * ratio;

        // Hitung posisi tengah
        const x = (pageWidth - imgWidth) / 2;
        const y = (pageHeight - imgHeight) / 2;

        pdf.addImage(img.data, 'JPEG', x, y, imgWidth, imgHeight);
      });

      // Tambahkan PDF ke ZIP
      const pdfBlob = pdf.output('blob');
      imgFolder.file("surat-pemberitahuan.pdf", pdfBlob);
    }

    // Generate dan download ZIP
    const content = await zip.generateAsync({type:"blob"});
    saveAs(content, "surat-pemberitahuan.zip");
  }

  // Fungsi untuk save blob
  function saveAs(blob, filename) {
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = filename;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
</script>
</body>
</html>
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
