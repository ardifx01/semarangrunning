<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// namespace App\Models;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\peraturan;
use App\Models\agendaskk;
use App\Models\pesertapelatihan;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\keputusanmenteri;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\referensi;
use App\Models\suratedaran;
use App\Models\pergubernur;
use App\Models\suratkeputusan;
use App\Models\paketpekerjaanmasjaki;
use App\Models\paketstatuspekerjaan;
use App\Models\renstra;
use App\Models\sbulampiran1;
use App\Models\sbulampiran2;
use App\Models\sbulampiran3;

// use App\Models\sertifikasiagenda;
use App\Models\standarbiayaumum;
use App\Models\statusadmin;
use App\Models\strukturdinas;
use App\Models\tahunpilihan;
use App\Models\tupoksi;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\bujkkonsultan;
use App\Models\bujkkonsultansub;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;
use App\Models\skktenagakerjablora;
use App\Models\skktenagakerjabloralist;
use App\Models\asosiasimasjaki;
use App\Models\prosespaket;
use App\Models\pengawasanbujk;
use App\Models\kecelakaankerjamasjaki;
use App\Models\penyediastatustertibjakon;
use App\Models\tertibjasakonstruksi;
use App\Models\tertibjakonpemanfaatan;
use App\Models\tertibjakonpenyelenggaraan;
use App\Models\kecamatanblora;
use App\Models\rantaipasokblora;
use App\Models\peralatankonstruksi;
use App\Models\alatberat;
use App\Models\tokobangunanblora;
use App\Models\shstblora;
use App\Models\profiljenispekerjaan;
use App\Models\sumberdana;
use App\Models\satuanhargamaterial;
use App\Models\satuanhargaupahtenagakerja;
use App\Models\satuanhargaperalatan;
use App\Models\hspdivisi;
use App\Models\hsppaket;
use App\Models\hspkodepekerjaan;
use App\Models\hspkonstruksiumum;
use App\Models\beritajakon;
use App\Models\allskktenagakerjablora;
use App\Models\profiljakonidentitasopd;
use App\Models\profiljakonkepaladinas;
use App\Models\profiljakonkabid;
use App\Models\profiljakonsubkoordinator;
use App\Models\profiljakoninformasi;
use App\Models\profiljakonsipjaki;
use App\Models\profiljakonpersonil;
// use App\Models\artikeljakon;

// atasan
// hsp harga divisi 1
use App\Models\artikeljakonmasjaki;
use App\Models\kategoripelatihan;
use App\Models\agendapelatihan;
use App\Models\berkaslomba;
use App\Models\daftartim;
use App\Models\subhargadiv1;
use App\Models\subhargadiv1bahan;
use App\Models\subhargadiv1peralatan;

// hsp harga divisi 2
use App\Models\hsppaket2;
use App\Models\hspkodepekerjaan2;
use App\Models\hspkonstruksiumum2;
use App\Models\subhargadiv2;
use App\Models\subhargadiv2bahan;
use App\Models\subhargadiv2peralatan;

// hsp harga divisi 3
use App\Models\hsppaket3;
use App\Models\hspkodepekerjaan3;
use App\Models\hspkonstruksiumum3;
use App\Models\subhargadiv3;
use App\Models\subhargadiv3bahan;
use App\Models\subhargadiv3peralatan;

// hsp harga divisi 4
use App\Models\hsppaket4;
use App\Models\hspkodepekerjaan4;
use App\Models\hspkonstruksiumum4;
use App\Models\subhargadiv4;
use App\Models\subhargadiv4bahan;
use App\Models\subhargadiv4perlatan;

// hsp harga divisi 5
use App\Models\hsppaket5;
use App\Models\hspkodepekerjaan5;
use App\Models\hspkonstruksiumum5;
use App\Models\subhargadiv5;
use App\Models\subhargadiv5bahan;
use App\Models\subhargadiv5peralatan;

// hsp harga divisi 6
use App\Models\hsppaket6;
use App\Models\hspkodepekerjaan6;
use App\Models\hspkonstruksiumum6;
use App\Models\subhargadiv6;
use App\Models\subhargadiv6bahan;
use App\Models\subhargadiv6peralatan;

// hsp harga divisi 7
use App\Models\hsppaket7;
use App\Models\hspkodepekerjaan7;
use App\Models\hspkonstruksiumum7;
use App\Models\subhargadiv7;
use App\Models\subhargadiv7bahan;
use App\Models\subhargadiv7peralatan;

