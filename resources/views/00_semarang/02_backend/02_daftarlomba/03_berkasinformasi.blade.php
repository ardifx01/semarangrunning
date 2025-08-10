
@include('00_semarang.02_backend.01_dashboard.header')

<body>
  <div class="container">
    <div class="overlay" id="overlay"></div>

    <!-- Sidebar -->
   @include('00_semarang.02_backend.01_dashboard.sidebar')
   @include('frontend.android.00_fiturmenu.06_alert')
   @include('frontend.button')

    <!-- Main Content -->
    <div class="main-content">
      <div class="header">

        <div class="header-left"><h3>Dashboard SNOC X | Selamat Datang <span>{{ $user?->name ?? 'Data Tidak Ditemukan !' }}</span></h3></div>
        <div class="header-right">
          <div class="toggle-sidebar" id="toggleSidebar"><i class="fas fa-bars"></i></div>
          <div class="user-profile">
                <span>{{ $user?->statusadmin?->statusadmin ?? 'Data Tidak Ditemukan !' }}</span>
            {{-- <span>{{ $auth->user()?->statusadmin?->statusadmin }}</span> --}}
        </div>
        </div>
      </div>
{{-- ---------------------------------------------------------------------------- --}}
{{-- ---------------------------------------------------------------------------- --}}
<div class="container-status">
  <h6>Status Verifikasi Berkas Perlombaan Anda !</h6>
  <div id="checkpoint-container" class="timeline-container"></div>
  <div class="control-panel">
    <div class="status-info" id="current-status"></div>
  </div>
</div>

