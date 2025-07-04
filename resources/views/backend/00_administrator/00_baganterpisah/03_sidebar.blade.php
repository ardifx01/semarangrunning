<style>
    /* Background sidebar dengan animasi */
    .app-sidebar {
        background:
            linear-gradient(45deg,
                rgba(0, 0, 128, 0.9) 30%,
                rgba(0, 0, 128, 0.7)),
            repeating-linear-gradient(-45deg,
                rgba(255, 209, 0, 0.1) 0px,
                rgba(255, 209, 0, 0.1) 2px,
                transparent 2px,
                transparent 5px),
            url('data:image/svg+xml,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="%23000080"/><path d="M20 20L50 5L80 20V35L50 50L20 35V20Z" fill="%23ffd100" opacity="0.1"/><path d="M20 65L50 50L80 65V80L50 95L20 80V65Z" fill="%23ffd100" opacity="0.1"/></svg>');
        background-size: cover;
        background-position: center;
        position: relative;
        overflow: hidden;
        animation: buildingPan 20s linear infinite;
    }

    /* Animasi background */
    @keyframes buildingPan {
        0% {
            background-position: 0% 0%;
        }
        50% {
            background-position: 100% 100%;
        }
        100% {
            background-position: 0% 0%;
        }
    }

    /* Efek shimmer */
    .app-sidebar::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            45deg,
            transparent 25%,
            rgba(255, 209, 0, 0.1) 50%,
            transparent 75%
        );
        animation: shimmer 5s infinite linear;
    }

    @keyframes shimmer {
        0% {
            transform: translate(-25%, -25%);
        }
        100% {
            transform: translate(25%, 25%);
        }
    }

    /* Border aksen kuning */
    .app-sidebar::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 3px;
        height: 100%;
        background: linear-gradient(
            to bottom,
            transparent,
            #ffd100,
            transparent
        );
        animation: borderGlow 3s ease-in-out infinite;
    }

    @keyframes borderGlow {
        0%, 100% {
            opacity: 0.5;
        }
        50% {
            opacity: 1;
        }
    }

    /* Efek hover menu yang sudah ada sebelumnya */
    .nav-item > .nav-link:hover {
        background-color: #ffd100 !important;
        color: black !important;
        transition: all 0.3s ease-in-out;
        transform: translateX(5px);
    }
</style>

<style>
    /* 3D BUILDING ENHANCED VISIBILITY */
    .floating-building {
        position: absolute;
        transform-style: preserve-3d;
        animation: buildingFloat 18s infinite linear;
        background: rgba(0, 0, 128, 0.6);
        border: 2px solid #ffd100;
        box-shadow: 0 0 30px rgba(255, 209, 0, 0.3);
        perspective: 1000px;
    }

    /* Enhanced Building Details */
    .floating-building::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 15%;
        background: linear-gradient(to bottom,
            transparent,
            rgba(255, 209, 0, 0.4) 60%,
            transparent);
        bottom: 0;
        transform: translateZ(25px);
    }

    .floating-building::after {
        content: '';
        position: absolute;
        width: 90%;
        height: 50%;
        background: linear-gradient(45deg,
            rgba(255, 255, 255, 0.15),
            rgba(255, 209, 0, 0.1));
        left: 5%;
        top: 25%;
        transform: translateZ(15px);
        box-shadow: 0 0 40px rgba(255,209,0,0.3);
    }

    /* Stronger Animation */
    @keyframes buildingFloat {
        0% {
            transform:
                translateZ(-1500px)
                rotateY(20deg)
                rotateX(10deg)
                scale(0.3);
            opacity: 0;
        }
        20% {
            opacity: 1;
            transform:
                translateZ(-800px)
                rotateY(90deg)
                scale(0.8);
        }
        80% {
            opacity: 1;
            transform:
                translateZ(800px)
                rotateY(270deg)
                scale(1.2);
        }
        100% {
            transform:
                translateZ(1500px)
                rotateY(380deg)
                rotateX(-10deg)
                scale(1.5);
            opacity: 0;
        }
    }

    /* Glowing Windows */
    .building-windows {
        width: 20px;
        height: 30px;
        background:
            radial-gradient(circle at center,
                #ffd100 20%,
                transparent 70%);
        box-shadow: 0 0 20px #ffd100;
        animation: windowGlow 2s infinite alternate;
    }

    @keyframes windowGlow {
        from {
            opacity: 0.6;
        }
        to {
            opacity: 1;
        }
    }

    /* Particle Trail Effect */
    .building-particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: #ffd100;
        border-radius: 50%;
        animation: particleFade 1s infinite;
    }

    @keyframes particleFade {
        from {
            opacity: 1;
            transform: translateZ(0);
        }
        to {
            opacity: 0;
            transform: translateZ(50px);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.createElement('div');
        container.className = 'floating-3d-container';

        // Generate buildings with better visibility
        for(let i = 0; i < 6; i++) {
            const building = document.createElement('div');
            building.className = 'floating-building';

            // Larger base size
            const width = Math.random() * 120 + 80;
            const height = Math.random() * 300 + 200;

            building.style.cssText = `
                width: ${width}px;
                height: ${height}px;
                left: ${Math.random() * 100}%;
                filter: brightness(${Math.random() * 0.5 + 0.8});
                animation-delay: ${i * -2}s;
            `;

            // Add glowing windows
            const windowCols = Math.floor(width / 30);
            const windowRows = Math.floor(height / 50);

            for(let r = 0; r < windowRows; r++) {
                for(let c = 0; c < windowCols; c++) {
                    const window = document.createElement('div');
                    window.className = 'building-windows';
                    window.style.cssText = `
                        left: ${(c * 100/windowCols) + 5}%;
                        top: ${(r * 100/windowRows) + 10}%;
                    `;

                    // Add particles
                    if(Math.random() > 0.8) {
                        const particle = document.createElement('div');
                        particle.className = 'building-particle';
                        particle.style.cssText = `
                            left: ${Math.random() * 100}%;
                            top: ${Math.random() * 100}%;
                        `;
                        window.appendChild(particle);
                    }

                    building.appendChild(window);
                }
            }

            container.appendChild(building);
        }

        document.querySelector('.app-sidebar').appendChild(container);
    });
