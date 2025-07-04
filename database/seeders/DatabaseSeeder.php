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
use App\Models\perlombaan;
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
            'name'  => 'Miftahunnuril Anam',
            'username' => 'Anam',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto4.png',
            'email' => 'masjakiblora@gmail.com',
            'password' => bcrypt('adminadmin123')
        ]);

        User::create([
            'id'  => 4,
            'name'  => 'Mas Budi',
            'username' => 'Mas Budi',
            'statusadmin_id' => '3',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitpekerja@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 5,
            'name'  => 'Anam',
            'username' => 'Anam',
            'statusadmin_id' => '3',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitsupp_pabrik@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'id'  => 6,
            'name'  => 'Zaqi',
            'username' => 'Zaqi',
            'statusadmin_id' => '3',
            'avatar' => 'user/avatar/sigit.jpg',
            'email' => 'sigitsupp_peralatan@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);


        // =================================================================
        statusadmin::create([
            'id'  => '1',
            'statusadmin'  => 'super_admin',
        ]);

        statusadmin::create([
            'id'  => '2',
            'statusadmin'  => 'admin',
        ]);

        statusadmin::create([
            'id'  => '3',
            'statusadmin'  => 'peserta',
        ]);


            // ================= =====================================================================================


// =========================================================
    perlombaan::create([
    'id'        => 1,
    'kegiatan'  => 'Semarang Running 2025',
    'tempat'    => 'Semarang',
    'koordinat' => '-6.9667,110.4167', // Koordinat pusat kota Semarang (Simpang Lima)
    'lokasi'    => 'Lapangan Simpang Lima',
]);

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


    // PEMERINTAH KABUPATEN BLORA PROVINSI JAWA TENGAH


}
