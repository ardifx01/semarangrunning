PERINTAH UNTUK MENCARI ARTISAN THINKER RELASI TABLE $QA


App\Models\Qa::first();




> $user->statusadmin

   WARNING  Undefined variable $user in D:\01. SIPJAKI KABUPATEN BANDUNG BARATeval()'d code.


   WARNING  Attempt to read property "statusadmin" on null in D:\01. SIPJAKI KABUPATEN BANDUNG BARATeval()'d code.

= null

> $user = App\Models\User::first();
> $bujkkontraktor = App\Models\bujkkontraktor::first();

= App\Models\User {#6182
    id: 1,
    statusadmin_id: 1,
    name: "Sigit Septiadi",
    username: "Sigit",
    phone_number: null,
    email: "sigitseptiadi1@gmail.com",
    avatar: null,
    email_verified_at: null,
    #password: "$2y$12$tataDPkWtGA6tWR0SMWAOOYGV2CNODupe2MgAVwF/15OAzEsklmqC",
    deleted_at: null,
    #remember_token: null,
    created_at: "2024-09-13 02:57:45",
    updated_at: "2024-09-13 02:57:45",
  }

> $user =$user->statusadmin
= App\Models\statusadmin {#6181
    id: 1,
    status: "super_admin",
    deleted_at: null,
    created_at: "2024-09-13 02:57:46",
    updated_at: "2024-09-13 02:57:46",
  }

> $qa = App\Models\qa::first();
= App\Models\qa {#6162
    id: 1,
    qasebagai_id: 2,
    qapertanyaan_id: 8,
    nama_lengkap: "Marina Stanton",
    email: "madaline.nicolas@example.org",
    telepon: "+1 (380) 439-2707",
    deleted_at: null,
    created_at: "2024-09-13 02:57:50",
    updated_at: "2024-09-13 02:57:50",
  }

> $qa->sebagai
= null

> $qa->qasebagai
= App\Models\qasebagai {#6193
    id: 2,
    sebagai: "Pengawas",
    deleted_at: null,
    created_at: "2024-09-13 02:57:50",
    updated_at: "2024-09-13 02:57:50",
  }



  {{-- untuk memilih berdasarkan seelct --}}


                {{-- <div class="form-group">
                    <div class="form-group-inner" style="width:800px;">
                        <label for="status" style="font-size:14px;">
                            <i class="fas fa-file me-2"></i> Status
                        </label>
                        <select id="status" name="status" required class="form-control" style="width: 500px;">
                            <!-- Ensure the value matches the expected status from your data source -->
                            <option value="AKTIF" {{$dataasosiasipengusaha->status}}>{{$dataasosiasipengusaha->status}}</option>
                            <option value="AKTIF">AKTIF</option>
                            <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                        </select>
                    </div>
                </div> --}}



public function createupdatepaketpekerjaan(Request $request, $instansi)
{
    // Validasi input
    $request->validate([
        'instansi' => 'required|string|max:255',
        'jumlah_pagu' => 'required|numeric|min:10000|max:10000000000', // Validasi untuk angka
        'metodepengadaan_id' => 'required|string|max:255',
        'pekerjaan' => 'required|string|max:255',
        'foto_pekerjaan' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',

        // 'progress_fisik' => 'required|numeric|min:0|max:100',
    ]);

    // Cari data paketpekerjaan berdasarkan instansi
    $datapaketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();

    // Path folder penyimpanan
    $storagePath = storage_path('app/public/datajakon/paketpekerjaan');

    // Cek dan buat folder jika tidak ada
    if (!File::exists($storagePath)) {
        File::makeDirectory($storagePath, 0755, true);
    }

    // Simpan file foto_pekerjaan dan ambil path-nya
    $filePath = $datapaketpekerjaan->foto_pekerjaan; // Default ke foto yang ada jika tidak ada file baru
    if ($request->hasFile('foto_pekerjaan')) {
        $file = $request->file('foto_pekerjaan');
        $filePath = $file->store('datajakon/paketpekerjaan', 'public');
    }

    // Ambil dan konversi jumlah_pagu dari request
    $jumlahPagu = $request->input('jumlah_pagu');

    // Hapus karakter non-numeric, misalnya "Rp." atau tanda titik ribuan
    $jumlahPagu = preg_replace('/[^\d]/', '', $jumlahPagu);

    // Konversi ke integer
    $jumlahPagu = (int) $jumlahPagu;

    // Update data paketpekerjaan dengan data dari form
    $datapaketpekerjaan->update([
        'instansi' => $request->input('instansi'),
        'jumlah_pagu' => $jumlahPagu, // Pastikan jumlah_pagu disimpan sebagai integer
        'metodepengadaan_id' => $request->input('metodepengadaan_id'),
        'pekerjaan' => $request->input('pekerjaan'),
        'foto_pekerjaan' => $filePath,

        // 'progress_fisik' => $request->input('progress_fisik'),
    ]);

    // Flash pesan session
    session()->flash('update', 'Data Paket Pekerjaan Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/paketpekerjaan'); // Pastikan rute ini ada di web.php
}



