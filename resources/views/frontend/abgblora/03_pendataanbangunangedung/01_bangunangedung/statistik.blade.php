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

<section id="breadcrumb" class="container max-w-[1130px] mx-auto" style="margin-top: 160px;" >

    <div class="flex items-center gap-[20px]">
        <!-- Gambar di kiri -->
        <img src="/assets/abgblora/logo/iconabgblora.png" alt="Logo" class="w-[60px] -my-[15px]" width="10%" style="margin-right: 20px; margin-bottom:10px;" >

        <!-- Breadcrumb di kanan -->
        <div class="flex gap-[30px] items-center flex-wrap">
            <span>/</span>
            <a href="/databangunangedung" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: black;">
                Data Bangunan Gedung
            </a>
            <span>/</span>
            <a href="/" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: blue;">
                {{$title}}
            </a>

        </div>
    </div>

</section>


  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>




  <section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row gap-5">

    <div class="grid grid-cols-2 gap-3">
        <!-- CARD 1 -->
        <a href="#" class="card" style="border-radius: 20px;">
            <div class="p-4 rounded-[20px] bg-white flex flex-col items-start gap-4 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">

                <!-- PIE CHART -->
                <div class="w-full h-[200px] rounded-[20px] overflow-hidden relative">
                    <div id="piechart_3d" class="w-full h-full"></div>
                </div>

                <!-- Judul -->

                <!-- Chart Container -->
                <div class="w-full px-2">
                    <div id="piechart_3d" class="w-full h-[500px]"></div>
                    <p class="title font-semibold text-sm text-left w-full">
                        Statistik Fungsi Bangunan
                    </p>

                    <!-- Tabel Keterangan -->
                    <div class="overflow-x-auto mt-4">
                        <table class="table-auto w-full text-sm border border-gray-300">
                            <thead class="bg-gray-100 text-left">
                                <tr>
                                    <th class="border px-4 py-2">Fungsi Bangunan</th>
                                    <th class="border px-4 py-2">Jumlah</th>
                                    <th class="border px-4 py-2">Persentase (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fungsiPersentase as $item)
                                    <tr>
                                        <td class="border px-4 py-2" style="text-transform: capitalize">{{ $item['label'] }}</td>
                                        <td class="border px-4 py-2 text-center">{{ $item['count'] }}</td>
                                        <td class="border px-4 py-2 text-center">{{ $item['value'] }}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </a>

    </div>

    <div class="grid grid-cols-2 gap-3">
        <!-- CARD 1 -->
        <a href="#" class="card" style="border-radius: 20px;">
            <div class="p-4 rounded-[20px] bg-white flex flex-col items-start gap-4 hover:ring-2 hover:ring-[#6635F1] transition-all duration-300">

                <!-- PIE CHART -->
                <div class="w-full h-[200px] rounded-[20px] overflow-hidden relative">
                    <div id="piechart_3d" class="w-full h-full"></div>
                </div>

                <!-- CHART & TABEL KOMPLEKSITAS -->
                <div class="w-full">
                    <!-- Chart Kompleksitas -->
                    <div id="piechart_kompleksitas" class="w-full h-[200px] mb-2"></div>

                    <!-- Judul -->
                    <p class="title font-semibold text-sm text-left">
                        Statistik Kompleksitas Bangunan
                    </p>

                    <!-- Tabel Keterangan -->
                    <div class="overflow-x-auto mt-2">
                        <table class="table-auto w-full text-sm border border-gray-300">
                            <thead class="bg-gray-100 text-left">
                                <tr>
                                    <th class="border px-4 py-2">Kompleksitas Bangunan</th>
                                    <th class="border px-4 py-2">Jumlah</th>
                                    <th class="border px-4 py-2">Persentase (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fungsiPersentase2 as $item)
                                    <tr>
                                        <td class="border px-4 py-2">{{ ucwords(strtolower($item['label'])) }}</td>
                                        <td class="border px-4 py-2 text-center">{{ ucfirst(strtolower($item['count'])) }}</td>
                                        <td class="border px-4 py-2 text-center">{{ ucfirst(strtolower($item['value'])) }}%</td>
                                                       </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </a>
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
<!-- Load Google Chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // ==================== CHART FUNGSI BANGUNAN ====================
        var data = google.visualization.arrayToDataTable([
            ['Fungsi Bangunan', 'Persentase'],
            @foreach ($fungsiPersentase as $item)
                ['{{ $item['label'] }}', {{ $item['value'] }}],
            @endforeach
        ]);

        var options = {
            title: 'Bangunan Gedung (Total: {{ $total }} Data)',
            is3D: true,
            legend: 'none',
            titleTextStyle: {
                fontSize: 14
            },
            chartArea: {
                width: '100%',
                height: '80%'
            }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);

        // ==================== CHART KOMPLEKSITAS BANGUNAN ====================
        var dataKompleksitas = google.visualization.arrayToDataTable([
            ['Kompleksitas', 'Persentase'],
            @foreach ($fungsiPersentase2 as $item)
                ['{{ $item['label'] }}', {{ $item['value'] }}],
            @endforeach
        ]);

        var optionsKompleksitas = {
            title: 'Kompleksitas Bangunan (Total: {{ $total }} Data)',
            is3D: true,
            legend: 'none',
            titleTextStyle: {
                fontSize: 14
            },
            chartArea: {
                width: '100%',
                height: '80%'
            }
        };

        var chartKompleksitas = new google.visualization.PieChart(document.getElementById('piechart_kompleksitas'));
        chartKompleksitas.draw(dataKompleksitas, optionsKompleksitas);
    }
</script>
