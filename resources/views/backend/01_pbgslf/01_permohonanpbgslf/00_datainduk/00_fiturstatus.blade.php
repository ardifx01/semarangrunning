
<div class="container" style="margin-top: 25px;">
    <h6 style="text-align:center;">Status Permohonan !</h6>
    <div id="checkpoint-container" class="timeline-container"></div>

    <div class="control-panel">
        <button id="simulate-btn" style="display: none;"></button>
        <div style="text-align: center;" class="status-info" id="current-status"></div>
    </div>
</div>

<script>
    // Data checkpoint - diupdate sesuai data PHP
    const checkpointData = [
        {
            id: 1,
            name: 'Berkas Permohonan',
            status: 'completed',
            time: '<?php echo isset($data->created_at) ? $data->created_at : date("Y-m-d H:i:s") ?>',
            message: ''
        },
        {
            id: 2,
            name: 'Dokumen Pemohon',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas1_time) ? $data->validasiberkas1_time : "" ?>',
            message: 'Menunggu Verifikasi DPUPR'
        },
        {
            id: 3,
            name: 'Surat Pemberitahuan',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas2_time) ? $data->validasiberkas2_time : "" ?>',
            message: 'Belum Terbit'
        },
        {
            id: 4,
            name: 'Pemilihan TPA/TPT',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas3_time) ? $data->validasiberkas3_time : "" ?>',
            message: 'Menunggu DPUPR'
        },
        {
            id: 5,
            name: 'Surat Undangan',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas4_time) ? $data->validasiberkas4_time : "" ?>',
            message: 'Menunggu Terbit'
        },
        {
            id: 6,
            name: 'Berita Acara',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas5_time) ? $data->validasiberkas5_time : "" ?>',
            message: 'Menunggu Olah Data'
        },
        {
            id: 7,
            name: 'SKRD',
            status: 'pending',
            time: '<?php echo isset($data->validasiberkas6_time) ? $data->validasiberkas6_time : "" ?>',
            message: 'Menunggu Retribusi'
        }
    ];

    // Update status berdasarkan data PHP
    function updateCheckpointStatus() {
        // Step 1 otomatis completed (hijau)
        checkpointData[0].status = 'completed';
        checkpointData[0].message = '';

        // Step 2: Verifikasi Berkas (validasiberkas1)
        if ('<?php echo isset($data->validasiberkas7) ? $data->validasiberkas7 : "" ?>' === 'sudah') {
            checkpointData[1].status = 'completed';
            checkpointData[1].message = 'Dokumen Lengkap';
        } else if ('<?php echo isset($data->validasiberkas7) ? $data->validasiberkas7 : "" ?>' === 'belum') {
            checkpointData[1].status = 'rejected';
            checkpointData[1].message = 'Dokumen Tidak Lengkap';
        }

        // Step 3: Cek Lapangan (validasiberkas2)
        if ('<?php echo isset($data->validasiberkas2) ? $data->validasiberkas2 : "" ?>' === 'sudah') {
            checkpointData[2].status = 'completed';
            checkpointData[2].message = 'Terbit';
        } else if ('<?php echo isset($data->validasiberkas2) ? $data->validasiberkas2 : "" ?>' === 'belum') {
            checkpointData[2].status = 'rejected';
            checkpointData[2].message = 'Tidak Terbit!';
        }

        // Step 4: Verifikasi Data (validasiberkas3)
        if ('<?php echo isset($data->validasiberkas3) ? $data->validasiberkas3 : "" ?>' === 'sudah') {
            checkpointData[3].status = 'completed';
            checkpointData[3].message = 'TPA/TPT Selesai';
        } else if ('<?php echo isset($data->validasiberkas3) ? $data->validasiberkas3 : "" ?>' === 'belum') {
            checkpointData[3].status = 'rejected';
            checkpointData[3].message = 'Dibatalkan !';
        }

        // Step 5: Penerbitan Berkas (validasiberkas4)
        if ('<?php echo isset($data->validasiberkas4) ? $data->validasiberkas4 : "" ?>' === 'sudah') {
            checkpointData[4].status = 'completed';
            checkpointData[4].message = 'Terbit';
        } else if ('<?php echo isset($data->validasiberkas4) ? $data->validasiberkas4 : "" ?>' === 'belum') {
            checkpointData[4].status = 'rejected';
            checkpointData[4].message = 'Tidak Terbit!';
        }

        // Step 6: Distribusi Surat (distribusisurat)
        if ('<?php echo isset($data->validasiberkas5) ? $data->validasiberkas5 : "" ?>' === 'sudah') {
            checkpointData[5].status = 'completed';
            checkpointData[5].message = 'Terbit';
        } else if ('<?php echo isset($data->validasiberkas5) ? $data->validasiberkas5 : "" ?>' === 'belum') {
            checkpointData[5].status = 'pending';
            checkpointData[5].message = 'Tidak Terbit';
        }

        // Step 7: Selesai (selesai)
        if ('<?php echo isset($data->validasiberkas6) ? $data->validasiberkas6 : "" ?>' === 'sudah') {
            checkpointData[6].status = 'completed';
            checkpointData[6].message = 'Selesai';
        } else if ('<?php echo isset($data->validasiberkas6) ? $data->validasiberkas6 : "" ?>' === 'belum') {
            checkpointData[6].status = 'pending';
            checkpointData[6].message = 'Tidak Selesai';
        }
    }

    // Render checkpoint timeline
    function renderCheckpoints() {
        const container = document.getElementById('checkpoint-container');
        container.innerHTML = '';

        const timeline = document.createElement('div');
        timeline.className = 'timeline-horizontal';

        checkpointData.forEach((checkpoint, index) => {
            const checkpointWrapper = document.createElement('div');
            checkpointWrapper.className = 'checkpoint-wrapper';

            // Dot + connector container
            const dotConnectorContainer = document.createElement('div');
            dotConnectorContainer.className = 'dot-connector-container';

            // Dot circle
            const dot = document.createElement('div');
            dot.className = `dot ${checkpoint.status}`;
            dot.textContent = checkpoint.id;
            dotConnectorContainer.appendChild(dot);

            // Connector line except last
            if (index < checkpointData.length -1) {
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

            // Status message
            const message = document.createElement('div');
            message.className = 'message';
            message.textContent = checkpoint.message;
            content.appendChild(message);

            // Format and add time if valid
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

    // Format waktu dengan validasi robust
    function formatTime(dateString) {
        try {
            if (!dateString || dateString.trim() === '' || dateString === '0000-00-00 00:00:00') {
                return null;
            }

            const date = new Date(dateString);
            if (isNaN(date.getTime())) {
                const mysqlPattern = /^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/;
                const match = dateString.match(mysqlPattern);
                if (match) {
                    const [_, year, month, day, hours, minutes, seconds] = match;
                    const newDate = new Date(year, month - 1, day, hours, minutes, seconds);
                    if (!isNaN(newDate.getTime())) {
                        return newDate.toLocaleDateString('id-ID', {
                            day: 'numeric', month: 'long', year: 'numeric',
                            hour: '2-digit', minute: '2-digit'
                        });
                    }
                }
                return null;
            }

            return date.toLocaleDateString('id-ID', {
                day: 'numeric', month: 'long', year: 'numeric',
                hour: '2-digit', minute: '2-digit'
            });
        } catch(e) {
            console.error('Error formatting time:', e);
            return null;
        }
    }

    // Update teks status saat ini
    function updateCurrentStatus() {
        const statusInfo = document.getElementById('current-status');
        let currentStatus = '';
        let currentMessage = '';

        for(let i = checkpointData.length - 1; i >= 0; i--) {
            if (checkpointData[i].status === 'completed' || checkpointData[i].status === 'rejected') {
                currentStatus = checkpointData[i].name;
                currentMessage = checkpointData[i].message;
                break;
            }
        }

        if (!currentStatus) {
            for(let i=0; i < checkpointData.length; i++) {
                if(checkpointData[i].status === 'pending') {
                    currentStatus = checkpointData[i].name;
                    currentMessage = checkpointData[i].message;
                    break;
                }
            }
        }

        if(currentStatus) {
            statusInfo.innerHTML = `<strong>Status saat ini:</strong> ${currentStatus}<br><em>${currentMessage}</em>`;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateCheckpointStatus();
        renderCheckpoints();
    });
</script>

<style>
    /* Timeline container */
    .timeline-horizontal {
        display: flex;
        width: 100%;
        padding: 20px 0;
        position: relative;
        flex-wrap: wrap;
    }

    /* Checkpoint wrapper */
    .checkpoint-wrapper {
        display: flex;
        flex: 1;
        min-width: 150px;
        position: relative;
        flex-direction: column;
        align-items: center;
    }

    /* Dot + connector container */
    .dot-connector-container {
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: center;
        position: relative;
    }

    /* Dot style */
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

    /* Dot status colors */
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

    /* Connector line */
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

    /* Content */
    .checkpoint-content {
        margin-top: 10px;
        text-align: center;
        padding: 0 10px;
        word-wrap: break-word;
        max-width: 140px;
        font-size: 14px;
    }

    /* Hide connector for last */
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

@include('backend.01_pbgslf.01_permohonanpbgslf.00_datainduk.00_fiturvalidasi')

{{-- @include('backend.00_administrator.00_baganterpisah.01_header') --}}
{{--
@include('backend.01_pbgslf.01_permohonanpbgslf.00_datainduk.00_fiturvalidasi') --}}