</script>


      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="/assets/abgblora/logo/logokabupatenblora.png"
              alt="Logo Kabupaten Blora"
              class="brand-image opacity-75 shadow"
              style="margin-right:5px;"
            />
            <img
              src="/assets/icon/pupr.png"
              alt="Logo Kabupaten Blora"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">ABG Blora</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
<li class="nav-item">
    <a href="#" class="nav-link" style="display: flex; align-items: center; padding: 0.5rem 1rem;">
        <!-- Icon Dashboard -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16" style="flex-shrink: 0;">
            <path d="M0 0h6v6H0V0zm10 0h6v6h-6V0zM0 10h6v6H0v-6zm10 0h6v6h-6v-6z"/>
        </svg>
        <p style="color: white; margin: 0 0 0 8px; flex-grow: 1;">Dashboard</p>
        <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto; color: white;"></i>
    </a>

    <ul class="nav nav-treeview" style="margin-left: 15px;">
        <!-- Halaman Web -->
        <li class="nav-item">
            <a href="/web" target="_blank" class="nav-link" style="display: flex; align-items: center; padding: 0.5rem 1rem 0.5rem 2rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16" style="flex-shrink: 0;">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4.285 12.433A6.987 6.987 0 0 1 1.528 8.25H4.07c.083 1.658.66 3.162 1.573 4.183l-.358.316zM8 14.5a6.486 6.486 0 0 1-2.22-.383c1.136-1.194 1.852-2.854 1.992-4.617h2.456c-.14 1.763-.856 3.423-1.992 4.617A6.486 6.486 0 0 1 8 14.5zm5.715-2.067A6.987 6.987 0 0 1 14.472 8.25H11.93c-.083 1.658-.66 3.162-1.573 4.183l.358.316zM8 1.5a6.486 6.486 0 0 1 2.22.383c-1.136 1.194-1.852 2.854-1.992 4.617H5.772c.14-1.763.856-3.423 1.992-4.617A6.486 6.486 0 0 1 8 1.5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Halaman Web</p>
            </a>
        </li>

        <!-- Versi Android -->
        <li class="nav-item">
            <a href="/" target="_blank" class="nav-link" style="display: flex; align-items: center; padding: 0.5rem 1rem 0.5rem 2rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16" style="flex-shrink: 0;">
                    <path d="M4.5 0a.5.5 0 0 1 .5.5V2h6V.5a.5.5 0 0 1 1 0V2a1 1 0 0 1 1 1v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V3a1 1 0 0 1 1-1V.5a.5.5 0 0 1 .5-.5zM6 4v9h4V4H6z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Versi Android</p>
            </a>
        </li>

        <!-- Administrator -->
        <li class="nav-item">
            <a href="/dashboard" class="nav-link" style="display: flex; align-items: center; padding: 0.5rem 1rem 0.5rem 2rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16" style="flex-shrink: 0;">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Administrator</p>
            </a>
        </li>
    </ul>
