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

                            fetch(`/bekrkhunian?search=${input}`)
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


                     <a href="/bekrkindex" style="text-decoration: none;">
    <button class="button-kembali" style="color: black;">
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

                                    <th style="background-color: #ADD8E6;"><i class="fas fa-building"></i> Lihat Permohonan</th>

                                    {{-- <th style="background-color: #ADD8E6;"><i class="fas fa-id-card"></i> KTP</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-address-card"></i> NPWP</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-file-alt"></i> Sertifikat Tanah</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-paperclip"></i> Lampiran OSS</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-file-invoice-dollar"></i> Bukti PBB</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-check-circle"></i> Dok Validasi DPUPR</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-drafting-compass"></i> Site Plan</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-pen-fancy"></i> Tanda Tangan</th> --}}
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-tasks"></i> Verifikasi DPUPR</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-tasks"></i> Dok Lapangan</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-tasks"></i> Status Cek Lapangan</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-stamp"></i> Olah Data KRK</th>
                                    <th style="background-color: #ADD8E6;"><i class="fas fa-stamp"></i> Buat Data KRK</th>
                             <th style="background-color: #ADD8E6;">
    <i class="fas fa-database" style="margin-right: 6px;"></i> Status Olah Data
</th>
                             <th style="background-color: #ADD8E6;">
    <i class="fas fa-database" style="margin-right: 6px;"></i> Berkas Final KRK
</th>
                             <th style="background-color: #ADD8E6;">
    <i class="fas fa-database" style="margin-right: 6px;"></i> Selesai
</th>
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

                                       <td style="text-align: center;">
                <a href="{{ route('bekrkhunianpermohonan.show', $item->id) }}"
                    class="button-validasinew"
                    style="text-decoration: none; border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';">
                    <i class="fas fa-eye" style="margin-right: 5px;"></i> LIhat Permohonan
                </a>
            </td>
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




<!-- Tombol Validasi -->
<td style="text-align: center; display: flex; justify-content: center; align-items: center; height: 60px;">
  @if($item->verifikasi1 == 'lolos')
    <button
        class="button-lolos"
        type="button"
        style="background-color: #10B981; cursor: not-allowed;"
        disabled
    >
        <i class="bi bi-patch-check-fill" style="margin-right: 5px;"></i> Lolos
    </button>
    @elseif($item->verifikasi1 == 'dikembalikan')
        <button class="button-dikembalikan" type="button" onclick="openModal({{ $item->id }})" style="background-color: #f8f8fa;">
            <i class="bi bi-x-circle" style="margin-right: 5px;"></i> Dikembalikan
        </button>
    @else
        <button class="button-validasinew" type="button" onclick="openModal({{ $item->id }})" class="btn btn-secondary">
            <i class="bi bi-patch-check" style="margin-right: 5px;"></i> Validasi
        </button>
    @endif
</td>

<!-- Modal Konfirmasi -->
<div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 24px; border-radius: 12px; width: 90%; max-width: 400px; text-align: center;">
        <p style="font-size: 16px; font-weight: 600;">Apakah berkas sudah sesuai?</p>

        <form id="validasiForm" method="POST">
            @csrf
            @method('PUT')

<!-- Tombol Lolos -->
<button
    type="submit"
    name="verifikasi1"
    value="lolos"
    style="background-color: #10B981; color: white; padding: 8px 16px; margin-right: 10px; border-radius: 8px; border: none;"
    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white';"
>
    <i class="bi bi-check2-circle" style="margin-right: 6px;"></i> Lolos
</button>

<!-- Tombol Dikembalikan -->
<button
    type="submit"
    name="verifikasi1"
    value="dikembalikan"
    style="background-color: #0400ff; color: white; padding: 8px 16px; border-radius: 8px; border: none;"
    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='#0400ff'; this.style.color='white';"
>
    <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Dikembalikan
</button>

        </form>

        <br><br>

        <!-- Tombol Batal -->
        <button
    type="button"
    onclick="closeModal()"
    style="background-color: #D1D5DB; padding: 8px 16px; border-radius: 8px; border: none; color: black;"
    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='#D1D5DB'; this.style.color='black';"
>
    <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Batal
</button>

    </div>
</div>

<script>
    function openModal(itemId) {
        const form = document.getElementById("validasiForm");
        form.action = `/valberkashunian1/${itemId}`;
        document.getElementById("confirmModal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("confirmModal").style.display = "none";
    }
</script>

  <td style="text-align: center;">
                <a href="{{ route('doklapkrkhunian.show', $item->id) }}"
                    class="button-validasinew"
                    style="text-decoration: none; border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';">
                <i class="bi bi-folder" style="margin-right: 5px;"></i> Lihat Dok Lapangan

                </a>
            </td>

            <td style="text-align: center; display: flex; justify-content: center; align-items: center; height: 60px;">
  @if($item->verifikasi2 == 'sudah')
    <button
        class="button-lolos"
        type="button"
        style="background-color: #10B981; color: white; cursor: not-allowed;"
        disabled
    >
        <i class="bi bi-patch-check-fill" style="margin-right: 5px;"></i> Sudah
    </button>
  @elseif($item->verifikasi2 == 'belum')
    <button class="button-dikembalikan" type="button" onclick="openModalVerifikasi2({{ $item->id }})">
        <i class="bi bi-x-circle" style="margin-right: 5px;"></i> Belum
    </button>
  @else
    <button class="button-validasinew" type="button" onclick="openModalVerifikasi2({{ $item->id }})">
        <i class="bi bi-patch-check" style="margin-right: 5px;"></i> Verifikasi
    </button>
  @endif
</td>

<!-- Modal Verifikasi2 -->
<div id="confirmModalVerifikasi2" style="display: none; position: fixed; inset: 0; background-color: rgba(0,0,0,0.5); z-index: 1001; justify-content: center; align-items: center;">
  <div style="background: white; padding: 24px; border-radius: 12px; width: 90%; max-width: 400px; text-align: center;">
    <p style="font-size: 16px; font-weight: 600;">Apakah status verifikasi sudah sesuai?</p>

    <form id="verifikasi2Form" method="POST">
      @csrf
      @method('PUT')

      <!-- Tombol Sudah -->
      <button
          type="submit"
          name="verifikasi2"
          value="sudah"
          style="background-color: #10B981; color: white; padding: 8px 16px; margin-right: 10px; border-radius: 8px; border: none;"
          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
          onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white';"
      >
        <i class="bi bi-check2-circle" style="margin-right: 6px;"></i> Sudah
      </button>

      <!-- Tombol Belum -->
      <button
          type="submit"
          name="verifikasi2"
          value="belum"
          style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none;"
          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
          onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white';"
      >
        <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Belum
      </button>
    </form>

    <br><br>

    <!-- Tombol Batal -->
    <button
        type="button"
        onclick="closeModalVerifikasi2()"
        style="background-color: #D1D5DB; padding: 8px 16px; border-radius: 8px; border: none; color: black;"
        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
        onmouseout="this.style.backgroundColor='#D1D5DB'; this.style.color='black';"
    >
      <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Batal
    </button>
  </div>
</div>

<script>
  function openModalVerifikasi2(itemId) {
    const form = document.getElementById("verifikasi2Form");
    form.action = `/valberkashunian2/${itemId}`;
    document.getElementById("confirmModalVerifikasi2").style.display = "flex";
  }

  function closeModalVerifikasi2() {
    document.getElementById("confirmModalVerifikasi2").style.display = "none";
  }
</script>




            <!-- Tombol Validasi -->



                            <td>
                                  <div style="display: flex; flex-direction: column; align-items: center;">
                                @if (!$item->is_validated)
                                <!-- Tombol Triger Modal -->
                                <button type="button"
                                    onclick="openValidationModal({{ $item->id }})"
                                    class="button-dikembalikan"
                                    style="border-radius: 15px; padding: 8px 16px; background-color: #dc3545; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#dc3545'; this.style.border='1px solid #dc3545';"
                                    onmouseout="this.style.backgroundColor='#dc3545'; this.style.color='black'; this.style.border='none';">
                                    <i class="bi bi-file-earmark-check" style="margin-right: 5px;"></i> Belum di Setujui !
                                </button>
                                @else
                                <!-- Tombol SUDAH Validasi -->
                                <button class="button-lolos"
                                    style="border-radius: 15px; padding: 8px 16px; background-color: #28a745; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#28a745'; this.style.border='1px solid #28a745';"
                                    onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white'; this.style.border='none';">
                                    <i class="bi bi-check-circle-fill" style="margin-right: 5px;"></i> Silahkan Buat Dok KRK
                                </button>
                                @endif
                                </div>
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
        form.action = `/berkashunianval/${id}/validate`; // atau route laravel
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
    <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px;">
        @if (!$item->is_validated)
    <!-- BELUM DIVALIDASI, tombol nonaktif merah -->
    <button class="button-dikembalikan"
        disabled
        style="background-color: #dc3545; color: white; border: none; padding: 10px 25px;
               border-radius: 15px; font-size: 14px; cursor: not-allowed;
               display: flex; align-items: center; justify-content: center;
               opacity: 0.6;"
        title="Silakan validasi terlebih dahulu"
    >
        <i class="bi bi-pencil-fill" style="margin-right: 5px;"></i> Pengesahan
    </button>
@else
    @if($subdata->where('krkhunian_id', $item->id)->count() > 0)
        <!-- SUDAH DIVALIDASI tapi data pengesahan sudah ada, tombol hijau tapi nonaktif -->
        <button class="button-download"
            disabled
            style="border: none; padding: 10px 25px;
                   border-radius: 15px; font-size: 14px; cursor: not-allowed;
                   display: flex; align-items: center; justify-content: center;
                   opacity: 0.7;"
            title="Dokumen pengesahan sudah ada"
        >
            <i class="bi bi-pencil-fill" style="margin-right: 5px;"></i> Pengesahan
        </button>
    @else
        <!-- SUDAH DIVALIDASI dan data pengesahan belum ada, tombol aktif dan bisa diklik -->
        <a href="{{ route('permohonan.perpengesahanhunian', $item->id) }}" style="text-decoration: none;">
            <button class="button-lolos"
                onmouseover="this.style.backgroundColor='#D1FAE5'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';"
                style="background-color:#28a745; color: white; border: none; padding: 10px 25px;
                       border-radius: 15px; font-size: 14px; cursor: pointer;
                       display: flex; align-items: center; justify-content: center;
                       transition: background-color 0.3s, color 0.3s;">
                <i class="bi bi-pencil-fill" style="margin-right: 8px;"></i> Pengesahan
            </button>
        </a>
    @endif
@endif


@if($subdata->where('krkhunian_id', $item->id)->count() > 0)
    <a href="{{ route('berkas.perpengesahanhunianber', $item->id) }}"
        class="button-lolos"
        style="text-decoration: none; border-radius: 15px; padding: 8px 16px; background-color: #10B981; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#10B981'; this.style.border='1px solid #10B981';"
        onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.style.border='none';">
        <i class="bi bi-folder" style="margin-right: 5px;"></i> Lihat Dok Pengesahan
    </a>
@else
    <button
        class="button-dikembalikan"
        style="cursor: not-allowed; border-radius: 15px; padding: 8px 16px; background-color: #DC3545; color: white; border: none;"
        disabled>
        <i class="bi bi-folder-x" style="margin-right: 5px;"></i> Dokumen Belum Ada
    </button>
@endif

    </div>
</td>

<!-- Tombol Validasi -->
<td style="text-align: center; display: flex; justify-content: center; align-items: center; height: 60px;">
  @if($item->verifikasi3 == 'sudah')
    <button
        class="button-lolos"
        type="button"
        style="background-color: #10B981; cursor: not-allowed;"
        disabled
    >
        <i class="bi bi-check2-circle" style="margin-right: 5px;"></i> Sudah
    </button>
  @elseif($item->verifikasi3 == 'belum')
    <button class="button-dikembalikan" type="button" onclick="openModal3({{ $item->id }})" style="background-color: #f8f8fa;">
        <i class="bi bi-x-circle" style="margin-right: 5px;"></i> Belum
    </button>
  @else
    <button class="button-validasinew" type="button" onclick="openModal3({{ $item->id }})">
        <i class="bi bi-patch-check" style="margin-right: 5px;"></i> Validasi
    </button>
  @endif
</td>

<!-- Modal Konfirmasi untuk verifikasi3 -->
<div id="confirmModal3" style="display: none; position: fixed; inset: 0; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 24px; border-radius: 12px; width: 90%; max-width: 400px; text-align: center;">
        <p style="font-size: 16px; font-weight: 600;">Apakah olah data sudah dilakukan?</p>

        <form id="validasiForm3" method="POST">
            @csrf
            @method('PUT')

            <!-- Tombol Sudah -->
            <button
                type="submit"
                name="verifikasi3"
                value="sudah"
                style="background-color: #10B981; color: white; padding: 8px 16px; margin-right: 10px; border-radius: 8px; border: none;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white';"
            >
                <i class="bi bi-check2-circle" style="margin-right: 6px;"></i> Sudah
            </button>

            <!-- Tombol Belum -->
            <button
                type="submit"
                name="verifikasi3"
                value="belum"
                style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white';"
            >
                <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Belum
            </button>
        </form>

        <br><br>

        <!-- Tombol Batal -->
        <button
            type="button"
            onclick="closeModal3()"
            style="background-color: #D1D5DB; padding: 8px 16px; border-radius: 8px; border: none; color: black;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#D1D5DB'; this.style.color='black';"
        >
            <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Batal
        </button>
    </div>
</div>

<script>
    function openModal3(itemId) {
        const form = document.getElementById("validasiForm3");
        form.action = `/valberkashunian3/${itemId}`;
        document.getElementById("confirmModal3").style.display = "flex";
    }

    function closeModal3() {
        document.getElementById("confirmModal3").style.display = "none";
    }
</script>


<td style="text-align: center; vertical-align: middle; width: 100%;">
    <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px;">


@if($subdata->where('krkhunian_id', $item->id)->count() > 0)
    <a href="{{ route('permohonan.permohonankrkhunianfinal', $item->id) }}"
        class="button-lolos"
        style="text-decoration: none; border-radius: 15px; padding: 8px 16px; background-color: #10B981; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#10B981'; this.style.border='1px solid #10B981';"
        onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.style.border='none';">
        <i class="bi bi-folder" style="margin-right: 5px;"></i> Lihat Dok Final
    </a>
@else
    <button
        class="button-dikembalikan"
        style="cursor: not-allowed; border-radius: 15px; padding: 8px 16px; background-color: #DC3545; color: white; border: none;"
        disabled>
        <i class="bi bi-folder-x" style="margin-right: 5px;"></i> Berkas Final Belum Ada
    </button>
@endif

</div>
</td>


<!-- Tombol Validasi -->
<td style="text-align: center; display: flex; justify-content: center; align-items: center; height: 60px;">
  @if($item->verifikasi4 == 'sudah')
    <button
        class="button-lolos"
        type="button"
        style="background-color: #10B981; cursor: not-allowed;"
        disabled
    >
        <i class="bi bi-check2-circle" style="margin-right: 5px;"></i> Sudah
    </button>
  @elseif($item->verifikasi4 == 'belum')
    <button class="button-dikembalikan" type="button" onclick="openModal4({{ $item->id }})" style="background-color: #f8f8fa;">
        <i class="bi bi-x-circle" style="margin-right: 5px;"></i> Belum
    </button>
  @else
    <button class="button-validasinew" type="button" onclick="openModal4({{ $item->id }})">
        <i class="bi bi-patch-check" style="margin-right: 5px;"></i> Validasi
    </button>
  @endif
</td>

<!-- Modal Konfirmasi untuk verifikasi4 -->
<div id="confirmModal4" style="display: none; position: fixed; inset: 0; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 24px; border-radius: 12px; width: 90%; max-width: 400px; text-align: center;">
        <p style="font-size: 16px; font-weight: 600;">Apakah permohonan ini sudah selesai ?</p>

        <form id="validasiForm4" method="POST">
            @csrf
            @method('PUT')

            <!-- Tombol Sudah -->
            <button
                type="submit"
                name="verifikasi4"
                value="sudah"
                style="background-color: #10B981; color: white; padding: 8px 16px; margin-right: 10px; border-radius: 8px; border: none;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white';"
            >
                <i class="bi bi-check2-circle" style="margin-right: 6px;"></i> Sudah
            </button>

            <!-- Tombol Belum -->
            <button
                type="submit"
                name="verifikasi4"
                value="belum"
                style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white';"
            >
                <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Belum
            </button>
        </form>

        <br><br>

        <!-- Tombol Batal -->
        <button
            type="button"
            onclick="closeModal4()"
            style="background-color: #D1D5DB; padding: 8px 16px; border-radius: 8px; border: none; color: black;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#D1D5DB'; this.style.color='black';"
        >
            <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Batal
        </button>
    </div>
</div>

<!-- Script Modal verifikasi4 -->
<script>
    function openModal4(itemId) {
        const form = document.getElementById("validasiForm4");
        form.action = `/valberkashunian4/${itemId}`;
        document.getElementById("confirmModal4").style.display = "flex";
    }

    function closeModal4() {
        document.getElementById("confirmModal4").style.display = "none";
    }
</script>



                                    <td style="text-align: center; vertical-align: middle;">
                                        {{-- <a href="/bebujkkonstruksi/show/{{$item->namalengkap}}" class="btn btn-sm btn-info me-2" title="Show">
                                            <i class="bi bi-eye"></i>
                                        </a> --}}
                                        {{-- <a href="/bebujkkonstruksi/update/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Update">
                                            <i class="bi bi-pencil-square"></i>
                                        </a> --}}
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
                                           data-bs-toggle="modal" data-bs-target="#deleteModal"
                                           data-judul="{{ $item->id }}"
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
                     var deleteUrl = "/dokbekrkhuniandelete/" + encodeURIComponent(id);
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
