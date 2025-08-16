
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

        <div class="header-left"><h3>Dashboard SNOC X | Selamat Datang <span>{{ $user?->name ?? 'Data Belum Diupdate' }}</span></h3></div>
        <div class="header-right">
          <div class="toggle-sidebar" id="toggleSidebar"><i class="fas fa-bars"></i></div>
          <div class="user-profile">
                <span>{{ $user?->statusadmin?->statusadmin ?? 'Data Belum Diupdate' }}</span>
            {{-- <span>{{ $auth->user()?->statusadmin?->statusadmin }}</span> --}}
        </div>
        </div>
      </div>

      <div class="content">

        @canany(['super_admin', 'keuangan'])

        <div style="text-align: right; margin-top: 10px;">
            <button class="button-baru">
                <i class="bi bi-card-text me-1"></i> {{$title}}
</button>
<button class="button-baru">
    <i class="bi bi-cash-stack me-1"></i> Total Uang Masuk: Rp {{ number_format($totalUangMasuk, 0, ',', '.') }}
</button>

</div>

<br>
@endcanany

<div style="overflow-x:auto; width: 100%;">
  <table style="min-width: 1200px; border-collapse: collapse; width: max-content; border: 1px solid #ccc;">
    <thead>
      <tr>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">No</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;" >Nama TIM</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Nama Organisasi</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Alamat Organisasi</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Jenis Kelamin <br> Anggota Tim</th>
        @can('super_admin')
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Verifikasi <br> Persyaratan </th>
        <th style="width: 500px; background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Daftar <br> Ulang </th>
        @endcan
        @can('keuangan')
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Uang Masuk</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Keterangan Bayar <br> <span style="font-size: 12px;">Contoh : Early Bird</span></th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Status Pembayaran</th>
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Masukan Nominal</th>
            {{-- <span style="font-size: 10px;">Contoh : Early Bird</span> --}}
        </th>
        @endcan
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Berkas <br> Pendaftaran</th>
        @can('super_admin')
        <th style="background-color: maroon; color: white; text-align: center; border: 1px solid #ccc;">Aksi</th>
        @endcan
        {{-- <th>Tanggal Lahir</th>
        <th>NIK</th>
        <th>No. Telepon</th>
        <th>Foto</th> --}}
        {{-- <th style="width: 150px;">Aksi</th> --}}
      </tr>
    </thead>
    <tbody>
      @forelse($data as $item)
      <tr>
        <td>{{ $loop->iteration }}</td> <!-- nomor urut -->
        <td>{{ $item->nama_tim ?? '-' }}</td>
        <td>{{ $item->nama_organisasi ?? '-' }}</td>

        <td>{{ $item->alamat_organisasi ?? '-' }}</td>
        <td>
    @foreach($item->daftartims as $tim)
        <p>Nama Lengkap: {{ $tim->namalengkap ?? '-' }}</p>

        <p>
            Jenis Kelamin:
            @if($tim->jeniskelamin == 'Laki-laki')
            <span class="button-hijau">{{ $tim->jeniskelamin ?? '-' }}</span>
            @elseif($tim->jeniskelamin == 'Perempuan')
            <span class="button-maroon">{{ $tim->jeniskelamin ?? '-' }}</span>
            @else
        <span>{{ $tim->jeniskelamin ?? '-' }}</span>
        @endif
    </p>
    <p>

    <p>
    Usia Peserta:
    @if($tim->ttl)
        {{ \Carbon\Carbon::parse($tim->ttl)->age ?? '-' }} Tahun
    @else
        -
    @endif
</p>
        {{-- Tambahkan field lain sesuai schema --}}
    @endforeach

        </td>

    {{-- Daftartim user pemilik berkas --}}

        @can('super_admin')

<td>
    @php
        $status = strtolower($item->validasiberkas1 ?? '');
        @endphp

@if($status === 'lolos')
<span class="button-hijau">
    <i class="bi bi-patch-check-fill"></i> Lolos