</li>


            @can('pemohonbantek')

            <li class="nav-header" style="color: white;">Dashboard Pemohon Bantek</li>
  <li class="nav-item has-treeview">
    <a href="/dashboard" class="nav-link">
        <!-- Icon Dokumen Checklist (Status Berkas) -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M10.854 6.146a.5.5 0 0 1 0 .708L7.707 10l-1.854-1.854a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 5h-3a1 1 0 0 1-1-1V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5z"/>
        </svg>
        <p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between; width: 100%;">
            Data Permohonan
            <i class="bi bi-chevron-right nav-arrow"></i>
        </p>
    </a>
    </li>
           <li class="nav-item has-treeview">

    <a href="#" class="nav-link">
        <!-- Icon Dokumen Checklist (Status Berkas) -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M10.854 6.146a.5.5 0 0 1 0 .708L7.707 10l-1.854-1.854a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 5h-3a1 1 0 0 1-1-1V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5z"/>
        </svg>
        <p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between; width: 100%;">
            Status Berkas
            <i class="bi bi-chevron-right nav-arrow"></i>
        </p>
    </a>

    <ul class="nav nav-treeview" style="margin-left: 15px;">
        <!-- Submenu: Asistensi -->
        <li class="nav-item">
            <a href="/bebantekpemohonasistensi" class="nav-link">
                <!-- Icon Clipboard (Asistensi) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M10 1.5v1h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h3v-1A1.5 1.5 0 0 1 7.5 0h1A1.5 1.5 0 0 1 10 1.5zM6 1.5V3h4V1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Asistensi</p>
            </a>
        </li>


        <!-- Submenu: Permohonan -->
        <li class="nav-item">
            <a href="/bebantekpemohondinas" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Permohonan</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a href="/404" class="nav-link">
        <!-- Icon User -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3z"/>
            <path fill-rule="evenodd" d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <p style="color: white; margin-left: 8px;">
            Profil Anda
            <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
        </p>
    </a>
</li>


            @endcan

            @can('dinas')

            <li class="nav-header" style="color: white;">Dashboard Dinas</li>


           <li class="nav-item has-treeview">
    <a href="/datapermohonandinas" class="nav-link">
        <!-- Icon Dokumen Checklist (Status Berkas) -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M10.854 6.146a.5.5 0 0 1 0 .708L7.707 10l-1.854-1.854a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 5h-3a1 1 0 0 1-1-1V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5z"/>
        </svg>
        <p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between; width: 100%;">
            Jumlah Berkas
            <i class="bi bi-chevron-right nav-arrow"></i>
        </p>
    </a>
    </li>
           <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <!-- Icon Dokumen Checklist (Status Berkas) -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M10.854 6.146a.5.5 0 0 1 0 .708L7.707 10l-1.854-1.854a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 5h-3a1 1 0 0 1-1-1V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5z"/>
        </svg>
        <p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between; width: 100%;">
            Status Berkas
            <i class="bi bi-chevron-right nav-arrow"></i>
        </p>
    </a>

    <ul class="nav nav-treeview" style="margin-left: 15px;">
        <!-- Submenu: Asistensi -->
        <li class="nav-item">
            <a href="/bebantekdinasasistensi" class="nav-link">
                <!-- Icon Clipboard (Asistensi) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M10 1.5v1h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h3v-1A1.5 1.5 0 0 1 7.5 0h1A1.5 1.5 0 0 1 10 1.5zM6 1.5V3h4V1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Asistensi</p>
            </a>
        </li>

        <!-- Submenu: Permohonan -->
        <li class="nav-item">
            <a href="/bebantekakundinasberkas" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Peneliti Kontrak</p>
            </a>
        </li>
        <!-- Submenu: Permohonan -->
        <li class="nav-item">
            <a href="/bebantekdinaspenyusutan" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Penyusutan</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/bebantekdinaskerusakan" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Kerusakan</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/bebantekdinaspemeliharaan" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Pemeliharaan</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/bebantekdinasperhibgn" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Konstruksi BGN</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/bebantekdinasserahterima" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Serah Terima </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="/bebantekdinaspersonil" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Personil Teknis </p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a href="/404" class="nav-link">
        <!-- Icon User -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3z"/>
            <path fill-rule="evenodd" d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <p style="color: white; margin-left: 8px;">
            Profil Dinas Anda
            <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
        </p>
    </a>
