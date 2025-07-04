<style>
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

<section id="breadcrumb" class="container max-w-[1130px] mx-auto mt-[30px]" style="margin-top: 185px;">
    <div class="flex gap-[30px] items-center">
      <a href="/databangunangedung" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: black;">
        Data Bangunan Gedung
      </a>
      <span>/</span>
      <a href="" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: blue;">
        Data {{$title}}
      </a>
      {{-- <span>/</span> --}}
      {{-- <a href="" class="last-of-type:font-semibold transition-all duration-300">
        Data Statistik
      </a> --}}
    </div>
  </section>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>


<section id="header" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-2" style="margin-top:10px;">
    <div class="flex items-center gap-3">
      <button class="p-[14px_20px] bg-white rounded-full font-semibold">
        📦 {{$title}}
      </button>
    </div>

  </section>


  <section id="other" class="container max-w-[1130px] mx-auto flex flex-col gap-4" style="margin-top: 20px;">
<!-- WRAPPER GRID -->

<!-- MODAL -->
<!-- MODAL -->

<div id="imageModal" class="fixed inset-0 z-50 bg-black bg-opacity-80 hidden items-center justify-center">
    <div class="relative max-w-[90%] max-h-[90%]" style="border-radius: 20px; overflow: hidden;">
      <button onclick="closeModal()" class="absolute -top-4 -right-4 bg-white text-black rounded-full w-8 h-8 flex items-center justify-center text-xl font-bold shadow-lg">&times;</button>
      <img id="modalImage" src="" class="w-full h-full object-contain" style="border-radius: 20px;">
    </div>
  </div>

  <!-- SCRIPT -->
  <script>
    function openModal(src) {
      document.getElementById('modalImage').src = src;
      document.getElementById('imageModal').classList.remove('hidden');
      document.getElementById('imageModal').classList.add('flex');
    }

    function closeModal() {
      document.getElementById('imageModal').classList.remove('flex');
      document.getElementById('imageModal').classList.add('hidden');
    }
  </script>

  </section>



  <section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row gap-5">
    <div class="flex flex-col gap-5 w-full">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
            <div class="flex justify-center">
                <img src="/assets/abgblora/logo/iconabgblora.png" alt="" width="15%" style="margin-top: -25px; margin-bottom:-25px;">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                <!-- CARD 1 -->
                <a href="#" class="card" style="border-radius: 20px;">
                  <div class="p-4 rounded-[20px] bg-white flex flex-col gap-4 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                      <img onclick="openModal(this.src)" src="/assets/android/iconmenu/bangunan1.jpg" class="w-full h-full object-cover cursor-pointer" alt="thumbnail">
                    </div>
                    <div class="flex flex-col">
                      <p class="title font-semibold text-sm line-clamp-2 hover:line-clamp-none">
                        Tampak Depan
                      </p>
                    </div>
                  </div>
                </a>

                <!-- CARD 2 -->
                <a href="#" class="card" style="border-radius: 20px;">
                  <div class="p-4 rounded-[20px] bg-white flex flex-col gap-4 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                      <img onclick="openModal(this.src)" src="/assets/android/iconmenu/bangunan1.jpg" class="w-full h-full object-cover cursor-pointer" alt="thumbnail">
                    </div>
                    <div class="flex flex-col">
                      <p class="title font-semibold text-sm line-clamp-2 hover:line-clamp-none">
                        Tampak Samping 1
                      </p>
                    </div>
                  </div>
                </a>

                <!-- CARD 3 -->
                <a href="#" class="card" style="border-radius: 20px;">
                  <div class="p-4 rounded-[20px] bg-white flex flex-col gap-4 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                    <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                      <img onclick="openModal(this.src)" src="/assets/android/iconmenu/bangunan1.jpg" class="w-full h-full object-cover cursor-pointer" alt="thumbnail">
                    </div>
                    <div class="flex flex-col">
                      <p class="title font-semibold text-sm line-clamp-2 hover:line-clamp-none">
                        Tampak Samping 2
                      </p>
                    </div>
                  </div>
                </a>

                <!-- CARD 4 -->
                <a href="#" class="card" style="border-radius: 20px;">
                  <div class="p-4 rounded-[20px] bg-white flex flex-col gap-4 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
                      <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
                          <img onclick="openModal(this.src)" src="/assets/android/iconmenu/bangunan1.jpg" class="w-full h-full object-cover cursor-pointer" alt="thumbnail">
                        </div>
                        <div class="flex flex-col">
                            <p class="title font-semibold text-sm line-clamp-2 hover:line-clamp-none">
                                Tampak Belakang
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Informasi Bangunan Gedung </span>
                </p>
            </div>

            <form action="" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full">
                 <!-- Nama Bangunan -->
                 <div class="flex flex-col gap-2 w-full">
                    <label for="namabangunan" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        Nama Bangunan
                    </label>
                    <input
                        style="margin-top: -15px;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="{{ $data->namabangunan }}"
                        readonly
                    >
                </div>

                    <!-- Luas Tanah -->
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Ruler icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4V4zm4 4h8v8H8V8z" />
                            </svg>
                            <span class="text-sm">Luas Tanah (m²)</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="{{ number_format($data->luastanah, 0, ',', '.') }} m²"
                            readonly
                        >
                    </div>

                    <!-- Jumlah Lantai -->
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Layers (floor) icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l9 5-9 5-9-5 9-5zm0 10l9 5-9 5-9-5 9-5z" />
                            </svg>
                            <span class="text-sm">Jumlah Lantai</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="{{ $data->jumlahlantai }} Lantai"
                            readonly
                        >
                    </div>


                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Icon: Office Building -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 21h18M9 8h6m-3-3v6m9-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm">Fungsi Bangunan</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="{{ $data->fungsibangunan->fungsibangunan }}"
                            readonly
                        >
                    </div>

                </div>


                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="alamatbangunan" class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Map Pin Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11.5c1.656 0 3-1.344 3-3s-1.344-3-3-3-3 1.344-3 3 1.344 3 3 3zM12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7z" />
                            </svg>
                            <span class="text-sm">Lokasi Bangunan</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            name="alamatbangunan"
                            id="alamatbangunan"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            placeholder="Masukkan lokasi bangunan"
                            value="{{ $data->alamatbangunan }}"
                            readonly
                        >
                    </div>

                </div>

                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                   <!-- Luas Lantai Dasar -->
