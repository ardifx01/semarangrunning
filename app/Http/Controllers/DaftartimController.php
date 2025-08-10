<?php

namespace App\Http\Controllers;

use App\Models\berkasperlombaan;
use Carbon\Carbon;

use App\Models\daftartim;
use App\Models\statusadmin;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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


public function daftartimcreate()
{
    $user = Auth::user(); // Dapatkan data user yang login
    $userId = Auth::id(); // Dapatkan ID user yang login

    // Ambil data daftartim yang akun_id-nya sama dengan user yang login
    $data = daftartim::where('akun_id', $userId)->get();

    return view('00_semarang.02_backend.01_informasitim.01_daftartim.02_tambahdaftartim', [
        'title' => 'Tambah Daftar Tim Saudara',
        'user' => $user,
        'userId' => $userId, // kirim juga ID user ke view
        'data' => $data,
    ]);
}
public function daftartimcreatenew(Request $request)
{
    $userId = Auth::id();

    // Validasi input dengan pesan error custom
    $validated = $request->validate([
        'namalengkap' => 'required|string|max:255',
        'jeniskelamin' => 'required|string|in:Laki-laki,Perempuan',
        'ttl' => 'required|date',
        'nik' => 'nullable|string|max:16',
        'notelepon' => 'nullable|string|max:20',
        'foto' => 'nullable|mimes:jpeg,jpg,png,gif,pdf|max:15048', // max 15MB
        'ktp' => 'nullable|mimes:jpeg,jpg,png,gif,pdf|max:15048',  // max 15MB
    ], [
        'namalengkap.required' => 'Nama lengkap Wajib Diisi.',
        'namalengkap.string' => 'Nama lengkap harus berupa teks.',
        'namalengkap.max' => 'Nama lengkap maksimal :max karakter.',

        'jeniskelamin.required' => 'Jenis Kelamin Wajib Diisi.',
        'jeniskelamin.string' => 'Jenis kelamin harus berupa teks.',
        'jeniskelamin.in' => 'Jenis kelamin harus diisi dengan "Laki-laki" atau "Perempuan".',

        'ttl.required' => 'Tanggal Lahir Wajib Diisi.',
        'ttl.date' => 'Tanggal lahir harus berupa tanggal yang valid.',

        'nik.string' => 'NIK harus berupa teks.',
        'nik.max' => 'NIK maksimal :max karakter.',

        'notelepon.string' => 'Nomor telepon harus berupa teks.',
        'notelepon.max' => 'Nomor telepon maksimal :max karakter.',

        'foto.mimes' => 'File yang diupload harus berupa gambar atau PDF.',
        'foto.max' => 'Ukuran file maksimal 15MB.',

        'ktp.mimes' => 'File yang diupload harus berupa gambar atau PDF.',
        'ktp.max' => 'Ukuran file maksimal 15MB.',
    ]);

    // Upload foto ke public/01_daftartim/01_peserta
    $fotoPath = null;
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');

        // Buat nama file unik
        $filename = time() . '_' . Str::random(10) . '.' . $foto->getClientOriginalExtension();

        // Path folder upload
        $folder = public_path('01_daftartim/01_peserta');

        // Pastikan folder ada, jika belum buat
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }

        // Pindahkan file ke folder public
        $foto->move($folder, $filename);

        // Simpan path relatif untuk disimpan di DB, supaya bisa diakses lewat URL
        $fotoPath = '01_daftartim/01_peserta/' . $filename;
    }

    // Upload ktp ke public/01_daftartim/01_peserta/ktp
    $ktpPath = null;
    if ($request->hasFile('ktp')) {
        $ktp = $request->file('ktp');

        // Buat nama file unik
        $ktpFilename = time() . '_' . Str::random(10) . '.' . $ktp->getClientOriginalExtension();

        // Path folder upload KTP
        $ktpFolder = public_path('01_daftartim/01_peserta/ktp');

        // Pastikan folder ada, jika belum buat
        if (!file_exists($ktpFolder)) {
            mkdir($ktpFolder, 0755, true);
        }

        // Pindahkan file ke folder public
        $ktp->move($ktpFolder, $ktpFilename);

        // Simpan path relatif untuk disimpan di DB, supaya bisa diakses lewat URL
        $ktpPath = '01_daftartim/01_peserta/ktp/' . $ktpFilename;
    }

    // Simpan data ke database
    daftartim::create([
        'akun_id' => $userId,
        'namalengkap' => $validated['namalengkap'] ?? null,
        'jeniskelamin' => $validated['jeniskelamin'] ?? null,
        'ttl' => $validated['ttl'] ?? null,
        'nik' => $validated['nik'] ?? null,
        'notelepon' => $validated['notelepon'] ?? null,
        'foto' => $fotoPath,
        'ktp' => $ktpPath,
    ]);

    // Redirect ke halaman daftar tim (sesuaikan route kamu)
    return redirect()->route('daftartimindex')
                     ->with('create', 'Data anggota tim berhasil ditambahkan!');
}


