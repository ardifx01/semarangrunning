<?php

namespace App\Http\Controllers;

use App\Models\berkasperlombaan;
use Carbon\Carbon;

use App\Models\daftartim;
use App\Models\kategoriperlombaan;
use App\Models\kota;
use App\Models\perlombaan;
use App\Models\provinsi;
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


public function daftartimpeserta($id)
{
    $tim = berkasperlombaan::findOrFail($id);

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
    $user = Auth::user();
    $userId = Auth::id();

    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    $data = berkasperlombaan::where('akunpengguna_id', $userId)->get();

    return view('00_semarang.02_backend.02_daftarlomba.01_daftarlomba', [
        'title' => 'Silahkan Untuk Daftar Event',
        'user' => $user,
        'userId' => $userId,
        'data' => $data,
        'perlombaanId' => $perlombaanId,  // Kirim juga ID perlombaan pertama ke view
    ]);
}

public function daftarlombanew($userId, $perlombaanId)
{
    // Pastikan user yang login sama dengan $userId yang diterima (opsional)
    if (Auth::id() != $userId) {
        abort(403, 'Unauthorized action.');
    }

    $user = Auth::user();
    $kota = kota::all();
    $provinsi = provinsi::all();
    $kategoriperlombaan = kategoriperlombaan::all();

    // Ambil data daftartim yang akun_id-nya sama dengan user yang login
    $data = daftartim::where('akun_id', $userId)->get();

    return view('00_semarang.02_backend.02_daftarlomba.02_berkasperlombaan', [
        'title' => 'Silahkan Daftarkan Tim Saudara',
        'user' => $user,
        'userId' => $userId,
        'perlombaanId' => $perlombaanId,  // Kirim juga ID perlombaan ke view
        'data' => $data,
        'provinsiList' => $provinsi,
        'kotaList' => $kota,
        'kategoriperlombaan' => $kategoriperlombaan,
    ]);
}


public function daftarlombatimnew(Request $request)
{
    $userId = Auth::id();

    $validated = $request->validate([
        'provinsi_id' => 'nullable|string',
        'perlombaan_id' => 'nullable|string',
        'kota' => 'nullable|string|max:100',
        'kategoriperlombaan_id' => 'required|string',
        'nama_tim' => 'required|string|max:255',
        'nama_organisasi' => 'nullable|string',
        'alamat_organisasi' => 'nullable|string',

        'surat_tugas_organisasi' => 'nullable|mimes:pdf|max:15360', // 15MB
        'surat_keterangan_sehat' => 'nullable|mimes:pdf|max:15360',
        'bukti_pembayaran' => 'nullable|mimes:pdf|max:15360',
        'surat_pernyataan' => 'nullable|mimes:pdf|max:15360',
    ], [
        // Tambahkan pesan error custom jika perlu
    ]);

    // Fungsi helper untuk upload file PDF, return relative path
    $uploadFile = function ($fileInputName, $folder) use ($request) {
        if ($request->hasFile($fileInputName)) {
            $file = $request->file($fileInputName);
            $filename = time() . '_' . \Illuminate\Support\Str::random(10) . '.' . $file->getClientOriginalExtension();
            $pathFolder = public_path($folder);

            if (!file_exists($pathFolder)) {
                mkdir($pathFolder, 0755, true);
            }

            $file->move($pathFolder, $filename);

            return $folder . '/' . $filename;
        }
        return null;
    };

    // Upload semua file PDF ke folder masing-masing
    $suratTugasPath = $uploadFile('surat_tugas_organisasi', '01_daftartim/surat_tugas_organisasi');
    $suratSehatPath = $uploadFile('surat_keterangan_sehat', '01_daftartim/surat_keterangan_sehat');
    $buktiBayarPath = $uploadFile('bukti_pembayaran', '01_daftartim/bukti_pembayaran');
    $suratPernyataanPath = $uploadFile('surat_pernyataan', '01_daftartim/surat_pernyataan');

    // Simpan data ke database
    berkasperlombaan::create([
        'akunpengguna_id' => $userId,
        'provinsi_id' => $validated['provinsi_id'] ?? null,
        'perlombaan_id' => $validated['perlombaan_id'] ?? null,
        'kota' => $validated['kota'] ?? null,
        'kategoriperlombaan_id' => $validated['kategoriperlombaan_id'] ?? null,
        'nama_tim' => $validated['nama_tim'] ?? null,
        'nama_organisasi' => $validated['nama_organisasi'] ?? null,
        'alamat_organisasi' => $validated['alamat_organisasi'] ?? null,

        'surat_tugas_organisasi' => $suratTugasPath ?? null,
        'surat_keterangan_sehat' => $suratSehatPath ?? null,
        'bukti_pembayaran' => $buktiBayarPath ?? null,
        'surat_pernyataan' => $suratPernyataanPath ?? null,
    ]);

    return redirect()->route('daftarlombaindex')->with('create', 'Saudara Berhasil Mendaftar!');
}

