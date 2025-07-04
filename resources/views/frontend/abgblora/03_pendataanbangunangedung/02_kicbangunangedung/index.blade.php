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

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>


<section id="breadcrumb" class="container max-w-[1130px] mx-auto" style="margin-top: 160px;" >
    <div class="flex items-center gap-[20px]">
        <!-- Gambar di kiri -->
        <img src="/assets/abgblora/logo/iconabgblora.png" alt="Logo" class="w-[60px] -my-[15px]" width="10%" style="margin-right: 20px; margin-bottom:10px;" >

        <!-- Breadcrumb di kanan -->
        <div class="flex gap-[30px] items-center flex-wrap">
            <span>/</span>
            <a href="/" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: blue;">
                {{$title}}
            </a>
            <span>/</span>
            <a href="/404" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: black;">
                Data Statistik
            </a>
        </div>
    </div>
    <div class="flex justify-end w-full sm:w-auto mb-2">
        <div class="flex items-center gap-1.5 px-3 py-1 bg-white rounded-xl border border-gray-300 w-full sm:w-[260px] focus-within:ring-2 focus-within:ring-[#6635F1] transition-all duration-300">
          <input
            type="text"
            id="searchInput"
            placeholder="Cari data..."
            oninput="searchTable()"
            class="w-full appearance-none outline-none text-sm font-medium placeholder:font-normal placeholder:text-[#545768] bg-transparent"
          />
          <button onclick="searchTable()" class="flex items-center justify-center w-7 h-7 shrink-0 ml-2">
            <img src="/assets/new/icons/search.svg" alt="icon" class="w-4 h-4" />
          </button>
        </div>
      </div>

</section>


<section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row sm:flex-nowrap gap-5" style="margin-top: 10px;">
    <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">


        <div class="flex items-center gap-3" style="margin-top: -30px;">
            <button class="p-[14px_20px] bg-white rounded-full font-semibold">
              📦 {{$title}}
            </button>
          </div>
        <!-- Tabel dimulai -->

        <div class="w-full overflow-x-auto rounded-[15px]" style="margin-top: -25px;">
            <table class="zebra-table min-w-max border border-gray-200" style="border-radius: 15px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Satuan Kerja</th>
                        <th>Kode Lokasi</th>
                        <th>Bangunan Milik</th>
                        <th>Jenis Barang/Nama Barang</th>
                        <th>Kode Barang</th>
                        <th>Asal Usul</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    @foreach ($data as $item)
                    <tr>
                        <td style="text-align: center;">{{ $data->firstItem() + $loop->iteration - 1 }}</td>
                        <td class="uppercase" style="text-transform: uppercase;">
                            {{ optional($item->kedinasan)->kedinasan ?? '-' }}
                        </td>
                         <td>{{ $item->kodelokasibangunangedung->kodelokasi }}</td>
                        <td>{{ $item->namabangunandinas }}</td>
                        <td>{{ $item->namabangunan }}</td>
                        <td>{{ $item->kodebarang }}</td>
                        <td>{{ $item->asalusul }}</td>
                        <td style="text-align: center">
                            <a href="/404">
                                <i class="fas fa-eye view-icon" onclick="alert('View clicked!')"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

        @include('frontend.abgblora.00_fiturmenu.06_paginations')

    </div>
</section>

  {{-- <section id="other" class="container max-w-[1130px] mx-auto flex flex-col gap-4 mt-[50px]">
    <h2 class="font-semibold" style="font-size: 14px;">Data Statistik {{$title}}</h2>

<!-- WRAPPER GRID -->
<div class="grid grid-cols-1 sm:grid-cols-4 gap-3">

    <!-- CARD 1 -->
    <a href="#" class="card">
      <div class="p-4 rounded-[20px] bg-white flex flex-col gap-4 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
        <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
          <div class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
            HIRING
          </div>
          <img src="assets/thumbnails/thumbnail-1.png" class="w-full h-full object-cover" alt="thumbnail">
        </div>
        <div class="flex flex-col gap-[8px]">
          <p class="title font-semibold text-sm min-h-[48px] line-clamp-2 hover:line-clamp-none">
            Education Commerce Website Development
          </p>
          <div class="flex items-center gap-[6px]">
            <img src="assets/icons/dollar-circle.svg" alt="icon">
            <p class="font-semibold text-xs">Rp 3.000.000</p>
          </div>
          <div class="flex items-center gap-[6px]">
            <img src="assets/icons/verify.svg" alt="icon">
            <p class="font-semibold text-xs">Payment Verified</p>
          </div>
          <div class="flex items-center gap-[6px]">
            <img src="assets/icons/crown.svg" alt="icon">
            <p class="font-semibold text-xs">Beginner</p>
          </div>
        </div>
      </div>
    </a>

    <!-- CARD 2 -->
    <a href="#" class="card">
      <div class="p-4 rounded-[20px] bg-white flex flex-col gap-4 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">
        <div class="w-full h-[140px] rounded-[20px] overflow-hidden relative">
          <div class="font-bold text-xs leading-[18px] text-white bg-[#F3445C] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">
            CLOSED
          </div>
          <img src="assets/thumbnails/thumbnail-2.png" class="w-full h-full object-cover" alt="thumbnail">
        </div>
        <div class="flex flex-col gap-[8px]">
          <p class="title font-semibold text-sm min-h-[48px] line-clamp-2 hover:line-clamp-none">
            Product Market Fit Research
          </p>
          <div class="flex items-center gap-[6px]">
            <img src="assets/icons/dollar-circle.svg" alt="icon">
            <p class="font-semibold text-xs">Rp 3.000.000</p>
          </div>
          <div class="flex items-center gap-[6px]">
            <img src="assets/icons/verify.svg" alt="icon">
            <p class="font-semibold text-xs">Payment Verified</p>
          </div>
          <div class="flex items-center gap-[6px]">
            <img src="assets/icons/crown.svg" alt="icon">
            <p class="font-semibold text-xs">Intermediate</p>
          </div>
        </div>
      </div>
    </a>

    <!-- Tambah kartu lain tinggal copy paste bagian <a> ini -->

  </div>
  </section> --}}

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

      fetch(`/pendataankicbangunangedung?search=${input}`)
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