</li>


            @endcan
            @can('konsultanbantek')

            <li class="nav-header" style="color: white;">Dashboard Konsultan Asistensi</li>


           <li class="nav-item has-treeview">
    <a href="/dashboard" class="nav-link">
        <!-- Icon Dokumen Checklist (Status Berkas) -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M10.854 6.146a.5.5 0 0 1 0 .708L7.707 10l-1.854-1.854a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 5h-3a1 1 0 0 1-1-1V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5z"/>
        </svg>
        <p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between; width: 100%;">
            Permohonan
            <i class="bi bi-chevron-right nav-arrow"></i>
        </p>
    </a>
    </li>
           <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <!-- Icon Dokumen Checklist (Status Berkas) -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M10.854 6.146a.5.5 0 0 1 0 .708L7.707 10l-1.854-1.854a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 5h-3a1 1 0 0 1-1-1V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5z"/>
        </svg>
        <p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between; width: 100%;">
            Status Berkas
            <i class="bi bi-chevron-right nav-arrow"></i>
        </p>
    </a>

    <ul class="nav nav-treeview" style="margin-left: 15px;">
        <!-- Submenu: Asistensi -->
        {{-- <li class="nav-item">
            <a href="/bebantekdaftarkonsultan" class="nav-link">
                <!-- Icon Clipboard (Asistensi) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M10 1.5v1h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h3v-1A1.5 1.5 0 0 1 7.5 0h1A1.5 1.5 0 0 1 10 1.5zM6 1.5V3h4V1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Daftar Asistensi</p>
            </a>
        </li> --}}

        <li class="nav-item">
            <a href="/beakunkonsultanasistensi" class="nav-link">
                <!-- Icon Clipboard (Asistensi) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M10 1.5v1h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h3v-1A1.5 1.5 0 0 1 7.5 0h1A1.5 1.5 0 0 1 10 1.5zM6 1.5V3h4V1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Kegiatan Asistensi</p>
            </a>
        </li>

        <!-- Submenu: Permohonan -->
        <li class="nav-item">
            <a href="/404" class="nav-link">
                <!-- Icon File EarMark (Permohonan) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6.5L14 4.5zM9.5 0v4a1 1 0 0 0 1 1h4l-5-5z"/>
                </svg>
                <p style="color: white; margin-left: 8px;">Berkas Lainya</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a href="/404" class="nav-link">
        <!-- Icon User -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="nav-icon" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3z"/>
            <path fill-rule="evenodd" d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <p style="color: white; margin-left: 8px;">
            Profil Anda
            <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
        </p>
    </a>
</li>


            @endcan

            @can('pemohon')

            <li class="nav-header" style="color: white;">Dashboard Pemohon</li>

            <li class="nav-item">

                <a href="#" class="nav-link">
    <!-- Ganti icon dengan Bootstrap Icons dan beri warna putih -->
    <i class="bi bi-building nav-icon" style="color: white; font-size: 16px;"></i>

    <p style="color: white; margin-left: 8px; display: flex; align-items: center;">
        Berkas Pemohon
        <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto; color: white;"></i>
    </p>
</a>

                <ul class="nav nav-treeview" style="margin-left: 15px;">

    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-image nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Bantuan Gambar</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-geo-alt nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">PBG/SLF</p>
        </a>
    </li>
    {{-- <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-journal-text nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Bantuan Teknis</p>
        </a>
    </li> --}}
    <li class="nav-item">
        <a href="/pemohonkrk" class="nav-link">
            <i class="bi bi-card-list nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">KRK</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-house nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">MBR</p>
        </a>
    </li>

</ul>

            </li>


              <li class="nav-item">
<a href="/404" class="nav-link" style="display: flex; align-items: center;">
    <!-- Ganti icon SVG dengan Bootstrap Icon -->
    <i class="bi bi-person-circle nav-icon" style="color: white; font-size: 16px;"></i>

    <p style="color: white; margin-left: 8px; display: flex; align-items: center; width: 100%;">
        Profil Anda
        <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto; color: white;"></i>
    </p>
</a>

</li>

@endcan


{{-- ============================================================================= --}}

@can('akunskrd')