public function informasitim($id)
{

    $user = Auth::user();
    $userId = Auth::id();

    // Cari data berkasperlombaan berdasarkan $id dan akunpengguna_id harus sama dengan user login
    $data = berkasperlombaan::with('akunpengguna')
            ->where('id', $id)
            ->where('akunpengguna_id', $userId)
            ->first();

    // if (!$data) {
    //     // Jika data tidak ditemukan atau bukan milik user, redirect atau abort 404
    //     return redirect()->route('datas')->with('error', 'Data tidak ditemukan atau akses ditolak.');
    // }

    return view('00_semarang.02_backend.02_daftarlomba.03_berkasinformasi', [
        'title' => 'Detail Informasi Tim',
        'data' => $data,
        'user' => $user,
    ]);
}


public function bedaftartim()
{
    $user = Auth::user(); // Dapatkan data user yang login
    $userId = Auth::id(); // Dapatkan ID user yang login

    // Ambil data daftartim yang akun_id-nya sama dengan user yang login
    // $data = daftartim::where('akun_id', $userId)->get();
    $data = berkasperlombaan::all();

    return view('00_semarang.02_backend.00_superadmin.01_daftartim.01_daftartimall', [
        'title' => 'Daftar Tim Saudara',
        'user' => $user,
        'userId' => $userId, // kirim juga ID user ke view
        'data' => $data,
    ]);
}

public function katumumputera()
{
    $user = Auth::user();
    $kategoriperlombaan = kategoriperlombaan::all();

    // Ambil ID perlombaan terbaru
    $perlombaanTerbaru = perlombaan::orderBy('id', 'desc')->first();
    $perlombaanId = $perlombaanTerbaru ? $perlombaanTerbaru->id : null;

    // $datatim = daftartim::all();
    // // Ambil semua data kategori 1 dengan urutan terbaru

    // $data = berkasperlombaan::where('kategoriperlombaan_id', 1)
    // ->orderBy('updated_at', 'desc') // atau created_at
    // ->get();

    $data = Berkasperlombaan::with('daftartims')
    ->where('kategoriperlombaan_id', 1)
    ->orderBy('updated_at', 'desc')
    ->get();


    // Hitung total uang masuk
    $totalUangMasuk = $data->sum(function($item) {
        return intval($item->uangmasuk ?? 0);
    });

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.01_katumumputera', [
        'title' => 'Kategori Umum Tim Putera',
        'user' => $user,
        'data' => $data,
        // 'data' => $datatim,
        'perlombaanId' => $perlombaanId,
        'totalUangMasuk' => $totalUangMasuk,
        'kategoriperlombaan' => $kategoriperlombaan,
    ]);
}

