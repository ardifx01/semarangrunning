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

@include('frontend.abgblora.00_fiturmenu.02_header')
@include('frontend.abgblora.00_fiturmenu.05_menunavigasweb')
@include('backend.00_administrator.00_baganterpisah.09_button')

<section
    id="breadcrumb"
       style="
    background: linear-gradient(to bottom, #7de3f1, #ffffff);
    margin: 0;
    padding: 0;
    position: relative;
    left: 0;
    "
>

<section id="breadcrumb" class="container max-w-[1130px] mx-auto" style="margin-top: 145px;">
    <div class="flex items-center gap-[20px]">
      <!-- Gambar di kiri -->
      {{-- <img src="/assets/abgblora/logo/iconabgblora.png" alt="" class="w-[60px] -my-[15px]" width="10%" style="margin-right: 20px;"> --}}

      <!-- Breadcrumb di kanan -->
      <div class="flex gap-[30px] items-center flex-wrap">
        <span>/</span>
        {{-- <a href="/permohonankrk" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: blue;">
         {{$title}}
        </a> --}}
      </div>
    </div>

  </section>



<section id="header" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-2" style="margin-top:10px;">


  </section>


 <section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row gap-5">
     @include('frontend.abgblora.06_permohonankrk.02_permohonankrkpemohon.00_menufungsibangunan')

     <div class="flex flex-col gap-5 w-full" style="margin-top: -25px;">
            <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
                    <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Form KRK <span style="color: #0fb825;"> Fungsi Keagamaan</span> Bangunan Gedung </span>
                </p>
            </div>
            <form id="signatureForm" action="{{ route('permohonan.krkagamacreate') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                @csrf


                <input type="hidden" name="user_id" value="{{ $user->id }}">

<div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center" style="margin-top: -100px; margin-bottom: -35px;">
    <i class="fas fa-info-circle me-2"></i>
    <div>
        <strong>Informasi Data Diri Pemohon KRK </strong>
    </div>
</div>



<!-- Perorangan -->
<div style="margin-top:-25px;">
    <label class="form-label d-flex align-items-center" for="perorangan">
        <i class="fas fa-user" style="margin-right: 8px; color: navy;"></i> Perorangan
    </label>
    <input type="text" id="perorangan" name="perorangan" placeholder="Masukan Nama Pemilik/Pemohon"
        class="form-control @error('perorangan') is-invalid @enderror"
        value="{{ old('perorangan') }}" />
    @error('perorangan')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>

<!-- Perusahaan -->
<div style="margin-top:-25px;">
    <label class="form-label d-flex align-items-center" for="perusahaan">
        <i class="fas fa-building" style="margin-right: 8px; color: navy;"></i> Perusahaan
    </label>
    <input type="text" id="perusahaan" name="perusahaan" placeholder="Masukan Nama Perusahaan Pemohon/Pemilik"
        class="form-control @error('perusahaan') is-invalid @enderror"
        value="{{ old('perusahaan') }}" />
    @error('perusahaan')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>

<div class="position-relative" style="height: 100%; min-height: 500px; margin-top:-40px;" >
    <!-- Label Koordinat -->
    <div class="container py-4">
        <div class="petablota">
          <!-- Label -->
          <div class="mb-3">
            <label class="form-label d-flex align-items-center fw-bold text-primary">
              <i class="fas fa-map-marker-alt me-2"></i>
              Pilih Koordinat Lokasi di Kabupaten Blora
            </label>
          </div>

          <!-- Peta -->
          <div class="petablota-map-container">
            <div id="map"></div>
            <div id="map-loader">
              <div class="spinner-border text-primary" role="status"></div>
            </div>
          </div>

          <!-- Info Koordinat -->
          <div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center">
            <i class="fas fa-info-circle me-2"></i>
            <div>
              <strong>Lokasi Terpilih: </strong>
              <span id="koordinat" class="text-danger ms-1">Belum memilih lokasi</span>
            </div>
          </div>

          <!-- Input -->
          <div class="mt-3">
            <input type="text"
                   id="koordinatlokasi"
                   name="koordinatlokasi"
                   class="form-control form-control-lg"
                   placeholder="Koordinat akan muncul di sini"
                   readonly
                   value="{{old('koordinatlokasi')}}"
                   style="font-family: monospace; margin-bottom:-75px;">

                       @error('koordinatlokasi')
                           <div class="invalid-feedback d-block mt-2">{{ $message }}</div>
                       @enderror
          </div>
        </div>
      </div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const loader = document.getElementById('map-loader');
    loader.style.display = 'block';

    const map = L.map('map').setView([-6.967, 111.420], 11); // Fokus ke Kab. Blora

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© Hak Cipta | Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah',
    }).addTo(map);

    let marker = null;

    map.on('click', function (e) {
        const lat = e.latlng.lat.toFixed(6);
        const lng = e.latlng.lng.toFixed(6);

        document.getElementById("koordinat").innerHTML = `<span class="text-success">${lat}, ${lng}</span>`;
        document.getElementById("koordinatlokasi").value = `${lat},${lng}`;

        if (marker) {
            marker.setLatLng(e.latlng).openPopup();
        } else {
            marker = L.marker(e.latlng, {
                icon: L.icon({
                    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34]
                })
            }).addTo(map).openPopup();
        }

        marker.bindPopup(`<strong>Lokasi Terpilih</strong><br>${lat}, ${lng}`);
    });

    map.whenReady(() => {
        loader.style.display = 'none';
        map.invalidateSize();
    });
});
</script>

