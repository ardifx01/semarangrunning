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
   {{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')
      @include('frontend.android.00_fiturmenu.06_alert')


      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

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

        @include('backend.00_administrator.00_baganterpisah.06_alert')

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
                           <div style="position: relative; display: inline-block; margin-right:10px;">
                               <input type="search" id="searchInput" placeholder="Cari Pemohon ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
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

                               fetch(`/bebujkkonstruksi?search=${input}`)
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


                           <a href="/bekrkindex">
                                <button
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                <!-- Ikon Kembali -->
                                <i class="fa fa-arrow-left" style="margin-right: 8px;"></i> Kembali

                            </button>
                            </a>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                       <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                           <table class="table zebra-table">
                               <thead>
                                   <tr>
                                       <th style="background-color: #ADD8E6;">No</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-user"></i> Pemohon</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-building"></i> Perusahaan</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-map-marker-alt"></i> Koordinat</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-id-card"></i> NIK</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-calendar-alt"></i> Tanggal Permohonan</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-phone-alt"></i> Whatsapp</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-landmark"></i> Luas Tanah</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-layer-group"></i> Jumlah Lantai</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-home"></i> RT</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-home"></i> RW</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-city"></i> Kabupaten</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-map-marker-alt"></i> Kecamatan</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-map-pin"></i> Kelurahan/Desa</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-building"></i> Lokasi Bangunan</th>

                                       <th style="background-color: #ADD8E6;"><i class="fas fa-id-card"></i> KTP</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-address-card"></i> NPWP</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-file-alt"></i> Sertifikat Tanah</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-paperclip"></i> Lampiran OSS</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-file-invoice-dollar"></i> Bukti PBB</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-check-circle"></i> Dok Validasi DPUPR</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-drafting-compass"></i> Site Plan</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-pen-fancy"></i> Tanda Tangan</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-tasks"></i> Status</th>
                                       <th style="background-color: #ADD8E6;"><i class="fas fa-stamp"></i> Pengesahan DPUPR</th>
                                       <th style="background-color: #ADD8E6;">Aksi</th>
                                   </tr>
                               </thead>
                                 <tbody id="tableBody">
                                   @foreach ($data as $item )
                                   <tr class="align-middle">
                                       <td style="text-align: center;">{{ $loop->iteration }}</td>
                                       <td style="text-align: left;">{{$item->perorangan}}</td>
                                       <td style="text-align: left;">{{$item->perusahaan}}</td>
                                       <td style="text-align: center;">{{$item->koordinatlokasi}}</td>
                                       <td style="text-align: center;">{{$item->nik}}</td>
                                       <td style="text-align: center;">
                                           {{ \Carbon\Carbon::parse($item->tanggalpermohonan)->translatedFormat('d F Y') }}
                                       </td>
                                       <td style="text-align: left;">{{$item->notelepon}}</td>
                                       <td style="text-align: center;">
                                           {{ number_format($item->luastanah, 0, ',', '.') }} M²
                                       </td>
                                       <td style="text-align: center;">{{$item->jumlahlantai}} Lantai</td>
                                       <td style="text-align: center;">{{$item->rt}}</td>
                                       <td style="text-align: center;">{{$item->rw}}</td>
                                       <td style="text-align: left;">
                                           {{ strtoupper($item->kabupaten) }}
                                       </td>
                                       <td style="text-align: left;">{{$item->kecamatanblora->kecamatanblora}}</td>
                                       <td style="text-align: left;">
                                           {{ strtoupper($item->kelurahandesa->desa) }}
                                       </td>
                                       <td style="text-align: left;">{{$item->lokasibangunan}}</td>

                                       <style>
                                           .btn-secondary {
                                               background-color: #6c757d;
                                               color: white;
                                               border-radius: 15px;
                                               padding: 8px 16px;
                                               border: none;
                                           }

                                           .btn-secondary:hover {
                                               background-color: white;
                                               color: black;
                                               border: 1px solid #6c757d; /* Optional: border on hover */
                                           }

                                           .btn-secondary i {
                                               margin-right: 5px; /* Adjust the spacing between the icon and text */
                                           }
                                       </style>

   <!-- Tombol KTP -->
   <td style="text-align: center;">
       <button class="btn btn-secondary btn-sm"
           style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
           onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
           onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
           data-bs-toggle="modal" data-bs-target="#modalKtp{{$item->id}}">
           <i class="fas fa-eye"></i> Lihat
       </button>

       <!-- Modal KTP -->
       <div class="modal fade" id="modalKtp{{$item->id}}" tabindex="-1" aria-labelledby="modalKtpLabel{{$item->id}}" aria-hidden="true">
           <div class="modal-dialog modal-xl modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <a href="#"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <a href="#"><img src="/assets/abgblora/logo/logopupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <span>:</span>
                       <h5 class="modal-title" id="modalKtpLabel{{$item->id}}">Berkas KTP</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body text-center">
                       @if (Str::endsWith($item->ktp, '.pdf'))
                           <embed src="{{ asset($item->ktp) }}" type="application/pdf" width="100%" height="600px"/>
                       @else
                           <img src="{{ asset($item->ktp) }}" alt="KTP" class="img-fluid">
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </td>

   <!-- Tombol NPWP -->
   <td style="text-align: center;">
       <button class="btn btn-secondary btn-sm"
           style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
           onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
           onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
           data-bs-toggle="modal" data-bs-target="#modalNpwp{{$item->id}}">
           <i class="fas fa-eye"></i> Lihat
       </button>

       <!-- Modal NPWP -->
       <div class="modal fade" id="modalNpwp{{$item->id}}" tabindex="-1" aria-labelledby="modalNpwpLabel{{$item->id}}" aria-hidden="true">
           <div class="modal-dialog modal-xl modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <a href="#"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <a href="#"><img src="/assets/abgblora/logo/logopupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <span>:</span>
                       <h5 class="modal-title" id="modalNpwpLabel{{$item->id}}">Berkas NPWP</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body text-center">
                       @if (Str::endsWith($item->npwp, '.pdf'))
                           <embed src="{{ asset($item->npwp) }}" type="application/pdf" width="100%" height="600px"/>
                       @else
                           <img src="{{ asset($item->npwp) }}" alt="NPWP" class="img-fluid">
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </td>

   <!-- Tombol Sertifikat Tanah -->
   <td style="text-align: center;">
       <button class="btn btn-secondary btn-sm"
           style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
           onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
           onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
           data-bs-toggle="modal" data-bs-target="#modalSertifikat{{$item->id}}">
           <i class="fas fa-eye"></i> Lihat
       </button>

       <!-- Modal Sertifikat Tanah -->
       <div class="modal fade" id="modalSertifikat{{$item->id}}" tabindex="-1" aria-labelledby="modalSertifikatLabel{{$item->id}}" aria-hidden="true">
           <div class="modal-dialog modal-xl modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <a href="#"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <a href="#"><img src="/assets/abgblora/logo/logopupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <span>:</span>
                       <h5 class="modal-title" id="modalSertifikatLabel{{$item->id}}">Berkas Sertifikat Tanah</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body text-center">
                       @if (Str::endsWith($item->sertifikattanah, '.pdf'))
                           <embed src="{{ asset($item->sertifikattanah) }}" type="application/pdf" width="100%" height="600px"/>
                       @else
                           <img src="{{ asset($item->sertifikattanah) }}" alt="Sertifikat Tanah" class="img-fluid">
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </td>



                                                                           <!-- Tombol Lampiran OSS -->
   <td style="text-align: center;">
       <button class="btn btn-secondary btn-sm"
           style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
           onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
           onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
           data-bs-toggle="modal" data-bs-target="#modalLampiranOSS{{ $item->id }}">
           <i class="fas fa-eye"></i> Lihat
       </button>

       <!-- Modal Lampiran OSS -->
       <div class="modal fade" id="modalLampiranOSS{{ $item->id }}" tabindex="-1" aria-labelledby="modalLampiranOSSLabel{{ $item->id }}" aria-hidden="true">
           <div class="modal-dialog modal-xl modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <a href="#"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <a href="#"><img src="/assets/abgblora/logo/logopupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <span>:</span>
                       <h5 class="modal-title" id="modalLampiranOSSLabel{{ $item->id }}">Berkas Lampiran OSS</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body text-center">
                       @if (Str::endsWith($item->lampiranoss, '.pdf'))
                           <embed src="{{ asset($item->lampiranoss) }}" type="application/pdf" width="100%" height="600px" />
                       @else
                           <img src="{{ asset($item->lampiranoss) }}" alt="Lampiran OSS" class="img-fluid">
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </td>

   <!-- Tombol Bukti PBB -->
   <td style="text-align: center;">
       <button class="btn btn-secondary btn-sm"
           style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
           onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
           onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
           data-bs-toggle="modal" data-bs-target="#modalBuktiPBB{{ $item->id }}">
           <i class="fas fa-eye"></i> Lihat
       </button>

       <!-- Modal Bukti PBB -->
       <div class="modal fade" id="modalBuktiPBB{{ $item->id }}" tabindex="-1" aria-labelledby="modalBuktiPBBLabel{{ $item->id }}" aria-hidden="true">
           <div class="modal-dialog modal-xl modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <a href="#"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <a href="#"><img src="/assets/abgblora/logo/logopupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <span>:</span>
                       <h5 class="modal-title" id="modalBuktiPBBLabel{{ $item->id }}">Berkas Bukti PBB</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body text-center">
                       @if (Str::endsWith($item->buktipbb, '.pdf'))
                           <embed src="{{ asset($item->buktipbb) }}" type="application/pdf" width="100%" height="600px" />
                       @else
                           <img src="{{ asset($item->buktipbb) }}" alt="Bukti PBB" class="img-fluid">
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </td>



                               <!-- Tombol Dokumen Validasi -->
   <td style="text-align: center;">
       <button class="btn btn-secondary btn-sm"
           style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
           onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
           onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
           data-bs-toggle="modal" data-bs-target="#modalDokValidasi{{ $item->id }}">
           <i class="fas fa-eye"></i> Lihat
       </button>

       <!-- Modal Dokumen Validasi -->
       <div class="modal fade" id="modalDokValidasi{{ $item->id }}" tabindex="-1" aria-labelledby="modalDokValidasiLabel{{ $item->id }}" aria-hidden="true">
           <div class="modal-dialog modal-xl modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <a href="#"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <a href="#"><img src="/assets/abgblora/logo/logopupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <span>:</span>
                       <h5 class="modal-title" id="modalDokValidasiLabel{{ $item->id }}">Berkas Dokumen Validasi</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body text-center">
                       @if (Str::endsWith($item->dokvalidasi, '.pdf'))
                           <embed src="{{ asset($item->dokvalidasi) }}" type="application/pdf" width="100%" height="600px" />
                       @else
                           <img src="{{ asset($item->dokvalidasi) }}" alt="Dokumen Validasi" class="img-fluid">
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </td>

   <!-- Tombol Siteplan -->
   <td style="text-align: center;">
       <button class="btn btn-secondary btn-sm"
           style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
           onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
           onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
           data-bs-toggle="modal" data-bs-target="#modalSiteplan{{ $item->id }}">
           <i class="fas fa-eye"></i> Lihat
       </button>

       <!-- Modal Siteplan -->
       <div class="modal fade" id="modalSiteplan{{ $item->id }}" tabindex="-1" aria-labelledby="modalSiteplanLabel{{ $item->id }}" aria-hidden="true">
           <div class="modal-dialog modal-xl modal-dialog-centered">
               <div class="modal-content">
                   <div class="modal-header">
                       <a href="#"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <a href="#"><img src="/assets/abgblora/logo/logopupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                       <span>:</span>
                       <h5 class="modal-title" id="modalSiteplanLabel{{ $item->id }}">Berkas Siteplan</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body text-center">
                       @if (Str::endsWith($item->siteplan, '.pdf'))
                           <embed src="{{ asset($item->siteplan) }}" type="application/pdf" width="100%" height="600px" />
                       @else
                           <img src="{{ asset($item->siteplan) }}" alt="Siteplan" class="img-fluid">
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </td>

                               <td style="text-align: center;">
                                   <button class="btn btn-secondary btn-sm"
                                       style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                       onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                       onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                       data-bs-toggle="modal" data-bs-target="#modalTandatangan{{ $item->id }}">
                                       <i class="fas fa-signature"></i> Lihat
                                   </button>

                                   <!-- Modal Tanda Tangan -->
                                   <div class="modal fade" id="modalTandatangan{{ $item->id }}" tabindex="-1" aria-labelledby="modalTandatanganLabel{{ $item->id }}" aria-hidden="true">
                                       <div class="modal-dialog modal-xl modal-dialog-centered">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <a href="#"><img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                   <a href="#"><img src="/assets/abgblora/logo/logopupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                   <span>:</span>
                                                   <h5 class="modal-title" id="modalTandatanganLabel{{ $item->id }}">Berkas Tanda Tangan</h5>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                               </div>
                                               <div class="modal-body text-center">
                                                   @if (Str::endsWith($item->tandatangan, '.pdf'))
                                                       <embed src="{{ asset($item->tandatangan) }}" type="application/pdf" width="100%" height="600px" />
                                                   @else
                                                       <img src="{{ asset($item->tandatangan) }}" alt="Tanda Tangan" class="img-fluid">
                                                   @endif
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </td>

                               {{-- <td>
                                   @if (!$item->is_validated)
                                   <form method="POST" action="{{ route('berkasusaha.validate', $item->id) }}">
                                       @csrf
                                       <button type="submit" class="btn btn-danger btn-sm"
                                           style="border-radius: 15px; padding: 8px 16px; background-color: #dc3545; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                           onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#dc3545'; this.style.border='1px solid #dc3545';"
                                           onmouseout="this.style.backgroundColor='#dc3545'; this.style.color='white'; this.style.border='none';">
                                           <i class="bi bi-file-earmark-check"></i>BELUM DI SETUJUI
                                       </button>
                                   </form>
                                   @else
                                   <button class="btn btn-success btn-sm"
                                       style="border-radius: 15px; padding: 8px 16px; background-color: #28a745; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                       onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#28a745'; this.style.border='1px solid #28a745';"
                                       onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white'; this.style.border='none';">
                                       <i class="bi bi-check-circle-fill"></i> SUDAH DIVALIDASI
                                   </button>
                                   @endif
                               </td> --}}

                               <td>
                                   @if (!$item->is_validated)
                                   <!-- Tombol Triger Modal -->
                                   <button type="button"
                                       onclick="openValidationModal({{ $item->id }})"
                                       class="btn btn-danger btn-sm"
                                       style="border-radius: 15px; padding: 8px 16px; background-color: #dc3545; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                       onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#dc3545'; this.style.border='1px solid #dc3545';"
                                       onmouseout="this.style.backgroundColor='#dc3545'; this.style.color='white'; this.style.border='none';">
                                       <i class="bi bi-file-earmark-check"></i> BELUM DI SETUJUI
                                   </button>
                                   @else
                                   <!-- Tombol SUDAH Validasi -->
                                   <button class="btn btn-success btn-sm"
                                       style="border-radius: 15px; padding: 8px 16px; background-color: #28a745; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                       onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#28a745'; this.style.border='1px solid #28a745';"
                                       onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white'; this.style.border='none';">
                                       <i class="bi bi-check-circle-fill"></i> SUDAH DIVALIDASI
                                   </button>
                                   @endif
                               </td>

                               <!-- Modal Validasi -->
   <!-- Modal Validasi -->
   <div id="validationModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
       <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
           <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
               Apakah Anda yakin <br> ingin menyetujui berkas ini?
           </p>

           <!-- Checkbox -->
           <div style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 16px; text-align: left;">
               <input type="checkbox" id="confirmValidationCheckbox" style="margin-top: 3px;" onchange="toggleValidationButton()">
               <label for="confirmValidationCheckbox" style="font-size: 14px; color: #6b7280;">
                   Saya menyatakan bahwa saya telah <br> memeriksa seluruh data berkas dan <br> menyetujuinya.
               </label>
           </div>

           <!-- Form Submit -->
           <form id="validationForm" method="POST">
               @csrf
               <button id="confirmValidationBtn"
                       type="submit"
                       disabled
                       class="btn-kirim"
                       style="background-color: #dc3545; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: not-allowed; transition: all 0.3s ease;">
                   <i class="bi bi-x-circle-fill" style="margin-right: 5px;"></i> Tidak Bisa Dikirim
               </button>
               <button type="button"
                       onclick="closeValidationModal()"
                       class="btn-cancel-hover"
                       style="background-color: #9CA3AF; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; margin-left: 10px;">
                   Batal
               </button>
           </form>
       </div>
   </div>

   <script>
       function openValidationModal(id) {
           const form = document.getElementById('validationForm');
           form.action = `/berkasusaha/${id}/validate`; // atau route laravel
           document.getElementById('validationModal').style.display = 'flex';
           resetValidationButton(); // reset ke posisi awal
       }

       function closeValidationModal() {
           document.getElementById('validationModal').style.display = 'none';
       }

       function toggleValidationButton() {
           const checkbox = document.getElementById('confirmValidationCheckbox');
           const button = document.getElementById('confirmValidationBtn');

           if (checkbox.checked) {
               button.disabled = false;
               button.style.cursor = 'pointer';
               button.style.backgroundColor = '#1e3a8a'; // navy
               button.innerHTML = '<i class="bi bi-send-fill" style="margin-right: 5px;"></i> Ya, Setujui';
           } else {
               button.disabled = true;
               button.style.cursor = 'not-allowed';
               button.style.backgroundColor = '#dc3545'; // merah
               button.innerHTML = '<i class="bi bi-x-circle-fill" style="margin-right: 5px;"></i> Tidak Bisa Dikirim';
           }
       }

       function resetValidationButton() {
           const checkbox = document.getElementById('confirmValidationCheckbox');
           const button = document.getElementById('confirmValidationBtn');
           checkbox.checked = false;
           button.disabled = true;
           button.style.cursor = 'not-allowed';
           button.style.backgroundColor = '#dc3545';
           button.innerHTML = '<i class="bi bi-x-circle-fill" style="margin-right: 5px;"></i> Tidak Bisa Dikirim';
       }

       // Tutup modal jika klik luar area
       window.addEventListener('click', function(e) {
           const modal = document.getElementById('validationModal');
           if (e.target === modal) {
               closeValidationModal();
           }
       });
   </script>
   <td style="text-align: center; vertical-align: middle; width: 100%;">
       @if (!$item->is_validated)
           <!-- Jika BELUM DIVALIDASI, tombol nonaktif -->
           <button
               disabled
               style="background-color: #dc3545; color: white; border: none; padding: 10px 25px;
                      border-radius: 15px; font-size: 14px; cursor: not-allowed;
                      display: flex; align-items: center; justify-content: center;
                      opacity: 0.6;"
               title="Silakan validasi terlebih dahulu"
           >
               <i class="bi bi-pencil-fill" style="margin-right: 8px;"></i> PENGESAHAN
           </button>
       @else
           <!-- Jika SUDAH DIVALIDASI, tombol aktif -->
           <a href="{{ route('permohonan.pengesahanusaha', $item->id) }}" style="text-decoration: none;">
               <button
                   onmouseover="this.style.backgroundColor='#D1FAE5'; this.style.color='black';"
                   onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';"
                   style="background-color:#28a745; color: white; border: none; padding: 10px 25px;
                          border-radius: 15px; font-size: 14px; cursor: pointer;
                          display: flex; align-items: center; justify-content: center;
                          transition: background-color 0.3s, color 0.3s;">
                   <i class="bi bi-pencil-fill" style="margin-right: 8px;"></i> PENGESAHAN
               </button>
           </a>
       @endif
   </td>




                                       <td style="text-align: center; vertical-align: middle;">
                                           <a href="/bebujkkonstruksi/show/{{$item->namalengkap}}" class="btn btn-sm btn-info me-2" title="Show">
                                               <i class="bi bi-eye"></i>
                                           </a>
                                           <a href="/bebujkkonstruksi/update/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Update">
                                               <i class="bi bi-pencil-square"></i>
                                           </a>
                                           <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
                                              data-bs-toggle="modal" data-bs-target="#deleteModal"
                                              data-judul="{{ $item->namalengkap }}"
                                              onclick="setDeleteUrl(this)">
                                               <i class="bi bi-trash"></i>
                                           </a>
                                       </td>

                                   </tr>
                                   @endforeach
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
                        var namalengkap = button.getAttribute('data-judul');
                        document.getElementById('itemName').innerText = namalengkap;
                        var deleteUrl = "/bebujkkonstruksi/delete/" + encodeURIComponent(namalengkap);
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
