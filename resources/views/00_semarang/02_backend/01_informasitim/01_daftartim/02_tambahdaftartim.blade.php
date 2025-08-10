
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
    <form action="{{ route('daftartim.tambah') }}" method="POST" enctype="multipart/form-data" class="full-width-form" style="background: white;">
        @csrf
        <!-- begin::Body -->

        <div class="text-center">
            <hr class="my-4 custom-divider" style="border-top: 2px dashed maroon; width: 60%; margin: auto;">

            <div style="display: flex; align-items: center; justify-content: center; font-size: 16px; background: white; padding: 10px; border-radius: 5px;">
                <i class="bi bi-file-earmark-image" style="color: maroon; margin-right: 5px;"></i>
                Informasi Data Diri Anggota TIM
            </div>

            <hr class="my-4 custom-divider" style="border-top: 2px dashed maroon; width: 60%; margin: auto;">
        </div>

        <div class="form-card-body" style="background: white; padding: 15px; border-radius: 8px;">
            <input type="hidden" name="akun_id" value="{{ $userId }}">
            <div class="form-row" style="display: flex; gap: 20px; flex-wrap: wrap;">
                <div class="form-column" style="flex: 1; min-width: 280px;">
                    {{-- Nama Lengkap --}}
                    <div class="form-group">
                   <label class="form-label" for="namalengkap" style="font-weight: bold; font-size:16px;">
    <i class="bi bi-person form-icon"></i> Nama Lengkap