public function daftartimupdateupdate($id)
{
    $user = Auth::user();
    $userId = Auth::id();

    $data = daftartim::findOrFail($id); // Ambil data tunggal berdasarkan id

    return view('00_semarang.02_backend.01_informasitim.01_daftartim.03_updatedaftartim', [
        'title' => 'Perbaikan Data Anggota Tim Saudara',
        'user' => $user,
        'userId' => $userId,
        'data' => $data,
    ]);
}

public function daftartimupdatenew(Request $request, $id)
{
    $userId = Auth::id();

    // Cari data yang mau diupdate
    $daftartim = daftartim::findOrFail($id);

    // Validasi input dengan pesan error custom, tambah validasi KTP
    $validated = $request->validate([
        'namalengkap' => 'required|string|max:255',
        'jeniskelamin' => 'required|string|in:Laki-laki,Perempuan',
        'ttl' => 'required|date',
        'nik' => 'nullable|string|max:16',
        'notelepon' => 'nullable|string|max:20',
        'foto' => 'nullable|image|max:2048', // max 2MB
        'ktp' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120', // max 5MB, format jpg,png,pdf
    ], [
        'namalengkap.required' => 'Nama lengkap Wajib Diisi.',
        'namalengkap.string' => 'Nama lengkap harus berupa teks.',
        'namalengkap.max' => 'Nama lengkap maksimal :max karakter.',

        'jeniskelamin.required' => 'Jenis Kelamin Wajib Diisi.',
        'jeniskelamin.string' => 'Jenis kelamin harus berupa teks.',
        'jeniskelamin.in' => 'Jenis kelamin harus diisi dengan "Laki-laki" atau "Perempuan".',

        'ttl.required' => 'Tanggal Lahir Wajib Diisi.',
        'ttl.date' => 'Tanggal lahir harus berupa tanggal yang valid.',

        'nik.string' => 'NIK harus berupa teks.',
        'nik.max' => 'NIK maksimal :max karakter.',

        'notelepon.string' => 'Nomor telepon harus berupa teks.',
        'notelepon.max' => 'Nomor telepon maksimal :max karakter.',

        'foto.image' => 'File yang diupload harus berupa gambar.',
        'foto.max' => 'Ukuran gambar maksimal 2MB.',

        'ktp.file' => 'File KTP harus berupa file yang valid.',
        'ktp.mimes' => 'File KTP harus berformat jpg, jpeg, png, atau pdf.',
        'ktp.max' => 'Ukuran file KTP maksimal 5MB.',
    ]);

    // Upload foto baru jika ada
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $filename = time() . '_' . Str::random(10) . '.' . $foto->getClientOriginalExtension();
        $folder = public_path('01_daftartim/01_peserta');
        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }
        $foto->move($folder, $filename);
        $fotoPath = '01_daftartim/01_peserta/' . $filename;

        // Hapus foto lama jika ada
        if ($daftartim->foto && file_exists(public_path($daftartim->foto))) {
            unlink(public_path($daftartim->foto));
        }

        $daftartim->foto = $fotoPath;
    }

    // Upload file KTP baru jika ada
    if ($request->hasFile('ktp')) {
        $ktp = $request->file('ktp');
        $filename = time() . '_' . Str::random(10) . '.' . $ktp->getClientOriginalExtension();
        $folderKtp = public_path('01_daftartim/01_peserta/ktp');
        if (!file_exists($folderKtp)) {
            mkdir($folderKtp, 0755, true);
        }
        $ktp->move($folderKtp, $filename);
        $ktpPath = '01_daftartim/01_peserta/ktp/' . $filename;

        // Hapus file KTP lama jika ada
        if ($daftartim->ktp && file_exists(public_path($daftartim->ktp))) {
            unlink(public_path($daftartim->ktp));
        }

        $daftartim->ktp = $ktpPath;
    }

    // Update data lain
    $daftartim->akun_id = $userId; // kalau memang perlu diupdate
    $daftartim->namalengkap = $validated['namalengkap'];
    $daftartim->jeniskelamin = $validated['jeniskelamin'];
    $daftartim->ttl = $validated['ttl'];
    $daftartim->nik = $validated['nik'];
    $daftartim->notelepon = $validated['notelepon'];

    $daftartim->save();

    return redirect()->route('daftartimindex')
                     ->with('update', 'Data anggota tim berhasil diperbarui!');
}


public function daftarlomba()
{
    $user = Auth::user(); // Dapatkan data user yang login
    $userId = Auth::id(); // Dapatkan ID user yang login

    // Ambil data daftartim yang akun_id-nya sama dengan user yang login
    $data = berkasperlombaan::where('akunpengguna_id', $userId)->get();

    return view('00_semarang.02_backend.02_daftarlomba.01_daftarlomba', [
        'title' => 'Silahkan Untuk Daftar Event',
        'user' => $user,
        'userId' => $userId, // kirim juga ID user ke view
        'data' => $data,
    ]);
}

}
