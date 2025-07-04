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

     <div class="container-fluid" style="margin-bottom: 150px;">
         <!--begin::Row-->
         <div class="putih row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
                 {{-- <div class="card-header">
                    <div style="
                    font-weight: 900;
                    font-size: 16px;
                    text-align: center;
                    background: linear-gradient(135deg, #00378a, #00378a);
                    color: white;
                    padding: 8px 10px;
                    border-radius: 10px;
                    display: inline-block;
                    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                ">
                    ⚙️ Setting Database
                </div> --}}

                     {{-- <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                         <a href="/404">
                             <button
                             onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                             onmouseout="this.style.backgroundColor='#00378a'; this.style.color='white';"
                             style="background-color: #00378a; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-database" style="margin-right: 8px;"></i>
                             Asosiasi
                         </button>
                         </a>

                     </div> --}}
                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    <div style="
                    margin-bottom:10px;
                    font-weight: 900;
                    font-size: 16px;
                    text-align: center;
                    background: linear-gradient(135deg, #000080, #000080);
                    color: white;
                    padding: 10px 25px;
                    border-radius: 10px;
                    display: inline-block;
                    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                    width: 100%;
                ">
                <span style="font-family: 'Poppins', sans-serif;">📌 Halaman : {{$title}}</span>
                </div>





                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

{{-- <button class="button-kembali" type="button"
    onclick="window.location.href='{{ url()->previous() }}';"
    style="cursor: pointer; margin-left:10px; color:black;">
    <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
</button> --}}



                                <!-- Tombol Create -->
                                {{-- <a href="/settingssekolah/create">
                                    <button
                                        onmouseover="this.style.background='white'; this.style.color='black';"
                                        onmouseout="this.style.background='linear-gradient(to right, #228B22, #d4af37)'; this.style.color='white';"
                                        style="background: linear-gradient(to right, #228B22, #d4af37); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background 0.3s, color 0.3s; text-decoration: none;">
                                        <i class="fa fa-plus" style="margin-right: 8px;"></i> Create
                                    </button>
                                </a> --}}



                        {{-- <a href="/bekrkindex">
                             <button
                             onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                             onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                             style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-arrow-left" style="margin-right: 8px;"></i> Kembali

                         </button>
                         </a> --}}

                     </div>
                 </div>
<br>
                 <hr>
                 <!-- /.card-header -->
                 <div class="card-body p-0">

        {{-- ======================================================= --}}
                    <div class="col-md-12" style="margin-top: -20px;">
                        <!--begin::Quick Example-->
                  {{-- <form action="{{ route('dokhibahnew.create') }}" method="POST" enctype="multipart/form-data"> --}}
          @csrf
                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
           @include('backend.01_pbgslf.00_fiturtambahannav')


<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white d-flex align-items-center gap-2">
        <i class="bi bi-info-circle fs-5"></i>
        <h5 class="mb-0" style="font-size: 16px;">Informasi Permohonan SIMBG</h5>
    </div>
</div>

@include('backend.01_pbgslf.01_permohonanpbgslf.00_datainduk.00_fiturstatus')

       <!-- Left Column (6/12) -->
<div class="row g-4">

    @php
        $infoItems = [
            [
                'icon' => 'bi-file-earmark-text-fill',
                'title' => 'Nomor Registrasi SIM BG',
                'value' => $data->noregissimbg ?? '-',
            ],
            [
                'icon' => 'bi-calendar-date-fill',
                'title' => 'Tanggal Permohonan',
                'value' => \Carbon\Carbon::parse($data->tanggalpermohonan)->translatedFormat('d F Y') ?? '-',
            ],
            [
                'icon' => 'bi-ui-checks-grid',
                'title' => 'Jenis Permohonan',
                'value' => $data->jenispengajuanpbgslfper->jenispengajuan ?? '-',
            ],
            [
                'icon' => 'bi-person-fill-check',
                'title' => 'Pengisi Form',
                'value' => $user->name ?? '-',
            ],
        ];
    @endphp

    @foreach ($infoItems as $item)
        <div class="col-md-6">
            <div class="card shadow-sm border-0 animate__animated animate__fadeInUp">
                <div class="card-body bg-white rounded-3" style="background: linear-gradient(to bottom, #f8faff, #e6f0ff);">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="bi {{ $item['icon'] }} text-primary fs-3"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">{{ $item['title'] }}</h6>
                            <p class="mb-0 text-muted">{{ $item['value'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>

<div class="col-12">
    {{-- <div class="mb-3">
        <label class="form-label" for="dokumenproposal">
            <i class="bi bi-file-earmark-arrow-up" style="margin-right: 8px; color: navy;"></i> Upload Dokumen Proposal
        </label>
        <input
            type="file"
            id="dokumenproposal"
            name="dokumenproposal"
            class="form-control @error('dokumenproposal') is-invalid @enderror"
            accept=".pdf,.doc,.docx"
        />
        @error('dokumenproposal')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if (!empty($data->dokumenproposal))
            <small class="text-muted">File saat ini:
                <a href="{{ asset('storage/' . $data->dokumenproposal) }}" target="_blank">
                    Lihat dokumen
                </a>
            </small>
        @endif
    </div> --}}
</div>
<br><hr>

@include('backend.01_pbgslf.01_permohonanpbgslf.00_datainduk.00_fiturnavigas')

</div>

<div class="row g-4 mt-4">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white d-flex align-items-center">
                <i class="bi bi-folder-check me-2 fs-5"></i>
                <h5 class="mb-0" style="font-size: 16px;">Daftar Data Surat Pemberitahuan</h5>
            </div>
            <div class="card-body">
                @if ($subdatapemilik->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-light text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pemberitahuan</th>
                                    <th>Pemberitahuan Ke</th>
                                    <th>Pilihan Catatan</th>
                                    <th>Catatan</th>
                                    <th>Surat Terbit</th>
                                    <th style="width: 100px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subdatapemilik as $index => $item)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                <td style="text-align: center;">
    {{ \Carbon\Carbon::parse($item->tanggalpemberitahuan)->translatedFormat('d F Y') ?? '-' }}
</td>
        <td style="text-align: center;">{{ $item->pemberitahuanke ?? '-' }}</td>
                                        <td class="text-center">
                                            <span class="badge {{ strtolower($item->pilihancatatan) === 'lengkap' ? 'bg-success' : 'bg-danger' }}">
                                                {{ ucfirst($item->pilihancatatan ?? '-') }}
                                            </span>
                                        </td>
                                        <td style="white-space: pre-wrap; text-align: justify;">{{ $item->catatan ?? '-' }}</td>
<td style="white-space: nowrap; text-align: center;">
    <a href="{{ route('suratpemberitahuan.detail', ['id' => $item->id]) }}"
       class="text-decoration-none"
       onclick="saveScrollPosition()">
        <div style="
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 14px;
            background: linear-gradient(145deg, #e1f0ff, #d6e9ff);
            color: #003366;
            font-size: 13px;
            font-weight: 500;
            border: 1px solid #c8dfff;
            border-radius: 12px;
            transition: all 0.3s ease;
        "
        onmouseover="this.style.background='white'; this.style.color='black';"
        onmouseout="this.style.background='linear-gradient(145deg, #e1f0ff, #d6e9ff)'; this.style.color='#003366';">
            <i class="bi bi-eye me-1"></i> Lihat
        </div>
    </a>
</td>

                                        <td class="text-center">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-outline-danger"
                                               data-bs-toggle="modal"
                                               data-bs-target="#deleteModal"
                                               data-id="{{ $item->id }}"
                                               onclick="setDeleteUrl(this)"
                                               title="Hapus Data">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-warning text-center fw-semibold">
                        <i class="bi bi-folder-x me-2 text-danger"></i>
                        Surat Pemberitahuan Belum Terbit !
                    </div>
                @endif

                {{-- Tombol Tambah Data --}}
                <div class="text-center mt-4">
                    <a href="{{ route('bepbgsuratpemberitahuancreate', $data->id) }}" class="button-baru">
                        <i class="bi bi-plus-circle me-1"></i> Terbitkan Surat Pemberitahuan!
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pagination links -->
{{-- <div class="d-flex justify-content-center mt-4">
    {{ $subdatapemilik->links() }}
</div> --}}


</div>
    <script>
function previewPDF(event, containerId, iframeId, messageId) {
    const file = event.target.files[0];
    const container = document.getElementById(containerId);
    const iframe = document.getElementById(iframeId);
    const message = document.getElementById(messageId);

    if (file && file.type === "application/pdf") {
        const fileURL = URL.createObjectURL(file);
        iframe.src = fileURL;
        container.style.display = 'block';
        message.style.display = 'none';
    } else {
        iframe.src = '';
        container.style.display = 'none';
        message.style.display = 'block';
        message.textContent = 'File harus berupa format PDF.';
    }
}
</script>

{{-- <div class="card shadow-sm border-0 mt-5">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Informasi Permohonan Pengajuan</h5>
    </div>
</div> --}}

                                    </div>
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->


                        </form>

                    </div>
                 </div>

                 {{-- @include('backend.00_administrator.00_baganterpisah.07_paginations') --}}

                 <br><br>

                 <!-- Modal Konfirmasi Hapus -->
                <!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data dengan ID: <strong><span id="itemId"></span></strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form id="deleteForm" method="POST" action="">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
function setDeleteUrl(button) {
    const id = button.getAttribute('data-id');
    document.getElementById('itemId').innerText = id;
    // Ganti URL ini sesuai route delete kamu
    document.getElementById('deleteForm').action = `/bepbgsuratpemberitahuandel/${id}`;
}
</script>
                 <style>
                     .table-responsive {
                         max-width: 100%;
                         overflow-x: auto;
                     }
                 </style>

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
