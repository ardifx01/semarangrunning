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
<!-- Tombol Pemicu Modal -->
<!-- Tombol untuk buka modal -->
<button
  onclick="openAutoSubmitModal({{ $data->id }})"
  style="
    background-color: #0d6efd;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 500;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    cursor: pointer;"
  onmouseover="this.style.backgroundColor='white'; this.style.color='#0d6efd'; this.style.border='1px solid #0d6efd';"
  onmouseout="this.style.backgroundColor='#0d6efd'; this.style.color='white'; this.style.border='none';"
>
  <i class="bi bi-geo-alt-fill" style="margin-right: 6px;"></i>
  Ini Pos Berapa
</button>

<!-- Modal -->
<div id="autoSubmitModal" style="
  display: none;
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: 999;
  justify-content: center;
  align-items: center;
">
  <div style="
    background: white;
    border-radius: 12px;
    padding: 24px 32px;
    width: 320px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    text-align: center;
    font-family: sans-serif;
    position: relative;
  ">
    <button onclick="closeAutoSubmitModal()" style="
      position: absolute;
      top: 10px;
      right: 12px;
      background: none;
      border: none;
      font-size: 22px;
      color: #999;
      cursor: pointer;
    ">&times;</button>

    <div style="font-size: 16px; color: #666; margin-bottom: 12px;">Ini POS Berapa ?:</div>

    <!-- Tombol Angka -->
    <div id="digitContainer" style="
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      justify-content: center;
      margin: 20px auto;
    ">
      <!-- JS isi -->
    </div>

    <!-- Form -->
    <form id="autoSubmitForm" method="POST">
      @csrf
      <input type="hidden" name="jawabpos" id="inputJawabpos">
    </form>
  </div>
</div>

<!-- Script -->
<script>
  function openAutoSubmitModal(id) {
    const digitContainer = document.getElementById('digitContainer');
    digitContainer.innerHTML = ''; // Kosongkan kontainer angka

    const form = document.getElementById('autoSubmitForm');
    form.action = `/tambahdatastartupdate/${id}`; // Atur route

    const inputJawabpos = document.getElementById('inputJawabpos');

    // Buat angka 1-9 (seperti keypad)
    const angkaArray = ['1','2','3','4','5','6','7','8','9'];

    angkaArray.forEach((digit) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.textContent = digit;
      btn.style.cssText = `
        background-color: #0d6efd;
        color: white;
        font-size: 20px;
        font-weight: bold;
        padding: 16px;
        border: none;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        cursor: pointer;
        transition: all 0.3s ease;
      `;

      btn.onmouseover = () => {
        btn.style.backgroundColor = '#ffffff';
        btn.style.color = '#0d6efd';
        btn.style.border = '1px solid #0d6efd';
      };

      btn.onmouseout = () => {
        btn.style.backgroundColor = '#0d6efd';
        btn.style.color = '#ffffff';
        btn.style.border = 'none';
      };

      btn.onclick = () => {
        inputJawabpos.value = digit; // Set nilai
        form.submit(); // Langsung submit
      };

      digitContainer.appendChild(btn);
    });

    // Tampilkan modal
    document.getElementById('autoSubmitModal').style.display = 'flex';
  }

  function closeAutoSubmitModal() {
    document.getElementById('autoSubmitModal').style.display = 'none';
  }
</script>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
  {{-- @foreach ($data as $data) --}}
    <div class="col">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body">
          <h5 class="card-title mb-3">
            <i class="bi bi-folder2-open text-primary me-2"></i>
            {{ optional($data->berkaslomba)->user->name ?? '-' }}
          </h5>

          <p class="card-text">
            <i class="bi bi-upc-scan text-danger me-2"></i>
            <strong>Barcode:</strong> {{ $data->barcode ?? '-' }}
          </p>

          {{-- Jika ingin tampilkan data lain tinggal aktifkan ini: --}}
          {{--
          <p class="card-text">
            <i class="bi bi-star-fill text-warning me-2"></i>
            <strong>Point:</strong> {{ $data->point ?? '-' }}
          </p>
          <p class="card-text">
            <i class="bi bi-clock-fill text-info me-2"></i>
            <strong>Waktu:</strong> {{ $data->waktu ?? '-' }}
          </p>
          --}}
        </div>
      </div>
    </div>
  {{-- @endforeach --}}
</div>



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
