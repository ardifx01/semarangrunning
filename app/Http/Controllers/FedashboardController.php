<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\berita; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\beritaagenda;
use App\Models\beritajakon;
use App\Models\himbauandinas;
use App\Models\kegiatanjaskon;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\pengawasanlokasi;
use App\Models\artikeljakonmasjaki;
use App\Models\headerberanda;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\qa;
use App\Models\sertifikasiagenda;
use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class FedashboardController extends Controller
{
    public function index()
    {
        // $data = beritajakon::orderBy('created_at', 'desc')->get(); //
        // $dataartikel = artikeljakonmasjaki::orderBy('created_at', 'desc')->get(); //
        // $dataheaderberanda = headerberanda::orderBy('created_at', 'desc')->get(); //


        $user = Auth::user();


        // return view('frontend.00_full.index', [
        // return view('404', [
        return view('00_semarang.01_frontend.01_halamanutama.halamanutama', [
            'title' => 'SNOC X',
            // 'data' => $data, // Mengirimkan data paginasi ke view
            // 'dataartikel' => $dataartikel, // Mengirimkan data paginasi ke view
            // 'dataheaderberanda' => $dataheaderberanda, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }


}

