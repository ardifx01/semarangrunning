@include('frontend.abgblora.00_fiturmenu.02_header')
@include('frontend.abgblora.00_fiturmenu.05_menunavigasweb')
@include('frontend.android.00_fiturmenu.06_alert')

<section
  id="breadcrumb"
  style="
    background: linear-gradient(to bottom, #7de3f1, #ffffff);
    width: 100vw;
    margin: 0;
    padding: 0;
    position: relative;
    left: 0;
    margin-top: -50px;
    margin-bottom: -45px;
  "
>


  <section id="categories" class="container max-w-[1130px] mx-auto flex flex-col gap-4 mt-[50px]" style="margin-top: 200px;">
    <h2 class="font-semibold" style="font-size: 16px; margin-top:50px;">🏗️ ABG Blora Bangunan Gedung </h2>
    {{-- <h2 class="font-bold text-xl">🏗️ Dinas Pekerjaan Umum Dan Penaatan Ruang Kabupaten Blora </h2> --}}
    <style>
        .card {
            border-radius: 15px;
            overflow: hidden;
        }

  .card-custom {
    padding: 12px;
    background: white;
    display: flex;
    flex-direction: column;
    gap: 16px;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    height: 100%;
  }

  .card-custom:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(102, 53, 241, 0.2);
    background-color: #ffd100;
  }

  .card-icon {
    width: 100%;
    border-radius: 15px;
  }
</style>

    <div class="grid grid-cols-1 sm:grid-cols-5 gap-3">
        <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div style="
              padding: 12px;
              background: white;
              display: flex;
              flex-direction: column;
              gap: 16px;
              border-radius: 15px;
              transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
              height: 100%;
            "
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 20px rgba(102, 53, 241, 0.2)'; this.style.backgroundColor='#ffd100';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'; this.style.backgroundColor='white';">

             <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/0001.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

              <div style="
                display: flex;
                flex-direction: column;
                gap: 4px;
              ">
                <p style="font-weight: 600; font-size: 14px; color: #000;">PBG/SLF</p>
                <p style="font-size: 14px; color: #545768;">34 Permohonan</p>
              </div>

            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
           <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/002.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

   <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">Traking Permohonan</p>
                <p style="font-size: 14px; color: #545768;">900 Persetujuan</p>
              </div>
            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
                   <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/003.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>
      <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">Bangunan Gedung</p>
                <p style="font-size: 14px; color: #545768;">12.345 Bangunan</p>
              </div>
            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
                       <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/004.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

              <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">Bantuan Teknis</p>
                <p style="font-size: 14px; color: #545768;">234 Permohonan</p>
              </div>
            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
                    <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/005.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

              <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">Sosialisasi</p>
                <p style="font-size: 14px; color: #545768;">234 Agenda</p>
              </div>
            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
                        <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/006.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

              <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">KRK</p>
                <p style="font-size: 14px; color: #545768;">432 Permohonan</p>
              </div>
            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
                         <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/007.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

              <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">Penililk Bangunan</p>
                <p style="font-size: 14px; color: #545768;">65 Lokasi</p>
              </div>
            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
                      <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/008.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

              <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">MBR</p>
                <p style="font-size: 14px; color: #545768;">435 Permohonan</p>
              </div>
            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
                         <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/007.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

              <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">Bantuan Gambar</p>
                <p style="font-size: 14px; color: #545768;">63 Lokasi</p>
              </div>
            </div>
          </a>

          <a href="category-auth.html" class="card" style="text-decoration: none;">
            <div class="card-custom">
                        <div style="display: flex; justify-content: center; align-items: center;">
  <div style="
      width: 200px;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <video
      src="/assets/iconberanda/007.mp4"
      autoplay
      muted
      loop
      playsinline
      loading="lazy"
      style="width: 100%; border-radius: 15px;">
    </video>
  </div>