</label>
     <input
                            type="text"
                            id="namalengkap"
                            name="namalengkap"
                            value="{{ old('namalengkap') }}"
                            class="form-control @error('namalengkap') is-invalid @enderror"
                            placeholder="Masukkan nama lengkap"

                        />
                        @error('namalengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Jenis Kelamin --}}
                    <div class="form-group">
                        <label class="form-label" for="jeniskelamin" style="font-weight: bold; font-size:16px;">
                            <i class="bi bi-gender-ambiguous form-icon"></i> Jenis Kelamin
                        </label>
                        <select
                            id="jeniskelamin"
                            name="jeniskelamin"
                            class="form-control @error('jeniskelamin') is-invalid @enderror"

                        >
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki" {{ old('jeniskelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Tanggal Lahir --}}
                    <div class="form-group">
                        <label class="form-label" for="ttl" style="font-weight: bold; font-size:16px;">
                            <i class="bi bi-calendar form-icon"></i> Tanggal Lahir
                        </label>
                        <input
                            type="date"
                            id="ttl"
                            name="ttl"
                            value="{{ old('ttl') }}"
                            class="form-control @error('ttl') is-invalid @enderror"

                        />
                        @error('ttl')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-column" style="flex: 1; min-width: 280px;">
                    {{-- NIK --}}
                    <div class="form-group">
                        <label class="form-label" for="nik" style="font-weight: bold; font-size:16px;">
                            <i class="bi bi-credit-card-2-front form-icon"></i> NIK | (Diisi Ketika Sudah Memiliki KTP Saja)
                        </label>
                        <input
                            type="text"
                            id="nik"
                            name="nik"
                            maxlength="16"
                            value="{{ old('nik') }}"
                            class="form-control @error('nik') is-invalid @enderror"
                            placeholder="Masukkan NIK"

                        />
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- No. Telepon --}}
                    <div class="form-group">
                        <label class="form-label" for="notelepon" style="font-weight: bold; font-size:16px;">
                            <i class="bi bi-telephone form-icon"></i> No. Telepon
                        </label>
                        <input
                            type="text"
                            id="notelepon"
                            name="notelepon"
                            value="{{ old('notelepon') }}"
                            class="form-control @error('notelepon') is-invalid @enderror"
                            placeholder="Masukkan nomor telepon"

                        />
                        @error('notelepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center" style="margin-top: 20px;">
            <hr class="my-4 custom-divider" style="border-top: 2px dashed maroon; width: 60%; margin: auto;">

            <div style="display: flex; align-items: center; justify-content: center; font-size: 16px; background: white; padding: 10px; border-radius: 5px;">
                <i class="bi bi-file-earmark-image" style="color: maroon; margin-right: 5px;"></i>
                Upload Foto Anggota
            </div>

            <hr class="my-4 custom-divider" style="border-top: 2px dashed maroon; width: 60%; margin: auto;">
        </div>
<div class="form-row" style="display: flex; gap: 20px; flex-wrap: wrap; background: white; padding: 15px; border-radius: 8px;">
  <!-- Foto -->
  <div class="form-column" style="flex: 1; min-width: 280px;">
    <div class="form-group">
      <label class="form-label" for="foto" style="font-weight: bold; font-size:16px;">
        <i class="bi bi-image form-icon"></i> Foto / (Foto/ PDF) Max 15MB
      </label>
      <input
        type="file"
        id="foto"
        name="foto"
        class="form-control @error('foto') is-invalid @enderror"
        accept="image/*,application/pdf"
        onchange="previewFile(event, 'fotoPreview')"
      />
      @error('foto')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <div style="margin-top: 10px; text-align: center;">
        <img id="fotoPreview" src="#" alt="Preview Foto" style="max-width: 200px; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
        <p id="fotoPreviewPdf" style="display:none; font-size: 14px; color: #555;">File PDF terpilih</p>
      </div>
    </div>
  </div>

  <!-- KTP -->
  <div class="form-column" style="flex: 1; min-width: 280px;">
    <div class="form-group">
      <label class="form-label" for="ktp" style="font-weight: bold; font-size:16px;">
        <i class="bi bi-card-heading form-icon"></i> KTP / (Foto/ PDF) Max 15MB
      </label>
      <input
        type="file"
        id="ktp"
        name="ktp"
        class="form-control @error('ktp') is-invalid @enderror"
        accept="image/*,application/pdf"
        onchange="previewFile(event, 'ktpPreview')"
      />
      @error('ktp')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <div style="margin-top: 10px; text-align: center;">
        <img id="ktpPreview" src="#" alt="Preview KTP" style="max-width: 200px; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 5px;">
        <p id="ktpPreviewPdf" style="display:none; font-size: 14px; color: #555;">File PDF terpilih</p>
      </div>
    </div>
  </div>
</div>

<script>
function previewFile(event, previewImgId) {
  const input = event.target;
  const previewImg = document.getElementById(previewImgId);
  const previewPdfText = document.getElementById(previewImgId + 'Pdf');

  if (input.files && input.files[0]) {
    const file = input.files[0];
    const fileType = file.type;

    if (fileType === 'application/pdf') {
      // Jika file PDF, sembunyikan preview gambar, tampilkan teks PDF
      previewImg.style.display = 'none';
      previewPdfText.style.display = 'block';
      previewPdfText.textContent = 'File PDF terpilih: ' + file.name;
    } else if (fileType.startsWith('image/')) {
      // Jika file gambar, tampilkan preview gambar, sembunyikan teks PDF
      const reader = new FileReader();
      reader.onload = function(e) {
        previewImg.src = e.target.result;
        previewImg.style.display = 'block';
        previewPdfText.style.display = 'none';
      }
      reader.readAsDataURL(file);
    } else {
      // Format file lain, sembunyikan keduanya
      previewImg.style.display = 'none';
      previewPdfText.style.display = 'none';
    }
  } else {
    previewImg.style.display = 'none';
    previewPdfText.style.display = 'none';
  }
}
</script>

        <!-- end::Body -->
<div class="form-footer" style="margin-top: 20px; background: white; padding: 15px; border-radius: 8px; display: flex; justify-content: flex-end; gap: 10px;">
    <a href="/perlombaan/daftartim" class="button-newvalidasi">
        <i class="bi bi-arrow-left-circle button-icon"></i>
        <span>Kembali</span>
    </a>
    <button class="button-hijau" type="button" onclick="openModal()">
        <i class="bi bi-save button-icon"></i>
        <span>Simpan</span>
    </button>
</div>


        <!-- Modal Konfirmasi -->
        <div id="confirmModal" class="confirmation-modal" style="background: rgba(0,0,0,0.4);">
            <div class="modal-content" style="background: white; padding: 20px; border-radius: 8px;">
                <p class="modal-message" style="margin-bottom: 20px;">
                    Apakah Anda ingin menambahkan anggota tim?
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

