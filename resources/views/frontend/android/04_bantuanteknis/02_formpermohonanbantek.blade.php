@include('frontend.android.00_fiturmenu.01_header')

<body class="font-poppins text-[#070625]">
  <section id="content" class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#F8F8F8] overflow-x-hidden pb-[120px] relative">
    <div class="w-full h-[184px] absolute top-0 bg-cover bg-center" style="background-image: url('/assets/android/iconmenu/dashboard999.jpg');">
    </div>
     <div class="relative z-10 flex flex-col gap-6 mt-[60px]">
      <div class="top-menu flex justify-between items-center px-[18px]">
          <div class="w-[42px] h-[42px] flex shrink-0">
            <img src="/assets/abgblora/logo/logokabupatenblora.png" alt="icon">
          </div>
        <p class="font-semibold leading-[28px] text-white text-center" style="font-size: 18px;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora </span></p>
        <div class="w-[42px] h-[42px] flex shrink-0">
            <img src="/assets/abgblora/logo/pupr.png" alt="icon">
          </div>
      </div>
      {{-- <form action="success.html" id="Details" class="group result-card-container flex flex-col gap-6"> --}}
        <div id="Contact-details" class="bg-white rounded-xl overflow-hidden flex flex-col mx-[18px]">
          <div class="flex p-4 items-center gap-4">
            <button type="button" class="contact-name accordion-button flex items-center gap-2 w-full" data-accordion="accordion-1">
              <div class="flex items-center">
                <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                  <img src="/assets/android/menunavigasi/004.png" class="object-cover w-full h-full" alt="photo">
                </div>
              </div>
              <div class="flex flex-col flex-1 gap-[2px] text-left">
                <p class="font-semibold">{{$title}}</p>
                {{-- <p class="font-medium text-xs leading-[18px] text-[#757C98]">Contact Details</p> --}}
              </div>
            </button>
          </div>
        </div>

        <div id="Contact-details" class="bg-white rounded-xl overflow-hidden flex flex-col mx-[18px]">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<style>
    .petablota {
      position: relative;
      min-height: 500px;
    }
    .petablota-map-container {
      height: 70vh;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      position: relative;
    }
    #map {
      width: 100%;
      height: 100%;
    }
    #map-loader {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1000;
      display: none;
    }

.btn-submit-hover:hover {
    background-color: white; /* Warna putih */
    color: black; /* Tulisan hitam */
    border: 1px solid #2563eb; /* Border biru */
    transition: all 0.3s ease-in-out;
  }

  .btn-cancel-hover:hover {
    background-color: white; /* Warna putih */
    color: black; /* Tulisan hitam */
    border: 1px solid #9CA3AF; /* Border abu-abu */
    transition: all 0.3s ease-in-out;
  }

.pdf-preview-wrapper {
                max-width: 50%;
                overflow-x: auto;
                border: 1px solid #ccc;
                border-radius: 8px;
                padding: 8px;
                }

                .pdf-preview-wrapper iframe {
                width: 100%;
                height: 200px;
                border: none;
                border-radius: 6px;
                }

              .koordinat-box {
                margin-top: 10px;
                font-family: Arial, sans-serif;
                background: #f3f3f3;
                padding: 10px;
                border-radius: 10px;
                border: 1px solid #ccc;
              }

              /* Sembunyikan default attribution Leaflet */
              .leaflet-control-attribution a[href*="leaflet"] {
                display: none !important;
              }

 body {
      font-family: 'Poppins', sans-serif;
    }

.custom-button {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    background-color: #258af0;
    color: #ffffff;
    padding: 10px 15px;
    border-radius: 9999px;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
  }

  .custom-button:hover {
    background-color: white;
    color: #258af0;
  }

  .custom-button svg {
    transition: all 0.3s;
  }

  .custom-button:hover svg {
    fill: #258af0;
  }

    table.zebra-table {
        border-collapse: collapse;
        width: 100%;
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        border-radius: 15px;
        overflow: hidden;
    }

    .zebra-table thead {
        background-color: #2E82FE;
        color: white;
    }

    .zebra-table th,
    .zebra-table td {
        padding: 6px 12px;
        text-align: left;
    }

    .zebra-table tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .zebra-table tbody tr:nth-child(even) {
        background-color: #dfdddd;
    }

    .zebra-table tbody tr:hover {
        background-color: #0fb825;
    }
