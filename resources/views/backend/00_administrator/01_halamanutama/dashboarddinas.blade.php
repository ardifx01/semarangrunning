@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('frontend.android.00_fiturmenu.06_alert')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

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
           @include('backend.00_administrator.00_baganterpisah.10_selamatdatang')
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                              </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">




{{-- atas  --}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawCharts);

  function drawCharts() {
    var data = google.visualization.arrayToDataTable([
      ['Kategori', 'Jumlah Permohonan'],
      ['Berkas Asistensi', {{ $jumlahdata1 ?? 0 }}],
      ['Peneliti Kontrak', {{ $jumlahdata2 ?? 0 }}],
      ['Perhitungan Penyusutan', {{ $jumlahdata3 ?? 0 }}],
      ['Tingkat Kerusakan', {{ $jumlahdata4 ?? 0 }}],
      ['Pemeliharaan BGN', {{ $jumlahdata5 ?? 0 }}],
      ['Perhitungan BGN', {{ $jumlahdata6 ?? 0 }}],
      ['Pendampingan Serah Terima', {{ $jumlahdata7 ?? 0 }}],
      ['Personil Tim Teknis', {{ $jumlahdata8 ?? 0 }}]
    ]);

    var dataBar = google.visualization.arrayToDataTable([
      ['Kategori', 'Jumlah Permohonan', { role: 'style' }],
      ['Berkas Asistensi', {{ $jumlahdata1 ?? 0 }}, '#001f3f'],    // Navy
      ['Peneliti Kontrak', {{ $jumlahdata2 ?? 0 }}, '#006400'],     // Dark Green
      ['Perhitungan Penyusutan', {{ $jumlahdata3 ?? 0 }}, '#FFD700'], // Gold
      ['Tingkat Kerusakan', {{ $jumlahdata4 ?? 0 }}, '#00BFFF'],  // DeepSkyBlue
      ['Pemeliharaan BGN', {{ $jumlahdata5 ?? 0 }}, '#FF69B4'],    // Hot Pink
      ['Perhitungan BGN', {{ $jumlahdata6 ?? 0 }}, '#FF8C00'],     // Dark Orange
      ['Pendampingan Serah Terima', {{ $jumlahdata7 ?? 0 }}, '#8A2BE2'], // Blue Violet
      ['Personil Tim Teknis', {{ $jumlahdata8 ?? 0 }}, '#20B2AA'] // Light Sea Green
    ]);

    var pieOptions = {
      title: 'Persentase Permohonan Per Kategori',
      is3D: true,
      backgroundColor: 'transparent',
      colors: ['#001f3f', '#006400', '#FFD700', '#00BFFF', '#FF69B4', '#FF8C00', '#8A2BE2', '#20B2AA'],
      titleTextStyle: {
        color: '#001f3f',
        fontSize: 16,
        bold: true
      },
      legend: {
        textStyle: {
          color: '#001f3f',
          fontSize: 12
        }
      },
      chartArea: {
        width: '90%',
        height: '75%'
      }
    };

    var barOptions = {
      title: 'Jumlah Permohonan Per Kategori',
      backgroundColor: 'transparent',
      titleTextStyle: {
        color: '#001f3f',
        fontSize: 16,
        bold: true
      },
      legend: { position: 'none' },
      chartArea: {
        width: '70%',
        height: '70%'
       },
      hAxis: {
        title: 'Jumlah Permohonan',
        titleTextStyle: { color: '#001f3f' },
        textStyle: { color: '#001f3f' }
      },
      vAxis: {
        textStyle: { color: '#001f3f' }
      }
    };

    var pieChart = new google.visualization.PieChart(document.getElementById('piechart'));
    var barChart = new google.visualization.ColumnChart(document.getElementById('barchart'));

    pieChart.draw(data, pieOptions);
    barChart.draw(dataBar, barOptions);
  }
</script>

