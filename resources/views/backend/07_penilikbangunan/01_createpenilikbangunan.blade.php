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
         <div class="button-belakang row" style="margin-right: 10px; margin-left:10px;">
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
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                  <form action="{{ route('datanewpeniliknew.create') }}" method="POST" enctype="multipart/form-data">
          @csrf
                            <!-- begin::Body -->

                            <input type="hidden" name="user_id" value="{{ $user->id }}">

                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
<div class="row">
    <!-- =========================== -->
    <!-- DATA UMUM BANGUNAN -->
    <!-- =========================== -->
  <h5 class="mt-4 mb-3 fw-bold text-primary d-flex align-items-center"
    style="font-size:16px; border-left: 4px solid #0d6efd; padding-left: 14px; background-color: #f0f8ff; border-radius: 6px; height: 45px;">
  <i class="bi bi-house-door-fill me-3" style="font-size: 18px;"></i>
  Data Umum Bangunan
</h5>

<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label" for="fungsibangunan">
            <i class="bi bi-building me-2" style="color: #8B0000;" ></i> Fungsi Bangunan
        </label>
        <select class="form-select @error('fungsibangunan') is-invalid @enderror" id="fungsibangunan" name="fungsibangunan">
            <option value="">-- Pilih Fungsi Bangunan --</option>
            <option value="FUNGSI USAHA" {{ old('fungsibangunan', $data->fungsibangunan ?? '') == 'FUNGSI USAHA' ? 'selected' : '' }}>FUNGSI USAHA</option>
            <option value="FUNGSI HUNIAN" {{ old('fungsibangunan', $data->fungsibangunan ?? '') == 'FUNGSI HUNIAN' ? 'selected' : '' }}>FUNGSI HUNIAN</option>
            <option value="FUNGSI KEAGAMAAN" {{ old('fungsibangunan', $data->fungsibangunan ?? '') == 'FUNGSI KEAGAMAAN' ? 'selected' : '' }}>FUNGSI KEAGAMAAN</option>
            <option value="FUNGSI SOSIAL BUDAYA" {{ old('fungsibangunan', $data->fungsibangunan ?? '') == 'FUNGSI SOSIAL BUDAYA' ? 'selected' : '' }}>FUNGSI SOSIAL BUDAYA</option>
        </select>
        @error('fungsibangunan') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>


<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label" for="subfungsibangunan">
            <i class="bi bi-diagram-3 me-2 text-danger"></i> Subfungsi Bangunan
        </label>
        <input type="text" class="form-control @error('subfungsibangunan') is-invalid @enderror" id="subfungsibangunan" name="subfungsibangunan" value="{{ old('subfungsibangunan', $data->subfungsibangunan ?? '') }}">
        @error('subfungsibangunan') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
    <!-- =========================== -->
    <!-- DETAILS BANGUNAN DAN SPESIFIKASI -->
    <!-- =========================== -->
    <h5 class="mt-4 mb-3 fw-bold text-primary d-flex align-items-center"
    style="font-size:16px; border-left: 4px solid #0d6efd; padding-left: 14px; background-color: #f0f8ff; border-radius: 6px; height: 45px;">
  <i class="bi bi-building me-3" style="font-size: 18px;"></i>
  Detail Bangunan & Spesifikasi
</h5>

    @php
// Mapping nama field ke ikon bi Bootstrap Icon yang pas
$icons = [
    'namabangunan' => 'bi-building',
    'luasbangunan' => 'bi-rulers',
    'ketinggianbangunan' => 'bi-arrows-expand',
    'jumlahlantai' => 'bi-list-ol',
    'jumlahlapisbasemen' => 'bi-stack',
    'luasbasemen' => 'bi-layout-sidebar',
    'jumlahunit' => 'bi-house-door',
    'estimasijumlahpenghuni' => 'bi-people',
];
@endphp