</span>
@elseif($status === 'dikembalikan')
<span class="button-merah">
    <i class="bi bi-x-circle-fill"></i> Dikembalikan
</span>
@else
<span class="button-newvalidasi">
    <i class="bi bi-hourglass-split"></i> Belum Di Verifikasi
</span>
    @endif
</td>
<td>
    @php
        $status3 = strtolower($item->validasiberkas7 ?? '');
        @endphp

@if($status3 === 'sudah')
<span class="button-hijau">
    <i class="bi bi-patch-check-fill"></i> Sudah Daftar Ulang
</span>
@else
<span class="button-newvalidasi">
    <i class="bi bi-hourglass-split"></i> Belum Daftar Ulang
</span>
@endif

{{-- Tombol lihat dokumen --}}
<button type="button" class="button-baru btn-open-card-cadangan-show"
data-id="{{ $item->id }}"
data-cadangan1="{{ $item->cadangan1 }}"
data-cadangan2="{{ $item->cadangan2 }}"
data-cadangan3="{{ $item->cadangan3 }}"
data-cadangan4="{{ $item->cadangan4 }}"
data-cadangan5="{{ $item->cadangan5 }}">
<i class="bi bi-eye"></i> Lihat
</button>

<script>
document.querySelectorAll('.btn-open-card-cadangan-show').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.dataset.id;
        const cad1 = this.dataset.cadangan1 || 'belum';
        const cad2 = this.dataset.cadangan2 || 'belum';
        const cad3 = this.dataset.cadangan3 || 'belum';
        const cad4 = this.dataset.cadangan4 || 'belum';
        const cad5 = this.dataset.cadangan5 || 'belum';

        // Hapus modal lama
        const oldCard = document.getElementById('modalCardCadanganShow');
        if(oldCard) oldCard.remove();

        // Buat modal tampilan data
        const cardHtml = document.createElement('div');
        cardHtml.id = 'modalCardCadanganShow';
        cardHtml.style.position = 'fixed';
        cardHtml.style.top = '50%';
        cardHtml.style.left = '50%';
        cardHtml.style.transform = 'translate(-50%, -50%)';
        cardHtml.style.background = '#fff';
        cardHtml.style.boxShadow = '0 4px 12px rgba(0,0,0,0.2)';
        cardHtml.style.padding = '20px';
        cardHtml.style.zIndex = '1050';
        cardHtml.style.borderRadius = '12px';
        cardHtml.style.minWidth = '400px';
        cardHtml.innerHTML = `
        <button type="button" class="button-baru mb-3" style="width:100%; text-align:left;">
            Hasil Kelengkapan Berkas
            </button>

            <ul style="list-style:none; padding:0; margin:0;">
                <li><i class="bi bi-file-text"></i> Surat Pernyataan: <b>${cad1}</b></li>
                <li><i class="bi bi-receipt"></i> Bukti Pembayaran: <b>${cad2}</b></li>
                <li><i class="bi bi-clipboard-check"></i> Ceklist Kehadiran Daftar Ulang: <b>${cad3}</b></li>
                <li><i class="bi bi-info-circle"></i> Pengarahan Informasi Perlombaan: <b>${cad4}</b></li>
                <li><i class="bi bi-tools"></i> Pemberian Alat-Alat Perlombaan: <b>${cad5}</b></li>
            </ul>

            <div style="display:flex; justify-content:flex-end; margin-top:20px;">
                <button type="button" class="button-merah btn-close-card-show">Tutup</button>
                </div>
        `;

        document.body.appendChild(cardHtml);

        // Event close button
        cardHtml.querySelector('.btn-close-card-show').addEventListener('click', () => {
            cardHtml.remove();
        });
    });
});
</script>


{{-- Tombol cek dokumen --}}
<button type="button" class="button-berkas btn-open-card-cadangan"
data-id="{{ $item->id }}">
<i class="bi bi-list-check"></i> Cek Dok
</button>


