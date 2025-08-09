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
        //
           $data = daftartim::all();
           $user = Auth::user();

        return view('00_semarang.02_backend.01_informasitim.01_daftartim.01_daftartim',[
            'title' => 'Daftar Tim Saudara ',
            'user' => $user,
            'data' => $data,
        ]);
    }


}