@foreach([
    'namabangunan' => 'Nama Bangunan',
    'luasbangunan' => 'Luas Bangunan (m²)',
    'ketinggianbangunan' => 'Ketinggian Bangunan (m)',
    'jumlahlantai' => 'Jumlah Lantai',
    'jumlahlapisbasemen' => 'Jumlah Lapis Basemen',
    'luasbasemen' => 'Luas Basemen (m²)',
    'jumlahunit' => 'Jumlah Unit',
    'estimasijumlahpenghuni' => 'Estimasi Jumlah Penghuni'
] as $name => $label)

    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label d-flex align-items-center" for="{{ $name }}">
                <i class="bi {{ $icons[$name] ?? 'bi-info-circle' }} me-2 text-danger"></i> {{ $label }}
            </label>

            @if($name == 'jumlahlantai')
                {{-- Select 1 sampai 10 --}}
                <select class="form-select @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}">
                    <option value="">-- Pilih Jumlah Lantai --</option>
                    @for($i=1; $i<=10; $i++)
                        <option value="{{ $i }}" {{ old($name, $data->$name ?? '') == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            @elseif($name == 'luasbasemen')
                {{-- Input number + pilihan "TIDAK ADA" --}}
                <div class="input-group">
                    <input type="number" step="0.01" min="0" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ is_numeric(old($name, $data->$name ?? '')) ? old($name, $data->$name ?? '') : '' }}" placeholder="Masukkan luas basemen">
                    <select class="form-select @error($name) is-invalid @enderror" onchange="
                        if(this.value === 'TIDAK ADA') {
                            document.getElementById('{{ $name }}').value = '';
                            document.getElementById('{{ $name }}').setAttribute('readonly', true);
                        } else {
                            document.getElementById('{{ $name }}').removeAttribute('readonly');
                        }
                    ">
                        <option value="">-- Pilih --</option>
                        <option value="TIDAK ADA" {{ old($name, $data->$name ?? '') === 'TIDAK ADA' ? 'selected' : '' }}>TIDAK ADA</option>
                    </select>
                </div>
            @elseif($name == 'namabangunan')
                {{-- Input text biasa --}}
                <input type="text" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $data->$name ?? '') }}">
            @else
                {{-- Input number untuk field lain --}}
                <input type="number" step="any" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $data->$name ?? '') }}">
            @endif

            @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@endforeach

    <!-- =========================== -->
    <!-- SPESIFIKASI BANGUNAN -->
    <!-- =========================== -->
<h5 class="mt-4 mb-3 fw-bold text-primary d-flex align-items-center"
    style="font-size:16px; border-left: 4px solid #0d6efd; padding-left: 14px; background-color: #f0f8ff; border-radius: 6px; height: 45px;">
  <i class="bi bi-diagram-3 me-3" style="font-size: 18px;"></i>
  Spesifikasi Bangunan
</h5>
<div class="row">
  <!-- Nomor KKPR full width -->
  <div class="col-12">
    <div class="mb-3">
      <label class="form-label" for="nomorkkpr">
        <i class="bi bi-file-earmark-text me-2 text-danger"></i> Nomor KKPR/KRK
      </label>
      <input
        type="text"
        class="form-control @error('nomorkkpr') is-invalid @enderror"
        id="nomorkkpr"
        name="nomorkkpr"
        value="{{ old('nomorkkpr', $data->nomorkkpr ?? '') }}"
        placeholder="Masukkan Nomor KKPR"
      >
      @error('nomorkkpr') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>
</div>

<div class="row">
  <!-- GSB -->
  <div class="col-md-3 col-6">
    <div class="mb-3">
      <label class="form-label" for="gsb">
        <i class="bi bi-arrow-up-right-circle me-2 text-danger"></i> Garis Sempadan Bangunan (meter)
      </label>
      <input
        type="number"
        step="0.01"
        class="form-control @error('gsb') is-invalid @enderror"
        id="gsb"
        name="gsb"
        value="{{ old('gsb', $data->gsb ?? '') }}"
        placeholder="0.00"
      >
      @error('gsb') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>

  <!-- KDB -->
  <div class="col-md-3 col-6">
    <div class="mb-3">
      <label class="form-label" for="kdb">
        <i class="bi bi-percent me-2 text-danger"></i> Koefisien Dasar Bangunan (%)
      </label>
      <input
        type="number"
        step="0.01"
        class="form-control @error('kdb') is-invalid @enderror"
        id="kdb"
        name="kdb"
        value="{{ old('kdb', $data->kdb ?? '') }}"
        placeholder="0.00"
      >
      @error('kdb') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>

  <!-- KLB -->
  <div class="col-md-3 col-6">
    <div class="mb-3">
      <label class="form-label" for="klb">
        <i class="bi bi-diagram-3-fill me-2 text-danger"></i> Koefisien Lantai Bangunan
      </label>
      <input
        type="number"
        step="0.01"
        class="form-control @error('klb') is-invalid @enderror"
        id="klb"
        name="klb"
        value="{{ old('klb', $data->klb ?? '') }}"
        placeholder="0.00"
      >
      @error('klb') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>

  <!-- KDH -->
  <div class="col-md-3 col-6">
    <div class="mb-3">
      <label class="form-label" for="kdh">
        <i class="bi bi-tree-fill me-2 text-danger"></i> Koefisien Dasar Hijau (%)
      </label>
      <input
        type="number"
        step="0.01"
        class="form-control @error('kdh') is-invalid @enderror"
        id="kdh"
        name="kdh"
        value="{{ old('kdh', $data->kdh ?? '') }}"
        placeholder="0.00"
      >
      @error('kdh') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>
</div>

    <!-- =========================== -->
    <!-- INTERNSITAS BANGUNAN GEDUNG -->
    <!-- =========================== -->
