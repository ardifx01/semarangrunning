<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\berita; // Pastikan namespace model sesuai dengan struktur direktori
use App\Models\beritaagenda;
use App\Models\beritajakon;
use App\Models\himbauandinas;
use App\Models\kegiatanjaskon;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\pengawasanlokasi;
use App\Models\artikeljakonmasjaki;
use App\Models\berkaslomba;
use App\Models\headerberanda;
use App\Models\perlombaan;
use App\Models\pos1;
use App\Models\pos2;
use App\Models\pos3;
use App\Models\pos4;
use App\Models\pos5;
use App\Models\pos6;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\qa;
use App\Models\sertifikasiagenda;
use App\Models\skktenagakerja; // Pastikan namespace model sesuai dengan struktur direktori

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class PerlombaanController extends Controller
{
    public function beperlombaan()
    {
        $data = perlombaan::orderBy('created_at', 'desc')->get(); //

        $user = Auth::user();


        // return view('frontend.00_full.index', [
        // return view('404', [
        return view('00_semarang.02_backend.01_dashboard.02_perlombaan', [
            'title' => 'SNOC X',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    public function bepeserta()
    {
        $data = berkaslomba::orderBy('created_at', 'desc')->get(); //

        $user = Auth::user();


        // return view('frontend.00_full.index', [
        // return view('404', [
        return view('00_semarang.02_backend.01_dashboard.03_berkas', [
            'title' => 'SNOC X',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    public function lokasi1()
    {
        $data = pos1::orderBy('created_at', 'desc')->get(); //

        $user = Auth::user();


        // return view('frontend.00_full.index', [
        // return view('404', [
        return view('00_semarang.02_backend.00_pos.start', [
            'title' => 'Tambah Start',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tambahdatastart()
    {
        // $data = pos1::orderBy('created_at', 'desc')->get(); //

        $user = Auth::user();
        $databerkas = berkaslomba::all();
    // $databerkas = BerkasLomba::whereDoesntHave('datapos1')->with('berkaslomba.user')->get();


// $databerkas = berkaslomba::whereDoesntHave('datapos1')
//     ->with('user')
//     ->get();
        // return view('frontend.00_full.index', [
        // return view('404', [
        return view('00_semarang.02_backend.00_pos.tambahstart', [
            'title' => 'Tambah Start',
            // 'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            'databerkas' => $databerkas, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }



      public function tambahdatastartcreate(Request $request)
    {
        $request->validate([
            'berkaslomba_id' => 'required|string',
            'point' => 'required|string',
            'waktu' => 'nullable|string',
            'pos' => 'nullable|string',
            'jawabpos' => 'nullable|string',
            'barcode' => 'nullable|string',
        ]);

        pos1::create([
            'berkaslomba_id' => $request->berkaslomba_id,
            'point' => $request->point,
            'waktu' => $request->waktu,
            'pos' => $request->pos,
            'jawabpos' => $request->jawabpos,
            'barcode' => $request->barcode,
        ]);

        return redirect()->route('lokasi1index')->with('success', 'Data POS berhasil disimpan!');

    }



public function tambahdatastartcreateupdate(Request $request, $id)
{
    $request->validate([
        'jawabpos' => 'nullable|string',
    ]);

    $data = pos1::findOrFail($id);

    // Logika status otomatis
    $status = ($data->pos === $request->jawabpos) ? '✔️' : '❌';

    $data->update([
        'jawabpos' => $request->jawabpos,
        'status'   => $status,
    ]);

    return redirect()->route('bepeserta')->with('success', 'Data POS berhasil diperbarui!');
}

    public function destroy($id)
{
    $data = pos1::findOrFail($id);
    $data->delete();

    return redirect()->back()->with('success', 'Data POS berhasil dihapus');
}


public function showByBarcode($kode)
{
    $data = pos1::where('barcode', $kode)->first();

    if (!$data) {
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }

    return view('00_semarang.02_backend.00_pos.pencarianbaru', [
    'data' => $data,
    'title' => 'Detail Data POS - ' . $data->barcode
]);

}



    public function menupercarian()
    {
        $data = pos1::orderBy('created_at', 'desc')->get(); //

        $user = Auth::user();


        // return view('frontend.00_full.index', [
        // return view('404', [
        return view('00_semarang.02_backend.00_pos.kotakpencarian', [
            'title' => 'Tambah Start',
            'data' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }


    public function quickcount()
    {
        $data1 = pos1::orderBy('created_at', 'desc')->get(); //
        // $data2 = pos2::orderBy('created_at', 'desc')->get(); //
        // $data3 = pos3::orderBy('created_at', 'desc')->get(); //
        // $data4 = pos4::orderBy('created_at', 'desc')->get(); //
        // $data5 = pos5::orderBy('created_at', 'desc')->get(); //
        // $data6 = pos6::orderBy('created_at', 'desc')->get(); //

        $user = Auth::user();


        // return view('frontend.00_full.index', [
        // return view('404', [
        return view('00_semarang.02_backend.00_pos.start', [
            'title' => 'Tambah Start',
            'data1' => $data1, // Mengirimkan data paginasi ke view
            // 'data2' => $data2, // Mengirimkan data paginasi ke view
            // 'data3' => $data, // Mengirimkan data paginasi ke view
            // 'data4' => $data, // Mengirimkan data paginasi ke view
            // 'data5' => $data, // Mengirimkan data paginasi ke view
            // 'data6' => $data, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'databerita' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }



}

