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
                <a href="/besipjaki">
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
                        <form action="{{ route('update.besipjakicreateupdate', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Nomor -->
                                        <div class="mb-3">
                                            <label class="form-label" for="nomor">
                                                <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Nomor
                                            </label>
                                            <input type="text" id="nomor" name="nomor" class="form-control @error('nomor') is-invalid @enderror" value="{{ old('nomor', $data->nomor) }}"  />
                                            @error('nomor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Operator 1 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="operator1">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Operator 1
                                            </label>
                                            <input type="text" id="operator1" name="operator1" class="form-control @error('operator1') is-invalid @enderror" value="{{ old('operator1', $data->operator1) }}"  />
                                            @error('operator1')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Operator 2 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="operator2">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Operator 2
                                            </label>
                                            <input type="text" id="operator2" name="operator2" class="form-control @error('operator2') is-invalid @enderror" value="{{ old('operator2', $data->operator2) }}"  />
                                            @error('operator2')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Operator 3 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="operator3">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Operator 3
                                            </label>
                                            <input type="text" id="operator3" name="operator3" class="form-control @error('operator3') is-invalid @enderror" value="{{ old('operator3', $data->operator3) }}"  />
                                            @error('operator3')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Operator 4 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="operator4">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Operator 4
                                            </label>
                                            <input type="text" id="operator4" name="operator4" class="form-control @error('operator4') is-invalid @enderror" value="{{ old('operator4', $data->operator4) }}"  />
                                            @error('operator4')
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
