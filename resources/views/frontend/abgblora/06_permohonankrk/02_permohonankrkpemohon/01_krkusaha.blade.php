<style>

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

   #map {
                height: 500px;
                width: 100%;
                border-radius: 20px;
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

<section
    id="breadcrumb"
    style="
        background-image: url('/assets/abgblora/logo/gambarabgblora.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100vw;
        margin: 0;
        padding: 0;
        position: relative;
        left: 0;
        margin-top:-30px;
        margin-bottom:-45px;
    "
>

<section id="breadcrumb" class="container max-w-[1130px] mx-auto" style="margin-top: 185px;">
    <div class="flex items-center gap-[20px]">
      <!-- Gambar di kiri -->
      <img src="/assets/abgblora/logo/iconabgblora.png" alt="" class="w-[60px] -my-[15px]" width="10%" style="margin-right: 20px;">

      <!-- Breadcrumb di kanan -->
      <div class="flex gap-[30px] items-center flex-wrap">
        <span>/</span>
        <a href="/permohonankrk" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: blue;">
         {{$title}}
        </a>
      </div>
    </div>

  </section>



<section id="header" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-2" style="margin-top:10px;">


  </section>


 <section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row gap-5">

    @include('frontend.abgblora.06_permohonankrk.02_permohonankrkpemohon.00_menufungsibangunan')


            <div class="flex flex-col gap-5 w-full">
            <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
                    <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Status Pemohon Fungsi Usaha | Pilih Salah Satu ! </span>
                </p>
            </div>


            <form action="{{ route('permohonan.krkusahacreate') }}" method="POST" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                @csrf
                <!-- Pilihan Jenis Pemilik -->
                <div class="flex gap-3">
                  <!-- Tombol Perseorangan -->
                  <label class="cursor-pointer">
                    <input type="radio" name="jenisPemilik" value="perseorangan" checked class="peer hidden" onchange="toggleForm(this.value)">
                    <div class="peer-checked:bg-green-600 peer-checked:text-white hover:bg-green-500 hover:text-white transition-all duration-200
                                flex items-center gap-2 border border-[#030303] px-3 py-1.5 rounded-[15px] text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-inherit" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.121 17.804A4 4 0 0112 16a4 4 0 016.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                      Perseorangan
                    </div>
                  </label>

                  <!-- Tombol Perusahaan -->
                  <label class="cursor-pointer">
                    <input type="radio" name="jenisPemilik" value="perusahaan" class="peer hidden" onchange="toggleForm(this.value)">
                    <div class="peer-checked:bg-green-600 peer-checked:text-white hover:bg-green-500 hover:text-white transition-all duration-200
                                flex items-center gap-2 border border-[#030303] px-3 py-1.5 rounded-[15px] text-sm">
                      PT / CV / Perusahaan
                    </div>
                  </label>
                </div>

              <!-- Form untuk Perseorangan -->
              <div id="form-perseorangan" class="flex flex-col gap-2 w-full" style="margin-top: -25px;">
                <label for="perorangan" class="font-semibold text-[#030303] flex items-center gap-2">
                  <!-- Icon Person -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7c1.657 0 3-1.343 3-3S13.657 1 12 1 9 2.343 9 4s1.343 3 3 3zM4 22v-2c0-4 4-4 8-4s8 4 8 4v2H4z" />
                  </svg>
                  Nama Pemilik (Perseorangan)
                </label>
                <input
                  id="perorangan"
                  style="margin-top: -15px;"
                  type="text"
                  name="perorangan"
                  placeholder="Masukan Data Diri Perorangan..."
                  class="focus:outline-none font-medium placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                >
                @error('perorangan')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
              @enderror
              </div>

              <div id="form-perusahaan" class="flex flex-col gap-2 w-full hidden" style="margin-top: -25px;">
            <label for="perusahaan" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- Icon Building -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3zM8 3v18M16 3v18" />
            </svg>
            Nama Perusahaan
            </label>
            <input
            id="perusahaan"
            style="margin-top: -15px;"
            type="text"
            name="perusahaan"
            placeholder="Masukan Nama Perusahaan..."
            class="focus:outline-none font-medium placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
            >
            @error('perusahaan')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

              <script>
                function toggleForm(value) {
                  const peroranganForm = document.getElementById("form-perseorangan");
                  const perusahaanForm = document.getElementById("form-perusahaan");

                  if (value === "perseorangan") {
                    peroranganForm.classList.remove("hidden");
                    perusahaanForm.classList.add("hidden");
                  } else {
                    perusahaanForm.classList.remove("hidden");
                    peroranganForm.classList.add("hidden");
                  }
                }
              </script>

            {{-- ===================================================== --}}
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>


            <div id="map"></div>

            <!-- KOORDINAT INFO -->
            <div class="koordinat-box" style="margin-top:-25px;">
              <strong>Lokasi Koordinat Anda:</strong>
              <span id="koordinat" style="color:red;">Silahkan Pilih Letak Koordinat Anda !</span>
            </div>
            <!-- FORM -->
              <input type="text" name="koordinatlokasi" id="koordinatlokasi" readonly style="width:300px;" style="margin-top: -25px; ">
            <!-- Leaflet JS -->
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
            <script>
              // Inisialisasi peta
              var map = L.map('map').setView([-7.0233, 111.4053], 11);

              // Tile layer OpenStreetMap
              L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora 🇮🇩'
              }).addTo(map);

              var marker;

              // Icon marker merah
              var redIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
                shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
              });

              // Event klik di peta
              map.on('click', function(e) {
                var lat = e.latlng.lat.toFixed(6);
                var lng = e.latlng.lng.toFixed(6);

                // Tampilkan ke <span>
                document.getElementById('koordinat').textContent = `Latitude: ${lat}, Longitude: ${lng}`;

                // Isi ke input
                document.getElementById('koordinatlokasi').value = `${lat},${lng}`;

                // Tambahkan atau update marker
                if (marker) {
                  marker.setLatLng(e.latlng);
                } else {
                  marker = L.marker(e.latlng, { icon: redIcon }).addTo(map);
                }
              });
            </script>




