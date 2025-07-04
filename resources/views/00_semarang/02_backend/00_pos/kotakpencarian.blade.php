@include('00_semarang.02_backend.01_dashboard.header')

<body>
  <div class="container">
    <div class="overlay" id="overlay"></div>

    <!-- Sidebar -->
   @include('00_semarang.02_backend.01_dashboard.sidebar')
    <!-- Main Content -->
    <div class="main-content">
      <div class="header">
        <div class="header-left"><h2>Dashboard Overview</h2></div>
        <div class="header-right">
          <div class="toggle-sidebar" id="toggleSidebar"><i class="fas fa-bars"></i></div>
          <div class="user-profile">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" />
            <span>Admin User</span>
          </div>
        </div>
      </div>

      <div class="content">
        <!-- Card Section -->
        {{-- <div class="cards">
          <!-- Example Card -->
          <div class="card">
            <div class="card-header"><h3>Total Users</h3><i class="fas fa-users"></i></div>
            <div class="card-body"><h2>2,453</h2><p>+12.5% from last month</p></div>
            <div class="card-footer"><i class="fas fa-arrow-up"></i><span>5.4% increase</span></div>
          </div>
          <!-- Add other cards here -->
        </div> --}}

        <div class="container" style="margin-top: -200px;">
  <div class="card shadow-sm border-0" style="max-width: 500px; margin: auto;">
    <div class="card-body">
      <h5 class="card-title mb-3" style="font-weight: 600;">
        <i class="bi bi-upc-scan text-primary me-2"></i>
        Cari Data POS
      </h5>
      <label for="searchBarcode" class="form-label text-muted" style="font-size: 14px;">
        Masukkan Kode Barcode Unik:
      </label>

      <div style="display: flex; gap: 8px; flex-wrap: wrap;">
        <input
          type="text"
          id="searchBarcode"
          placeholder="Contoh: 123456ABC"
          style="flex: 1; min-width: 180px; padding: 8px 12px; border-radius: 6px; border: 1px solid #ccc;"
        >
        <button onclick="searchBarcode()" style="
          background-color: #007bff;
          color: white;
          border: none;
          border-radius: 6px;
          padding: 8px 16px;
          display: flex;
          align-items: center;
          gap: 6px;
        ">
          <i class="bi bi-search"></i> Cari
        </button>
      </div>
    </div>
  </div>
</div>


<script>
  function searchBarcode() {
    const code = document.getElementById('searchBarcode').value.trim();
    if (code !== '') {
      // Ganti dengan route tujuan kamu
      window.location.href = `/datapos1/barcode/${code}`;
    } else {
      alert("Masukkan kode barcode terlebih dahulu.");
    }
  }
</script>

      </div>
    </div>
  </div>

  <!-- JS -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleSidebar = document.getElementById('toggleSidebar');
    const overlay = document.getElementById('overlay');
    const mainContent = document.querySelector('.main-content');

    toggleSidebar.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      overlay.classList.toggle('active');
      mainContent.style.filter = sidebar.classList.contains('active') ? 'blur(2px)' : 'none';
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
      mainContent.style.filter = 'none';
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        sidebar.classList.add('active');
        overlay.classList.remove('active');
        mainContent.style.filter = 'none';
      } else {
        sidebar.classList.remove('active');
      }
    });
  </script>
</body>
</html>
