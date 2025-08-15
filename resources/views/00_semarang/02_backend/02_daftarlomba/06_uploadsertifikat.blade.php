
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

<div class="content-form-wrapper" style="background: white; padding: 20px; border-radius: 8px;">
    <form action="{{ route('uploadsertifikatnew', $data->id) }}" method="POST" enctype="multipart/form-data" class="full-width-form" style="background: white;">
    @csrf
    <!-- begin::Body -->
  <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
    <button class="button-maroon" style="margin-bottom:10px;">
        <span>Halaman Upload Sertifikat Peserta !</span>
    </button>
</div>

<!-- Link CSS Select2 di head (atau di template kamu) -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Form -->
<div class="form-card-body" style="background: white; padding: 15px; border-radius: 8px;">
    {{-- <input type="hidden" name="akunpengguna_id" value="{{ $userId }}"> --}}
    {{-- <input type="hidden" name="perlombaan_id" value="{{ $perlombaanId }}"> --}}

<!-- Script Select2 di footer / sebelum </body> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.select2').select2({
        tags: true,               // Boleh tambah input manual
        placeholder: 'Pilih atau ketik disini',
        allowClear: true,
        width: '100%'
    });
});
</script>



        <div class="text-center" style="margin-top: 20px;">
            <hr class="my-4 custom-divider" style="border-top: 2px dashed maroon; width: 60%; margin: auto;">

            <div style="display: flex; align-items: center; justify-content: center; font-size: 16px; background: white; padding: 10px; border-radius: 5px;">
                <i class="bi bi-file-earmark-image" style="color: maroon; margin-right: 5px;"></i>
                Upload Sertifikat Perlombaan
            </div>

            <hr class="my-4 custom-divider" style="border-top: 2px dashed maroon; width: 60%; margin: auto;">
        </div>

<div class="form-row" style="display: flex; gap: 20px; flex-wrap: wrap; background: white; padding: 15px; border-radius: 8px;">
  <!-- Foto -->
<div style="display: flex; flex-wrap: wrap; gap: 20px;">
<!-- Surat Tugas Organisasi -->
<!-- Sertifikat 1 -->
<div class="form-column" style="flex: 0 0 48%; min-width: 280px;">
    <div class="form-group">
        <label for="sertifikat1" style="font-weight: bold; font-size:16px;">
            <i class="bi bi-file-earmark-text form-icon"></i> Sertifikat Anggota Tim 1 (PDF) Max 15MB
        </label>

        {{-- Preview data sebelumnya kalau ada --}}
        @if(!empty($data->sertifikat1))
            <div class="mb-2" style="font-size: 14px; color: #555;">
                <strong>File sebelumnya:</strong>
                <a href="{{ asset($data->sertifikat1) }}" target="_blank" style="text-decoration: underline; color: #007bff;">
                    Lihat / Download
                </a>
            </div>
            <embed src="{{ asset($data->sertifikat1) }}"
                   style="margin-top:5px; width:100%; height:300px;"
                   type="application/pdf" />
        @else
            <div class="mb-2" style="font-size: 14px; color: red;">
                Data belum diupload
            </div>
        @endif

        {{-- Input file baru --}}
        <input
            type="file"
            id="sertifikat1"
            name="sertifikat1"
            accept="application/pdf"
            class="form-control @error('sertifikat1') is-invalid @enderror"
            onchange="previewPdfFile(event, 'sertifikat1Preview', 'sertifikat1Pdf')"
        />
        @error('sertifikat1')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        {{-- Preview file baru yang dipilih --}}
        <p id="sertifikat1Pdf" style="display:none; font-size: 14px; color: #555; margin-top: 8px;">
            File PDF terpilih: <span class="file-name"></span> (<span class="file-size"></span>)
        </p>
        <embed id="sertifikat1Preview" style="display:none; margin-top:10px; width:100%; height:300px;" type="application/pdf" />
    </div>
</div>

<!-- Sertifikat 2 -->
<div class="form-column" style="flex: 0 0 48%; min-width: 280px;">
    <div class="form-group">
        <label for="sertifikat2" style="font-weight: bold; font-size:16px;">
            <i class="bi bi-file-earmark-text form-icon"></i> Sertifikat Anggota Tim 2 (PDF) Max 15MB
        </label>

        {{-- Preview data sebelumnya --}}
        @if(!empty($data->sertifikat2))
            <div class="mb-2" style="font-size: 14px; color: #555;">
                <strong>File sebelumnya:</strong>
                <a href="{{ asset($data->sertifikat2) }}" target="_blank" style="text-decoration: underline; color: #007bff;">
                    Lihat / Download
                </a>
            </div>
            <embed src="{{ asset($data->sertifikat2) }}" style="margin-top:5px; width:100%; height:300px;" type="application/pdf" />
        @else
            <div class="mb-2" style="font-size: 14px; color: red;">
                Data belum diupload
            </div>
        @endif

        <input
            type="file"
            id="sertifikat2"
            name="sertifikat2"
            accept="application/pdf"
            class="form-control @error('sertifikat2') is-invalid @enderror"
            onchange="previewPdfFile(event, 'sertifikat2Preview', 'sertifikat2Pdf')"
        />
        @error('sertifikat2')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <p id="sertifikat2Pdf" style="display:none; font-size: 14px; color: #555; margin-top: 8px;">
            File PDF terpilih: <span class="file-name"></span> (<span class="file-size"></span>)
        </p>
        <embed id="sertifikat2Preview" style="display:none; margin-top:10px; width:100%; height:300px;" type="application/pdf" />
    </div>
