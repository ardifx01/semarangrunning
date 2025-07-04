@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
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
            <div class="row">

                    @include('backend.00_administrator.00_baganterpisah.10_selamatdatang')

              {{-- <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div> --}}

            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <br>

        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

        <div class="container-fluid">
            <!--begin::Row-->
  <!-- =========================================================== -->
  {{-- <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5> --}}
  <!--begin::Row-->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawCharts);

  function drawCharts() {
    // Data untuk kedua chart
    var data = google.visualization.arrayToDataTable([
      ['Fungsi', 'Jumlah Permohonan'],
      ['Fungsi Usaha',     {{ $datajumlahkrkusaha ?? 0 }}],
      ['Fungsi Hunian',    {{ $datajumlahkrkhunian ?? 0 }}],
      ['Fungsi Keagamaan', {{ $datajumlahkrkkeagamaan ?? 0 }}],
      ['Fungsi Sosial Budaya', {{ $datajumlahkrksosbud ?? 0 }}]
    ]);

    var dataBar = google.visualization.arrayToDataTable([
      ['Fungsi', 'Jumlah Permohonan', { role: 'style' }],
      ['Fungsi Usaha',     {{ $datajumlahkrkusaha ?? 0 }}, '#006400'],
      ['Fungsi Hunian',    {{ $datajumlahkrkhunian ?? 0 }}, '#FFD700'],
      ['Fungsi Keagamaan', {{ $datajumlahkrkkeagamaan ?? 0 }}, '#001f3f'],
      ['Fungsi Sosial Budaya', {{ $datajumlahkrksosbud ?? 0 }}, '#FFA500']
    ]);

    // Opsi PieChart
    var pieOptions = {
      title: 'Persentase Permohonan',
      is3D: true,
      backgroundColor: 'transparent',
      colors: ['#006400', '#FFD700', '#001f3f', '#FFA500'],
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

    // Opsi Bar Chart
    var barOptions = {
      title: 'Jumlah Permohonan',
      backgroundColor: 'transparent',
      titleTextStyle: {
        color: '#001f3f',
        fontSize: 16,
        bold: true
      },
      legend: { position: 'none' },
      chartArea: {
        width: '65%',
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
    margin-top: -80px;
  }

  .chart-box {
    flex: 1;
    min-width: 450px;
    max-width: 50%;
    height: 400px;
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



  <div class="container" style="margin-top: -50px;">

        <div class="stats-grid">
    <div class="stat-card">
     <div class="stat-number">
    {{ ($datajumlahkrkusaha ?? 0) + ($datajumlahkrkhunian ?? 0) + ($datajumlahkrkkeagamaan ?? 0) + ($datajumlahkrksosbud ?? 0) }}
</div>
        <div class="stat-label" style="color: navy;">
            <i class="bi bi-file-earmark-text-fill" style="margin-right: 6px;"></i> Permohonan
        </div>
    </div>
  <div class="stat-card">
    <div class="stat-number">
        {{
            $datajumlahkrkusaha_dikembalikan +
            $datajumlahkrkhunian_dikembalikan +
            $datajumlahkrkagama_dikembalikan +
            $datajumlahkrksosbud_dikembalikan
        }}
    </div>
    <div class="stat-label" style="color: navy;">
        <i class="bi bi-arrow-repeat" style="margin-right: 6px;"></i> Dikembalikan
    </div>
</div>

    <div class="stat-card">
         <div class="stat-number">
        {{
            $datajumlahkrkusaha_lapangan +
            $datajumlahkrkhunian_lapangan +
            $datajumlahkrkagama_lapangan +
            $datajumlahkrksosbud_lapangan
        }}
    </div>
        <div class="stat-label" style="color: navy;">
            <i class="bi bi-calendar-check" style="margin-right: 6px;"></i> Cek Lapangan
        </div>
    </div>
    <div class="stat-card">
       <div class="stat-number">
        {{
            $datajumlahkrkusaha_terbit +
            $datajumlahkrkhunian_terbit +
            $datajumlahkrkagama_terbit +
            $datajumlahkrksosbud_terbit
        }}
        <div class="stat-label" style="color: navy;">
            <i class="bi bi-file-earmark-check" style="margin-right: 6px;"></i> Surat Terbit
        </div>
    </div>
</div>


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

        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
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

  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <a href="/bekrkusahapemohon">
            <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;"
                 onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.info-box-number').style.color='black';"
                 onmouseout="this.style.backgroundColor='#000080'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.info-box-number').style.color='white';">
                <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                    <!-- SVG icon for Fungsi Usaha -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-briefcase" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h3V1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v1h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zM4 3V2h8v1H4zm10 1H2v8h12V4z"/>
                    </svg>
                </span>
                <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                    <span class="info-box-text" style="color: white;">Fungsi Usaha</span>
                    <span class="info-box-number fw-bold" style="font-size: 16px;">{{$datajumlahkrkusaha}} Berkas Permohonan</span>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <a href="/bekrkhunianpemohon">
            <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;"
                 onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.info-box-number').style.color='black';"
                 onmouseout="this.style.backgroundColor='#000080'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.info-box-number').style.color='white';">
                <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                    <!-- SVG icon for Fungsi Hunian -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8 3.293l6 6V13h-2v-2a1 1 0 0 0-1-1h-2V6h-4v3H3a1 1 0 0 0-1 1v2H0v-3l8-7.707zM8 1.5l7 7V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8.5l7-7z"/>
                    </svg>
                </span>
                <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                    <span class="info-box-text" style="color: white;">Fungsi Hunian</span>
                    <span class="info-box-number fw-bold" style="font-size: 16px;">{{$datajumlahkrkhunian}} Permohonan</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Fungsi Keagamaan -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="/bekrkkeagamaanpemohon">
            <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;"
                 onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.info-box-number').style.color='black';"
                 onmouseout="this.style.backgroundColor='#000080'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.info-box-number').style.color='white';">
                <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                    <!-- SVG icon for Fungsi Keagamaan -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-church" viewBox="0 0 16 16">
                        <path d="M8 0L6 2h2v5H4V2h2l2-2h2l2 2h2v5h-6V2h2L8 0zM3 7v8h1V7H3zm10 0v8h-1V7h1z"/>
                    </svg>
                </span>
                <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                    <span class="info-box-text" style="color: white;">Fungsi Keagamaan</span>
                    <span class="info-box-number fw-bold" style="font-size: 16px;">{{$datajumlahkrkkeagamaan}} Permohonan</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Fungsi Sosial Budaya -->
    <div class="col-md-3 col-sm-6 col-12">
        <a href="/bekrksosbudpemohon">
            <div class="info-box shadow-lg rounded-3 p-4" style="background: #000080; color: white; transition: all 0.3s ease;"
                 onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('.info-box-text').style.color='black'; this.querySelector('.info-box-number').style.color='black';"
                 onmouseout="this.style.backgroundColor='#000080'; this.style.color='white'; this.querySelector('.info-box-text').style.color='white'; this.querySelector('.info-box-number').style.color='white';">
                <span class="info-box-icon d-flex justify-content-center align-items-center p-3 shadow-sm rounded" style="background-color: #ffd100; width: 60px; height: 60px;">
                    <!-- SVG icon for Fungsi Sosial Budaya -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-3 4-3 4 3 4 3-1 1-1 1H3z"/>
                        <path d="M8 0a7 7 0 1 1 0 14A7 7 0 0 1 8 0zM8 1a6 6 0 1 0 0 12A6 6 0 0 0 8 1z"/>
                    </svg>
                </span>
                <div class="info-box-content mt-3 text-center" style="font-family: 'Poppins', sans-serif;">
                    <span class="info-box-text" style="color: white;">Fungsi Sosial Budaya</span>
                    <span class="info-box-number fw-bold" style="font-size: 16px;">{{$datajumlahkrksosbud}} Permohonan</span>
                </div>
            </div>
        </a>
    </div>
</div>

                <!-- /.col -->


            </div>

  {{-- ================================================================================== --}}
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