public function katumumputeri()
{
    $user = Auth::user();

    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'desc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    $kategoriperlombaan = kategoriperlombaan::all();
    // Ambil semua data kategori 2
    $data = berkasperlombaan::where('kategoriperlombaan_id', 2)
    ->get();

    $totalUangMasuk = $data->sum(function($item) {
        return intval($item->uangmasuk ?? 0);
    });

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.02_katumumputeri', [
        'title' => 'Kategori Umum Tim Puteri',
        'user' => $user,
        'data' => $data,
        'kategoriperlombaan' => $kategoriperlombaan,
        'perlombaanId' => $perlombaanId,
        'totalUangMasuk' => $totalUangMasuk,
    ]);
}

public function katpelajarputera()
{
    $user = Auth::user();

    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    $kategoriperlombaan = kategoriperlombaan::all();
    // Ambil semua data kategori 3
    $data = berkasperlombaan::where('kategoriperlombaan_id', 3)
    ->get();


    $totalUangMasuk = $data->sum(function($item) {
        return intval($item->uangmasuk ?? 0);
    });

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.03_katupelajarputera', [
        'title' => 'Kategori Pelajar Tim Putera',
        'user' => $user,
        'data' => $data,
        'kategoriperlombaan' => $kategoriperlombaan,
        'perlombaanId' => $perlombaanId,
        'totalUangMasuk' => $totalUangMasuk,
    ]);
}

public function katpelajarputeri()
{
    $user = Auth::user();

    $kategoriperlombaan = kategoriperlombaan::all();
    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    // Ambil semua data kategori 4
    $data = berkasperlombaan::where('kategoriperlombaan_id', 4)
    ->get();

    $totalUangMasuk = $data->sum(function($item) {
        return intval($item->uangmasuk ?? 0);
    });

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.04_katpelputeri', [
        'title' => 'Kategori Pelajar Tim Puteri',
        'user' => $user,
        'data' => $data,
        'kategoriperlombaan' => $kategoriperlombaan,
        'perlombaanId' => $perlombaanId,
        'totalUangMasuk' => $totalUangMasuk,
    ]);
}


public function informasitimadmin($id)
{
    $user = Auth::user();

    // Ambil data berkasperlombaan berdasarkan ID saja, jika tidak ada otomatis 404
    $data = berkasperlombaan::findOrFail($id);

    return view('00_semarang.02_backend.02_daftarlomba.03_berkasinformasi', [
        'title' => 'Daftar Informasi Tim',
        'data' => $data,
        'user' => $user,
    ]);

}


public function informasitimkatputeri($id)
{
    $user = Auth::user();

    // Ambil data berkasperlombaan berdasarkan ID saja, jika tidak ada otomatis 404
    $data = berkasperlombaan::findOrFail($id);

    return view('00_semarang.02_backend.02_daftarlomba.03_berkasinformasiputeri', [
        'title' => 'Daftar Informasi Tim',
        'data' => $data,
        'user' => $user,
    ]);

}



public function validasipendaftaran(Request $request, $id)
{
    // Validasi input wajib & opsional
    $request->validate([
        'verifikasiktp' => 'required|in:sesuai,tidak_sesuai',
        'verifikasinpwp' => 'required|in:sesuai,tidak_sesuai',
        'verifikasisert' => 'required|in:sesuai,tidak_sesuai',
        'verifikasittd' => 'required|in:sesuai,tidak_sesuai',
    ]);

    // Cari peserta berdasarkan ID
    $item = berkasperlombaan::findOrFail($id);

    // Simpan data
    $item->update([
        'verifikasiktp' => $request->verifikasiktp,
        'verifikasinpwp' => $request->verifikasinpwp,
        'verifikasisert' => $request->verifikasisert,
        'verifikasittd' => $request->verifikasittd,
    ]);

    // Flash message
session()->flash('update', 'Data Verifikasi Peserta Berhasil !');

// Redirect kembali ke halaman sebelumnya
return redirect()->back();
}


// In ValBerkasUsaha2Controller.php

// public function update(Request $request, $id)
// {
//     $data = berkasperlombaan::findOrFail($id);
//     $data->update([
//         $request->field => $request->value
//     ]);
//     return back()->with('success', 'Status verifikasi berkas berhasil diperbarui');
// }

