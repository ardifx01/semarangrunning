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

                        <button class="button-validasinew" type="button"
    onclick="window.location.href='{{ url('dataallhibahbangunan') }}';"
    style="cursor: pointer; margin-left:10px; color:black;">
    <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
</button>




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
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                  <form action="{{ route('create.doklapbanhibahcreatenew') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="bantuanhibahbg_id" value="{{ $data->id }}">

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->

                                    <div class="col-md-6">
    <div class="mb-3">
        <label class="form-label" for="kegiatan">
            <i class="bi bi-clipboard-check" style="margin-right: 8px; color: navy;"></i> Nama Kegiatan
        </label>
        <input
            type="text"
            id="kegiatan"
            name="kegiatan"
            value="{{ old('kegiatan') }}"
            class="form-control @error('kegiatan') is-invalid @enderror"
            placeholder="Masukkan nama kegiatan"
        />
        @error('kegiatan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label" for="tanggalkegiatan">
            <i class="bi bi-calendar-event" style="margin-right: 8px; color: navy;"></i> Tanggal Kegiatan
        </label>
        <input
            type="date"
            id="tanggalkegiatan"
            name="tanggalkegiatan"
            value="{{ old('tanggalkegiatan') }}"
            class="form-control @error('tanggalkegiatan') is-invalid @enderror"
        />
        @error('tanggalkegiatan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
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

<div class="text-center">
    <hr class="my-4" style="border-top: 2px dashed #0d6efd; width: 60%; margin: auto;">
    <h5 style="color: #0d6efd; font-weight: bold; margin-top: 5px; font-size:16px;">
        <i class="bi bi-upload" style="margin-right: 6px;"></i>
        Upload Foto Dokumentasi Lapangan Hibah Bangunan
    </h5>
    <hr class="my-4" style="border-top: 2px dashed #0d6efd; width: 60%; margin: auto;">
</div>

<div class="row">
    {{-- Foto 1 --}}
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="foto1">
                <i class="bi bi-image" style="color: darkgreen; margin-right: 8px;"></i> Upload Foto Dokumentasi 1
            </label>
            <input type="file" id="foto1" name="foto1" accept="image/*"
                class="form-control @error('foto1') is-invalid @enderror"
                onchange="previewImage(event, 'previewFoto1', 'msgFoto1')" />
            @error('foto1')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <div class="mt-3" id="previewFoto1" style="{{ isset($data->foto1) ? '' : 'display: none;' }}">
                <label class="fw-bold">Preview Foto 1</label><br>
                <img src="{{ isset($data->foto1) ? asset($data->foto1) : '' }}" class="img-fluid rounded border" style="max-height: 300px;">
            </div>
            <div id="msgFoto1" class="mt-2" style="color: grey; font-style: italic; {{ isset($data->foto1) ? 'display:none;' : '' }}">
                Belum Upload Foto. Silakan upload file gambar dokumentasi.
            </div>
        </div>
    </div>

    {{-- Foto 2 --}}
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="foto2">
                <i class="bi bi-image" style="color: darkgreen; margin-right: 8px;"></i> Upload Foto Dokumentasi 2
            </label>
            <input type="file" id="foto2" name="foto2" accept="image/*"
                class="form-control @error('foto2') is-invalid @enderror"
                onchange="previewImage(event, 'previewFoto2', 'msgFoto2')" />
            @error('foto2')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <div class="mt-3" id="previewFoto2" style="{{ isset($data->foto2) ? '' : 'display: none;' }}">
                <label class="fw-bold">Preview Foto 2</label><br>
                <img src="{{ isset($data->foto2) ? asset($data->foto2) : '' }}" class="img-fluid rounded border" style="max-height: 300px;">
            </div>
            <div id="msgFoto2" class="mt-2" style="color: grey; font-style: italic; {{ isset($data->foto2) ? 'display:none;' : '' }}">
                Belum Upload Foto. Silakan upload file gambar dokumentasi.
            </div>
        </div>
    </div>

    {{-- Foto 3 --}}
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="foto3">
                <i class="bi bi-image" style="color: darkgreen; margin-right: 8px;"></i> Upload Foto Dokumentasi 3
            </label>
            <input type="file" id="foto3" name="foto3" accept="image/*"
                class="form-control @error('foto3') is-invalid @enderror"
                onchange="previewImage(event, 'previewFoto3', 'msgFoto3')" />
            @error('foto3')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <div class="mt-3" id="previewFoto3" style="{{ isset($data->foto3) ? '' : 'display: none;' }}">
                <label class="fw-bold">Preview Foto 3</label><br>
                <img src="{{ isset($data->foto3) ? asset($data->foto3) : '' }}" class="img-fluid rounded border" style="max-height: 300px;">
            </div>
            <div id="msgFoto3" class="mt-2" style="color: grey; font-style: italic; {{ isset($data->foto3) ? 'display:none;' : '' }}">
                Belum Upload Foto. Silakan upload file gambar dokumentasi.
            </div>
        </div>
    </div>

    {{-- Foto 4 --}}
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="foto4">
                <i class="bi bi-image" style="color: darkgreen; margin-right: 8px;"></i> Upload Foto Dokumentasi 4
            </label>
            <input type="file" id="foto4" name="foto4" accept="image/*"
                class="form-control @error('foto4') is-invalid @enderror"
                onchange="previewImage(event, 'previewFoto4', 'msgFoto4')" />
            @error('foto4')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <div class="mt-3" id="previewFoto4" style="{{ isset($data->foto4) ? '' : 'display: none;' }}">
                <label class="fw-bold">Preview Foto 4</label><br>
                <img src="{{ isset($data->foto4) ? asset($data->foto4) : '' }}" class="img-fluid rounded border" style="max-height: 300px;">
            </div>
            <div id="msgFoto4" class="mt-2" style="color: grey; font-style: italic; {{ isset($data->foto4) ? 'display:none;' : '' }}">
                Belum Upload Foto. Silakan upload file gambar dokumentasi.
            </div>
        </div>
    </div>

    {{-- Foto 5 --}}
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="foto5">
                <i class="bi bi-image" style="color: darkgreen; margin-right: 8px;"></i> Upload Foto Dokumentasi 5
            </label>
            <input type="file" id="foto5" name="foto5" accept="image/*"
                class="form-control @error('foto5') is-invalid @enderror"
                onchange="previewImage(event, 'previewFoto5', 'msgFoto5')" />
            @error('foto5')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <div class="mt-3" id="previewFoto5" style="{{ isset($data->foto5) ? '' : 'display: none;' }}">
                <label class="fw-bold">Preview Foto 5</label><br>
                <img src="{{ isset($data->foto5) ? asset($data->foto5) : '' }}" class="img-fluid rounded border" style="max-height: 300px;">
            </div>
            <div id="msgFoto5" class="mt-2" style="color: grey; font-style: italic; {{ isset($data->foto5) ? 'display:none;' : '' }}">
                Belum Upload Foto. Silakan upload file gambar dokumentasi.
            </div>
        </div>
    </div>

    {{-- Foto 6 --}}
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label" for="foto6">
                <i class="bi bi-image" style="color: darkgreen; margin-right: 8px;"></i> Upload Foto Dokumentasi 6
            </label>
            <input type="file" id="foto6" name="foto6" accept="image/*"
                class="form-control @error('foto6') is-invalid @enderror"
                onchange="previewImage(event, 'previewFoto6', 'msgFoto6')" />
            @error('foto6')<div class="invalid-feedback">{{ $message }}</div>@enderror

            <div class="mt-3" id="previewFoto6" style="{{ isset($data->foto6) ? '' : 'display: none;' }}">
                <label class="fw-bold">Preview Foto 6</label><br>
                <img src="{{ isset($data->foto6) ? asset($data->foto6) : '' }}" class="img-fluid rounded border" style="max-height: 300px;">
            </div>
            <div id="msgFoto6" class="mt-2" style="color: grey; font-style: italic; {{ isset($data->foto6) ? 'display:none;' : '' }}">
                Belum Upload Foto. Silakan upload file gambar dokumentasi.
            </div>
        </div>
    </div>
</div>


</div>
<script>
    function previewImage(event, previewId, msgId) {
        const input = event.target;
        const file = input.files[0];
        const previewContainer = document.getElementById(previewId);
        const message = document.getElementById(msgId);

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const imgTag = previewContainer.querySelector('img');
                imgTag.src = e.target.result;
                previewContainer.style.display = 'block';
                message.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    }
</script>


                                    </div>
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                               <button class="button-baru" type="button" onclick="openModal()">
                                    <i class="bi bi-save" style="margin-right: 5px;"></i>
                                    <span style="font-family: 'Poppins', sans-serif;">Simpan</span>
                                    </button>

                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda ingin menambahkan dokumentasi lapangan ?
                                    </p>

                                      <!-- Tombol -->
                                      <div style="display: flex; justify-content: center; gap: 12px;">
                                        <button id="confirmSubmitBtn"
                                        onclick="submitForm()"
                                        style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                        onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                    <!-- Telegram SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 448 512" fill="white">
                                        <path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>
                                    </svg>
                                    Ya
                                </button>

                                <!-- Tombol Batal dengan ikon X (SVG) -->
                                <button type="button"
                                        onclick="closeModal()"
                                        style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                        onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                                        <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
                                    </svg>
                                    Batal
                                </button>

                                      </div>
                                    </div>
                                </div>

                                <!-- Script -->
                                <script>
                                function openModal() {
                                    const modal = document.getElementById("confirmModal");
                                    if (modal) modal.style.display = "flex";
                                }

                                function closeModal() {
                                    const modal = document.getElementById("confirmModal");
                                    if (modal) modal.style.display = "none";
                                }

                                </script>

                            </div>


                        </form>

                    </div>
                 </div>

                 {{-- @include('backend.00_administrator.00_baganterpisah.07_paginations') --}}

                 <br><br>


                 <!-- Modal Konfirmasi Hapus -->
                 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                 <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <p>Apakah Anda Ingin Menghapus Data : <span id="itemName"></span>?</p>
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
                     var id = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = id;
                     var deleteUrl = "/bebantuanteknisdelete/" + encodeURIComponent(id);
                     document.getElementById('deleteForm').action = deleteUrl;
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