{{-- ----------------- pengeluaran foto --}}

@if(Storage::disk('public')->exists($data->foto_pekerjaan))
<img src="{{ asset('storage/' . $data->foto_pekerjaan) }}" alt="{{ $data->foto_pekerjaan }}" style="width: 100%; min-width: 280px; height: auto; border-radius: 8px;">
@else
<img src="{{ $data->foto_pekerjaan }}" alt="{{ $data->foto_pekerjaan }}" style="width: 100%; min-width: 280px; height: auto; border-radius: 8px;">
@endif




FAKER BAHASA INDONESAI
$faker = FakerFactory::create('id_ID'); // Menggunakan lokal Indonesia


use Faker\Factory as FakerFactory;




public function createstoredokumentasipelatihan(Request $request)
{
    // Validasi input manual
    $errors = [];

    if (!$request->filled('pengawasanlokasi_id') || !is_numeric($request->pengawasanlokasi_id)) {
        $errors['pengawasanlokasi_id'] = 'Lokasi pengawasan harus diisi dan merupakan angka.';
    }

    if (!$request->filled('judul_kegiatan')) {
        $errors['judul_kegiatan'] = 'Judul kegiatan harus diisi.';
    } elseif (strlen($request->judul_kegiatan) > 255) {
        $errors['judul_kegiatan'] = 'Judul kegiatan tidak boleh lebih dari 255 karakter.';
    }

    if (!$request->filled('user_id') || !is_numeric($request->user_id)) {
        $errors['user_id'] = 'User ID harus diisi dan merupakan angka.';
    }

    if (!$request->filled('alamat_kegiatan')) {
        $errors['alamat_kegiatan'] = 'Alamat kegiatan harus diisi.';
    } elseif (strlen($request->alamat_kegiatan) > 255) {
        $errors['alamat_kegiatan'] = 'Alamat kegiatan tidak boleh lebih dari 255 karakter.';
    }

    if (!$request->filled('tanggal') || !strtotime($request->tanggal)) {
        $errors['tanggal'] = 'Tanggal kegiatan harus diisi dan merupakan tanggal yang valid.';
    }

    // Validasi file berita
    for ($i = 1; $i <= 48; $i++) {
        if ($request->hasFile("berita{$i}")) {
            $file = $request->file("berita{$i}");
            if (!$file->isValid()) {
                $errors["berita{$i}"] = "File untuk berita {$i} tidak valid.";
            } elseif (!in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png'])) {
                $errors["berita{$i}"] = "File untuk berita {$i} harus berupa gambar JPG atau PNG.";
            }
        } else {
            $errors["berita{$i}"] = "File untuk berita {$i} harus diisi.";
        }
    }

    // Jika ada error, kembalikan dengan pesan error
    if (!empty($errors)) {
        return redirect()->back()->withErrors($errors)->withInput();
    }

    // Inisialisasi array untuk menyimpan path file
    $beritaPaths = [];

    // Loop untuk menyimpan file dari berita1 hingga berita48
    for ($i = 1; $i <= 48; $i++) {
        if ($request->hasFile("berita{$i}")) {
            // Jika ada file, simpan dan ambil path-nya
            $beritaPaths["berita{$i}"] = $request->file("berita{$i}")->store("dokumentasipelatihan/berita{$i}", 'public');
        } else {
            // Jika file tidak ada, atur nilainya menjadi null
            $beritaPaths["berita{$i}"] = null; // Pastikan kolom di database diizinkan untuk null
        }
    }

    // Buat entri baru di database
    kegiatanjaskon::create(array_merge($request->only([
        'pengawasanlokasi_id',
        'judul_kegiatan',
        'alamat_kegiatan',
        'tanggal',
        'user_id',
    ]), $beritaPaths));

    // Flash message untuk sukses
    session()->flash('create', 'Data Berhasil Ditambahkan!');

    // Redirect ke halaman yang sesuai
    return redirect()->route('dokumentasipelatihan.index'); // Ganti dengan nama route yang sesuai
}