<script>
    document.querySelectorAll('.btn-open-card-cadangan').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;

            // Hapus modal card lama kalau ada
            const oldCard = document.getElementById('modalCardCadangan');
            if(oldCard) oldCard.remove();

            // Buat modal card
            const cardHtml = document.createElement('div');
            cardHtml.id = 'modalCardCadangan';
        cardHtml.style.position = 'fixed';
        cardHtml.style.top = '50%';
        cardHtml.style.left = '50%';
        cardHtml.style.transform = 'translate(-50%, -50%)';
        cardHtml.style.background = '#fff';
        cardHtml.style.boxShadow = '0 4px 12px rgba(0,0,0,0.2)';
        cardHtml.style.padding = '20px';
        cardHtml.style.zIndex = '1050';
        cardHtml.style.borderRadius = '12px';
        cardHtml.style.minWidth = '400px';
        cardHtml.innerHTML = `
        <button type="button" class="button-baru mb-3" style="width:100%; text-align:left; margin-bottom:15px;">
            Cek Kelengkapan Berkas
            </button>

            <form action="/cekdokumenpeserta/${id}" method="POST" style="margin-top:10px;">
                @csrf
                <div class="checklist-container">
                    <label class="custom-check">
                        <input type="checkbox" name="cadangan1" value="sudah">
                        <span>1. Surat Pernyataan</span>
                        </label>
                        <label class="custom-check">
                            <input type="checkbox" name="cadangan2" value="sudah">
                            <span>2. Bukti Pembayaran</span>
                            </label>
                            <label class="custom-check">
                                <input type="checkbox" name="cadangan3" value="sudah">
                                <span>3. Ceklist Kehadiran Daftar Ulang</span>
                                </label>
                                <label class="custom-check">
                                    <input type="checkbox" name="cadangan4" value="sudah">
                                    <span>4. Pengarahan Informasi Perlombaan</span>
                                    </label>
                                    <label class="custom-check">
                                        <input type="checkbox" name="cadangan5" value="sudah">
                                        <span>5. Pemberian Alat-Alat Perlombaan</span>
                                        </label>
                                        </div>

                                        <div style="display:flex; gap:10px; justify-content:flex-end; margin-top:20px;">
                                            <button type="submit" class="button-hijau">Simpan</button>
                    <button type="button" class="button-merah btn-close-card">Tutup</button>
                    </div>
                    </form>
                    `;

                    document.body.appendChild(cardHtml);

                    // Event close button
                    cardHtml.querySelector('.btn-close-card').addEventListener('click', () => {
                        cardHtml.remove();
                    });

                    // Tambahkan style elegan untuk checkbox
                    const style = document.createElement('style');
                    style.innerHTML = `
                    .checklist-container {
                        display: flex;
                        flex-direction: column;
                        gap: 12px;
                        }
                        .custom-check {
                            display: flex;
                            align-items: center;
                            background: #fff;
                            border: 2px solid #ccc;
                            border-radius: 20px;
                            padding: 10px 15px;
                            cursor: pointer;
                            transition: all 0.3s ease;
                            font-weight: 500;
                            color: #000;
                            }
                            .custom-check input {
                                display: none;
                                }
                                .custom-check span {
                                    flex: 1;
                                    }
                                    .custom-check input:checked + span {
                                        color: #fff;
                                        }
            .custom-check input:checked + span::before {
                background: #28a745;
            }
            .custom-check input:checked ~ span {
                background: #28a745;
                border-radius: 15px;
                padding: 5px 10px;
                color: #fff;
                }
                `;
        document.head.appendChild(style);
    });
});
</script>

</td>

@endcan

@can('keuangan')
        <td>
    {{ $item->uangmasuk ? 'Rp ' . number_format($item->uangmasuk, 0, ',', '.') : '-' }}
</td>

<td>
    {{$item->keteranganuangmasuk ?? '-'}}
</td>

