<div class="sidebar" id="sidebar" style="
  background-color: #1a1a1a;
  padding: 16px;
  height: 100vh;
  overflow-y: auto;
">
  <div class="sidebar-header">
    <h3 style="color: white;">SNOC X Dashboard</h3>
  </div>

  <div class="sidebar-menu" style="margin-top: 20px;">
    <a href="/dashboard" class="menu-item active" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
      <i class="bi bi-speedometer2"></i><span>Dashboard</span>
    </a>

    <a href="/beperlombaan" class="menu-item" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
      <i class="bi bi-people-fill"></i><span>Perlombaan</span>
    </a>

    <a href="/bepeserta" class="menu-item" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
      <i class="bi bi-bar-chart-fill"></i><span>Peserta</span>
    </a>

    <!-- Menu Peta (Trigger) -->
    <a href="javascript:void(0);" onclick="toggleSubmenu()" class="menu-item" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
      <i class="bi bi-geo-alt-fill"></i>
      <span>Peta</span>
      <i class="bi bi-caret-down-fill ms-auto"></i>
    </a>

    <!-- Submenu Peta -->
    <div id="submenu-peta" style="margin-left: 28px; display: none;">
      <a href="/menupercarian" class="menu-item" style="color: white; text-decoration: none; display: block; margin-bottom: 6px;">
        <i class="bi bi-dot"></i> Pencarian
      </a>
      <a href="/quickcount" class="menu-item" style="color: white; text-decoration: none; display: block; margin-bottom: 6px;">
        <i class="bi bi-dot"></i> Quick Count
      </a>
      <a href="/peta/lokasi1" class="menu-item" style="color: white; text-decoration: none; display: block; margin-bottom: 6px;">
        <i class="bi bi-dot"></i> Lokasi 1
      </a>
      <a href="/peta/lokasi2" class="menu-item" style="color: white; text-decoration: none; display: block; margin-bottom: 6px;">
        <i class="bi bi-dot"></i> Lokasi 2
      </a>
      <a href="/peta/lokasi3" class="menu-item" style="color: white; text-decoration: none; display: block; margin-bottom: 6px;">
        <i class="bi bi-dot"></i> Lokasi 3
      </a>
      <a href="/peta/lokasi4" class="menu-item" style="color: white; text-decoration: none; display: block; margin-bottom: 6px;">
        <i class="bi bi-dot"></i> Lokasi 4
      </a>
      <a href="/peta/lokasi5" class="menu-item" style="color: white; text-decoration: none; display: block; margin-bottom: 6px;">
        <i class="bi bi-dot"></i> Lokasi 5
      </a>
      {{-- <a href="/peta/lokasi6" class="menu-item" style="color: white; text-decoration: none; display: block; margin-bottom: 6px;">
        <i class="bi bi-dot"></i> Lokasi 6
      </a>
      <a href="/peta/lokasi7" class="menu-item" style="color: white; text-decoration: none; display: block;">
        <i class="bi bi-dot"></i> Finish
      </a> --}}
    </div>

    <a href="/laporan" class="menu-item" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px;">
      <i class="bi bi-file-earmark-text-fill"></i><span>Laporan</span>
    </a>
  </div>
</div>

<!-- Script Toggle -->
<script>
  function toggleSubmenu() {
    const submenu = document.getElementById("submenu-peta");
    submenu.style.display = submenu.style.display === "none" ? "block" : "none";
  }
</script>