// hsp harga divisi 8
use App\Models\hsppaket8;
use App\Models\hspkodepekerjaan8;
use App\Models\hspkonstruksiumum8;
use App\Models\subhargadiv8;
use App\Models\subhargadiv8bahan;
use App\Models\subhargadiv8peralatan;

// hsp harga divisi 9
use App\Models\hsppaket9;
use App\Models\hspkodepekerjaan9;
use App\Models\hspkonstruksiumum9;
use App\Models\subhargadiv9;
use App\Models\subhargadiv9bahan;
use App\Models\subhargadiv9peralatan;

// -=============================
use App\Models\headerberanda;
use App\Models\kategoriperlombaan;
use App\Models\kota;
use App\Models\perlombaan;
use App\Models\provinsi;
// modelbaru

// use App\Models\paketpekerjaan;
use Database\Factories\SkktenagakerjaFactory;
// use Carbon\Carbon;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Asosiasipengusaha::factory(15)->create();
        // Paketpekerjaan::factory(15)->create();
        // Penanggungjawabteknis::factory(15)->create();
        // Ketertiban::factory(15)->create();
        // Beritaagenda::factory(15)->create();
        // User::factory(15)->create();
        // // \App\Models\sertifikasiagenda::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // asosiasipengusaha::factory(15)->create();
        // paketpekerjaan::factory(15)->create();
        // penanggungjawabteknis::factory(15)->create();
        // ketertiban::factory(15)->create();
        // beritaagenda::factory(15)->create();
        // Qa::factory(15)->create();
        // BAHAN TUKANG TERAMPIL BLORA
        // Tukangterampil::factory(994)->create();


// =========================================================
        User::create([
            'id'  => 1,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigit',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 2,
            'name'  => 'Anex Fachrian, ST. MT',
            'username' => 'Anex',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto4.png',
            'email' => 'sipjakiblora@gmail.com',
            'password' => bcrypt('adminadmin321')
        ]);

        User::create([
            'id'  => 3,
            'name'  => 'Anindya Ghanni',
            'username' => 'Anindya Ghanni',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto4.png',
            'email' => 'anindyaghanni1989@gmail.com',
            'password' => bcrypt('20050219')
        ]);

        User::create([
            'id'  => 4,
            'name'  => 'Putri Wulandary',
            'username' => 'Putri Wulandary',
            'statusadmin_id' => '2',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'putriwulandary1234@gmail.com',
            'password' => bcrypt('13102')
        ]);



        // =================================================================
        statusadmin::create([
            'id'  => '1',
            'statusadmin'  => 'super_admin',
        ]);

        statusadmin::create([
            'id'  => '2',
            'statusadmin'  => 'keuangan',
        ]);

        statusadmin::create([
            'id'  => '3',
            'statusadmin'  => 'peserta',
        ]);

        statusadmin::create([
            'id'  => '4',
            'statusadmin'  => 'official',
        ]);

statusadmin::create(['id' => 6, 'statusadmin' => 'pos1']);
statusadmin::create(['id' => 7, 'statusadmin' => 'pos2']);
statusadmin::create(['id' => 8, 'statusadmin' => 'pos3']);
statusadmin::create(['id' => 9, 'statusadmin' => 'pos4']);
statusadmin::create(['id' => 10, 'statusadmin' => 'pos5']);
statusadmin::create(['id' => 11, 'statusadmin' => 'pos6']);
statusadmin::create(['id' => 12, 'statusadmin' => 'pos7']);
statusadmin::create(['id' => 13, 'statusadmin' => 'pos8']);
statusadmin::create(['id' => 14, 'statusadmin' => 'pos9']);
statusadmin::create(['id' => 15, 'statusadmin' => 'pos10']);
statusadmin::create(['id' => 16, 'statusadmin' => 'pos11']);
statusadmin::create(['id' => 17, 'statusadmin' => 'pos12']);
statusadmin::create(['id' => 18, 'statusadmin' => 'pos13']);
statusadmin::create(['id' => 19, 'statusadmin' => 'pos14']);
statusadmin::create(['id' => 20, 'statusadmin' => 'pos15']);
statusadmin::create(['id' => 21, 'statusadmin' => 'pos16']);
statusadmin::create(['id' => 22, 'statusadmin' => 'pos17']);
statusadmin::create(['id' => 23, 'statusadmin' => 'pos18']);
statusadmin::create(['id' => 24, 'statusadmin' => 'pos19']);
statusadmin::create(['id' => 25, 'statusadmin' => 'pos20']);
statusadmin::create(['id' => 26, 'statusadmin' => 'pos21']);
statusadmin::create(['id' => 27, 'statusadmin' => 'pos22']);



            // ================= =====================================================================================
