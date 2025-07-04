<style>
 body {
        font-family: 'Poppins', sans-serif;
    }
    .zebra-table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    border: 1px solid #e5e7eb;
}

.zebra-table th {
    background-color: #ADD8E6; /* biru muda */
    color: black;
    text-align: center;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    white-space: nowrap;
}

.zebra-table td {
    text-align: center;
    padding: 8px 12px;
    border: 1px solid #e5e7eb;
    white-space: nowrap;
}

.zebra-table tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

.zebra-table tbody tr:nth-child(even) {
    background-color: #f1f1f1;
}

.zebra-table tbody tr:hover {
    background-color: #ffd100 !important;
}

th {
    background-color: #ADD8E6;
}

</style>

@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <!--begin::App Wrapper-->
 <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_administrator.00_baganterpisah.09_button')
{{-- ---------------------------------------------------------------------- --}}

   @include('backend.00_administrator.00_baganterpisah.03_sidebar')
   @include('frontend.android.00_fiturmenu.06_alert')


   <!--begin::App Main-->
   <main class="app-main"
      style="
    background: linear-gradient(to bottom, #7de3f1, #ffffff);
    margin: 0;
    padding: 0;
    position: relative;
    left: 0;
  "
>
     <!--begin::App Content Header-->
     <div class="app-content-header">
       <!--begin::Container-->
       <div class="container-fluid">
         <!--begin::Row-->
         <div class="row">

                                @include('backend.00_administrator.00_baganterpisah.10_selamatdatang')

           {{-- <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div> --}}

         </div>
         <!--end::Row-->
       </div>
       <!--end::Container-->
     </div>

     <!-- Menampilkan pesan sukses -->
<br>
     {{-- ======================================================= --}}
     {{-- ALERT --}}

     {{-- @include('backend.00_administrator.00_baganterpisah.06_alert') --}}

     {{-- ======================================================= --}}

     <div class="container-fluid">
         <!--begin::Row-->
         <div class="button-belakang row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
  {{-- @include('backend.00_administrator.00_baganterpisah.10_selamatdatang') --}}

</div>
<!-- /.card-header -->
<div class="card-header">

    @include('backend.00_administrator.00_baganterpisah.11_judulhalaman')
                     </div>

         @canany(['superadmin', 'admin'])
    <div style="display: flex; justify-content: flex-end; margin-bottom:5px;">
        <button class="button-validasinew"
                type="button"
                onclick="location.href='{{ route('dataallpenilikbg.index') }}';"
                style="cursor: pointer; color:black;">
            <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
        </button>
    </div>
@endcanany

<br>
<br>
      <hr>
                 <!-- /.card-header -->

                         <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">


{{-- @canany(['super_admin', 'admin', 'lsppenerbit'])

<form action="{{ route('peserta.downloadSemua', $data->id) }}" method="POST">
    @csrf
<button type="submit"
    onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'"
    onmouseout="this.style.background='linear-gradient(135deg, #d4af37, #4CAF50)'; this.style.color='white'; this.style.transform='scale(1)'"
    style="
        background: linear-gradient(135deg, #d4af37, #4CAF50);
        color: white;
        border: none;
        margin-right: 10px;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    "
>
    <!-- Ikon Download -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16">
        <path d="M.5 9.9v2.6c0 .6.5 1 1 1h13c.6 0 1-.4 1-1V9.9c0-.5-.4-1-1-1s-1 .5-1 1v1.6H2.5V9.9c0-.5-.5-1-1-1s-1 .5-1 1z"/>
        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3.182-3.182a.5.5 0 1 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.172 7.964a.5.5 0 1 0-.708.708l3.182 3.182z"/>
    </svg>
    Download Berkas .zip/.rar Peserta
</button>


</form>

@endcanany --}}


@can('pemohon')

           <a href="/bekrkusahapemohon">
    <button
  style="
    background: linear-gradient(45deg, #6c757d, #adb5bd);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-right:10px;
  "
  onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'"
  onmouseout="this.style.background='linear-gradient(45deg, #6c757d, #adb5bd)'; this.style.color='white'; this.style.transform='scale(1)'"
>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
    viewBox="0 0 16 16">
    <path fill-rule="evenodd"
      d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
  </svg>
  Kembali
</button>

</a>


@endcan

@can('lsppenerbit')
   <button
    onclick="history.back();"
    onmouseover="this.style.background = 'white'; this.style.color = 'black';"
    onmouseout="this.style.background = 'linear-gradient(to right, black, white)'; this.style.color = 'white';"
    style="background: linear-gradient(to right, black, white); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16" style="margin-right: 8px;">
        <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
    </svg>
    Kembali
</button>

@endcan



                 </div>

                    </div>


                    <div class="container" style="margin-top: 25px;">
                        <h6 style="text-align:center;">Status Verifikasi Berkas Anda !</h6>
                        <div id="checkpoint-container" class="timeline-container"></div>

                        <div class="control-panel">
                             <button id="simulate-btn" style="display: none;"></button>

                            <div style="text-align: center;" class="status-info" id="current-status"></div>
                        </div>
                    </div>
<script>
    // Data checkpoint - akan diupdate berdasarkan data PHP
    const checkpointData = [
        {
            id: 1,
            name: 'Data Inspeksi Masuk',
            status: 'completed',
            time: '<?php echo isset($data->created_at) ? $data->created_at : date("Y-m-d H:i:s") ?>',
            message: ''
        },
        {
            id: 2,
            name: 'Surat Tugas Fasilitator',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas1_time) ? $data->validasiberkas1_time : "" ?>',
            message: 'Menunggu Surat Tugas'
        },
        {
            id: 3,
            name: 'Dokumentasi Lapangan',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas2_time) ? $data->validasiberkas2_time : "" ?>',
            message: 'Menunggu Dokumentasi '
        },
        {
            id: 4,
            name: 'Upload Hasil Inspeksi',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas3_time) ? $data->validasiberkas3_time : "" ?>',
            message: 'Olah Data'
        },
        {
            id: 5,
            name: 'Status',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas4_time) ? $data->validasiberkas4_time : "" ?>',
            message: 'Menunggu Olah Data'
        }
    ];

    // Fungsi untuk mengupdate status berdasarkan data PHP
    function updateCheckpointStatus() {
        // Step 1 otomatis completed (hijau)
        checkpointData[0].status = 'completed';
        checkpointData[0].message = '';

        // Step 2: Verifikasi Berkas berdasarkan validasiberkas1
        if ('<?php echo isset($data->verifikasi1) ? $data->verifikasi1 : "" ?>' === 'sudah') {
            checkpointData[1].status = 'completed';
            checkpointData[1].message = 'Surat Tugas Terbit';
        } else if ('<?php echo isset($data->verifikasi1) ? $data->verifikasi1 : "" ?>' === 'belum') {
            checkpointData[1].status = 'rejected';
            checkpointData[1].message = 'Fasilitator Tidak Ada';
        }

        // Step 3: Cek Lapangan berdasarkan validasiberkas2
        if ('<?php echo isset($data->verifikasi2) ? $data->verifikasi2 : "" ?>' === 'sudah') {
            checkpointData[2].status = 'completed';
            checkpointData[2].message = 'Sudah Cek Lapangan';
        } else if ('<?php echo isset($data->verifikasi2) ? $data->verifikasi2 : "" ?>' === 'belum') {
            checkpointData[2].status = 'rejected';
            checkpointData[2].message = 'Dok Lapangan Tidak Ada !';
        }

        // Step 4: Verifikasi Data berdasarkan validasiberkas3
        if ('<?php echo isset($data->verifikasi3) ? $data->verifikasi3 : "" ?>' === 'sudah') {
            checkpointData[3].status = 'completed';
            checkpointData[3].message = 'Olah Data';
        } else if ('<?php echo isset($data->verifikasi3) ? $data->verifikasi3 : "" ?>' === 'belum') {
            checkpointData[3].status = 'rejected';
            checkpointData[3].message = 'Gagal !';
        }

        // Step 5: Penerbitan Berkas berdasarkan validasiberkas4
        if ('<?php echo isset($data->verifikasi4) ? $data->verifikasi4 : "" ?>' === 'sudah') {
            checkpointData[4].status = 'completed';
            checkpointData[4].message = 'Selesai';
        } else if ('<?php echo isset($data->verifikasi4) ? $data->verifikasi4 : "" ?>' === 'belum') {
            checkpointData[4].status = 'rejected';
            checkpointData[4].message = 'Inspeksi di batalkan !';
        }
    }

    // Render checkpoint
    function renderCheckpoints() {
        const container = document.getElementById('checkpoint-container');
        container.innerHTML = '';

        const timeline = document.createElement('div');
        timeline.className = 'timeline-horizontal';

        checkpointData.forEach((checkpoint, index) => {
            const checkpointWrapper = document.createElement('div');
            checkpointWrapper.className = 'checkpoint-wrapper';

            // Dot and connector container
            const dotConnectorContainer = document.createElement('div');
            dotConnectorContainer.className = 'dot-connector-container';

            // Dot indicator
            const dot = document.createElement('div');
            dot.className = `dot ${checkpoint.status}`;
            dot.textContent = checkpoint.id;
            dotConnectorContainer.appendChild(dot);

            // Connector line (except for last item)
            if (index < checkpointData.length - 1) {
                const connector = document.createElement('div');
                connector.className = `connector ${checkpoint.status === 'completed' ? 'active' : ''}`;
                dotConnectorContainer.appendChild(connector);
            }

            // Content container
            const content = document.createElement('div');
            content.className = 'checkpoint-content';

            const name = document.createElement('div');
            name.className = 'checkpoint-name';
            name.textContent = checkpoint.name;
            content.appendChild(name);

            // Add status message
            const message = document.createElement('div');
            message.className = 'message';
            message.textContent = checkpoint.message;
            content.appendChild(message);

            // Format time if available
            if (checkpoint.time && checkpoint.time.trim() !== '' && checkpoint.time !== '0000-00-00 00:00:00') {
                const formattedTime = formatTime(checkpoint.time);
                if (formattedTime) {
                    const time = document.createElement('div');
                    time.className = 'time';

                    if (checkpoint.status === 'completed') {
                        time.textContent = `Selesai: ${formattedTime}`;
                    } else if (checkpoint.status === 'rejected') {
                        time.textContent = `Dikembalikan: ${formattedTime}`;
                    } else {
                        time.textContent = `Terakhir diperbarui: ${formattedTime}`;
                    }

                    content.appendChild(time);
                }
            }

            checkpointWrapper.appendChild(dotConnectorContainer);
            checkpointWrapper.appendChild(content);
            timeline.appendChild(checkpointWrapper);
        });

        container.appendChild(timeline);
        updateCurrentStatus();
    }

    // Format waktu dengan validasi yang lebih robust
    function formatTime(dateString) {
        try {
            if (!dateString || dateString.trim() === '' || dateString === '0000-00-00 00:00:00') {
                return null;
            }

            // Coba parse sebagai Date object
            const date = new Date(dateString);

            // Jika hasilnya invalid date
            if (isNaN(date.getTime())) {
                // Coba format MySQL (YYYY-MM-DD HH:MM:SS)
                const mysqlPattern = /^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/;
                const match = dateString.match(mysqlPattern);

                if (match) {
                    const [_, year, month, day, hours, minutes, seconds] = match;
                    const newDate = new Date(year, month - 1, day, hours, minutes, seconds);
                    if (!isNaN(newDate.getTime())) {
                        return newDate.toLocaleDateString('id-ID', {
                            day: 'numeric',
                            month: 'long',
                            year: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                    }
                }
                return null;
            }

            return date.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
        } catch (e) {
            console.error('Error formatting time:', e);
            return null;
        }
    }

    // Update status teks
    function updateCurrentStatus() {
        const statusInfo = document.getElementById('current-status');
        let currentStatus = '';
        let currentMessage = '';

        // Cari tahap terakhir yang completed atau rejected
        for (let i = checkpointData.length - 1; i >= 0; i--) {
            if (checkpointData[i].status === 'completed' || checkpointData[i].status === 'rejected') {
                currentStatus = checkpointData[i].name;
                currentMessage = checkpointData[i].message;
                break;
            }
        }

        // Jika tidak ada yang completed/rejected, ambil tahap pertama yang pending
        if (!currentStatus) {
            for (let i = 0; i < checkpointData.length; i++) {
                if (checkpointData[i].status === 'pending') {
                    currentStatus = checkpointData[i].name;
                    currentMessage = checkpointData[i].message;
                    break;
                }
            }
        }

        if (currentStatus) {
            statusInfo.innerHTML = `<strong>Status saat ini:</strong> ${currentStatus}<br>
                                  <em>${currentMessage}</em>`;
        }
    }

    // Inisialisasi awal
    document.addEventListener('DOMContentLoaded', () => {
        updateCheckpointStatus();
        renderCheckpoints();
    });
</script>

<style>
    /* Main Timeline Container */
    .timeline-horizontal {
        display: flex;
        width: 100%;
        padding: 20px 0;
        position: relative;
        flex-wrap: wrap;
    }

    /* Each Checkpoint Wrapper */
    .checkpoint-wrapper {
        display: flex;
        flex: 1;
        min-width: 150px;
        position: relative;
        flex-direction: column;
        align-items: center;
    }

    /* Container for dot and connector */
    .dot-connector-container {
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: center;
        position: relative;
    }

    /* Dot Styling */
    .dot {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        z-index: 2;
        position: relative;
        flex-shrink: 0;
    }

    /* Dot Status Colors */
    .dot.completed {
        background-color: #4CAF50;
        color: white;
    }
    .dot.rejected {
        background-color: #f44336;
        color: white;
    }
    .dot.pending {
        background-color: #e0e0e0;
        color: #666;
        border: 2px solid #999;
    }

    /* Connector Line */
    .connector {
        position: absolute;
        top: 50%;
        left: 50%;
        height: 4px;
        width: 100%;
        transform: translateY(-50%);
        background-color: #e0e0e0;
        z-index: 1;
    }
    .connector.active {
        background-color: #4CAF50;
    }

    /* Checkpoint Content */
    .checkpoint-content {
        margin-top: 10px;
        text-align: center;
        padding: 0 10px;
        word-wrap: break-word;
        max-width: 140px;
        font-size: 14px;
    }

    /* Remove connector for last item */
    .checkpoint-wrapper:last-child .connector {
        display: none;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .timeline-horizontal {
            flex-direction: column;
            align-items: flex-start;
        }

        .checkpoint-wrapper {
            flex-direction: row;
            align-items: center;
            margin-bottom: 20px;
        }

        .dot-connector-container {
            width: auto;
            margin-right: 10px;
        }

        .connector {
            position: static;
            width: 50px;
            height: 4px;
            margin: 0 10px;
            transform: none;
        }

        .checkpoint-content {
            margin-top: 0;
            margin-left: 10px;
            max-width: none;
            text-align: left;
        }
    }
</style>

<div id="checkpoint-container"></div>
<div id="current-status" style="margin-top: 20px; padding: 10px; background: #f5f5f5; border-radius: 5px;"></div>

<hr>
    <br>

    <h5 style="color: navy; font-weight:800; font-size:16px;">I. INFORMASI DATA DASAR INSPEKSI BANGUNAN GEDUNG</h4>


<div class="table-responsive">

</div>

<br>
<div class="table-responsive">
    <table class="zebra-table table-striped" style="font-size:16px; width: 100%">
        <tr>
            <td style="text-align: center;">1</td>
            <td style="text-align: left;"><i class="bi bi-building" style="margin-right:6px;"></i> Fungsi Bangunan</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->fungsibangunan ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">2</td>
            <td style="text-align: left;"><i class="bi bi-building-check" style="margin-right:6px;"></i> Subfungsi Bangunan</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->subfungsibangunan ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">3</td>
            <td style="text-align: left;"><i class="bi bi-house-door" style="margin-right:6px;"></i> Nama Bangunan</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->namabangunan ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">4</td>
            <td style="text-align: left;"><i class="bi bi-aspect-ratio" style="margin-right:6px;"></i> Luas Bangunan (m²)</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->luasbangunan ?? '-' }} (m²)</td>
        </tr>
        <tr>
            <td style="text-align: center;">5</td>
            <td style="text-align: left;"><i class="bi bi-arrows-expand" style="margin-right:6px;"></i> Ketinggian Bangunan (m)</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->ketinggianbangunan ?? '-' }} meter</td>
        </tr>
        <tr>
            <td style="text-align: center;">6</td>
            <td style="text-align: left;"><i class="bi bi-building" style="margin-right:6px;"></i> Jumlah Lantai</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->jumlahlantai ?? '-' }} lantai</td>
        </tr>
        <tr>
            <td style="text-align: center;">7</td>
            <td style="text-align: left;"><i class="bi bi-box-seam" style="margin-right:6px;"></i> Jumlah Lapis Basemen</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->jumlahlapisbasemen ?? '-' }} lantai</td>
        </tr>
        <tr>
            <td style="text-align: center;">8</td>
            <td style="text-align: left;"><i class="bi bi-aspect-ratio" style="margin-right:6px;"></i> Luas Basemen (m²)</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->luasbasemen ?? '-' }} (m²)</td>
        </tr>
        <tr>
            <td style="text-align: center;">9</td>
            <td style="text-align: left;"><i class="bi bi-building" style="margin-right:6px;"></i> Jumlah Unit</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->jumlahunit ?? '-' }} unit</td>
        </tr>
        <tr>
            <td style="text-align: center;">10</td>
            <td style="text-align: left;"><i class="bi bi-people" style="margin-right:6px;"></i> Estimasi Jumlah Penghuni</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->estimasijumlahpenghuni ?? '-' }} orang</td>
        </tr>

        <tr>
            <td style="text-align: center;">11</td>
            <td style="text-align: left;"><i class="bi bi-file-earmark-text" style="margin-right:6px;"></i> Nomor KKPR</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->nomorkkpr ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">12</td>
            <td style="text-align: left;"><i class="bi bi-rulers" style="margin-right:6px;"></i> Garis Sempadan Bangunan (GSB) (m)</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->gsb ?? '-' }} meter</td>
        </tr>
        <tr>
            <td style="text-align: center;">13</td>
            <td style="text-align: left;"><i class="bi bi-bar-chart" style="margin-right:6px;"></i> Koefisien Dasar Bangunan (KDB) (%)</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->kdb ?? '-' }} %</td>
        </tr>
        <tr>
            <td style="text-align: center;">14</td>
            <td style="text-align: left;"><i class="bi bi-columns" style="margin-right:6px;"></i> Koefisien Lantai Bangunan (KLB)</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->klb ?? '-' }} meter</td>
        </tr>
        <tr>
            <td style="text-align: center;">15</td>
            <td style="text-align: left;"><i class="bi bi-tree" style="margin-right:6px;"></i> Koefisien Dasar Hijau (KDH) (%)</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->kdh ?? '-' }} %</td>
        </tr>

        <tr>
            <td style="text-align: center;">16</td>
            <td style="text-align: left;"><i class="bi bi-geo-alt" style="margin-right:6px;"></i> Provinsi</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->provinsi ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">17</td>
            <td style="text-align: left;"><i class="bi bi-geo-alt" style="margin-right:6px;"></i> Kabupaten</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->kabupaten ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">18</td>
            <td style="text-align: left;"><i class="bi bi-building" style="margin-right:6px;"></i> Kecamatan</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->kecamatanblora->kecamatanblora ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">19</td>
            <td style="text-align: left;"><i class="bi bi-building" style="margin-right:6px;"></i> Kelurahan/Desa</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->kelurahandesa->desa ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">20</td>
            <td style="text-align: left;"><i class="bi bi-geo-alt-fill" style="margin-right:6px;"></i> Alamat Lengkap</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->alamatlengkap ?? '-' }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">21</td>
            <td style="text-align: left;"><i class="bi bi-geo-alt" style="margin-right:6px;"></i> Koordinat</td>
            <td style="text-align: center;">:</td>
            <td style="text-align: left;">{{ $data->koordinat ?? '-' }}</td>
        </tr>
    </table>
