<style>
/* --- Modal --- */
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
    width: 90%;
    max-width: 400px;
    text-align: center;
}

.modal-buttons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
    margin-bottom: 16px;
}

/* --- Card dan Tombol --- */
.card.shadow-sm {
    padding: 1.5rem;
}

.d-flex.flex-wrap {
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}


/* --- Media Queries --- */
@media (max-width: 768px) {
    .modal-content-custom {
        width: 95%;
        padding: 16px;
    }

    .modal-buttons {
        flex-direction: column;
        gap: 10px;
    }

    .button-hijau,
    .button-merah,
    .button-baru,
    .btn-secondary {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .button-hijau,
    .button-merah,
    .button-baru,
    .btn-secondary {
        font-size: 13px;
        padding: 0.4rem 0.8rem;
    }

    .d-flex.flex-wrap {
        flex-direction: column;
        gap: 10px;
    }
}
</style>


<div class="card shadow-sm p-4 mb-4 text-center" style="text-align: center;">
    <div class="d-flex flex-wrap gap-3 justify-content-center">

   {{-- Tombol Verifikasi 1: Persyaratan Peserta --}}
@if($data->validasiberkas1 == 'lolos')
    <button class="button-hijau" type="button">
        <i class="bi bi-patch-check-fill me-1"></i>Lolos
    </button>
@elseif($data->validasiberkas1 == 'dikembalikan')
    <button class="button-merah" type="button"
        onclick="openModal1({{ $data->id }})">
        <i class="bi bi-arrow-counterclockwise me-1"></i>Dikembalikan
    </button>
@else
    <button class="button-baru btn-secondary" type="button"
        onclick="openModal1({{ $data->id }})">
        <i class="bi bi-search me-1"></i>Cek Berkas
    </button>
@endif

{{-- Tombol Verifikasi 2: Pembayaran --}}
@if($data->validasiberkas2 == 'sudah')
    <button class="button-hijau" type="button">
        <i class="bi bi-check-circle-fill me-1"></i>Sudah
    </button>
@elseif($data->validasiberkas2 == 'belum')
    <button class="button-merah" type="button" onclick="openModal2({{ $data->id }})">
        <i class="bi bi-x-circle me-1"></i>Belum
    </button>
@else
    <button class="button-baru" type="button" onclick="openModal2({{ $data->id }})">
        <i class="bi bi-search me-1"></i>Cek Pembayaran
    </button>
@endif
        {{-- Tombol Verifikasi 3: Kehadiran --}}
{{-- Tombol Verifikasi 3: Kehadiran --}}
@if($data->validasiberkas3 == 'sudah')
    <button class="button-hijau" type="button">
        <i class="bi bi-check-circle-fill me-1"></i>Hadir
    </button>
@elseif($data->validasiberkas3 == 'belum')
    <button class="button-merah" type="button" onclick="openModal3({{ $data->id }})">
        <i class="bi bi-x-circle me-1"></i>Tidak Hadir
    </button>
@else
    <button class="button-baru" type="button" onclick="openModal3({{ $data->id }})">
        <i class="bi bi-pencil-square me-1"></i>Daftar Ulang
    </button>
@endif

{{-- Tombol Verifikasi 4: Sertifikat --}}
@if($data->validasiberkas4 == 'sudah')
    <button class="button-hijau" type="button">
        <i class="bi bi-check-circle-fill me-1"></i>Terbitkan
    </button>
@elseif($data->validasiberkas4 == 'belum')
    <button class="button-merah" type="button" onclick="openModal4({{ $data->id }})">
        <i class="bi bi-x-circle me-1"></i>Tidak
    </button>
@else
    <button class="button-baru" type="button" onclick="openModal4({{ $data->id }})">
        <i class="bi bi-file-earmark-check me-1"></i>Terbitkan Sertifikat
    </button>
@endif

    </div>
</div>

<!-- Modal 1: Verifikasi Persyaratan Peserta -->
<div id="modal1" class="modal-custom">
    <div class="modal-content-custom">
        <p>Apakah Persyaratan Peserta Sudah Lengkap?</p>
        <form method="POST" action="{{ route('verifikasi1', $data->id) }}">
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
        <form method="POST" action="{{ route('verifikasi2', $data->id) }}">
            @csrf
            @method('PUT')
            {{-- Hapus hidden field karena gak kepake di controller --}}
            <div class="modal-buttons">
                <button type="submit" name="validasiberkas2" value="sudah" class="button-hijau me-2">Sudah</button>
                <button type="submit" name="validasiberkas2" value="belum" class="button-merah">Belum</button>
            </div>
        </form>
        <button type="button" onclick="closeModal2()" class="button-baru btn-secondary mt-3">Batal</button>
    </div>
</div>
<!-- Modal 3: Verifikasi Kehadiran -->
<div id="modal3" class="modal-custom">
    <div class="modal-content-custom">
        <p>Apakah Peserta Hadir TM/Daftar Ulang?</p>
        <form method="POST" action="{{ route('verifikasi3', $data->id) }}">
            @csrf
            @method('PUT')
            <div class="modal-buttons">
                <button type="submit" name="validasiberkas3" value="sudah" class="button-hijau me-2">Hadir</button>
                <button type="submit" name="validasiberkas3" value="belum" class="button-merah">Tidak</button>
            </div>
        </form>
        <button type="button" onclick="closeModal3()" class="button-baru btn-secondary mt-3">Batal</button>
    </div>
</div>


<!-- Modal 4: Verifikasi Sertifikat -->
<div id="modal4" class="modal-custom">
    <div class="modal-content-custom">
        <p>Apakah mau Menerbitkan Sertifikat?</p>

        <form method="POST" action="{{ route('verifikasi4', $data->id) }}">
            @csrf
            @method('PUT')
            <div class="modal-buttons">
                <button type="submit" name="validasiberkas4" value="sudah" class="button-hijau me-2">Terbit</button>
                <button type="submit" name="validasiberkas4" value="belum" class="button-merah">Tidak Terbit</button>
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