<style>
  .chart-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    margin-top: -20px;
  }

  .chart-box {
    flex: 1;
    min-width: 450px;
    max-width: 50%;
    height: 450px;
    padding: 10px;
    box-sizing: border-box;
  }

  svg {
    filter: drop-shadow(0 0 6px rgba(0, 0, 0, 0.1));
  }
</style>

<div class="chart-container">
  <div id="piechart" class="chart-box"></div>
  <div id="barchart" class="chart-box"></div>
</div>


@can('dinas')
<div class="row">
    @php
        $boxes = [
            ['title' => 'BANTUAN ASISTENSI PERENCANAAN', 'jumlah' => $jumlahdata1, 'href' => '/bebantekdinasasistensi'],
            ['title' => 'PENELITI KONTRAK', 'jumlah' => $jumlahdata2, 'href' => '/bebantekakundinasberkas'],
            ['title' => 'PERHITUNGAN PENYUSUTAN', 'jumlah' => $jumlahdata3, 'href' => '/bebantekdinaspenyusutan'],
            ['title' => 'PERHITUNGAN TINGKAT KERUSAKAN', 'jumlah' => $jumlahdata4, 'href' => '/bebantekdinaskerusakan'],
            ['title' => 'PERHITUNGAN BIAYA PEMELIHARAAN BGN', 'jumlah' => $jumlahdata5, 'href' => '/bebantekdinaspemeliharaan'],
            ['title' => 'BIAYA KONSTRUKSI PEMBANGUNAN BGN', 'jumlah' => $jumlahdata6, 'href' => '/bebantekdinasperhibgn'],
            ['title' => 'PENDAMPINGAN SERAH TERIMA PEKERJAAN', 'jumlah' => $jumlahdata7, 'href' => '/bebantekdinasserahterima'],
            ['title' => 'PERMINTAAN PERSONIL TIM TEKNIS', 'jumlah' => $jumlahdata8, 'href' => '/bebantekdinaspersonil'],
            // ['title' => 'PENGELOLA TEKNIS', 'jumlah' => $jumlahdata7],
        ];
    @endphp

    @foreach ($boxes as $index => $box)
        <div class="col-12 col-sm-6 col-md-3 mb-4" data-aos="zoom-out" data-aos-delay="{{ $index * 100 }}">
            <a href="{{ $box['href'] }}" style="text-decoration: none;">
                <div class="info-box shadow-lg rounded-3 p-4 transition-custom" style="background: #000080; color: white;">
                    <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                            <path fill="green" d="M14 4V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h-2V2H4v12h8V6h2z"/>
                        </svg>
                    </span>
                    <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                        <span class="info-box-text" style="color: white; font-size: 14px;">{{ $box['title'] }}</span>
                        <span class="info-box-number fw-bold" style="font-size: 16px;">{{ $box['jumlah'] }} Permohonan</span>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endcan