public function update(Request $request, $id)
{
    $data = berkasperlombaan::findOrFail($id);

    $request->validate([
        'value' => 'required|in:lolos,dikembalikan',
        'field' => 'required|in:validasiberkas1',
    ]);

    // update kolom yang sesuai
    $data->{$request->field} = $request->value;
    $data->save();

    if ($request->value === 'lolos') {
        session()->flash('create', '✅ Berkas Lolos Verifikasi !');
    } else {
        session()->flash('gagal', '❌ Berkas Dikembalikan Ke Peserta !');
    }

    return redirect()->back();
}





// public function updatePayment(Request $request, $id)
// {
//     $data = berkasperlombaan::findOrFail($id);
//     $data->update([
//         'validasiberkas2' => $request->value
//     ]);
//     return back()->with('success', 'Status pembayaran berhasil diperbarui');
// }


public function updatePayment(Request $request, $id)
{
    $data = berkasperlombaan::findOrFail($id);

    $request->validate([
        'validasiberkas2' => 'required|string',
    ]);

    $data->validasiberkas2 = $request->validasiberkas2;
    $data->save();

    if ($request->validasiberkas2 === 'sudah') {
        session()->flash('create', '✅ Sudah Melakukan Pembayaran !');
    } else {
        session()->flash('gagal', '❌ Belum Membayar !');
    }

    return redirect()->back();
}


// public function updateAttendance(Request $request, $id)
// {
//     $data = berkasperlombaan::findOrFail($id);
//     $data->update([
//         'validasiberkas3' => $request->value
//     ]);
//     return back()->with('success', 'Status kehadiran berhasil diperbarui');
// }


public function updateAttendance(Request $request, $id)
{
    $data = berkasperlombaan::findOrFail($id);

    $request->validate([
        'validasiberkas3' => 'required|string',
    ]);

    $data->validasiberkas3 = $request->validasiberkas3;
    $data->save();

    if ($request->validasiberkas3 === 'sudah') {
        session()->flash('create', '✅ Peserta Hadir dan Daftar Ulang !');
    } else {
        session()->flash('gagal', '❌ Tidak Hadir !');
    }

    return redirect()->back();
}


// public function updateCertificate(Request $request, $id)
// {
//     $data = berkasperlombaan::findOrFail($id);
//     $data->update([
//         'validasiberkas4' => $request->value
//     ]);

//     if ($request->value == 'terbit') {
//         // Logic untuk menerbitkan sertifikat
//     }

//     return back()->with('success', 'Status sertifikat berhasil diperbarui');
// }



public function updateCertificate(Request $request, $id)
{
    $data = berkasperlombaan::findOrFail($id);

    $request->validate([
        'validasiberkas4' => 'required|string',
    ]);

    $data->validasiberkas4 = $request->validasiberkas4;
    $data->save();

    if ($request->validasiberkas3 === 'sudah') {
        session()->flash('create', '✅ Sertifikat Terbit !');
    } else {
        session()->flash('gagal', '❌ Tidak Terbit !');
    }

    return redirect()->back();
}


// public function perbaikanberkaspeserta()
// {

//     $user = Auth::user();
//     $userId = Auth::id();

//     // Ambil ID pertama dari tabel perlombaan
//     $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
//     $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

//     $data = berkasperlombaan::where('akunpengguna_id', $userId)->get();

//     return view('00_semarang.02_backend.02_daftarlomba.01_daftarlomba', [
//         'title' => 'Silahkan Untuk Daftar Event',
//         'user' => $user,
//         'userId' => $userId,
//         'data' => $data,
//         'perlombaanId' => $perlombaanId,  // Kirim juga ID perlombaan pertama ke view
//     ]);
// }