<script>
    // Data dan fungsi update sama seperti kode kamu (aku simpan singkat)
    const checkpointData = [
        { id: 1, name: 'Berkas Pendaftaran Masuk', status: 'completed', time: '2025-08-10 12:00:00', message: '' },
        { id: 2, name: 'Verifikasi Persyaratan ', status: 'pending', time: '', message: 'Menunggu Verifikasi Panitia' },
        { id: 3, name: 'Cek Pembayaran', status: 'pending', time: '', message: 'Status Pembayaran' },
        { id: 4, name: 'Technical Meeting', status: 'pending', time: '', message: 'Status Kehadiran' },
        { id: 5, name: 'Sertifikat', status: 'pending', time: '', message: 'Belum Terbit' }
    ];

    function updateCheckpointStatus() {
    // Step 1 selalu completed karena dokumen sudah masuk
    checkpointData[0].status = 'completed';
    checkpointData[0].message = '';

    // Step 2: Verifikasi Berkas (validasiberkas1)
    if ('<?php echo isset($data->validasiberkas1) ? $data->validasiberkas1 : "" ?>' === 'sudah') {
        checkpointData[1].status = 'completed';
        checkpointData[1].message = 'Berkas Lolos Verifikasi DPUPR';
    } else if ('<?php echo isset($data->validasiberkas1) ? $data->validasiberkas1 : "" ?>' === 'belum') {
        checkpointData[1].status = 'pending';
        checkpointData[1].message = 'Menunggu Verifikasi DPUPR';
    } else if ('<?php echo isset($data->validasiberkas1) ? $data->validasiberkas1 : "" ?>' === 'ditolak') {
        checkpointData[1].status = 'rejected';
        checkpointData[1].message = 'Berkas Ditolak DPUPR';
    }

    // Step 3: Cek Lapangan (validasiberkas2)
    if ('<?php echo isset($data->validasiberkas2) ? $data->validasiberkas2 : "" ?>' === 'sudah') {
        checkpointData[2].status = 'completed';
        checkpointData[2].message = 'Sudah Cek Lapangan';
    } else if ('<?php echo isset($data->validasiberkas2) ? $data->validasiberkas2 : "" ?>' === 'belum') {
        checkpointData[2].status = 'pending';
        checkpointData[2].message = 'Menunggu Penjadwalan';
    } else if ('<?php echo isset($data->validasiberkas2) ? $data->validasiberkas2 : "" ?>' === 'ditolak') {
        checkpointData[2].status = 'rejected';
        checkpointData[2].message = 'Cek Lapangan Ditolak';
    }

    // Step 4: Pengolahan Data (validasiberkas3)
    if ('<?php echo isset($data->validasiberkas3) ? $data->validasiberkas3 : "" ?>' === 'sudah') {
        checkpointData[3].status = 'completed';
        checkpointData[3].message = 'Olah Data Selesai';
    } else if ('<?php echo isset($data->validasiberkas3) ? $data->validasiberkas3 : "" ?>' === 'belum') {
        checkpointData[3].status = 'pending';
        checkpointData[3].message = 'Verifikasi Data Lapangan';
    } else if ('<?php echo isset($data->validasiberkas3) ? $data->validasiberkas3 : "" ?>' === 'ditolak') {
        checkpointData[3].status = 'rejected';
        checkpointData[3].message = 'Pengolahan Data Ditolak';
    }

    // Step 5: Surat Terbit (validasiberkas4)
    if ('<?php echo isset($data->validasiberkas4) ? $data->validasiberkas4 : "" ?>' === 'sudah') {
        checkpointData[4].status = 'completed';
        checkpointData[4].message = 'Surat Sudah Terbit';
    } else if ('<?php echo isset($data->validasiberkas4) ? $data->validasiberkas4 : "" ?>' === 'belum') {
        checkpointData[4].status = 'pending';
        checkpointData[4].message = 'Menunggu Terbit';
    } else if ('<?php echo isset($data->validasiberkas4) ? $data->validasiberkas4 : "" ?>' === 'ditolak') {
        checkpointData[4].status = 'rejected';
        checkpointData[4].message = 'Surat Tidak Diterbitkan';
    }

    // Bonus Step 6: validasiberkas5, kalau mau kamu tambah juga
    if (checkpointData[5]) { // pastikan ada step 6 di checkpointData kalau mau pakai
        if ('<?php echo isset($data->validasiberkas5) ? $data->validasiberkas5 : "" ?>' === 'sudah') {
            checkpointData[5].status = 'completed';
            checkpointData[5].message = 'Step 6 Selesai';
        } else if ('<?php echo isset($data->validasiberkas5) ? $data->validasiberkas5 : "" ?>' === 'belum') {
            checkpointData[5].status = 'pending';
            checkpointData[5].message = 'Menunggu Step 6';
        } else if ('<?php echo isset($data->validasiberkas5) ? $data->validasiberkas5 : "" ?>' === 'ditolak') {
            checkpointData[5].status = 'rejected';
            checkpointData[5].message = 'Step 6 Ditolak';
        }
    }
}


    function renderCheckpoints() {
        const container = document.getElementById('checkpoint-container');
        container.innerHTML = '';
        const timeline = document.createElement('div');
        timeline.className = 'timeline-horizontal';

        checkpointData.forEach((checkpoint, index) => {
            const checkpointWrapper = document.createElement('div');
            checkpointWrapper.className = 'checkpoint-wrapper';

            const dotConnectorContainer = document.createElement('div');
            dotConnectorContainer.className = 'dot-connector-container';

            const dot = document.createElement('div');
            dot.className = `dot ${checkpoint.status}`;
            dot.textContent = checkpoint.id;
            dotConnectorContainer.appendChild(dot);

            if (index < checkpointData.length - 1) {
                const connector = document.createElement('div');
                connector.className = `connector ${checkpoint.status === 'completed' ? 'active' : ''}`;
                dotConnectorContainer.appendChild(connector);
            }

            const content = document.createElement('div');
            content.className = 'checkpoint-content';

            const name = document.createElement('div');
            name.className = 'checkpoint-name';
            name.textContent = checkpoint.name;
            content.appendChild(name);

            const message = document.createElement('div');
            message.className = 'message';
            message.textContent = checkpoint.message;
            content.appendChild(message);

            checkpointWrapper.appendChild(dotConnectorContainer);
            checkpointWrapper.appendChild(content);
            timeline.appendChild(checkpointWrapper);
        });

        container.appendChild(timeline);
        updateCurrentStatus();
    }

    function updateCurrentStatus() {
        const statusInfo = document.getElementById('current-status');
        let currentStatus = '';
        let currentMessage = '';

        for (let i = checkpointData.length - 1; i >= 0; i--) {
            if (checkpointData[i].status === 'completed' || checkpointData[i].status === 'rejected') {
                currentStatus = checkpointData[i].name;
                currentMessage = checkpointData[i].message;
                break;
            }
        }

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
            statusInfo.innerHTML = `<strong>Status saat ini:</strong> ${currentStatus}<br><em>${currentMessage}</em>`;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateCheckpointStatus();
        renderCheckpoints();
    });
</script>

