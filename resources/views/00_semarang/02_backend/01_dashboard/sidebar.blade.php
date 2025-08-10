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

    @canany(['peserta', 'super_admin'])

    <!-- Menu Perlombaan -->
<div class="menu-item" onclick="toggleSubmenuPerlombaan()" style="
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
  <i class="bi bi-people-fill"></i>
  <span>Informasi Tim</span>
  <i class="bi bi-caret-down-fill ms-auto" id="perlombaan-arrow"></i>
</div>

<!-- Submenu Perlombaan -->
<div id="submenu-perlombaan" style="
      margin-left: 20px;
      display: none;
      border-left: 1px solid #333;
      padding-left: 12px;
    ">
  <a href="/perlombaan/daftartim" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
    <i class="bi bi-people"></i> Daftar Tim
  </a>
<a href="/daftarlomba" class="submenu-item" style="
    color: white;
    text-decoration: none;
    display: flex;             /* Flex supaya sejajar horizontal */
    align-items: center;       /* Vertikal rata tengah */
    gap: 8px;                  /* Jarak icon ke teks */
    padding: 8px 8px;
    border-radius: 4px;
    margin-bottom: 4px;
    transition: background-color 0.3s;
">
  <i class="bi bi-trophy-fill" style="font-size: 1.2rem;"></i> Daftar Lomba
</a>

  <a href="/404" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
    <i class="bi bi-flag-fill"></i> Status
  </a>
  <a href="/404" class="submenu-item" style="
        color: white;
        text-decoration: none;
        display: block;
        padding: 8px 8px;
        border-radius: 4px;
        margin-bottom: 4px;
        transition: background-color 0.3s;
      ">
    <i class="bi bi-award-fill"></i> Sertifikat
  </a>
</div>

<!-- Script Toggle Submenu Perlombaan -->
<script>
  function toggleSubmenuPerlombaan() {
    const submenu = document.getElementById("submenu-perlombaan");
    const arrow = document.getElementById("perlombaan-arrow");

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

  // Hover effect
  document.querySelectorAll('.menu-item, .submenu-item').forEach(item => {
    item.addEventListener('mouseenter', function() {
      this.style.backgroundColor = '#333';
    });
    item.addEventListener('mouseleave', function() {
      this.style.backgroundColor = '';
    });
  });
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
        <i class="bi bi-dot"></i> Quick Count
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