</div>

              <div style="display: flex; flex-direction: column; gap: 4px;">
                <p style="font-weight: 600; font-size: 14px; color: #000;">Hibah Bangunan</p>
                <p style="font-size: 14px; color: #545768;">9 Bangunan Gedung</p>
              </div>
            </div>
          </a>
        <!-- Card lainnya tetap sama -->
    </div>

  </section>

  <section id="featured" class="container max-w-[1130px] mx-auto flex flex-col gap-4 mt-[50px]">
    <h2 class="font-semibold" style="font-size:16px;">🧰 Agenda Pelatihan Bangunan Gedung</h2>

    <style>
        .project-card {
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
    }

    .project-card:hover {
        box-shadow: 0 0 0 2px #6635F1;
    }

    .project-card-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 12px; /* Kamu bisa atur jadi 8px atau 16px juga */
    }

    </style>

    <div class="project-card-container">
        <a href="details.html" class="project-card">
            <div class="p-5 bg-white flex flex-col gap-5 h-full">
                <div class="w-full h-[140px] overflow-hidden relative">
                    <div class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">DIBUKA</div>
                    <img src="/assets/iconberanda/pelatihannew.jpg" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="title font-semibold min-h-[56px] line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">
                        Pelatihan Pengawasan Konstruksi Gedung Bertingkat DPU PR Blora
                    </p>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/dollar-circle.svg" alt="icon">
                        <p class="font-semibold text-sm">Gratis</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/verify.svg" alt="icon">
                        <p class="font-semibold text-sm">Kuota: 50 Peserta</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/crown.svg" alt="icon">
                        <p class="font-semibold text-sm">Intermediate</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="details.html" class="project-card">
            <div class="p-5 bg-white flex flex-col gap-5 h-full">
                <div class="w-full h-[140px] overflow-hidden relative">
                    <div class="font-bold text-xs leading-[18px] text-white bg-[#F3445C] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">DITUTUP</div>
                    <img src="/assets/iconberanda/pelatihannew.jpg" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">
                        Workshop Perencanaan Struktur Bangunan Tahan Gempa
                    </p>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/dollar-circle.svg" alt="icon">
                        <p class="font-semibold text-sm">Gratis</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/verify.svg" alt="icon">
                        <p class="font-semibold text-sm">Kuota: 50 Peserta</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/crown.svg" alt="icon">
                        <p class="font-semibold text-sm">Expert</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="details.html" class="project-card">
            <div class="p-5 bg-white flex flex-col gap-5 h-full">
                <div class="w-full h-[140px] overflow-hidden relative">
                    <div class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">DIBUKA</div>
                    <img src="/assets/iconberanda/pelatihannew.jpg" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">
                        Sertifikasi Tukang Bangunan Bersertifikat Nasional
                    </p>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/dollar-circle.svg" alt="icon">
                        <p class="font-semibold text-sm">Gratis</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/verify.svg" alt="icon">
                        <p class="font-semibold text-sm">Kuota: 50 Peserta</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/crown.svg" alt="icon">
                        <p class="font-semibold text-sm">Beginner</p>
                    </div>
                </div>
            </div>
        </a>


        <a href="details.html" class="project-card">
            <div class="p-5 bg-white flex flex-col gap-5 h-full">
                <div class="w-full h-[140px] overflow-hidden relative">
                    <div class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">DIBUKA</div>
                    <img src="/assets/iconberanda/pelatihannew.jpg" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">
                        Pelatihan Pemasangan Instalasi Listrik Bangunan Gedung
                    </p>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/dollar-circle.svg" alt="icon">
                        <p class="font-semibold text-sm">Gratis</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/verify.svg" alt="icon">
                        <p class="font-semibold text-sm">Kuota: 50 Peserta</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/crown.svg" alt="icon">
                        <p class="font-semibold text-sm">Intermediate</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="details.html" class="project-card">
            <div class="p-5 bg-white flex flex-col gap-5 h-full">
                <div class="w-full h-[140px] overflow-hidden relative">
                    <div class="font-bold text-xs leading-[18px] text-white bg-[#F3445C] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">DITUTUP</div>
                    <img src="/assets/iconberanda/pelatihannew.jpg" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">
                        Bimbingan Teknis K3 Konstruksi pada Proyek Gedung Pemerintah
                    </p>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/dollar-circle.svg" alt="icon">
                        <p class="font-semibold text-sm">Gratis</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/verify.svg" alt="icon">
                        <p class="font-semibold text-sm">Kuota: 50 Peserta</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/crown.svg" alt="icon">
                        <p class="font-semibold text-sm">Advanced</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="details.html" class="project-card">
            <div class="p-5 bg-white flex flex-col gap-5 h-full">
                <div class="w-full h-[140px] overflow-hidden relative">
                    <div class="font-bold text-xs leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit absolute top-[10px] left-[10px]">DIBUKA</div>
                    <img src="/assets/iconberanda/pelatihannew.jpg" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="title font-semibold text-lg min-h-[56px] line-clamp-2 hover:line-clamp-none" style="font-size: 14px;">
                        Pelatihan Manajemen Proyek Bangunan Gedung Skala Menengah
                    </p>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/dollar-circle.svg" alt="icon">
                        <p class="font-semibold text-sm">Gratis</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/verify.svg" alt="icon">
                        <p class="font-semibold text-sm">Kuota: 50 Peserta</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <img src="/assets/new/icons/crown.svg" alt="icon">
                        <p class="font-semibold text-sm">Beginner</p>
                    </div>
                </div>
            </div>
        </a>

                <!-- Card lainnya tinggal ganti classnya juga jadi "project-card" -->
    </div>

