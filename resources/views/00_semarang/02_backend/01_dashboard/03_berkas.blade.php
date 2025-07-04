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

        <!-- Table Section -->
<table class="table">
  <thead>
    <tr>
      <th><i class="bi bi-hash text-secondary me-1"></i> No</th>
      <th><i class="bi bi-flag-fill text-primary me-1"></i> Kegiatan</th>
      <th><i class="bi bi-person-fill text-success me-1"></i> User</th>
      <th><i class="bi bi-geo-alt-fill text-info me-1"></i> Tempat</th>
      <th><i class="bi bi-pin-map-fill text-warning me-1"></i> Lokasi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
      <tr>
        <td><i class="bi bi-hash text-secondary me-1"></i> {{ $loop->iteration }}</td>
        <td>
          <i class="bi bi-flag-fill text-primary me-1"></i>
          {{ optional($item->perlombaan)->kegiatan ?? '-' }}
        </td>
        <td>
          <i class="bi bi-person-fill text-success me-1"></i>
          {{ optional($item->user)->name ?? '-' }}
        </td>
        <td>
          <i class="bi bi-geo-alt-fill text-info me-1"></i>
          {{ optional($item->perlombaan)->tempat ?? '-' }}
        </td>
        <td>
          <i class="bi bi-pin-map-fill text-warning me-1"></i>
          {{ optional($item->perlombaan)->lokasi ?? '-' }}
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

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