for ($i = 1; $i <= 2; $i++) {
    daftartim::create([
        'id'           => $i,
        'akun_id'      => 1,
        'namalengkap'  => 'Peserta ' . $i,
        'jeniskelamin' => $i % 2 == 0 ? 'Perempuan' : 'Laki-laki',
        'ttl'          => '2000-01-' . str_pad($i, 2, '0', STR_PAD_LEFT),
        'nik'          => str_pad($i, 16, $i),
        'notelepon'    => '081234567' . str_pad($i, 3, '0', STR_PAD_LEFT),
        'foto'         => 'https://source.unsplash.com/random/300x300/?mountain&sig=' . $i,
    ]);
}

for ($i = 12; $i <= 15; $i++) {
    daftartim::create([
        'id'           => $i,
        'akun_id'      => 2,
        'namalengkap'  => 'Peserta ' . $i,
        'jeniskelamin' => $i % 2 == 0 ? 'Perempuan' : 'Laki-laki',
        'ttl'          => '2000-01-' . str_pad($i, 2, '0', STR_PAD_LEFT),
        'nik'          => str_pad($i, 16, $i),
        'notelepon'    => '081234567' . str_pad($i, 3, '0', STR_PAD_LEFT),
        'foto'         => 'https://source.unsplash.com/random/300x300/?mountain&sig=' . $i,
    ]);
}


// =========================================================
    perlombaan::create([
    'id'        => 1,
    'kegiatan'  => 'Semarang Running 2025',
    'tempat'    => 'Semarang',
    'koordinat' => '-6.9667,110.4167', // Koordinat pusat kota Semarang (Simpang Lima)
    'lokasi'    => 'Lapangan Simpang Lima',
]);
// =========================================================
    kategoriperlombaan::create([
    'id'        => 1,
    'kategoriperlombaan'  => 'UMUM Putera',
]);

kategoriperlombaan::create([
    'id'        => 2,
    'kategoriperlombaan'  => 'UMUM Puteri',
]);

kategoriperlombaan::create([
    'id'        => 3,
    'kategoriperlombaan'  => 'Pelajar Putera',
]);

kategoriperlombaan::create([
    'id'        => 4,
    'kategoriperlombaan'  => 'Pelajar Puteri',
]);
// provinsi Aceh

kota::create(['id' => 1, 'kota' => 'Kota Banda Aceh']);
kota::create(['id' => 2, 'kota' => 'Kota Sabang']);
kota::create(['id' => 3, 'kota' => 'Kota Lhokseumawe']);
kota::create(['id' => 4, 'kota' => 'Kota Langsa']);
kota::create(['id' => 5, 'kota' => 'Kota Subulussalam']);
kota::create(['id' => 6, 'kota' => 'Kab. Aceh Selatan']);
kota::create(['id' => 7, 'kota' => 'Kab. Aceh Tenggara']);
kota::create(['id' => 8, 'kota' => 'Kab. Aceh Timur']);
kota::create(['id' => 9, 'kota' => 'Kab. Aceh Tengah']);
kota::create(['id' => 10, 'kota' => 'Kab. Aceh Barat']);
kota::create(['id' => 11, 'kota' => 'Kab. Aceh Besar']);
kota::create(['id' => 12, 'kota' => 'Kab. Pidie']);
kota::create(['id' => 13, 'kota' => 'Kab. Aceh Utara']);
kota::create(['id' => 14, 'kota' => 'Kab. Simeulue']);
kota::create(['id' => 15, 'kota' => 'Kab. Aceh Singkil']);
kota::create(['id' => 16, 'kota' => 'Kab. Bireuen']);
kota::create(['id' => 17, 'kota' => 'Kab. Aceh Barat Daya']);
kota::create(['id' => 18, 'kota' => 'Kab. Gayo Lues']);
kota::create(['id' => 19, 'kota' => 'Kab. Aceh Jaya']);
kota::create(['id' => 20, 'kota' => 'Kab. Nagan Raya']);
kota::create(['id' => 21, 'kota' => 'Kab. Aceh Tamiang']);
kota::create(['id' => 22, 'kota' => 'Kab. Bener Meriah']);
kota::create(['id' => 23, 'kota' => 'Kab. Pidie Jaya']);

