<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<style>
    .petablota {
      position: relative;
      min-height: 500px;
    }
    .petablota-map-container {
      height: 70vh;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      position: relative;
    }
    #map {
      width: 100%;
      height: 100%;
    }
    #map-loader {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1000;
      display: none;
    }

.btn-submit-hover:hover {
    background-color: white; /* Warna putih */
    color: black; /* Tulisan hitam */
    border: 1px solid #2563eb; /* Border biru */
    transition: all 0.3s ease-in-out;
  }

  .btn-cancel-hover:hover {
    background-color: white; /* Warna putih */
    color: black; /* Tulisan hitam */
    border: 1px solid #9CA3AF; /* Border abu-abu */
    transition: all 0.3s ease-in-out;
  }

.pdf-preview-wrapper {
                max-width: 50%;
                overflow-x: auto;
                border: 1px solid #ccc;
                border-radius: 8px;
                padding: 8px;
                }

                .pdf-preview-wrapper iframe {
                width: 100%;
                height: 200px;
                border: none;
                border-radius: 6px;
                }

              .koordinat-box {
                margin-top: 10px;
                font-family: Arial, sans-serif;
                background: #f3f3f3;
                padding: 10px;
                border-radius: 10px;
                border: 1px solid #ccc;
              }

              /* Sembunyikan default attribution Leaflet */
              .leaflet-control-attribution a[href*="leaflet"] {
                display: none !important;
              }

 body {
      font-family: 'Poppins', sans-serif;
    }

.custom-button {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    background-color: #258af0;
    color: #ffffff;
    padding: 10px 15px;
    border-radius: 9999px;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
  }

  .custom-button:hover {
    background-color: white;
    color: #258af0;
  }

  .custom-button svg {
    transition: all 0.3s;
  }

  .custom-button:hover svg {
    fill: #258af0;
  }

    table.zebra-table {
        border-collapse: collapse;
        width: 100%;
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        border-radius: 15px;
        overflow: hidden;
    }

    .zebra-table thead {
        background-color: #2E82FE;
        color: white;
    }

    .zebra-table th,
    .zebra-table td {
        padding: 6px 12px;
        text-align: left;
    }

    .zebra-table tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .zebra-table tbody tr:nth-child(even) {
        background-color: #dfdddd;
    }

    .zebra-table tbody tr:hover {
        background-color: #0fb825;
    }
</style>