// Chart untuk Tahun Bimtek
// var chart4 = new CanvasJS.Chart("bimtekchartContainer", {
//     exportEnabled: true,
//     animationEnabled: true,
//     title: {
//         text: "{{$judultahunbimtek}}",
//         fontFamily: "Roboto",
//         fontSize: 15
//     },
//     legend: {
//         cursor: "pointer",
//         itemclick: explodePie
//     },
//     data: [{
//         type: "pie",
//         showInLegend: true,
//         toolTipContent: "{name}: <strong>{y}%</strong>",
//         indexLabel: "{name} - {y}%",
//         dataPoints: {!! json_encode($data_tahun_bimtek) !!} // Update dataPoints
//     }]
// });
// chart4.render();



<div class="posts">

    <h1 style="color: #09ff00d7">Berita Terakhir</h1>
    @foreach ($databerita->slice(-4) as $item)
    <a href="#">
        <span style="font-size: 9px;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('j F Y') }}</span>
        {{$item->judul}}
    </a>
@endforeach

</div>


#06f933

KODE WARNA HIJAU :  #00820d



{
    "private": true,
    "type": "module",
    "scripts": {
        "dev": "vite",
        "build": "vite build"
    },
    "devDependencies": {
        "@tailwindcss/forms": "^0.5.2",
        "@vitejs/plugin-vue": "^5.2.1",
        "alpinejs": "^3.4.2",
        "autoprefixer": "^10.4.20",
        "axios": "^1.6.4",
        "laravel-vite-plugin": "^1.0.0",
        "postcss": "^8.5.1",
        "tailwindcss": "^3.4.17",
        "vite": "^5.4.14",
        "vite-plugin-laravel": "^0.3.1"
    }
}


    <!-- ! Start Contact Us -->
    <div class="contact-us" id="contact-us">
        <div class="header" data-aos="fade-up" data-aos-delay="100">
          <div class="title">Contact Us</div>
          <p class="para">Lorem ipsum dolor sit amet</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-12" data-aos="fade-up" data-aos-delay="400">
              <div class="address">
                <h5>Address:</h5>
                <p class="text-black-50 fw-normal" style="font-size: 15px; margin-bottom: 30px;">11 West Town<br>PBo
                  12345,
                  United States</p>
              </div>
              <div class="phone">
                <h5>Phone:</h5>
                <p class="text-black-50 fw-normal" style="font-size: 15px; margin-bottom: 30px;">+1 1234 56 780<br>+1
                  1234
                  56 780</p>
              </div>
              <div class="email">
                <h5>Email:</h5>
                <p class="text-black-50 fw-normal" style="font-size: 15px; margin-bottom: 30px;">
                  info@example.com<br>email@example.com</p>
              </div>
            </div>
            <div class="col-lg-8 col-sm-12">
              <form id="contact-form">
                <div class="row">
                  <!-- ! Username Field -->
                  <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <div class="form-floating flex-grow-1">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" required>
                        <label for="floatingInputGroup1">Username</label>
                      </div>
                      <div class="invalid-feedback">
                        Please Enter Your Username.
                      </div>
                    </div>
                  </div>
                  <!-- ! Email Field -->
                  <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="input-group has-validation">
                      <div class="form-floating flex-grow-1">
                        <input type="email" class="form-control" id="floatingInputGroup2" placeholder="Email" required>
                        <label for="floatingInputGroup2">Email</label>
                      </div>
                      <div class="invalid-feedback">
                        Please Enter Your Email.
                      </div>
                    </div>
                  </div>
                  <!-- ! Subject Field -->
                  <div class="form-floating col-lg-12 mb-3 flex-grow-1" data-aos="fade-up" data-aos-delay="800">
                    <input type="text" class="form-control" id="floatingSubject" placeholder="Subject" required>
                    <label for="floatingSubject" class="ps-4">Subject</label>
                  </div>
                  <!-- ! Comments Field -->
                  <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="1000">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 200px" required></textarea>
                      <label for="floatingTextarea2">Comments</label>
                    </div>
                  </div>
                  <!-- ! Submit Button -->
                  <div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="1200">
                    <button type="submit" class="btn btn-primary rounded-pill">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- ! End Contact Us -->


      {{-- kode warna hijau  --}}

      #09ff00d7



    <section class="portfolio-section" style="margin-top: -100px;">
		<div class="section-title-box text-center">
			<div class="section-tagline">Berita Jasa Konstruksi Dinas Pekerjaan Umum dan Penataan Ruang Pemerintah Kabupaten Blora</div>
			<h2 class="section-title">Sistem Informasi Pembina Jasa Konstruksi</h2>
		</div><!-- section-title-box -->
		<div class="portfolio-content conatainer-fluid">
			<div class="portfolio-carousel owl-carousel owl-theme">

                <div class="item">
					<div class="portfolio-card">
                        <img src="/assets/00_dokmasjaki/01_berita/berita1.JPG" class="img-fluid" alt="img-9" loading="lazy">
                        <div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita2.JPG" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita3.JPG" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita4.JPG" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita5.jpg" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita6.JPG" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

			</div><!--portfolio-carousel-->
		</div><!--portfolio-content-->
	</section><!--portfolio-section-->