</style>

<section
    id="breadcrumb"
  style="
    background: linear-gradient(to bottom, #7de3f1, #ffffff);
    margin: 0;
    padding: 0;
    position: relative;
    left: 0;
    margin-top: -50px;
    margin-bottom: -45px;
  "
>

 <section id="details" class="mx-auto flex flex-col sm:flex-row items-center justify-center text-center" style="margin-top:-10px;">
   {{-- @include('frontend.abgblora.06_permohonankrk.02_permohonankrkpemohon.00_menufungsibangunan') --}}


            <div class="flex flex-col gap-5 w-full">
            <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
                    <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Form Permohonan Bantuan Teknis | Bangunan Gedung </span>
                </p>
            </div>
            <form id="signatureForm" action="{{ route('permohonan.bantekcreate') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                @csrf


<div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center">
    <i class="fas fa-info-circle me-2"></i>
    <div>
        <strong>Jenis Permohonan Bantuan Teknis Saudara ! </strong>
    </div>
</div>


<div class="row mt-3" style="margin-top: -25px;">
<div class="col-md-6" style="margin-top: -60px;">
  <div>
    <label class="form-label d-flex align-items-center" for="jenispengajuanbantek_id">
        <i class="fas fa-envelope" style="margin-right: 8px; color: navy;"></i> Jenis Permohonan
    </label>
  <select name="jenispengajuanbantek_id" id="jenispengajuanbantek_id"
        class="form-control @error('jenispengajuanbantek_id') is-invalid @enderror"
        style="font-size: 15px;">
        <option value="">-- Pilih Jenis Pengajuan --</option>
        @foreach ($datapilihanpengajuan as $pengajuan)
            <option value="{{ $pengajuan->id }}" {{ old('jenispengajuanbantek_id') == $pengajuan->id ? 'selected' : '' }}>
                {{ $pengajuan->jenispengajuan }}
            </option>
        @endforeach
    </select>
    @error('jenispengajuanbantek_id')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>

</div>
<div>


<div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center" style="margin-top: -100px; margin-bottom: -35px;">
    <i class="fas fa-info-circle me-2"></i>
    <div>
        <strong>Informasi Permohonan Bantuan Teknis </strong>
    </div>
</div>


<div class="row mt-3" style="margin-top: 0px;">
<div class="col-md-6" style="margin-top: 0px;">
    <div>
        <label class="form-label d-flex align-items-center" for="nosurat">
            <i class="fas fa-envelope" style="margin-right: 8px; color: navy;"></i> No Surat Permohonan</span>
        </label>
        <input type="text" name="nosurat" id="nosurat"
            class="form-control @error('nosurat') is-invalid @enderror"
            readonly>
        @error('nosurat')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const bulanRomawi = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII"];
        const today = new Date();
        const bulan = today.getMonth(); // index mulai dari 0
        const tahun = today.getFullYear();

        // Nomor urut simulasi
        let nomorUrut = "001"; // Ganti dengan nilai dinamis kalau perlu

        // Format surat
        let nomorSurat = `DPUPRBLORA/BANTEK/BG/${bulanRomawi[bulan]}/${tahun}/${nomorUrut}`;

        // Set ke input
        document.getElementById('nosurat').value = nomorSurat;
    });
</script>

<div class="col-md-6" style="margin-top: 0px;">
    <div>
        <label class="form-label d-flex align-items-center" for="tanggalsurat">
            <i class="fas fa-calendar" style="margin-right: 8px; color: navy;"></i> Tanggal Surat
        </label>
        <input type="date" name="tanggalsurat" id="tanggalsurat"
            class="form-control"
            value="{{ date('Y-m-d') }}" readonly>
    </div>
</div>


<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="nama_pemohon">
            <i class="fas fa-user" style="margin-right: 8px; color: navy;"></i> Nama Pemohon
        </label>
        <input type="text" name="nama_pemohon" id="nama_pemohon"
            class="form-control @error('nama_pemohon') is-invalid @enderror"
            value="{{ old('nama_pemohon') }}">
        @error('nama_pemohon')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="no_telepon">
            <i class="fas fa-phone" style="margin-right: 8px; color: navy;"></i> No Telepon
        </label>
        <input type="text" name="no_telepon" id="no_telepon"
            class="form-control @error('no_telepon') is-invalid @enderror"
            value="{{ old('no_telepon') }}">
        @error('no_telepon')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>