</div>

</div>

<script>
function previewPdfFile(event, embedId, infoId) {
  const file = event.target.files[0];
  const embed = document.getElementById(embedId);
  const info = document.getElementById(infoId);

  if (file && file.type === 'application/pdf') {
    // Tampilkan info nama + ukuran
    info.style.display = 'block';
    info.querySelector('.file-name').textContent = file.name;
    info.querySelector('.file-size').textContent = formatFileSize(file.size);

    // Buat URL sementara untuk embed PDF
    const fileURL = URL.createObjectURL(file);
    embed.src = fileURL;
    embed.style.display = 'block';
  } else {
    info.style.display = 'none';
    embed.style.display = 'none';
    embed.src = '';
  }
}

function formatFileSize(bytes) {
  if (bytes < 1024) return bytes + ' bytes';
  else if (bytes < 1024 * 1024) return (bytes / 1024).toFixed(2) + ' KB';
  else return (bytes / (1024 * 1024)).toFixed(2) + ' MB';
}
</script>

</div>

</div>

        <!-- end::Body -->
<div class="form-footer" style="margin-top: 20px; background: white; padding: 15px; border-radius: 8px; display: flex; justify-content: flex-end; gap: 10px;">
    <a href="/perlombaan/daftartim" class="button-newvalidasi">
        <i class="bi bi-arrow-left-circle button-icon"></i>
        <span>Kembali</span>
    </a>
    <button class="button-berkas" type="button" onclick="openModal()">
        <i class="bi bi-save button-icon"></i>
        <span>Perbaikan Data ? </span>
    </button>
</div>


        <!-- Modal Konfirmasi -->
        <div id="confirmModal" class="confirmation-modal" style="background: rgba(0,0,0,0.4);">
            <div class="modal-content" style="background: white; padding: 20px; border-radius: 8px;">
                <p class="modal-message" style="margin-bottom: 20px;">
                    Apakah Anda ingin memperbarui berkas pendaftaran saudara?
                </p>
                <div class="modal-buttons" style="display: flex; gap: 10px; justify-content: center;">
                    <button id="confirmSubmitBtn" class="confirm-button" onclick="submitForm()">
                        Ya
                    </button>
                    <button type="button" class="cancel-button" onclick="closeModal()">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<style>
/* Main Wrapper */
.content-form-wrapper {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Form Styling */
.full-width-form {
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
}

.form-card-body {
    padding: 24px 32px;
}

/* Form Layout */
.form-row {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    margin-bottom: 16px;
}

.form-column {
    flex: 1;
    min-width: 300px;
}

/* Form Elements */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #2d3748;
    font-size: 14px;
}

.form-icon {
    margin-right: 8px;
    color: #3b82f6;
}

.form-control {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 14px;
    transition: border-color 0.3s;
    background-color: #f8fafc;
}

.form-control:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.is-invalid {
    border-color: #ef4444;
}

.invalid-feedback {
    color: #ef4444;
    font-size: 12px;
    margin-top: 4px;
}

/* Footer and Buttons */
.form-footer {
    display: flex;
    justify-content: flex-end;
    padding: 20px 32px;
    background: #f9fafb;
    border-top: 1px solid #e5e7eb;
}

.submit-button {
    background-color: #3b82f6;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-weight: 500;
    display: flex;
    align-items: center;
    transition: all 0.3s;
}

.submit-button:hover {
    background-color: #2563eb;
    transform: translateY(-1px);
}

.button-icon {
    margin-right: 8px;
    font-size: 14px;
}

.button-text {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
}

/* Modal Styles */
.confirmation-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    padding: 24px 30px;
    border-radius: 12px;
    max-width: 400px;
    width: 90%;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.modal-message {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #2d3748;
}

.modal-buttons {
    display: flex;
    justify-content: center;
    gap: 12px;
}

.confirm-button, .cancel-button {
    padding: 8px 16px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
}

.confirm-button {
    background-color: #10B981;
    color: white;
}

.confirm-button:hover {
    background-color: #059669;
}

.cancel-button {
    background-color: #EF4444;
    color: white;
}

.cancel-button:hover {
    background-color: #DC2626;
}

.button-svg {
    height: 16px;
    width: 16px;
    fill: currentColor;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 16px;
    }

    .form-column {
        min-width: 100%;
    }

    .form-card-body {
        padding: 20px;
    }

    .form-footer {
        padding: 16px 20px;
    }
}
</style>

<script>
function openModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "flex";
}

function closeModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "none";
}

function submitForm() {
    document.querySelector('.full-width-form').submit();
}
</script>

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