<style>
  /* Container utama dengan max-width dan padding kiri kanan agar tidak nabrak */
  .container-status {
    max-width: 900px;
    margin: 30px auto;
    background-color: #fafafa;
    padding: 25px 30px 35px 30px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
  }

  .container-status h6 {
    text-align: center;
    font-weight: 700;
    margin-bottom: 25px;
    font-size: 1.3rem;
    color: #222;
  }

  /* Timeline horizontal utama */
  .timeline-horizontal {
    display: flex;
    justify-content: space-between;
    flex-wrap: nowrap;
    gap: 15px;
  }

  /* Wrapper tiap checkpoint */
  .checkpoint-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-width: 140px;
    flex: 1;
    position: relative;
  }

  /* Container dot dan connector */
  .dot-connector-container {
    display: flex;
    align-items: center;
    position: relative;
    width: 100%;
    justify-content: center;
  }

  /* Dot bulatan */
  .dot {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1rem;
    z-index: 2;
    position: relative;
    flex-shrink: 0;
    cursor: default;
    user-select: none;
  }

  .dot.completed {
    background-color: #4CAF50;
    color: white;
    box-shadow: 0 0 10px #4CAF50AA;
  }

  .dot.rejected {
    background-color: #f44336;
    color: white;
    box-shadow: 0 0 10px #f44336AA;
  }

  .dot.pending {
    background-color: #e0e0e0;
    color: #777;
    border: 2px solid #bbb;
  }

  /* Connector garis */
  .connector {
    position: absolute;
    top: 50%;
    left: 50%;
    height: 6px;
    width: 100%;
    transform: translateY(-50%);
    background-color: #e0e0e0;
    z-index: 1;
    border-radius: 3px;
    transition: background-color 0.3s ease;
  }

  .connector.active {
    background-color: #4CAF50;
    box-shadow: 0 0 8px #4CAF50AA;
  }

  /* Konten checkpoint (nama & pesan) */
  .checkpoint-content {
    margin-top: 12px;
    text-align: center;
    padding: 0 10px;
    max-width: 160px;
    font-size: 14px;
    line-height: 1.3;
    color: #444;
    user-select: none;
  }

  .checkpoint-name {
    font-weight: 600;
    margin-bottom: 6px;
    color: #222;
  }

  .message {
    font-style: italic;
    font-size: 13px;
    color: #666;
  }

  /* Status info di bawah timeline */
  .control-panel {
    margin-top: 25px;
    text-align: center;
    font-size: 15px;
    color: #2c3e50;
  }

  .status-info strong {
    color: #1a73e8;
  }

  /* Responsive untuk layar kecil */
  @media (max-width: 768px) {
    .timeline-horizontal {
      flex-direction: column;
      gap: 30px;
      align-items: flex-start;
    }

    .checkpoint-wrapper {
      flex-direction: row;
      align-items: center;
      min-width: auto;
    }

    .dot-connector-container {
      width: auto;
      margin-right: 15px;
    }

    .connector {
      position: static;
      width: 50px;
      height: 6px;
      margin: 0 15px 0 0;
      transform: none;
      border-radius: 3px;
    }

    .checkpoint-content {
      margin-top: 0;
      margin-left: 0;
      text-align: left;
      max-width: none;
      flex: 1;
    }
  }
</style>

{{-- ---------------------------------------------------------------------------- --}}
{{-- ---------------------------------------------------------------------------- --}}

<hr>
<br>

<h5 style="color: navy; font-weight:800; font-size:16px; margin-left:50px;">I. INFORMASI BERKAS PERMOHONAN PERLOMBAAN SAUDARA</h5>

<div class="table-responsive-wrapper" style="padding: 0 15px;">
  <div class="table-responsive">
    <table class="zebra-table table-striped" style="font-size:16px; width: 100%" >
      <thead>
        <tr>
          <th style="text-align: center;"><i class="bi bi-hash" style="margin-right:6px;"></i> No</th>
          <th><i class="bi bi-card-text" style="margin-right:6px;"></i> Informasi</th>
          <th style="text-align: center;"><i class="bi bi-three-dots" style="margin-right:6px;"></i> :</th>
          <th><i class="bi bi-info-circle" style="margin-right:6px;"></i> Keterangan</th>
        </tr>
      </thead>
      <tbody>
      <tr>
  <td style="text-align: center;">1</td>
  <td style="text-align: left;"><i class="bi bi-people" style="margin-right:6px;"></i> Nama Tim</td>
  <td style="text-align: center;">:</td>
  <td style="text-align: left;">{{ $data->nama_tim ?? '-' }}</td>
</tr>
<tr>
  <td style="text-align: center;">2</td>
  <td style="text-align: left;"><i class="bi bi-building" style="margin-right:6px;"></i> Nama Organisasi</td>
  <td style="text-align: center;">:</td>
  <td style="text-align: left;">{{ $data->nama_organisasi ?? '-' }}</td>
</tr>
<tr>
  <td style="text-align: center;">3</td>
  <td style="text-align: left;"><i class="bi bi-geo-alt" style="margin-right:6px;"></i> Kota</td>
  <td style="text-align: center;">:</td>
  <td style="text-align: left;">{{ $data->kota ?? '-' }}</td>
