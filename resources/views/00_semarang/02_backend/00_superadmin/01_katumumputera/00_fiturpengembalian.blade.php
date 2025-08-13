<div class="card shadow-sm p-4 mb-4 text-center" style="text-align: center;">
    <div class="d-flex flex-wrap gap-3 justify-content-center">

        {{-- Tombol Verifikasi 1: Persyaratan Peserta --}}
        @if($data->validasiberkas1 == 'lolos')
            <button class="button-hijau" type="button" disabled>
                <i class="bi bi-patch-check-fill me-1"></i>Lolos
            </button>
        @elseif($data->validasiberkas1 == 'dikembalikan')
            <button class="button-merah" type="button"
                onclick="openModal1({{ $data->id }})">
                <i class="bi bi-x-circle me-1"></i>Dikembalikan
            </button>
        @else
            <button class="button-baru btn-secondary" type="button"
                onclick="openModal1({{ $data->id }})">
                <i class="bi bi-patch-check me-1"></i>Cek Berkas
            </button>
        @endif

        {{-- Tombol Verifikasi 2: Pembayaran --}}
        @if($data->validasiberkas2 == 'sudah')
            <button class="button-hijau" type="button" disabled>Sudah</button>
        @elseif($data->validasiberkas2 == 'belum')
            <button class="button-merah" type="button"
                onclick="openModal2({{ $data->id }})">Belum</button>
        @else
            <button class="button-baru" type="button"
                onclick="openModal2({{ $data->id }})">
                <i class="bi bi-patch-check me-1"></i>Cek Pembayaran
            </button>
        @endif

        {{-- Tombol Verifikasi 3: Kehadiran --}}
        @if($data->validasiberkas3 == 'ya')
            <button class="button-hijau" type="button" disabled>Ya</button>
        @elseif($data->validasiberkas3 == 'tidak')
            <button class="button-merah" type="button"
                onclick="openModal3({{ $data->id }})">Tidak</button>
        @else
            <button class="button-baru" type="button"
                onclick="openModal3({{ $data->id }})">
                <i class="bi bi-patch-check me-1"></i>Daftar Ulang
            </button>
        @endif

        {{-- Tombol Verifikasi 4: Sertifikat --}}
        @if($data->validasiberkas4 == 'terbit')
            <button class="button-hijau" type="button" disabled>Terbitkan</button>
        @elseif($data->validasiberkas4 == 'tidak')
            <button class="button-merah" type="button"
                onclick="openModal4({{ $data->id }})">Tidak</button>
        @else
            <button class="button-baru" type="button"
                onclick="openModal4({{ $data->id }})">
                <i class="bi bi-patch-check me-1"></i>Terbitkan Sertifikat
            </button>
        @endif

    </div>
</div>

<!-- Modal 1: Verifikasi Persyaratan Peserta -->
<div id="modal1" class="modal-custom">
    <div class="modal-content-custom">
        <p>Apakah Persyaratan Peserta Sudah Lengkap?</p>
        <form method="POST" action="{{ route('valberkasusaha2.update', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="field" value="validasiberkas1">
            <div class="modal-buttons">
                <button type="submit" name="value" value="lolos" class="button-hijau me-2">Lolos</button>
                <button type="submit" name="value" value="dikembalikan" class="button-merah">Dikembalikan</button>
            </div>
        </form>
        <button type="button" onclick="closeModal1()" class="button-baru btn-secondary mt-3">Batal</button>
    </div>
</div>

<!-- Modal 2: Verifikasi Pembayaran -->
<div id="modal2" class="modal-custom">
    <div class="modal-content-custom">
        <p>Apakah Peserta Sudah Membayar?</p>
        <form method="POST" action="{{ route('valberkasusaha2.updatePayment', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="field" value="validasiberkas2">
            <div class="modal-buttons">
                <button type="submit" name="value" value="sudah" class="button-hijau me-2">Sudah</button>
                <button type="submit" name="value" value="belum" class="button-merah">Belum</button>
            </div>
        </form>
        <button type="button" onclick="closeModal2()" class="button-baru btn-secondary mt-3">Batal</button>
    </div>
</div>

<!-- Modal 3: Verifikasi Kehadiran -->
<div id="modal3" class="modal-custom">
    <div class="modal-content-custom">
        <p>Apakah Peserta Hadir TM/Daftar Ulang?</p>
        <form method="POST" action="{{ route('valberkasusaha2.updateAttendance', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="field" value="validasiberkas3">
            <div class="modal-buttons">
                <button type="submit" name="value" value="ya" class="button-hijau me-2">Ya</button>
                <button type="submit" name="value" value="tidak" class="button-merah ">Tidak</button>
            </div>
        </form>
        <button type="button" onclick="closeModal3()" class="button-baru btn-secondary mt-3">Batal</button>
    </div>
</div>

<!-- Modal 4: Verifikasi Sertifikat -->
<div id="modal4" class="modal-custom">
    <div class="modal-content-custom">
        <p>Apakah mau Menerbitkan Sertifikat?</p>
        <form method="POST" action="{{ route('valberkasusaha2.updateCertificate', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="field" value="validasiberkas4">
            <div class="modal-buttons">
                <button type="submit" name="value" value="terbit" class="button-hijau me-2">Terbitkan</button>
                <button type="submit" name="value" value="tidak" class="button-merah">Tidak</button>
            </div>
        </form>
        <button type="button" onclick="closeModal4()" class="button-baru btn-secondary mt-3">Batal</button>
    </div>
</div>

<style>
.modal-custom {
    display: none;
    position: fixed;
    inset: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

.modal-content-custom {
    background: white;
    padding: 24px;
    border-radius: 12px;
    width: 95%;
    max-width: 400px;
    text-align: center;
}

.modal-buttons {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-bottom: 16px;
}
</style>

<script>
// Modal 1 Functions
function openModal1(itemId) {
    document.getElementById('modal1').style.display = 'flex';
}
function closeModal1() {
    document.getElementById('modal1').style.display = 'none';
}

// Modal 2 Functions
function openModal2(itemId) {
    document.getElementById('modal2').style.display = 'flex';
}
function closeModal2() {
    document.getElementById('modal2').style.display = 'none';
}

// Modal 3 Functions
function openModal3(itemId) {
    document.getElementById('modal3').style.display = 'flex';
}
function closeModal3() {
    document.getElementById('modal3').style.display = 'none';
}

// Modal 4 Functions
function openModal4(itemId) {
    document.getElementById('modal4').style.display = 'flex';
}
function closeModal4() {
    document.getElementById('modal4').style.display = 'none';
}
</script>
