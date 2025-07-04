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
    // Header data array: kolom nama instansi, jumlah, dan style (warna)
    var dataArray = [
      ['Instansi', 'Jumlah Permohonan', { role: 'style' }]
    ];

    // Loop PHP ke JS (inject data dari $jumlahPerInstansi)
    @foreach($jumlahPerInstansi as $item)
      var color = '#001f3f'; // default warna navy
      @if(strtolower($item->instansi) === 'dinas')
        color = '#006400'; // hijau
      @elseif(strtolower($item->instansi) === 'proposal')
        color = '#FFD700'; // emas
      @endif

      dataArray.push(['{{ $item->instansi }}', {{ $item->total }}, color]);
    @endforeach

    // Data untuk PieChart (tidak perlu style kolom)
    var dataPie = google.visualization.arrayToDataTable(
      dataArray.map(function(row, idx) {
        return (idx === 0) ? [row[0], row[1]] : [row[0], row[1]];
      })
    );

    // Data untuk BarChart (pakai style kolom)
    var dataBar = google.visualization.arrayToDataTable(dataArray);

    var pieOptions = {
      title: 'Persentase Permohonan',
      is3D: true,
      backgroundColor: 'transparent',
      colors: ['#006400', '#FFD700', '#001f3f', '#FFA500'],
      titleTextStyle: { color: '#001f3f', fontSize: 16, bold: true },
      legend: { textStyle: { color: '#001f3f', fontSize: 12 } },
      chartArea: { width: '90%', height: '75%' }
    };

    var barOptions = {
      title: 'Jumlah Permohonan',
      backgroundColor: 'transparent',
      titleTextStyle: { color: '#001f3f', fontSize: 16, bold: true },
      legend: { position: 'none' },
      chartArea: { width: '65%', height: '70%' },
      hAxis: { title: 'Jumlah Permohonan', titleTextStyle: { color: '#001f3f' }, textStyle: { color: '#001f3f' } },
      vAxis: { textStyle: { color: '#001f3f' } }
    };

    var pieChart = new google.visualization.PieChart(document.getElementById('piechart'));
    var barChart = new google.visualization.ColumnChart(document.getElementById('barchart'));

    pieChart.draw(dataPie, pieOptions);
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
    <div class="d-flex justify-content-between flex-wrap gap-3">

        <!-- Jumlah Permohonan -->
        <div class="stat-card text-center">
            <div class="stat-number">
                {{ $datajumlahbantuanhibah ?? 0 }}
            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-file-earmark-text" style="margin-right: 6px;"></i> Permohonan
            </div>
        </div>

        <!-- Permohonan Dikembalikan -->
     <div class="stat-card text-center">
    <div class="stat-number">
        {{ $datajumlahbantuanhibah_dikembalikan ?? 0 }}
    </div>
    <div class="stat-label" style="color: navy;">
        <i class="bi bi-clipboard-check" style="margin-right: 6px;"></i> Berkas Survey <br> Pengajuan Proposal
    </div>
</div>


        <!-- Dokumentasi Lapangan -->
        <div class="stat-card text-center">
            <div class="stat-number">
                {{ $datajumlahdok_lapangan ?? 0 }}
            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-camera" style="margin-right: 6px;"></i> Dokumentasi <br> Lapangan
            </div>
        </div>

        <!-- SK Terbit -->
        <div class="stat-card text-center">
            <div class="stat-number">
                {{ $datajumlahsk_terbit ?? 0 }}
            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-file-earmark-medical" style="margin-right: 6px;"></i> SK Terbit <br> Hibah Bangunan
            </div>
        </div>

        <!-- Permohonan Selesai -->
        <div class="stat-card text-center">
            <div class="stat-number">
                {{ $datajumlahsk_selesai ?? 0 }}
            </div>
            <div class="stat-label" style="color: navy;">
                <i class="bi bi-check2-circle" style="margin-right: 6px;"></i> Selesai
            </div>
        </div>

    </div>
</div>

<style>
    .stat-card {
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    min-width: 150px;
    flex-grow: 1;
}

.stat-number {
    font-size: 28px;
    font-weight: bold;
    color: #2c3e50;
}

.stat-label {
    font-size: 14px;
    margin-top: 8px;
}

</style>
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
