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
  ">
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
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">

</div>
<!-- /.card-header -->
<div class="card-header">

    @include('backend.00_administrator.00_baganterpisah.11_judulhalaman')
                     </div>

         @canany(['dinas'])
    <div style="display: flex; justify-content: flex-end; margin-bottom:10px;">
        <button class="button-kembali"
                type="button"
                onclick="location.href='{{ route('bebantekdinaspenyusutanindex') }}';"
                style="cursor: pointer; color:black;">
            <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Kembali
        </button>
    </div>

@endcanany


@canany(['superadmin', 'admin'])
 <div style="display: flex; justify-content: flex-end; margin-bottom:5px;">
        <button class="button-kembali"
                type="button"
                onclick="location.href='{{ route('beperhitunganpenyusutanindex') }}';"
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

           <a href="/hakaksespekerjaberkas">
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
            name: 'Berkas Dokumen Masuk',
            status: 'completed',
            time: '<?php echo isset($data->created_at) ? $data->created_at : date("Y-m-d H:i:s") ?>',
            message: ''
        },
        {
            id: 2,
            name: 'Verifikasi Berkas',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas1_time) ? $data->validasiberkas1_time : "" ?>',
            message: 'Menunggu Verifikasi DPUPR'
        },
        {
            id: 3,
            name: 'Cek Lapangan',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas2_time) ? $data->validasiberkas2_time : "" ?>',
            message: 'Sedang Penjadwalan Cek Lapangan'
        },
        {
            id: 4,
            name: 'Verifikasi Data',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas3_time) ? $data->validasiberkas3_time : "" ?>',
            message: 'Pengolahan Data'
        },
        {
            id: 5,
            name: 'Penerbitan Berkas',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas4_time) ? $data->validasiberkas4_time : "" ?>',
            message: 'Berkas Belum Terbit'
        }
    ];

    // Fungsi untuk mengupdate status berdasarkan data PHP
    function updateCheckpointStatus() {
        // Step 1 otomatis completed (hijau)
        checkpointData[0].status = 'completed';
        checkpointData[0].message = '';

        // Step 2: Verifikasi Berkas berdasarkan validasiberkas1
        if ('<?php echo isset($data->validasiberkas1) ? $data->validasiberkas1 : "" ?>' === 'lolos') {
            checkpointData[1].status = 'completed';
            checkpointData[1].message = 'Berkas Lolos Verifikasi DPUPR';
        } else if ('<?php echo isset($data->validasiberkas1) ? $data->validasiberkas1 : "" ?>' === 'dikembalikan') {
            checkpointData[1].status = 'rejected';
            checkpointData[1].message = 'Dikembalikan Kepada Pemohon';
        }

        // Step 3: Cek Lapangan berdasarkan validasiberkas2
        if ('<?php echo isset($data->validasiberkas2) ? $data->validasiberkas2 : "" ?>' === 'sudah') {
            checkpointData[2].status = 'completed';
            checkpointData[2].message = 'Sudah Cek Lapangan';
        } else if ('<?php echo isset($data->validasiberkas2) ? $data->validasiberkas2 : "" ?>' === 'belum') {
            checkpointData[2].status = 'rejected';
            checkpointData[2].message = 'Belum Cek Lapangan';
        }

        // Step 4: Verifikasi Data berdasarkan validasiberkas3
        if ('<?php echo isset($data->validasiberkas3) ? $data->validasiberkas3 : "" ?>' === 'sudah') {
            checkpointData[3].status = 'completed';
            checkpointData[3].message = 'Data Sudah Terverifikasi';
        } else if ('<?php echo isset($data->validasiberkas3) ? $data->validasiberkas3 : "" ?>' === 'belum') {
            checkpointData[3].status = 'rejected';
            checkpointData[3].message = 'Sedang dilakukan perbaikan data';
        }

        // Step 5: Penerbitan Berkas berdasarkan validasiberkas4
        if ('<?php echo isset($data->validasiberkas4) ? $data->validasiberkas4 : "" ?>' === 'sudah') {
            checkpointData[4].status = 'completed';
            checkpointData[4].message = 'Berkas Terbit';
        } else if ('<?php echo isset($data->validasiberkas4) ? $data->validasiberkas4 : "" ?>' === 'belum') {
            checkpointData[4].status = 'rejected';
            checkpointData[4].message = 'Berkas Belum Terbit';
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

    <h5 style="color: navy; font-weight:800; font-size:16px;">I. INFORMASI PERMOHONAN BERKAS BANTUAN TEKNIS {{$data->jenispengajuanbantek->jenispengajuan}}</h4>


<div class="table-responsive">
    <table class="zebra-table table-striped" style="font-size:16px; width: 100%">
   <tr>
    <td style="text-align: center;"><i class="bi bi-hash" style="margin-right:6px;"></i> No</td>
    <td><i class="bi bi-card-text" style="margin-right:6px;"></i> Item</td>
    <td style="text-align: center;"><i class="bi bi-three-dots" style="margin-right:6px;"></i> :</td>
    <td><i class="bi bi-info-circle" style="margin-right:6px;"></i> Keterangan</td>
</tr>
    <tr>
        <td style="text-align: center;">1</td>
        <td style="text-align: left;"><i class="bi bi-file-earmark-text" style="margin-right:6px;"></i> Jenis Pengajuan</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->jenispengajuanbantek->jenispengajuan ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">2</td>
        <td style="text-align: left;"><i class="bi bi-file-text" style="margin-right:6px;"></i> No. Surat DPUPR</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->nosurat ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">3</td>
        <td style="text-align: left;"><i class="bi bi-file-text" style="margin-right:6px;"></i> No. Surat Dinas</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->nosuratdinas ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">4</td>
        <td style="text-align: left;"><i class="bi bi-calendar-event" style="margin-right:6px;"></i> Tanggal Surat</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->tanggalsurat ? \Carbon\Carbon::parse($data->tanggalsurat)->format('d-m-Y') : '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">5</td>
        <td style="text-align: left;"><i class="bi bi-person" style="margin-right:6px;"></i> Nama Pemohon</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->nama_pemohon ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">6</td>
        <td style="text-align: left;"><i class="bi bi-telephone" style="margin-right:6px;"></i> No. Telepon</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->no_telepon ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">7</td>
        <td style="text-align: left;"><i class="bi bi-clipboard-data" style="margin-right:6px;"></i> Nama Paket Pekerjaan</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->namapaket ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">8</td>
        <td style="text-align: left;"><i class="bi bi-building" style="margin-right:6px;"></i> Kategori Bangunan</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->kategoribangunan ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">9</td>
        <td style="text-align: left;"><i class="bi bi-aspect-ratio" style="margin-right:6px;"></i> Luas Bangunan (m²)</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->luasbangunan ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">10</td>
        <td style="text-align: left;"><i class="bi bi-grid" style="margin-right:6px;"></i> Luas Tanah Total (m²)</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->luastanahtotal ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">11</td>
        <td style="text-align: left;"><i class="bi bi-layout-text-sidebar" style="margin-right:6px;"></i> Jumlah Lantai</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->jumlahlantai ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">12</td>
        <td style="text-align: left;"><i class="bi bi-arrow-up" style="margin-right:6px;"></i> Tinggi Bangunan (m)</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->tinggibangunan ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">13</td>
        <td style="text-align: left;"><i class="bi bi-box" style="margin-right:6px;"></i> Bassement</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->bassement ? 'Ya' : 'Tidak' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">14</td>
        <td style="text-align: left;"><i class="bi bi-person-badge" style="margin-right:6px;"></i> Kepemilikan</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->kepemilikan ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">15</td>
        <td style="text-align: left;"><i class="bi bi-building-add" style="margin-right:6px;"></i> Tahun Pembangunan</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->tahunpembangunan ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">16</td>
        <td style="text-align: left;"><i class="bi bi-arrow-repeat" style="margin-right:6px;"></i> Tahun Renovasi</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->tahunrenovasi ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">17</td>
        <td style="text-align: left;"><i class="bi bi-people" style="margin-right:6px;"></i> Pengelola</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->pengelola ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">18</td>
        <td style="text-align: left;"><i class="bi bi-geo-alt" style="margin-right:6px;"></i> Alamat Lokasi</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->alamatlokasi ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">19</td>
        <td style="text-align: left;"><i class="bi bi-door-closed" style="margin-right:6px;"></i> RT</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->rt ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">20</td>
        <td style="text-align: left;"><i class="bi bi-door-open" style="margin-right:6px;"></i> RW</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->rw ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">21</td>
        <td style="text-align: left;"><i class="bi bi-map" style="margin-right:6px;"></i> Kabupaten</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->kabupaten ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">22</td>
        <td style="text-align: left;"><i class="bi bi-map-fill" style="margin-right:6px;"></i> Kecamatan</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->kecamatanblora->kecamatanblora ?? '-' }}</td>
    </tr>
    <tr>
        <td style="text-align: center;">23</td>
        <td style="text-align: left;"><i class="bi bi-map-pin" style="margin-right:6px;"></i> Kelurahan/Desa</td>
        <td style="text-align: center;">:</td>
        <td style="text-align: left;">{{ $data->kelurahandesa->desa ?? '-' }}</td>
    </tr>