<td>
            @if(!empty($item->validasiberkas2))
            <button class="button-hijau" disabled>
                <i class="bi bi-check-circle-fill me-1"></i> {{ $item->validasiberkas2 }}
            </button>
            @else
            <button class="button-newvalidasi" disabled>
                <i class="bi bi-x-circle-fill me-1"></i> Diverifikasi Bendaraha
            </button>
            @endif
        </td>


      <td>

    <button type="button" class="button-berkas btn-open-card"
            data-id="{{ $item->id }}"
            data-uang="{{ $item->uangmasuk ?? 0 }}"
            data-keterangan="{{ $item->keteranganuangmasuk ?? '' }}">
        <i class="bi bi-eye"></i> Input Uang Masuk
    </button>

</td>



<script>
document.querySelectorAll('.btn-open-card').forEach(button => {
    button.addEventListener('click', function() {
        const id = this.dataset.id;
        const uangValue = parseInt(this.dataset.uang) || 0;
        const formattedValue = uangValue.toLocaleString('id-ID');
        const keteranganValue = this.dataset.keterangan || '';

        // Hapus modal card lama kalau ada
        const oldCard = document.getElementById('modalCard');
        if (oldCard) oldCard.remove();

        // Buat modal card
        const cardHtml = document.createElement('div');
        cardHtml.id = 'modalCard';
        cardHtml.style.position = 'fixed';
        cardHtml.style.top = '50%';
        cardHtml.style.left = '50%';
        cardHtml.style.transform = 'translate(-50%, -50%)';
        cardHtml.style.background = '#fff';
        cardHtml.style.boxShadow = '0 4px 12px rgba(0,0,0,0.2)';
        cardHtml.style.padding = '20px';
        cardHtml.style.zIndex = '1050';
        cardHtml.style.borderRadius = '8px';
        cardHtml.style.minWidth = '300px';
        cardHtml.innerHTML = `
            <button type="button" class="button-baru mb-3" style="width:100%; text-align:left; margin-bottom:15px;">
                Input Uang Masuk
            </button>

            <form action="/updateUangMasuk/${id}" method="GET" style="margin-top:10px;">
                <div class="mb-3">
                    <label>Nominal Uang Masuk</label><br>
                    <input style="width:400px;" rows="2" type="text" class="form-control uang-format" name="uangmasuk" value="${formattedValue}" style="margin-bottom:15px;">
                </div>
                    <br>
                <div class="mb-3">
                    <label>Keterangan Uang Masuk</label> Contoh  : Early Bird <br>
                    <textarea style="width:400px;" class="form-control" name="keteranganuangmasuk" rows="3" style="margin-bottom:15px;">${keteranganValue}</textarea>
                </div>

                <div style="display:flex; gap:10px; justify-content:flex-end; margin-top:10px;">
                    <button type="submit" class="button-hijau">Simpan</button>
                    <button type="button" class="button-merah btn-close-card">Tutup</button>
                </div>
            </form>
        `;

        document.body.appendChild(cardHtml);

        // Event close button
        cardHtml.querySelector('.btn-close-card').addEventListener('click', () => {
            cardHtml.remove();
        });

        // Format ribuan saat input
        const input = cardHtml.querySelector('.uang-format');
        input.addEventListener('input', function() {
            let value = this.value.replace(/\./g, '');
            if (!isNaN(value) && value.length > 0) {
                this.value = parseInt(value).toLocaleString('id-ID');
            } else {
                this.value = '';
            }
        });

        // Hapus titik sebelum submit agar tersimpan angka murni
        input.closest('form').addEventListener('submit', function() {
            input.value = input.value.replace(/\./g, '');
        });
    });
});
</script>

        @endcan

  <td>
    <a href="{{ route('informasitimkatputeri', $item->id) }}" class="button-baru" style="display: inline-flex; align-items: center; gap: 6px;">
      <i class="bi bi-eye"></i> Lihat
    </a>
  </td>

@can('super_admin')