<h5 class="mt-4 mb-3 fw-bold text-primary d-flex align-items-center"
    style="font-size:16px; border-left: 4px solid #0d6efd; padding-left: 14px; background-color: #f0f8ff; border-radius: 6px; height: 45px;">
  <i class="bi bi-geo-alt me-3" style="font-size: 18px;"></i>
  Internsitas Bangunan Gedung
</h5>

<div class="row g-3">
  {{-- Provinsi dan Kabupaten --}}
  @foreach([
      'provinsi' => 'Provinsi',
      'kabupaten' => 'Kabupaten/Kota'
  ] as $name => $label)
      <div class="col-md-6">
          <div class="mb-3">
              <label class="form-label d-flex align-items-center" for="{{ $name }}">
                <i class="bi bi-geo-alt-fill me-2 text-danger" style="font-size: 1.2rem;"></i> {{ $label }}
              </label>
              <input
                type="text"
                class="form-control @error($name) is-invalid @enderror"
                id="{{ $name }}"
                name="{{ $name }}"
                value="{{ $name === 'provinsi' ? 'Jawa Tengah' : 'Kabupaten Blora' }}"
                readonly
              >
              @error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
      </div>
  @endforeach

  {{-- Kecamatan --}}
  <div class="col-md-6">
    <div class="mb-3">
      <label class="form-label d-flex align-items-center" for="kecamatanblora_id">
        <i class="bi bi-geo-alt me-2 text-danger" style="font-size: 1.2rem;"></i> Kecamatan
      </label>
      <select class="form-select @error('kecamatanblora_id') is-invalid @enderror" name="kecamatanblora_id" id="kecamatanblora_id" style="min-height: 42px;">
        <option value="">-- Pilih Kecamatan --</option>
        @foreach($kecamatanList as $item)
          <option value="{{ $item->id }}" {{ old('kecamatanblora_id', $data->kecamatanblora_id ?? '') == $item->id ? 'selected' : '' }}>
            {{ $item->kecamatanblora }}
          </option>
        @endforeach
      </select>
      @error('kecamatanblora_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>

  {{-- Kelurahan/Desa --}}
  <div class="col-md-6">
    <div class="mb-3">
      <label class="form-label d-flex align-items-center" for="kelurahandesa_id">
        <i class="bi bi-geo-alt me-2 text-danger" style="font-size: 1.2rem;"></i> Kelurahan/Desa
      </label>
      <select class="form-select @error('kelurahandesa_id') is-invalid @enderror" name="kelurahandesa_id" id="kelurahandesa_id" style="min-height: 42px;">
        <option value="">-- Pilih Kelurahan/Desa --</option>
        {{-- Pilihan kelurahan akan diisi lewat AJAX --}}
      </select>
      @error('kelurahandesa_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>

  {{-- Alamat Lengkap --}}
  <div class="col-12">
      <div class="mb-3">
          <label class="form-label d-flex align-items-center" for="alamatlengkap">
            <i class="bi bi-house-fill me-2 text-danger" style="font-size: 1.2rem;"></i> Alamat Lengkap
          </label>
          <textarea class="form-control @error('alamatlengkap') is-invalid @enderror" id="alamatlengkap" name="alamatlengkap" rows="3">{{ old('alamatlengkap', $data->alamatlengkap ?? '') }}</textarea>
          @error('alamatlengkap') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
  </div>

  {{-- Koordinat --}}
  <div class="col-md-6">
      <div class="mb-3">
          <label class="form-label d-flex align-items-center" for="koordinat">
            <i class="bi bi-geo-alt-fill me-2 text-danger" style="font-size: 1.2rem;"></i> Koordinat
          </label>
          <input type="text" class="form-control @error('koordinat') is-invalid @enderror" id="koordinat" name="koordinat" value="{{ old('koordinat', $data->koordinat ?? '') }}">
          @error('koordinat') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
  </div>
</div>

{{-- JQuery AJAX untuk load Kelurahan berdasarkan Kecamatan --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('#kecamatanblora_id').on('change', function () {
    var kecamatanID = $(this).val();
    if (kecamatanID) {
      $.ajax({
        url: '{{ route("datanewpenilik.create") }}', // Sesuaikan route ajax-nya
        type: 'GET',
        data: { kecamatan_id: kecamatanID },
        success: function (data) {
          $('#kelurahandesa_id').empty().append('<option value="">-- Pilih Kelurahan/Desa --</option>');
          $.each(data, function (key, value) {
            $('#kelurahandesa_id').append('<option value="' + value.id + '">' + value.desa + '</option>');
          });
        }
      });
    } else {
      $('#kelurahandesa_id').empty().append('<option value="">-- Pilih Kelurahan/Desa --</option>');
    }
  });
</script>



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

                                    </div>
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                               <button class="button-create" type="button" onclick="openModal()">
                                    <i class="bi bi-save" style="margin-right: 5px;"></i>
                                    <span style="font-family: 'Poppins', sans-serif;">Simpan</span>
                                    </button>

                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda ingin membuat data inspeksi bangunan ?
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