<div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
    <!-- Nomor Usaha -->
<!-- NIK -->
<div class="flex flex-col gap-2 w-full">
    <label for="nik" class="font-semibold text-[#030303] flex items-center gap-2">
      <!-- Icon: ID Card -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M5 7h14M5 11h14M5 15h10M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
      </svg>
      <span class="text-sm">(NIK) Nomor Induk Kependudukan</span>
    </label>
    <input
      id="nik"
      name="nik"
      type="number"
      placeholder="Masukkan NIK"
      style="margin-top: -15px;"
      class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
    >
    @error('nik')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
  @enderror
  </div>

  <!-- Tanggal Permohonan -->
  <div class="flex flex-col gap-2 w-full">
    <label for="tanggalpermohonan" class="font-semibold text-[#030303] flex items-center gap-2">
      <!-- Icon: Calendar -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      <span class="text-sm">Tanggal Permohonan</span>
    </label>
    <input
      id="tanggalpermohonan"
      name="tanggalpermohonan"
      type="date"
      style="margin-top: -15px;"
      class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
    >
    @error('tanggalpermohonan')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
  @enderror
  </div>

<!-- No WhatsApp -->
<div class="flex flex-col gap-2 w-full">
    <label for="notelepon" class="font-semibold text-[#030303] flex items-center gap-2">
      <!-- Icon: WhatsApp -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 32 32" fill="currentColor">
        <path d="M16.003 3C9.378 3 3.996 8.382 3.996 15.007c0 2.647.866 5.093 2.34 7.094L4 29l6.992-2.31a12.884 12.884 0 005.01 1.015c6.625 0 12.008-5.382 12.008-12.008C28.01 8.382 22.628 3 16.003 3zm0 21.85a10.523 10.523 0 01-5.37-1.487l-.384-.231-4.148 1.37 1.368-4.036-.25-.416a10.521 10.521 0 01-1.502-5.422c0-5.833 4.745-10.577 10.576-10.577 5.83 0 10.574 4.744 10.574 10.576 0 5.831-4.744 10.577-10.574 10.577zm5.774-7.961c-.314-.157-1.858-.917-2.146-1.023-.288-.106-.499-.157-.71.157s-.813 1.024-1 1.236c-.185.211-.37.237-.685.08-.313-.158-1.323-.487-2.517-1.553-.93-.827-1.557-1.849-1.74-2.162-.183-.316-.02-.486.137-.642.141-.14.314-.368.471-.552.158-.185.211-.316.317-.527.104-.211.052-.395-.026-.552-.08-.157-.71-1.713-.972-2.349-.256-.612-.515-.53-.71-.54l-.604-.01c-.21 0-.552.08-.84.395s-1.1 1.073-1.1 2.615 1.125 3.032 1.281 3.24c.158.211 2.214 3.38 5.364 4.737.75.323 1.334.516 1.788.661.75.239 1.434.205 1.975.124.602-.089 1.858-.758 2.12-1.488.263-.729.263-1.353.184-1.488-.08-.132-.288-.211-.602-.368z"/>
      </svg>
      <span class="text-sm">No WhatsApp</span>
    </label>
    <input
      id="notelepon"
      name="notelepon"
      type="number"
      placeholder="Contoh: 081234567890"
      style="margin-top: -15px;"
      class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
    >
    @error('notelepon')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
  @enderror
  </div>


               </div>


               <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                <!-- Luas Tanah di Sertifikat -->
                <div class="flex flex-col gap-2 w-full">
                    <label for="luastanah" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon: Land -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v12M2 12h12" />
                        </svg>
                        <span class="text-sm">Luas Tanah</span>
                        <span class="text-sm">M²</span> <!-- Simbol m² -->            </label>
                    <input
                        id="luastanah"
                        name="luastanah"
                        type="text"
                        placeholder="Masukkan Luas Tanah"
                        style="margin-top: -15px;"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                        oninput="formatNumber(this)"
                    >
                    @error('luastanah')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                  @enderror
                </div>


                <script>
                    function formatNumber(input) {
                      // Hapus karakter selain angka
                      let value = input.value.replace(/\D/g, '');

                      // Format angka menjadi ribuan dengan koma sebagai pemisah
                      value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

                      // Set nilai input dengan format ribuan
                      input.value = value;
                    }
                  </script>

                <div class="flex flex-col gap-2 w-full">
                    <label for="jumlahlantai" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon: Floor -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <span class="text-sm">Jumlah Lantai</span>
                    </label>
                    <select
                        id="jumlahlantai"
                        name="jumlahlantai"
                        style="margin-top: -15px; height:8vh;"
                        class="focus:outline-none font-medium leading-[30px] w-full p-3 border border-[#ccc] rounded-md"
                    >
                        <option value="">Pilih Jumlah Lantai</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="8+">Lebih Dari 8&gt;</option>
                    </select>
                </div>

                <script>
                  function formatNumber(input) {
                    // Hapus karakter selain angka
                    let value = input.value.replace(/\D/g, '');

                    // Format angka menjadi ribuan dengan koma sebagai pemisah
                    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');

                    // Set nilai input dengan format ribuan
                    input.value = value;
                  }
                </script>

                    <div class="flex flex-col gap-2 w-full">
                        <label for="rt" class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Icon: List -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                        <span class="text-sm">RT</span>
                    </label>
                        <select
                        id="rt"
                        name="rt"
                        style="margin-top: -15px; height:8vh;"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                        >
                        <option value="">Pilih RT</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        </select>
                    </div>

                    <!-- RW -->
                    <div class="flex flex-col gap-2 w-full">
                        <label for="rw" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon: List -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                        <span class="text-sm">RW</span>
                    </label>
                    <select
                        id="rw"
                        name="rw"
                        style="margin-top: -15px; height:8vh;"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                        >

                        <option value="">Pilih RW</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        </select>
                    </div>

           </div>





              <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                <!-- RT -->

            </div>

            {{-- ============================================ --}}

               <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                <!-- Kabupaten -->
                <div class="flex flex-col gap-2 w-full">
                  <label for="kabupaten" class="font-semibold text-[#030303] flex items-center gap-2">
                    <!-- Icon: Location -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z"/>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 22s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z"/>
                    </svg>
                    <span class="text-sm">Kabupaten</span>
                  </label>
                  <input
                    id="kabupaten"
                    name="kabupaten"
                    type="text"
                    value="Kabupaten Blora"
                    readonly
                    style="margin-top: -15px;"
                    class="bg-gray-100 cursor-not-allowed focus:outline-none appearance-none font-medium leading-[30px] text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                  >
                </div>

                <div class="flex flex-col gap-2 w-full">
                    <label for="kecamatan" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 22s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z"/>
                        </svg>
                        <span class="text-sm">Kecamatan</span>
                    </label>
                    <select id="kecamatan" name="kecamatan" style="margin-top: -15px; height:8vh;"
                    class="focus:outline-none appearance-none font-medium leading-[30px] text-[#545768] w-full p-3 border border-[#ccc] rounded-md text-transform: capitalize;">
                <option value="">Pilih Kecamatan</option>
                @foreach($datakecamatan as $kecamatan)
                    <option value="{{ $kecamatan->id }}" style="text-transform: capitalize;">{{ $kecamatan->kecamatanblora }}</option>
                @endforeach
            </select>

                </div>
                <div class="flex flex-col gap-2 w-full">
                    <label for="kelurahandesa" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 22s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z"/>
                        </svg>
                        <span class="text-sm">Kelurahan/Desa</span>
                    </label>
                    <select id="kelurahandesa" name="kelurahandesa" style="margin-top: -15px; height:8vh;"
                        class="focus:outline-none appearance-none font-medium leading-[30px] text-[#545768] w-full p-3 border border-[#ccc] rounded-md">
                        <option value="">Pilih Kelurahan/Desa</option>
                    </select>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $('#kecamatan').on('change', function () {
                        var kecamatanID = $(this).val();
                        if (kecamatanID) {
                            $.ajax({
                                url: '{{ route("permohonan.krkusaha") }}',
                                type: 'GET',
                                data: { kecamatan_id: kecamatanID },
                                success: function (data) {
                                    $('#kelurahandesa').empty().append('<option value="">Pilih Kelurahan/Desa</option>');
                                    $.each(data, function (key, value) {
                                        $('#kelurahandesa').append('<option value="' + value.id + '">' + value.desa + '</option>');
                                    });
                                }
                            });
                        } else {
                            $('#kelurahandesa').empty().append('<option value="">Pilih Kelurahan/Desa</option>');
                        }
                    });
                </script>


              </div>



              <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                <!-- Lokasi Bangunan Gedung -->
                <div class="flex flex-col gap-2 w-full">
                    <label for="lokasibangunan" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon: Location Pin -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.134 2 5 5.134 5 8c0 3.643 4.418 9.216 7 11.084C10.581 17.615 12 19 12 19s1.418-1.385 5-4.916C13.582 17.216 19 11.643 19 8c0-2.866-3.134-6-7-6z" />
                        </svg>
                        <span class="text-sm">Lokasi Bangunan Gedung</span>
                    </label>
                    <input
                        id="lokasibangunan"
                        name="lokasibangunan"
                        type="text"
                        placeholder="Masukkan Lokasi Bangunan Gedung"
                        style="margin-top: -15px;"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                    >
                </div>
            </div>

            <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                <!-- KTP Gambar -->
                <div class="flex flex-col gap-2 w-full">
                    <label for="ktp" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon: ID Card -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14M5 11h14M5 15h10M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
                        </svg>
                        <span class="text-sm">KTP</span>
                    </label>
                    <input
                        id="ktp"
                        style="margin-top: -15px;"
                        name="ktp"
                        type="file"
                        accept="image/*,application/pdf"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                        onchange="previewFile('ktp', 'ktpPreview')"
                    >
                    @error('ktp')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                  @enderror
                    <div id="ktpPreview" class="mt-2"></div>
                </div>

                <!-- NPWP Gambar -->
                <div class="flex flex-col gap-2 w-full">
                    <label for="npwp" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon: File -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 2v20h12V2H6zm4 12H8v-2h2v2zm4-2h-2v2h2v-2zm2-6H8V4h8v4z" />
                        </svg>
                        <span class="text-sm">NPWP</span>
                    </label>
                    <input
                        id="npwp"
                        style="margin-top: -15px;"
                        name="npwp"
                        type="file"
                        accept="image/*,application/pdf"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                        onchange="previewFile('npwp', 'npwpPreview')"
                    >
                    @error('npwp')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                  @enderror
                    <div id="npwpPreview" class="mt-2"></div>
                </div>

                <!-- Sertifikat Tanah -->
                <div class="flex flex-col gap-2 w-full">
                    <label for="sertifikattanah" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Icon: Document -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-sm">Sertifikat Tanah</span>
                    </label>
                    <input
                        id="sertifikattanah"
                        style="margin-top: -15px;"
                        name="sertifikattanah"
                        type="file"
                        accept="application/pdf"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
                        onchange="previewFile('sertifikatTanah', 'sertifikatTanahPreview')"
                    >
                    @error('sertifikattanah')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                  @enderror
                    <div id="sertifikatTanahPreview" class="mt-2"></div>
                </div>

                <!-- Siteplan -->

            </div>

            <style>

            </style>

            <script>
             function previewFile(inputId, previewId) {
  const file = document.getElementById(inputId).files[0];
  const preview = document.getElementById(previewId);
  const reader = new FileReader();

  preview.innerHTML = ''; // Reset preview area

  reader.onloadend = function () {
    const fileType = file.type.split('/')[0];
    if (fileType === 'image') {
      const img = document.createElement('img');
      img.src = reader.result;
      img.classList.add('w-32', 'h-32', 'object-cover', 'rounded-md');
      preview.appendChild(img);
    } else if (fileType === 'application' && file.type.includes('pdf')) {
      const container = document.createElement('div');
      container.classList.add('preview-container');

      const pdfPreview = document.createElement('iframe');
      pdfPreview.src = reader.result;
      pdfPreview.width = '100%';
      pdfPreview.height = '400';
      pdfPreview.classList.add('rounded-md');

      container.appendChild(pdfPreview);
      preview.appendChild(container);
    }
  }

  if (file) {
    reader.readAsDataURL(file);
  }
}

            </script>