<div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center" style="margin-top: -100px;">
    <i class="fas fa-info-circle me-2"></i>
    <div>
        <strong>Informasi Bangunan Gedung Pemohon </strong>
    </div>
</div>

<div class="row mt-3" style="margin-top: -25px;">
    <div class="col-md-6" style="margin-top: -40px;">
        <div>
            <label class="form-label d-flex align-items-center" for="nik">
                <i class="fas fa-user" style="margin-right: 8px; color: navy;"></i> (NIK)/KTP/<span style="color: red;">KITAS**</span>
            </label>
            <input type="number" name="nik" id="nik" placeholder="Nomor Induk Kependudukan"
                class="form-control @error('nik') is-invalid @enderror"
                value="{{ old('nik') }}"
                maxlength="16"
                oninput="this.value=this.value.slice(0,16)">
            @error('nik')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-6" style="margin-top: -40px;">
        <div>
            <label class="form-label d-flex align-items-center" for="rw">
                <i class="fas fa-calendar" style="margin-right: 8px; color: navy;"></i> Tanggal Permohonan
            </label>
            <input type="date" name="tanggalpermohonan" id="tanggalpermohonan" placeholder="Tanggal Permohonan"
                class="form-control @error('tanggalpermohonan') is-invalid @enderror"
                value="{{ old('tanggalpermohonan') }}">
            @error('tanggalpermohonan')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
<!-- NIK -->

<!-- RT/RW -->
<div class="row mt-3" style="margin-top: -40px;">
    <div class="col-md-6" style="margin-top: -40px;">
        <div>
            <label class="form-label d-flex align-items-center" for="rt">
                <i class="fas fa-phone" style="margin-right: 8px; color: navy;"></i> No Whatsapp
            </label>
            <input type="number" name="notelepon" id="notelepon" placeholder="No Telepon"
                class="form-control @error('notelepon') is-invalid @enderror"
                value="{{ old('notelepon') }}">
            @error('notelepon')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-6" style="margin-top: -40px;">
        <div>
            <label class="form-label d-flex align-items-center" for="luastanah_display">
                <i class="fas fa-ruler-combined" style="margin-right: 8px; color: navy;"></i> Luas Tanah M<sup>2</sup>
            </label>

            <!-- Input tampilan -->
            <input type="text" id="luastanah_display" placeholder="Luas Tanah"
                   class="form-control"
                   oninput="formatRibuan(this)" />

            <!-- Input sebenarnya dikirim ke server -->
            <input type="hidden" name="luastanah" id="luastanah"
                   value="{{ old('luastanah') }}">

            @error('luastanah')
                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <script>
    function formatRibuan(input) {
        let rawValue = input.value.replace(/[^\d]/g, ''); // Hanya angka
        if (rawValue) {
            input.value = rawValue.replace(/\B(?=(\d{3})+(?!\d))/g, ","); // Format ribuan
        } else {
            input.value = '';
        }

        // Set nilai hidden input tanpa koma
        document.getElementById('luastanah').value = rawValue;
    }
    </script>

</div>



