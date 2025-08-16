<style>
    /* Sembunyikan sidebar di layar kecil */
@media (max-width: 768px) {
    #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 250px;
        background: #1a1a1a;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
        z-index: 999;
    }
    #sidebar.active {
        transform: translateX(0);
    }
}

</style>

<div class="sidebar" id="sidebar" style="
  background-color: #1a1a1a;
  padding: 16px;
  height: 100vh;
  overflow-y: auto;
  position: fixed;
  width: 250px;
  box-sizing: border-box;
">
<div class="sidebar-header" style="display: flex; flex-direction: column; align-items: flex-start;">
    <div style="display: flex; gap: 5px; margin-bottom: -100px;">
        <img src="/assets/abgblora/logo/snocnew.png" alt="" width="200px;">
        {{-- <img src="/assets/abgblora/logo/5remove.png" alt="" width="75px;"> --}}
    </div>
    <h3 style="color: white; margin: 0; padding-bottom: 15px; border-bottom: 1px solid #333; width: 100%;">
        Dashboard
    </h3>
</div>

  <div class="sidebar-menu" style="margin-top: 10px;">
    <a href="/dashboard" class="menu-item active" style="
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 8px;
      border-radius: 4px;
      margin-bottom: 4px;
      transition: background-color 0.3s;
    ">
      <i class="bi bi-speedometer2"></i><span>Dashboard</span>
    </a>


@canany(['peserta'])

<!-- ========== MENU PERLOMBAAN ========== -->
<div class="menu-item" onclick="toggleSubmenuPerlombaan()">
  <i class="bi bi-people-fill"></i>
  <span>Informasi Tim</span>
  <i class="bi bi-caret-down-fill ms-auto" id="perlombaan-arrow"></i>
</div>

<div id="submenu-perlombaan" class="submenu">
  <a href="/perlombaan/daftartim" class="submenu-item">
    <i class="bi bi-list-check"></i>1. Daftar Tim
  </a>
  <a href="/daftarlomba" class="submenu-item">
    <i class="bi bi-trophy"></i>2. Daftar Lomba
  </a>
  {{-- <a href="/404" class="submenu-item">
    <i class="bi bi-activity"></i>3. Status
  </a> --}}
  <a href="/sertifikatpeserta" class="submenu-item">
    <i class="bi bi-patch-check-fill"></i>3. Sertifikat
  </a>
</div>

<!-- ========== MENU PENJURIAN ========== -->
{{-- <div class="penjurian-menu-item" onclick="togglePenjurianSubmenu()">
  <i class="bi bi-journal-text"></i>
  <span style="margin-left:13px;">Materi</span>
  <i class="bi bi-caret-down-fill ms-auto" id="penjurian-arrow"></i>
</div>

<div id="penjurian-submenu" class="submenu">
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-geo-alt"></i> Track Jalur
  </a>
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-tools"></i> Informasi Peralatan
  </a>
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-book"></i> Panduan Perlombaan
  </a>
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-clock-history"></i> Waktu Perlombaan
  </a>
</div> --}}

<style>
  /* Style umum untuk menu */
  .menu-item, .penjurian-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 0.95rem;
    font-weight: 500;
  }
  .menu-item i, .penjurian-menu-item i {
    font-size: 1.3rem;
  }
  .menu-item:hover, .penjurian-menu-item:hover {
    background-color: #333;
  }

  /* Style untuk submenu */
  .submenu {
    margin-left: 20px;
    display: none;
    border-left: 1px solid #333;
    padding-left: 12px;
  }
  .submenu-item, .penjurian-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .submenu-item i, .penjurian-submenu-item i {
    font-size: 1.3rem;
  }
  .submenu-item:hover, .penjurian-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }
</style>

