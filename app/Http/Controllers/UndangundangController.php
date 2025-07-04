<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\undangundang; // Pastikan namespace model sesuai dengan struktur direktori

class UndangundangController extends Controller
{
    public function index()
    {
        // $data= struktur::all(); // Menggunakan paginate() untuk pagination
        $user = Auth::user();

        return view('backend.14_peraturan.01_undangundang.index', [
            'title' => 'Undang - Undang Jasa Konstruksi',
            'user' => $user,
            // 'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }


    // public function showByName($nama)
    // {
    //     $item = Skktenagakerja::where('nama', $nama)->firstOrFail();

    //     return view('backend.04_skk.01_skk.show', [
    //         'data' => $item,
    //         'title' => 'Detail SKK Tenaga Kerja',
    //     ]);
    // }
}
