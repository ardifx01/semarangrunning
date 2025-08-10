<?php

namespace App\Http\Controllers;
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
            'foto' => 'nullable|image|max:2048', // max 2MB
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

        // Simpan data ke database
        daftartim::create([
            'akun_id' => $userId,
            'namalengkap' => $validated['namalengkap'] ?? null,
            'jeniskelamin' => $validated['jeniskelamin'] ?? null,
            'ttl' => $validated['ttl'] ?? null,
            'nik' => $validated['nik'] ?? null,
            'notelepon' => $validated['notelepon'] ?? null,
            'foto' => $fotoPath,
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

    // Validasi input dengan pesan error custom
    $validated = $request->validate([
        'namalengkap' => 'required|string|max:255',
        'jeniskelamin' => 'required|string|in:Laki-laki,Perempuan',
        'ttl' => 'required|date',
        'nik' => 'nullable|string|max:16',
        'notelepon' => 'nullable|string|max:20',
        'foto' => 'nullable|image|max:2048', // max 2MB
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
    ]);

    // Cek upload foto baru
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');

        // Nama file unik
        $filename = time() . '_' . Str::random(10) . '.' . $foto->getClientOriginalExtension();

        // Folder tujuan upload
        $folder = public_path('01_daftartim/01_peserta');

        if (!file_exists($folder)) {
            mkdir($folder, 0755, true);
        }

        // Upload foto baru
        $foto->move($folder, $filename);

        $fotoPath = '01_daftartim/01_peserta/' . $filename;

        // Hapus foto lama jika ada (optional)
        if ($daftartim->foto && file_exists(public_path($daftartim->foto))) {
            unlink(public_path($daftartim->foto));
        }

        // Set foto baru ke model
        $daftartim->foto = $fotoPath;
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

}