<li class="nav-header" style="color: white;">MAIN MENU</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <!-- Ganti SVG dengan Bootstrap Icon -->
        <i class="bi bi-building nav-icon" style="color: white; font-size: 16px;"></i>

        <p style="color: white; margin-left: 8px;">
            PBG/SLF
            <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="margin-left: 15px;">
        <div style="margin-bottom: 10px; margin-top: 10px;">
            <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>
{{--
<li class="nav-item">
    <a href="/bepbgslfindex" class="nav-link">
        <i class="bi bi-card-list nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Permohonan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bepbgslfkonsultasi" class="nav-link">
        <i class="bi bi-chat-dots nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Konsultasi Teknis</p>
    </a>
</li> --}}

<li class="nav-item">
    <a href="/bepbgslfskrd" class="nav-link">
        <i class="bi bi-receipt nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">SKRD</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bepbgslfretribusi" class="nav-link">
        <i class="bi bi-cash-coin nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Retribusi</p>
    </a>
</li>

</ul>


</li>
@endcan

{{-- ============================================================================= --}}

@can('superadmin')
<li class="nav-header" style="color: white;">MAIN MENU</li>
<li class="nav-item">

              <a href="#" class="nav-link">
    <!-- Ganti SVG dengan Bootstrap Icon -->
    <i class="bi bi-building nav-icon" style="color: white; font-size: 16px;"></i>

    <p style="color: white; margin-left: 8px;">
        PBG/SLF
        <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
    </p>
</a>
<ul class="nav nav-treeview" style="margin-left: 15px;">
<div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

    <li class="nav-item">
        <a href="/bepbgslfindex" class="nav-link">
            <i class="bi bi-card-list nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Permohonan</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/bepbgslfkonsultasi" class="nav-link">
            <i class="bi bi-chat-dots nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Konsultasi Teknis</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/bepbgslfskrd" class="nav-link">
            <i class="bi bi-receipt nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">SKRD</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/bepbgslfretribusi" class="nav-link">
            <i class="bi bi-cash-coin nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Retribusi</p>
        </a>
    </li>

<div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan Data
    </p>
</div>
<li class="nav-item">
    <a href="/betpatpt" class="nav-link">
        <i class="bi bi-diagram-3 nav-icon" style="color: white;"></i> <!-- cocok untuk TPA/TPT -->
        <p style="color: white; margin-left: 8px;">TPA/TPT</p>
    </a>
</li>

<li class="nav-item">
    <a href="/betempatkonsultasi" class="nav-link">
        <i class="bi bi-person-lines-fill nav-icon" style="color: white;"></i> <!-- cocok untuk Tempat Konsultasi -->
        <p style="color: white; margin-left: 8px;">Tempat Konsultasi</p>
    </a>
</li>


</ul>


            </li>

            <!-- Tracking PBG -->
            <li class="nav-item">
             <a href="#" class="nav-link">
    <i class="bi bi-search nav-icon" style="color: white;"></i>
    <p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between; width: 100%;">
        Tracking Berkas
        <i class="nav-arrow bi bi-chevron-right" style="color: white;"></i>
    </p>
</a>

                <ul class="nav nav-treeview" style="margin-left: 15px;">
                     <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-geo-alt nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">PBG/SLF</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-journal-text nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Bantuan Teknis</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/pemohonkrk" class="nav-link">
            <i class="bi bi-card-list nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">KRK</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-house nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">MBR</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-image nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Bantuan Gambar</p>
        </a>
    </li>
                </ul>
            </li>

            <!-- Pendataan -->
            <li class="nav-item">
                <a href="#" class="nav-link">
    <i class="bi bi-folder nav-icon" style="color: white; font-size: 16px;"></i>
    <p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between; width: 100%;">
        Pendataan
        <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
    </p>
</a>

                <ul class="nav nav-treeview" style="margin-left: 15px;">
    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-info-circle nav-icon" style="color: white; font-size: 16px;"></i>
            <p style="color: white; margin-left: 8px;">Informasi</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-building nav-icon" style="color: white; font-size: 16px;"></i>
            <p style="color: white; margin-left: 8px;">Pendataan</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-columns-gap nav-icon" style="color: white; font-size: 16px;"></i>
            <p style="color: white; margin-left: 8px;">Kartu Identitas</p>
        </a>
    </li>
</ul>

            </li>

            <!-- Bantek -->
            <li class="nav-item">
             <a href="#" class="nav-link">
    <i class="bi bi-tools nav-icon" style="color: white; font-size: 16px;"></i>
    <p style="color: white; margin-left: 8px;">
        Bantek
        <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
    </p>