<script>
  function toggleSubmenuPerlombaan() {
    const submenu = document.getElementById("submenu-perlombaan");
    const arrow = document.getElementById("perlombaan-arrow");
    const isHidden = submenu.style.display === "none";
    submenu.style.display = isHidden ? "block" : "none";
    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }

  function togglePenjurianSubmenu() {
    const submenu = document.getElementById("penjurian-submenu");
    const arrow = document.getElementById("penjurian-arrow");
    const isHidden = submenu.style.display === "none";
    submenu.style.display = isHidden ? "block" : "none";
    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script>


<!-- ========== MENU QUICK COUNT ========== -->
<div class="quickcount-menu-item" onclick="toggleQuickCountSubmenu()">
  <i class="bi bi-graph-up-arrow"></i>
  <span>Quick Count</span>
  <i class="bi bi-caret-down-fill ms-auto" id="quickcount-arrow"></i>
</div>

<div id="quickcount-submenu" class="submenu">
  <a href="/404" class="quickcount-submenu-item">
    <i class="bi bi-bar-chart-line"></i> Hasil Sementara
  </a>
  <a href="/404" class="quickcount-submenu-item">
    <i class="bi bi-pie-chart"></i> Statistik
  </a>
  <a href="/404" class="quickcount-submenu-item">
    <i class="bi bi-file-earmark-text"></i> Laporan
  </a>
</div>

<style>
  /* Style umum untuk Quick Count */
  .quickcount-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 0.95rem;
    font-weight: 500;
  }
  .quickcount-menu-item i {
    font-size: 1.3rem;
  }
  .quickcount-menu-item:hover {
    background-color: #333;
  }

  /* Submenu Quick Count */
  .quickcount-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .quickcount-submenu-item i {
    font-size: 1.3rem;
  }
  .quickcount-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }
</style>