@include('frontend.abgblora.00_fiturmenu.02_header')
@include('frontend.abgblora.00_fiturmenu.05_menunavigasweb')
@include('frontend.abgblora.00_fiturmenu.05_menunavigasweb')
@include('backend.00_administrator.00_baganterpisah.09_button')

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
    {{-- style="
        background-image: url('/assets/abgblora/logo/gambarabgblora.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100vw;
        margin: 0;
        padding: 0;
        position: relative;
        left: 0;
        margin-top:-30px;
        margin-bottom:-45px;
    " --}}
>

<section id="breadcrumb" class="container max-w-[1130px] mx-auto" style="margin-top: 200px;">
    <br><br>
    <div class="flex items-center gap-[20px]">
      <!-- Gambar di kiri -->
      <img src="/assets/abgblora/logo/iconabgblora.png" alt="" class="w-[60px] -my-[15px]" width="10%" style="margin-right: 20px;">

      <!-- Breadcrumb di kanan -->
      <div class="flex gap-[30px] items-center flex-wrap">
        <span>/</span>
        <a href="/permohonankrk" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: blue;">
         {{$title}}
        </a>
      </div>
    </div>

  </section>



 <section id="details" class="container max-w-[1130px] mx-auto flex flex-col sm:flex-row gap-5">

    {{-- @include('frontend.abgblora.06_permohonankrk.02_permohonankrkpemohon.00_menufungsibangunan') --}}


            <div class="flex flex-col gap-5 w-full">
            <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
                    <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Informasi Bantuan Teknis Penyelenggaraan Bangunan Gedung Negara</span>
                </p>
            </div>

    <style>
        :root {
            --primary: #002366; /* Navy blue lebih gelap */
            --secondary: #1E4B8B;
            --accent: #3A7CA5;
            --light: #F0F4F8;
            --gray: #E1E5EA;
            --dark-gray: #6C757D;
            --white: #FFFFFF;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #F8FAFC;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            padding: 2rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            width: 80px;
            height: auto;
        }

        .header-text {
            flex: 1;
            padding-left: 20px;
        }

        .header h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Main Content */
        .main-content {
            padding: 2rem 0;
        }

        /* Card Styles */
        .card {
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            padding: 2rem;
            margin-bottom: 2rem;
            border-top: 4px solid var(--accent);
        }

        .card-title {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--gray);
            position: relative;
        }

        .card-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100px;
            height: 2px;
            background: var(--accent);
        }

        /* Process Steps */
        .process-steps {
            counter-reset: step;
            padding-left: 0;
            margin: 0;
        }

        .step {
            position: relative;
            padding: 1.5rem 1.5rem 1.5rem 5rem;
            margin-bottom: 1rem;
            background: var(--light);
            border-left: 4px solid var(--accent);
            border-radius: 4px;
            counter-increment: step;
            transition: all 0.3s ease;
        }

        .step:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .step:before {
            content: counter(step);
            position: absolute;
            left: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            background: var(--accent);
            color: var(--white);
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
        }

        /* Info Boxes */
        .info-box {
            background: var(--light);
            border-left: 4px solid var(--accent);
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 0 4px 4px 0;
        }

        .info-box-title {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        /* Requirements List */
        .requirements {
            margin: 1.5rem 0;
        }

        .requirements ul {
            padding-left: 1.5rem;
        }

        .requirements li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .requirements li:before {
            content: '•';
            color: var(--accent);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--white);
            padding: 2rem;
            border-radius: 8px;
            margin-top: 2rem;
            text-align: center;
        }

        .contact-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .contact-email {
            font-size: 1.1rem;
            background: rgba(255, 255, 255, 0.1);
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            margin-top: 1rem;
        }

        /* Notes Section */
        .notes {
            background: var(--light);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 2rem 0;
        }

        .notes-title {
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .note-item {
            margin-bottom: 0.75rem;
            padding-left: 1.5rem;
            position: relative;
        }

        .note-item:before {
            content: '→';
            color: var(--accent);
            position: absolute;
            left: 0;
        }

        /* Footer */
        .footer {
            background: var(--primary);
            color: var(--white);
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }

            .header-text {
                padding-left: 0;
                margin-top: 1rem;
            }

            .step {
                padding: 1.25rem 1rem 1.25rem 4rem;
            }

            .step:before {
                left: 1rem;
            }
        }
    </style>
<!-- Pastikan sudah include Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<div style="overflow-x: auto; white-space: nowrap; padding: 10px 0;">
  <div style="display: inline-flex; gap: 10px; font-family: 'Poppins', sans-serif;">
    <a href="/infobantek" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-info-circle"></i> Informasi Umum
    </a>
    <a href="/infobanteklampiran" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-gear"></i> Lampiran & Referensi
    </a>
    <a href="/infobantekpetunjuk" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-geo-alt"></i> Petunjuk Umum
    </a>
    <a href="/infobantekasistensi" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-list-ul"></i> Asistensi
    </a>
    <a href="/infobantekpeneliti" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-paperclip"></i> Penliti Kontrak
    </a>
    <a href="/infobantekperhitungan" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-paperclip"></i> Penyusutan Nilai
    </a>
    <a href="/infobantekpemeliharaan" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-paperclip"></i> Pemeliharaan & Konstruksi
    </a>
    <a href="/infobantekpendampingan" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-paperclip"></i> Pendampingan Serah Terima
    </a>
    <a href="/infobantektimteknis" class="button-abgblora" style="padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 8px; text-decoration: none; white-space: nowrap;">
      <i class="bi bi-paperclip"></i> Tim Teknis
    </a>
  </div>
</div>


    <style>
        :root {
            --navy-dark: #001a3a;
            --navy-primary: #002366;
            --navy-light: #1a4b8c;
            --accent-blue: #3d7bb3;
            --accent-light: #5ab1f0;
            --light-bg: #f8fafc;
            --card-bg: #ffffff;
            --text-dark: #2d3748;
            --text-light: #4a5568;
            --success: #38a169;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Header Styles */
        .header {
            background: linear-gradient(135deg, var(--navy-dark), var(--navy-primary));
            color: white;
            padding: 2rem 0;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            opacity: 0.1;
        }

        .header-content {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        .header-text {
            flex: 1;
        }

        .header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header p {
            opacity: 0.9;
            font-weight: 300;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        /* Card Styles */
        .card {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            padding: 2.5rem;
            margin-bottom: 2.5rem;
            border-left: 6px solid var(--accent-blue);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }

        .card-title {
            color: var(--navy-primary);
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
            align-items: center;
        }

        .card-title i {
            margin-right: 12px;
            color: var(--accent-blue);
        }

        .card-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 80px;
            height: 2px;
            background: var(--accent-blue);
        }

        /* Process Steps */
        .process-steps {
            counter-reset: step;
            padding-left: 0;
        }

        .step {
            position: relative;
            padding: 1.75rem 1.5rem 1.75rem 5.5rem;
            margin-bottom: 1rem;
            background: rgba(58, 123, 181, 0.05);
            border-radius: 8px;
            counter-increment: step;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .step:hover {
            background: rgba(58, 123, 181, 0.1);
            border-left-color: var(--accent-blue);
            transform: translateX(8px);
        }

        .step::before {
            content: counter(step);
            position: absolute;
            left: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            background: var(--accent-blue);
            color: white;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            box-shadow: 0 4px 8px rgba(58, 123, 181, 0.3);
        }

        .step strong {
            color: var(--navy-primary);
            font-weight: 600;
        }

        /* Info Boxes */
        .info-box {
            background: rgba(90, 177, 240, 0.08);
            border-radius: 8px;
            padding: 1.75rem;
            margin: 1.75rem 0;
            border-left: 4px solid var(--accent-blue);
            transition: all 0.3s ease;
        }

        .info-box:hover {
            background: rgba(90, 177, 240, 0.15);
        }

        .info-box-title {
            color: var(--navy-primary);
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .info-box-title i {
            margin-right: 10px;
            color: var(--accent-blue);
        }

        /* Requirements List */
        .requirements {
            margin: 1.5rem 0;
        }

        .requirements ul {
            padding-left: 1.5rem;
            list-style-type: none;
        }

        .requirements li {
            margin-bottom: 0.75rem;
            position: relative;
            padding-left: 2rem;
        }

        .requirements li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--success);
        }

        /* Attachments Section */
        .attachments {
            margin: 2.5rem 0;
        }

        .attachments-title {
            color: var(--navy-primary);
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .attachments-title i {
            margin-right: 12px;
            color: var(--accent-blue);
        }

        .attachment-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .attachment-item {
            background: var(--card-bg);
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-left: 4px solid var(--accent-blue);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .attachment-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .attachment-icon {
            width: 48px;
            height: 48px;
            background: rgba(58, 123, 181, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-blue);
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .attachment-text {
            flex: 1;
        }

        .attachment-name {
            font-weight: 500;
            color: var(--navy-primary);
            margin-bottom: 0.25rem;
        }

        .attachment-link {
            color: var(--accent-blue);
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        .attachment-link:hover {
            text-decoration: underline;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, var(--navy-primary), var(--navy-light));
            color: white;
            padding: 2.5rem;
            border-radius: 12px;
            margin: 3rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            opacity: 0.1;
        }

        .contact-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            position: relative;
        }

        .contact-title i {
            margin-right: 10px;
        }

        .contact-email {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            margin-top: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            backdrop-filter: blur(5px);
        }

        .contact-email:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        /* Notes Section */
        .notes {
            background: rgba(90, 177, 240, 0.08);
            padding: 2rem;
            border-radius: 12px;
            margin: 2.5rem 0;
            border-left: 4px solid var(--accent-blue);
        }

        .notes-title {
            color: var(--navy-primary);
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .notes-title i {
            margin-right: 10px;
            color: var(--accent-blue);
        }

        .note-item {
            margin-bottom: 1rem;
            padding-left: 2rem;
            position: relative;
        }

        .note-item::before {
            content: '\f054';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--accent-blue);
            font-size: 0.8rem;
        }

        .note-item strong {
            color: var(--navy-primary);
        }

        /* Footer */
        .footer {
            background: var(--navy-dark);
            color: white;
            padding: 2rem 0;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card, .contact-section, .notes, .attachments {
            animation: fadeIn 0.6s ease forwards;
        }

        .card:nth-child(1) { animation-delay: 0.1s; }
        .card:nth-child(2) { animation-delay: 0.2s; }
        .attachments { animation-delay: 0.3s; }
        .contact-section { animation-delay: 0.4s; }
        .notes { animation-delay: 0.5s; }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .header h1 {
                font-size: 1.6rem;
            }

            .card {
                padding: 1.75rem;
            }

            .step {
                padding: 1.5rem 1rem 1.5rem 4.5rem;
            }

            .step::before {
                left: 1rem;
                width: 2.5rem;
                height: 2.5rem;
            }

            .attachment-list {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="container" style="margin-top: -25px;">
        <!-- Alur Proses -->

<!-- Bungkus dengan div container -->
<div style="max-width: 1200px; margin: 20px auto; padding: 10px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); background-color: #fff; text-align: center;">
    <img src="/assets/00_administrator/04_bantuanteknis/6.jpg" alt="Lampiran" style="width: 100%; height: auto; border-radius: 6px;" />
</div>

<div style="max-width: 1200px; margin: 20px auto; padding: 10px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); background-color: #fff; text-align: center;">
    <img src="/assets/00_administrator/04_bantuanteknis/7.jpg" alt="Lampiran" style="width: 100%; height: auto; border-radius: 6px;" />
</div>


        <!-- Kontak -->
        <div class="contact-section">
            <h3 class="contact-title" style="font-family: 'Poppins', sans-serif; color:white;"><i class="fas fa-headset"></i> Layanan dan Pengaduan</h3>
            <p>Untuk permohonan bantuan, pengaduan, saran, atau masukan terkait pelayanan kami</p>
            <a href="mailto:bid.bangunan.gedung.blora@gmail.com" class="contact-email">
                <i class="fas fa-envelope"></i> bid.bangunan.gedung.blora@gmail.com
            </a>
        </div>


    </div>



            <style>
                .error-message {
        font-size: 0.875rem;
        color: #e3342f; /* Atau kamu bisa sesuaikan dengan warna branding kamu */
        margin-top: 4px;
        display: block;
    }

            </style>


        </div>
    </div>
    </section>
    <br><br>
</section>



  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
