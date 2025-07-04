<div class="card shadow-sm border-0" style="background: #f0f8ff;">
    <div class="card-body" style="overflow-x: auto; white-space: nowrap; padding: 16px;">
        @php
            $id = $data->id ?? 0;
            $buttons = [
                ['label' => 'Data Pemilik', 'url' => '/bepbgdatapemilik/' . $id],
                ['label' => 'Data Bangunan', 'url' => '/bepbgdatabangunan/' . $id],
                ['label' => 'Data Tanah', 'url' => '/bepbgdatatanah/' . $id],
                ['label' => 'Data Umum', 'url' => '/bepbgdataumum/' . $id],
                ['label' => 'Dokumen Teknis Arsitektur', 'url' => '/bepbgdokumeteknisars/' . $id],
                ['label' => 'Dokumen Teknis Struktur', 'url' => '/bepbgdokumeteknisstrk/' . $id],
                ['label' => 'Dokumen Teknis MEP', 'url' => '/bepbgdokumeteknismep/' . $id],
                ['label' => 'Dokumen Teknis (Jika) SLF', 'url' => '/dokumenteknisslf/' . $id],
                ['label' => 'Surat Pemberitahuan', 'url' => '/bepbgsuratpemberitahuan/' . $id],
                // ['label' => 'Surat Tugas', 'url' => '/bepbgsurattugas/' . $id],
                ['label' => 'TPA / TPT', 'url' => '/bepbgtpatpt/' . $id],
                ['label' => 'Surat Undangan', 'url' => '/bepbgsuratundangan/' . $id],
                ['label' => 'Berita Acara SLF', 'url' => '/bepbgberitaacaraslf/' . $id],
                // ['label' => 'Jenis Pengajuan PBG/SLF', 'url' => '/bepbgjenispengajuan/' . $id],
            ];
        @endphp

        @foreach ($buttons as $btn)
            <div class="d-inline-block me-3 mb-2">
                <a href="{{ $btn['url'] }}" onclick="saveScrollPosition()" class="text-decoration-none">
                    <div
                        class="px-3 py-2 rounded shadow-sm d-flex align-items-center justify-content-start"
                        style="
                            background: linear-gradient(145deg, #e1f0ff, #d6e9ff);
                            color: #003366;
                            transition: all 0.3s ease;
                            min-width: max-content;
                            border: 1px solid #c8dfff;
                            border-radius: 12px;
                            cursor: pointer;
                        "
                        onmouseover="this.style.background='white'; this.style.color='black';"
                        onmouseout="this.style.background='linear-gradient(145deg, #e1f0ff, #d6e9ff)'; this.style.color='#003366';"
                    >
                        <i class="bi bi-folder-plus me-2"></i> {{ $btn['label'] }}
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<script>
// Fungsi simpan posisi scroll sebelum pindah halaman
function saveScrollPosition() {
    const scrollY = window.scrollY || window.pageYOffset;
    sessionStorage.setItem('scrollPosition', scrollY);
}

// Saat halaman selesai load, scroll ke posisi yang disimpan
window.addEventListener('load', () => {
    const scrollY = sessionStorage.getItem('scrollPosition');
    if (scrollY !== null) {
        window.scrollTo(0, parseInt(scrollY));
        sessionStorage.removeItem('scrollPosition');
    }
});
</script>