{{-- ================================================== --}}


# JANGAN LUPA UNTUK MERUBAH DATABAS EYANG SUDHA DI RUBAH
# SSH TERBARU UNTUK MASJAKI BLORA ssh -p 65002 u123385283@46.202.138.41
# password SipjakiBlora$$123

#FFD100 kuning emas pupr

background: linear-gradient(to bottom, green, #FFD100, white); border-radius:20px;

orange
      #fdba00
      #2ECC71 hijau modern

      #ffae00


      BERITA SISTEM INFORMASI




      {{-- -------------------------------- FORMAT UNTUK HARGA KONSTRUKSI ------------- --}}

      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Cost Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Construction Cost Estimation</h2>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Uraian</th>
            <th>Kode</th>
            <th>Satuan</th>
            <th>Koefisien</th>
            <th>Harga Satuan (Rp)</th>
            <th>Jumlah Harga (Rp)</th>
        </tr>
    </thead>
    <tbody>
        <tr><td colspan="7">A. Tenaga Kerja</td></tr>
        <tr><td>1</td><td>PEKERJA</td><td>L.01</td><td>OH</td><td>0.250</td><td>94.206</td><td>23.552</td></tr>
        <tr><td>2</td><td>TUKANG KAYU</td><td>L.02</td><td>OH</td><td>0.125</td><td>111.055</td><td>13.882</td></tr>
        <tr><td>3</td><td>TUKANG BATU</td><td>L.02</td><td>OH</td><td>0.125</td><td>111.055</td><td>13.882</td></tr>
        <tr><td>4</td><td-KEPALA TUKANG</td><td>L.03</td><td>OH</td><td>0.025</td><td>128.000</td><td>3.200</td></tr>
        <tr><td>5</td><td>MANDOR</td><td>L.04</td><td>OH</td><td>0.008</td><td>125.685</td><td>1.005</td></tr>
        <tr><td colspan="6">Jumlah Harga Tenaga Kerja</td><td>55.521</td></tr>

        <tr><td colspan="7">B. Bahan</td></tr>
        <tr><td>1</td><td>Kayu Kaso 5/7 (lebar 5 cm, tinggi 7 cm)</td><td>M.35.a</td><td>m3</td><td>0.0310</td><td>2.340.000</td><td>72.540</td></tr>
        <tr><td>2</td><td>Semen Portland</td><td>-</td><td>kg</td><td>-</td><td>26.406</td><td>1.411</td></tr>
        <tr><td>3</td><td>PASIR Beton</td><td>-</td><td>kg</td><td>-</td><td>61.56</td><td>185</td></tr>
        <tr><td>4</td><td>Kerikil (Maks 30 mm)</td><td>-</td><td>kg</td><td>-</td><td>83.349</td><td>248</td></tr>
        <tr><td>5</td><td>Air</td><td>-</td><td>liter</td><td>-</td><td>17.415</td><td>60</td></tr>
        <tr><td>6</td><td>Paku biasa 2" - 5"</td><td>-</td><td>kg</td><td>-</td><td>0.4271</td><td>21.000</td></tr>
        <tr><td colspan="6">Jumlah Harga Bahan</td><td>151.898</td></tr>

        <tr><td colspan="7">C. Peralatan</td></tr>
        <tr><td colspan="6">Jumlah Harga Peralatan</td><td>0</td></tr>

        <tr><td colspan="6">D. Jumlah Harga Tenaga, Bahan dan Peralatan (A+B+C)</td><td>207.419</td></tr>
        <tr><td colspan="6">E. Overhead + profit (10%)</td><td>20.742</td></tr>
        <tr><td colspan="6">F. Harga Satuan Pekerjaan (D+E)</td><td>228.160</td></tr>
    </tbody>
</table>

<p>Catatan :<br>
Harga satuan bahan bangunan yang tercantum tidak mengikat hanya sebagai ancang-ancang dalam menyusun perencanaan pekerjaan konstruksi oleh pemanfaat baik.</p>

</body>
</html>




{{-- =================================== --}}


style="
        background: white;
        max-width: 95%;
        margin: 30px auto;
        padding: 20px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 10;"
----------------------------------------------------------------------------------------------------------- ADMIN DASHBOARD -----------------


<div style="width: 100%; height: auto; padding: 3px; background-color: navy; border: none; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
    <button class="badgekembali mb-2 mt-2" style="width: 100%; height: 30px; padding: 0; background: transparent; border: none;">
        <p style="margin: 0; font-size: 12px; text-align: center; color: white;">
            <i class="fas fa-database mr-2"></i>DASHBOARD HALAMAN SISTEM INFORMASI PEMBINA JASA KONSTRUKSI
        </p>
    </button>
</div>


<div class="mt-0 mb-2 button-container">
<div class="row pl-1" style="margin-left: -3px; margin-right: -3px;">

    <a href="/himbauandinas" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>HIMBAUAN DINAS</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-bullhorn" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahHimbauan}} Data --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/qapertanyaan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PERTANYAAN PUBLIK</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-question-circle" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahQa}} Pertanyaan --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/databerita" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>BERITA</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-newspaper" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahBerita}} Berita --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/beritaagenda" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>AGENDA SERTIFIKASI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-calendar-check" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahAgendasertifikasi}} Agenda --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/dokumentasipelatihan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>DOKUMENTASI PELATIHAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-file-alt" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahDokumentasiPelatihan}} Dokumentasi  --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/acarapelatihan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>ACARA KEGIATAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-calendar-alt" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahDokumentasiAcara}} Kegiatan  --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/pengawasandanketertiban" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PENGAWASAN & KETERTIBAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-eye" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPengawasandanketeriban}} Pengawasan --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/asosiasipengusaha" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>ASOSIASI PENGUSAHA</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-users" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahAsosiasiPengusaha}} Asosiasi --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/paketpekerjaan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PAKET PEKERJAAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-briefcase" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPaketPekerjaan}} Paket --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/dataiujk" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>IJIN USAHA JASA KONSTRUKSI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-check-circle" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahIjinUsaha}} Ijin Usaha --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/beskktenagakerja" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>SERTIFIKAT KETERAMPILAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-certificate" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahSertifikatKetermpilan}} SKK --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/datapjt" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PENANGGUNG JAWAB TEKNIS</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-user-cog" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPenanggungJawabTeknis}} PJT --}}
                </div>
            </div>
        </div>
    </a>

    <a href="/timpembina" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PEMBINA JASA KONSTRUKSI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-clipboard-list" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPembinaJasaKonstruksi}} Pembina --}}
                </div>
            </div>
        </div>
    </a>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PELATIHAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-chalkboard-teacher" style="font-size: 20px; margin-right: 5px;"></i> 1 Kegiatan --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PENGAWASAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-eye" style="font-size: 20px; margin-right: 5px;"></i> 1 Kegiatan --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>KECELAKAAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-exclamation-triangle" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahKecelakaan}} Data --}}
                </div>
            </div>
        </div>
    </div>


    <div style="width: 100%; height: auto; padding: 3px; background-color: navy; border: none; border-radius: 5px; margin-top:5px; margin-bottom:10px;">
        <button class="badgekembali mb-2 mt-2" style="width: 100%; height: 5px; padding: 0; background: transparent; border: none;">
            <p style="margin: 0; font-size: 12px; text-align: center; color: white;">
                <i class="fas fa-database mr-2"></i>PENGATURAN DATABASE SIPJAKI
            </p>
        </button>
    </div>
    <div class="mt-0 mb-2 button-container">
        <div class="row pl-1" style="margin-left: -3px; margin-right: -3px;">

            <a href="/settingstatusadmin" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                    <div class="p-2 text-center"
                    onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                    onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>STATUS ADMIN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-users" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahstatusadmin}} Status Admin --}}
                    </div>

                </div>
            </div>
        </a>

        <a href="/settingkecamatan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>KECAMATAN/KOTA</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-building" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpengawasanlokasi}} Daerah --}}
                    </div>
                </div>
            </div>
        </a>


        <a href="/settingqasebagai" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>QA SEBAGAI</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-pen" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahqasebagai}} Subjek  --}}
                    </div>
                </div>
            </div>
        </a>


        <a href="/settingqapertanyaan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>QA PERTANYAAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-pen" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahqapertanyaan}} Pertanyaan  --}}
                    </div>
                </div>
            </div>
        </a>

        <a href="/settingmetodepengadaan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>METODE PANGADAAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-file" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahmetodepengadaan}} Pengadaan  --}}
                    </div>
                </div>
            </div>
        </a>

        <a href="/settingpengawasanbangunangedung" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PENGAWASAN BANGUNAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-building" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpengawasanbangunangedung}} Bangunan Gedung  --}}
                    </div>
                </div>
            </div>
        </a>

        <a href="/settingpengawasanstatus" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PENGAWASAN STATUS</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-warning" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpengawasanstatus}} Status  --}}
                    </div>
                </div>
            </div>
        </a>


        <a href="/settingpengawasantindakan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PENGAWASAN TINDAKAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-warning" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpengawasantindakan}} Tindakan  --}}
                    </div>
                </div>
            </div>
        </a>

        <a href="/settingagendastatus" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>AGENDA STATUS</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-calendar" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahagendastatus}} Status  --}}
                    </div>
                </div>
            </div>
        </a>

        <a href="/settingketerampilanpekerja" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>KETERAMPILAN PEKERJA</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-cogs" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahketerampilanpekerja}} Keterampilan  --}}
                    </div>
                </div>
            </div>
        </a>

        <a href="/settingtahunpilihan" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PILIHAN TAHUN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        {{-- <i class="fas fa-list" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpilihantahun}} Pilihan  --}}
                    </div>
                </div>
            </div>
        </a>

        </div>
    </div>


    <div style="width: 100%; height: auto; padding: 3px; background-color: navy; border: none; border-radius: 5px; margin-top:0px; margin-bottom:5px;">
        <button class="badgekembali mb-2 mt-2" style="width: 100%; height: 5px; padding: 0; background: transparent; border: none;">
            <p style="margin: 0; font-size: 12px; text-align: center; color: white;">
                <i class="fas fa-database mr-2"></i>PERATURAN UNDANG - UNDANG
            </p>
        </button>
    </div>


            <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:20px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>UNDANG-UNDANG</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-gavel" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahUU}} Undang-Undang --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:20px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PERATURAN PEMERINTAH</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-file-contract" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPeraturanPemerintah}} Permen --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:20px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PERATURAN PRESIDEN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-file-signature" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPeraturanPresiden}} Peraturan --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:20px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PERATURAN MENTERI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-file-alt" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPeraturanMenteri}} Peraturan --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>KEPUTUSAN MENTERI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-user-tie" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahKeputusanMenteri}} Keputusan --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>SURAT EDARAN MENTERI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-envelope" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahSuratEdaranMenteri}} Surat --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>SURAT REFERENSI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-book" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahSuratReferensi}} Surat --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PERATURAN DAERAH</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-map-signs" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPeraturanDaerah}} Peraturan --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PERATURAN GUBERNUR</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-gavel" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPeraturanGubernur}} Peraturan --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PERATURAN WALIKOTA/BUPATI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-city" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahPeraturanWalikotaBupati}} Peraturan --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';"
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>SURAT KEPUTUSAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    {{-- <i class="fas fa-file-alt" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahSuratKeputusan}} Surat --}}
                </div>
            </div>
        </div>
    </div>


    /warna hijau admin #1e8714


      <a href="#">
                <img src="./assets/icon/logokabupatenblora.png" alt="Logo" width="100%" style="max-width: 50px; height: auto;">
                <img src="./assets/icon/pupr.png" alt="Logo" width="100%" style="max-width: 65px; height: auto;">
            </a>



            <style>
                /* Style untuk menu aktif */
