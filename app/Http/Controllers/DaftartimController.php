<?php

namespace App\Http\Controllers;

use App\Models\daftartim;
use App\Models\statusadmin;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use App\Models\User;

class DaftartimController extends Controller
{
    //
public function daftartim()
{
    $user = Auth::user(); // Dapatkan data user yang login
    $userId = Auth::id(); // Dapatkan ID user yang login

    // Ambil data daftartim yang akun_id-nya sama dengan user yang login
    $data = daftartim::where('akun_id', $userId)->get();

    return view('00_semarang.02_backend.01_informasitim.01_daftartim.01_daftartim', [
        'title' => 'Daftar Tim Saudara',
        'user' => $user,
        'userId' => $userId, // kirim juga ID user ke view
        'data' => $data,
    ]);
}

public function deletedaftartim($id)
{
    $tim = daftartim::findOrFail($id);

    // Hapus foto jika ada
    // if ($tim->foto && file_exists(storage_path('app/public/' . $tim->foto))) {
    //     unlink(storage_path('app/public/' . $tim->foto));
    // }

    $tim->delete();

    return redirect()->back()->with('delete', 'Data tim berhasil dihapus.');
}



}
