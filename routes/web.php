<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\akuncontroller;
use App\Http\Controllers\BantuanhibahbgController;
use App\Http\Controllers\BantuanhibahController;
use App\Http\Controllers\BantuanteknisController;
use App\Http\Controllers\DaftartimController;
use App\Http\Controllers\DatabaseAbgController;
use App\Http\Controllers\GambarbantuanController;
use App\Http\Controllers\KrkController;
use App\Http\Controllers\PbgslfController;
use App\Http\Controllers\PendataanBangunanGedungController;
use App\Http\Controllers\PenilikbangunanController;
use App\Http\Controllers\PerlombaanController;
use App\Models\gambarbantuan;
use App\Models\pbgslfbangunan;
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ------------------------- FRONTEND HALAMAN UTAMA ABG BLORA BANGUNAN GEDUNG --------------------------

Route::get('/', [FedashboardController::class, 'index']);
Route::get('/web', [FedashboardController::class, 'web']);
// Route::post('/qapertanyaanstore', [FedashboardController::class, 'createbarustorepertanyaan'])->middleware('auth')->name('create.storeqapertanyaanbaru');
// Route::post('/qapertanyaanstorebaru', [FedashboardController::class, 'createstorepertanyaanpublik'])->middleware('auth')->name('createpertanyaanstorebaru');
// Route::post('/qapertanyaanstorebaru', [AdministratorController::class, 'createstorepertanyaanpublik'])->name('createpertanyaanstorebaru');

// 01_ MENU PBG SLF
// ----------------------------------------------------------------------------------------
Route::get('/respbgslfindex', [FedashboardController::class, 'menurespbgslfindex']);

// 03_ MENU BANGUNAN GEDUNG ANDROID
// ----------------------------------------------------------------------------------------
Route::get('/resbgindex', [FedashboardController::class, 'menuresbangunangedungindex']);

// 04_ MENU BANTUAN TEKNIS

// MENU KRK HUNIAN

// MENU 06 KRK BACKEND

// Route::get('/portalberita', function ()
//     // return view('welcome');
//     return view('portalberita', [
    //         'title' => 'Portal Berita',
    //     ]);
    // });


Route::get('/404', function () {
    // return view('welcome');
    return view('404', [
        'title' => 'Under Constructions',
    ]);
});

Route::get('/bahan2', function () {
    // return view('welcome');
    return view('frontend.00_full.bahan2');
});




// Route::put('/valberkasusaha/{id}', [KrkController::class, 'valberkasusaha1'])->name('valberkasusaha.update');
// Route::get('/doklapkrkusaha/{id}', [KrkController::class, 'doklapkrkusaha'])->middleware('auth')->name('doklapkrkusaha.show');

// Route::get('/doklapkrkusahacreate/{id}', [KrkController::class, 'doklapkrkusahacreate'])->middleware('auth')->name('doklapkrkusahacreate.create');
// Route::post('/doklapkrkusahacreatenew', [KrkController::class, 'doklapkrkusahacreatenew'])->middleware('auth')->name('create.doklapkrkusahacreatenew');

// Route::delete('/doklapkrkusahacreatedelete/{id}', [KrkController::class, 'doklapkrkusahacreatedelete'])->middleware('auth')->name('delete.doklapkrkusahacreatedelete');

// saat ini git



// ================================================================================================================================================
// ================================================================================================================================================
// ================================================================================================================================================

// Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');
Route::get('/beperlombaan', [PerlombaanController::class, 'beperlombaan'])->middleware('auth');
Route::get('/bepeserta', [PerlombaanController::class, 'bepeserta'])->name('bepeserta')->middleware('auth');
Route::get('/peta/lokasi1', [PerlombaanController::class, 'lokasi1'])->name('lokasi1index')->middleware('auth');
Route::get('/tambahdatastart', [PerlombaanController::class, 'tambahdatastart'])->middleware('auth');
Route::post('/tambahdatastartnew', [PerlombaanController::class, 'tambahdatastartcreate'])->name('datapos1.store')->middleware('auth');
Route::post('/tambahdatastartupdate/{id}', [PerlombaanController::class, 'tambahdatastartcreateupdate'])->name('datapos1.update')->middleware('auth');
// Route::put('/jawabposstart/{id}', [PerlombaanController::class, 'tambahdatastartcreateupdate'])->name('datapos1.update');

// Route::put('/jawabposstart/{id}', [PerlombaanController::class, 'tambahdatastartcreateupdate'])->name('datapos1.update');
Route::get('/datapos1/barcode/{kode}', [PerlombaanController::class, 'showByBarcode'])->name('datapos1.search');

Route::get('/menupercarian', [PerlombaanController::class, 'menupercarian'])->name('menupercarian');
Route::delete('/datapos1/{id}', [PerlombaanController::class, 'destroy'])->name('datapos1.destroy');

