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

    // Hitung jumlah user berdasarkan statusadmin_id 1 sampai 4
    $jumlahUser1 = \App\Models\User::where('statusadmin_id', 1)->count();
    $jumlahUser2 = \App\Models\User::where('statusadmin_id', 2)->count();
    $jumlahUser3 = \App\Models\User::where('statusadmin_id', 3)->count();
    $jumlahUser4 = \App\Models\User::where('statusadmin_id', 4)->count();

    // Hitung jumlah berkasperlombaan berdasarkan kategoriperlombaan_id 1 sampai 4
    $jumlahBerkas1 = \App\Models\BerkasPerlombaan::where('kategoriperlombaan_id', 1)->count();
    $jumlahBerkas2 = \App\Models\BerkasPerlombaan::where('kategoriperlombaan_id', 2)->count();
    $jumlahBerkas3 = \App\Models\BerkasPerlombaan::where('kategoriperlombaan_id', 3)->count();
    $jumlahBerkas4 = \App\Models\BerkasPerlombaan::where('kategoriperlombaan_id', 4)->count();

    return view('00_semarang.02_backend.01_dashboard.01_halamandasboard', [
        'title' => 'Dashboard SNOC X 2025',
        'user' => $user,
        'jumlahUser1' => $jumlahUser1,
        'jumlahUser2' => $jumlahUser2,
        'jumlahUser3' => $jumlahUser3,
        'jumlahUser4' => $jumlahUser4,
        'jumlahBerkas1' => $jumlahBerkas1,
        'jumlahBerkas2' => $jumlahBerkas2,
        'jumlahBerkas3' => $jumlahBerkas3,
        'jumlahBerkas4' => $jumlahBerkas4,
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
