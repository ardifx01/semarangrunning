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
              <!-- Info boxes -->

{{-- atas  --}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawCharts);

  function drawCharts() {
    var data = google.visualization.arrayToDataTable([
      ['Kategori', 'Jumlah Permohonan'],
      ['Berkas Asistensi', {{ $jumlahDataIdSatu ?? 0 }}],
      ['Peneliti Kontrak', {{ $jumlahDataIdDua ?? 0 }}],
      ['Perhitungan Penyusutan', {{ $jumlahDataIdTiga ?? 0 }}],
      ['Tingkat Kerusakan', {{ $jumlahDataIdEmpat ?? 0 }}],
      ['Pemeliharaan BGN', {{ $jumlahDataIdLima ?? 0 }}],
      ['Perhitungan BGN', {{ $jumlahDataIdEnam ?? 0 }}],
      ['Pendampingan Serah Terima', {{ $jumlahDataIdTujuh ?? 0 }}],
      ['Personil Tim Teknis', {{ $jumlahDataIdDelapan ?? 0 }}]
    ]);

    var dataBar = google.visualization.arrayToDataTable([
      ['Kategori', 'Jumlah Permohonan', { role: 'style' }],
      ['Berkas Asistensi', {{ $jumlahDataIdSatu ?? 0 }}, '#001f3f'],    // Navy
      ['Peneliti Kontrak', {{ $jumlahDataIdDua ?? 0 }}, '#006400'],     // Dark Green
      ['Perhitungan Penyusutan', {{ $jumlahDataIdTiga ?? 0 }}, '#FFD700'], // Gold
      ['Tingkat Kerusakan', {{ $jumlahDataIdEmpat ?? 0 }}, '#00BFFF'],  // DeepSkyBlue
      ['Pemeliharaan BGN', {{ $jumlahDataIdLima ?? 0 }}, '#FF69B4'],    // Hot Pink
      ['Perhitungan BGN', {{ $jumlahDataIdEnam ?? 0 }}, '#FF8C00'],     // Dark Orange
      ['Pendampingan Serah Terima', {{ $jumlahDataIdTujuh ?? 0 }}, '#8A2BE2'], // Blue Violet
      ['Personil Tim Teknis', {{ $jumlahDataIdDelapan ?? 0 }}, '#20B2AA'] // Light Sea Green
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

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #3b82f6 100%);
            min-height: 100vh;
            color: #ffffff;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px 0;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: left 0.5s;
        }

        .stat-card:hover::before {
            left: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

.stat-number {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: #020075;
    display: inline-block;
    animation: zoomInOut 3s ease-in-out infinite;
}

@keyframes zoomInOut {
    0%, 100% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.2);
        opacity: 0.8;
    }
}

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .stat-change {
            font-size: 0.9rem;
            padding: 5px 12px;
            border-radius: 20px;
            display: inline-block;
        }

        .positive {
            background: rgba(34, 197, 94, 0.2);
            color: #86efac;
        }

        .negative {
            background: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
        }

        .charts-section {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .chart-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 30px;
        }

        .chart-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .bar-chart {
            display: flex;
            align-items: end;
            height: 200px;
            gap: 15px;
            margin-top: 20px;
        }

        .bar {
            flex: 1;
            background: linear-gradient(to top, #1e40af, #60a5fa);
            border-radius: 5px 5px 0 0;
            position: relative;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .bar:hover {
            transform: scaleY(1.1);
            background: linear-gradient(to top, #3b82f6, #93c5fd);
        }

        .bar::after {
            content: attr(data-value);
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.8rem;
            font-weight: 600;
        }

        .pie-chart {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: conic-gradient(
                #60a5fa 0deg 120deg,
                #a78bfa 120deg 200deg,
                #34d399 200deg 280deg,
                #fbbf24 280deg 360deg
            );
            margin: 20px auto;
            position: relative;
            animation: rotate 2s ease-in-out;
        }

        .pie-chart::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: #1e40af;
            border-radius: 50%;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .legend {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }

        .legend-color {
            width: 15px;
            height: 15px;
            border-radius: 3px;
        }

        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .metric-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 25px;
        }

        .metric-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 20px;
        }

        .metric-title {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .metric-value {
            font-size: 2rem;
            font-weight: 700;
            color: #60a5fa;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            margin-top: 15px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #60a5fa, #a78bfa);
            border-radius: 4px;
            transition: width 2s ease;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .charts-section {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 15px;
            }
        }
    </style>


<div class="container" style="margin-top: -50px;">
    <div class="stats-grid" style="display: flex; flex-wrap: wrap; gap: 16px;">
        <div class="stat-card">
            <div class="stat-number">
               {{
    ($jumlahDataIdSatu ?? 0) +
    ($jumlahDataIdDua ?? 0) +
    ($jumlahDataIdTiga ?? 0) +
    ($jumlahDataIdEmpat ?? 0) +
    ($jumlahDataIdLima ?? 0) +
    ($jumlahDataIdEnam ?? 0) +
    ($jumlahDataIdTujuh ?? 0) +
    ($jumlahDataIdDelapan ?? 0)
}}

            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-file-earmark-text-fill" style="margin-right: 6px;"></i> Permohonan
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-number">
                {{
                    ($jumlahDataIdSatu_dikembalikan ?? 0) +
                    ($jumlahDataIdDua_dikembalikan ?? 0) +
                    ($jumlahDataIdTiga_dikembalikan ?? 0) +
                    ($jumlahDataIdEmpat_dikembalikan ?? 0) +
                    ($jumlahDataIdLima_dikembalikan ?? 0) +
                    ($jumlahDataIdEnam_dikembalikan ?? 0) +
                    ($jumlahDataIdTujuh_dikembalikan ?? 0) +
                    ($jumlahDataIdDelapan_dikembalikan ?? 0)
                }}
            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-arrow-repeat" style="margin-right: 6px;"></i> Dikembalikan
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-number">
                {{
                    ($jumlahDataIdSatu_doklapangan ?? 0) +
                    ($jumlahDataIdDua_doklapangan ?? 0) +
                    ($jumlahDataIdTiga_doklapangan ?? 0) +
                    ($jumlahDataIdEmpat_doklapangan ?? 0) +
                    ($jumlahDataIdLima_doklapangan ?? 0) +
                    ($jumlahDataIdEnam_doklapangan ?? 0) +
                    ($jumlahDataIdTujuh_doklapangan ?? 0) +
                    ($jumlahDataIdDelapan_doklapangan ?? 0)
                }}
            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-calendar-check" style="margin-right: 6px;"></i> Cek Lapangan
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-number">
                {{
                    ($jumlahDataIdSatu_olahdata ?? 0) +
                    ($jumlahDataIdDua_olahdata ?? 0) +
                    ($jumlahDataIdTiga_olahdata ?? 0) +
                    ($jumlahDataIdEmpat_olahdata ?? 0) +
                    ($jumlahDataIdLima_olahdata ?? 0) +
                    ($jumlahDataIdEnam_olahdata ?? 0) +
                    ($jumlahDataIdTujuh_olahdata ?? 0) +
                    ($jumlahDataIdDelapan_olahdata ?? 0)
                }}
            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-file-earmark-check" style="margin-right: 6px;"></i> Pengolahan Data
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-number">
                {{
                    ($jumlahDataIdSatu_terbit ?? 0) +
                    ($jumlahDataIdDua_terbit ?? 0) +
                    ($jumlahDataIdTiga_terbit ?? 0) +
                    ($jumlahDataIdEmpat_terbit ?? 0) +
                    ($jumlahDataIdLima_terbit ?? 0) +
                    ($jumlahDataIdEnam_terbit ?? 0) +
                    ($jumlahDataIdTujuh_terbit ?? 0) +
                    ($jumlahDataIdDelapan_terbit ?? 0)
                }}
            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-file-earmark-check" style="margin-right: 6px;"></i> Surat Terbit
            </div>
        </div>
    </div>
</div>

{{-- -------------------------------------------------------- --}}
<div class="row">

   <div class="col-12 col-sm-6 col-md-3">
    <a href="/bebantuanteknisassistensi">

        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
            <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                <!-- Icon: Clipboard Check -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.293 6.354 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h8a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 12 1.5H4zm1 1a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V3H5v-.5z"/>
                </svg>
            </span>
            <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                <span class="info-box-text" style="color: white;">Berkas Asistensi</span>
                <span class="info-box-number fw-bold" style="font-size: 16px;">
                    {{ $jumlahDataIdSatu }} Permohonan
                </span>
            </div>
        </div>
    </a>
</div>


    {{-- <div class="col-12 col-sm-6 col-md-3">
        <a href="/bebantuanteknis">
            <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
                <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                    <!-- SVG icon for Tracking -->
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-journal-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H6.5v1.5a.5.5 0 0 1-1 0V8H4a.5.5 0 0 1 0-1h1.5V5.5A.5.5 0 0 1 6 5z"/>
  <path d="M3 1.5A1.5 1.5 0 0 0 1.5 3v10A1.5 1.5 0 0 0 3 14.5H13a.5.5 0 0 0 .5-.5v-1h-1v.5H3V3h9.5v.5h1V3a.5.5 0 0 0-.5-.5H3z"/>
  <path d="M14 6.5a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0v-6a.5.5 0 0 1 .5-.5z"/>
  <path d="M12.5 8a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
</svg>

                </span>
                <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                    <span class="info-box-text" style="color:white;">Berkas Permohonan Bantek</span>
                    <span class="info-box-number fw-bold" style="font-size: 16px;"> {{$datasemua->total()}}Permohonan</span>
                </div>
            </div>
        </a>
    </div> --}}

       <div class="col-12 col-sm-6 col-md-3">
    <a href="/bepenelitikontrak">

        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
            <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                <!-- Icon: Clipboard Check -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.293 6.354 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h8a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 12 1.5H4zm1 1a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V3H5v-.5z"/>
                </svg>
            </span>
            <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                <span class="info-box-text" style="color: white;">Peneliti Kontrak </span>
                <span class="info-box-number fw-bold" style="font-size: 16px;">
                    {{ $jumlahDataIdDua }} Permohonan
                </span>
            </div>
        </div>
    </a>
</div>

       <div class="col-12 col-sm-6 col-md-3">
    <a href="/beperhitunganpenyusutan">

        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
            <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                <!-- Icon: Clipboard Check -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.293 6.354 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h8a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 12 1.5H4zm1 1a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V3H5v-.5z"/>
                </svg>
            </span>
            <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                <span class="info-box-text" style="color: white;">Perhitungan Penyusutan </span>
                <span class="info-box-number fw-bold" style="font-size: 16px;">
                    {{ $jumlahDataIdTiga }} Permohonan
                </span>
            </div>
        </div>
    </a>
</div>

<div class="col-12 col-sm-6 col-md-3">
    <a href="/beperhitungankerusakan">

        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
            <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                <!-- Icon: Clipboard Check -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.293 6.354 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h8a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 12 1.5H4zm1 1a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V3H5v-.5z"/>
                </svg>
            </span>
            <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                <span class="info-box-text" style="color: white;">Perhitungan Tingkat Kerusakan </span>
                <span class="info-box-number fw-bold" style="font-size: 16px;">
                    {{ $jumlahDataIdEmpat }} Permohonan
                </span>
            </div>
        </div>
    </a>
</div>

<div class="col-12 col-sm-6 col-md-3">
    <a href="/beperhitunganbgn">

        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
            <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                <!-- Icon: Clipboard Check -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.293 6.354 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h8a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 12 1.5H4zm1 1a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V3H5v-.5z"/>
                </svg>
            </span>
            <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                <span class="info-box-text" style="color: white;">Perhitungan Pemeliharaan BGN </span>
                <span class="info-box-number fw-bold" style="font-size: 16px;">
                    {{ $jumlahDataIdLima }} Permohonan
                </span>
            </div>
        </div>
    </a>
</div>

<div class="col-12 col-sm-6 col-md-3">
    <a href="/bekonstruksiperhitunganbgn">

        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
            <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                <!-- Icon: Clipboard Check -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.293 6.354 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h8a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 12 1.5H4zm1 1a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V3H5v-.5z"/>
                </svg>
            </span>
            <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                <span class="info-box-text" style="color: white;">Konstruksi Perhitungan BGN </span>
                <span class="info-box-number fw-bold" style="font-size: 16px;">
                    {{ $jumlahDataIdEnam }} Permohonan
                </span>
            </div>
        </div>
    </a>
</div>

<div class="col-12 col-sm-6 col-md-3">
    <a href="/beserahterima">

        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
            <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                <!-- Icon: Clipboard Check -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.293 6.354 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h8a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 12 1.5H4zm1 1a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V3H5v-.5z"/>
                </svg>
            </span>
            <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                <span class="info-box-text" style="color: white;">Pendampingan Serah Terima </span>
                <span class="info-box-number fw-bold" style="font-size: 16px;">
                    {{ $jumlahDataIdDelapan }} Permohonan
                </span>
            </div>
        </div>
    </a>
</div>

<div class="col-12 col-sm-6 col-md-3">
    <a href="/bepersontimteknis">

        <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;">
            <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                <!-- Icon: Clipboard Check -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.293 6.354 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M4 1.5A1.5 1.5 0 0 0 2.5 3v10A1.5 1.5 0 0 0 4 14.5h8a1.5 1.5 0 0 0 1.5-1.5V3A1.5 1.5 0 0 0 12 1.5H4zm1 1a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5V3H5v-.5z"/>
                </svg>
            </span>
            <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                <span class="info-box-text" style="color: white;">Permintaan Personil Tim Teknis </span>
                <span class="info-box-number fw-bold" style="font-size: 16px;">
                    {{ $jumlahDataIdSatu }} Permohonan
                </span>
            </div>
        </div>
    </a>
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

              <!--begin::Row-->

          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->

          <!--end::App Content-->
      </main>
      <!--end::App Main-->


      @include('backend.00_administrator.00_baganterpisah.02_footer')