</tr>
<tr>
  <td style="text-align: center;">4</td>
  <td style="text-align: left;"><i class="bi bi-flag" style="margin-right:6px;"></i> Provinsi</td>
  <td style="text-align: center;">:</td>
  <td style="text-align: left;">{{ $data->provinsi->nama ?? '-' }}</td>
</tr>
<tr>
  <td style="text-align: center;">5</td>
  <td style="text-align: left;"><i class="bi bi-house" style="margin-right:6px;"></i> Alamat Organisasi</td>
  <td style="text-align: center;">:</td>
  <td style="text-align: left;">{{ $data->alamat_organisasi ?? '-' }}</td>
</tr>
<tr>
  <td style="text-align: center;">6</td>
  <td style="text-align: left;"><i class="bi bi-list" style="margin-right:6px;"></i> Kategori Perlombaan</td>
  <td style="text-align: center;">:</td>
  <td style="text-align: left;">{{ $data->kategoriperlombaan->nama ?? '-' }}</td>
</tr>

      </tbody>
    </table>
  </div>
</div>

<hr>
<br>

<h5 style="color: navy; font-weight:800; font-size:16px; margin-left: 50px;">II. KELENGKAPAN BERKAS PERSYARATAN PERLOMBAAN</h5>

<div class="table-responsive" style="padding: 0 15px;">
  <table class="zebra-table table-striped" style="width: 100%; font-size: 16px;">
    <tr>
      <td style="text-align: center; width: 50%;">
        <i class="bi bi-file-earmark-text" style="margin-right:6px;"></i> Surat Tugas Organisasi
      </td>
      <td style="text-align: center; width: 50%;">
        <i class="bi bi-heart-pulse" style="margin-right:6px;"></i> Surat Keterangan Sehat
      </td>
    </tr>
    <tr>
      <td style="text-align: center; vertical-align: top;">
        <div style="margin-top: 10px;">
          @if($data->surat_tugas_organisasi && file_exists(public_path('storage/' . $data->surat_tugas_organisasi)))
            <iframe
              src="{{ asset('storage/' . $data->surat_tugas_organisasi) }}"
              frameborder="0"
              width="100%"
              height="400px"
              style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 400px;">
            </iframe>
          @elseif($data->surat_tugas_organisasi)
            <iframe
              src="{{ asset($data->surat_tugas_organisasi) }}"
              frameborder="0"
              width="100%"
              height="400px"
              style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 400px;">
            </iframe>
          @else
            <p>Data Tidak Ditemukan !</p>
          @endif
        </div>
      </td>
      <td style="text-align: center; vertical-align: top;">
        <div style="margin-top: 10px;">
          @if($data->surat_keterangan_sehat && file_exists(public_path('storage/' . $data->surat_keterangan_sehat)))
            <iframe
              src="{{ asset('storage/' . $data->surat_keterangan_sehat) }}"
              frameborder="0"
              width="100%"
              height="400px"
              style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 400px;">
            </iframe>
          @elseif($data->surat_keterangan_sehat)
            <iframe
              src="{{ asset($data->surat_keterangan_sehat) }}"
              frameborder="0"
              width="100%"
              height="400px"
              style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 400px;">
            </iframe>
          @else
            <p>Data Tidak Ditemukan !</p>
          @endif
        </div>
      </td>
    </tr>

    <tr>
      <td style="text-align: center; width: 50%;">
        <i class="bi bi-cash-stack" style="margin-right:6px;"></i> Bukti Pembayaran
      </td>
      <td style="text-align: center; width: 50%;">
        <i class="bi bi-file-earmark-check" style="margin-right:6px;"></i> Surat Pernyataan
      </td>
    </tr>
    <tr>
      <td style="text-align: center; vertical-align: top;">
        <div style="margin-top: 10px;">
          @if($data->bukti_pembayaran && file_exists(public_path('storage/' . $data->bukti_pembayaran)))
            <iframe
              src="{{ asset('storage/' . $data->bukti_pembayaran) }}"
              frameborder="0"
              width="100%"
              height="400px"
              style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 400px;">
            </iframe>
          @elseif($data->bukti_pembayaran)
            <iframe
              src="{{ asset($data->bukti_pembayaran) }}"
              frameborder="0"
              width="100%"
              height="400px"
              style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 400px;">
            </iframe>
          @else
            <p>Data Tidak Ditemukan !</p>
          @endif
        </div>
      </td>
      <td style="text-align: center; vertical-align: top;">
        <div style="margin-top: 10px;">
          @if($data->surat_pernyataan && file_exists(public_path('storage/' . $data->surat_pernyataan)))
            <iframe
              src="{{ asset('storage/' . $data->surat_pernyataan) }}"
              frameborder="0"
              width="100%"
              height="400px"
              style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 400px;">
            </iframe>
          @elseif($data->surat_pernyataan)
            <iframe
              src="{{ asset($data->surat_pernyataan) }}"
              frameborder="0"
              width="100%"
              height="400px"
              style="transform: scale(0.8); transform-origin: top left; width: 125%; height: 400px;">
            </iframe>
          @else
            <p>Data Tidak Ditemukan !</p>
          @endif
        </div>
      </td>
    </tr>
  </table>
