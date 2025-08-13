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
    <div style="display: flex; gap: 5px; margin-bottom: 10px;">
        <img src="/assets/abgblora/logo/3remove.png" alt="" width="75px;">
        <img src="/assets/abgblora/logo/5remove.png" alt="" width="75px;">
    </div>
    <h3 style="color: white; margin: 0; padding-bottom: 15px; border-bottom: 1px solid #333; width: 100%;">
        SNOC X Dashboard
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
    <i class="bi bi-list-check"></i> Daftar Tim
  </a>
  <a href="/daftarlomba" class="submenu-item">
    <i class="bi bi-trophy"></i> Daftar Lomba
  </a>
  <a href="/404" class="submenu-item">
    <i class="bi bi-activity"></i> Status
  </a>
  <a href="/404" class="submenu-item">
    <i class="bi bi-patch-check-fill"></i> Sertifikat
  </a>
</div>

<!-- ========== MENU PENJURIAN ========== -->
<div class="penjurian-menu-item" onclick="togglePenjurianSubmenu()">
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
</div>

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

<a href="/bedaftartim" class="menu-item" style="
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
      <i class="bi bi-person"></i><span>Daftar Tim</span>
    </a>
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
