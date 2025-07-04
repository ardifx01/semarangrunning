

<div class="flex flex-col gap-5 w-full">
    <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
            <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
        <div class="w-5 h-5 flex shrink-0">
            <img src="/assets/new/icons/story.svg" alt="icon">
        </div>
        <p class="text-white font-normal text-sm">
            <span class="font-bold">Pilih Salah Satu Jenis Permohonan Bantuan Teknis Anda ! </span>
        </p>
    </div>
    <div style="display: flex; justify-content: center; align-items: center; gap: 16px;">
        <a href="/404">
            <button type="button" class="btn-submit">
                <i class="fas fa-drafting-compass w-5 h-5"></i>
                Asistensi Perencanaan
            </button>
        </a>

        <a href="/404">
            <button type="button" class="btn-submit">
                <i class="fas fa-tools w-5 h-5"></i>
                Bantuan Teknis Bangunan Gedung
            </button>
        </a>

{{--
        <a href="/404">
            <button type="button" class="btn-submit">
                <i class="fas fa-praying-hands w-5 h-5"></i> <!-- Ikon diganti -->
                Fungsi Keagamaan
            </button>
        </a>

        <a href="/404">
            <button type="button" class="btn-submit">
                <i class="fas fa-theater-masks w-5 h-5"></i> <!-- Ikon diganti -->
                Fungsi Sosial Budaya
            </button>
        </a> --}}

    </div>

    <!-- CSS untuk Hover dan Style -->
    <style>
        .btn-submit {
            background-color: #000080; /* Warna biru */
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px; /* Jarak antara ikon dan teks */
            transition: all 0.3s ease-in-out;
        }

        .btn-submit:hover {
            background-color: white; /* Warna putih saat hover */
            color: black; /* Tulisan hitam */
            border: 1px solid #000080; /* Border biru */
        }

        .btn-submit i {
            font-size: 18px; /* Ukuran ikon */
        }
    </style>

</div>


<script>
    function selectButton(selectedButtonId) {
        // Matikan semua tombol
        const buttons = document.querySelectorAll('.btn-submit');
        buttons.forEach(button => {
            button.disabled = true; // Nonaktifkan tombol
        });

        // Hanya tombol yang dipilih yang tetap aktif
        const selectedButton = document.getElementById(selectedButtonId);
        selectedButton.querySelector('button').disabled = false; // Tombol yang dipilih tetap aktif
    }
</script>