// provinsi Sumatera Utara
kota::create(['id' => 24, 'kota' => 'Kota Medan']);
kota::create(['id' => 25, 'kota' => 'Kota Pematang Siantar']);
kota::create(['id' => 26, 'kota' => 'Kota Sibolga']);
kota::create(['id' => 27, 'kota' => 'Kota Tanjung Balai']);
kota::create(['id' => 28, 'kota' => 'Kota Binjai']);
kota::create(['id' => 29, 'kota' => 'Kota Tebing Tinggi']);
kota::create(['id' => 30, 'kota' => 'Kota Padang Sidempuan']);
kota::create(['id' => 31, 'kota' => 'Kab. Serdang Bedagai']);
kota::create(['id' => 32, 'kota' => 'Kab. Deli Serdang']);
kota::create(['id' => 33, 'kota' => 'Kab. Langkat']);
kota::create(['id' => 34, 'kota' => 'Kab. Karo']);
kota::create(['id' => 35, 'kota' => 'Kab. Simalungun']);
kota::create(['id' => 36, 'kota' => 'Kab. Dairi']);
kota::create(['id' => 37, 'kota' => 'Kab. Toba Samosir']);
kota::create(['id' => 38, 'kota' => 'Kab. Mandailing Natal']);
kota::create(['id' => 39, 'kota' => 'Kab. Nias']);
kota::create(['id' => 40, 'kota' => 'Kab. Humbang Hasundutan']);
kota::create(['id' => 41, 'kota' => 'Kab. Pakpak Bharat']);
kota::create(['id' => 42, 'kota' => 'Kab. Samosir']);
kota::create(['id' => 43, 'kota' => 'Kab. Labuhan Batu']);
kota::create(['id' => 44, 'kota' => 'Kab. Asahan']);
kota::create(['id' => 45, 'kota' => 'Kab. Tapanuli Selatan']);
kota::create(['id' => 46, 'kota' => 'Kab. Tapanuli Utara']);
kota::create(['id' => 47, 'kota' => 'Kab. Tapanuli Tengah']);
kota::create(['id' => 48, 'kota' => 'Kab. Batu Bara']);
kota::create(['id' => 49, 'kota' => 'Kab. Padang Lawas']);
kota::create(['id' => 50, 'kota' => 'Kab. Padang Lawas Utara']);
kota::create(['id' => 51, 'kota' => 'Kab. Nias Selatan']);
kota::create(['id' => 52, 'kota' => 'Kab. Nias Barat']);
kota::create(['id' => 53, 'kota' => 'Kab. Nias Utara']);

// provinsi Sumatera Barat
kota::create(['id' => 54, 'kota' => 'Kota Padang']);
kota::create(['id' => 55, 'kota' => 'Kota Bukittinggi']);
kota::create(['id' => 56, 'kota' => 'Kota Payakumbuh']);
kota::create(['id' => 57, 'kota' => 'Kota Pariaman']);
kota::create(['id' => 58, 'kota' => 'Kab. Agam']);
kota::create(['id' => 59, 'kota' => 'Kab. Pasaman']);
kota::create(['id' => 60, 'kota' => 'Kab. Lima Puluh Kota']);
kota::create(['id' => 61, 'kota' => 'Kab. Solok']);
kota::create(['id' => 62, 'kota' => 'Kab. Padang Pariaman']);
kota::create(['id' => 63, 'kota' => 'Kab. Pesisir Selatan']);
kota::create(['id' => 64, 'kota' => 'Kab. Tanah Datar']);
kota::create(['id' => 65, 'kota' => 'Kab. Sijunjung']);
kota::create(['id' => 66, 'kota' => 'Kab. Dharmasraya']);
kota::create(['id' => 67, 'kota' => 'Kab. Pasaman Barat']);
kota::create(['id' => 68, 'kota' => 'Kab. Kepulauan Mentawai']);

