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


    <br>

<h5 style="color: navy; font-weight:800; font-size:16px;">I. INFORMASI DOKUMEN PERMOHONAN KRK FUNGSI HUNIAN</h5>

<div class="table-responsive">
    <table id="dataTable" class="zebra-table table-striped" style="font-size:16px; width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <td style="text-align: center;"><i class="bi bi-hash" style="margin-right:6px;"></i> No</td>
                <td><i class="bi bi-card-text" style="margin-right:6px;"></i> Item</td>
                <td style="text-align: center;"><i class="bi bi-three-dots" style="margin-right:6px;"></i> :</td>
                <td><i class="bi bi-info-circle" style="margin-right:6px;"></i> Keterangan</td>
            </tr>
        </thead>
        <tbody>
            @if($subdata->count())
                @foreach($subdata as $i => $item)
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>Nomor Registrasi KRK</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->nomorregistrasi ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">2</td>
                        <td>Tanggal Permohonan</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->tanggalpermohonan ? \Carbon\Carbon::parse($item->tanggalpermohonan)->format('d-m-Y') : '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">3</td>
                        <td>Kepadatan</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->kepadatan ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">4</td>
                        <td>Jumlah Lantai Maksimal</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->luaslantaimaksimal ?? '-' }}</td>
                    </tr>
                    <tr>
    <td style="text-align: center;">5</td>
    <td>Luas Bangunan Maksimal (m²)</td>
    <td style="text-align: center;">:</td>
    <td>
        @if($item->luasbangunan)
            {{ $item->luasbangunan }} M<sup>2</sup>
        @else
            -
        @endif
    </td>
</tr>

                    <tr>
                        <td style="text-align: center;">6</td>
                        <td>Fungsi Utama Bangunan</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->fungsibangunan ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">7</td>
                        <td>Lokasi Bangunan</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->lokasibangunan ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">8</td>
                        <td>Jenis Jalan</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->jenisjalan ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">9</td>
                        <td>(GSB) Garis Sempadan Bangunan</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->gsb ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">10</td>
                        <td>(KLB) Koefisien Luas Bangunan </td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->klb ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">11</td>
                        <td>(KDH) Koefisien Dasar Hijau (%)</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->kdh ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">12</td>
                        <td>Jaringan Utilitas Kota</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $item->jaringanutilitas ?? '-' }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    {{-- Tombol hapus tidak ikut di dalam table --}}
    <!-- Form dan tombol trigger modal -->
<form id="deleteForm{{ $item->id }}" action="{{ route('krkusahasuratsurat.destroy', $item->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
        <button type="button" class="button-dikembalikan" style="cursor: pointer; color:black;"
            data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $item->id }}">
            <i class="bi bi-trash" style="margin-right: 5px;"></i> Hapus Permohonan
        </button>
    </div>
</form>

<!-- Modal Konfirmasi -->
<div class="modal fade" id="confirmDeleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $item->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #dc3545; color: white;">
        <h5 class="modal-title" id="confirmDeleteLabel{{ $item->id }}">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus permohonan ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-success" id="confirmDeleteBtn{{ $item->id }}">Ya, Hapus</button>
      </div>
    </div>
  </div>
</div>

<script>
    document.getElementById('confirmDeleteBtn{{ $item->id }}').addEventListener('click', function () {
        document.getElementById('deleteForm{{ $item->id }}').submit();
    });
</script>

</div>

{{-- Tombol download PDF di kanan atas bawah --}}
<div style="display: flex; justify-content: flex-end; padding: 10px;">
    <button id="downloadPdfBtn" class="button-download"
        style="padding: 8px 16px; border-radius: 15px; border: none; cursor: pointer; ">
        <i class="bi bi-download" style="margin-right:6px;"></i> Download PDF
    </button>
</div>

{{-- Load jsPDF dan AutoTable dari CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>
<script>
    document.getElementById('downloadPdfBtn').addEventListener('click', function () {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF({
            unit: 'pt',
            format: 'a4',
            orientation: 'portrait'
        });

        // Set font Times New Roman dan ukuran 12 untuk keseluruhan
        doc.setFont('times', 'normal');
        doc.setFontSize(12);
        doc.setTextColor('#001f4d');

        // Tulis judul
        doc.setFontSize(16);
        doc.text('I. INFORMASI DOKUMEN PERMOHONAN KRK FUNGSI USAHA', 40, 40);

        // Ambil data tabel
        const res = doc.autoTableHtmlToJson(document.getElementById('dataTable'));

        // Buat tabel mulai di bawah judul (startY)
        doc.setFontSize(12); // reset ukuran font ke 12 untuk isi tabel
        doc.autoTable({
            startY: 70,
            head: [res.columns],
            body: res.data,
            styles: { font: 'times', fontStyle: 'normal', fontSize: 12, textColor: 20 },
            headStyles: { fillColor: [0, 31, 77], textColor: 255 },
            theme: 'grid',
            margin: { left: 40, right: 40 },

            didDrawPage: function (data) {
                // Footer teks di bawah halaman
                const pageHeight = doc.internal.pageSize.height || doc.internal.pageSize.getHeight();
                doc.setFontSize(10);
                doc.setTextColor(100);
                doc.setFont('times', 'normal');
                const footerText1 = 'Dinas Pekerjaan Umum dan Penataan Ruang';
                const footerText2 = 'Kabupaten Blora Provinsi Jawa Tengah';

                doc.text(footerText1, data.settings.margin.left, pageHeight - 40);
                doc.text(footerText2, data.settings.margin.left, pageHeight - 25);
            }
        });

        // Simpan file
        doc.save('permohonan_krkusaha.pdf');
    });
</script>



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