</section>
  <section id="newest" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row sm:flex-nowrap gap-5 mt-[50px]">
    <div class="flex flex-col gap-4 w-full">
        <h2 class="font-semibold" style="font-size: 16px;">📰 Berita & Artikel Bangunan Gedung DPUPR Kabupaten Blora</h2>
        <div class="flex flex-col gap-3">
            <!-- Berita 1 -->
            <div class="card hover:ring-2 hover:ring-[#6635F1] transition-all duration-300 bg-white p-5 rounded-[20px] flex flex-col sm:flex-row sm:items-center gap-[18px] w-full">
              <a href="berita-1.html" class="w-full sm:w-[200px] h-[150px] flex shrink-0 rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                <img src="/assets/iconberanda/beritaabg.jpg" class="w-full h-full object-cover" alt="Gedung Blora">
              </a>
              <div class="flex flex-col gap-[10px]">
                <div class="font-bold leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit" style="font-size: 14px;">BERITA</div>
                <a href="berita-1.html" class="font-semibold leading-[27px]" style="font-size: 16px;">Peresmian Gedung Pelayanan Terpadu DPU PR Blora</a>
                <p class="text-sm leading-7 line-clamp-2">Bupati Blora meresmikan gedung baru pelayanan terpadu Dinas PUPR, sebagai bentuk peningkatan pelayanan publik di sektor konstruksi.</p>
                <div class="text-xs text-gray-500">Dipublikasikan: 10 April 2025</div>
              </div>
            </div>

            <!-- Berita 2 -->
            <div class="card hover:ring-2 hover:ring-[#6635F1] transition-all duration-300 bg-white p-5 rounded-[20px] flex flex-col sm:flex-row sm:items-center gap-[18px] w-full">
              <a href="berita-2.html" class="w-full sm:w-[200px] h-[150px] flex shrink-0 rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                <img src="/assets/iconberanda/beritaabg.jpg" class="w-full h-full object-cover" alt="Proyek Gedung DPU Blora">
              </a>
              <div class="flex flex-col gap-[10px]">
                <div class="font-bold leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit" style="font-size: 14px;">BERITA</div>
                <a href="berita-2.html" class="font-semibold leading-[27px]" style="font-size: 16px;">Progress Pembangunan Kantor Teknik Bangunan Gedung</a>
                <p class="text-sm leading-7 line-clamp-2">Pembangunan kantor teknik bangunan gedung telah mencapai 80%. Proyek ini ditargetkan rampung sebelum pertengahan tahun 2025.</p>
                <div class="text-xs text-gray-500">Dipublikasikan: 5 April 2025</div>
              </div>
            </div>

            <!-- Berita 3 -->
            <div class="card hover:ring-2 hover:ring-[#6635F1] transition-all duration-300 bg-white p-5 rounded-[20px] flex flex-col sm:flex-row sm:items-center gap-[18px] w-full">
              <a href="berita-3.html" class="w-full sm:w-[200px] h-[150px] flex shrink-0 rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                <img src="/assets/iconberanda/beritaabg.jpg" class="w-full h-full object-cover" alt="Sosialisasi Bangunan Gedung">
              </a>
              <div class="flex flex-col gap-[10px]">
                <div class="font-bold leading-[18px] text-white bg-[#2E82FE] p-[2px_10px] rounded-full w-fit" style="font-size: 14px;">BERITA</div>
                <a href="berita-3.html" class="font-semibold leading-[27px]" style="font-size: 16px;">Sosialisasi Standar Teknis Bangunan Gedung</a>
                <p class="text-sm leading-7 line-clamp-2">DPU PR Blora menyelenggarakan sosialisasi teknis kepada pelaku konstruksi agar pembangunan gedung sesuai dengan regulasi dan standar nasional.</p>
                <div class="text-xs text-gray-500">Dipublikasikan: 1 April 2025</div>
              </div>
            </div>
          </div>

    </div>
    <div class="flex flex-col sm:w-[300px] h-fit shrink-0 bg-white rounded-[20px] p-5 gap-[30px] sm:mt-[45px]">
        <div class="flex flex-col gap-3">
            <h3 class="font-semibold">Bantuan Informasi</h3>
            <div class="flex items-center gap-3">
                <div class="w-[50px] h-[50px] rounded-full overflow-hidden flex shrink-0">
                    <img src="/assets/iconberanda/informasi.png" class="w-full h-full object-cover" alt="photo">
                </div>
                <div class="flex flex-col gap-[2px]">
                    <p class="font-semibold">Kontak Kami</p>
                    <p class="text-sm leading-[21px] text-[#545768]">Admin ABG Blora</p>
                </div>
            </div>
            {{-- <div class="flex items-center gap-[6px]">
                <div class="flex items-center">
                    <div>
                        <img src="/assets/new/icons/Star.svg" alt="star">
                    </div>
                    <div>
                        <img src="/assets/new/icons/Star.svg" alt="star">
                    </div>
                    <div>
                        <img src="/assets/new/icons/Star.svg" alt="star">
                    </div>
                    <div>
                        <img src="/assets/new/icons/Star.svg" alt="star">
                    </div>
                    <div>
                        <img src="/assets/new/icons/Star-grey.svg" alt="star">
                    </div>
                    <p class="font-semibold text-sm">(893)</p>
                </div>
            </div> --}}
        </div>
        <div class="flex flex-col gap-[10px] rounded-[20px] p-[10px_14px] bg-[#030303]">
                <a href="https://wa.me/6281321455855" target="_blank" class="font-semibold text-white hover:underline text-center" style="font-size: 14px;">Chat Sekarang</a>

            </div>

        <hr>
        <div class="flex flex-col gap-3">
            <h3 class="font-semibold">Artikel Bangunan Gedung <br> ABG Blora</h3>
            <div class="flex flex-col gap-[18px]">