// provinsi Riau
kota::create(['id' => 69, 'kota' => 'Kota Pekanbaru']);
kota::create(['id' => 70, 'kota' => 'Kota Dumai']);
kota::create(['id' => 71, 'kota' => 'Kab. Kampar']);
kota::create(['id' => 72, 'kota' => 'Kab. Indragiri Hulu']);
kota::create(['id' => 73, 'kota' => 'Kab. Bengkalis']);
kota::create(['id' => 74, 'kota' => 'Kab. Indragiri Hilir']);
kota::create(['id' => 75, 'kota' => 'Kab. Pelalawan']);
kota::create(['id' => 76, 'kota' => 'Kab. Rokan Hulu']);
kota::create(['id' => 77, 'kota' => 'Kab. Rokan Hilir']);
kota::create(['id' => 78, 'kota' => 'Kab. Siak']);
kota::create(['id' => 79, 'kota' => 'Kab. Kuantan Singingi']);
kota::create(['id' => 80, 'kota' => 'Kab. Kepulauan Meranti']);

// provinsi Jambi
kota::create(['id' => 81, 'kota' => 'Kota Jambi']);
kota::create(['id' => 82, 'kota' => 'Kota Sungai Penuh']);
kota::create(['id' => 83, 'kota' => 'Kab. Kerinci']);
kota::create(['id' => 84, 'kota' => 'Kab. Merangin']);
kota::create(['id' => 85, 'kota' => 'Kab. Sarolangun']);
kota::create(['id' => 86, 'kota' => 'Kab. Batanghari']);
kota::create(['id' => 87, 'kota' => 'Kab. Muaro Jambi']);
kota::create(['id' => 88, 'kota' => 'Kab. Tanjung Jabung Barat']);
kota::create(['id' => 89, 'kota' => 'Kab. Tanjung Jabung Timur']);
kota::create(['id' => 90, 'kota' => 'Kab. Bungo']);
kota::create(['id' => 91, 'kota' => 'Kab. Tebo']);

// provinsi Sumatera Selatan
kota::create(['id' => 92, 'kota' => 'Kota Palembang']);
kota::create(['id' => 93, 'kota' => 'Kota Lubuklinggau']);
kota::create(['id' => 94, 'kota' => 'Kota Pagar Alam']);
kota::create(['id' => 95, 'kota' => 'Kota Prabumulih']);
kota::create(['id' => 96, 'kota' => 'Kab. Musi Rawas']);
kota::create(['id' => 97, 'kota' => 'Kab. Ogan Komering Ulu']);
kota::create(['id' => 98, 'kota' => 'Kab. Ogan Komering Ilir']);
kota::create(['id' => 99, 'kota' => 'Kab. Muara Enim']);
kota::create(['id' => 100, 'kota' => 'Kab. Lahat']);
kota::create(['id' => 101, 'kota' => 'Kab. Musi Banyuasin']);
kota::create(['id' => 102, 'kota' => 'Kab. Banyuasin']);
kota::create(['id' => 103, 'kota' => 'Kab. Ogan Ilir']);
kota::create(['id' => 104, 'kota' => 'Kab. Empat Lawang']);
kota::create(['id' => 105, 'kota' => 'Kab. Penukal Abab Lematang Ilir']);
kota::create(['id' => 106, 'kota' => 'Kab. Ogan Komering Ulu Timur']);
kota::create(['id' => 107, 'kota' => 'Kab. Ogan Komering Ulu Selatan']);

// ... [continuing for all 34 provinces]

// provinsi Papua

kota::create(['id' => 500, 'kota' => 'Kota Jayapura']);
kota::create(['id' => 501, 'kota' => 'Kab. Jayapura']);
kota::create(['id' => 502, 'kota' => 'Kab. Biak Numfor']);
kota::create(['id' => 503, 'kota' => 'Kab. Keerom']);
kota::create(['id' => 504, 'kota' => 'Kab. Sarmi']);
kota::create(['id' => 505, 'kota' => 'Kab. Mamberamo Raya']);
kota::create(['id' => 506, 'kota' => 'Kab. Waropen']);
kota::create(['id' => 507, 'kota' => 'Kab. Supiori']);
kota::create(['id' => 508, 'kota' => 'Kab. Mamberamo Tengah']);
kota::create(['id' => 509, 'kota' => 'Kab. Yapen Waropen']);
kota::create(['id' => 510, 'kota' => 'Kab. Pegunungan Bintang']);
kota::create(['id' => 511, 'kota' => 'Kab. Yahukimo']);
kota::create(['id' => 512, 'kota' => 'Kab. Tolikara']);
kota::create(['id' => 513, 'kota' => 'Kab. Jayawijaya']);
kota::create(['id' => 514, 'kota' => 'Kab. Lanny Jaya']);
kota::create(['id' => 515, 'kota' => 'Kab. Nduga']);
kota::create(['id' => 516, 'kota' => 'Kab. Puncak']);
kota::create(['id' => 517, 'kota' => 'Kab. Dogiyai']);
kota::create(['id' => 518, 'kota' => 'Kab. Intan Jaya']);
kota::create(['id' => 519, 'kota' => 'Kab. Deiyai']);
kota::create(['id' => 520, 'kota' => 'Kab. Puncak Jaya']);
kota::create(['id' => 521, 'kota' => 'Kab. Mimika']);
kota::create(['id' => 522, 'kota' => 'Kab. Boven Digoel']);
kota::create(['id' => 523, 'kota' => 'Kab. Mappi']);
kota::create(['id' => 524, 'kota' => 'Kab. Asmat']);
kota::create(['id' => 525, 'kota' => 'Kab. Merauke']);