<div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
    <!-- Lampiran OSS -->
    <div class="flex flex-col gap-2 w-full">
        <label for="lampiranoss" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- Icon: Document -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm">Lampiran OSS</span>
        </label>
        <input
            id="lampiranoss"
            style="margin-top: -15px;"
            name="lampiranoss"
            type="file"
            accept="application/pdf"
            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
            onchange="previewFile('lampiranOSS', 'lampiranOSSPreview')"
        >
        @error('lampiranoss')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
      @enderror

        <div id="lampiranOSSPreview" class="mt-2"></div>
    </div>

    <!-- Bukti Lunas PBB -->
    <div class="flex flex-col gap-2 w-full">
        <label for="buktipbb" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- Icon: File -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 2v20h12V2H6zm4 12H8v-2h2v2zm4-2h-2v2h2v-2zm2-6H8V4h8v4z" />
            </svg>
            <span class="text-sm">Bukti Lunas PBB</span>
        </label>
        <input
            id="buktipbb"
            style="margin-top: -15px;"
            name="buktipbb"
            type="file"
            accept="application/pdf"
            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
            onchange="previewFile('buktiLunasPBB', 'buktiLunasPBBPreview')"
        >
        @error('buktipbb')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
      @enderror
        <div id="buktiLunasPBBPreview" class="mt-2"></div>
    </div>

    <!-- Dokumen Kajian Validasi -->
    <div class="flex flex-col gap-2 w-full">
        <label for="dokvalidasi" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- Icon: Check -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12l5 5L19 7" />
            </svg>
            <span class="text-sm">Dokumen Kajian Validasi</span>
        </label>
        <input
            id="dokvalidasi"
            style="margin-top: -15px;"
            name="dokvalidasi"
            type="file"
            accept="application/pdf"
            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
            onchange="previewFile('dokumenKajianValidasi', 'dokumenKajianValidasiPreview')"
        >
        @error('dokvalidasi')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
      @enderror

        <div id="dokumenKajianValidasiPreview" class="mt-2"></div>
    </div>