public function perbaikanberkaspeserta($id)
{
    $data = berkasperlombaan::findOrFail($id);

    $provinsiList = provinsi::all();
    $kategoriperlombaan = kategoriperlombaan::all();

    $user = Auth::user();
    // $userId = Auth::id();

    return view('00_semarang.02_backend.02_daftarlomba.04_perbaikanberkas', [
        'data' => $data,

            'title' => 'Halaman Perbaikan Data',
            'user' => $user,
        // 'userId' => $userId,
        'provinsiList' => $provinsiList,
        'kategoriperlombaan' => $kategoriperlombaan,

    ]);


}


public function daftarlombatimperbaikan(Request $request, $id)
{
    // $userId = Auth::id();
    $data = berkasperlombaan::findOrFail($id);

    $validated = $request->validate([
        'provinsi_id' => 'nullable|string',
        'perlombaan_id' => 'nullable|string',
        'kota' => 'nullable|string|max:100',
        'kategoriperlombaan_id' => 'required|string',
        'nama_tim' => 'required|string|max:255',
        'nama_organisasi' => 'nullable|string',
        'alamat_organisasi' => 'nullable|string',

        'surat_tugas_organisasi' => 'nullable|mimes:pdf|max:15360',
        'surat_keterangan_sehat' => 'nullable|mimes:pdf|max:15360',
        'bukti_pembayaran' => 'nullable|mimes:pdf|max:15360',
        'surat_pernyataan' => 'nullable|mimes:pdf|max:15360',
    ]);

    // Helper upload file
    $uploadFile = function ($fileInputName, $folder, $oldFilePath = null) use ($request) {
        if ($request->hasFile($fileInputName)) {
            if ($oldFilePath && file_exists(public_path($oldFilePath))) {
                unlink(public_path($oldFilePath));
            }

            $file = $request->file($fileInputName);
            $filename = time() . '_' . \Illuminate\Support\Str::random(10) . '.' . $file->getClientOriginalExtension();
            $pathFolder = public_path($folder);

            if (!file_exists($pathFolder)) {
                mkdir($pathFolder, 0755, true);
            }

            $file->move($pathFolder, $filename);
            return $folder . '/' . $filename;
        }

        return $oldFilePath;
    };

    // Update semua file
    $data->surat_tugas_organisasi = $uploadFile('surat_tugas_organisasi', '01_daftartim/surat_tugas_organisasi', $data->surat_tugas_organisasi);
    $data->surat_keterangan_sehat = $uploadFile('surat_keterangan_sehat', '01_daftartim/surat_keterangan_sehat', $data->surat_keterangan_sehat);
    $data->bukti_pembayaran = $uploadFile('bukti_pembayaran', '01_daftartim/bukti_pembayaran', $data->bukti_pembayaran);
    $data->surat_pernyataan = $uploadFile('surat_pernyataan', '01_daftartim/surat_pernyataan', $data->surat_pernyataan);

    // Update field lainnya
    // $data->akunpengguna_id = $userId;
    $data->provinsi_id = $validated['provinsi_id'] ?? null;
    $data->perlombaan_id = $validated['perlombaan_id'] ?? null;
    $data->kota = $validated['kota'] ?? null;
    $data->kategoriperlombaan_id = $validated['kategoriperlombaan_id'] ?? null;
    $data->nama_tim = $validated['nama_tim'] ?? null;
    $data->nama_organisasi = $validated['nama_organisasi'] ?? null;
    $data->alamat_organisasi = $validated['alamat_organisasi'] ?? null;

    // Reset validasi berkas
    $data->validasiberkas1 = null;

    $data->save();

    return redirect()->back()->with('update', 'Data pendaftaran berhasil diperbarui!');

}

public function sertifikatpeserta()
{
    $user = Auth::user();
    $userId = Auth::id();

    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    // Hanya ambil data yang validasiberkas4 == 'sudah'
    $data = berkasperlombaan::where('akunpengguna_id', $userId)
        ->where('validasiberkas4', 'sudah')
        ->get();

    return view('00_semarang.02_backend.02_daftarlomba.05_sertifikatshow', [
        'title' => 'Sertifikat Saudara',
        'user' => $user,
        'userId' => $userId,
        'data' => $data,
        'perlombaanId' => $perlombaanId,
    ]);
}