<td>
    <div style="display: flex; align-items: center; gap: 8px;">
        <!-- Tombol Edit -->

        {{-- Tombol Perbaikan Kat Lomba --}}
        <button type="button" class="button-berkas btn-open-perbaikan"
        data-id="{{ $item->id }}"
        data-kategoriperlombaan_id="{{ $item->kategoriperlombaan_id ?? '' }}">
        <i class="bi bi-pencil-square"></i> Perbaikan Kat Lomba
    </button>

    <script>
        document.querySelectorAll('.btn-open-perbaikan').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.dataset.id;
        const kategoriId = this.dataset.kategoriperlombaan_id || '';

        // Hapus modal card lama kalau ada
        const oldCard = document.getElementById('modalPerbaikan');
        if (oldCard) oldCard.remove();

        // Ambil data kategori dari blade (dilempar lewat JSON)
        const kategoris = @json($kategoriperlombaan);
        // $kategoriperlombaan = App\Models\Kategoriperlombaan::all();

        // Buat opsi dropdown
        let options = '';
        kategoris.forEach(kat => {
            const selected = kategoriId == kat.id ? 'selected' : '';
            options += `<option value="${kat.id}" ${selected}>${kat.kategoriperlombaan}</option>`;
        });

        // Buat modal card
        const cardHtml = document.createElement('div');
        cardHtml.id = 'modalPerbaikan';
        cardHtml.style.position = 'fixed';
        cardHtml.style.top = '50%';
        cardHtml.style.left = '50%';
        cardHtml.style.transform = 'translate(-50%, -50%)';
        cardHtml.style.background = '#fff';
        cardHtml.style.boxShadow = '0 4px 12px rgba(0,0,0,0.2)';
        cardHtml.style.padding = '20px';
        cardHtml.style.zIndex = '1050';
        cardHtml.style.borderRadius = '8px';
        cardHtml.style.minWidth = '300px';
        cardHtml.innerHTML = `
        <button type="button" class="button-baru mb-3" style="width:100%; text-align:left; margin-bottom:15px;">
            Perbaikan Kategori Lomba
            </button>

            <form action="/perbaikankatlomba/${id}" method="GET" style="margin-top:10px;">
                <div class="mb-3">
                    <label>Kategori Lomba</label><br>
                    <select style="width:400px;" class="form-control" name="kategoriperlombaan_id">
                        ${options}
                    </select>
                    </div>

                    <div style="display:flex; gap:10px; justify-content:flex-end; margin-top:10px;">
                        <button type="submit" class="button-hijau">Simpan</button>
                        <button type="button" class="button-merah btn-close-perbaikan">Tutup</button>
                        </div>
                        </form>
                        `;

                        document.body.appendChild(cardHtml);

                        // Event close button
                        cardHtml.querySelector('.btn-close-perbaikan').addEventListener('click', () => {
                            cardHtml.remove();
                        });
                    });
                });
            </script>

<!-- Tombol Hapus -->
<form action="{{ route('daftartimpeserta', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Saudara ingin menghapus data ini?')" style="margin: 0;">
    @csrf
    @method('DELETE')
    <button type="submit" class="button-merah">
        <i class="bi bi-trash-fill" style="font-size: 18px;"></i> Hapus
    </button>
</form>
</div>
</td>
@endcan
</tr>
@empty
<tr>
    <td colspan="100%"> {{-- Memenuhi semua kolom --}}
        <div style="
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                color: #6c757d;
                background-color: #f8f9fa;
                border: 2px dashed #ced4da;
                border-radius: 12px;
                font-size: 16px;
                animation: fadeIn 0.5s ease-in-out;
                ">
                <i class="button-berkas bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                Belum Ada Tim Yang Mendaftar!!
            </div>
        </td>
        <br>
    </tr>
    @endforelse

</tbody>
</table>

{{-- @if($data->count() < 1)
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <a href="{{ url('/daftarlomba/create/' . $userId . '/' . $perlombaanId) }}" class="button-berkas">
        <i class="bi bi-person-plus-fill" style="margin-right: 8px;"></i> Daftar Lomba !
    </a>
</div>
@endif --}}


</div>

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
</body>
</html>