<!-- Card 1 -->
<a href="" class="resources-card">
    <div class="group flex gap-3 items-center">
        <div class="w-[50px] h-[50px] flex shrink-0">
            <img src="/assets/new/icons/ruler&pen.svg" alt="icon">
        </div>
        <div class="flex flex-col justify-center gap-[2px]">
            <p class="font-semibold group-hover:underline">Tantangan Pengawasan Proyek Konstruksi</p>
        </div>
    </div>
    {{-- <div class="flex flex-col gap-[10px] rounded-[20px] p-[5px_14px] bg-[#030303]">
        <a href="https://wa.me/6281321455855" target="_blank" class="font-semibold text-white hover:underline text-center" style="font-size: 14px;">Download</a>
    </div> --}}

</a>

<!-- Card 2 -->
<a href="" class="resources-card">
    <div class="group flex gap-3 items-center">
        <div class="w-[50px] h-[50px] flex shrink-0">
            <img src="/assets/new/icons/ruler&pen.svg" alt="icon">
        </div>
        <div class="flex flex-col justify-center gap-[2px]">
            <p class="font-semibold group-hover:underline">Peran Jakon dalam Pembangunan Gedung Blora</p>
        </div>
    </div>
    {{-- <div class="flex flex-col gap-[10px] rounded-[20px] p-[5px_14px] bg-[#030303]">
        <a href="https://wa.me/6281321455855" target="_blank" class="font-semibold text-white hover:underline text-center" style="font-size: 14px;">Download</a>
    </div> --}}

