<?php

namespace App\Http\Controllers;

use App\Models\berkasperlombaan;
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
    $jumlahBerkas1 = berkasperlombaan::where('kategoriperlombaan_id', 1)->count();
    $jumlahBerkas2 = berkasperlombaan::where('kategoriperlombaan_id', 2)->count();
    $jumlahBerkas3 = berkasperlombaan::where('kategoriperlombaan_id', 3)->count();
    $jumlahBerkas4 = berkasperlombaan::where('kategoriperlombaan_id', 4)->count();

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




}