</div>

<br>
<div class="card">
    <div class="card-body">
        <form action="{{ route('validasikrkusaha', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                <table class="zebra-table table-striped">
                    <thead style="font-size: 16px; background-color: green; color: white;">
                        <!-- Surat Tugas Organisasi -->
                        <tr>
                            <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;">
                                <i class="bi bi-file-earmark-text-fill"></i> Surat Tugas Organisasi
                            </th>
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center;">
                                    <button type="button" class="button-berkas" data-bs-toggle="modal" data-bs-target="#modalSuratTugas{{ $data->id }}">
                                        <i class="bi bi-eye" style="margin-right: 6px;"></i> Lihat
                                    </button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalSuratTugas{{ $data->id }}" tabindex="-1" aria-labelledby="modalSuratTugasLbl{{ $data->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="/assets/abgblora/logo/logokabupatenblora.png" width="25" class="me-2">
                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                <h5 class="modal-title" id="modalSuratTugasLbl{{ $data->id }}">Surat Tugas Organisasi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div style="margin-top: 10px;">
                                                    @if($data->surat_tugas_organisasi && file_exists(public_path('storage/' . $data->surat_tugas_organisasi)))
                                                        <iframe src="{{ asset('storage/' . $data->surat_tugas_organisasi) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                    @elseif($data->surat_tugas_organisasi)
                                                        <iframe src="{{ asset($data->surat_tugas_organisasi) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                    @else
                                                        <p>Data belum diupdate</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <!-- Verification Status for peserta -->
                            @canany(['peserta'])
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center; padding: 10px 0;">
                                    <div class="custom-status {{ $data->verifikasi_surat_tugas == 'sesuai' ? 'sesuai' : ($data->verifikasi_surat_tugas == 'tidak_sesuai' ? 'tidak_sesuai' : 'pending') }}">
                                        <span class="custom-box"></span>
                                        @if ($data->verifikasi_surat_tugas === 'tidak_sesuai')
                                            Silahkan Lakukan Perbaikan
                                        @elseif ($data->verifikasi_surat_tugas === 'sesuai')
                                            Berkas Anda Sudah Sesuai
                                        @else
                                            Sedang Di Verifikasi Panitia
                                        @endif
                                    </div>
                                </div>
                            </th>
                            @endcanany
                            <!-- Verification Options for Admin -->
                            @canany(['super_admin', 'admin'])
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center; gap: 20px;">
                                    <label class="custom-radio">
                                        <input type="radio" name="verifikasi_surat_tugas" value="sesuai" {{ $data->verifikasi_surat_tugas == 'sesuai' ? 'checked' : '' }}>
                                        <span class="custom-box"></span>
                                        Sesuai
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="verifikasi_surat_tugas" value="tidak_sesuai" {{ $data->verifikasi_surat_tugas == 'tidak_sesuai' ? 'checked' : '' }}>
                                        <span class="custom-box"></span>
                                        Tidak Sesuai
                                    </label>
                                </div>
                            </th>
                            @endcanany
                        </tr>

                        <!-- Surat Keterangan Sehat -->
                        <tr>
                            <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;">
                                <i class="bi bi-file-medical-fill"></i> Surat Keterangan Sehat
                            </th>
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center;">
                                    <button type="button" class="button-berkas" data-bs-toggle="modal" data-bs-target="#modalSuratSehat{{ $data->id }}">
                                        <i class="bi bi-eye" style="margin-right: 6px;"></i> Lihat
                                    </button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalSuratSehat{{ $data->id }}" tabindex="-1" aria-labelledby="modalSuratSehatLbl{{ $data->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="/assets/abgblora/logo/logokabupatenblora.png" width="25" class="me-2">
                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                <h5 class="modal-title" id="modalSuratSehatLbl{{ $data->id }}">Surat Keterangan Sehat</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div style="margin-top: 10px;">
                                                    @if($data->surat_keterangan_sehat && file_exists(public_path('storage/' . $data->surat_keterangan_sehat)))
                                                        <iframe src="{{ asset('storage/' . $data->surat_keterangan_sehat) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                    @elseif($data->surat_keterangan_sehat)
                                                        <iframe src="{{ asset($data->surat_keterangan_sehat) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                    @else
                                                        <p>Data belum diupdate</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <!-- Verification Status for peserta -->
                            @canany(['peserta'])
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center; padding: 10px 0;">
                                    <div class="custom-status {{ $data->verifikasi_surat_sehat == 'sesuai' ? 'sesuai' : ($data->verifikasi_surat_sehat == 'tidak_sesuai' ? 'tidak_sesuai' : 'pending') }}">
                                        <span class="custom-box"></span>
                                        @if ($data->verifikasi_surat_sehat === 'tidak_sesuai')
                                            Silahkan Lakukan Perbaikan
                                        @elseif ($data->verifikasi_surat_sehat === 'sesuai')
                                            Berkas Anda Sudah Sesuai
                                        @else
                                            Sedang Di Verifikasi Panitia
                                        @endif
                                    </div>
                                </div>
                            </th>
                            @endcanany
                            <!-- Verification Options for Admin -->
                            @canany(['super_admin', 'admin'])
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center; gap: 20px;">
                                    <label class="custom-radio">
                                        <input type="radio" name="verifikasi_surat_sehat" value="sesuai" {{ $data->verifikasi_surat_sehat == 'sesuai' ? 'checked' : '' }}>
                                        <span class="custom-box"></span>
                                        Sesuai
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="verifikasi_surat_sehat" value="tidak_sesuai" {{ $data->verifikasi_surat_sehat == 'tidak_sesuai' ? 'checked' : '' }}>
                                        <span class="custom-box"></span>
                                        Tidak Sesuai
                                    </label>
                                </div>
                            </th>
                            @endcanany
                        </tr>

                        <!-- Bukti Pembayaran -->
                        <tr>
                            <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;">
                                <i class="bi bi-receipt-cutoff"></i> Bukti Pembayaran
                            </th>
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center;">
                                    <button type="button" class="button-berkas" data-bs-toggle="modal" data-bs-target="#modalBuktiBayar{{ $data->id }}">
                                        <i class="bi bi-eye" style="margin-right: 6px;"></i> Lihat
                                    </button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalBuktiBayar{{ $data->id }}" tabindex="-1" aria-labelledby="modalBuktiBayarLbl{{ $data->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="/assets/abgblora/logo/logokabupatenblora.png" width="25" class="me-2">
                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                <h5 class="modal-title" id="modalBuktiBayarLbl{{ $data->id }}">Bukti Pembayaran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div style="margin-top: 10px;">
                                                    @if($data->bukti_pembayaran && file_exists(public_path('storage/' . $data->bukti_pembayaran)))
                                                        <iframe src="{{ asset('storage/' . $data->bukti_pembayaran) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                    @elseif($data->bukti_pembayaran)
                                                        <iframe src="{{ asset($data->bukti_pembayaran) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                    @else
                                                        <p>Data belum diupdate</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <!-- Verification Status for peserta -->
                            @canany(['peserta'])
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center; padding: 10px 0;">
                                    <div class="custom-status {{ $data->verifikasi_bukti_bayar == 'sesuai' ? 'sesuai' : ($data->verifikasi_bukti_bayar == 'tidak_sesuai' ? 'tidak_sesuai' : 'pending') }}">
                                        <span class="custom-box"></span>
                                        @if ($data->verifikasi_bukti_bayar === 'tidak_sesuai')
                                            Silahkan Lakukan Perbaikan
                                        @elseif ($data->verifikasi_bukti_bayar === 'sesuai')
                                            Berkas Anda Sudah Sesuai
                                        @else
                                            Sedang Di Verifikasi Panitia
                                        @endif
                                    </div>
                                </div>
                            </th>
                            @endcanany
                            <!-- Verification Options for Admin -->
                            @canany(['super_admin', 'admin'])
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center; gap: 20px;">
                                    <label class="custom-radio">
                                        <input type="radio" name="verifikasi_bukti_bayar" value="sesuai" {{ $data->verifikasi_bukti_bayar == 'sesuai' ? 'checked' : '' }}>
                                        <span class="custom-box"></span>
                                        Sesuai
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="verifikasi_bukti_bayar" value="tidak_sesuai" {{ $data->verifikasi_bukti_bayar == 'tidak_sesuai' ? 'checked' : '' }}>
                                        <span class="custom-box"></span>
                                        Tidak Sesuai
                                    </label>
                                </div>
                            </th>
                            @endcanany
                        </tr>

                        <!-- Surat Pernyataan -->
                        <tr>
                            <th style="width: 400px; text-align:left; font-size: 16px; background-color: #e2e8f0; color: black;">
                                <i class="bi bi-file-earmark-check-fill"></i> Surat Pernyataan
                            </th>
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center;">
                                    <button type="button" class="button-berkas" data-bs-toggle="modal" data-bs-target="#modalSuratPernyataan{{ $data->id }}">
                                        <i class="bi bi-eye" style="margin-right: 6px;"></i> Lihat
                                    </button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalSuratPernyataan{{ $data->id }}" tabindex="-1" aria-labelledby="modalSuratPernyataanLbl{{ $data->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="/assets/abgblora/logo/logokabupatenblora.png" width="25" class="me-2">
                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                <h5 class="modal-title" id="modalSuratPernyataanLbl{{ $data->id }}">Surat Pernyataan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div style="margin-top: 10px;">
                                                    @if($data->surat_pernyataan && file_exists(public_path('storage/' . $data->surat_pernyataan)))
                                                        <iframe src="{{ asset('storage/' . $data->surat_pernyataan) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                    @elseif($data->surat_pernyataan)
                                                        <iframe src="{{ asset($data->surat_pernyataan) }}" frameborder="0" width="100%" height="750px"></iframe>
                                                    @else
                                                        <p>Data belum diupdate</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <!-- Verification Status for peserta -->
                            @canany(['peserta'])
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center; padding: 10px 0;">
                                    <div class="custom-status {{ $data->verifikasi_surat_pernyataan == 'sesuai' ? 'sesuai' : ($data->verifikasi_surat_pernyataan == 'tidak_sesuai' ? 'tidak_sesuai' : 'pending') }}">
                                        <span class="custom-box"></span>
                                        @if ($data->verifikasi_surat_pernyataan === 'tidak_sesuai')
                                            Silahkan Lakukan Perbaikan
                                        @elseif ($data->verifikasi_surat_pernyataan === 'sesuai')
                                            Berkas Anda Sudah Sesuai
                                        @else
                                            Sedang Di Verifikasi Panitia
                                        @endif
                                    </div>
                                </div>
                            </th>
                            @endcanany
                            <!-- Verification Options for Admin -->
                            @canany(['super_admin', 'admin'])
                            <th class="text-center" style="background-color: #e2e8f0; color: black;">
                                <div style="display: flex; justify-content: center; gap: 20px;">
                                    <label class="custom-radio">
                                        <input type="radio" name="verifikasi_surat_pernyataan" value="sesuai" {{ $data->verifikasi_surat_pernyataan == 'sesuai' ? 'checked' : '' }}>
                                        <span class="custom-box"></span>
                                        Sesuai
                                    </label>
                                    <label class="custom-radio">
                                        <input type="radio" name="verifikasi_surat_pernyataan" value="tidak_sesuai" {{ $data->verifikasi_surat_pernyataan == 'tidak_sesuai' ? 'checked' : '' }}>
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

            @can('peserta')
            <div class="mb-3" style="margin-top: -50px;">
                <label for="catatanvalidasi" class="form-label" style="color: navy">
                    <i class="bi bi-card-text me-1" style="color: navy;"></i>
                    <span style="color: navy;">Catatan Keterangan Berkas</span>
                </label>
                <div class="form-control" style="min-height: 400px; white-space: pre-wrap; background-color: #f8f9fa; color: black;">
                    {{ $data->catatanvalidasi ?? '-' }}
                </div>
            </div>
            @endcan

            @canany(['super_admin', 'admin'])
            <div class="mb-3" style="margin-top: -50px;">
                <label for="catatanvalidasi" class="form-label">
                    <i class="bi bi-card-text me-1"></i> Catatan Keterangan Berkas
                </label>
                <textarea name="catatanvalidasi" id="catatanvalidasi" class="form-control"
                    rows="10"
                    style="resize: vertical; width: 100%; color: black;"
                    placeholder="Tulis catatan jika diperlukan...">{{ old('catatanvalidasi', $data->catatanvalidasi ?? '') }}</textarea>
            </div>
            @endcanany

            @canany(['super_admin', 'admin'])
            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                <div class="flex justify-end">
                    <button class="button-baru" type="button" onclick="openModal()">
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
            </div>
            @endcanany
        </form>
    </div>
</div>

<script>
function openModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "flex";
}

function closeModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "none";
}

function submitForm() {
    document.forms[0].submit();
}
</script>

<style>
  /* Container yang kasih jarak kiri dan kanan */
  .table-responsive-wrapper {
    padding-left: 15px;
    padding-right: 15px;
    margin-bottom: 1.5rem;
  }

  /* Buat tabel responsive dengan scroll horizontal */
  .table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; /* smooth scroll di iOS */
  }

  /* Zebra stripe table styling */
  .zebra-table {
    border-collapse: collapse;
    width: 100%;
  }

  .zebra-table tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  .zebra-table th,
  .zebra-table td {
    padding: 12px 10px;
    border: 1px solid #ddd;
  }

  /* Responsive font size kecil jika perlu */
  @media (max-width: 576px) {
    .zebra-table th, .zebra-table td {
      font-size: 14px;
      padding: 8px 6px;
    }
  }
</style>

{{-- sampai sini  --}}


<style>
/* Main Wrapper */
.content-form-wrapper {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* Form Styling */
.full-width-form {
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
}

.form-card-body {
    padding: 24px 32px;
}

/* Form Layout */
.form-row {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    margin-bottom: 16px;
}

.form-column {
    flex: 1;
    min-width: 300px;
}

/* Form Elements */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #2d3748;
    font-size: 14px;
}

.form-icon {
    margin-right: 8px;
    color: #3b82f6;
}

.form-control {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 14px;
    transition: border-color 0.3s;
    background-color: #f8fafc;
}

.form-control:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.is-invalid {
    border-color: #ef4444;
}

.invalid-feedback {
    color: #ef4444;
    font-size: 12px;
    margin-top: 4px;
}

/* Footer and Buttons */
.form-footer {
    display: flex;
    justify-content: flex-end;
    padding: 20px 32px;
    background: #f9fafb;
    border-top: 1px solid #e5e7eb;
}

.submit-button {
    background-color: #3b82f6;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-weight: 500;
    display: flex;
    align-items: center;
    transition: all 0.3s;
}

.submit-button:hover {
    background-color: #2563eb;
    transform: translateY(-1px);
}

.button-icon {
    margin-right: 8px;
    font-size: 14px;
}

.button-text {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
}

/* Modal Styles */
.confirmation-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    padding: 24px 30px;
    border-radius: 12px;
    max-width: 400px;
    width: 90%;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.modal-message {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #2d3748;
}

.modal-buttons {
    display: flex;
    justify-content: center;
    gap: 12px;
}

.confirm-button, .cancel-button {
    padding: 8px 16px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
}

.confirm-button {
    background-color: #10B981;
    color: white;
}

.confirm-button:hover {
    background-color: #059669;
}

.cancel-button {
    background-color: #EF4444;
    color: white;
}

.cancel-button:hover {
    background-color: #DC2626;
}

.button-svg {
    height: 16px;
    width: 16px;
    fill: currentColor;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 16px;
    }

    .form-column {
        min-width: 100%;
    }

    .form-card-body {
        padding: 20px;
    }

    .form-footer {
        padding: 16px 20px;
    }
}
</style>

<script>
function openModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "flex";
}

function closeModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "none";
}

function submitForm() {
    document.querySelector('.full-width-form').submit();
}
</script>

</div>

<style>
    .table-container {
  width: 100%;
  overflow-x: auto; /* Scroll horizontal jika layar kecil */
}

.responsive-table {
  width: 100%;
  border-collapse: collapse;
  min-width: 300px;
  font-family: Arial, sans-serif;
}

/* Border & text */
.responsive-table th,
.responsive-table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: center;
}

/* Header merah maroon */
.responsive-table th {
  background-color: #800000; /* maroon */
  color: #fff;
}

/* Belang abu-abu */
.responsive-table tbody tr:nth-child(even) {
  background-color: #f7f7f7; /* abu tipis */
}
.responsive-table tbody tr:nth-child(odd) {
  background-color: #ffffff; /* putih */
}

/* Logo bulat */
.logo-circle {
  width: 50px;
  height: 50px;
  background: #ddd;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.logo-svg {
  width: 30px;
  height: 30px;
}

.logo-path {
  fill: #000;
}

/* Mobile friendly */
@media (max-width: 600px) {
  .responsive-table th,
  .responsive-table td {
    font-size: 14px;
    padding: 8px;
  }
}

</style>
    </div>
  </div>

  <!-- JS -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleSidebar = document.getElementById('toggleSidebar');
    const overlay = document.getElementById('overlay');
    const mainContent = document.querySelector('.main-content');

    toggleSidebar.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      overlay.classList.toggle('active');
      mainContent.style.filter = sidebar.classList.contains('active') ? 'blur(2px)' : 'none';
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
      mainContent.style.filter = 'none';
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 768) {
        sidebar.classList.add('active');
        overlay.classList.remove('active');
        mainContent.style.filter = 'none';
      } else {
        sidebar.classList.remove('active');
      }
    });
  </script>

  <br><br><br><br><br><br><br><br><br>
</body>
</html>

