<?php

namespace App\Http\Controllers;

use App\Models\agendastatus;
use App\Models\asosiasipengusaha;
use App\Models\berita;
use App\Models\beritaagenda;
use App\Models\himbauandinas;
use App\Models\kegiatanjaskon;
use App\Models\keputusanmenteri;
use App\Models\keterampilanpekerja;
use App\Models\ketertiban;
use App\Models\laporankegiatan;
use App\Models\metodepengadaan;
use App\Models\paketpekerjaan;
use App\Models\pelatihan;
use App\Models\penanggungjawabteknis;
use App\Models\pengawasanbangunangedung;
use App\Models\pengawasanlokasi;
use App\Models\pengawasanstatus;
use App\Models\pengawasantindakan;
use App\Models\peraturan;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\pergubernur;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\qa;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\referensi;
use App\Models\statusadmin;
use App\Models\suratedaran;
use App\Models\suratkeputusan;
use App\Models\tahunpilihan;
use App\Models\timpembina;
use App\Models\Tukangterampil;
use App\Models\uijk;
use App\Models\undangundang;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        // $datahimbauandinas = himbauandinas::all();
        // $jumlahQa = qa::count();  // Mendapatkan jumlah data
        // $jumlahBerita = berita::count();  // Mendapatkan jumlah data
        // $jumlahAgendasertifikasi = beritaagenda::count();  // Mendapatkan jumlah data
        $jumlahDokumentasiPelatihan = kegiatanjaskon::count();  // Mendapatkan jumlah data
        $jumlahDokumentasiAcara = laporankegiatan::count();  // Mendapatkan jumlah data
        $jumlahPengawasandanketeriban = ketertiban::count();  // Mendapatkan jumlah data
        $jumlahAsosiasiPengusaha = asosiasipengusaha::count();  // Mendapatkan jumlah data
        $jumlahPaketPekerjaan = paketpekerjaan::count();  // Mendapatkan jumlah data
        $jumlahIjinUsaha = uijk::count();  // Mendapatkan jumlah data
        $jumlahPenanggungJawabTeknis = penanggungjawabteknis::count();  // Mendapatkan jumlah data
        $jumlahKecelakaan = pelatihan::count();  // Mendapatkan jumlah data
        $jumlahUU = peraturan::count();  // Mendapatkan jumlah data
        $jumlahPeraturanPemerintah = perpemerintah::count();  // Mendapatkan jumlah data
        $jumlahPeraturanPresiden = perpresiden::count();  // Mendapatkan jumlah data
        $jumlahPeraturanMenteri = permenteri::count();  // Mendapatkan jumlah data
        $jumlahKeputusanMenteri = keputusanmenteri::count();  // Mendapatkan jumlah data
        $jumlahSuratEdaranMenteri = suratedaran::count();  // Mendapatkan jumlah data
        $jumlahSuratReferensi = referensi::count();  // Mendapatkan jumlah data
        $jumlahPeraturanDaerah = perdaerah::count();  // Mendapatkan jumlah data
        $jumlahPeraturanGubernur = pergubernur::count();  // Mendapatkan jumlah data
        $jumlahPeraturanWalikotaBupati = perbupatiwalikota::count();  // Mendapatkan jumlah data
        $jumlahSuratKeputusan = suratkeputusan::count();  // Mendapatkan jumlah data

        $jumlahstatusadmin = statusadmin::count();
        $jumlahpengawasanlokasi = pengawasanlokasi::count();
        $jumlahqasebagai = qasebagai::count();
        $jumlahqapertanyaan = qapertanyaan::count();
        $jumlahmetodepengadaan = metodepengadaan::count();
        $jumlahpengawasanbangunangedung = pengawasanbangunangedung::count();
        $jumlahpengawasanstatus = pengawasanstatus::count();
        $jumlahpengawasantindakan = pengawasantindakan::count();
        $jumlahagendastatus = agendastatus::count();
        $jumlahpilihantahun = tahunpilihan::count();


        $user = Auth::user();

        return view('backend.00_dashboard.index', [
            'title' => 'Admin Dashboard Sipjaki KBB',
            'user' => $user,
            // 'jumlahQa' => $jumlahQa,  // Menambahkan jumlah data ke view
            // 'jumlahBerita' => $jumlahBerita,  // Menambahkan jumlah data ke view
            // 'jumlahAgendasertifikasi' => $jumlahAgendasertifikasi,  // Menambahkan jumlah data ke view
            'jumlahDokumentasiPelatihan' => $jumlahDokumentasiPelatihan,  // Menambahkan jumlah data ke view
            'jumlahDokumentasiAcara' => $jumlahDokumentasiAcara,  // Menambahkan jumlah data ke view
            'jumlahPengawasandanketeriban' => $jumlahPengawasandanketeriban,  // Menambahkan jumlah data ke view
            'jumlahAsosiasiPengusaha' => $jumlahAsosiasiPengusaha,  // Menambahkan jumlah data ke view
            'jumlahPaketPekerjaan' => $jumlahPaketPekerjaan,  // Menambahkan jumlah data ke view
            'jumlahIjinUsaha' => $jumlahIjinUsaha,  // Menambahkan jumlah data ke view
            'jumlahKecelakaan' => $jumlahKecelakaan,  // Menambahkan jumlah data ke view
            'jumlahUU' => $jumlahUU,  // Menambahkan jumlah data ke view
            'jumlahPeraturanPemerintah' => $jumlahPeraturanPemerintah,  // Menambahkan jumlah data ke view
            'jumlahPeraturanPresiden' => $jumlahPeraturanPresiden,  // Menambahkan jumlah data ke view
            'jumlahPeraturanMenteri' => $jumlahPeraturanMenteri,  // Menambahkan jumlah data ke view
            'jumlahKeputusanMenteri' => $jumlahKeputusanMenteri,  // Menambahkan jumlah data ke view
            'jumlahSuratEdaranMenteri' => $jumlahSuratEdaranMenteri,  // Menambahkan jumlah data ke view
            'jumlahSuratReferensi' => $jumlahSuratReferensi,  // Menambahkan jumlah data ke view
            'jumlahPeraturanDaerah' => $jumlahPeraturanDaerah,  // Menambahkan jumlah data ke view
            'jumlahPeraturanGubernur' => $jumlahPeraturanGubernur,  // Menambahkan jumlah data ke view
            'jumlahPeraturanWalikotaBupati' => $jumlahPeraturanWalikotaBupati,  // Menambahkan jumlah data ke view
            'jumlahSuratKeputusan' => $jumlahSuratKeputusan,  // Menambahkan jumlah data ke view


            'jumlahstatusadmin' => $jumlahstatusadmin, // Mengirimkan data kecamatan unik ke view
            'jumlahpengawasanlokasi' => $jumlahpengawasanlokasi, // Mengirimkan data kecamatan unik ke view
            'jumlahqasebagai' => $jumlahqasebagai, // Mengirimkan data kecamatan unik ke view
            'jumlahqapertanyaan' => $jumlahqapertanyaan, // Mengirimkan data kecamatan unik ke view
            'jumlahmetodepengadaan' => $jumlahmetodepengadaan, // Mengirimkan data kecamatan unik ke view
            'jumlahpengawasanbangunangedung' => $jumlahpengawasanbangunangedung, // Mengirimkan data kecamatan unik ke view
            'jumlahpengawasanstatus' => $jumlahpengawasanstatus, // Mengirimkan data kecamatan unik ke view
            'jumlahpengawasantindakan' => $jumlahpengawasantindakan, // Mengirimkan data kecamatan unik ke view
            'jumlahagendastatus' => $jumlahagendastatus, // Mengirimkan data kecamatan unik ke view
            'jumlahpilihantahun' => $jumlahpilihantahun, // Mengirimkan data kecamatan unik ke view
        ]);
    }

}