<div class="flex flex-col gap-2 w-full">
    <label for="luaslantaidasar" class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Icon: Ruler -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 16l6-6m2-2l6-6M14 10l6 6M10 14l6 6" />
        </svg>
        <span class="text-sm">Luas Lantai Dasar</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ number_format($data->luaslantaidasar, 0, ',', '.') }} M²"
        >
</div>

<!-- Luas Total Lantai Dasar -->
<div class="flex flex-col gap-2 w-full">
    <label for="luastotallantaidasargedung" class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Icon: Document Search (Total Area) -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4v16m8-8H4" />
        </svg>
        <span class="text-sm">Luas Total Lantai Dasar</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ number_format($data->luastotallantaidasargedung, 0, ',', '.') }} M²"
    >
</div>

<!-- Ketinggian Bangunan -->
<div class="flex flex-col gap-2 w-full">
    <label for="ketinggianbangunan" class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Icon: Arrow Up Down (Height) -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4v16m4-4l-4 4m0 0l-4-4m4-12l4 4m-4-4l-4 4" />
        </svg>
        <span class="text-sm">Ketinggian Bangunan</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ $data->ketinggianbangunan }} M"
    >
</div>

<!-- Basement -->
<div class="flex flex-col gap-2 w-full">
    <label for="luasbasement" class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Icon: Cube (Basement) -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M20 7l-8-4-8 4m16 0v10l-8 4-8-4V7m16 0L12 11 4 7" />
        </svg>
        <span class="text-sm">Basement</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ number_format($data->luasbasement, 0, ',', '.') }} M²"
        >
</div>

                </div>

               <!-- Koordinat Bangunan Sumbu X -->
<div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
    <div class="flex flex-col gap-2 w-full">
        <label for="koordinatX" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- X Axis Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16" />
            </svg>
            <span class="text-sm">Koordinat Bangunan Sumbu X</span>
        </label>
        <input
            style="margin-top: -15px;"
            type="text"
            name="koordinatX"
            id="koordinatX"
            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
            placeholder="Masukkan koordinat sumbu X"
            value="{{ $data->koordinatbangunan }}"
            readonly
        >
    </div>
</div>

