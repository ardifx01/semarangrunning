@include('frontend.android.00_fiturmenu.01_header')
@include('frontend.android.00_fiturmenu.06_alert')

<body class="font-poppins text-[#2A2A2A]">
  <section id="content" class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-gradient-to-b from-[#F9F9F9] to-[#F0F0F0] overflow-x-hidden pb-[122px] relative">
    <!-- Modern Header with Gradient -->
    <header class="flex justify-center h-[376px] px-[18px] relative overflow-hidden -mb-[106px]">
      <div class="absolute inset-0 bg-gradient-to-br from-[#800020] via-[#5D1F1E] to-[#2E8B57] opacity-90"></div>
      <img src="/assets/android/iconmenu/race.png" class="absolute object-cover w-full h-full mix-blend-overlay" alt="backgrounds">

      <!-- Elegant Navigation Bar -->
      <div class="fixed top-0 w-full max-w-[640px] px-[18px] z-30" style="margin-top: -25px;">
        {{-- <nav class="bg-white/90 backdrop-blur-md p-3 sm:p-[10px_16px] h-fit w-full flex items-center justify-between rounded-full shadow-[0_8px_30px_0_#0A093212] z-10 mt-[60px] border border-white/20">
          <!-- Left Logo -->
          <a href="signup.html" class="shrink-0">
            <div class="w-12 h-12 sm:w-[54px] sm:h-[54px] flex overflow-hidden rounded-full items-center justify-center bg-white p-1 shadow-md">
              <img src="/assets/abgblora/logo/logokabupatenblora.png" alt="icon" class="w-[80%]">
            </div>
          </a>

          <!-- Center Text -->
          <div class="flex-1 mx-2 sm:mx-4 min-w-0">
            <div class="flex flex-col items-center sm:items-start text-center sm:text-left">
              <p class="font-bold text-sm sm:text-base leading-tight text-[#800020] truncate w-full">
                ABG Blora Bangunan Gedung
              </p>
              <div class="flex items-center justify-center sm:justify-start">
                <p class="font-medium text-xs sm:text-sm leading-tight whitespace-normal text-[#2E8B57]">
                  Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora Jawa Tengah
                </p>
              </div>
            </div>
          </div>

          <!-- Right Logo -->
          <a href="" class="shrink-0">
            <div class="w-12 h-12 sm:w-[54px] sm:h-[54px] flex overflow-hidden rounded-full items-center justify-center bg-white p-1 shadow-md">
              <img src="/assets/abgblora/logo/pupr.png" alt="icon" class="w-[80%]">
            </div>
          </a>
        </nav> --}}
      </div>
    </header>

    <div style="margin-top: 0px;">
        @include('frontend.android.00_fiturmenu.04_menunavigasi')
    </div>

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            padding: 10px;
            max-width: 500px;
            margin: 0 auto;
        }

        .header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 20px 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 22px;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .header p {
            font-size: 14px;
            opacity: 0.9;
        }

        .promo-section {
            margin-bottom: 20px;
        }

        .promo-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .promo-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e3c72;
        }

        .promo-link {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #e63946;
            text-decoration: none;
            font-weight: 500;
        }

        .promo-carousel {
            display: flex;
            overflow-x: auto;
            gap: 15px;
            padding-bottom: 10px;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .promo-carousel::-webkit-scrollbar {
            height: 5px;
        }

        .promo-carousel::-webkit-scrollbar-thumb {
            background: #e63946;
            border-radius: 10px;
        }

        .promo-card {
            flex: 0 0 85%;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            scroll-snap-align: start;
        }

        .card-image-container {
            position: relative;
            height: 150px;
            overflow: hidden;
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.7) 100%);
        }

        .card-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e63946;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .card-content {
            padding: 15px;
        }

        .card-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #1e3c72;
        }

        .card-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-tag {
            background-color: #f1faee;
            color: #457b9d;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .card-button {
            background-color: #e63946;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        /* Competition Info Section */
        .info-section {
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .info-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #e63946;
        }

        .info-item {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #1e3c72;
        }

        .info-value {
            color: #666;
        }

        .highlight {
            color: #e63946;
            font-weight: 600;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 15px;
            color: #666;
            font-size: 12px;
        }
    </style>


<!-- IMPORT FONT POPPINS -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

.poppins {
  font-family: 'Poppins', sans-serif;
}
</style>

<!-- EVENTS SECTION -->
<div class="promo-section poppins">
  <div class="promo-header flex justify-between items-center mb-6 px-4">
   <h2 class="text-2xl font-semibold text-gray-800 font-[Poppins, sans-serif]">
  Events SNOC X
</h2>

    <a href="#" class="flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm">
      View All
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </a>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
    <!-- CARD 1 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
      <div class="relative">
        <img src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
             class="w-full h-48 object-cover" alt="Orienteering Sprint" loading="lazy">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        {{-- <div class="absolute top-2 left-2 bg-white text-xs font-semibold px-3 py-1 rounded-full shadow">
          12 Jun 2023
        </div> --}}
      </div>
      <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800 mb-1" style="font-family: 'Poppins', sans-serif;">National Sprint Championship</h3>
        <p class="text-sm text-gray-600 mb-3" style="font-family: 'Poppins', sans-serif;">Fast-paced urban orienteering in Jakarta city center</p>
        <div class="flex items-center justify-between">
          <span class="text-xs font-medium text-blue-600" style="font-family: 'Poppins', sans-serif;">#Sprint</span>
          <button class="text-blue-600 hover:text-blue-800 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
      <div class="relative">
        <img src="https://images.unsplash.com/photo-1470114716159-e389f8712fda?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
             class="w-full h-48 object-cover" alt="Orienteering Mountain" loading="lazy">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        {{-- <div class="absolute top-2 left-2 bg-white text-xs font-semibold px-3 py-1 rounded-full shadow">
          25 Jul 2023
        </div> --}}
      </div>
      <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800 mb-1" style="font-family: 'Poppins', sans-serif;">Mountain Orienteering Challenge</h3>
        <p class="text-sm text-gray-600 mb-3" style="font-family: 'Poppins', sans-serif;">Technical terrain in the hills of Bandung</p>
        <div class="flex items-center justify-between">
          <span class="text-xs font-medium text-green-600" style="font-family: 'Poppins', sans-serif;">#Mountain</span>
          <button class="text-green-600 hover:text-green-800 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
      <div class="relative">
        <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
             class="w-full h-48 object-cover" alt="Junior Orienteering" loading="lazy">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        {{-- <div class="absolute top-2 left-2 bg-white text-xs font-semibold px-3 py-1 rounded-full shadow">
          15 Aug 2023
        </div> --}}
      </div>
      <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800 mb-1" style="font-family: 'Poppins', sans-serif;">Junior National Championships</h3>
        <p class="text-sm text-gray-600 mb-3" style="font-family: 'Poppins', sans-serif;">For competitors under 18 years old in Yogyakarta</p>
        <div class="flex items-center justify-between">
          <span class="text-xs font-medium text-purple-600" style="font-family: 'Poppins', sans-serif;">#Junior</span>
          <button class="text-purple-600 hover:text-purple-800 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

    <script>
        // Simple touch feedback for mobile
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.promo-card');
            cards.forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.98)';
                });
                card.addEventListener('touchend', function() {
                    this.style.transform = '';
                });
            });
        });
    </script>

    <style>
      .promo-section {
        margin: 1.5rem 1rem;
        width: calc(100% - 2rem);
        background: white;
        padding: 1.5rem 1rem;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(122, 40, 62, 0.08);
        color: #2A2A2A;
        font-family: 'Poppins', sans-serif;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(128, 0, 32, 0.1);
      }

      .promo-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #800020 0%, #2E8B57 100%);
      }

      .promo-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
      }

      .promo-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #800020;
        margin: 0;
        position: relative;
        padding-left: 12px;
      }

      .promo-title::before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 70%;
        width: 4px;
        background: #2E8B57;
        border-radius: 4px;
      }

      .promo-link {
        display: flex;
        align-items: center;
        font-size: 0.85rem;
        font-weight: 600;
        color: #2E8B57;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .promo-link:hover {
        color: #800020;
        transform: translateX(4px);
      }

      .promo-carousel {
        display: flex;
        gap: 1.25rem;
        overflow-x: auto;
        padding-bottom: 0.75rem;
        scrollbar-width: none;
      }

      .promo-carousel::-webkit-scrollbar {
        display: none;
      }

      .promo-card {
        min-width: 280px;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(128, 0, 32, 0.08);
        transition: all 0.3s ease;
        border: 1px solid rgba(128, 0, 32, 0.05);
      }

      .promo-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(128, 0, 32, 0.12);
      }

      .card-image-container {
        position: relative;
        height: 160px;
        overflow: hidden;
      }

      .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
      }

      .promo-card:hover .card-image {
        transform: scale(1.05);
      }

      .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(128, 0, 32, 0.7) 0%, rgba(128, 0, 32, 0) 60%);
      }

      .card-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background: white;
        color: #800020;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 600;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      }

      .card-content {
        padding: 1.25rem;
        background: white;
      }

      .card-title {
        font-size: 1rem;
        font-weight: 700;
        color: #800020;
        margin: 0 0 0.5rem 0;
        line-height: 1.3;
      }

      .card-description {
        font-size: 0.8rem;
        color: #666;
        margin: 0 0 1rem 0;
        line-height: 1.5;
      }

      .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .card-tag {
        font-size: 0.7rem;
        font-weight: 600;
        color: #2E8B57;
        background: rgba(46, 139, 87, 0.1);
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
      }

      .card-button {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #800020;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .card-button:hover {
        background: #2E8B57;
        transform: scale(1.1);
      }
    </style>

    <style>
      .news-section {
        margin: 1.5rem 1rem;
        width: calc(100% - 2rem);
        background: white;
        padding: 1.5rem 1rem;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(46, 139, 87, 0.08);
        color: #2A2A2A;
        font-family: 'Poppins', sans-serif;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(46, 139, 87, 0.1);
      }

      .news-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #2E8B57 0%, #800020 100%);
      }

      .news-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
      }

      .news-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #2E8B57;
        margin: 0;
        position: relative;
        padding-left: 12px;
      }

      .news-title::before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 70%;
        width: 4px;
        background: #800020;
        border-radius: 4px;
      }

      .news-link {
        display: flex;
        align-items: center;
        font-size: 0.85rem;
        font-weight: 600;
        color: #800020;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .news-link:hover {
        color: #2E8B57;
        transform: translateX(4px);
      }

      .news-carousel {
        display: flex;
        gap: 1.25rem;
        overflow-x: auto;
        padding-bottom: 0.75rem;
        scrollbar-width: none;
      }

      .news-carousel::-webkit-scrollbar {
        display: none;
      }

      .news-card {
        min-width: 280px;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(46, 139, 87, 0.08);
        transition: all 0.3s ease;
        border: 1px solid rgba(46, 139, 87, 0.05);
      }

      .news-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(46, 139, 87, 0.12);
      }

      .news-image-container {
        position: relative;
        height: 160px;
        overflow: hidden;
      }

      .news-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
      }

      .news-card:hover .news-image {
        transform: scale(1.05);
      }

      .news-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(46, 139, 87, 0.7) 0%, rgba(46, 139, 87, 0) 60%);
      }

      .news-content {
        padding: 1.25rem;
        background: white;
      }

      .news-meta {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.75rem;
        font-size: 0.7rem;
      }

      .news-category {
        background: #800020;
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-weight: 600;
      }

      .news-date {
        color: #888;
        align-self: center;
        font-weight: 500;
      }

      .news-headline {
        font-size: 1rem;
        font-weight: 700;
        color: #2E8B57;
        margin: 0 0 0.75rem 0;
        line-height: 1.3;
      }

      .news-excerpt {
        font-size: 0.8rem;
        color: #666;
        margin: 0 0 1rem 0;
        line-height: 1.5;
      }

      .news-readmore {
        display: flex;
        align-items: center;
        font-size: 0.75rem;
        font-weight: 600;
        color: #800020;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .news-readmore:hover {
        color: #2E8B57;
        transform: translateX(4px);
      }

      .news-readmore svg {
        transition: all 0.3s ease;
      }

      .news-readmore:hover svg {
        transform: translateX(4px);
      }
    </style>

    <br><br>

    @include('frontend.android.00_fiturmenu.05_keterangan')

    @include('frontend.android.00_fiturmenu.03_android')

  </section>

  @include('frontend.android.00_fiturmenu.02_footer')
</body>