</div>

<script>
  function previewFile(inputId, previewId) {
    const file = document.getElementById(inputId).files[0];
    const preview = document.getElementById(previewId);
    const reader = new FileReader();

    preview.innerHTML = ''; // Reset preview area

    reader.onloadend = function () {
      const pdfPreview = document.createElement('iframe');
      pdfPreview.src = reader.result;
      pdfPreview.width = '300';
      pdfPreview.height = '400';
      preview.appendChild(pdfPreview);
    }

    if (file) {
      reader.readAsDataURL(file);
    }
  }
</script>


<div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">

    <div class="flex flex-col gap-2 w-full">
        <label for="siteplan" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- Icon: Map -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8v12a2 2 0 002 2h14a2 2 0 002-2V8H3z" />
            </svg>
            <span class="text-sm">Siteplan</span>
        </label>
        <input
            id="siteplan"
            style="margin-top: -15px; width:400px;"
            name="siteplan"
            type="file"
            accept="application/pdf"
            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full p-3 border border-[#ccc] rounded-md"
            onchange="previewFile('siteplan', 'siteplanPreview')"
        >
        @error('siteplan')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
      @enderror

        <div id="siteplanPreview" class="mt-2"></div>
    </div>
    <!-- Lokasi Bangunan Gedung -->
    <div class="flex flex-col gap-2 w-full">
        <label for="lokasiBangunan" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- Icon: Location Pin -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8.134 2 5 5.134 5 8c0 3.643 4.418 9.216 7 11.084C10.581 17.615 12 19 12 19s1.418-1.385 5-4.916C13.582 17.216 19 11.643 19 8c0-2.866-3.134-6-7-6z" />
            </svg>
            <span class="text-sm">Tanda Tangan Pemohon</span>
        </label>

        <!-- Canvas untuk Tanda Tangan -->
        <canvas id="signatureCanvas" class="border border-[#ccc] rounded-md w-full" style="height: 200px; width: 400px; margin-top:-15px;"></canvas>
        <input type="hidden" name="tandatangan" id="tandatangan" style="margin-top:-15px;">

        <!-- Tombol Hapus Tanda Tangan -->
        <button onclick="clearCanvas()" class="mt-2 p-2 bg-red-500 text-white rounded-md">Hapus Tanda Tangan</button>
    </div>
</div>

<script>
    const canvas = document.getElementById("signatureCanvas");
    const ctx = canvas.getContext("2d");

    // Set canvas size (adapt to device size)
    canvas.width = window.innerWidth - 40; // Adjust width if necessary
    canvas.height = 200;

    let drawing = false;
    let lastX = 0, lastY = 0;

    // Start drawing
    canvas.addEventListener("mousedown", startDrawing);
    canvas.addEventListener("touchstart", startDrawing);

    // Draw on canvas
    canvas.addEventListener("mousemove", draw);
    canvas.addEventListener("touchmove", draw);

    // Stop drawing
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

        // Adjust coordinates relative to canvas position and scale
        const rect = canvas.getBoundingClientRect();
        const scaleX = canvas.width / rect.width; // Scale factor for X axis
        const scaleY = canvas.height / rect.height; // Scale factor for Y axis
        return { x: (x - rect.left) * scaleX, y: (y - rect.top) * scaleY };
    }

    // Clear Canvas and empty hidden input
    function clearCanvas() {
        ctx.clearRect(0, 0, canvas.width, canvas.height); // Menghapus gambar di canvas
        document.getElementById("tandatangan").value = ""; // Menghapus nilai di input tersembunyi
    }

    // Reset Tanda Tangan (Clear canvas & reset hidden input)
    function resetSignature(event) {
        event.preventDefault(); // Prevent scroll or page jump when clicking reset button
        // Clear canvas dan reset input hidden
        clearCanvas();
        document.getElementById("tandatangan").value = ""; // Reset hidden input (kosongkan)
    }

    // Function to save signature as data URL in hidden input
    function saveSignature() {
        const signatureData = canvas.toDataURL(); // Save as base64
        document.getElementById("tandatangan").value = signatureData; // Save to hidden input
    }

    // Optionally call saveSignature before form submission
    // Example:
    // document.getElementById("myForm").addEventListener("submit", saveSignature);
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

    <!-- Tombol Reset Tanda Tangan -->
    <button class="btn-reset" onclick="resetSignature(event)">
        <i class="fas fa-eraser w-5 h-5"></i>
        Reset Tanda Tangan
    </button>

    <!-- Tombol Kirim Permohonan -->
   <!-- Tombol Kirim (type button supaya gak langsung submit) -->