provinsi::create(['id' => 1, 'provinsi' => 'Aceh']);
provinsi::create(['id' => 2, 'provinsi' => 'Sumatera Utara']);
provinsi::create(['id' => 3, 'provinsi' => 'Sumatera Barat']);
provinsi::create(['id' => 4, 'provinsi' => 'Riau']);
provinsi::create(['id' => 5, 'provinsi' => 'Jambi']);
provinsi::create(['id' => 6, 'provinsi' => 'Sumatera Selatan']);
provinsi::create(['id' => 7, 'provinsi' => 'Bengkulu']);
provinsi::create(['id' => 8, 'provinsi' => 'Lampung']);
provinsi::create(['id' => 9, 'provinsi' => 'Kepulauan Bangka Belitung']);
provinsi::create(['id' => 10, 'provinsi' => 'Kepulauan Riau']);
provinsi::create(['id' => 11, 'provinsi' => 'DKI Jakarta']);
provinsi::create(['id' => 12, 'provinsi' => 'Jawa Barat']);
provinsi::create(['id' => 13, 'provinsi' => 'Jawa Tengah']);
provinsi::create(['id' => 14, 'provinsi' => 'DI Yogyakarta']);
provinsi::create(['id' => 15, 'provinsi' => 'Jawa Timur']);
provinsi::create(['id' => 16, 'provinsi' => 'Banten']);
provinsi::create(['id' => 17, 'provinsi' => 'Bali']);
provinsi::create(['id' => 18, 'provinsi' => 'Nusa Tenggara Barat']);
provinsi::create(['id' => 19, 'provinsi' => 'Nusa Tenggara Timur']);
provinsi::create(['id' => 20, 'provinsi' => 'Kalimantan Barat']);
provinsi::create(['id' => 21, 'provinsi' => 'Kalimantan Tengah']);
provinsi::create(['id' => 22, 'provinsi' => 'Kalimantan Selatan']);
provinsi::create(['id' => 23, 'provinsi' => 'Kalimantan Timur']);
provinsi::create(['id' => 24, 'provinsi' => 'Kalimantan Utara']);
provinsi::create(['id' => 25, 'provinsi' => 'Sulawesi Utara']);
provinsi::create(['id' => 26, 'provinsi' => 'Sulawesi Tengah']);
provinsi::create(['id' => 27, 'provinsi' => 'Sulawesi Selatan']);
provinsi::create(['id' => 28, 'provinsi' => 'Sulawesi Tenggara']);
provinsi::create(['id' => 29, 'provinsi' => 'Gorontalo']);
provinsi::create(['id' => 30, 'provinsi' => 'Sulawesi Barat']);
provinsi::create(['id' => 31, 'provinsi' => 'Maluku']);
provinsi::create(['id' => 32, 'provinsi' => 'Maluku Utara']);
provinsi::create(['id' => 33, 'provinsi' => 'Papua']);
provinsi::create(['id' => 34, 'provinsi' => 'Papua Barat']);
// =========================================================
    berkaslomba::create([
    'id'        => 1,
    'perlombaan_id'  => '1',
    'user_id'  => '4',
]);
    berkaslomba::create([
    'id'        => 2,
    'perlombaan_id'  => '1',
    'user_id'  => '5',
]);
    berkaslomba::create([
    'id'        => 3,
    'perlombaan_id'  => '1',
    'user_id'  => '6',
]);



    }
 /**
     * Menghitung usia berdasarkan tanggal lahir.
     *
     * @param  string  $birthDate
     * @return int
     */
    protected function calculateAge($birthDate)
    {
        return Carbon::parse($birthDate)->age;
    }


    // PEMERINTAH KABUPATEN BLORA provinsi JAWA TENGAH


}
