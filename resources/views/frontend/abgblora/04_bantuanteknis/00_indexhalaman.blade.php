<style>

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
        <div class="flex items-center gap-[20px]" style="margin-top:20px;">
          <!-- Gambar di kiri -->
          <br><br>
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

        @include('frontend.abgblora.04_bantuanteknis.00_menubantek')


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