<style>
    .transition-custom {
        transition: all 0.3s ease-in-out;
    }

    .info-box:hover {
        background-color: white !important;
        color: #000080 !important;
        transform: translateY(-10px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .info-box:hover .info-box-text,
    .info-box:hover .info-box-number {
        color: #000080 !important;
    }
</style>

<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

{{-- atas  --}}


@can('superadmin')
{{-- -------------------------------------------------------- --}}
<div class="row">

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for PBG/SLF -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
            <path d="M14 4V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h-2V2H4v12h8V6h2z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color: white;">PBG/SLF</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">10 Permohonan</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for Tracking -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path d="M14 7l-5 5-5-5h3V2h4v5h3z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color:white;">Tracking</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">234 Permohonan</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for Pendataan -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-clipboard-data" viewBox="0 0 16 16">
            <path d="M3 0a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h1zm10 0a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h1zM7 3h2v10H7V3z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color: white;">Pendataan</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">760 Bangunan</span>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
          <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
            <!-- SVG icon for Surat (Mail) -->
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green" viewBox="0 0 16 16">
              <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h13A1.5 1.5 0 0 1 16 2.5v11A1.5 1.5 0 0 1 14.5 15h-13A1.5 1.5 0 0 1 0 13.5V2.5zM1 2v11h14V2H1zm7 3.5L12 7H4l5-1.5z"/>
            </svg>
          </span>
          <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
            <span class="info-box-text" style="color: white;">Bantek</span>
            <span class="info-box-number fw-bold" style="font-size: 16px;">345 Permohonan</span>
          </div>
        </div>
      </div>


  </div>

  <style>
    .info-box:hover {
      background-color: white !important;
      color: #000080 !important;
      transform: translateY(-10px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .info-box-icon svg {
      fill: green; /* Green color for SVG icons */
    }
    .info-box-text, .info-box-number {
      color: white;
    }
    .info-box:hover .info-box-text,
    .info-box:hover .info-box-number {
      color: #000080 !important;
    }
  </style>

              {{-- -------------------------------------------------------- --}}

{{-- -------------------------------------------------------- --}}
<div class="row">

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for Sosialisasi -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-megaphone" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6.1l2.5-.5a1 1 0 0 1 1 1.3l-3 7a1 1 0 0 1-1.8 0l-3-7a1 1 0 0 1 1-1.3L7 7.1V1a1 1 0 0 1 1-1zM8 9.5l1 2.3 1-2.3V1H7v8.5l1-2.3z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color: white;">Sosialisasi</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">50 Permohonan</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for kRK -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
            <path d="M12.146 5.854a.5.5 0 0 0-.707 0L8 9.293 5.854 7.146a.5.5 0 1 0-.708.707l2.5 2.5a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.707z"/>
            <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v11A1.5 1.5 0 0 1 11.5 15h-7A1.5 1.5 0 0 1 3 13.5V2.5zM4 2v11h8V2H4z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color:white;">kRK</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">100 Permohonan</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for Penilik -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0zm0 1a7 7 0 1 1-7 7A7 7 0 0 1 8 1zm0 5a2 2 0 1 1-2 2 2 2 0 0 1 2-2zm0 4a5 5 0 0 0-5 5h10a5 5 0 0 0-5-5z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color: white;">Penilik</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">450 Penilaian</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for MBR Bangunan -->
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="green" viewBox="0 0 16 16">
            <path d="M7 0h2v16H7V0zM0 6h2v8H0V6zm14 0h2v8h-2V6z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color: white;">MBR Bangunan</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">200 Bangunan</span>
        </div>
      </div>
    </div>

</div>

              {{-- -------------------------------------------------------- --}}

{{-- -------------------------------------------------------- --}}
<div class="row">

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for Bantuan Gambar -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-image" viewBox="0 0 16 16">
            <path d="M3 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H3zm0 1h10a1 1 0 0 1 1 1v10H2V2a1 1 0 0 1 1-1zm1 3h8a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color: white;">Bantuan Gambar</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">120 Permohonan</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for Hibah Bangunan -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M7 3V0h2v3h5v8H4V3h3z"/>
            <path d="M7 9v6h2V9H7z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color: white;">Hibah Bangunan</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">85 Permohonan</span>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
        <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
          <!-- SVG icon for SPPD -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-file-earmark" viewBox="0 0 16 16">
            <path d="M14 4V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h-2V2H4v12h8V6h2z"/>
          </svg>
        </span>
        <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
          <span class="info-box-text" style="color: white;">SPPD</span>
          <span class="info-box-number fw-bold" style="font-size: 16px;">300 Permohonan</span>
        </div>
      </div>
    </div>

</div>
@endcan
              {{-- -------------------------------------------------------- --}}



              {{-- -------------------------------------------------------- --}}

              <!--begin::Row-->

          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->

          <!--end::App Content-->
      </main>
      <!--end::App Main-->


      @include('backend.00_administrator.00_baganterpisah.02_footer')