public function katumumputerasertifikat()
{
    $user = Auth::user();

    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    // Ambil semua data berdasarkan kategori 1
    $data = berkasperlombaan::where('kategoriperlombaan_id', 1)
        ->get();

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.02_sertifikatkatumumputera', [
        'title' => 'Terbitkan Sertifikat Peserta Tim Umum Putera',
        'user' => $user,
        'data' => $data,
        'perlombaanId' => $perlombaanId,
    ]);
}


public function sertifikatpesertaupload($id)
{
    $data = berkasperlombaan::findOrFail($id);

    $provinsiList = provinsi::all();
    $kategoriperlombaan = kategoriperlombaan::all();

    $user = Auth::user();
    // $userId = Auth::id();

    return view('00_semarang.02_backend.02_daftarlomba.06_uploadsertifikat', [
        'data' => $data,

            'title' => 'Upload Sertifikat Peserta',
            'user' => $user,
        // 'userId' => $userId,
        'provinsiList' => $provinsiList,
        'kategoriperlombaan' => $kategoriperlombaan,

    ]);


}


public function uploadsertifikatnew(Request $request, $id)
{
    $data = berkasperlombaan::findOrFail($id);

    $validated = $request->validate([
        'sertifikat1' => 'nullable|mimes:pdf|max:15360', // max 15MB
        'sertifikat2' => 'nullable|mimes:pdf|max:15360',
    ]);

    // Helper upload file
    $uploadFile = function ($fileInputName, $folder, $oldFilePath = null) use ($request) {
        if ($request->hasFile($fileInputName)) {
            if ($oldFilePath && file_exists(public_path($oldFilePath))) {
                unlink(public_path($oldFilePath));
            }

            $file = $request->file($fileInputName);
            $filename = time() . '_' . \Illuminate\Support\Str::random(10) . '.' . $file->getClientOriginalExtension();
            $pathFolder = public_path($folder);

            if (!file_exists($pathFolder)) {
                mkdir($pathFolder, 0755, true);
            }

            $file->move($pathFolder, $filename);
            return $folder . '/' . $filename;
        }

        return $oldFilePath;
    };

    // Update file sertifikat
    $data->sertifikat1 = $uploadFile('sertifikat1', '02_sertifikat/peserta', $data->sertifikat1);
    $data->sertifikat2 = $uploadFile('sertifikat2', '02_sertifikat/peserta', $data->sertifikat2);

    $data->save();

    return redirect()->back()->with('create', 'Sertifikat berhasil diterbitkan !');
}


public function katumumputerisertifikat()
{
    $user = Auth::user();

    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    // Ambil semua data kategori 2
    $data = berkasperlombaan::where('kategoriperlombaan_id', 2)
        ->get();

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.02_sertifikatkatumumputera', [
        'title' => 'Terbitkan Sertifikat Peserta Tim Umum Puteri',
        'user' => $user,
        'data' => $data,
        'perlombaanId' => $perlombaanId,
    ]);
}


public function katpelajarputerasertifikat()
{
    $user = Auth::user();

    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    // Ambil semua data kategori 3
    $data = berkasperlombaan::where('kategoriperlombaan_id', 3)
        ->get();

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.02_sertifikatkatumumputera', [
        'title' => 'Terbitkan Sertifikat Peserta Tim Pelajar Putera',
        'user' => $user,
        'data' => $data,
        'perlombaanId' => $perlombaanId,
    ]);
}

public function katpelajarputerisertifikat()
{
    $user = Auth::user();

    // Ambil ID pertama dari tabel perlombaan
    $perlombaanPertama = perlombaan::orderBy('id', 'asc')->first();
    $perlombaanId = $perlombaanPertama ? $perlombaanPertama->id : null;

    // Ambil semua data kategori 4
    $data = berkasperlombaan::where('kategoriperlombaan_id', 4)
        ->get();

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.02_sertifikatkatumumputera', [
        'title' => 'Terbitkan Sertifikat Peserta Tim Pelajar Putera',
        'user' => $user,
        'data' => $data,
        'perlombaanId' => $perlombaanId,
    ]);
}