</a>

<!-- Card 3 -->
<a href="" class="resources-card">
    <div class="group flex gap-3 items-center">
        <div class="w-[50px] h-[50px] flex shrink-0">
            <img src="/assets/new/icons/ruler&pen.svg" alt="icon">
        </div>
        <div class="flex flex-col justify-center gap-[2px]">
            <p class="font-semibold group-hover:underline">Manajemen Risiko dalam Proyek Gedung Daerah</p>
        </div>
    </div>
    {{-- <div class="flex flex-col gap-[10px] rounded-[20px] p-[5px_14px] bg-[#030303]">
        <a href="https://wa.me/6281321455855" target="_blank" class="font-semibold text-white hover:underline text-center" style="font-size: 14px;">Download</a>
    </div> --}}

</a>

<!-- Card 4 -->
<a href="" class="resources-card">
    <div class="group flex gap-3 items-center">
        <div class="w-[50px] h-[50px] flex shrink-0">
            <img src="/assets/new/icons/ruler&pen.svg" alt="icon">
        </div>
        <div class="flex flex-col justify-center gap-[2px]">
            <p class="font-semibold group-hover:underline">Efisiensi Anggaran pada Proyek Konstruksi Blora</p>
        </div>
    </div>
    {{-- <div class="flex flex-col gap-[10px] rounded-[20px] p-[5px_14px] bg-[#030303]">
        <a href="https://wa.me/6281321455855" target="_blank" class="font-semibold text-white hover:underline text-center" style="font-size: 14px;">Download</a>
    </div> --}}

</a>

<!-- Card 5 -->
<a href="" class="resources-card">
    <div class="group flex gap-3 items-center">
        <div class="w-[50px] h-[50px] flex shrink-0">
            <img src="/assets/new/icons/ruler&pen.svg" alt="icon">
        </div>
        <div class="flex flex-col justify-center gap-[2px]">
            <p class="font-semibold group-hover:underline">Inovasi Material dalam Konstruksi Gedung Pemerintah</p>
            </div>
        </div>
    </div>
    {{-- <div class="flex flex-col gap-[10px] rounded-[20px] p-[5px_14px] bg-[#030303]">
        <a href="https://wa.me/6281321455855" target="_blank" class="font-semibold text-white hover:underline text-center" style="font-size: 14px;">Download</a>
    </div> --}}

</a>

<!-- Card 6 -->
<a href="" class="resources-card">
    <div class="group flex gap-3 items-center">
        <div class="w-[50px] h-[50px] flex shrink-0">
            <img src="/assets/new/icons/ruler&pen.svg" alt="icon">
        </div>
        <div class="flex flex-col justify-center gap-[2px]">
            <p class="font-semibold group-hover:underline">Penerapan K3 dalam Proyek Gedung Kabupaten Blora</p>
        </div>
    </div>
    {{-- <div class="flex flex-col gap-[10px] rounded-[20px] p-[5px_14px] bg-[#030303]">
        <a href="https://wa.me/6281321455855" target="_blank" class="font-semibold text-white hover:underline text-center" style="font-size: 14px;">Download</a>
    </div> --}}

</a>

            </div>
        </div>
    </div>
  </section>

  </section>

  @include('frontend.abgblora.00_fiturmenu.03_footer')
  <!-- back to top start -->
  <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
  </div>
  <!-- back to top end -->

</div>

@include('frontend.abgblora.00_fiturmenu.04_footer')

<script>
    function toggleDropdown(event) {
      event.preventDefault();
      const dropdown = event.target.closest('.dropdown');
      dropdown.classList.toggle('show');
    }

    // Optional: Tutup dropdown jika klik di luar
    window.addEventListener('click', function(e) {
      document.querySelectorAll('.dropdown').forEach(drop => {
        if (!drop.contains(e.target)) {
          drop.classList.remove('show');
        }
      });
    });
  </script>
