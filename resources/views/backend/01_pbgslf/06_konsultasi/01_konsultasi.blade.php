@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_administrator.00_baganterpisah.09_button')
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
      ['Jenis Permohonan', 'Jumlah Permohonan'],
      ['PBG', {{ $jumlahDataIdSatu ?? 0 }}],
      ['SLF', {{ $jumlahDataIdDua ?? 0 }}],
      ['SBKBG', {{ $jumlahDataIdTiga ?? 0 }}],
      ['RTB', {{ $jumlahDataIdEmpat ?? 0 }}],
      ['Pendataan', {{ $jumlahDataIdLima ?? 0 }}],
    //   ['Perhitungan BGN', {{ $jumlahDataIdEnam ?? 0 }}],
    //   ['Pendampingan Serah Terima', {{ $jumlahDataIdTujuh ?? 0 }}],
    //   ['Personil Tim Teknis', {{ $jumlahDataIdDelapan ?? 0 }}]
    ]);

    var dataBar = google.visualization.arrayToDataTable([
      ['Jenis Permohonan', 'Jumlah Permohonan', { role: 'style' }],
      ['PBG', {{ $jumlahDataIdSatu ?? 0 }}, '#001f3f'],    // Navy
      ['SLF', {{ $jumlahDataIdDua ?? 0 }}, '#006400'],     // Dark Green
      ['SBKBG', {{ $jumlahDataIdTiga ?? 0 }}, '#FFD700'], // Gold
      ['RTB', {{ $jumlahDataIdEmpat ?? 0 }}, '#00BFFF'],  // DeepSkyBlue
      ['Pendataan', {{ $jumlahDataIdLima ?? 0 }}, '#FF69B4'],    // Hot Pink
    //   ['Perhitungan BGN', {{ $jumlahDataIdEnam ?? 0 }}, '#FF8C00'],     // Dark Orange
    //   ['Pendampingan Serah Terima', {{ $jumlahDataIdTujuh ?? 0 }}, '#8A2BE2'], // Blue Violet
    //   ['Personil Tim Teknis', {{ $jumlahDataIdDelapan ?? 0 }}, '#20B2AA'] // Light Sea Green
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


              {{-- -------------------------------------------------------- --}}
<!-- Load Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawMonthlyChart);

  function drawMonthlyChart() {
    var dataBulanan = google.visualization.arrayToDataTable([
      ['Bulan', 'Jumlah Jadwal Sidang', { role: 'annotation' }],
      ['Januari', {{ $jumlahsidangbulanan[0] ?? 0 }}, '{{ $jumlahsidangbulanan[0] ?? 0 }}'],
      ['Februari', {{ $jumlahsidangbulanan[1] ?? 0 }}, '{{ $jumlahsidangbulanan[1] ?? 0 }}'],
      ['Maret', {{ $jumlahsidangbulanan[2] ?? 0 }}, '{{ $jumlahsidangbulanan[2] ?? 0 }}'],
      ['April', {{ $jumlahsidangbulanan[3] ?? 0 }}, '{{ $jumlahsidangbulanan[3] ?? 0 }}'],
      ['Mei', {{ $jumlahsidangbulanan[4] ?? 0 }}, '{{ $jumlahsidangbulanan[4] ?? 0 }}'],
      ['Juni', {{ $jumlahsidangbulanan[5] ?? 0 }}, '{{ $jumlahsidangbulanan[5] ?? 0 }}'],
      ['Juli', {{ $jumlahsidangbulanan[6] ?? 0 }}, '{{ $jumlahsidangbulanan[6] ?? 0 }}'],
      ['Agustus', {{ $jumlahsidangbulanan[7] ?? 0 }}, '{{ $jumlahsidangbulanan[7] ?? 0 }}'],
      ['September', {{ $jumlahsidangbulanan[8] ?? 0 }}, '{{ $jumlahsidangbulanan[8] ?? 0 }}'],
      ['Oktober', {{ $jumlahsidangbulanan[9] ?? 0 }}, '{{ $jumlahsidangbulanan[9] ?? 0 }}'],
      ['November', {{ $jumlahsidangbulanan[10] ?? 0 }}, '{{ $jumlahsidangbulanan[10] ?? 0 }}'],
      ['Desember', {{ $jumlahsidangbulanan[11] ?? 0 }}, '{{ $jumlahsidangbulanan[11] ?? 0 }}'],
    ]);

    var optionsBulanan = {
      title: 'Jumlah Permohonan Sidang Per Bulan Tahun {{ \Carbon\Carbon::now()->year }}',
      backgroundColor: 'transparent',
      titleTextStyle: {
        color: '#006400',
        fontSize: 16,
        bold: true
      },
      legend: { position: 'none' },
      chartArea: { width: '80%', height: '65%' },
      hAxis: {
        title: 'Bulan',
        titleTextStyle: { color: '#006400' },
        textStyle: { color: '#006400', fontSize: 12 }
      },
      vAxis: {
        title: 'Jumlah',
        titleTextStyle: { color: '#006400' },
        textStyle: { color: '#006400', fontSize: 12 },
        minValue: 0
      },
      bar: { groupWidth: '60%' },
      annotations: {
        alwaysOutside: false,
        textStyle: {
          fontSize: 13,
          color: 'white',
          auraColor: 'none',
          bold: true
        },
        stem: {
          color: 'transparent'
        },
        highContrast: false
      }
    };

    var chartBulanan = new google.visualization.ColumnChart(document.getElementById('chartbulan'));
    chartBulanan.draw(dataBulanan, optionsBulanan);
  }

  window.addEventListener('resize', drawMonthlyChart);
</script>

<div class="chart-container">
  <div id="chartbulan" class="chart-box" style="max-width: 100%; height: 460px;"></div>
</div>

<div class="putih" style="margin-bottom:100px;">

<div style="width: 100%; overflow-x: auto; margin-bottom: 100px; margin-top:20px;">
  <table
    class="table zebra-table" style="border-collapse: separate; border-spacing: 0; border-radius: 20px; overflow: hidden;"

  >

    <thead>
      <tr>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">No</th>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-person-fill"></i> Admin DPUPR
        </th>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-file-earmark-text-fill"></i> Jenis Permohonan
        </th>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-hash"></i> No Registrasi SIM BG
        </th>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-calendar"></i> Tanggal Permohonan
        </th>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-check2-circle"></i> Status Permohonan
        </th>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-folder-fill"></i> Berkas
        </th>
        @can('superadmin')
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-tools"></i> Aksi
        </th>
        @endcan
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
        <tr>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $loop->iteration }}</td>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $item->user->name ?? '-' }}</td>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $item->jenispengajuanpbgslfper->jenispengajuan ?? '-' }}</td>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $item->noregissimbg ?? '-' }}</td>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">
            @php $tgl = $item->tanggalpermohonan ?? null; @endphp
            {{ $tgl ? \Carbon\Carbon::parse($tgl)->translatedFormat('d F Y') : '-' }}
          </td>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">
            @if ($item->validasiberkas5 === 'sudah')
              <span style="display: inline-block; padding: 4px 8px; background-color: #198754; color: white; border-radius: 4px;">Sidang</span>
            @else
              <span style="display: inline-block; padding: 4px 8px; background-color: #6c757d; color: white; border-radius: 4px;">Belum</span>
            @endif
          </td>
        <td style="white-space: nowrap; padding: 6px; text-align: center;">
  <a href="{{ route('bepbgsuratundangan', $item->id) }}"
     class="button-baru">
     <i class="fas fa-eye me-1"></i> Lihat Surat Undangan
  </a>
</td>

          @can('superadmin')
          <td style="white-space: nowrap; padding: 6px; text-align: center;">
            <a href="javascript:void(0)" title="Delete"
               data-bs-toggle="modal" data-bs-target="#deleteModal"
               data-judul="{{ $item->id }}"
               onclick="setDeleteUrl(this)"
               style="padding: 6px 10px; background-color: #dc3545; color: white; border-radius: 6px; display: inline-block;">
              <i class="bi bi-trash"></i>
            </a>
          </td>
          @endcan
        </tr>
      @endforeach
    </tbody>
  </table>
</div>


</div></div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->

          <!--end::App Content-->
      </main>
      <!--end::App Main-->


      @include('backend.00_administrator.00_baganterpisah.02_footer')