</div>


<div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center" style="margin-top: -100px; margin-bottom: -35px;">
    <i class="fas fa-info-circle me-2"></i>
    <div>
        <strong>Informasi Paket Pekerjaan Bangunan Gedung </strong>
    </div>
</div>


<div class="row mt-3" style="margin-top: 0px;">

    <div class="col-md-6" style="margin-top: 0px;">
        <div>
            <label class="form-label d-flex align-items-center" for="namapaket">
                <i class="fas fa-box" style="margin-right: 8px; color: navy;"></i> Nama Paket
            </label>
            <input type="text" name="namapaket" id="namapaket"
                class="form-control @error('namapaket') is-invalid @enderror"
                value="{{ old('namapaket') }}">
            @error('namapaket')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </div>

<div class="col-md-6" style="margin-top: 0px;">
    <div>
        <label class="form-label d-flex align-items-center" for="kategoribangunan">
            <i class="fas fa-building" style="margin-right: 8px; color: navy;"></i> Kategori Bangunan
        </label>
        <select name="kategoribangunan" id="kategoribangunan"
            class="form-control @error('kategoribangunan') is-invalid @enderror" style="font-size: 15px;">
            <option value="" disabled {{ old('kategoribangunan') ? '' : 'selected' }}>-- Pilih Kategori --</option>
            <option value="GEDUNG KANTOR" {{ old('kategoribangunan') == 'GEDUNG KANTOR' ? 'selected' : '' }}>GEDUNG KANTOR</option>
            <option value="BANGUNAN NEGARA LAINNYA" {{ old('kategoribangunan') == 'BANGUNAN NEGARA LAINNYA' ? 'selected' : '' }}>BANGUNAN NEGARA LAINNYA</option>
            <option value="RUMAH NEGARA" {{ old('kategoribangunan') == 'RUMAH NEGARA' ? 'selected' : '' }}>RUMAH NEGARA</option>
            <option value="PAGAR BANGUNAN GEDUNG KANTOR" {{ old('kategoribangunan') == 'PAGAR BANGUNAN GEDUNG KANTOR' ? 'selected' : '' }}>PAGAR BANGUNAN GEDUNG KANTOR</option>
            <option value="PAGAR BANGUNAN GEDUNG LAINNYA" {{ old('kategoribangunan') == 'PAGAR BANGUNAN GEDUNG LAINNYA' ? 'selected' : '' }}>PAGAR BANGUNAN GEDUNG LAINNYA</option>
            <option value="PAGAR RUMAH NEGARA" {{ old('kategoribangunan') == 'PAGAR RUMAH NEGARA' ? 'selected' : '' }}>PAGAR RUMAH NEGARA</option>
        </select>
        @error('kategoribangunan')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="luasbangunan">
            <i class="fas fa-ruler-combined" style="margin-right: 8px; color: navy;"></i> Luas Bangunan (m²)
        </label>
        <input type="text" name="luasbangunan" id="luasbangunan"
            class="form-control @error('luasbangunan') is-invalid @enderror"
            value="{{ old('luasbangunan') ? number_format(old('luasbangunan'), 0, ',', '.') : '' }}"
            autocomplete="off" inputmode="numeric">
        @error('luasbangunan')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>

