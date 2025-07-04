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
      <div style="margin-bottom: 16px;">
  <a href="/tambahdatastart"
    onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
    onmouseout="this.style.backgroundColor='#4CAF50'; this.style.color='white'; this.querySelector('i').style.color='white';"
    style="
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 18px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      text-decoration: none;
      transition: all 0.3s ease;
    "
  >
    <i class="bi bi-plus-circle-fill" style="color: white;"></i> Tambah
  </a>
</div>
{{-- Tambahkan ini di <head> HTML --}}
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
  .form-pos-wrapper {
    max-width: 640px;
    margin: 30px auto;
    background: white;
    padding: 32px;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    font-family: 'Poppins', sans-serif;
    color: #333;
  }

  .form-pos-wrapper h4 {
    margin-bottom: 24px;
    font-weight: 600;
    font-size: 20px;
    color: #2d3748;
  }

  .form-pos-wrapper label {
    font-weight: 500;
    margin-bottom: 6px;
    display: block;
  }

  .form-pos-wrapper input,
  .form-pos-wrapper select {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #cbd5e0;
    border-radius: 8px;
    font-size: 14px;
    margin-bottom: 20px;
  }

  .form-pos-wrapper button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: 0.3s ease;
  }

  .form-pos-wrapper button:hover {
    background-color: white;
    color: black;
    border: 1px solid #4CAF50;
  }

  .form-pos-wrapper button:hover i {
    color: black;
  }

  .form-pos-wrapper i {
    color: white;
  }
</style>

<div class="form-pos-wrapper">
  {{-- <h4>Form Tambah Data POS</h4> --}}
<div class="form-pos-wrapper">
  <h4>Tambahkan Peserta</h4>

  <form action="{{ route('datapos1.store') }}" method="POST" id="formPOS">
    @csrf

    {{-- Pilih Berkas Lomba --}}
    <label>Dafar Peserta</label>
    <select name="berkaslomba_id" required>
      <option value="">-- Masukan Peserta --</option>
      @foreach ($databerkas as $berkas)
        <option value="{{ $berkas->id }}">{{ $berkas->user->name ?? 'User Tidak Ditemukan' }}</option>
      @endforeach
    </select>

    {{-- Point --}}
    <input type="hidden" name="point" value="20">

    {{-- Pos --}}
    <input type="hidden" name="pos" value="1">

    {{-- Barcode --}}
    <label>Barcode</label>
    <input type="text" name="barcode" id="barcodeInput" placeholder="Kode barcode" readonly>

    {{-- Tombol --}}
    <div style="text-align: right; margin-top: 16px;">
      <button type="submit">
        <i class="bi bi-plus-circle-fill"></i> Simpan Data Start
      </button>
    </div>
  </form>
</div>

{{-- Script untuk generate kode unik --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const barcodeInput = document.getElementById('barcodeInput');

    function generateUniqueCode() {
      const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      const randomLetters = letters.charAt(Math.floor(Math.random() * 26)) +
                            letters.charAt(Math.floor(Math.random() * 26));
      const randomNumbers = Math.floor(10 + Math.random() * 90); // Angka 2 digit
      return randomLetters + randomNumbers;
    }

    // Isi barcode kalau kosong
    if (barcodeInput && barcodeInput.value.trim() === '') {
      barcodeInput.value = generateUniqueCode();
    }
  });
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