Route::get('/quickcount', [PerlombaanController::class, 'quickcount'])->name('quickcount');
// ------------------- BACKEND QA PERTANYAAN ---------------------------

// KATEGORI ADMIN
Route::get('/qapertanyaan', [AdministratorController::class, 'qapertanyaan'])->middleware('auth');
Route::get('/qapertanyaancreate', [AdministratorController::class, 'createqapertanyaan'])->middleware('auth');
Route::post('/qapertanyaanstore', [AdministratorController::class, 'createstoreqapertanyaan'])->name('create.qapertanyaan');
Route::post('/qapertanyaan/{id}', [AdministratorController::class, 'deleteqapertanyaan'])
->middleware('auth')
->name('delete.qapertanyaan');

// ------------------- BACKEND BAGIAN HIMBAUAN DINAS ---------------------------

// KATEGORI HIMBAUAN DINAS
Route::get('/himbauandinas', [AdministratorController::class, 'himbauandinas'])->middleware('auth');
Route::get('/himbauandinas/{nama_lengkap}', [AdministratorController::class, 'himbauandinasshowbyname'])->middleware('auth');
Route::get('/himbauandinas/update/{nama_lengkap}', [AdministratorController::class, 'updatehimbauandinas'])->middleware('auth')->name('updateshow.himbauandinas');
Route::post('/himbauandinas/{nama_lengkap}', [AdministratorController::class, 'createupdatehimbauandinas'])->middleware('auth')->name('update.himbauandinas');

// Route::get('/$login', function () {
//     // return view('welcome');
//     return view('login.index',
//         'title' => 'Halaman Login'
//     ]);
// });

Route::get('/bedaftartim', [DaftartimController::class, 'bedaftartim'])->middleware('auth')->name('bedaftartimindex');
// ----------------------
// EVENT SNOC X 2025
Route::get('/perlombaan/daftartim', [DaftartimController::class, 'daftartim'])->middleware(['auth', 'can:peserta'])->name('daftartimindex');
Route::delete('/daftartimdelete/{id}', [DaftartimController::class, 'deletedaftartim'])->middleware(['auth', 'can:peserta'])->name('daftartim.destroy');
Route::delete('/daftartimpeserta/{id}', [DaftartimController::class, 'daftartimpeserta'])->middleware(['auth', 'can:peserta'])->name('daftartimpeserta');
// Route::get('/daftartim/create/{id}', [DaftartimController::class, 'daftartimcreate'])->middleware('auth')->name('tambahtim');

Route::get('/daftartim/create/{userId}', [DaftarTimController::class, 'daftartimcreate'])->middleware(['auth', 'can:peserta'])->name('daftartim.create');
Route::post('/daftartim/createnew', [DaftarTimController::class, 'daftartimcreatenew'])->middleware(['auth', 'can:peserta'])->name('daftartim.tambah');
Route::get('/daftartimupdateupdate/{id}', [DaftarTimController::class, 'daftartimupdateupdate'])->middleware(['auth', 'can:peserta'])->name('daftartimupdateupdate');
Route::put('/daftartim/updatenew/{id}', [DaftarTimController::class, 'daftartimupdatenew'])->middleware(['auth', 'can:peserta'])->name('daftartim.update');


Route::get('/perbaikankatlomba/{id}', [DaftarTimController::class, 'perbaikankatlomba'])->middleware(['auth', 'can:super_admin'])->name('perbaikankatlomba');

// Route::put('/daftartim/updatenew/{id}', [DaftarTimController::class, 'daftartimupdatenew'])->middleware(['auth', 'can:peserta'])->name('daftartim.update');
// Route::put('/daftartim/update/{id}', [DaftarTimController::class, 'daftartimupdatenew'])->name('daftartim.update');

// DAFTAR LOMBA
Route::get('/daftarlomba', [DaftartimController::class, 'daftarlomba'])->middleware(['auth', 'can:peserta'])->name('daftarlombaindex');
Route::get('/daftarlomba/create/{userId}/{perlombaanId}', [DaftartimController::class, 'daftarlombanew'])
->name('daftarlomba.create');
Route::post('/daftarlombatim/createnew', [DaftarTimController::class, 'daftarlombatimnew'])->name('daftarlombatim');



Route::get('/informasitimadmin/{id}', [DaftartimController::class, 'informasitimadmin'])->middleware(['auth', 'can:superadmindankeuangan'])->name('informasitimadmin');

Route::get('/informasitim/{id}', [DaftartimController::class, 'informasitim'])->middleware(['auth', 'can:semuaakun'])->name('informasitim.show');

