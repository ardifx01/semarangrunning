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
  "
>
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





                <div style="display: flex; justify-content: flex-end; margin-bottom:5px;">
                    @can('konsultanbantek')
   <button class="button-kembali"
        type="button"
        onclick="location.href='{{ route('bebantekdaftarkonsultanproses') }}';"
        style="cursor: pointer; color:black; margin-left:5px;">
    <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
</button>

@endcan

                        @can('dinas')
                        <button class="button-kembali"
                        type="button"

                        onclick="location.href='{{ url('/bebantekdinaspenyusutan') }}';"
                        style="cursor: pointer; color:black; margin-left:5px;">
                        <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
                        </button>
                    @endcan
                        @can('pemohonbantek')
                        <button class="button-kembali"
                        type="button"

                        onclick="location.href='{{ url('/bebantekpemohondinas') }}';"
                        style="cursor: pointer; color:black; margin-left:5px;">
                        <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
                        </button>
                    @endcan

                    @canany(['superadmin', 'admin'])
<button class="button-create" type="button"
    onclick="location.href='/bebanteklapper3create/{{ $data->id }}';"
    style="cursor: pointer; margin-left:10px; color:black;">
    <i class="bi bi-file-earmark-plus" style="margin-right: 5px;"></i> Buat Dokumentasi
</button>

<a href="{{ url('/beperhitunganpenyusutan') }}" class="button-kembali" style="cursor: pointer; color:black; margin-left:5px; display: inline-flex; align-items: center; text-decoration: none;">
    <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
</a>

    @endcanany

    </div>
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

                 <hr>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                    <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
    <table id="tabelSuratbantuanteknis" class="table zebra-table" style="min-width: 900px;">
                <thead>
                                  <tr>
   <th style="background-color: #ADD8E6;">No</th>
<th style="background-color: #ADD8E6; width:75px;"><i class="bi bi-journal-text"></i> Kegiatan</th>
<th style="background-color: #ADD8E6; width:75px;"><i class="bi bi-journal-text"></i> Tanggal Kegiatan</th>
<th style="background-color: #ADD8E6; width:400px;"><i class="bi bi-image"></i> Foto 1</th>
<th style="background-color: #ADD8E6; width:400px;"><i class="bi bi-image"></i> Foto 2</th>
<th style="background-color: #ADD8E6; width:400px;"><i class="bi bi-image"></i> Foto 3</th>
<th style="background-color: #ADD8E6; width:400px;"><i class="bi bi-image"></i> Foto 4</th>
<th style="background-color: #ADD8E6; width:400px;"><i class="bi bi-image"></i> Foto 5</th>
<th style="background-color: #ADD8E6; width:400px;"><i class="bi bi-image"></i> Foto 6</th>
<th style="background-color: #ADD8E6; width:150px;"><i class="bi bi-tools"></i> Aksi</th>

    </tr>
                            </thead>
                              <tbody id="tableBody">

                                @if($subdata->isEmpty())
<p style="
  width: 100%;
  overflow: hidden;
  white-space: nowrap;
  box-sizing: border-box;
  background-color: #f9fafb;
  color: #dc2626;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 18px;
  padding: 10px 0;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  position: relative;
">
  <span style="
    display: inline-block;
    padding-left: 100%;
    animation: marquee 10s linear infinite;
  ">
    Dokumentasi Cek Lapangan Belum di Agendakan !!
  </span>

  <style>
    @keyframes marquee {
      0%   { transform: translateX(0); }
      100% { transform: translateX(-100%); }
    }
  </style>
</p>

@else
      @foreach($subdata as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->kegiatan }}</td>
<td>{{ \Carbon\Carbon::parse($item->tanggalkegiatan)->translatedFormat('d F Y') }}</td>
        <td>
    <div style="margin-top: 10px;">
        @if($item->foto1 && file_exists(public_path('storage/' . $item->foto1)))
            <img src="{{ asset('storage/' . $item->foto1) }}" alt="Foto Dokumentasi 1" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @elseif($item->foto1)
            <img src="{{ asset($item->foto1) }}" alt="Foto Dokumentasi 1" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @else
            <p style="font-size: 11px;">Tidak Ada Foto 1!</p>
        @endif
    </div>