</a>


<ul class="nav nav-treeview" style="margin-left: 15px;">
    {{-- <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-info-circle nav-icon" style="color: white; font-size: 16px;"></i>
            <p style="color: white; margin-left: 8px;">Informasi</p>
        </a>
    </li> --}}

    <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

<li class="nav-item">
    <a href="/bebantuanteknisindex" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-file-earmark-text nav-icon" style="color: white; font-size: 16px;"></i>
        <p style="color: white; margin-left: 8px; font-size: 16px; margin-bottom: 0;">Permohonan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bebantekkonsultan" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-person-workspace nav-icon" style="color: white; font-size: 16px;"></i>
        <p style="color: white; margin-left: 8px; font-size: 16px; margin-bottom: 0;">Konsultan</p>
    </a>
</li>

    <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: 5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan Data
    </p>

<li class="nav-item">
    <a href="/allakundinas" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-building-gear nav-icon" style="color: white; font-size: 16px;"></i>
        <p style="color: white; margin-left: 8px; font-size: 16px; margin-bottom: 0;">Akun Dinas</p>
    </a>
</li>

<li class="nav-item">
    <a href="/allakunkonsultan" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-person-badge nav-icon" style="color: white; font-size: 16px;"></i>
        <p style="color: white; margin-left: 8px; font-size: 16px; margin-bottom: 0;">Akun Konsultan</p>
    </a>
</li>

</div>
</ul>


            </li>

            {{-- =====================================  --}}
         <!-- Sosialisasi -->
<!-- Sosialisasi -->
<li class="nav-item">
   <a href="#" class="nav-link" style="display: flex; align-items: center;">
    <i class="bi bi-megaphone nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
    <p style="color: white; margin: 0 0 0 8px; flex-grow: 1;">Sosialisasi</p>
    <i class="nav-arrow bi bi-chevron-right" style="color: white; margin-left: auto;"></i>
</a>


<ul class="nav nav-treeview" style="margin-left: 15px;">
   <li class="nav-item">
      <a href="/404" class="nav-link" style="display: flex; align-items: center;">
          <i class="bi bi-calendar-event nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
          <p style="color: white; margin: 0 0 0 8px;">Agenda</p>
      </a>
   </li>
   <li class="nav-item">
      <a href="/404" class="nav-link" style="display: flex; align-items: center;">
          <i class="bi bi-people nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
          <p style="color: white; margin: 0 0 0 8px;">Peserta</p>
      </a>
   </li>
</ul>

</li>

<!-- KRK -->
<li class="nav-item">
    <a href="#" class="nav-link" style="display: flex; align-items: center;">
    <i class="bi bi-journal-text nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
    <p style="color: white; margin: 0 0 0 8px; flex-grow: 1;">KRK</p>
    <i class="nav-arrow bi bi-chevron-right" style="color: white; margin-left: auto;"></i>
</a>

<ul class="nav nav-treeview" style="margin-left: 15px;">
    <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

    {{-- <li class="nav-item">
        <a href="/404" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-info-circle nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Informasi KRK</p>
        </a>
    </li> --}}
    <li class="nav-item">
        <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Berkas Pemohon</p>
        </a>
    </li>

    <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: 5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan
    </p>

    <li class="nav-item">
        <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Kecamatan</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Kelurahan Desa</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">GSB Kab Blora</p>
        </a>
    </li>

</div>

</ul>

</li>

<!-- Penilik Bangunan Gedung -->
<li class="nav-item">
    <a href="#" class="nav-link" style="display: flex; align-items: center;">
    <i class="bi bi-person-circle nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
    <p style="color: white; margin: 0 0 0 8px; flex-grow: 1;">Penilik</p>
    <i class="nav-arrow bi bi-chevron-right" style="color: white; margin-left: auto;"></i>
</a>

    <ul class="nav nav-treeview" style="margin-left: 15px;">
    {{-- <li class="nav-item">
        <a href="/404" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-person-badge nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Informasi Umum</p>
        </a>
    </li> --}}
    <li class="nav-item">
        <a href="/404" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Jumlah Inspeksi</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/datanewpenilik" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Buat Inspeksi</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/dataallpenilikbg" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Data Inspeksi</p>
        </a>
    </li>
</ul>

</li>
<!-- MBG Gambar -->
<li class="nav-item">
    <a href="#" class="nav-link" style="display: flex; align-items: center; padding: 0.5rem 1rem;">
    <i class="bi bi-file-text nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
    <p style="color: white; margin: 0 0 0 8px; flex-grow: 1;">MBR Gambar</p>
    <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto; color: white;"></i>
