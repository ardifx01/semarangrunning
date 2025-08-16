
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
<div style="display: flex; gap: 10px; margin-bottom: 20px; flex-wrap: wrap;">
    @foreach($statusCounts as $statusName => $count)
        <div class="button-maroon">
            akun {{ $statusName }} : {{ $count }} Orang
        </div>
    @endforeach
</div>


<div style="overflow-x:auto; width: 100%;">
  <table style="width: 100%; min-width: 1200px; border-collapse: collapse; border: 1px solid #ccc;">
    <thead>
      <tr>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">No</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Nama</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Username</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Email</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">No. Telepon</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Status Admin</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $index => $user)
      <tr>
        <td style="border: 1px solid #ccc; text-align:center;">{{ $index + 1 }}</td>
        <td style="border: 1px solid #ccc; text-align:left; padding-left:8px;">{{ $user->name ?? '-' }}</td>
        <td style="border: 1px solid #ccc; text-align:center;">{{ $user->username ?? '-' }}</td>
        <td style="border: 1px solid #ccc; text-align:left; padding-left:8px;">{{ $user->email ?? '-' }}</td>
        <td style="border: 1px solid #ccc; text-align:center;">{{ $user->phone_number ?? '-' }}</td>
        <td style="border: 1px solid #ccc; text-align:center;">{{ $user->statusadmin->statusadmin ?? '-' }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

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

