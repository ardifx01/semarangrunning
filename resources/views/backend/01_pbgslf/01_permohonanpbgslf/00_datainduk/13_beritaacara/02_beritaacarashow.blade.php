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
  <meta charset="UTF-8">
  <title>Surat Tugas Fasilitator</title>
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
    📄 Download Berita Acara (PDF)
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
        BERITA ACARA HASIL KONSULTASI ke-{{ $surat->konsultasike ?? '-' }}<br>
        Nomor: 050/TPA-{{ $surat->pbgslfbangunan->noregissimbg ?? 'Data Kosong' }}/{{ $surat->konsultasike ?? '1' }}/2025
    </div>

    {{-- 2. Paragraf Pembuka --}}
    <br>
    <p>
        Konsultasi TPA Kabupaten Blora yang memeriksa dokumen rencana teknis pada hari
        {{ \Carbon\Carbon::parse($surat->tanggalkehadiran ?? now())->translatedFormat('l') }}
        tanggal {{ \Carbon\Carbon::parse($surat->tanggalkehadiran ?? now())->format('d') }}
        bulan {{ \Carbon\Carbon::parse($surat->tanggalkehadiran ?? now())->translatedFormat('F') }}
        tahun Dua Ribu Dua Puluh Lima untuk :
    </p>
{{-- 3. Tabel Data Informasi Umum --}}
<table style="width: 100%; border-collapse: collapse; font-size: 12px;">
    <tr>
        <td style="width: 35%; border: 1px solid #000; padding: 2px;">No. Registrasi</td>
        <td style="border: 1px solid #000; padding: 2px;">{{ $surat->pbgslfbangunan->noregissimbg ?? '-' }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px;">Jenis Permohonan</td>
        <td style="border: 1px solid #000; padding: 2px;">{{ $surat->databangunanpbg->jenisperkonsultasi->jenis ?? '-' }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px;">Nama Bangunan</td>
        <td style="border: 1px solid #000; padding: 2px;">{{ $surat->databangunanpbg->namabangunan ?? '-' }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px;">Hari, tanggal sidang</td>
        <td style="border: 1px solid #000; padding: 2px;">
            {{ \Carbon\Carbon::parse($surat->tanggalkehadiran)->translatedFormat('d F Y') }}
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px;">Luas Bangunan</td>
        <td style="border: 1px solid #000; padding: 2px;">{{ $surat->databangunanpbg->luasbangunan ?? '-' }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px;">Nama Pemohon</td>
        <td style="border: 1px solid #000; padding: 2px;">{{ $surat->datapemilik->namapemilik ?? '-' }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px;">Fungsi Bangunan</td>
        <td style="border: 1px solid #000; padding: 2px;">{{ $surat->databangunanpbg->fungsibangunanpbg->fungsi ?? '-' }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px;">Alamat Pemohon</td>
        <td style="border: 1px solid #000; padding: 2px;">{{ $surat->datapemilik->alamatpemilik ?? '-' }}</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px;">Lokasi Bangunan</td>
        <td style="border: 1px solid #000; padding: 2px;">{{ $surat->databangunanpbg->lokasibangunan ?? '-' }}</td>
    </tr>
</table>


    <br>
{{-- 4. Tabel Pemeriksaan Teknis --}}
<table style="width: 100%; border: 1px solid #000; border-collapse: collapse; font-size: 12px;">
    <thead>
        <tr>
            <th style="border: 1px solid #000; padding: 5px; text-align:center;">No</th>
            <th style="border: 1px solid #000; padding: 5px; text-align:center;">URAIAN DOKUMEN TEKNIS</th>
            <th style="border: 1px solid #000; padding: 5px; text-align:center;">ADA</th>
            <th style="border: 1px solid #000; padding: 5px; text-align:center;">TIDAK ADA</th>
            <th style="border: 1px solid #000; padding: 5px; text-align:center;">SESUAI</th>
            <th style="border: 1px solid #000; padding: 5px; text-align:center;">TIDAK SESUAI</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #000; text-align: center; padding: 5px;">1</td>
            <td style="border: 1px solid #000; padding: 5px;">Pemeriksaan Arsitektur</td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; text-align: center; padding: 5px;">2</td>
            <td style="border: 1px solid #000; padding: 5px;">Pemeriksaan Struktur</td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; text-align: center; padding: 5px;">3</td>
            <td style="border: 1px solid #000; padding: 5px;">Pemeriksaan M E P</td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; text-align: center; padding: 5px;">4</td>
            <td style="border: 1px solid #000; padding: 5px;">Data Teknis Gedung Eksisting</td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
        </tr>
    </tbody>
</table>


    <br>
<div style="width: 100%; max-width: 700px; margin: 0 auto; margin-top:-10px;">
  <p><strong>Rekomendasi:</strong></p>
  <table style="border-collapse: collapse; width: 100%; font-size: 12px; font-family: Arial, sans-serif; margin-top:-10px;">
    <tbody>
      <tr style="border: 1px solid #444;">
        <td style="border: 1px solid #444; padding: 4px; width: 50px; text-align: center;">☐</td>
        <td style="border: 1px solid #444; padding: 4px;">Tanpa Perbaikan</td>
      </tr>
      <tr style="border: 1px solid #444; background-color: #f9f9f9;">
        <td style="border: 1px solid #444; padding: 4px; text-align: center;">☐</td>
        <td style="border: 1px solid #444; padding: 4px;">Dengan Perbaikan</td>
      </tr>
      <tr style="border: 1px solid #444;">
        <td style="border: 1px solid #444; padding: 4px; text-align: center;">☐</td>
        <td style="border: 1px solid #444; padding: 4px;">Permohonan Ditolak/Dikembalikan</td>
      </tr>
    </tbody>
  </table>
</div>


    {{-- 6. Catatan --}}
    <p style="margin-top: 10px;"><strong>CATATAN:</strong></p>
    <div style="border: 1px solid #000; min-height: 80px; padding: 8px; margin-top:-10px;"></div>

    <br>
<table style="width: 100%; border-collapse: collapse; font-size: 12px; margin-top: -10px;">
    <thead>
        <tr>
            <th style="border: 1px solid #000; text-align: center; padding: 3px; width:200px;">Pemohon</th>
            <th style="border: 1px solid #000; text-align: center; padding: 3px;">Pengawas</th>
            <th style="border: 1px solid #000; text-align: center; padding: 3px;">TTD</th>
            <th style="border: 1px solid #000; text-align: center; padding: 3px;">Nama TPA/TPT</th>
            <th style="border: 1px solid #000; text-align: center; padding: 3px;">TTD</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #000; padding: 3px;" rowspan="7"></td>
            <td style="border: 1px solid #000; padding: 3px;">1. M. ARIF HIDAYAT, ST</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;">1. {{$surat->tpatpt->pengawas1->namalengkap ?? '-'}}</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 3px;">2. ANEX FACHRIAN ST. MT.</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;">2. {{$surat->tpatpt->pengawas2->namalengkap ?? '-'}}</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;">3. {{$surat->tpatpt->pengawas3->namalengkap ?? '-'}}</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;">4. {{$surat->tpatpt->pengawas4->namalengkap ?? '-'}}</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;">5. {{$surat->tpatpt->pengawas5->namalengkap ?? '-'}}</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;">6. {{$surat->tpatpt->pengawas6->namalengkap ?? '-'}}</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
            <td style="border: 1px solid #000; padding: 3px;">7. {{$surat->tpatpt->pengawas7->namalengkap ?? '-'}}</td>
            <td style="border: 1px solid #000; padding: 3px;"></td>
        </tr>
    </tbody>
</table>

</div>

</div>
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
  const { jsPDF } = window.jspdf;

  async function downloadPDF() {
    const element = document.querySelector('.halaman'); // ✅ UBAH DARI .halaman-pertama KE .halaman
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
    pdf.save("surat-undangan.pdf");
  }
</script>

                      <br><br><br>
                        </div>
                    </div>
<br><br><br>
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