<!-- Koordinat Bangunan Sumbu Y -->
<div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
    <div class="flex flex-col gap-2 w-full">
        <label for="koordinatY" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- Y Axis Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16" />
            </svg>
            <span class="text-sm">Koordinat Bangunan Sumbu Y</span>
        </label>
        <input
            style="margin-top: -15px;"
            type="text"
            name="koordinatY"
            id="koordinatY"
            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
            placeholder="Masukkan koordinat sumbu Y"
            value="{{ $data->koordinatbangunan2 }}"
            readonly
        >
    </div>
</div>

<!-- Tanggal Mulai Konstruksi -->
<div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
    <div class="flex flex-col gap-2 w-full">
        <label for="tanggalmulaikonstruksi" class="font-semibold text-[#030303] flex items-center gap-2">
            <!-- Calendar Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm">Tanggal Mulai Konstruksi</span>
        </label>
        <input
            style="margin-top: -15px;"
            type="text"
            name="tanggalmulaikonstruksi"
            id="tanggalmulaikonstruksi"
            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
            placeholder="Tanggal Mulai Konstruksi"
            value="{{ \Carbon\Carbon::parse($data->tanggalmulaikonstruksi)->translatedFormat('d F Y') }}"
            readonly
        >
    </div>
</div>

            </form>
        </div>
    </div>
</section>


<section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row gap-5 mt-[30px]" style="margin-top:-35px;">
    <div class="flex flex-col gap-5 w-full">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
            <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Kepemilikan Bangunan Gedung </span>
                </p>
            </div>

            <form action="" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full">
                 <!-- Nama Bangunan -->
                 <div class="flex flex-col gap-2 w-full">
                    <label class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        Instansi
                    </label>
                    <input
                        style="margin-top: -15px;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="{{ $data->kepemilikanbangunangedung->datainstitusibangunangedung?->institusi }}"
                        readonly
                    >
                </div>

                    <!-- Luas Tanah -->
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Telephone Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h4a3 3 0 0 0 3-3v-2zM3 9a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v2a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V9z" />
                            </svg>
                            <span class="text-sm">No Telepon</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            name="no_telepon"
                            id="no_telepon"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="{{ $data->kepemilikanbangunangedung->no_telepon ?? 'Data Belum Diupdate' }}"
                            readonly
                        />
                    </div>

                </div>


                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="alamatbangunan" class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Map Pin Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11.5c1.656 0 3-1.344 3-3s-1.344-3-3-3-3 1.344-3 3 1.344 3 3 3zM12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7z" />
                            </svg>
                            <span class="text-sm">Alamat</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            name="alamatbangunan"
                            id="alamatbangunan"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            placeholder="Masukkan Alamat Kepemlikan"
                            value="{{ $data->kepemilikanbangunangedung->alamat ?? 'Data Belum Diupdate' }}"
                            readonly
                        >
                    </div>
                </div>

                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
     <!-- Nomor Usaha -->
<div class="flex flex-col gap-2 w-full">
    <label for="nousaha" class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Icon: Briefcase -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v4h2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2V2z" />
        </svg>
        <span class="text-sm">Nomor Usaha</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{$data->kepemilikanbangunangedung->nousaha ?? 'Data Belum Diupdate'}}"
    >
</div>

<!-- Nomor HDNO -->
<div class="flex flex-col gap-2 w-full">
    <label for="nohdno" class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Icon: Document -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4v16m8-8H4" />
        </svg>
        <span class="text-sm">Nomor HDNO</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{$data->kepemilikanbangunangedung->nohdno ?? 'Data Belum Diupdate'}}"
    >
</div>

                </div>
            </form>
        </div>
    </div>
</section>

