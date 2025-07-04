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


<table class="table">
  <thead>
    <tr>
      <th><i class="bi bi-hash text-secondary me-1"></i> No</th>
      <th><i class="bi bi-folder2-open text-primary me-1"></i> Berkas Lomba</th>
      <th><i class="bi bi-star-fill text-warning me-1"></i> Point</th>
      <th><i class="bi bi-clock-fill text-info me-1"></i> Waktu</th>
      <th><i class="bi bi-geo-fill text-success me-1"></i> Pos</th>
      <th><i class="bi bi-chat-left-dots-fill text-secondary me-1"></i> Jawaban Pos</th>
      <th><i class="bi bi-upc-scan text-danger me-1"></i> Barcode</th>
      <th><i class="bi bi-tools text-danger me-1"></i> Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
      <tr>
        <td><i class="bi bi-hash text-secondary me-1"></i> {{ $loop->iteration }}</td>
        <td>
          <i class="bi bi-folder2-open text-primary me-1"></i>
          {{ optional($item->berkaslomba)->user->name ?? '-' }}
        </td>
        <td>
          <i class="bi bi-star-fill text-warning me-1"></i>
          {{ $item->point ?? '-' }}
        </td>
        <td>
          <i class="bi bi-clock-fill text-info me-1"></i>
          {{ $item->waktu ?? '-' }}
        </td>
        <td>
          <i class="bi bi-geo-fill text-success me-1"></i>
          {{ $item->pos ?? '-' }}
        </td>
        <td>
          <i class="bi bi-chat-left-dots-fill text-secondary me-1"></i>
          {{ $item->jawabpos ?? '-' }}
        </td>
        <td>
          <i class="bi bi-upc-scan text-danger me-1"></i>
          {{ $item->barcode ?? '-' }}
        </td>
        <td>
          <form action="{{ route('datapos1.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
<button
  type="submit"
  class="btn"
  style="
    background-color: #dc3545;
    color: white;
    padding: 6px 12px;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s ease;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;"
  onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.style.border='1px solid #dc3545';"
  onmouseout="this.style.backgroundColor='#dc3545'; this.style.color='white'; this.style.border='none';"
>
  <i class="bi bi-trash-fill" style="font-size: 14px;"></i>
  <span style="font-size: 14px;">Hapus</span>
</button>


          </form>
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