<script>
  function toggleQuickCountSubmenu() {
    const submenu = document.getElementById("quickcount-submenu");
    const arrow = document.getElementById("quickcount-arrow");
    const isHidden = submenu.style.display === "none";
    submenu.style.display = isHidden ? "block" : "none";
    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script>

@endcanany

@can('super_admin')

<!-- ========== MENU DAFTAR SEMUA TIM ========== -->
<!-- Menu Daftar Semua Tim -->
<div class="daftarsemua-tim-menu-item" onclick="toggleDaftarSemuaTimSubmenu()">
  <i class="bi bi-people-fill"></i>
  <span class="menu-label">Daftar Tim</span>
  <i class="bi bi-caret-down-fill ms-auto" id="daftarsemuatim-arrow"></i>
</div>

<div id="daftarsemuatim-submenu" class="submenu">
  <a href="/katumumputera" class="daftarsemuatim-submenu-item">
    <i class="bi bi-list-ul"></i> Kat Umum Putera
  </a>
  <a href="/katumumputeri" class="daftarsemuatim-submenu-item">
    <i class="bi bi-list-ul"></i> Kat Umum Puteri
  </a>
  <a href="/katpelajarputera" class="daftarsemuatim-submenu-item">
    <i class="bi bi-list-ul"></i> Kat Pelajar Putera
  </a>
  <a href="/katpelajarputeri" class="daftarsemuatim-submenu-item">
    <i class="bi bi-list-ul"></i> Kat Pelajar Puteri
  </a>
</div>

<style>
  /* Menu Utama */
  .daftarsemua-tim-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 0.95rem;
    font-weight: 500;
    background-color: transparent;
  }
  .daftarsemua-tim-menu-item i {
    font-size: 1.3rem;
  }
  .daftarsemua-tim-menu-item:hover {
    background-color: #333;
  }
  .menu-label {
    margin-left: 13px;
  }

  /* Submenu Container */
  .submenu {
    display: none;
    margin-left: 24px;
    flex-direction: column;
    animation: slideDown 0.3s ease forwards;
  }

  /* Submenu Items */
  .daftarsemuatim-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .daftarsemuatim-submenu-item i {
    font-size: 1.2rem;
  }
  .daftarsemuatim-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  /* Animasi slide down */
  @keyframes slideDown {
    from {
      opacity: 0;
      transform: translateY(-5px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<script>
  function toggleDaftarSemuaTimSubmenu() {
    const submenu = document.getElementById("daftarsemuatim-submenu");
    const arrow = document.getElementById("daftarsemuatim-arrow");
    const isHidden = submenu.style.display === "none" || submenu.style.display === "";

    if (isHidden) {
      submenu.style.display = "flex";
      submenu.style.animation = "slideDown 0.3s ease forwards";
    } else {
      submenu.style.display = "none";
    }

    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script>

<!-- ========== MENU SERTIFIKAT ========== -->
<div class="sertifikat-menu-item" onclick="toggleSertifikatSubmenu()">
  <i class="bi bi-file-earmark-text-fill"></i>
  <span class="menu-label">Sertifikat</span>
  <i class="bi bi-caret-down-fill ms-auto" id="sertifikat-arrow"></i>
</div>

<div id="sertifikat-submenu" class="sertifikat-submenu">
  <a href="/katumumputerasertifikat" class="sertifikat-submenu-item">
    <i class="bi bi-list-ul"></i> Umum Putera
  </a>
  <a href="/katumumputerisertifikat" class="sertifikat-submenu-item">
    <i class="bi bi-list-ul"></i> Umum Puteri
  </a>
  <a href="/katpelajarputerasertifikat" class="sertifikat-submenu-item">
    <i class="bi bi-list-ul"></i> Pelajar Putera
  </a>
  <a href="/katpelajarputerisertifikat" class="sertifikat-submenu-item">
    <i class="bi bi-list-ul"></i> Pelajar Puteri
  </a>
</div>

<style>
  /* Menu Utama Sertifikat */
  .sertifikat-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 0.95rem;
    font-weight: 500;
    background-color: transparent;
  }
  .sertifikat-menu-item i {
    font-size: 1.3rem;
  }
  .sertifikat-menu-item:hover {
    background-color: #333;
  }

  /* Submenu Sertifikat */
  .sertifikat-submenu {
    display: none;
    margin-left: 24px;
    flex-direction: column;
    animation: slideDownSertifikat 0.3s ease forwards;
  }

  .sertifikat-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .sertifikat-submenu-item i {
    font-size: 1.2rem;
  }
  .sertifikat-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  @keyframes slideDownSertifikat {
    from {
      opacity: 0;
      transform: translateY(-5px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<script>
  function toggleSertifikatSubmenu() {
    const submenu = document.getElementById("sertifikat-submenu");
    const arrow = document.getElementById("sertifikat-arrow");
    const isHidden = submenu.style.display === "none" || submenu.style.display === "";

    if (isHidden) {
      submenu.style.display = "flex";
      submenu.style.animation = "slideDownSertifikat 0.3s ease forwards";
    } else {
      submenu.style.display = "none";
    }

    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script>

<!-- ========== MENU DAFTAR AKUN ========== -->
<div class="daftarakun-menu-item" onclick="toggleDaftarakunSubmenu()">
  <i class="bi bi-file-earmark-text-fill"></i>
  <span class="menu-label">Daftar Akun</span>
  <i class="bi bi-caret-down-fill ms-auto" id="daftarakun-arrow"></i>
</div>

<div id="daftarakun-submenu" class="daftarakun-submenu">
  <a href="/datasemuaakun" class="daftarakun-submenu-item">
    <i class="bi bi-list-ul"></i> Semua Akun
  </a>
  {{-- <a href="/katumumputerisertifikat" class="daftarakun-submenu-item">
    <i class="bi bi-list-ul"></i> Umum Puteri
  </a>
  <a href="/katpelajarputerasertifikat" class="daftarakun-submenu-item">
    <i class="bi bi-list-ul"></i> Pelajar Putera
  </a>
  <a href="/katpelajarputerisertifikat" class="daftarakun-submenu-item">
    <i class="bi bi-list-ul"></i> Pelajar Puteri
  </a> --}}
</div>

<style>
  /* Menu Utama Daftar Akun */
  .daftarakun-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 0.95rem;
    font-weight: 500;
    background-color: transparent;
  }
  .daftarakun-menu-item i {
    font-size: 1.3rem;
  }
  .daftarakun-menu-item:hover {
    background-color: #333;
  }

  /* Submenu Daftar Akun */
  .daftarakun-submenu {
    display: none;
    margin-left: 24px;
    flex-direction: column;
    animation: slideDownDaftarakun 0.3s ease forwards;
  }

  .daftarakun-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .daftarakun-submenu-item i {
    font-size: 1.2rem;
  }
  .daftarakun-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  @keyframes slideDownDaftarakun {
    from {
      opacity: 0;
      transform: translateY(-5px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<script>
  function toggleDaftarakunSubmenu() {
    const submenu = document.getElementById("daftarakun-submenu");
    const arrow = document.getElementById("daftarakun-arrow");
    const isHidden = submenu.style.display === "none" || submenu.style.display === "";

    if (isHidden) {
      submenu.style.display = "flex";
      submenu.style.animation = "slideDownDaftarakun 0.3s ease forwards";
    } else {
      submenu.style.display = "none";
    }

    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script>




<!-- ========== MENU PENJURIAN ========== -->
{{-- <div class="penjurian-menu-item" onclick="togglePenjurianSubmenu()">
  <i class="bi bi-journal-text"></i>
  <span style="margin-left:13px;">Materi Perlombaan</span>
  <i class="bi bi-caret-down-fill ms-auto" id="penjurian-arrow"></i>
</div>

<div id="penjurian-submenu" class="submenu">
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-geo-alt"></i> Track Jalur
  </a>
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-tools"></i> Informasi Peralatan
  </a>
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-book"></i> Panduan Perlombaan
  </a>
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-clock-history"></i> Waktu Perlombaan
  </a>
</div> --}}

<style>
  /* Style umum untuk menu */
  .menu-item, .penjurian-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 0.95rem;
    font-weight: 500;
  }
  .menu-item i, .penjurian-menu-item i {
    font-size: 1.3rem;
  }
  .menu-item:hover, .penjurian-menu-item:hover {
    background-color: #333;
  }

  /* Style untuk submenu */
  .submenu {
    margin-left: 20px;
    display: none;
    border-left: 1px solid #333;
    padding-left: 12px;
  }
  .submenu-item, .penjurian-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .submenu-item i, .penjurian-submenu-item i {
    font-size: 1.3rem;
  }
  .submenu-item:hover, .penjurian-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }
</style>

<script>
  function toggleSubmenuPerlombaan() {
    const submenu = document.getElementById("submenu-perlombaan");
    const arrow = document.getElementById("perlombaan-arrow");
    const isHidden = submenu.style.display === "none";
    submenu.style.display = isHidden ? "block" : "none";
    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }

  function togglePenjurianSubmenu() {
    const submenu = document.getElementById("penjurian-submenu");
    const arrow = document.getElementById("penjurian-arrow");
    const isHidden = submenu.style.display === "none";
    submenu.style.display = isHidden ? "block" : "none";
    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script>


{{-- <!-- ========== MENU POS PENJURIAN ========== -->
<div class="penjurian-menu-item" onclick="togglePosPenjurianSubmenu()">
  <i class="bi bi-flag"></i>
  <span style="margin-left:13px;">Pos Penjurian</span>
  <i class="bi bi-caret-down-fill ms-auto" id="pos-penjurian-arrow"></i>
</div>

<div id="pos-penjurian-submenu" class="submenu">
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-play-circle"></i> Start
  </a>
  <!-- Loop Pos 1 - 20 -->
  <!-- Bisa juga di-generate dengan PHP/JS jika dinamis -->
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 1</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 2</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 3</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 4</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 5</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 6</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 7</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 8</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 9</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 10</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 11</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 12</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 13</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 14</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 15</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 16</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 17</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 18</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 19</a>
  <a href="/404" class="penjurian-submenu-item"><i class="bi bi-geo-alt"></i> Pos 20</a>
  <!-- Finish -->
  <a href="/404" class="penjurian-submenu-item">
    <i class="bi bi-flag-fill"></i> Finish
  </a>
</div>

<style>
  .penjurian-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 0.95rem;
    font-weight: 500;
  }
  .penjurian-menu-item i {
    font-size: 1.3rem;
  }
  .penjurian-menu-item:hover {
    background-color: #333;
  }
  .submenu {
    margin-left: 20px;
    display: none;
    border-left: 1px solid #333;
    padding-left: 12px;
  }
  .penjurian-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .penjurian-submenu-item i {
    font-size: 1.3rem;
  }
  .penjurian-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }
</style>

<script>
  function togglePosPenjurianSubmenu() {
    const submenu = document.getElementById("pos-penjurian-submenu");
    const arrow = document.getElementById("pos-penjurian-arrow");
    const isHidden = submenu.style.display === "none";
    submenu.style.display = isHidden ? "block" : "none";
    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script> --}}
<!-- ========== MENU QUICK COUNT ========== -->
<div class="quickcount-menu-item" onclick="toggleQuickCountSubmenu()">
  <i class="bi bi-graph-up"></i>
  <span style="margin-left:13px;">Quick Count</span>
  <i class="bi bi-caret-down-fill ms-auto" id="quickcount-arrow"></i>
</div>

<div id="quickcount-submenu" class="submenu">
  <a href="/404" class="quickcount-submenu-item">
    <i class="bi bi-people"></i> Penonton
  </a>
  <a href="/404" class="quickcount-submenu-item">
    <i class="bi bi-person-badge"></i> Panitia
  </a>
</div>

<style>
  /* Style umum untuk menu */
  .menu-item, .quickcount-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 0.95rem;
    font-weight: 500;
  }
  .menu-item i, .quickcount-menu-item i {
    font-size: 1.3rem;
  }
  .menu-item:hover, .quickcount-menu-item:hover {
    background-color: #333;
  }

  /* Style untuk submenu */
  .submenu {
    margin-left: 20px;
    display: none;
    border-left: 1px solid #333;
    padding-left: 12px;
  }
  .submenu-item, .quickcount-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .submenu-item i, .quickcount-submenu-item i {
    font-size: 1.3rem;
  }
  .submenu-item:hover, .quickcount-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }
</style>

<script>
  function toggleQuickCountSubmenu() {
    const submenu = document.getElementById("quickcount-submenu");
    const arrow = document.getElementById("quickcount-arrow");
    const isHidden = submenu.style.display === "none";
    submenu.style.display = isHidden ? "block" : "none";
    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script>

@endcan

@can('keuangan')

<!-- ========== MENU DAFTAR SEMUA TIM ========== -->
<!-- Menu Daftar Semua Tim -->
<div class="daftarsemua-tim-menu-item" onclick="toggleDaftarSemuaTimSubmenu()">
  <i class="bi bi-cash-stack"></i>
  <span class="menu-label">Bagian Keuangan</span>
  <i class="bi bi-caret-down-fill ms-auto" id="daftarsemuatim-arrow"></i>
</div>

<div id="daftarsemuatim-submenu" class="submenu">
  <a href="/katumumputera" class="daftarsemuatim-submenu-item">
    <i class="bi bi-list-ul"></i> Kat Umum Putera
  </a>
  <a href="/katumumputeri" class="daftarsemuatim-submenu-item">
    <i class="bi bi-list-ul"></i> Kat Umum Puteri
  </a>
  <a href="/katpelajarputera" class="daftarsemuatim-submenu-item">
    <i class="bi bi-list-ul"></i> Kat Pelajar Putera
  </a>
  <a href="/katpelajarputeri" class="daftarsemuatim-submenu-item">
    <i class="bi bi-list-ul"></i> Kat Pelajar Puteri
  </a>
</div>

<style>
  /* Menu Utama */
  .daftarsemua-tim-menu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 0.95rem;
    font-weight: 500;
    background-color: transparent;
  }
  .daftarsemua-tim-menu-item i {
    font-size: 1.3rem;
  }
  .daftarsemua-tim-menu-item:hover {
    background-color: #333;
  }
  .menu-label {
    margin-left: 13px;
  }

  /* Submenu Container */
  .submenu {
    display: none;
    margin-left: 24px;
    flex-direction: column;
    animation: slideDown 0.3s ease forwards;
  }

  /* Submenu Items */
  .daftarsemuatim-submenu-item {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
    font-size: 0.9rem;
  }
  .daftarsemuatim-submenu-item i {
    font-size: 1.2rem;
  }
  .daftarsemuatim-submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  /* Animasi slide down */
  @keyframes slideDown {
    from {
      opacity: 0;
      transform: translateY(-5px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<script>
  function toggleDaftarSemuaTimSubmenu() {
    const submenu = document.getElementById("daftarsemuatim-submenu");
    const arrow = document.getElementById("daftarsemuatim-arrow");
    const isHidden = submenu.style.display === "none" || submenu.style.display === "";

    if (isHidden) {
      submenu.style.display = "flex";
      submenu.style.animation = "slideDown 0.3s ease forwards";
    } else {
      submenu.style.display = "none";
    }

    arrow.classList.toggle("bi-caret-up-fill", isHidden);
    arrow.classList.toggle("bi-caret-down-fill", !isHidden);
  }
</script>


@endcan

    <!-- Menu Peta (Trigger) -->
    {{-- <div class="menu-item" onclick="toggleSubmenu()" style="
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 8px;
      border-radius: 4px;
      margin-bottom: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    ">
      <i class="bi bi-geo-alt-fill"></i>
      <span>Peta</span>
      <i class="bi bi-caret-down-fill ms-auto" id="peta-arrow"></i>
    </div> --}}

    <!-- Submenu Peta -->
    <div id="submenu-peta" style="
      margin-left: 20px;
      display: none;
      border-left: 1px solid #333;
      padding-left: 12px;
    ">
      <a href="/menupercarian" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
        <i class="bi bi-dot"></i> Pencarian
      </a>
      <a href="/quickcount" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
        <i class="bi bi-dot" style="margin-right: 12px;"></i><span style="margin-left:12px;">Quick Count</span>
      </a>
      <a href="/peta/lokasi1" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
        <i class="bi bi-dot"></i> Lokasi 1
      </a>
      <a href="/peta/lokasi2" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
        <i class="bi bi-dot"></i> Lokasi 2
      </a>
      <a href="/peta/lokasi3" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
        <i class="bi bi-dot"></i> Lokasi 3
      </a>
      <a href="/peta/lokasi4" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
        <i class="bi bi-dot"></i> Lokasi 4
      </a>
      <a href="/peta/lokasi5" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
        <i class="bi bi-dot"></i> Lokasi 5
      </a>
    </div>

{{--
    <a href="/laporan" class="menu-item" style="
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 8px;
      border-radius: 4px;
      margin-bottom: 4px;
      transition: background-color 0.3s;
    ">
      <i class="bi bi-file-earmark-text-fill"></i><span>Laporan</span>
    </a> --}}

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
    @csrf
</form>

<a href="#" class="menu-item" style="
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 8px;
      border-radius: 4px;
      margin-bottom: 4px;
      transition: background-color 0.3s;
    "
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
>
    <i class="bi bi-box-arrow-right"></i><span>Logout</span>
</a>

  </div>
</div>

<!-- Script Toggle dan Scroll -->
<script>
  function toggleSubmenu() {
    const submenu = document.getElementById("submenu-peta");
    const arrow = document.getElementById("peta-arrow");

    if (submenu.style.display === "none") {
      submenu.style.display = "block";
      arrow.classList.remove("bi-caret-down-fill");
      arrow.classList.add("bi-caret-up-fill");
    } else {
      submenu.style.display = "none";
      arrow.classList.remove("bi-caret-up-fill");
      arrow.classList.add("bi-caret-down-fill");
    }
  }

  // Menambahkan hover effect
  document.querySelectorAll('.menu-item, .submenu-item').forEach(item => {
    item.addEventListener('mouseenter', function() {
      this.style.backgroundColor = '#333';
    });
    item.addEventListener('mouseleave', function() {
      this.style.backgroundColor = '';
    });
  });

  // Scrollbar styling
  const sidebar = document.getElementById('sidebar');
  sidebar.style.scrollbarWidth = 'thin';
  sidebar.style.scrollbarColor = '#555 #1a1a1a';

  // Untuk browser WebKit (Chrome, Safari)
  const style = document.createElement('style');
  style.innerHTML = `
    .sidebar::-webkit-scrollbar {
      width: 8px;
    }
    .sidebar::-webkit-scrollbar-track {
      background: #1a1a1a;
    }
    .sidebar::-webkit-scrollbar-thumb {
      background-color: #555;
      border-radius: 4px;
    }
    .sidebar::-webkit-scrollbar-thumb:hover {
      background: #777;
    }
  `;
  document.head.appendChild(style);
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleBtn.addEventListener('click', function () {
        sidebar.classList.toggle('active');
    });
});
</script>