Route::get('/informasitimkatputeri/{id}', [DaftartimController::class, 'informasitimkatputeri'])->middleware(['auth', 'can:superadmindankeuangan'])->name('informasitimkatputeri');

Route::get('/informasitimkatpelputera/{id}', [DaftartimController::class, 'informasitimkatpelputera'])->middleware(['auth', 'can:superadmindankeuangan'])->name('informasitimkatpelputera');

Route::get('/informasitimkatpelputeri/{id}', [DaftartimController::class, 'informasitimkatpelputeri'])->middleware(['auth', 'can:superadmindankeuangan'])->name('informasitimkatpelputeri');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/daftar', [LoginController::class, 'showRegisterForm']);
Route::post('/daftar', [LoginController::class, 'register']);


Route::get('/perbaikanberkaspeserta/{id}', [DaftartimController::class, 'perbaikanberkaspeserta'])->middleware('auth')->name('perbaikanberkaspeserta');
Route::post('/daftarlombatimperbaikan/{id}', [DaftarTimController::class, 'daftarlombatimperbaikan'])->name('daftarlombatimperbaikan');

// SERTIFIKAT ADMIN
Route::get('/sertifikatpeserta', [DaftartimController::class, 'sertifikatpeserta'])->middleware('auth')->name('sertifikatpeserta');

Route::get('/sertifikatpesertaupload/{id}', [DaftartimController::class, 'sertifikatpesertaupload'])->middleware('auth')->name('sertifikatpesertaupload');
Route::post('/uploadsertifikatnew/{id}', [DaftarTimController::class, 'uploadsertifikatnew'])->name('uploadsertifikatnew');

Route::get('/updateUangMasuk/{id}', [DaftartimController::class, 'updateUangMasuk'])->middleware('auth')->name('updateUangMasuk');
// Route::post('/uploadsertifikatnew/{id}', [DaftarTimController::class, 'uploadsertifikatnew'])->name('uploadsertifikatnew');


// SUPER ADMIN


Route::get('/datasemuaakun', [DaftartimController::class, 'datasemuaakun'])->middleware(['auth', 'can:superadmindankeuangan'])->name('datasemuaakunindex');

Route::get('/katumumputera', [DaftartimController::class, 'katumumputera'])->middleware(['auth', 'can:superadmindankeuangan'])->name('katumumputeraindex');

Route::post('/cekdokumenpeserta/{id}', [DaftartimController::class, 'cekdokumenpeserta'])->middleware('auth')->name('cekdokumenpeserta');

Route::get('/katumumputeri', [DaftartimController::class, 'katumumputeri'])->middleware('auth', 'can:superadmindankeuangan')->name('katumumputeriindex');

Route::get('/katpelajarputera', [DaftartimController::class, 'katpelajarputera'])->middleware('auth', 'can:superadmindankeuangan')->name('katpelajarputeraindex');

Route::get('/katpelajarputeri', [DaftartimController::class, 'katpelajarputeri'])->middleware('auth', 'can:superadmindankeuangan')->name('katpelajarputeraindex');

// SUPER ADMIN
Route::get('/katumumputerasertifikat', [DaftartimController::class, 'katumumputerasertifikat'])->middleware('auth')->name('katumumputeraindexsertifikat');
Route::get('/katumumputerisertifikat', [DaftartimController::class, 'katumumputerisertifikat'])->middleware('auth')->name('katumumputeriindexsertifikat');
Route::get('/katpelajarputerasertifikat', [DaftartimController::class, 'katpelajarputerasertifikat'])->middleware('auth')->name('katpelajarputeraindexsertifikat');
Route::get('/katpelajarputerisertifikat', [DaftartimController::class, 'katpelajarputerisertifikat'])->middleware('auth')->name('katpelajarputeraindexsertifikat');
// Route::get('/katpelajarputerisertifikat', [DaftartimController::class, 'katpelajarputeri'])->middleware('auth')->name('katpelajarputeraindex');


// PERMOHONAN VALIDASI PENDAFTARAN
Route::put('/validasipendaftaran/{id}', [DaftartimController::class, 'validasipendaftaran'])->middleware('auth')->name('validasipendaftaran');


// For verification 1 (Berkas)
Route::put('/valberkasusaha/{id}', [DaftartimController::class, 'update'])
    ->name('verifikasi1');

// For verification 2 (Pembayaran)
Route::put('/valberkasusaha/{id}/payment', [DaftartimController::class, 'updatePayment'])
    ->name('verifikasi2');

// For verification 3 (Kehadiran)
Route::put('/valberkasusaha/{id}/attendance', [DaftartimController::class, 'updateAttendance'])
    ->name('verifikasi3');

// For verification 4 (Sertifikat)
Route::put('/valberkasusaha/{id}/certificate', [DaftartimController::class, 'updateCertificate'])
    ->name('verifikasi4');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
