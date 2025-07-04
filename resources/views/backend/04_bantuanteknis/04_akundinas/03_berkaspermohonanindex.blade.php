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

{{-- @include('backend.00_administrator.00_baganterpisah.10_selamatdatang') --}}

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





                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">



                                                 <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                {{-- <option value="10">10</option> --}}
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
            </select>
        </div>


        <script>
                  function updateEntries() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            }
        </script>


                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Berkas Permohonan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                            <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                        </div>
                        <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/bebantekdinaspenyusutan?search=${input}`)
                                .then(response => response.text())
                                .then(html => {
                                    let parser = new DOMParser();
                                    let doc = parser.parseFromString(html, "text/html");
                                    let newTableBody = doc.querySelector("#tableBody").innerHTML;
                                    document.querySelector("#tableBody").innerHTML = newTableBody;
                                })
                                .catch(error => console.error("Error fetching search results:", error));
                        }

                                </script>



<div style="display: flex; justify-content: flex-end;">

    <a href="/datapermohonandinas" class="button-statistika" style="color: black; margin-right:5px; text-decoration: none; display: inline-flex; align-items: center;">
    <i class="bi bi-bar-chart-line" style="margin-right: 5px;"></i> Statistika
</a>

                              <button onclick="exportTableToExcel('tabelSuratbantuanteknis', 'data_permohonanbantuanteknis')"
                                    class="button-abgblora" style="color: black;">
                                    <i class="bi bi-download" style="margin-right: 5px;"></i> Download Excel
                                </button>

             {{-- @canany(['superadmin', 'admin']) --}}
    @canany(['superadmin', 'admin'])
    <a href="{{ route('bebantuanteknisindexmenu') }}">
        <button class="button-kembali button-abgblora" type="button"
            style="cursor: pointer; margin-left:5px; color:black;">
            <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
        </button>
    </a>
@endcanany

{{-- @endcanany --}}


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
                        <table id="tabelSuratbantuanteknis" class="table zebra-table">
                            <thead>
                                  <tr>
        <th style="background-color: #ADD8E6;">No</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-user"></i> Jenis Pengajuan</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-user-tie"></i> Pemohon</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-phone"></i> Telepon</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-envelope"></i> No Surat</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-calendar"></i> Tanggal Surat</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-toolbox"></i> Nama Paket</th>
        {{-- <th style="background-color: #ADD8E6;"><i class="fas fa-layer-group"></i> Kategori Bangunan</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-ruler-combined"></i> Luas Bangunan</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-landmark"></i> Luas Tanah</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-building"></i> Jumlah Lantai</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-arrows-alt-v"></i> Tinggi Bangunan</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-water"></i> Bassement</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-user-tag"></i> Kepemilikan</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-calendar-check"></i> Tahun Pembangunan</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-tools"></i> Tahun Renovasi</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-briefcase"></i> Pengelola</th>
        <th style="background-color: #ADD8E6;"><i class="fas fa-map-marked-alt"></i> Lokasi Bangunan</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-house-door"></i> RT</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-house"></i> RW</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-geo-alt"></i> Kabupaten</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-geo"></i> Kecamatan</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-pin-map"></i> Kelurahan/Desa</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-envelope-paper"></i> Surat Permohonan</th> --}}
            <th style="background-color: #ADD8E6;"><i class="bi bi-check2-circle"></i> Lihat Berkas</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-eye"></i> Dokumentasi Lapangan</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-eye"></i> Berkas Bantek</th>
            {{-- <th style="background-color: #ADD8E6;"><i class="bi bi-eye"></i> Verifikasi Lapangan</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-cpu"></i> Pengolahan Data</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-cpu"></i> Upload Berkas Bantek</th>
            <th style="background-color: #ADD8E6;"><i class="bi bi-journal-check"></i> Dokumentasi Lapangan</th> --}}
            @can('superadmin')
            <th style="background-color: #ADD8E6;"><i class="bi bi-tools"></i> Aksi</th>
            @endcan

    </tr>
                            </thead>
                              <tbody id="tableBody">

                                @forelse ($data as $item)

                                <tr class="align-middle">
                                 <td>{{ $loop->iteration }}</td>
            <td>{{ optional($item->jenispengajuanbantek)->jenispengajuan ?? '-' }}</td>
            <td>{{ $item->nama_pemohon ?? '-' }}</td>
            <td>{{ $item->no_telepon ?? '-' }}</td>
            <td>{{ $item->nosurat ?? '-' }}</td>
            <td>{{ \Carbon\Carbon::parse($item->tanggalsurat)->format('d-m-Y') }}</td>
            <td>{{ $item->namapaket ?? '-' }}</td>
            {{-- <td>{{ $item->kategoribangunan ?? '-' }}</td>
            <td>{{ $item->luasbangunan ?? '-' }} m²</td>
            <td>{{ $item->luastanahtotal ?? '-' }} m²</td>
            <td>{{ $item->jumlahlantai ?? '-' }}</td>
            <td>{{ $item->tinggibangunan ?? '-' }} m</td>
            <td>{{ $item->bassement ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $item->kepemilikan ?? '-' }}</td>
            <td>{{ $item->tahunpembangunan ?? '-' }}</td>
            <td>{{ $item->tahunrenovasi ?? '-' }}</td>
            <td>{{ $item->pengelola ?? '-' }}</td>
            <td>{{ $item->alamatlokasi ?? '-' }}</td>
            <td>{{ $item->rt ?? '-' }}</td>
            <td>{{ $item->rw ?? '-' }}</td>
            <td>{{ $item->kabupaten ?? '-' }}</td>
            <td>{{ optional($item->kecamatanblora)->kecamatanblora ?? '-' }}</td>
            <td>{{ optional($item->kelurahandesa)->desa ?? '-' }}</td> --}}


            <td style="text-align: center;">
                <a href="{{ route('beperhitunganpenyusutan.show', $item->id) }}"
                    class="button-kembali"
                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: black; border: none; transition: background-color 0.3s, color 0.3s;"
                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';">
                    <i class="fas fa-eye" style="margin-right: 5px;"></i> LIhat Permohonan
                </a>
            </td>
            <!-- Tombol KTP -->


  <td style="text-align: center;">
    <div style="display: flex; justify-content: center;">

                <a href="{{ route('bebanteklapper3.show', $item->id) }}"
                    class="button-kembali"
                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: black; border: none; transition: background-color 0.3s, color 0.3s;"
                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';">
                    <i class="fas fa-eye" style="margin-right: 5px;"></i> Lihat Dokumentasi
                </a>
                </div>
            </td>




<td style="text-align: center;">
    <div style="display: flex; justify-content: center;">
    <button type="button"
        class="button-kembali"
        data-bs-toggle="modal"
        data-bs-target="#modalLihatBerkas{{ $item->id }}"
        style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: black; border: none; transition: background-color 0.3s, color 0.3s;"
        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
        onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';">
        <i class="fas fa-eye" style="margin-right: 5px;"></i> Lihat Berkas
    </button>
    </div>
</td>

<!-- Modal -->
<div class="modal fade" id="modalLihatBerkas{{ $item->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $item->id }}" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     <img src="assets/abgblora/logo/logokabupatenblora.png" alt="" style="height: 20px; width: auto; margin-right:5px; ">
<img src="assets/abgblora/logo/pupr.png" alt="" style="height: 20px; width: auto; margin-right:5px;">
        <h5 class="modal-title" id="modalLabel{{ $item->id }}">Pemohon - ID : {{ $item->dinas->name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
   <div style="margin-top: 10px;">
    @php
        $berkasPath = public_path('storage/' . $item->uploadsuratbantek);
        $isFileExists = $item->uploadsuratbantek && file_exists($berkasPath);
    @endphp

    @if ($isFileExists)
        <!-- Menampilkan PDF dari storage -->
        <iframe
            src="{{ asset('storage/' . $item->uploadsuratbantek) }}"
            style="width: 100%; height: 80vh; border: 1px solid #ddd; border-radius: 8px;"
            loading="lazy">
        </iframe>
    @elseif ($item->uploadsuratbantek)
        <!-- Menampilkan PDF dari path luar storage -->
        <iframe
            src="{{ asset($item->uploadsuratbantek) }}"
            style="width: 100%; height: 80vh; border: 1px solid #ddd; border-radius: 8px;"
            loading="lazy">
        </iframe>
    @else
        <!-- Placeholder jika tidak ada data -->
        <p style="font-size: 20px; color: red;">Berkas Bantek Belum Diterbitkan!</p>
    @endif
</div>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


@can('superadmin')

<td style="text-align: center; vertical-align: middle;">
    {{-- <a href="/bebujkkonstruksi/show/{{$item->namalengkap}}" class="btn btn-sm btn-info me-2" title="Show">
        <i class="bi bi-eye"></i>
    </a>
                                        <a href="/bebujkkonstruksi/update/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Update">
                                            <i class="bi bi-pencil-square"></i>
                                        </a> --}}
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal"
                                        data-judul="{{ $item->id }}"
                                           onclick="setDeleteUrl(this)">
                                           <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                    @endcan

                                </tr>


                                @empty
  <tr>
    <td colspan="100" class="text-center p-0" style="border: none;">
        <div style="
            background: linear-gradient(-45deg, #ff4d4d, #ffffff, #ff4d4d);
            background-size: 400% 400%;
            animation: gradientMove 5s ease infinite;
            padding: 20px;
            border-radius: 10px;
            margin: 10px;
            color: #a80000;
            font-weight: bold;
        ">
            <div style="font-size: 1.2rem; margin-bottom: 10px;">
                Data Tidak Di Temukan!
            </div>

        </div>
    </td>
</tr>

<style>
@keyframes gradientMove {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
</style>
                                @endforelse

                            </tbody>
                        </table>

                     </div>
                 </div>

                 @include('backend.00_administrator.00_baganterpisah.07_paginations')

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