.sidebar-item.active {
background-color: #00820d;
color: white;
}

/* Style dasar untuk sidebar-item */
.sidebar-item {
padding: 2px;
border-radius: 15px;
cursor: pointer;
}

/* Style untuk sidebar-link agar bisa terlihat saat hover */
.sidebar-link {
text-decoration: none;
color: inherit; /* Mengambil warna default dari parent */
}

            </style>

            <script>
// Menunggu DOM selesai dimuat
document.addEventListener("DOMContentLoaded", function() {
// Ambil semua elemen sidebar-item
const sidebarItems = document.querySelectorAll('.sidebar-item');

// Loop untuk menambahkan event listener klik pada setiap item
sidebarItems.forEach(item => {
    item.addEventListener('click', function () {
        // Hapus kelas 'active' dari semua sidebar-item
        sidebarItems.forEach(i => i.classList.remove('active'));

        // Tambahkan kelas 'active' ke item yang diklik
        item.classList.add('active');
    });
});
});

            </script>



{{-- -------------------------- warna piliha  --}}

Create	Hijau Tua	#166534	Warna hijau yang deep dan profesional
Update	Hijau Medium	#22C55E	Masih hijau, tapi lebih fresh
Delete	Merah Gelap	#DC2626	Kontras dengan hijau, biar tegas
Database	Biru Navy	#1E40AF	Biar terkesan stabil & profesional
Kembali	Abu-Abu Tua	#374151	Netral, biar nggak menarik perhatian berlebih





