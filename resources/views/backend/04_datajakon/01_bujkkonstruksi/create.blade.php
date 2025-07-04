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
                            margin-bottom: 10px;
                            font-weight: 900;
                            font-size: 16px;
                            text-align: center;
                            background: linear-gradient(135deg, #D5006D, #4CAF50); /* Fuchsia ke Hijau */
                            color: white;
                            padding: 10px 25px;
                            border-radius: 10px;
                            display: inline-block;
                            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                            width: 100%;
                        ">
                            📌 Halaman Tambah Data : {{$title}}
                        </div>
                    </div>

                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/beartikeljakon">
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
                        <form action="{{ route('create.bebujkkonstruksicreatenew') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Asosiasi Masjaki -->
                                        <div class="mb-3">
                                            <label class="form-label" for="daftarasosiasi_id">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Asosiasi Jasa Konstruksi
                                            </label>
                                            <select id="daftarasosiasi_id" name="daftarasosiasi_id" class="form-control @error('daftarasosiasi_id') is-invalid @enderror">
                                                <option value="" disabled selected>Pilih Asosiasi</option>
                                                @foreach($asosiasimasjaki as $asosiasi)
                                                    <option value="{{ $asosiasi->id }}" {{ old('daftarasosiasi_id') == $asosiasi->id ? 'selected' : '' }}>
                                                        {{ $asosiasi->namaasosiasi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('daftarasosiasi_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Nama Lengkap -->
                                        <div class="mb-3">
                                            <label class="form-label" for="namalengkap">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Nama Lengkap
                                            </label>
                                            <input type="text" id="namalengkap" name="namalengkap" class="form-control @error('namalengkap') is-invalid @enderror" value="{{ old('namalengkap') }}" />
                                            @error('namalengkap')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Alamat -->
                                        <div class="mb-3">
                                            <label class="form-label" for="alamat">
                                                <i class="bi bi-house-door" style="margin-right: 8px; color: navy;"></i> Alamat
                                            </label>
                                            <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" />
                                            @error('alamat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Nomor Telepon -->
                                        <div class="mb-3">
                                            <label class="form-label" for="no_telepon">
                                                <i class="bi bi-telephone" style="margin-right: 8px; color: navy;"></i> Nomor Telepon
                                            </label>
                                            <input type="text" id="no_telepon" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" value="{{ old('no_telepon') }}" />
                                            @error('no_telepon')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Email -->
                                        <div class="mb-3">
                                            <label class="form-label" for="email">
                                                <i class="bi bi-envelope" style="margin-right: 8px; color: navy;"></i> Email
                                            </label>
                                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Nomor Induk Berusaha -->
                                        <div class="mb-3">
                                            <label class="form-label" for="nomorindukberusaha">
                                                <i class="bi bi-file-earmark" style="margin-right: 8px; color: navy;"></i> Nomor Induk Berusaha
                                            </label>
                                            <input type="text" id="nomorindukberusaha" name="nomorindukberusaha" class="form-control @error('nomorindukberusaha') is-invalid @enderror" value="{{ old('nomorindukberusaha') }}" />
                                            @error('nomorindukberusaha')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- PJU -->

                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label class="form-label" for="pju">
                                                <i class="bi bi-lightbulb" style="margin-right: 8px; color: navy;"></i> PJU
                                            </label>
                                            <input type="text" id="pju" name="pju" class="form-control @error('pju') is-invalid @enderror" value="{{ old('pju') }}" />
                                            @error('pju')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- No Akte -->
                                        <div class="mb-3">
                                            <label class="form-label" for="no_akte">
                                                <i class="bi bi-file-earmark" style="margin-right: 8px; color: navy;"></i> No Akte
                                            </label>
                                            <input type="text" id="no_akte" name="no_akte" class="form-control @error('no_akte') is-invalid @enderror" value="{{ old('no_akte') }}" />
                                            @error('no_akte')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tanggal">
                                                <i class="bi bi-calendar" style="margin-right: 8px; color: navy;"></i> Tanggal
                                            </label>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" />
                                            @error('tanggal')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Nama Notaris -->
                                        <div class="mb-3">
                                            <label class="form-label" for="nama_notaris">
                                                <i class="bi bi-person-check" style="margin-right: 8px; color: navy;"></i> Nama Notaris
                                            </label>
                                            <input type="text" id="nama_notaris" name="nama_notaris" class="form-control @error('nama_notaris') is-invalid @enderror" value="{{ old('nama_notaris') }}" />
                                            @error('nama_notaris')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- No Pengesahan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="no_pengesahan">
                                                <i class="bi bi-file-earmark-check" style="margin-right: 8px; color: navy;"></i> No Pengesahan
                                            </label>
                                            <input type="text" id="no_pengesahan" name="no_pengesahan" class="form-control @error('no_pengesahan') is-invalid @enderror" value="{{ old('no_pengesahan') }}" />
                                            @error('no_pengesahan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End Right Column -->
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                                <button type="submit" style="background-color: #007bff; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
                                    <i class="fa fa-pencil" style="margin-right: 8px;"></i> Create
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
