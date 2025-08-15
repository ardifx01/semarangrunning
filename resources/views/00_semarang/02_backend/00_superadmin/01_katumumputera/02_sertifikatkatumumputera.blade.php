
@include('00_semarang.02_backend.01_dashboard.header')

<body>
  <div class="container">
    <div class="overlay" id="overlay"></div>

    <!-- Sidebar -->
   @include('00_semarang.02_backend.01_dashboard.sidebar')
   @include('frontend.android.00_fiturmenu.06_alert')
   @include('frontend.button')

    <!-- Main Content -->
    <div class="main-content">
      <div class="header">

        <div class="header-left"><h3>Dashboard SNOC X | Selamat Datang <span>{{ $user?->name ?? 'Data Belum Diupdate' }}</span></h3></div>
        <div class="header-right">
          <div class="toggle-sidebar" id="toggleSidebar"><i class="fas fa-bars"></i></div>
          <div class="user-profile">
                <span>{{ $user?->statusadmin?->statusadmin ?? 'Data Belum Diupdate' }}</span>
            {{-- <span>{{ $auth->user()?->statusadmin?->statusadmin }}</span> --}}
        </div>
        </div>
      </div>

<div class="content">
<div class="table-container">
  <table class="responsive-table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama TIM</th>
        <th>Nama Organisasi</th>
        <th>Alamat Organisasi</th>
        <th>Terbitkan Sertifikat</th>
        {{-- <th>Tanggal Lahir</th>
        <th>NIK</th>
        <th>No. Telepon</th>
        <th>Foto</th> --}}
        {{-- <th style="width: 150px;">Aksi</th> --}}
      </tr>
    </thead>
    <tbody>
      @forelse($data as $item)
      <tr>
        <td>{{ $loop->iteration }}</td> <!-- nomor urut -->
        <td>{{ $item->nama_tim ?? '-' }}</td>
        <td>{{ $item->nama_organisasi ?? '-' }}</td>
        <td>{{ $item->alamat_organisasi ?? '-' }}</td>
  <td>
    <a href="{{ route('sertifikatpesertaupload', $item->id) }}" class="button-berkas" style="display: inline-flex; align-items: center; gap: 6px;">
      <i class="bi bi-upload"></i> Upload Sertifikat
    </a>
  </td>
        {{-- <td>
          <div style="display: flex; align-items: center; gap: 8px;">
            <!-- Tombol Edit -->
            <a href="{{ url('/daftartimupdateupdate/' . $item->id ) }}" class="button-berkas">
              <i class="bi bi-pencil-square"></i> Edit
            </a> --}}

            <!-- Tombol Hapus -->
            {{-- <form action="{{ route('daftartim.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Saudara ingin menghapus data ini?')" style="margin: 0;">
              @csrf
              @method('DELETE')
              <button type="submit" class="button-merah">
                <i class="bi bi-trash-fill" style="font-size: 18px;"></i> Hapus
              </button>
            </form> --}}
          {{-- </div>
        </td> --}}
      </tr>
                @empty
    <tr>
    <td colspan="100%"> {{-- Memenuhi semua kolom --}}
            <div style="
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                color: #6c757d;
                background-color: #f8f9fa;
                border: 2px dashed #ced4da;
                border-radius: 12px;
                font-size: 16px;
                animation: fadeIn 0.5s ease-in-out;
            ">
                <i class="button-berkas bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                Belum Ada Tim Yang Mendaftar!!
            </div>
        </td>
        <br>
    </tr>
    @endforelse

</tbody>
</table>

{{-- @if($data->count() < 1)
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <a href="{{ url('/daftarlomba/create/' . $userId . '/' . $perlombaanId) }}" class="button-berkas">
        <i class="bi bi-person-plus-fill" style="margin-right: 8px;"></i> Daftar Lomba !
    </a>
</div>
@endif --}}


</div>

</div>

<style>
    .table-container {
  width: 100%;
  overflow-x: auto; /* Scroll horizontal jika layar kecil */
}

.responsive-table {
  width: 100%;
  border-collapse: collapse;
  min-width: 300px;
  font-family: Arial, sans-serif;
}

/* Border & text */
.responsive-table th,
.responsive-table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: center;
}

/* Header merah maroon */
.responsive-table th {
  background-color: #800000; /* maroon */
  color: #fff;
}

/* Belang abu-abu */
.responsive-table tbody tr:nth-child(even) {
  background-color: #f7f7f7; /* abu tipis */
}
.responsive-table tbody tr:nth-child(odd) {
  background-color: #ffffff; /* putih */
}

/* Logo bulat */
.logo-circle {
  width: 50px;
  height: 50px;
  background: #ddd;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.logo-svg {
  width: 30px;
  height: 30px;
}

.logo-path {
  fill: #000;
}

/* Mobile friendly */
@media (max-width: 600px) {
  .responsive-table th,
  .responsive-table td {
    font-size: 14px;
    padding: 8px;
  }
}

</style>
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