public function updateUangMasuk(Request $request, $id)
{
    $data = berkasperlombaan::findOrFail($id);

    // Validasi input
    $validated = $request->validate([
        'uangmasuk' => 'nullable|string',
        'keteranganuangmasuk' => 'nullable|string|max:255',
    ]);

    // Simpan data
    $data->uangmasuk = $validated['uangmasuk'] ?? null;
    $data->keteranganuangmasuk = $validated['keteranganuangmasuk'] ?? null;
    $data->save();

    return redirect()->back()->with('update', 'Nominal Uang Masuk & Keterangan berhasil dimasukkan!');
}

public function cekdokumenpeserta(Request $request, $id)
{
    $data = berkasperlombaan::findOrFail($id);

    // Validasi input cadangan
    $validated = $request->validate([
        'cadangan1'  => 'nullable|string',
        'cadangan2'  => 'nullable|string',
        'cadangan3'  => 'nullable|string',
        'cadangan4'  => 'nullable|string',
        // cadangan5 otomatis "sudah"
    ]);

    // Simpan data
    $data->cadangan1  = $validated['cadangan1'] ?? null;
    $data->cadangan2  = $validated['cadangan2'] ?? null;
    $data->cadangan3  = $validated['cadangan3'] ?? null;
    $data->cadangan4  = $validated['cadangan4'] ?? null;
    $data->validasiberkas3  = 'sudah'; // selalu otomatis
    $data->validasiberkas7  = 'sudah'; // selalu otomatis

    $data->save();

    return redirect()->back()->with('create', 'Dokumen Daftar Ulang Berhasil Di Cek !');
}


public function informasitimkatpelputera($id)
{
    $user = Auth::user();

    // Ambil data berkasperlombaan berdasarkan ID saja, jika tidak ada otomatis 404
    $data = berkasperlombaan::findOrFail($id);

    return view('00_semarang.02_backend.02_daftarlomba.04_berkasinformasipelputera', [
        'title' => 'Daftar Informasi Tim',
        'data' => $data,
        'user' => $user,
    ]);

}

public function informasitimkatpelputeri($id)
{
    $user = Auth::user();

    // Ambil data berkasperlombaan berdasarkan ID saja, jika tidak ada otomatis 404
    $data = berkasperlombaan::findOrFail($id);

    return view('00_semarang.02_backend.02_daftarlomba.04_berkasinformasipelputeri', [
        'title' => 'Daftar Informasi Tim',
        'data' => $data,
        'user' => $user,
    ]);

}


    public function perbaikankatlomba(Request $request, $id)
    {
        // Validasi input (pastikan dia kirim id kategori yang valid)
        $request->validate([
            'kategoriperlombaan_id' => 'required|string',
        ]);

        // Cari data berkas
        $berkas = berkasperlombaan::findOrFail($id);

        // Update foreign key kategori
        $berkas->kategoriperlombaan_id = $request->kategoriperlombaan_id;
        $berkas->save();

        return back()->with('create', 'Kategori perlombaan berhasil diperbarui.');
    }

public function datasemuaakun()
{
    $user = Auth::user();
    $data = User::all();

    // Ambil status admin dengan id 1 sampai 5
    $statusList = Statusadmin::whereBetween('id', [1, 5])->get();

    // Hitung jumlah user per status
    $statusCounts = [];
    foreach ($statusList as $status) {
        $statusCounts[$status->statusadmin] = User::where('statusadmin_id', $status->id)->count();
    }

    return view('00_semarang.02_backend.00_superadmin.01_katumumputera.05_daftarsemuaakun', [
        'title' => 'Daftar Semua Akun',
        'user' => $user,
        'data' => $data,
        'statusCounts' => $statusCounts,
    ]);
}


}
