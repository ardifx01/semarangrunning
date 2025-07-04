<?php

namespace App\Http\Controllers;

use App\Models\statusadmin;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use App\Models\User;

class LoginController extends Controller
{
    //

    public function index()
    {
        //
        return view('login.index',[
            'title' => 'Silahkan Login',
        ]);
    }

 public function showRegisterForm()
{
    $datastatus = statusadmin::whereIn('id', [3, 7])->get();

    return view('login.register', [
        'title' => 'Silahkan Daftar',
        'datastatusadmin' => $datastatus,
    ]);
}

    // public function authenticate(Request $request)
    // {
        // $credentials = $request->validate([
        //     'email' => 'required|email',  // PENGGUNAAN DNS UNTUK MENERIMA EMAIL YANG SANGAT BENAR VALID ,
        //     'password' => 'required'
        // ]);

        // $credentials = $request->validate([
        //     'email' => ['required|email anda salah !', 'email:crf',],
        //     'password' => 'required'
        // ]);

        // // Coba melakukan autentikasi pengguna
        // if (Auth::attempt($credentials)) {
        //     // Jika autentikasi berhasil, arahkan pengguna ke dashboard
        //     return redirect()->intended('/dashboard');
        // } else {
        //     // Jika autentikasi gagal, kembalikan pengguna ke halaman login dengan pesan kesalahan
        //     return back()->withErrors(['email' => 'Email atau kata sandi yang Anda masukkan salah.'])->withInput($request->only('email'));
        // }


        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboards');
        // }
        // return back()->with('loginError', 'Login Failed !');

        // dd('Berhasil Masuk Iqlima');
    // }
// =========================
public function authenticate(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'password.required' => 'Password harus diisi.',
    ]);

    if (!Auth::attempt($request->only('email', 'password'))) {
        return back()
            ->withInput()
            ->withErrors(['loginError' => 'Email atau password Anda salah!']);
    }

    $request->session()->regenerate();
    return redirect()->intended('/dashboard');
}


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function register(Request $request)
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username|max:255',
            // 'statusadmin_id' => 'required|string',
            'phone_number' => 'required|numeric|unique:users,phone_number',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ], [
            'statusadmin_id.required' => 'Pilih akun !.',
            'name.required' => 'Nama Lengkap wajib diisi.',
            'username.required' => 'Username wajib diisi.',
            'username.unique' => 'Username sudah terdaftar, silakan pilih yang lain.',
            'phone_number.required' => 'Nomor HP wajib diisi.',
            'phone_number.unique' => 'Nomor HP sudah terdaftar, silakan pilih yang lain.',
            'phone_number.numeric' => 'Nomor HP harus berupa angka.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar, silakan pilih yang lain.',
            'password.required' => 'Password wajib diisi.',
            // 'password.min' => 'Password harus memiliki minimal 8 karakter.',
            // 'password.confirmed' => 'Password harus lebih dari 8 karakter.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Membuat user baru dan menyimpan data
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // $user->statusadmin_id = $request->statusadmin_id;
        $user->statusadmin_id = 3; // Menetapkan statusadmin_id / ini untuk pemohon saja
        $user->avatar = 'assets/abgblora/logo/iconabgblora.png'; // Menetapkan avatar default
        $user->save();

        // Redirect atau respon sukses
        return redirect('/login')->with('success', 'Pendaftaran berhasil, silakan login.');
    }



}
