<style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #F6F5FA;
      color: #030303;
      padding-bottom: 100px;
      padding-left: 0;
      padding-right: 0;
      margin: 0;
    }

    .sticky-navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;
      z-index: 9999;
      background-color: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      padding-left: 0;
      padding-right: 0;
    }

    .navbar-wrapper {
      width: 100%;
      background-color: #09146A;
      padding: 20px 0;
    }

    .custom-navbar {
      width: 100%;
      max-width: 1130px; /* Menambahkan max-width untuk membuat navbar tidak terlalu lebar */
      margin: 0 auto; /* Menambahkan margin otomatis untuk memusatkan navbar */
      padding: 0 20px; /* Memberikan padding kecil di kiri dan kanan */
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
    }

    .nav-links {
      display: flex;
      gap: 30px;
      list-style: none;
      padding: 0;
      margin: 0;
      flex-wrap: wrap;
      align-items: center;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-links a:hover,
    .nav-links .active {
      color: #6635F1;
      font-weight: 600;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #09146A;
      padding: 10px 0;
      border-radius: 8px;
      top: 100%;
      left: 0;
      min-width: 160px;
      z-index: 999;
    }

    .dropdown-menu li {
      padding: 8px 20px;
      font-size: 14px;
    }

    .dropdown-menu li a {
      color: white;
      display: block;
    }

    .dropdown-menu li a:hover {
      color: #6635F1;
    }

    .dropdown.show .dropdown-menu {
      display: block;
    }

    .profile {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 600;
      color: black;
      transition: color 0.3s ease;
    }

    .profile:hover {
      color: #6635F1;
    }

    .profile-pic {
      width: 50px;
      height: 50px;
      border-radius: 9999px;
      overflow: hidden;
      flex-shrink: 0;
    }

    .profile-pic img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .logo-group {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-group img {
      height: 40px;
      width: auto;
    }

    .auth-buttons a {
      text-decoration: none;
      color: black;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 6px 20px;
      border-radius: 4px;
      background-color: white;
      border: 0.2px solid black;
      transition: all 0.3s ease;
    }

    .auth-buttons a:hover {
      background-color: #001f3f;
      color: white;
    }
  </style>

  <div class="sticky-navbar">
    <div class="navbar-wrapper">
      <div class="custom-navbar" style="background-color: white; padding: 10px; border-radius:15px;">
        <!-- Kiri: Logo dan Judul -->
        <div class="logo-group" style="">
          <img src="/assets/abgblora/logo/logokabupatenblora.png" alt="logo" loading="lazy" />
          <img src="/assets/abgblora/logo/pupr.png" alt="logo" loading="lazy" />
          <span style="color: black; font-weight: bold; line-height: 1.5;">
            ABG Blora Bangunan Gedung <br />
            Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
          </span>
        </div>



        @auth
        <div class="profile">
  <p>Hi, {{ substr(Auth::user()->name, 0, 10) }}..</p>

        <div class="profile-pic">
            {{-- <img src="{{assets item->avatar}}" alt="Profile Photo" /> --}}
            <img src="{{ asset($item->avatar ?? 'assets/abgblora/logo/iconabgblora.png') }}" alt="Profile Photo" />
        </div>
        </div>
        @endauth

        <!-- Kanan: Tombol Login & Daftar -->
        <div class="auth-buttons" style="display: flex; gap: 20px; margin-right: 50px;">

            <a href="/register">
            <img src="/assets/abgblora/logo/register.png" alt="Register Icon" width="16" height="16" />
            Daftar
          </a>

          @guest
    <a href="/login" style="display: flex; align-items: center; gap: 6px; font-size: 16px;">
        <img src="/assets/abgblora/logo/login.png" alt="Login Icon" width="16" height="16" />
        Login
    </a>
@endguest

@auth
    <form action="{{ url('/logout') }}" method="POST" style="display: inline;">
        @csrf
    <button type="submit" style="display: flex; align-items: center; gap: 6px; font-size: 16px; background: none; border: none; cursor: pointer;">
    <img src="/assets/abgblora/logo/login.png" alt="Logout Icon" width="16" height="16" />
    <span style="color: red;">Logout</span>
</button>

    </form>
@endauth

        </div>
      </div>
<br>


              <!-- Modal -->
              <div id="loginModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1000;">
                <div style="background: white; width: 300px; margin: 15% auto; padding: 20px; border-radius: 8px; text-align: center;">
                    <img src="/assets/abgblora/logo/iconabgblora.png" alt="">
                    <br>
                    <p>Silakan login atau daftar terlebih dahulu untuk mengakses layanan ini!</p>
                    <br>
                    <button
                        onclick="redirectToLogin()"
                        style="
                            padding: 8px 16px;
                            background: #007bff;
                            color: white;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                        "
                        onmouseover="this.style.background='white'; this.style.color='black';"
                        onmouseout="this.style.background='#007bff'; this.style.color='white';"
                    >
                        OK
                    </button>
                </div>
            </div>


      <!-- Menu Navigasi -->
      <nav class="custom-navbar" style="margin-top: 10px;">
        <ul class="nav-links">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">PBG/SLF</a>
                <ul class="dropdown-menu" style="width: 300px;">
                  <li style="font-size: 14px;">
                    <a href="#" style="display: flex; align-items: center;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                        <path d="M3 2a1 1 0 0 0-1 1v11h12V3a1 1 0 0 0-1-1H3zm1 2h8v1H4V4zm0 2h8v1H4V6zm0 2h5v1H4V8z"/>
                      </svg>
                      Informasi PBG & SLF
                    </a>
                  </li>
                  <li style="font-size: 14px;">
                    <a href="#" onclick="showLoginModal()" style="display: flex; align-items: center;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                        <path d="M10.5 8a.5.5 0 0 1-.5.5H5.707l1.147 1.146a.5.5 0 0 1-.708.708l-2-2a.498.498 0 0 1-.146-.35.498.498 0 0 1 .146-.354l2-2a.5.5 0 1 1 .708.708L5.707 7.5H10a.5.5 0 0 1 .5.5zM13 14V2a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v3h1V2h8v12H4v-3H3v3a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z"/>
                      </svg>
                      Permohonan PBG & SLF
                    </a>
                  </li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Tracking</a>
                <ul class="dropdown-menu" style="width: 300px;">
                  <li style="font-size: 14px;">
                    <a href="#" style="display: flex; align-items: center;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 4.906 14.32l2.387 1.378a.5.5 0 0 0 .746-.437V1.739a.5.5 0 0 0-.746-.437L12.906 2.68A7.978 7.978 0 0 0 8 0zM1 8a7 7 0 1 1 12.906 4.32l-2.262-1.306a.5.5 0 0 0-.644.059l-.71.71A6.986 6.986 0 0 1 1 8z"/>
                      </svg>
                      Informasi Tracking
                    </a>
                  </li>
                  <li style="font-size: 14px;">
                    <a href="#" style="display: flex; align-items: center;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
                        <path d="M12.5 1a1 1 0 0 1 1 1v2.293a1 1 0 0 1-.293.707l-1.707 1.707a1 1 0 0 0-.293.707V9a1 1 0 0 1-1 1H9v1.5a1.5 1.5 0 0 1-3 0V10H5a1 1 0 0 1-1-1V7.707a1 1 0 0 0-.293-.707L2 5.293A1 1 0 0 1 1.707 4H4V2a1 1 0 0 1 1-1h7.5z"/>
                      </svg>
                      Tracking PBG & SLF
                    </a>
                  </li>
                </ul>
              </li>

          <li class="dropdown">
  <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Pendataan</a>
  <ul class="dropdown-menu" style="width: 300px;">
    <li style="font-size: 14px;">
      <a href="/404" style="display: flex; align-items: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
          <path d="M8 0a8 8 0 1 0 8 8A8.01 8.01 0 0 0 8 0zM4.5 7.5v1h7v-1h-7zm0 3v1h7v-1h-7z"/>
        </svg>
        Informasi Bangunan Gedung
      </a>
    </li>
    <li style="font-size: 14px;">
      <a href="/databangunangedung" style="display: flex; align-items: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
          <path d="M6 0v2H3v2H1v12h14V4h-2V2h-3V0H6zm1 1h2v2H7V1zm-3 3h8v2H4V4zm0 3h8v2H4V7zm0 3h8v2H4v-2z"/>
        </svg>
        Bangunan Gedung
      </a>
    </li>
    <li style="font-size: 14px;">
      <a href="/pendataankicbangunangedung" style="display: flex; align-items: center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
          <path d="M8 0a8 8 0 1 0 8 8A8.01 8.01 0 0 0 8 0zM7.001 4.5A.5.5 0 0 1 8 4h.001a.5.5 0 0 1 .499.5v3a.5.5 0 0 1-1 0v-3zm.499 6a.75.75 0 1 1 .001-1.5A.75.75 0 0 1 7.5 10.5z"/>
        </svg>
        KIC Gedung & Bangunan
      </a>
    </li>
  </ul>
</li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Bantek</a>
    <ul class="dropdown-menu" style="width: 300px;">
      <li style="font-size: 14px;">
        <a href="/infobantek" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V5.414a2 2 0 0 0-.586-1.414L10.414.586A2 2 0 0 0 9 0H4zm5 1.5V5a1 1 0 0 0 1 1h3.5L9 1.5z"/>
          </svg>
          Informasi Bantuan Teknis
        </a>
      </li>
      <li style="font-size: 14px;">
        <a href="/febantuanteknis" onclick="showLoginModal()" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M5.5 5a.5.5 0 0 1 .5-.5h2V2.707a.5.5 0 0 1 .854-.353l3.5 3.5a.5.5 0 0 1 0 .707l-3.5 3.5A.5.5 0 0 1 8 10.293V7.5H6a.5.5 0 0 1-.5-.5v-2z"/>
            <path d="M14 13.5v-1A1.5 1.5 0 0 0 12.5 11h-9A1.5 1.5 0 0 0 2 12.5v1a.5.5 0 0 0 1 0v-1A.5.5 0 0 1 3.5 12h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 0 1 0z"/>
          </svg>
          Permohonan Bantuan Teknis
        </a>
      </li>
    </ul>
  </li>


  <li class="dropdown">
    <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Sosialisasi</a>
    <ul class="dropdown-menu" style="width: 300px;">
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M8 1a7 7 0 1 0 7 7A7.008 7.008 0 0 0 8 1zM4 8a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0z"/>
          </svg>
          Informasi Sosialisasi
        </a>
      </li>
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M6 0a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v6h1.5A1.5 1.5 0 0 0 3 13.5v.5h1v-.5A1.5 1.5 0 0 0 4.5 12H14V4a2 2 0 0 0-2-2h-2V2a2 2 0 0 0-2-2H6zM4 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2H4V2zm0 3h9a1 1 0 0 1 1 1v5H3V6a1 1 0 0 1 1-1z"/>
          </svg>
          Daftar Agenda Sosialisasi
        </a>
      </li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">KRK</a>
    <ul class="dropdown-menu" style="width: 300px;">
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M8.5 1.5a.5.5 0 0 1 .5.5v.5H13a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h4V2a.5.5 0 0 1 .5-.5h1zM3 4v10h10V4H3zm3.5 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1z"/>
          </svg>
          Informasi Permohonan KRK
        </a>
      </li>
      <li style="font-size: 14px;">
        <a href="/permohonankrk" onclick="showLoginModal()" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M8.146 11.354a.5.5 0 0 0 .708 0L11 9.207l-1.414-1.414L8.5 9.879V4.5a.5.5 0 0 0-1 0v5.379l-1.086-1.086L5 9.207l2.146 2.147z"/>
            <path d="M14 13.5v-1A1.5 1.5 0 0 0 12.5 11h-9A1.5 1.5 0 0 0 2 12.5v1a.5.5 0 0 0 1 0v-1A.5.5 0 0 1 3.5 12h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 0 1 0z"/>
          </svg>
          Permohonan KRK
        </a>
      </li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Penilik</a>
    <ul class="dropdown-menu" style="width: 300px;">
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M8 0a5 5 0 1 1 0 10A5 5 0 0 1 8 0zm0 11c-2.673 0-8 1.337-8 4v1h16v-1c0-2.663-5.327-4-8-4z"/>
          </svg>
          Informasi Penilik Bangunan
        </a>
      </li>
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zm-8 4a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
            <path d="M8 5a3 3 0 1 0 0 6A3 3 0 0 0 8 5z"/>
          </svg>
          Penilik Bangunan
        </a>
      </li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">MBR</a>
    <ul class="dropdown-menu" style="width: 300px;">
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M10 0H6a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v8h16V6a2 2 0 0 0-2-2h-2V2a2 2 0 0 0-2-2zM6 1h4a1 1 0 0 1 1 1v2H5V2a1 1 0 0 1 1-1zm9 5v7H1V6a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1z"/>
          </svg>
          Informasi MBR
        </a>
      </li>
      <li style="font-size: 14px;">
        <a href="#" onclick="showLoginModal()" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M6 8a.5.5 0 0 0 0 1h2.793L7.146 10.646a.5.5 0 0 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708L8.793 9H6z"/>
            <path d="M1.5 1A1.5 1.5 0 0 0 0 2.5v11A1.5 1.5 0 0 0 1.5 15h13a1.5 1.5 0 0 0 1.5-1.5v-11A1.5 1.5 0 0 0 14.5 1h-13zM1 2.5A.5.5 0 0 1 1.5 2h13a.5.5 0 0 1 .5.5V11H1V2.5z"/>
          </svg>
          Permohonan MBR
        </a>
      </li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Bantuan</a>
    <ul class="dropdown-menu" style="width: 300px;">
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0zm0 12a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm1.002-4.248c-.245.36-.543.598-.733.758a1.993 1.993 0 0 0-.39.414.847.847 0 0 0-.14.465v.027a.5.5 0 0 1-1 0v-.027a1.853 1.853 0 0 1 .308-1.02c.21-.296.476-.51.694-.683.218-.173.456-.362.615-.596A1.13 1.13 0 0 0 9 6.5a1.5 1.5 0 1 0-2.788.72.5.5 0 0 1-.894.448A2.5 2.5 0 1 1 10 6.5a2.13 2.13 0 0 1-.998 1.252z"/>
          </svg>
          Informasi Bantuan Gambar
        </a>
      </li>
      <li style="font-size: 14px;">
        <a href="#" onclick="showLoginModal()" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M10.5 6.5a.5.5 0 0 0 0-1H6.707L8.354 3.854a.5.5 0 1 0-.708-.708l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L6.707 6.5H10.5z"/>
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2z"/>
          </svg>
          Permohonan Bantuan Gambar
        </a>
      </li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Hibah</a>
    <ul class="dropdown-menu" style="width: 300px;">
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0zm0 12a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm1.002-4.248c-.245.36-.543.598-.733.758a1.993 1.993 0 0 0-.39.414.847.847 0 0 0-.14.465v.027a.5.5 0 0 1-1 0v-.027a1.853 1.853 0 0 1 .308-1.02c.21-.296.476-.51.694-.683.218-.173.456-.362.615-.596A1.13 1.13 0 0 0 9 6.5a1.5 1.5 0 1 0-2.788.72.5.5 0 0 1-.894.448A2.5 2.5 0 1 1 10 6.5a2.13 2.13 0 0 1-.998 1.252z"/>
          </svg>
          Informasi Hibah Bangunan
        </a>
      </li>
      <li style="font-size: 14px;">
        <a href="#" style="display: flex; align-items: center;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 8px;" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 8 8A8 8 0 0 0 8 0zm0 12a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm1.002-4.248c-.245.36-.543.598-.733.758a1.993 1.993 0 0 0-.39.414.847.847 0 0 0-.14.465v.027a.5.5 0 0 1-1 0v-.027a1.853 1.853 0 0 1 .308-1.02c.21-.296.476-.51.694-.683.218-.173.456-.362.615-.596A1.13 1.13 0 0 0 9 6.5a1.5 1.5 0 1 0-2.788.72.5.5 0 0 1-.894.448A2.5 2.5 0 1 1 10 6.5a2.13 2.13 0 0 1-.998 1.252z"/>
          </svg>
          Daftar Hibah Bangunan
        </a>
      </li>
    </ul>
  </li>

</ul>

      </nav>
    </div>
  </div>

  <script>
    function toggleDropdown(e) {
      e.preventDefault();
      const dropdown = e.target.closest('.dropdown');
      dropdown.classList.toggle('show');

      // Close other dropdowns
      document.querySelectorAll('.dropdown').forEach(el => {
        if (el !== dropdown) el.classList.remove('show');
      });
    }

    // Close dropdown when clicking outside
    window.addEventListener('click', function (e) {
      if (!e.target.closest('.dropdown')) {
        document.querySelectorAll('.dropdown').forEach(el => el.classList.remove('show'));
      }
    });
  </script>

