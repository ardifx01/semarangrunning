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
            <a href="/statistikbg" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: black;">
                Data Statistik
            </a>
        </div>
    </div>

    <!-- Search Bar Section -->
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

{{--

  <section id="header" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-2" style="margin-top:10px;">
    <div class="flex">
        <img src="/assets/abgblora/logo/iconabgblora.png" alt="" width="25%" style="margin-top: -15px;">
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
 --}}

<section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row sm:flex-nowrap gap-5" style="margin-top: 10px;">
    <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">

        <!-- Tabel dimulai -->

        <div class="flex items-center gap-3" style="margin-top: -30px;">
            <button class="p-[14px_20px] bg-white rounded-full font-semibold">
              📦 {{$title}}
            </button>
          </div>

        <div class="w-full overflow-x-auto rounded-[15px]" style="margin-top: -25px;">
            <table class="zebra-table min-w-max border border-gray-200" style="border-radius: 15px;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Institusi Kepemilikan</th>
                        <th>Nama Bangunan</th>
                        <th>Luas Tanah</th>
                        {{-- baru sampia siiini  --}}
                        <th>Fungsi Bangunan</th>
                        <th>Status Tanah</th>
                        <th>Klasifikasi Bangunan </th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    @foreach ($data as $item)
                    <tr>
                        <td style="text-align: center;">{{ $data->firstItem() + $loop->iteration - 1 }}</td>
                        <td class="uppercase" style="text-transform: uppercase;">
                            {{ optional($item->kepemilikanbangunangedung)->datainstitusibangunangedung->institusi?? 'Data Tidak Di Temukan' }}
                        </td>
                        <td>{{ $item->namabangunan }}</td>

                        <td style="text-align: right">
                            @php
                                $luas = (float) preg_replace('/[^0-9.]/', '', $item->luastanah); // hilangkan karakter non-numeric
                            @endphp

                            @if($luas > 0)
                                {{ number_format($luas, 0, ',', '.') }} m&sup2;
                            @else
                                <button style="background-color: navy; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='navy';"
                                        onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                                    Data Belum Di Update
                                </button>
                            @endif
                        </td>

                        <td>
                            @if($item->fungsibangunan && $item->fungsibangunan->fungsibangunan)
                                {{ $item->fungsibangunan->fungsibangunan }}
                            @else
                                <button style="background-color: navy; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='navy';"
                                        onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                                    Data Belum Di Update
                                </button>
                            @endif
                        </td>
                        <td>
                            @if(isset($item->profiltanahbangunangedung->statushaktanahbangunangedung->status))
                                {{ $item->profiltanahbangunangedung->statushaktanahbangunangedung->status }}
                            @else
                                <button style="background-color: navy; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='navy';"
                                        onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                                    Data Belum Di Update
                                </button>
                            @endif
                        </td>

                        <td>
                            @if(isset($item->klasifikasibangunangedung->tingkatpermanen))
                                {{ $item->klasifikasibangunangedung->tingkatpermanen }}
                            @else
                                <button style="background-color: navy; color: white; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='navy';"
                                        onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                                    Data Belum Di Update
                                </button>
                            @endif
                        </td>

                        <td style="text-align: center">
                            <a href="/databangunangedung/{{$item->namabangunan}}">
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
