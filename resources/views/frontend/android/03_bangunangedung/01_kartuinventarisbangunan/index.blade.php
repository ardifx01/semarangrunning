@include('frontend.android.00_fiturmenu.01_header')

<body class="font-poppins text-[#070625]">
  <section id="content" class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#F8F8F8] overflow-x-hidden pb-[120px] relative">
    <div class="w-full h-[184px] absolute top-0 bg-cover bg-center" style="background-image: url('/assets/android/iconmenu/newheader.jpg');">
    </div>
     <div class="relative z-10 flex flex-col gap-6 mt-[60px]">
      <div class="top-menu flex justify-between items-center px-[18px]">
          <div class="w-[42px] h-[42px] flex shrink-0">
            <img src="/assets/abgblora/logo/logokabupatenblora.png" alt="icon">
          </div>
        <p class="font-semibold leading-[28px] text-white text-center" style="font-size: 18px;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora </span></p>
        <div class="w-[42px] h-[42px] flex shrink-0">
            <img src="/assets/abgblora/logo/pupr.png" alt="icon">
          </div>
      </div>
      <form action="success.html" id="Details" class="group result-card-container flex flex-col gap-6">
        <div id="Contact-details" class="bg-white rounded-xl overflow-hidden flex flex-col mx-[18px]">
          <div class="flex p-4 items-center gap-4">
            <button type="button" class="contact-name accordion-button flex items-center gap-2 w-full" data-accordion="accordion-1">
              <div class="flex items-center">
                <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                  <img src="/assets/android/menunavigasi/03.png" class="object-cover w-full h-full" alt="photo">
                </div>
              </div>
              <div class="flex flex-col flex-1 gap-[2px] text-left">
                <p class="font-semibold">{{$title}}</p>
                {{-- <p class="font-medium text-xs leading-[18px] text-[#757C98]">Contact Details</p> --}}
              </div>
            </button>
          </div>

        </div>

        <div class="flex flex-col space-y-3 px-[18px]">
            <!-- Card 1 -->
            <a href="/4040" class="bg-white rounded-xl flex flex-col p-4 hover:shadow-md transition">
              <div class="flex items-center gap-3 p-4 rounded-lg border border-[#DCDFE6]">
                <div class="w-[60px] h-[60px] flex shrink-0 rounded-lg overflow-hidden">
                  <img src="/assets/android/menunavigasi/03.png" class="object-cover w-full h-full" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[2px]">
                  <p class="font-semibold text-sm leading-[21px] text-[#4041DA]">Bangunan Gedung</p>
                  <p class="font-semibold">Kartu Inventaris Barang Gedung & Bangunan</p>
                </div>
              </div>
            </a>

            <!-- Card 2 -->
            <a href="/404" class="bg-white rounded-xl flex flex-col p-4 hover:shadow-md transition">
              <div class="flex items-center gap-3 p-4 rounded-lg border border-[#DCDFE6]">
                <div class="w-[60px] h-[60px] flex shrink-0 rounded-lg overflow-hidden">
                  <img src="/assets/android/menunavigasi/03.png" class="object-cover w-full h-full" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[2px]">
                  <p class="font-semibold text-sm leading-[21px] text-[#4041DA]">Bangunan Gedung</p>
                  <p class="font-semibold">Aset Bangunan Gedung Kabupaten Blora</p>
                </div>
              </div>
            </a>

            <!-- Card 3 -->
            <a href="/404" class="bg-white rounded-xl flex flex-col p-4 hover:shadow-md transition">
              <div class="flex items-center gap-3 p-4 rounded-lg border border-[#DCDFE6]">
                <div class="w-[60px] h-[60px] flex shrink-0 rounded-lg overflow-hidden">
                  <img src="/assets/android/menunavigasi/03.png" class="object-cover w-full h-full" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[2px]">
                  <p class="font-semibold text-sm leading-[21px] text-[#4041DA]">Bangunan Gedung</p>
                  <p class="font-semibold">Data Statistik KIC Barang & Bangunan</p>
                </div>
              </div>
            </a>

            <!-- Card 4 -->
            <a href="/404" class="bg-white rounded-xl flex flex-col p-4 hover:shadow-md transition">
              <div class="flex items-center gap-3 p-4 rounded-lg border border-[#DCDFE6]">
                <div class="w-[60px] h-[60px] flex shrink-0 rounded-lg overflow-hidden">
                  <img src="/assets/android/menunavigasi/03.png" class="object-cover w-full h-full" alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[2px]">
                  <p class="font-semibold text-sm leading-[21px] text-[#4041DA]">Bangunan Gedung</p>
                  <p class="font-semibold">Data Statistik Jumlah Bangunan Gedung</p>
                </div>
              </div>
            </a>
          </div>


      </form>

      @include('frontend.android.00_fiturmenu.05_keterangan')


    </div>

    @include('frontend.android.00_fiturmenu.03_android')

  </section>

  @include('frontend.android.00_fiturmenu.02_footer')