</a>


    <ul class="nav nav-treeview" style="margin-left: 15px;">
    <li class="nav-item">
        <a href="/404" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-person-badge nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Informasi MBR</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/404" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Berkas Pemohon</p>
        </a>
    </li>
</ul>
</li>

<!-- Bantuan Gambar -->
<li class="nav-item">
  <a href="#" class="nav-link" style="display: flex; align-items: center; padding: 0.5rem 1rem;">
    <i class="bi bi-info-circle nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
    <p style="color: white; margin: 0 0 0 8px; flex-grow: 1;">Bantuan Gambar</p>
    <i class="nav-arrow bi bi-chevron-right" style="color: white; margin-left: auto;"></i>
</a>
    <ul class="nav nav-treeview" style="margin-left: 15px;">


<div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>
    {{-- <li class="nav-item">
        <a href="/404" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-person-badge nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Informasi </p>
        </a>
    </li> --}}
    <li class="nav-item">
        <a href="/bebantuangambar" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Berkas Pemohon</p>
        </a>
    </li>

<div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #ffffff;
        background-color: #0d6efd;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan Data
    </p>
</div>


    <li class="nav-item">
    <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-geo-fill nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Kecamatan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-house-door-fill nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Kelurahan Desa</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-ui-checks-grid nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Jenis Permohonan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-building nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Fungsi Bangunan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-building nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Fasilitator</p>
    </a>
</li>

</ul>


</li>

<!-- Hibah Bangunan -->
<li class="nav-item">
  <a href="#" class="nav-link" style="display: flex; align-items: center; padding: 0.5rem 1rem;">
    <i class="bi bi-building nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
    <p style="color: white; margin: 0 0 0 8px; flex-grow: 1;">Hibah Bangunan</p>
    <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto; color: white;"></i>
</a>

  <ul class="nav nav-treeview" style="margin-left: 15px;">
    {{-- <li class="nav-item">
        <a href="/404" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-person-badge nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Informasi </p>
        </a>
    </li> --}}
    <li class="nav-item">
    <a href="/bestatistikhibah" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-bar-chart-line nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Statistik Pemohon</p>
    </a>
</li>
<li class="nav-item">
    <a href="/datanewhibah" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-plus-square nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Buat Pengajuan</p>
    </a>
</li>
<li class="nav-item">
    <a href="/dataallhibahbangunan" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Data Pengajuan</p>
    </a>
</li>

</ul>
<li class="nav-item">
  <a href="#" class="nav-link" style="display: flex; align-items: center; padding: 0.5rem 1rem;">
    <i class="bi bi-building nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
    <p style="color: white; margin: 0 0 0 8px; flex-grow: 1;">SPPD</p>
    <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto; color: white;"></i>
</a>

  <ul class="nav nav-treeview" style="margin-left: 15px;">
    {{-- <li class="nav-item">
        <a href="/404" class="nav-link" style="display: flex; align-items: center;">
            <i class="bi bi-person-badge nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
            <p style="color: white; margin: 0 0 0 8px;">Informasi </p>
        </a>
    </li> --}}
    <li class="nav-item">
    <a href="/bestatistikhibah" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-bar-chart-line nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Menu 1</p>
    </a>
</li>
<li class="nav-item">
    <a href="/datanewhibah" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-plus-square nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Menu 2</p>
    </a>
</li>
{{--
<li class="nav-item">
    <a href="/dataallhibahbangunan" class="nav-link" style="display: flex; align-items: center;">
        <i class="bi bi-folder2-open nav-icon" style="color: white; font-size: 16px; flex-shrink: 0;"></i>
        <p style="color: white; margin: 0 0 0 8px;">Data Pengajuan</p>
    </a>
</li> --}}

</ul>
</li>

    <li class="nav-header" style="color: white;">Pengaturan Data </li>
            <li class="nav-item">

              <a href="#" class="nav-link">
    <!-- Ganti SVG dengan Bootstrap Icon -->
    <i class="bi bi-building nav-icon" style="color: white; font-size: 16px;"></i>

    <p style="color: white; margin-left: 8px;">
        Berita
        <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
    </p>