</table>

</div>

<br>

    <h5 style="color: navy; font-weight:800; font-size:16px;">II. KELENGKAPAN BERKAS PERSYARATAN BANTUAN TEKNIS {{$data->jenispengajuanbantek->jenispengajuan}} </h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
    <div class="table-responsive">
    <table class="zebra-table table-striped">
        <tr>
<td style="text-align: center; font-size:16px;">
    <i class="bi bi-envelope" style="margin-right:6px; color: navy;"></i> Surat Permohonan
</td>
<td style="text-align: center; font-size:16px;">
    <i class="bi bi-card-list" style="margin-right:6px; color: navy;"></i> Kartu Identitas Bangunan
</td>
<td style="text-align: center; font-size:16px;">
    <i class="bi bi-image" style="margin-right:6px; color: navy;"></i> Foto Kondisi Bangunan / (Berkas)
</td>

</tr>

        <tr>
            <td style="text-align: center;">
                 <div style="margin-top: 10px;">
    @if($data->suratpermohonan && file_exists(public_path('storage/' . $data->suratpermohonan)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $data->suratpermohonan) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 500px;">
        </iframe>
    @elseif($data->suratpermohonan)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($data->suratpermohonan) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 500px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>

            </td>

            <td style="text-align: center;">
                    <div style="margin-top: 10px;">
    @if($data->kic && file_exists(public_path('storage/' . $data->kic)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe
            src="{{ asset('storage/' . $data->kic) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 500px;">
        </iframe>
    @elseif($data->kic)
        <!-- Display the iframe with the updated file -->
        <iframe
            src="{{ asset($data->kic) }}"
            frameborder="0"
            width="100%"
            height="600px"
            style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 500px;">
        </iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif
</div>
            </td>

            <td style="text-align: center;">
    <div style="margin-top: 10px;">
        @php
            $filePath = public_path('storage/' . $data->fotokondisi);
        @endphp

        @if($data->fotokondisi && file_exists($filePath))
            <!-- Jika file ada di direktori storage -->
            <iframe
                src="{{ asset('storage/' . $data->fotokondisi) }}"
                frameborder="0"
                style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 500px;">
            </iframe>
        @elseif($data->fotokondisi)
            <!-- Jika file tidak di storage, tapi tetap ada path -->
            <iframe
                src="{{ asset($data->fotokondisi) }}"
                frameborder="0"
                style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 500px;">
            </iframe>
        @else
            <!-- Tidak ada file -->
            <p>Data belum diupdate</p>
        @endif
    </div>
</td>


        </tr>



        </div>

    </table>
    <br>
</div>

</div>

@canany(['superadmin', 'admin', 'dinas'])


@if ($data->validasiberkas1 === 'dikembalikan')
<hr>
<div style="display: flex; justify-content: center; align-items: center; margin-top: 5px; margin-bottom: 5px;">
    <div style="display: flex; align-items: center; gap: 15px;">
        <p style="margin: 0;">
            Silahkan Lakukan Perbaikan Data <i class="bi bi-arrow-right"></i>
        </p>

                <a href="/beperhitunganpenyusutanper/{{$data->id}}" style="text-decoration: none;">
                    <button class="button-abgblora">
                        <i class="bi bi-pencil-square" style="margin-right:5px;"></i> Perbaikan Data
                    </button>
                </a>
            </div>
        </div>
        <hr>
        @endif
        @endcanany


<form action="{{ route('validasidokumenbantek3', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
<thead style="font-size: 16px; background-color: green; color: white;">

                                    <tr>
                                        {{-- <th style="width: 25px; text-align:center;"><i class="bi bi-hash"></i> No</th> --}}
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Surat Permohonan </th>
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">
<div style="display: flex; justify-content: center;">
    <button type="button" class="button-kembali"
        style="
            border-radius: 15px;
            padding: 8px 20px;
            background-color: #929ba3;
            color: white;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            transform: translateY(0);
        "
        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d'; this.style.boxShadow='0 6px 10px rgba(0, 0, 0, 0.25)'; this.style.transform='translateY(-2px)'"
        onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='translateY(0)'"
        data-bs-toggle="modal" data-bs-target="#modalSuratpermohonan{{ $data->id }}">
        <i class="bi bi-eye" style="margin-right: 6px;"></i> Lihat
    </button>
</div>

                                            <!-- Modal KTP -->
                                            <div class="modal fade" id="modalSuratpermohonan{{ $data->id }}" tabindex="-1" aria-labelledby="modalSuratpermohonanLbl{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="/assets/abgblora/logo/logokabupatenblora.png" width="25" class="me-2">
                                                            <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                            <h5 class="modal-title" id="modalSuratpermohonanLbl{{ $data->id }}">Surat Permohonan Bantuan Teknis</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

<div class="modal-body text-left">
    @if ($data->suratpermohonan)
        @php
            $filePath = public_path($data->suratpermohonan);
            $fileUrl = asset($data->suratpermohonan);
            $extension = strtolower(pathinfo($data->suratpermohonan, PATHINFO_EXTENSION));
        @endphp

        @if (file_exists($filePath))
            @if ($extension === 'pdf')
                <iframe src="{{ $fileUrl }}" frameborder="0" width="100%" height="600px"></iframe>
            @else
                <img src="{{ $fileUrl }}" alt="Surat Permohonan" style="max-width:100%; max-height:600px;">
            @endif
            <div class="text-center">
                <a href="{{ $fileUrl }}" class="btn btn-primary mt-2" download>Download Surat Permohonan</a>
            </div>
        @else
            <p style="color: red; font-weight: bold;">File tidak ditemukan di server.</p>
        @endif
    @else
        <p style="color: red; font-weight: bold;">Data belum diupdate.</p>
    @endif
</div>


                                                </div>
                                            </div>
                                        </th>
@canany(['pemohonbantek', 'dinas', 'konsultanbantek'])
<th class="text-center" style="background-color: #e2e8f0; color: black;">
    <div style="display: flex; justify-content: center; gap: 20px; padding: 10px 0;">
        <style>
            .custom-status {
                position: relative;
                padding-left: 35px;
                padding-right: 15px;
                padding-top: 10px;
                padding-bottom: 10px;
                background-color: #fff;
                border: 2px solid #cbd5e0;
                border-radius: 12px;
                font-weight: 600;
                user-select: none;
                display: inline-block;
                min-width: 130px;
                color: #555;
            }
            .custom-status .custom-box {
                position: absolute;
                top: 10px;
                left: 10px;
                height: 18px;
                width: 18px;
                background-color: #fff;
                border: 2px solid #cbd5e0;
                border-radius: 4px;
            }
            .custom-status.sesuai {
                border-color: #3b82f6;
                background-color: #bfdbfe;
                color: #1d4ed8;
            }
            .custom-status.sesuai .custom-box {
                border-color: #3b82f6;
                background-color: #bfdbfe;
            }
            .custom-status.sesuai .custom-box::after {
                content: '';
                position: absolute;
                left: 5px;
                top: 1px;
                width: 5px;
                height: 10px;
                border: solid #1d4ed8;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
            .custom-status.tidak_sesuai {
                border-color: #ef4444;
                background-color: #fecaca;
                color: #b91c1c;
            }
            .custom-status.tidak_sesuai .custom-box {
                border-color: #ef4444;
                background-color: #fecaca;
            }
            .custom-status.tidak_sesuai .custom-box::after {
                content: '';
                position: absolute;
                left: 5px;
                top: 1px;
                width: 5px;
                height: 10px;
                border: solid #b91c1c;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
            .custom-status.pending {
                border-color: #f59e0b;
                background-color: #fef3c7;
                color: #b45309;
            }
            .custom-status.pending .custom-box {
                border-color: #f59e0b;
                background-color: #fef3c7;
            }
        </style>

        @php
            $status = $data->validasisuratpermohonan;
        @endphp

        <div class="custom-status {{ $status == 'sesuai' ? 'sesuai' : ($status == 'tidak_sesuai' ? 'tidak_sesuai' : 'pending') }}">
            <span class="custom-box"></span>
            @if ($status === 'tidak_sesuai')
                Silahkan Lakukan Perbaikan
            @elseif ($status === 'sesuai')
                Berkas Anda Sudah Sesuai
            @else
                Sedang Di Verifikasi DPUPR
            @endif
        </div>
    </div>
</th>
@endcanany

@canany(['superadmin', 'admin'])
    <th class="text-center" style="background-color: #e2e8f0; color: black;">
        <div style="display: flex; justify-content: center; gap: 20px;">
            <style>
                .custom-radio {
                    position: relative;
                    padding-left: 35px;
                    padding-right: 15px;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    background-color: #fff;
                    border: 2px solid #cbd5e0;
                    border-radius: 12px;
                    font-weight: 600;
                    cursor: pointer;
                    user-select: none;
                    transition: border-color 0.3s, background-color 0.3s;
                    display: inline-block;
                }

                .custom-radio input[type="radio"] {
                    position: absolute;
                    opacity: 0;
                    cursor: pointer;
                }

                .custom-box {
                    position: absolute;
                    top: 10px;
                    left: 10px;
                    height: 18px;
                    width: 18px;
                    background-color: #fff;
                    border: 2px solid #cbd5e0;
                    border-radius: 4px;
                    transition: background-color 0.3s ease, border-color 0.3s ease;
                }

                .custom-radio input[type="radio"]:checked ~ .custom-box::after {
                    content: '';
                    position: absolute;
                    left: 5px;
                    top: 1px;
                    width: 5px;
                    height: 10px;
                    border: solid;
                    border-width: 0 2px 2px 0;
                    transform: rotate(45deg);
                    animation: checkmarkFade 0.3s ease forwards;
                }

                .custom-radio input[type="radio"]:checked[value="sesuai"] ~ .custom-box {
                    border-color: #3b82f6;
                    background-color: #bfdbfe;
                }

                .custom-radio input[type="radio"]:checked[value="sesuai"] ~ .custom-box::after {
                    border-color: #1d4ed8;
                }

                .custom-radio input[type="radio"]:checked[value="tidak_sesuai"] ~ .custom-box {
                    border-color: #ef4444;
                    background-color: #fecaca;
                }

                .custom-radio input[type="radio"]:checked[value="tidak_sesuai"] ~ .custom-box::after {
                    border-color: #b91c1c;
                }

                @keyframes checkmarkFade {
                    0% {
                        opacity: 0;
                        transform: scale(0.5) rotate(45deg);
                    }
                    100% {
                        opacity: 1;
                        transform: scale(1) rotate(45deg);
                    }
                }
            </style>

            <label class="custom-radio">
                <input type="radio" name="validasisuratpermohonan" value="sesuai"
                    {{ $data->validasisuratpermohonan == 'sesuai' ? 'checked' : '' }}>
                <span class="custom-box"></span>
                Sesuai
            </label>

            <label class="custom-radio">
                <input type="radio" name="validasisuratpermohonan" value="tidak_sesuai"
                    {{ $data->validasisuratpermohonan == 'tidak_sesuai' ? 'checked' : '' }}>
                <span class="custom-box"></span>
                Tidak Sesuai
            </label>
        </div>
    </th>
@endcanany

                                    </tr>



                                    <tr>
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Kartu Identitas Bangunan Gedung</th>
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                        <div style="display: flex; justify-content: center;">
    <button type="button" class="button-kembali"
        style="
            border-radius: 15px;
            padding: 8px 20px;
            background-color: #929ba3;
            color: white;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            transform: translateY(0);
        "
        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d'; this.style.boxShadow='0 6px 10px rgba(0, 0, 0, 0.25)'; this.style.transform='translateY(-2px)'"
        onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='translateY(0)'"
        data-bs-toggle="modal" data-bs-target="#modalFoto{{ $data->id }}">
        <i class="bi bi-eye" style="margin-right: 6px;"></i> Lihat
    </button>
</div>


                                            <!-- Modal Foto -->
                                            <div class="modal fade" id="modalFoto{{ $data->id }}" tabindex="-1" aria-labelledby="modalFotoLbl{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="/assets/abgblora/logo/logokabupatenblora.png" width="25" class="me-2">
                                                            <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                            <h5 class="modal-title" id="modalFotoLbl{{ $data->id }}">Dokumen Kartu Identitas Bangunan </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
<div class="modal-body text-left">
    @if ($data->kic)
        @php
            $filePath = public_path($data->kic); // langsung cek di public/
            $fileUrl = asset($data->kic); // URL akses publik
            $extension = strtolower(pathinfo($data->kic, PATHINFO_EXTENSION));
        @endphp

        @if (file_exists($filePath))
            @if ($extension === 'pdf')
                <iframe src="{{ $fileUrl }}" frameborder="0" width="100%" height="600px"></iframe>
            @else
                <img src="{{ $fileUrl }}" alt="Dokumen" style="max-width:100%; max-height:600px;">
            @endif
            <div class="text-center">
                <a href="{{ $fileUrl }}" class="button-abgblora mt-2" download>Download Dokumen</a>
            </div>
        @else
            <p style="color: red; font-weight: bold;">File tidak ditemukan di server.</p>
        @endif
    @else
        <p style="color: red; font-weight: bold;">Data belum diupdate</p>
    @endif
</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </th>


@canany(['pemohonbantek', 'dinas', 'konsultanbantek'])
<th class="text-center" style="background-color: #e2e8f0; color: black;">
    <div style="display: flex; justify-content: center; gap: 20px; padding: 10px 0;">
        <style>
            .custom-status {
                position: relative;
                padding-left: 35px;
                padding-right: 15px;
                padding-top: 10px;
                padding-bottom: 10px;
                background-color: #fff;
                border: 2px solid #cbd5e0;
                border-radius: 12px;
                font-weight: 600;
                user-select: none;
                display: inline-block;
                min-width: 130px;
                color: #555;
            }
            .custom-status .custom-box {
                position: absolute;
                top: 10px;
                left: 10px;
                height: 18px;
                width: 18px;
                background-color: #fff;
                border: 2px solid #cbd5e0;
                border-radius: 4px;
            }
            .custom-status.sesuai {
                border-color: #3b82f6;
                background-color: #bfdbfe;
                color: #1d4ed8;
            }
            .custom-status.sesuai .custom-box {
                border-color: #3b82f6;
                background-color: #bfdbfe;
            }
            .custom-status.sesuai .custom-box::after {
                content: '';
                position: absolute;
                left: 5px;
                top: 1px;
                width: 5px;
                height: 10px;
                border: solid #1d4ed8;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
            .custom-status.tidak_sesuai {
                border-color: #ef4444;
                background-color: #fecaca;
                color: #b91c1c;
            }
            .custom-status.tidak_sesuai .custom-box {
                border-color: #ef4444;
                background-color: #fecaca;
            }
            .custom-status.tidak_sesuai .custom-box::after {
                content: '';
                position: absolute;
                left: 5px;
                top: 1px;
                width: 5px;
                height: 10px;
                border: solid #b91c1c;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
            .custom-status.pending {
                border-color: #f59e0b;
                background-color: #fef3c7;
                color: #b45309;
            }
            .custom-status.pending .custom-box {
                border-color: #f59e0b;
                background-color: #fef3c7;
            }
        </style>

        @php
            $status = $data->validasikic;
        @endphp

        <div class="custom-status {{ $status == 'sesuai' ? 'sesuai' : ($status == 'tidak_sesuai' ? 'tidak_sesuai' : 'pending') }}">
            <span class="custom-box"></span>
            @if ($status === 'tidak_sesuai')
                Silahkan Lakukan Perbaikan
            @elseif ($status === 'sesuai')
                Berkas Anda Sudah Sesuai
            @else
                Sedang Di Verifikasi DPUPR
            @endif
        </div>
    </div>
</th>
@endcanany


                                            @canany(['superadmin', 'admin'])
                                                <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="display: flex; justify-content: center; gap: 20px;">
                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasikic" value="sesuai"
                                                                {{ $data->validasikic == 'sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Sesuai
                                                        </label>

                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasikic" value="tidak_sesuai"
                                                                {{ $data->validasikic == 'tidak_sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Tidak Sesuai
                                                        </label>
                                                    </div>
                                                </th>
                                            @endcanany

                                    </tr>


                                    <tr>
                                        <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;"><i class="bi bi-file-earmark-text-fill"></i> Foto Kondisi Bangunan Gedung (Berkas.pdf)  </th>
                                        <th class="text-center" style="background-color: #e2e8f0; color: black;">
<div style="display: flex; justify-content: center;">
    <button type="button" class="button-kembali"
        style="
            border-radius: 15px;
            padding: 8px 20px;
            background-color: #929ba3;
            color: white;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            transform: translateY(0);
        "
        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d'; this.style.boxShadow='0 6px 10px rgba(0, 0, 0, 0.25)'; this.style.transform='translateY(-2px)'"
        onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.2)'; this.style.transform='translateY(0)'"
        data-bs-toggle="modal" data-bs-target="#modalFotokondisi{{ $data->id }}">
        <i class="bi bi-eye" style="margin-right: 6px;"></i> Lihat
    </button>
</div>


                                                <!-- Modal Ijazah -->
                                                <div class="modal fade" id="modalFotokondisi{{ $data->id }}" tabindex="-1" aria-labelledby="modalFotokondisiLbl{{ $data->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/abgblora/logo/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalFotokondisiLbl{{ $data->id }}">Foto Kondisi Dalam Bentuk pdf </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    @if($data->fotokondisi && file_exists(public_path('storage/' . $data->fotokondisi)))
                                                                    <!-- Display the default iframe when the file exists in the storage -->
                                                                    <iframe src="{{ asset('storage/' . $data->fotokondisi) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                                @elseif($data->fotokondisi)
                                                                    <!-- Display the iframe with the updated file -->
                                                                    <iframe src="{{ asset($data->fotokondisi) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                                @else
                                                                    <!-- Optional: Show a placeholder if there's no file available -->
                                                                    <p>Data belum diupdate</p>
                                                                @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </th>

                                             @canany(['pemohonbantek', 'dinas', 'konsultanbantek'])
<th class="text-center" style="background-color: #e2e8f0; color: black;">
    <div style="display: flex; justify-content: center; padding: 10px 0;">
        <style>
            .custom-status {
                position: relative;
                padding-left: 35px;
                padding-right: 15px;
                padding-top: 10px;
                padding-bottom: 10px;
                background-color: #fff;
                border: 2px solid #cbd5e0;
                border-radius: 12px;
                font-weight: 600;
                user-select: none;
                display: inline-block;
                min-width: 180px;
                color: #555;
                text-align: center;
            }
            .custom-status .custom-box {
                position: absolute;
                top: 10px;
                left: 10px;
                height: 18px;
                width: 18px;
                background-color: #fff;
                border: 2px solid #cbd5e0;
                border-radius: 4px;
            }
            .custom-status.sesuai {
                border-color: #3b82f6;
                background-color: #bfdbfe;
                color: #1d4ed8;
            }
            .custom-status.sesuai .custom-box {
                border-color: #3b82f6;
                background-color: #bfdbfe;
            }
            .custom-status.sesuai .custom-box::after {
                content: '';
                position: absolute;
                left: 5px;
                top: 1px;
                width: 5px;
                height: 10px;
                border: solid #1d4ed8;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
            .custom-status.tidak_sesuai {
                border-color: #ef4444;
                background-color: #fecaca;
                color: #b91c1c;
            }
            .custom-status.tidak_sesuai .custom-box {
                border-color: #ef4444;
                background-color: #fecaca;
            }
            .custom-status.tidak_sesuai .custom-box::after {
                content: '';
                position: absolute;
                left: 5px;
                top: 1px;
                width: 5px;
                height: 10px;
                border: solid #b91c1c;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
            .custom-status.pending {
                border-color: #f59e0b;
                background-color: #fef3c7;
                color: #b45309;
            }
            .custom-status.pending .custom-box {
                border-color: #f59e0b;
                background-color: #fef3c7;
            }
        </style>

        @php
            $status = $data->validasifotokondisi;
        @endphp

        <div class="custom-status {{ $status == 'sesuai' ? 'sesuai' : ($status == 'tidak_sesuai' ? 'tidak_sesuai' : 'pending') }}">
            <span class="custom-box"></span>
            @if ($status === 'tidak_sesuai')
                Silahkan Lakukan Perbaikan
            @elseif ($status === 'sesuai')
                Berkas Anda Sudah Sesuai
            @else
                Sedang Di Verifikasi DPUPR
            @endif
        </div>
    </div>
</th>
@endcanany

                                            @canany(['superadmin', 'admin'])
                                                <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                                    <div style="display: flex; justify-content: center; gap: 20px;">
                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasifotokondisi" value="sesuai"
                                                                {{ $data->validasifotokondisi == 'sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Sesuai
                                                        </label>

                                                        <label class="custom-radio">
                                                            <input type="radio" name="validasifotokondisi" value="tidak_sesuai"
                                                                {{ $data->validasifotokondisi == 'tidak_sesuai' ? 'checked' : '' }}>
                                                            <span class="custom-box"></span>
                                                            Tidak Sesuai
                                                        </label>
                                                    </div>
                                                </th>
                                            @endcanany

                                    </tr>


                                </thead>
                            </table>
                            <br><br><br>
                        </div>
                    </div>

                    @can('dinas')

                    <div class="mb-3" style="margin-top: -50px;">
                   <label for="catatanvalidasi" class="form-label" style="color: navy">
    <i class="bi bi-card-text me-1" style="color: navy;"></i>
    <span style="color: navy;">Catatan Keterangan Berkas</span>
</label>
<div class="form-control" style="min-height: 120px; white-space: pre-wrap; background-color: #f8f9fa; color: red;">
    {{ $data->catatanvalidasi ?? '-' }}
</div>


                    @endcan

                    @canany(['superadmin', 'admin'])


                    <div class="mb-3" style="margin-top: -50px;">
                        <label for="catatanvalidasi" class="form-label">
                            <i class="bi bi-card-text me-1"></i> Catatan Keterangan Berkas
                        </label>

                        <textarea name="catatanvalidasi" id="catatanvalidasi" class="form-control"
                        rows="4" style="resize: vertical; width: 100%;"
                        placeholder="Tulis catatan jika diperlukan...">{{ old('catatanvalidasi', $data->catatanvalidasi ?? '') }}</textarea>
                    </div>

                    @endcanany

                </td>

                @canany(['superadmin', 'admin'])

                <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                    <div class="flex justify-end">
                                      <button class="button-create" type="button" onclick="openModal()">
                                            <i class="bi bi-save2" style="margin-right: 8px;"></i> Simpan Validasi
                                        </button>


                                    </div>
                                    <!-- Modal Konfirmasi -->
                                    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                        <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                          <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                            Apakah Anda ingin memvalidasi berkas permohonan ini?
                                        </p>

                                          <!-- Tombol -->
                                          <div style="display: flex; justify-content: center; gap: 12px;">
                                            <button id="confirmSubmitBtn"
                                            onclick="submitForm()"
                                            style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                            onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                        <!-- Telegram SVG -->
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 448 512" fill="white">
                                            <path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>
                                        </svg>
                                        Ya
                                    </button>

                                    <!-- Tombol Batal dengan ikon X (SVG) -->
                                    <button type="button"
                                            onclick="closeModal()"
                                            style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                            onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                                            <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
                                        </svg>
                                        Batal
                                    </button>

                                          </div>
                                        </div>
                                    </div>

                                    <!-- Script -->
                                    <script>
                                    function openModal() {
                                        const modal = document.getElementById("confirmModal");
                                        if (modal) modal.style.display = "flex";
                                    }

                                    function closeModal() {
                                        const modal = document.getElementById("confirmModal");
                                        if (modal) modal.style.display = "none";
                                    }

                                    </script>


                @endcanany

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