<button type="button" class="btn-submit" onclick="openModal()">
  <i class="fab fa-telegram-plane w-5 h-5"></i>
  Kirim Permohonan
</button>

<!-- Modal Konfirmasi -->
<div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
  <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
    <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
      Apakah Anda yakin dengan permohonan Anda?
    </p>

    <!-- Checkbox dan pernyataan -->
   <!-- Checkbox dan pernyataan -->
<div style="display: flex; align-items: center; margin-bottom: 16px;">
    <input type="checkbox" id="dataConfirm" style="margin-right: 8px;">
    <label for="dataConfirm" style="font-size: 14px; color: #6b7280; flex-grow: 1; text-align: justify;">
      Saya menyatakan bahwa data persyaratan yang saya kirim adalah sebenar-benarnya dan dapat dipertanggungjawabkan.
    </label>
  </div>


    <div style="display: flex; justify-content: center; gap: 12px;">
      <button onclick="submitForm()" class="btn-submit-hover" style="background-color: #2563eb; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer;">
        Ya, Kirim
      </button>
      <button type="button" onclick="closeModal()" class="btn-cancel-hover" style="background-color: #9CA3AF; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer;">
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


</div>

        </form>

        </div>
    </div>
    </section>
    <br><br>
</section>



  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  @include('frontend.abgblora.00_fiturmenu.03_footer')
  <!-- back to top start -->
  <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
  </div>
  <!-- back to top end -->

</div>

@include('frontend.abgblora.00_fiturmenu.04_footer')
