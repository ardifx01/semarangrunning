@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

              <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div>

            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>

        <br>
        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <div style="
                        margin-bottom:10px;
                        font-weight: 900;
                        font-size: 16px;
                        text-align: center;
                        background: linear-gradient(135deg, #1f50f1, #1f50f1);
                        color: white;
                        padding: 10px 25px;
                        border-radius: 10px;
                        display: inline-block;
                        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                        width: 100%;
                    ">
                        📌 Halaman Update : {{$title}}

                    </div>
                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/beinfoopd/">
                    <button
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                    style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                    <!-- Ikon Kembali -->
                    <i class="fa fa-arrow-left" style="margin-right: 8px;"></i>
                    Kembali
                </button>
            </a>
        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('update.beinfoopdupdatecreate', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT jika Anda ingin menggunakan metode PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Nama OPD -->
                                        <div class="mb-3">
                                            <label class="form-label" for="namaopd">
                                                <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Nama OPD
                                            </label>
                                            <input type="text" id="namaopd" name="namaopd" class="form-control @error('namaopd') is-invalid @enderror" value="{{ old('namaopd', $data->namaopd) }}" />
                                            @error('namaopd')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Alamat OPD -->
                                        <div class="mb-3">
                                            <label class="form-label" for="alamatopd">
                                                <i class="bi bi-house-door" style="margin-right: 8px; color: navy;"></i> Alamat OPD
                                            </label>
                                            <textarea id="alamatopd" name="alamatopd" class="form-control @error('alamatopd') is-invalid @enderror" rows="4">{{ old('alamatopd', $data->alamatopd) }}</textarea>
                                            @error('alamatopd')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- RT/RW -->
                                        <div class="mb-3">
                                            <label class="form-label" for="rtrw">
                                                <i class="bi bi-house-door-door" style="margin-right: 8px; color: navy;"></i> RT/RW
                                            </label>
                                            <input type="text" id="rtrw" name="rtrw" class="form-control @error('rtrw') is-invalid @enderror" value="{{ old('rtrw', $data->rtrw) }}" />
                                            @error('rtrw')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kode Pos -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kodepos">
                                                <i class="bi bi-postage" style="margin-right: 8px; color: navy;"></i> Kode Pos
                                            </label>
                                            <input type="text" id="kodepos" name="kodepos" class="form-control @error('kodepos') is-invalid @enderror" value="{{ old('kodepos', $data->kodepos) }}" />
                                            @error('kodepos')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kelurahan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kelurahan">
                                                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Kelurahan
                                            </label>
                                            <input type="text" id="kelurahan" name="kelurahan" class="form-control @error('kelurahan') is-invalid @enderror" value="{{ old('kelurahan', $data->kelurahan) }}" />
                                            @error('kelurahan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kecamatan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kecamatan">
                                                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Kecamatan
                                            </label>
                                            <input type="text" id="kecamatan" name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" value="{{ old('kecamatan', $data->kecamatan) }}" />
                                            @error('kecamatan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Kota -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kota">
                                                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Kota
                                            </label>
                                            <input type="text" id="kota" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ old('kota', $data->kota) }}" />
                                            @error('kota')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Provinsi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="provinsi">
                                                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Provinsi
                                            </label>
                                            <input type="text" id="provinsi" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" value="{{ old('provinsi', $data->provinsi) }}" />
                                            @error('provinsi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Negara -->
                                        <div class="mb-3">
                                            <label class="form-label" for="negara">
                                                <i class="bi bi-globe" style="margin-right: 8px; color: navy;"></i> Negara
                                            </label>
                                            <input type="text" id="negara" name="negara" class="form-control @error('negara') is-invalid @enderror" value="{{ old('negara', $data->negara) }}" />
                                            @error('negara')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Posisi Geografis -->
                                        <div class="mb-3">
                                            <label class="form-label" for="posisigeografis">
                                                <i class="bi bi-map" style="margin-right: 8px; color: navy;"></i> Posisi Geografis
                                            </label>
                                            <textarea id="posisigeografis" name="posisigeografis" class="form-control @error('posisigeografis') is-invalid @enderror" rows="4">{{ old('posisigeografis', $data->posisigeografis) }}</textarea>
                                            @error('posisigeografis')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tipe Dinas -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tipedinas">
                                                <i class="bi bi-briefcase" style="margin-right: 8px; color: navy;"></i> Tipe Dinas
                                            </label>
                                            <select id="tipedinas" name="tipedinas" class="form-control @error('tipedinas') is-invalid @enderror">
                                                <option value="" disabled selected>Pilih Tipe Dinas</option>
                                                <option value="A" {{ old('tipedinas', $data->tipedinas) == 'A' ? 'selected' : '' }}>A</option>
                                                <option value="B" {{ old('tipedinas', $data->tipedinas) == 'B' ? 'selected' : '' }}>B</option>
                                                <option value="C" {{ old('tipedinas', $data->tipedinas) == 'C' ? 'selected' : '' }}>C</option>
                                                <option value="D" {{ old('tipedinas', $data->tipedinas) == 'D' ? 'selected' : '' }}>D</option>
                                                <option value="E" {{ old('tipedinas', $data->tipedinas) == 'E' ? 'selected' : '' }}>E</option>
                                            </select>
                                            @error('tipedinas')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                                                        <!-- End Left Column -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                                <button type="submit" style="background-color: #117235; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
                                    <i class="fa fa-file" style="margin-right: 8px;"></i> Update
                                </button>
                            </div>
                        </form>

                             </div>
                        <!--end::Quick Example-->

                    </div>
                    <!-- /.card -->
                    <!-- Button Section -->

                    </div>
                    <!--end::Row-->
                    </div>

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
