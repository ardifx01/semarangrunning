@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_administrator.00_baganterpisah.09_button')
@include('frontend.android.00_fiturmenu.06_alert')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

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
           @include('backend.00_administrator.00_baganterpisah.10_selamatdatang')
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                              </div>
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
              <!-- Info boxes -->

{{-- atas  --}}
{{--  --}}

@include('backend.00_administrator.00_baganterpisah.11_judulhalaman')
<div class="putih" style="margin-bottom:100px;">


<div style="width: 100%; overflow-x: auto; margin-bottom: 100px; margin-top:20px;">
  <table
    class="table zebra-table" style="border-collapse: separate; border-spacing: 0; border-radius: 20px; overflow: hidden;"

  >

    <thead>
      <tr>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">No</th>
        @canany(['superadmin', 'admin'])
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
            <i class="bi bi-person-fill"></i> Upload Berkas
        </th>
        @endcanany
        {{-- <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-person-fill"></i> Admin DPUPR
        </th> --}}

        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-file-earmark-text-fill"></i> Potensi Retribusi
        </th>

        {{-- <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-file-earmark-text-fill"></i> Bukti Pembayaran
        </th> --}}

        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-file-earmark-text-fill"></i> Berkas SKRD
        </th>

                    <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
            <i class="bi bi-person-fill"></i> Nama Pemilik
            </th>

            <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
            <i class="bi bi-geo-alt-fill"></i> Lokasi Bangunan
            </th>

        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-file-earmark-text-fill"></i> Jenis Permohonan
        </th>

        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-hash"></i> No Registrasi SIM BG
        </th>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-calendar"></i> Tanggal Permohonan
        </th>
        {{-- <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-calendar"></i> Berita Acara
        </th> --}}
        {{-- <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-check2-circle"></i> Status Permohonan
        </th>
        <th style="background-color: #ADD8E6; white-space: nowrap; padding: 8px; text-align: center;">
          <i class="bi bi-folder-fill"></i> Berkas
        </th> --}}

      </tr>
    </thead>
    <tbody>
      @forelse ($data as $item)
      {{-- ($data as $item) --}}
        <tr>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $loop->iteration }}</td>

          @canany(['superadmin', 'admin'])

          <td style="white-space: nowrap; padding: 6px; text-align: center;">
              <a href="{{ route('bepbgslfskrdcreate', $item->id) }}"
                  class="button-baru"
                  title="Upload Berkas">
                  <i class="bi bi-upload me-1"></i> Upload
                </a>
            </td>
            @endcanany


          {{-- <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $item->user->name ?? '-' }}</td> --}}
     <td style="white-space: nowrap; padding: 6px; text-align: center;">
    @if ($item->rupiah !== null)
        Rp {{ number_format($item->rupiah, 0, ',', '.') }},00
    @else
        <span style="color: red; font-weight: bold;">Data Belum Di Masukan</span>
    @endif
</td>

{{-- <td style="white-space: nowrap; padding: 6px; text-align: center; vertical-align: middle;">
    @if($item->buktipembayaran)
        <iframe
            src="{{ asset($item->buktipembayaran) }}"
            style="width: 150px; height: 200px; border: 1px solid #ccc; border-radius: 4px;"
            frameborder="0"
        ></iframe>
        <br>
        <a href="{{ asset($item->buktipembayaran) }}"
           class="btn btn-sm btn-primary mt-1"
           target="_blank"
           download>
           <i class="bi bi-download"></i> Download
        </a>
    @else
        <span style="color: white" class="btn btn-danger">Berkas Belum di Upload</span>

        @endif
</td> --}}

<td style="white-space: nowrap; padding: 6px; text-align: center; vertical-align: middle;">
    @if($item->berkasskrd)
        <iframe
            src="{{ asset($item->berkasskrd) }}"
            style="width: 150px; height: 200px; border: 1px solid #ccc; border-radius: 4px;"
            frameborder="0"
        ></iframe>
        <br>
        <a href="{{ asset($item->berkasskrd) }}"
           class="btn btn-sm btn-primary mt-1"
           target="_blank"
           download>
           <i class="bi bi-download"></i> Download
        </a>
    @else
        <span style="color: white" class="btn btn-danger">Berkas Belum di Upload</span>

        @endif
</td>


     <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $item->datapemilik->namapemilik ?? '-' }}</td>
     <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $item->databangunanpbg->lokasibangunan ?? '-' }}</td>
     <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $item->jenispengajuanpbgslfper->jenispengajuan ?? '-' }}</td>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">{{ $item->noregissimbg ?? '-' }}</td>
          <td style="white-space: nowrap; padding: 6px; text-align: center;">
            @php $tgl = $item->tanggalpermohonan ?? null; @endphp
            {{ $tgl ? \Carbon\Carbon::parse($tgl)->translatedFormat('d F Y') : '-' }}
          </td>
          {{-- <td style="white-space: nowrap; padding: 6px; text-align: center;">
            @if ($item->validasiberkas5 === 'sudah')
              <span style="display: inline-block; padding: 4px 8px; background-color: #198754; color: white; border-radius: 4px;">Sidang</span>
            @else
              <span style="display: inline-block; padding: 4px 8px; background-color: #6c757d; color: white; border-radius: 4px;">Belum</span>
            @endif
          </td> --}}
        {{-- <td style="white-space: nowrap; padding: 6px; text-align: center;">
  <a href="{{ route('bepbgsuratundangan', $item->id) }}"
     class="button-baru">
     <i class="fas fa-eye me-1"></i> Lihat Surat Undangan
  </a>
</td> --}}

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
                <i class="bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                Data Tidak Ditemukan !!
            </div>
        </td>
    </tr>
@endforelse

    </tbody>
  </table>
</div>




</div>
@include('backend.00_administrator.00_baganterpisah.07_paginations')
</div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->

          <!--end::App Content-->
      </main>
      <!--end::App Main-->


      @include('backend.00_administrator.00_baganterpisah.02_footer')