</a>

                <ul class="nav nav-treeview" style="margin-left: 15px;">

    <li class="nav-item">
        <a href="/404" class="nav-link">
            <i class="bi bi-info-circle nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Berita</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/bekrkindex" class="nav-link">
            <i class="bi bi-card-list nav-icon" style="color: white;"></i>
            <p style="color: white; margin-left: 8px;">Artikel</p>
        </a>
    </li>

</ul>

            </li>

            <li class="nav-item">

              <a href="#" class="nav-link">
    <!-- Ganti SVG dengan Bootstrap Icon -->
    <i class="bi bi-building nav-icon" style="color: white; font-size: 16px;"></i>

<p style="color: white; margin-left: 8px; display: flex; align-items: center; justify-content: space-between;">
    Daftar Akun
    <i class="bi bi-chevron-right" style="margin-left: auto;"></i>
</p>
</a>

                <ul class="nav nav-treeview" style="margin-left: 15px;">

<li class="nav-item">
    <a href="/allakun" class="nav-link">
        <i class="bi bi-person-badge-fill nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">All Akun</p>
    </a>
</li>

<li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="bi bi-person-badge-fill nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Super Admin</p>
    </a>
</li>

<li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="bi bi-person-check-fill nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Admin</p>
    </a>
</li>

<li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="bi bi-person-lines-fill nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Pemohon</p>
    </a>
</li>

<li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="bi bi-building nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Dinas</p>
    </a>
</li>

<li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="bi bi-gear-fill nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Konsultan Bantek</p>
    </a>
</li>

<li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="bi bi-person-workspace nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Konsultan Abg</p>
    </a>
</li>


</ul>

            </li>

            <li class="nav-item">

              <a href="#" class="nav-link">
    <!-- Ganti SVG dengan Bootstrap Icon -->
    <i class="bi bi-building nav-icon" style="color: white; font-size: 16px;"></i>

    <p style="color: white; margin-left: 8px;">
        Data ABG Blora
        <i class="nav-arrow bi bi-chevron-right" style="margin-left: auto;"></i>
    </p>
</a>

                <ul class="nav nav-treeview" style="margin-left: 15px;">
<li class="nav-item">
    <a href="/datagsbblora" class="nav-link">
        <i class="bi bi-bounding-box nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">GSB Jalan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/datakecblora" class="nav-link">
        <i class="bi bi-geo-alt nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Kecamatan Blora</p>
    </a>
</li>

<li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="bi bi-info-circle nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">PBG/SLF</p>
    </a>
</li>

<li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="bi bi-clipboard-data nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Pendataan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link">
        <i class="bi bi-people nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Bantek</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link">
        <i class="bi bi-megaphone nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Sosialisasi</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link">
        <i class="bi bi-file-earmark-text nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">KRK</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link">
        <i class="bi bi-person-check nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Penilik</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link">
        <i class="bi bi-house-heart nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">MBR</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link">
        <i class="bi bi-brush nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Bantuan Gambar</p>
    </a>
</li>

<li class="nav-item">
    <a href="/bekrkindex" class="nav-link">
        <i class="bi bi-gift nav-icon" style="color: white;"></i>
        <p style="color: white; margin-left: 8px;">Hibah Bangunan</p>
    </a>
</li>


</ul>

            </li>


@endcan
            {{-- ---------------------------------------------  --}}

            <li class="nav-header" style="color: white;">LOGOUT</li>

            <li class="nav-item">
                {{-- <li class="nav-item"> --}}
                    <li class="nav-item">
                        <form action="/logout" method="POST" style="display: inline;">
                            @csrf  <!-- This is for CSRF protection -->
                            <button type="submit" class="nav-link" style="background: none; border: none; color: red;">
                                <!-- Ikon untuk Logout -->
                                <i class="nav-icon bi bi-box-arrow-right text-danger"></i> <!-- Ikon untuk Logout -->
                                <p style="color: red">Logout</p>
                            </button>
                        </form>
                    </li>

                  {{-- </li> --}}
                  </li>

            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->

      <script>
        // Toggle sub-menu saat item Dashboard diklik
        $(".nav-item > a").click(function (e) {
          // Pastikan kita hanya menampilkan sub-menu yang terkait dengan item yang diklik
          var $this = $(this).next(".nav-treeview");

          // Cek apakah sub-menu sudah terbuka
          if ($this.is(":visible")) {
            $this.slideUp(); // Tutup jika terbuka
          } else {
            $(".nav-treeview").slideUp(); // Tutup semua sub-menu lainnya
            $this.slideDown(); // Buka sub-menu yang diklik
          }
        });
      </script>