<div class="row mt-3">
    <!-- Jumlah Lantai -->
    <div class="col-md-4" style="margin-top: -40px;">
        <label class="form-label d-flex align-items-center" for="jumlahlantai">
            <i class="fas fa-building" style="margin-right: 8px; color: navy;"></i> Jumlah Lantai
        </label>
        <select name="jumlahlantai" id="jumlahlantai"
            class="form-control @error('jumlahlantai') is-invalid @enderror">
            <option value="" style="font-size:14px;"><span style="font-size:14px;">-- Pilih Jumlah Lantai --</span></option>
            @for ($i = 1; $i <= 8; $i++)
                <option value="{{ $i }}" style="font-size:14px;" {{ old('jumlahlantai') == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
            <option value="lebih_dari_8" style="font-size:14px;" {{ old('jumlahlantai') == 'lebih_dari_8' ? 'selected' : '' }}>Lebih dari 8</option>
        </select>
        @error('jumlahlantai')
            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
        @enderror
    </div>

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
    <div class="col-md-4" style="margin-top: -40px;">
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
</div>


<div class="row mt-3">
    <!-- Kabupaten (dikunci) -->
    <div class="col-md-4" style="margin-top: -40px; margin-bottom: -40px;">
        <label class="form-label d-flex align-items-center" for="kabupaten">
            <i class="fas fa-map" style="margin-right: 8px; color: navy;"></i> Kabupaten
        </label>
        <select name="kabupaten" id="kabupaten" class="form-control" readonly disabled>
            <option value="kabupaten blora" selected style="font-size: 14px;">Kabupaten Blora</option>
        </select>
        <input type="hidden" name="kabupaten" value="kabupaten blora" style="font-size: 16px;">
    </div>
<!-- Kecamatan (dinamis dari controller) -->
<div class="col-md-4" style="margin-top: -40px; margin-bottom: -40px;">
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
<div class="col-md-4" style="margin-top: -40px;">
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
                url: '{{ route("permohonan.krkagama") }}', // Sesuaikan dengan route di controller
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

<div style="margin-top: -25px;">
    <label class="form-label d-flex align-items-center" for="lokasibangunan">
        <i class="fas fa-map-pin" style="margin-right: 8px; color: navy;"></i> Lokasi Bangunan Gedung
    </label>
    <input type="text" id="lokasibangunan" name="lokasibangunan" placeholder="Lokasi Bangunan Gedung"
        class="form-control @error('lokasibangunan') is-invalid @enderror"
        value="{{ old('lokasibangunan') }}"
        style="margin-bottom: 0px;"/>
    @error('lokasibangunan')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>

<div style="margin-top: -15px;">
    <label class="form-label d-flex align-items-center" for="alamatpemohon">
        <i class="fas fa-map-pin" style="margin-right: 8px; color: navy;"></i> Alamat Lengkap Pemohon
    </label>
    <input type="text" id="alamatpemohon" name="alamatpemohon" placeholder="Alamat Lengkap Pemohon"
        class="form-control @error('alamatpemohon') is-invalid @enderror"
        value="{{ old('alamatpemohon') }}"
        style="margin-bottom: 0px;"/>
    @error('alamatpemohon')
        <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
    @enderror
</div>


<div class="alert alert-primary mt-3 mb-2 py-2 d-flex align-items-center" style="margin-top: -40px;">
    <i class="fas fa-info-circle me-2"></i>
    <div>
        <strong>Berkas Kelengkapan Dokumen Pemohon  </strong>
    </div>
</div>


<div class="flex gap-4 w-full mt-4">
    <!-- KTP -->
    <div class="flex flex-col w-1/3" style="margin-top:-60px;">
    <label for="ktp" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
        <!-- Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 7h14M5 11h14M5 15h10M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
        </svg>
        <span class="text-sm">KTP | File  <br> jpg, jpeg, png, pdf | Max 10MB</span>
    </label>

    <input id="ktp" name="ktp" type="file"
        accept=".jpg,.jpeg,.png,.pdf"
        class="border border-[#ccc] rounded-md p-2 mb-2 @error('ktp') border-red-500 @enderror"
        onchange="previewFile(this, 'ktpPreview')" />

    <div id="ktpPreview" class="mt-1">
        @if(session('ktp_temp'))
            <div class="mt-1 text-sm text-gray-700">
                <a href="{{ Storage::url(session('ktp_temp')) }}" target="_blank" class="text-blue-500 underline">
                    Lihat File Terunggah
                </a>
            </div>
        @elseif(old('ktp'))
            <div class="mt-1 text-sm text-gray-700">
                File sudah dipilih: {{ old('ktp') }}
            </div>
        @endif
    </div>

    @error('ktp')
        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>

    <!-- NPWP -->
<div class="flex flex-col w-1/3" style="margin-top:-60px;">
    <label for="npwp" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
        <!-- Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 2v20h12V2H6zm4 12H8v-2h2v2zm4-2h-2v2h2v-2zm2-6H8V4h8v4z" />
        </svg>
        <span class="text-sm">NPWP | File <br> jpg, jpeg, png, pdf | Max 10MB</span>
    </label>

    <input id="npwp" name="npwp" type="file"
        accept=".jpg,.jpeg,.png,.pdf"
        class="border border-[#ccc] rounded-md p-2 mb-2 @error('npwp') border-red-500 @enderror"
        onchange="previewFile(this, 'npwpPreview')" />

    <div id="npwpPreview" class="mt-1">
        @if(session('npwp_temp'))
            <div class="text-sm text-gray-700">
                <a href="{{ Storage::url(session('npwp_temp')) }}" target="_blank" class="text-blue-500 underline">
                    Lihat File Terunggah
                </a>
            </div>
        @elseif(old('npwp'))
            <div class="text-sm text-gray-700">
                File sudah dipilih: {{ old('npwp') }}
            </div>
        @endif
    </div>

    @error('npwp')
        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>

    <!-- Sertifikat Tanah -->
    <div class="flex flex-col w-1/3" style="margin-top:-60px;">
        <label for="sertifikattanah" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm">Sertifikat Tanah | File  <br> .pdf | Max 10 MB</span>
        </label>
        <input id="sertifikattanah" name="sertifikattanah" type="file" accept="application/pdf,image/*"
            value="{{ old('sertifikattanah') }}"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('sertifikattanah') border-red-500 @enderror"
            onchange="previewFile(this, 'sertifikatTanahPreview')" />
        <div id="sertifikatTanahPreview" class="mt-1">
            @if(session('sertifikattanah_temp'))
                <div class="mt-1 text-sm text-gray-700">
                    {{-- File sudah diunggah: --}}
                    <a href="{{ Storage::url(session('sertifikattanah_temp')) }}" target="_blank" class="text-blue-500 underline"></a>
                </div>
            @elseif(old('sertifikattanah'))
                <div class="mt-1 text-sm text-gray-700">
                    File sudah dipilih: {{ old('sertifikattanah') }}
                </div>
            @endif
        </div>
        @error('sertifikattanah')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="flex gap-4 w-full mt-4" style="margin-top: -200px;">
    <!-- Lampiran OSS -->
    <div class="flex flex-col w-1/3" style="margin-top:-60px;">
        <label for="lampiranoss" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14M5 11h14M5 15h10M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
            </svg>
            <span class="text-sm">FKUB Kemenag Kab Blora | File  <br> .pdf | Max 10 MB</span>
        </label>
        <input id="lampiranoss" name="lampiranoss" type="file" accept="image/*,application/pdf"
            value="{{ old('lampiranoss') }}"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('lampiranoss') border-red-500 @enderror"
            onchange="previewFile(this, 'lampiranossPreview')" />
        <div id="lampiranossPreview" class="mt-1">
            @if(session('lampiranoss_temp'))
                <div class="mt-1 text-sm text-gray-700">
                    {{-- File sudah diunggah: --}}
                    <a href="{{ Storage::url(session('lampiranoss_temp')) }}" target="_blank" class="text-blue-500 underline"></a>
                </div>
            @elseif(old('lampiranoss'))
                <div class="mt-1 text-sm text-gray-700">
                    File sudah dipilih: {{ old('lampiranoss') }}
                </div>
            @endif
        </div>
        @error('lampiranoss')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Bukti PBB -->
    <div class="flex flex-col w-1/3" style="margin-top:-60px;">
        <label for="buktipbb" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 2v20h12V2H6zm4 12H8v-2h2v2zm4-2h-2v2h2v-2zm2-6H8V4h8v4z" />
            </svg>
            <span class="text-sm">Bukti PBB | File <br> .pdf | Max 10 MB </span>
        </label>
        <input id="buktipbb" name="buktipbb" type="file" accept="image/*,application/pdf"
            value="{{ old('buktipbb') }}"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('buktipbb') border-red-500 @enderror"
            onchange="previewFile(this, 'buktipbbPreview')" />
        <div id="buktipbbPreview" class="mt-1">
            @if(session('buktipbb_temp'))
                <div class="mt-1 text-sm text-gray-700">
                    {{-- File sudah diunggah: --}}
                    <a href="{{ Storage::url(session('buktipbb_temp')) }}" target="_blank" class="text-blue-500 underline"></a>
                </div>
            @elseif(old('buktipbb'))
                <div class="mt-1 text-sm text-gray-700">
                    File sudah dipilih: {{ old('buktipbb') }}
                </div>
            @endif
        </div>
        @error('buktipbb')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>

    <!-- Dok Validasi DPUPR -->
    <div class="flex flex-col w-1/3" style="margin-top:-60px;">
        <label for="dokvalidasi" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm">Dok Validasi DPUPR | File  <br> .pdf | Max 10 MB </span>
        </label>
        <input id="dokvalidasi" name="dokvalidasi" type="file" accept="application/pdf,image/*"
            value="{{ old('dokvalidasi') }}"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('dokvalidasi') border-red-500 @enderror"
            onchange="previewFile(this, 'dokvalidasiPreview')" />
        <div id="dokvalidasiPreview" class="mt-1">
            @if(session('dokvalidasi_temp'))
                <div class="mt-1 text-sm text-gray-700">
                    {{-- File sudah diunggah: --}}
                    <a href="{{ Storage::url(session('dokvalidasi_temp')) }}" target="_blank" class="text-blue-500 underline"></a>
                </div>
            @elseif(old('dokvalidasi'))
                <div class="mt-1 text-sm text-gray-700">
                    File sudah dipilih: {{ old('dokvalidasi') }}
                </div>
            @endif
        </div>
        @error('dokvalidasi')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>
</div>

    <!-- Sertifikat Tanah -->
<!-- Sertifikat Tanah dan Tanda Tangan dalam 1 baris -->
<div class="flex flex-row gap-6 w-full">
    <div class="flex flex-col w-1/3" style="margin-top:-40px;">
        <label for="siteplan" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm">Site Plan | File <br> .pdf | Max 10 MB </span>
        </label>
        <input id="siteplan" name="siteplan" type="file" accept="application/pdf,image/*" style="margin-right:25px;"
            value="{{ old('siteplan') }}"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('siteplan') border-red-500 @enderror"
            onchange="previewFile(this, 'siteplanPreview')" />
        <div id="siteplanPreview" class="mt-1">
            @if(session('siteplan_temp'))
                <div class="mt-1 text-sm text-gray-700">
                    {{-- File sudah diunggah: --}}
                    <a href="{{ Storage::url(session('siteplan_temp')) }}" target="_blank" class="text-blue-500 underline"></a>
                </div>
            @elseif(old('siteplan'))
                <div class="mt-1 text-sm text-gray-700">
                    File sudah dipilih: {{ old('siteplan') }}
                </div>
            @endif
        </div>
        @error('siteplan')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="flex flex-col w-1/3" style="margin-top:-40px;">
        <label for="siteplan" class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm">Upload Tanda Tangan | File <br> jpg, jpeg, .pdf Max 10 MB </span>
        </label>
        <input id="tandatangan" name="tandatangan" type="file" accept="application/pdf,image/*" style="margin-right:25px;"
            value="{{ old('tandatangan') }}"
            class="border border-[#ccc] rounded-md p-2 mb-2 @error('tandatangan') border-red-500 @enderror"
            onchange="previewFile(this, 'tandatanganPreview')" />
        <div id="tandatanganPreview" class="mt-1">
            @if(session('tandatangan_temp'))
                <div class="mt-1 text-sm text-gray-700">
                    {{-- File sudah diunggah: --}}
                    <a href="{{ Storage::url(session('tandatangan_temp')) }}" target="_blank" class="text-blue-500 underline"></a>
                </div>
            @elseif(old('tandatangan'))
                <div class="mt-1 text-sm text-gray-700">
                    File sudah dipilih: {{ old('tandatangan') }}
                </div>
            @endif
        </div>
        @error('tandatangan')
            <div class="text-red-600 text-sm mt-1" style="color: red; font-size:14px;">{{ $message }}</div>
        @enderror
    </div>

    </div>


{{--
    <div class="flex flex-col w-full md:w-1/2 mt-4">
        <label class="font-semibold text-[#030303] flex items-center gap-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 2C8.134 2 5 5.134 5 8c0 3.643 4.418 9.216 7 11.084C10.581 17.615 12 19 12 19s1.418-1.385 5-4.916C13.582 17.216 19 11.643 19 8c0-2.866-3.134-6-7-6z" />
            </svg>
            <span class="text-sm">Tanda Tangan Pemohon</span>
            <span>|</span>
            <button type="button" class="btn-reset text-sm text-blue-600 underline flex items-center gap-1" onclick="resetSignature(event)">
                Reset Tanda Tangan
            </button>
        </label>

        <canvas id="signatureCanvas" class="border border-[#ccc] rounded-md w-full" style="height: 200px;"></canvas>
        <input type="hidden" name="tandatangan" id="tandatangan">
    </div>

    <script>
        const canvas = document.getElementById("signatureCanvas");
        const ctx = canvas.getContext("2d");

        // Set canvas size
        canvas.width = canvas.offsetWidth;
        canvas.height = 200;

        let drawing = false;
        let lastX = 0, lastY = 0;

        // Event listeners untuk menggambar
        canvas.addEventListener("mousedown", startDrawing);
        canvas.addEventListener("touchstart", startDrawing);
        canvas.addEventListener("mousemove", draw);
        canvas.addEventListener("touchmove", draw);
        canvas.addEventListener("mouseup", stopDrawing);
        canvas.addEventListener("touchend", stopDrawing);
        canvas.addEventListener("mouseleave", stopDrawing);

        function startDrawing(event) {
            event.preventDefault();
            drawing = true;
            const { x, y } = getCoordinates(event);
            lastX = x;
            lastY = y;
            ctx.beginPath();
            ctx.moveTo(x, y);
        }

        function draw(event) {
            event.preventDefault();
            if (!drawing) return;
            const { x, y } = getCoordinates(event);
            ctx.lineTo(x, y);
            ctx.stroke();
            lastX = x;
            lastY = y;
        }

        function stopDrawing() {
            drawing = false;
        }

        function getCoordinates(event) {
            let x, y;
            if (event.touches) {
                x = event.touches[0].clientX;
                y = event.touches[0].clientY;
            } else {
                x = event.clientX;
                y = event.clientY;
            }
            const rect = canvas.getBoundingClientRect();
            const scaleX = canvas.width / rect.width;
            const scaleY = canvas.height / rect.height;
            return { x: (x - rect.left) * scaleX, y: (y - rect.top) * scaleY };
        }

        function clearCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            document.getElementById("tandatangan").value = "";
        }

        function resetSignature(event) {
            event.preventDefault();
            clearCanvas();
        }

        function saveSignature() {
    const signatureData = canvas.toDataURL("image/png");
    document.getElementById("tandatangan").value = signatureData;

    // Convert base64 to File object
    const base64Data = signatureData.split(',')[1];
    const byteCharacters = atob(base64Data);
    const byteNumbers = new Array(byteCharacters.length);
    for (let i = 0; i < byteCharacters.length; i++) {
        byteNumbers[i] = byteCharacters.charCodeAt(i);
    }
    const byteArray = new Uint8Array(byteNumbers);
    const file = new File([byteArray], 'signature.png', {type: 'image/png'});

    // Create DataTransfer to add file
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(file);

    // Create new file input and append to form
    let fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.name = 'tandatangan';
    fileInput.files = dataTransfer.files;
    document.getElementById('signatureForm').appendChild(fileInput);
}

        // Handle form submit via AJAX
        document.getElementById("formSubmitButton").addEventListener("click", function(e) {
            e.preventDefault();
            saveSignature();

            // Create a FormData object
            const formData = new FormData(document.getElementById("signatureForm"));

            // Send form data via AJAX
            fetch("{{ route('permohonan.krkusahacreate') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                // Handle success response
            })
            .catch((error) => {
                console.error('Error:', error);
                // Handle error response
            });
        });
    </script>
</div> --}}

    <div class="flex justify-end" style="margin-top: -40px;">
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


<script>
function previewFile(input, previewId) {
    const file = input.files[0];
    const preview = document.getElementById(previewId);
    preview.innerHTML = ""; // kosongkan preview sebelumnya

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            if (file.type.includes("image")) {
                preview.innerHTML = `<img src="${e.target.result}" class="w-full max-h-[150px] object-contain border rounded" />`;
            } else if (file.type === "application/pdf") {
                // Menggunakan iframe dan mengatur zoom out lebih jauh
                preview.innerHTML = `
                    <iframe src="${e.target.result}#toolbar=0&zoom=35"
                            class="w-full"
                            style="height: 400px; border: 1px solid #ccc; border-radius: 8px;"
                            frameborder="0">
                    </iframe>
                `;
            } else {
                preview.innerText = "File tidak bisa dipreview";
            }
        };

        reader.readAsDataURL(file);
    }
}

    </script>


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
    <br><br>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    @include('frontend.abgblora.00_fiturmenu.03_footer')
</section>
  <!-- back to top start -->
  <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
  </div>
  <!-- back to top end -->

</div>

@include('frontend.abgblora.00_fiturmenu.04_footer')