<script>
    const luasInput = document.getElementById('luasbangunan');

    function formatRibuan(value) {
        let angka = value.replace(/\D/g, ''); // Hanya angka
        return angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    luasInput.addEventListener('input', () => {
        let cursorPos = luasInput.selectionStart;
        let originalLength = luasInput.value.length;

        let formattedValue = formatRibuan(luasInput.value);

        if (formattedValue !== luasInput.value) {
            luasInput.value = formattedValue;

            let newLength = formattedValue.length;
            cursorPos = cursorPos + (newLength - originalLength);

            // Pastikan posisi cursor tidak keluar dari batas input
            if (cursorPos > newLength) cursorPos = newLength;
            if (cursorPos < 0) cursorPos = 0;

            luasInput.setSelectionRange(cursorPos, cursorPos);
        }
    });

    if (luasInput.form) {
        luasInput.form.addEventListener('submit', function () {
            // Hilangkan titik ribuan saat submit supaya server dapat data bersih
            luasInput.value = luasInput.value.replace(/\./g, '');
        });
    }
</script>


<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="luastanahtotal">
            <i class="fas fa-ruler" style="margin-right: 8px; color: navy;"></i> Luas Tanah Total (m²)
        </label>
        <input type="text" name="luastanahtotal" id="luastanahtotal"
            class="form-control @error('luastanahtotal') is-invalid @enderror"
            value="{{ old('luastanahtotal') ? number_format(old('luastanahtotal'), 0, ',', '.') : '' }}"
            autocomplete="off" inputmode="numeric">
        @error('luastanahtotal')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>

<script>
    const tanahInput = document.getElementById('luastanahtotal');

    function formatRibuan(value) {
        let angka = value.replace(/\D/g, ''); // hanya angka
        return angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    tanahInput.addEventListener('input', () => {
        let cursorPos = tanahInput.selectionStart;
        let originalLength = tanahInput.value.length;

        let formattedValue = formatRibuan(tanahInput.value);

        if (formattedValue !== tanahInput.value) {
            tanahInput.value = formattedValue;

            let newLength = formattedValue.length;
            cursorPos = cursorPos + (newLength - originalLength);

            if(cursorPos > newLength) cursorPos = newLength;
            if(cursorPos < 0) cursorPos = 0;

            tanahInput.setSelectionRange(cursorPos, cursorPos);
        }
    });

    if(tanahInput.form) {
        tanahInput.form.addEventListener('submit', function (e) {
            // Hilangkan titik sebelum submit
            tanahInput.value = tanahInput.value.replace(/\./g, '');
        });
    }
</script>

<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="jumlahlantai">
            <i class="fas fa-layer-group" style="margin-right: 8px; color: navy;"></i> Jumlah Lantai
        </label>
        <select name="jumlahlantai" id="jumlahlantai"
            class="form-control @error('jumlahlantai') is-invalid @enderror"
            style="font-size: 15px;">
            <option value="" disabled {{ old('jumlahlantai') ? '' : 'selected' }}>-- Pilih Jumlah Lantai --</option>
            @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}" {{ old('jumlahlantai') == (string)$i ? 'selected' : '' }}>
                    {{ $i }} lantai
                </option>
            @endfor
            <option value="lebih dari 10" {{ old('jumlahlantai') == 'lebih dari 10' ? 'selected' : '' }}>
                Lebih dari 10 lantai
            </option>
        </select>
        @error('jumlahlantai')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="tinggibangunan">
            <i class="fas fa-arrows-alt-v" style="margin-right: 8px; color: navy;"></i> Tinggi Bangunan (m)
        </label>
        <input type="text" name="tinggibangunan" id="tinggibangunan"
            class="form-control @error('tinggibangunan') is-invalid @enderror"
            value="{{ old('tinggibangunan') ? number_format(old('tinggibangunan'), 0, ',', '.') : '' }}"
            autocomplete="off" inputmode="numeric" pattern="[0-9.]+">
        @error('tinggibangunan')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>

<script>
    const tinggiInput = document.getElementById('tinggibangunan');

    function formatRibuan(value) {
        let angka = value.replace(/\D/g, '');
        return angka.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    tinggiInput.addEventListener('input', () => {
        let cursorPos = tinggiInput.selectionStart;
        let originalLength = tinggiInput.value.length;

        let formattedValue = formatRibuan(tinggiInput.value);

        if (formattedValue !== tinggiInput.value) {
            tinggiInput.value = formattedValue;

            let newLength = formattedValue.length;
            cursorPos = cursorPos + (newLength - originalLength);

            if(cursorPos > newLength) cursorPos = newLength;
            if(cursorPos < 0) cursorPos = 0;

            tinggiInput.setSelectionRange(cursorPos, cursorPos);
        }
    });

    if (tinggiInput.form) {
        tinggiInput.form.addEventListener('submit', function () {
            tinggiInput.value = tinggiInput.value.replace(/\./g, '');
        });
    }
</script>


    <div class="col-md-6" style="margin-top: 15px;">
        <div>
            <label class="form-label d-flex align-items-center" for="bassement">
                <i class="fas fa-warehouse" style="margin-right: 8px; color: navy;"></i> Ada Bassement?
            </label>
            <select name="bassement" id="bassement" class="form-control @error('bassement') is-invalid @enderror" style="font-size: 15px;>
                <option value="">-- Pilih --</option>
                <option value="1" {{ old('bassement') == 1 ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ old('bassement') == 0 ? 'selected' : '' }}>Tidak</option>
            </select>
            @error('bassement')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </div>
<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="kepemilikan">
            <i class="fas fa-id-card" style="margin-right: 8px; color: navy;"></i> Kepemilikan
        </label>
        <select name="kepemilikan" id="kepemilikan"
            class="form-control @error('kepemilikan') is-invalid @enderror">
            <option value="" disabled {{ old('kepemilikan') ? '' : 'selected' }}>-- Pilih Jenis Kepemilikan --</option>
            <option value="SERTIFIKAT HAK MILIK" {{ old('kepemilikan') == 'SERTIFIKAT HAK MILIK' ? 'selected' : '' }}>SERTIFIKAT HAK MILIK</option>
            <option value="SERTIFIKAT HAK GUNA BANGUNAN" {{ old('kepemilikan') == 'SERTIFIKAT HAK GUNA BANGUNAN' ? 'selected' : '' }}>SERTIFIKAT HAK GUNA BANGUNAN</option>
            <option value="SERTIFIKAT HAK PAKAI" {{ old('kepemilikan') == 'SERTIFIKAT HAK PAKAI' ? 'selected' : '' }}>SERTIFIKAT HAK PAKAI</option>
        </select>
        @error('kepemilikan')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="tahunpembangunan">
            <i class="fas fa-calendar-plus" style="margin-right: 8px; color: navy;"></i> Tahun Pembangunan
        </label>
        <input type="number" name="tahunpembangunan" id="tahunpembangunan"
            class="form-control @error('tahunpembangunan') is-invalid @enderror"
            value="{{ old('tahunpembangunan') }}" autocomplete="off" >
        @error('tahunpembangunan')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="col-md-6" style="margin-top: 15px;">
    <div>
        <label class="form-label d-flex align-items-center" for="tahunrenovasi">
            <i class="fas fa-tools" style="margin-right: 8px; color: navy;"></i> Tahun Renovasi (jika ada)
        </label>
        <input type="number" name="tahunrenovasi" id="tahunrenovasi"
            class="form-control @error('tahunrenovasi') is-invalid @enderror"
            value="{{ old('tahunrenovasi') }}" autocomplete="off" >
        @error('tahunrenovasi')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>
</div>


<script>
    function limitLength(input, maxLength) {
        input.addEventListener('input', () => {
            if (input.value.length > maxLength) {
                input.value = input.value.slice(0, maxLength);
            }
        });
    }

    limitLength(document.getElementById('tahunpembangunan'), 4);
    limitLength(document.getElementById('tahunrenovasi'), 4);
</script>
</div>


<div style="margin-top: 10px; margin-bottom: 30px;">
    <label class="form-label d-flex align-items-center" for="dinas_id">
        <i class="fas fa-map-pin" style="margin-right: 8px; color: navy;"></i> Daftar Dinas Kabupaten Blora
    </label>
    <select id="dinas_id" name="dinas_id" class="form-control w-100 @error('dinas_id') is-invalid @enderror" style="font-size: 15px;">
        <option value="">-- Pilih Dinas --</option>
        @foreach ($statusadimindinas as $admin)
            <option value="{{ $admin->id }}" {{ old('dinas_id') == $admin->id ? 'selected' : '' }}>
                {{ $admin->name }}
            </option>
        @endforeach
    </select>
    @error('dinas_id')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>


<div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center" style="margin-top: -100px;">
    <i class="fas fa-info-circle me-2"></i>
    <div>
        <strong>Informasi Lokasi Bangunan Gedung Pemohon </strong>
    </div>
</div>

<div class="row mt-3" style="margin-top: -25px;">
<!-- RT/RW -->
<div class="row mt-3" style="margin-top: -40px;">



<div class="row mt-3">
    <!-- Jumlah Lantai -->
       <!-- RT -->
    <div class="col-md-4" style="margin-top: -40px;">
        <label class="form-label d-flex align-items-center" for="rt">
            <i class="fas fa-hashtag" style="margin-right: 8px; color: navy;"></i> RT
        </label>
        <select name="rt" id="rt" class="form-control @error('rt') is-invalid @enderror">
            <option value="" style="font-size: 14px;">-- Pilih RT --</option>
            @for ($i = 1; $i <= 25; $i++)
                <option value="{{ $i }}" style="font-size:14px;" {{ old('rt') == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        @error('rt')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <!-- RW -->
    <div class="col-md-4" style="margin-top: 12px;">
        <label class="form-label d-flex align-items-center" for="rw">
            <i class="fas fa-hashtag" style="margin-right: 8px; color: navy;"></i> RW
        </label>
        <select name="rw" id="rw" class="form-control @error('rw') is-invalid @enderror">
            <option value="" style="font-size: 16px;">-- Pilih RW --</option>
            @for ($i = 1; $i <= 25; $i++)
                <option value="{{ $i }}" {{ old('rw') == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        @error('rw')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>

     <div class="col-md-4" style="margin-top: 12px; margin-bottom: 0px;">
        <label class="form-label d-flex align-items-center" for="kabupaten">
            <i class="fas fa-map" style="margin-right: 8px; color: navy;"></i> Kabupaten
        </label>
        <select name="kabupaten" id="kabupaten" class="form-control" readonly disabled>
            <option value="kabupaten blora" selected style="font-size: 14px;">Kabupaten Blora</option>
        </select>
        <input type="hidden" name="kabupaten" value="kabupaten blora" style="font-size: 16px;">
    </div>

</div>


<div class="row mt-3">
    <!-- Kabupaten (dikunci) -->

<!-- Kecamatan (dinamis dari controller) -->
<div class="col-md-4" style="margin-top: 10px; margin-bottom: 0px;">
    <label class="form-label d-flex align-items-center" for="kecamatanblora_id">
        <i class="fas fa-map-pin" style="margin-right: 8px; color: navy;"></i> Kecamatan
    </label>
    <select name="kecamatanblora_id" id="kecamatanblora_id" class="form-control @error('kecamatanblora_id') is-invalid @enderror">
        <option value="" style="font-size:14px;">Pilih Kecamatan</option>
        @foreach($datakecamatan as $kecamatan)
            <option value="{{ $kecamatan->id }}" style="text-transform: capitalize; font-size:14px;"
                {{ old('kecamatanblora_id') == $kecamatan->id ? 'selected' : '' }}>
                {{ $kecamatan->kecamatanblora }}
            </option>
        @endforeach
    </select>
    @error('kecamatanblora_id')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>

<!-- Kelurahan/Desa -->
<div class="col-md-4" style="margin-top: 10px;">
    <label for="kelurahandesa_id" class="form-label d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z"/>
            <path d="M12 22s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z"/>
        </svg>
        Kelurahan/Desa
    </label>
    <select id="kelurahandesa_id" name="kelurahandesa_id" class="form-control @error('kelurahandesa_id') is-invalid @enderror">
        <option value="" style="font-size: 14px;">Pilih Kelurahan/Desa</option>
    </select>
    @error('kelurahandesa_id')
        <div class="invalid-feedback" style="color: red; font-size:14px;">{{ $message }}</div>
    @enderror
</div>

</div>

<!-- Script untuk AJAX Kelurahan/Desa -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#kecamatanblora_id').on('change', function () {
        var kecamatanID = $(this).val();
        if (kecamatanID) {
            $.ajax({
                url: '{{ route("permohonan.krkhunian") }}', // Sesuaikan dengan route di controller
                type: 'GET',
                data: { kecamatan_id: kecamatanID },
                success: function (data) {
                    $('#kelurahandesa_id').empty().append('<option value="">Pilih Kelurahan/Desa</option>');
                    $.each(data, function (key, value) {
                        $('#kelurahandesa_id').append('<option value="' + value.id + '">' + value.desa + '</option>');
                    });
                }
            });
        } else {
            $('#kelurahandesa_id').empty().append('<option value="">Pilih Kelurahan/Desa</option>');
        }
    });
</script>

<div style="margin-top: 10px;">
    <label class="form-label d-flex align-items-center" for="alamatlokasi">
        <i class="fas fa-map-pin" style="margin-right: 8px; color: navy;"></i> Lokasi Bangunan Gedung
    </label>
    <input type="text" id="alamatlokasi" name="alamatlokasi" placeholder="Lokasi Bangunan Gedung"
        class="form-control @error('alamatlokasi') is-invalid @enderror"
        value="{{ old('alamatlokasi') }}"
        style="margin-bottom: -25px;"/>
    @error('alamatlokasi')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>

<div style="margin-top: 40px; margin-bottom: 40px;" >
    <label class="form-label d-flex align-items-center" for="pengelola">
        <i class="fas fa-map-pin" style="margin-right: 8px; color: navy;"></i> Pengelola Bangunan Gedung
    </label>
    <input type="text" id="pengelola" name="pengelola" placeholder="Pengelola Bangunan Gedung"
        class="form-control @error('pengelola') is-invalid @enderror"
        value="{{ old('pengelola') }}"
        style="margin-bottom: -25px;"/>
    @error('pengelola')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>

<div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center" style="margin-top: 400px;">
    <i class="fas fa-info-circle me-2"></i>
    <div>
        <strong>Berkas Kelengkapan Dokumen Permohonan Bantuan Teknis  </strong>
    </div>
</div>


<div class="flex flex-col gap-4 w-full mt-4 items-center">
    <!-- Surat Permohonan -->
    <div class="flex flex-col w-full sm:w-2/3" style="margin-top:15px;">
        <label for="suratpermohonan" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14M5 11h14M5 15h10M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
            </svg>
            <span class="text-sm">Surat Permohonan <br> File jpg/jpeg/pdf Max 5MB</span>
        </label>

        <input id="suratpermohonan" name="suratpermohonan" type="file" accept="image/*,application/pdf"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('suratpermohonan') border-red-500 @enderror"
            onchange="previewFile(this, 'suratpermohonanPreview')" />

        <div id="suratpermohonanPreview" class="mt-2"></div>

        @error('suratpermohonan')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>

    <!-- KIC -->
    <div class="flex flex-col w-full sm:w-2/3" style="margin-top:15px;">
        <label for="kic" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm">Kartu Inventaris Barang <br> File .pdf / image Max 5Mb</span>
        </label>

        <input id="kic" name="kic" type="file" accept="application/pdf,image/*"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('kic') border-red-500 @enderror"
            onchange="previewFile(this, 'kicPreview')" />

        <div id="kicPreview" class="mt-2">
            @if(session('kic_temp'))
                <div class="mt-1 text-sm text-gray-700">
                    <a href="{{ Storage::url(session('kic_temp')) }}" target="_blank" class="text-blue-500 underline">Lihat file sebelumnya</a>
                </div>
            @elseif(old('kic'))
                <div class="mt-1 text-sm text-gray-700">
                    File sudah dipilih: {{ old('kic') }}
                </div>
            @endif
        </div>

        @error('kic')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Foto Kondisi -->
    <div class="flex flex-col w-full sm:w-2/3" style="margin-top:15px;">
        <label for="fotokondisi" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 2v20h12V2H6zm4 12H8v-2h2v2zm4-2h-2v2h2v-2zm2-6H8V4h8v4z" />
            </svg>
            <span class="text-sm">Foto Kondisi <br> File Pdf Max 5Mb</span>
        </label>

        <input id="fotokondisi" name="fotokondisi" type="file" accept="application/pdf"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('fotokondisi') border-red-500 @enderror"
            onchange="previewFile(this, 'fotokondisiPreview')" />

        <div id="fotokondisiPreview" class="mt-1">
            @if(session('fotokondisi_temp'))
                <div class="mt-1 text-sm text-gray-700">
                    <a href="{{ Storage::url(session('fotokondisi_temp')) }}" target="_blank" class="text-blue-500 underline">
                        Lihat File PDF
                    </a>
                </div>
            @elseif(old('fotokondisi'))
                <div class="mt-1 text-sm text-gray-700">
                    File sudah dipilih: {{ old('fotokondisi') }}
                </div>
            @endif
        </div>
            <p style="font-size: 12px;">Keterangan : Gabungkan Semua Foto dan Merge menjadi .pdf</p>

        @error('fotokondisi')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>
</div>

<script>
    function previewFile(input, previewId) {
        const file = input.files[0];
        const preview = document.getElementById(previewId);

        if (!preview) {
            console.error(`Elemen dengan ID '${previewId}' tidak ditemukan.`);
            return;
        }

        preview.innerHTML = '';

        if (file) {
            const fileType = file.type;
            const reader = new FileReader();

            reader.onload = function (e) {
                if (fileType.startsWith('image/')) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'mt-2 rounded-md';
                    img.style.maxWidth = '100%';
                    img.style.maxHeight = '250px';
                    preview.appendChild(img);
                } else if (fileType === 'application/pdf') {
                    const iframe = document.createElement('iframe');
                    iframe.src = e.target.result;
                    iframe.className = 'mt-2 rounded-md';
                    iframe.style.width = '100%';
                    iframe.style.height = '400px';
                    iframe.allow = "autoplay";
                    preview.appendChild(iframe);
                } else {
                    preview.innerHTML = '<p class="text-red-500 text-sm">Format file tidak didukung untuk preview.</p>';
                }
            };

            reader.onerror = function (e) {
                preview.innerHTML = '<p class="text-red-500 text-sm">Gagal membaca file.</p>';
            };

            reader.readAsDataURL(file);
        }
    }
</script>

    <div class="flex justify-end" style="margin-top: 20px;">
        <button type="button" class="btn-submit" onclick="openModal()">
            <i class="fab fa-telegram-plane w-5 h-5"></i>
            Kirim Permohonan
        </button>
    </div>
<!-- Modal Konfirmasi -->
<div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
        Apakah Anda yakin dengan permohonan Anda?
      </p>

      <!-- Checkbox -->
      <div style="display: flex; align-items: center; margin-bottom: 16px;">
        <input type="checkbox" id="dataConfirm" style="margin-right: 8px;" onchange="toggleSubmitButton()">
        <label for="dataConfirm" style="font-size: 14px; color: #6b7280; flex-grow: 1; text-align: justify;">
          Saya menyatakan bahwa data persyaratan yang saya kirim adalah sebenar-benarnya dan dapat dipertanggungjawabkan.
        </label>
      </div>

      <!-- Tombol -->
      <div style="display: flex; justify-content: center; gap: 12px;">
        <button id="confirmSubmitBtn"
                onclick="submitForm()"
                disabled
                class="btn-kirim"
                style="background-color: #f97316; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: not-allowed;">
          Ya, Kirim
        </button>
        <button type="button"
                onclick="closeModal()"
                class="btn-cancel-hover"
                style="background-color: #9CA3AF; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer;">
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

    function submitForm() {
    // Cek apakah checkbox dicentang
    const dataConfirm = document.getElementById("dataConfirm");
    if (!dataConfirm.checked) {
    alert("Anda harus menyatakan bahwa data yang Anda kirim adalah benar.");
    return;
    }
    // Ganti ID form sesuai dengan form kamu
    document.getElementById("formKRK").submit();
    }
    </script>

<script>
    function toggleSubmitButton() {
        const checkbox = document.getElementById("dataConfirm");
        const btn = document.getElementById("confirmSubmitBtn");

        if (checkbox.checked) {
            btn.disabled = false;
            btn.style.backgroundColor = "#2563eb";
            btn.style.cursor = "pointer";
        } else {
            btn.disabled = true;
            btn.style.backgroundColor = "#f97316";
            btn.style.cursor = "not-allowed";
        }
    }
    </script>



        <div class="flex justify-end w-full gap-4" style="margin-top: -20px;">
        <style>
        .btn-reset, .btn-submit {
            display: flex;
            align-items: center;
            padding: 10px 16px;
            border-radius: 10px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-reset {
            background-color: #dc2626; /* merah */
            color: white;
        }

        .btn-reset:hover {
            background-color: white;
            color: #dc2626;
            border: 1px solid #dc2626;
        }

        .btn-submit {
            background-color: #2563eb; /* biru */
            color: white;
        }

        .btn-submit:hover {
            background-color: white;
            color: #2563eb;
            border: 1px solid #2563eb;
        }

        .btn-reset i,
        .btn-submit i {
            margin-right: 8px;
        }
        </style>



</div>
</div>



                {{-- <button type="submit" class="bg-blue-600 px-4 py-2 rounded" style="color: black;">Kirim Permohonan</button> --}}

            </form>

            <style>
                .error-message {
        font-size: 0.875rem;
        color: #e3342f; /* Atau kamu bisa sesuaikan dengan warna branding kamu */
        margin-top: 4px;
        display: block;
    }

            </style>


        </div>
    </div>
    </section>
</section>

        </div>



      @include('frontend.android.00_fiturmenu.05_keterangan')


    </div>

    @include('frontend.android.00_fiturmenu.03_android')

  </section>

  @include('frontend.android.00_fiturmenu.02_footer')


