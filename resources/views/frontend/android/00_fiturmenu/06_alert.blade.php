<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    .modal-verify-alert, .modal-question-alert {
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background: rgba(0,0,0,0.5);
    }

    .modal-box {
        background-color: #fefefe;
        padding: 20px;
        border-radius: 10px;
        width: 500px;
        height: 500px;
        position: relative;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.5s ease;
    }

    .modal-box-question {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        width: 90%;
        position: relative;
        text-align: center;
        animation: fadeIn 0.5s ease;
    }

    .btnalert-view {
        background: none;
        border: none;
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        top: 15px;
        right: 20px;
        cursor: pointer;
        z-index: 10;
    }

    .btnalert-view:hover {
        color: black;
    }

    .success-text, .success-textupdate {
        font-size: 36px;
        font-weight: bold;
        margin: 20px 0;
    }

    .success-text { color: #4CAF50; }
    .success-textupdate { color: navy; }

    .button-text, .button-textupdate {
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        font-size: 18px;
        color: white;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .button-text { background: green; }
    .button-text:hover { background: white; color: black; }

    .button-textupdate { background: navy; }
    .button-textupdate:hover { background: white; color: black; }

    .button-delete {
        background: red;
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        font-size: 18px;
        color: white;
        transition: 0.3s ease;
    }

    .button-delete:hover {
        background: white;
        color: black;
    }

    .logo-animate-bounce {
        width: 70px;
        height: 70px;
        object-fit: cover;
        margin: 20px;
        animation: bounceZoom 2.5s ease-in-out infinite;
    }

    @keyframes bounceZoom {
        0%, 100% {
            transform: scale(1) translateY(0);
        }
        50% {
            transform: scale(1.2) translateY(-8px);
        }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
</style>

<script>
    // Tutup modal jika klik di luar konten modal
    window.addEventListener('click', function(e) {
        document.querySelectorAll('.modal-verify-alert, .modal-question-alert').forEach(modal => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    });
</script>

@if (session('create'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/abgblora/logo/pupr.png" alt="Logo" class="logo-animate-bounce">
        <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora Provinsi Jawa Tengah</p>
        <div class="success-text">Berhasil !</div>
        {{-- <a href="/dashboard"><span>Silahkan Klik Untuk Mengetahui Informasi Berkas Anda</span></a> --}}
        <br>
        <button class="button-text">{{ session('create') }}</button>
    </div>
</div>
@endif

@if (session('info'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/abgblora/logo/pupr.png" alt="Logo" class="logo-animate-bounce">
        <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora Provinsi Jawa Tengah</p>
        <div class="success-text">Berhasil</div>
        <button class="button-text">{{ session('info') }}</button>
    </div>
</div>
@endif

@if (session('pengesahankrk'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/abgblora/logo/pupr.png" alt="Logo" class="logo-animate-bounce">
        <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora Provinsi Jawa Tengah</p>
        <div class="success-text">Berhasil</div>
        <button class="button-text">{{ session('pengesahankrk') }}</button>
    </div>
</div>
@endif

@if (session('update'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/abgblora/logo/pupr.png" alt="Logo" class="logo-animate-bounce">
        <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora Provinsi Jawa Tengah</p>
        <div class="success-textupdate">Update Berhasil !</div>
        <button class="button-textupdate">{{ session('update') }}</button>
    </div>
</div>
@endif

@if (session('delete'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/abgblora/logo/pupr.png" alt="Logo" class="logo-animate-bounce">
        <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora Provinsi Jawa Tengah</p>
        <div style="font-size: 36px; color: red; font-weight: bold; margin: 20px 0;">Delete Berhasil !</div>
        <button class="button-delete">{{ session('delete') }}</button>
    </div>
</div>
@endif

@if (session('gagal'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/abgblora/logo/pupr.png" alt="Logo" class="logo-animate-bounce">
        <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora Provinsi Jawa Tengah</p>
        <div style="font-size: 36px; color: red; font-weight: bold; margin: 20px 0;">Berhasil!</div>
        <button class="button-delete">{{ session('gagal') }}</button>
    </div>
</div>
@endif

@if (session('pertanyaan'))
<div class="modal-question-alert">
    <div class="modal-box-question">
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-question-alert').style.display='none';">&times;</button>
        <img src="/assets/icon/sipjakikbb.png" alt="Logo" class="logo-animate-bounce">
        <p style="color: black;">Pemerintah Kabupaten Blora</p>
        <div class="success-text" style="font-size: 18px;">Admin Kami Akan Menghubungi Saudara, Harap Menunggu!</div>
        <button class="button-text">{{ session('pertanyaan') }}</button>
        <p style="margin-top: 25px; font-size: 12px; color: #000;">Silakan muat ulang halaman ini atau tekan tanda X di pojok kanan atas.</p>
    </div>
</div>
@endif