{{-- PASWRORD SIHADE SSH  --}}


ssh -p 65002 u782898958@46.202.138.136
Adminadmin123$$






---------------------------

{{-- Form Pencarian Kode Unik --}}
<div style="margin-top: 24px; border-top: 1px solid #ccc; padding-top: 16px;">
  <label for="searchBarcode">Cari Data POS berdasarkan Kode Barcode:</label>
  <div style="display: flex; gap: 8px; margin-top: 8px;">
    <input type="text" id="searchBarcode" placeholder="Masukkan kode unik barcode" style="padding: 6px 10px; border-radius: 4px; border: 1px solid #ccc; width: 200px;">
    <button onclick="searchBarcode()" style="
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 6px 12px;
      cursor: pointer;
    ">
      <i class="bi bi-search"></i> Cari
    </button>
  </div>
</div>

<script>
  function searchBarcode() {
    const code = document.getElementById('searchBarcode').value.trim();
    if (code !== '') {
      // Ganti dengan route tujuan kamu
      window.location.href = `/datapos1/barcode/${code}`;
    } else {
      alert("Masukkan kode barcode terlebih dahulu.");
    }
  }
</script>




 <div class="table-section">
          <div class="section-header"><h3>Recent Statistics</h3><button>View All</button></div>
          <table>
            <thead><tr><th>ID</th><th>Category</th><th>Value</th><th>Change</th><th>Status</th><th>Action</th></tr></thead>
            <tbody>
              <tr><td>#12345</td><td>User Growth</td><td>1,234</td><td>+12.5%</td><td><span class="status active">Active</span></td><td><i class="fas fa-ellipsis-h"></i></td></tr>
              <!-- Add more rows -->
            </tbody>
          </table>
        </div>
