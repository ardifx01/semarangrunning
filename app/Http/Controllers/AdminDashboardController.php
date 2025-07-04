<?php

namespace App\Http\Controllers;

use App\Models\headerberanda;
use App\Models\pagevisit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;


class AdminDashboardController extends Controller
{
    //
    public function index()
    {

        $user = Auth::user();

        $visitCount = pagevisit::sum('visit_count'); // Total kunjungan
        $conversionRate = 12; // Angka contoh, sesuaikan dengan logika Anda
        $salesRate = 0.8; // Angka contoh, sesuaikan dengan logika Anda
        $registrationRate = -1; // Angka contoh, sesuaikan dengan logika

        // return view('backend.00_adminmasjaki.01_fiturterpisah.01_dashboard', [
        return view('00_semarang.02_backend.01_dashboard.01_halamandasboard', [
            'title' => 'Dashboard SNOC X 2025',
            'user' => $user,
            'visitCount' => $visitCount,
            'conversionRate' => $conversionRate,
            'salesRate' => $salesRate,
            'registrationRate' => $registrationRate,
            // 'jumlahQa' => $jumlahQa,  // Menambahkan jumlah data ke view
            // 'jumlahBerita' => $jumlahBerita,  // Menambahkan jumlah data ke view
            // 'jumlahAgendasertifikasi' => $jumlahAgendasertifikasi,  // Menambahkan jumlah data ke view
        ]);
    }


    public function header()
    {

        $data = headerberanda::all();
        $user = Auth::user();
        // return view('backend.00_adminmasjaki.01_fiturterpisah.01_dashboard', [
        return view('backend.01_beranda.01_header.index', [
            'title' => 'Beranda | Header',
            'user' => $user,
            'data' => $data,
        ]);
    }

    public function headerdelete($judul)
    {
        // Cari item berdasarkan judul
        $entry = headerberanda::where('judul', $judul)->first();

        if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            if (Storage::disk('public')->exists($entry->header)) {
                Storage::disk('public')->delete($entry->header);
            }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/header')->with('delete', 'Data Berhasil Di Hapus !');

        }

        return redirect()->back()->with('error', 'Item not found');
    }



}