<section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row gap-5 mt-[30px]" style="margin-top:-35px;">
    <div class="flex flex-col gap-5 w-full">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
            <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Profil Tanah Bangunan Gedung </span>
                </p>
            </div>

            <form action="" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full">
                 <!-- Nama Bangunan -->
                 <div class="flex flex-col gap-2 w-full">
                    <label class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        Status Hak Tanah
                    </label>
                    <input
                        style="margin-top: -15px;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="{{ $data->profiltanahbangunangedung->statushaktanahbangunangedung?->status }}"
                        readonly
                    >
                </div>

                    <!-- Luas Tanah -->
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Telephone Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h4a3 3 0 0 0 3-3v-2zM3 9a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v2a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V9z" />
                            </svg>
                            <span class="text-sm">Status Kepemilikan</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            name="no_telepon"
                            id="no_telepon"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="{{ $data->profiltanahbangunangedung->statuskepemilikan ?? 'Data Belum Diupdate' }}"
                            readonly
                        />
                    </div>

                    <!-- Luas Tanah -->
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Telephone Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h4a3 3 0 0 0 3-3v-2zM3 9a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v2a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V9z" />
                            </svg>
                            <span class="text-sm">No Bukti Tanah</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            name="no_telepon"
                            id="no_telepon"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="{{ $data->profiltanahbangunangedung->nobuktitanah ?? 'Data Belum Diupdate' }}"
                            readonly
                        />
                    </div>

                </div>


                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -40px;">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="alamatbangunan" class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Map Pin Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11.5c1.656 0 3-1.344 3-3s-1.344-3-3-3-3 1.344-3 3 1.344 3 3 3zM12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7z" />
                            </svg>
                            <span class="text-sm">Alamat</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            name="alamatbangunan"
                            id="alamatbangunan"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            placeholder="Masukkan Alamat Kepemlikan"
                            value="{{ $data->profiltanahbangunangedung->alamat ?? 'Data Belum Diupdate' }}"
                            readonly
                        >
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>

<section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row gap-5 mt-[30px]" style="margin-top:-35px;">
    <div class="flex flex-col gap-5 w-full">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
            <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Klasifikasi Bangunan Gedung </span>
                </p>
            </div>

            <form action="" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full">
                 <!-- Nama Bangunan -->
                 <!-- Tanggal Selesai -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Calendar Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7V3m8 4V3M5 11h14M5 19h14M5 11V5a2 2 0 012-2h10a2 2 0 012 2v6" />
        </svg>
        Tanggal Selesai
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ \Carbon\Carbon::parse($data->klasifikasibangunangedung->tanggalselesai)->translatedFormat('d F Y') }}"
        readonly
    >
</div>

<!-- Tanggal Rehab -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Wrench Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M14.828 14.828a4 4 0 01-5.656 0L3 8m13.828 13.828a4 4 0 01-5.656 0L3 15" />
        </svg>
        <span class="text-sm">Tanggal Rehab</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ \Carbon\Carbon::parse($data->klasifikasibangunangedung->tanggalrehab)->translatedFormat('d F Y') }}"
        readonly
    />
</div>

<!-- Kompleksitas -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Puzzle Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M14 10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2m-4 0H8a2 2 0 01-2-2v-2m0-4V8a2 2 0 012-2h2" />
        </svg>
        <span class="text-sm">Kompleksitas</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ $data->klasifikasibangunangedung->kompleksitas ?? 'Data Belum Diupdate' }}"
        readonly
    />
</div>

<!-- Tingkat Permanen -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Home Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 9.75L12 4l9 5.75V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V9.75z" />
        </svg>
        <span class="text-sm">Tingkat Permanen</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ $data->klasifikasibangunangedung->tingkatpermanen ?? 'Data Belum Diupdate' }}"
        readonly
    />
</div>

<!-- Resiko Kebakaran -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2">
        <!-- Fire Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 14a4 4 0 00-8 0c0 1.657.895 3.09 2.222 3.778C10.894 18.57 11 18.95 11 19.333 11 20.403 10.403 21 9.333 21 8.79 21 8 20.333 8 19.333m4-16c2.5 3 4 4.5 4 8a4 4 0 11-8 0c0-2.344 1-4.344 4-8z" />
        </svg>
        <span class="text-sm">Resiko Kebakaran</span>
    </label>
    <input
        style="margin-top: -15px;"
        type="text"
        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        value="{{ $data->klasifikasibangunangedung->resikokebakaran ?? 'Data Belum Diupdate' }}"
        readonly
    />
</div>

                </div>
            </form>
        </div>
    </div>
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

<script>
    function toggleDropdown(event) {
      event.preventDefault();
      const dropdown = event.target.closest('.dropdown');
      dropdown.classList.toggle('show');
    }

    // Optional: Tutup dropdown jika klik di luar
    window.addEventListener('click', function(e) {
      document.querySelectorAll('.dropdown').forEach(drop => {
        if (!drop.contains(e.target)) {
          drop.classList.remove('show');
        }
      });
    });


    function updateEntries() {
      let selectedValue = document.getElementById("entries").value;
      let url = new URL(window.location.href);
      url.searchParams.set("perPage", selectedValue);
      window.location.href = url.toString();
    }

    function searchTable() {
      let input = document.getElementById("searchInput").value;

      fetch(`/databangunangedung?search=${input}`)
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