</div>
    <br>

</div>

</div>

@canany(['superadmin', 'admin', 'pemohon'])

<hr>

@if ($data->verifikasi1 === 'dikembalikan')
<div style="display: flex; justify-content: center; align-items: center; margin-top: 5px; margin-bottom: 5px;">
    <div style="display: flex; align-items: center; gap: 15px;">
        <p style="margin: 0;">
            Silahkan Lakukan Perbaikan Data <i class="bi bi-arrow-right"></i>
        </p>

        <a href="/bekrkusahaperbaikan/{{$data->id}}" style="text-decoration: none;">
            <button class="button-abgblora">
                <i class="bi bi-pencil-square" style="margin-right:5px;"></i> Perbaikan Data
            </button>
        </a>
    </div>
</div>
@endif

@endcanany

<hr>

<form action="{{ route('validasikrkusaha', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
<thead style="font-size: 16px; background-color: green; color: white;">



                                </thead>
                            </table>
                            <br><br><br>
                        </div>
                    </div>


                </td>


</form>

<br>
<!-- Modal untuk preview dokumen -->

<script>
    // Script untuk menangani preview dokumen
    $(document).ready(function() {
        // Inisialisasi tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Validasi form sebelum submit
        $('form').submit(function(e) {
            let isValid = true;

            // Cek setiap radio group
            $('input[type="radio"]').each(function() {
                const name = $(this).attr('name');
                if (!$('input[name="'+name+'"]:checked').length) {
                    isValid = false;
                    return false;
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Harap memilih status validasi untuk semua dokumen!');
            }
        });
    });
</script>
                    <!-- /.card-body -->
                </div>


                 {{-- @include('backend.00_administrator.00_baganterpisah.07_paginations') --}}

                 <br><br>

             </div>
             <!-- /.card -->
         </div>
         <!-- /.col -->
     </div>
     <!--end::Row-->
     </div>
               <!--end::Container-->
     <!--end::App Content Header-->
     <!--begin::App Content-->
       <!--end::App Content-->
   </main>
   <!--end::App Main-->
 </div>
 </div>


   @include('backend.00_administrator.00_baganterpisah.02_footer')

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
   <script>
    function exportTableToExcel(tableID, filename = '') {
        var table = document.getElementById(tableID);
        var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet 1"});
        return XLSX.writeFile(wb, filename + '.xlsx');
    }
    </script>