</td>

<td>
    <div style="margin-top: 10px;">
        @if($item->foto2 && file_exists(public_path('storage/' . $item->foto2)))
            <img src="{{ asset('storage/' . $item->foto2) }}" alt="Foto Dokumentasi 2" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @elseif($item->foto2)
            <img src="{{ asset($item->foto2) }}" alt="Foto Dokumentasi 2" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @else
            <p style="font-size: 11px;">Tidak Ada Foto 2!</p>
        @endif
    </div>
</td>

<td>
    <div style="margin-top: 10px;">
        @if($item->foto3 && file_exists(public_path('storage/' . $item->foto3)))
            <img src="{{ asset('storage/' . $item->foto3) }}" alt="Foto Dokumentasi 3" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @elseif($item->foto3)
            <img src="{{ asset($item->foto3) }}" alt="Foto Dokumentasi 3" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @else
            <p style="font-size: 11px;">Tidak Ada Foto 3!</p>
        @endif
    </div>
</td>

<td>
    <div style="margin-top: 10px;">
        @if($item->foto4 && file_exists(public_path('storage/' . $item->foto4)))
            <img src="{{ asset('storage/' . $item->foto4) }}" alt="Foto Dokumentasi 4" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @elseif($item->foto4)
            <img src="{{ asset($item->foto4) }}" alt="Foto Dokumentasi 4" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @else
            <p style="font-size: 11px;">Tidak Ada Foto 4!</p>
        @endif
    </div>
</td>

<td>
    <div style="margin-top: 10px;">
        @if($item->foto5 && file_exists(public_path('storage/' . $item->foto5)))
            <img src="{{ asset('storage/' . $item->foto5) }}" alt="Foto Dokumentasi 5" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @elseif($item->foto5)
            <img src="{{ asset($item->foto5) }}" alt="Foto Dokumentasi 5" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @else
            <p style="font-size: 11px;">Tidak Ada Foto 5!</p>
        @endif
    </div>
</td>

<td>
    <div style="margin-top: 10px;">
        @if($item->foto6 && file_exists(public_path('storage/' . $item->foto6)))
            <img src="{{ asset('storage/' . $item->foto6) }}" alt="Foto Dokumentasi 6" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @elseif($item->foto6)
            <img src="{{ asset($item->foto6) }}" alt="Foto Dokumentasi 6" style="width: 100%; max-height: 200px; object-fit: contain;" loading="lazy">
        @else
            <p style="font-size: 11px;">Tidak Ada Foto 6!</p>
        @endif
    </div>
</td>

        <td class="text-center align-middle">
            {{-- <a href="/bebujkkonstruksi/show/{{ $item->id }}" class="btn btn-sm btn-info me-2" title="Lihat Detail">
                <i class="bi bi-eye"></i>
            </a>
            <a href="/bebujkkonstruksi/update/{{ $item->id }}" class="btn btn-sm btn-warning me-2" title="Ubah Data">
                <i class="bi bi-pencil-square"></i>
            </a> --}}
            <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Hapus Data"
   data-bs-toggle="modal" data-bs-target="#deleteModal"
   data-id="{{ $item->id }}"
   onclick="setDeleteUrl(this)">
    <i class="bi bi-trash"></i>
</a>

            {{-- <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Hapus Data"
               data-bs-toggle="modal" data-bs-target="#deleteModal"
               data-id="{{ $item->id }}"
               onclick="setDeleteUrl(this)">
                <i class="bi bi-trash"></i>
            </a> --}}
        </td>
    </tr>
@endforeach
@endif

</tbody>
                        </table>

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
    var id = button.getAttribute('data-id'); // ✅ fix
    document.getElementById('itemName').innerText = id;
    var deleteUrl = "/bebanteklapper3delete/" + encodeURIComponent(id);
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
