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
Route::get('/bekrkindex', [KrkController::class, 'bekrkindex']);
// -------
Route::get('/bekrkhunian', [KrkController::class, 'bekrkhunian'])->name('bekrkhunianindex');

Route::get('/bekrkhunianpermohonan/{id}', [KrkController::class, 'bekrkhunianpermohonan'])->middleware('auth')->name('bekrkhunianpermohonan.show');
Route::put('/validasikrkhunian/{id}', [KrkController::class, 'validasikrkhunian'])->middleware('auth')->name('validasikrkhunian');
Route::put('/valberkashunian1/{id}', [KrkController::class, 'valberkashunian1'])->name('valberkashunian1.update');
Route::get('/doklapkrkhunian/{id}', [KrkController::class, 'doklapkrkhunian'])->middleware('auth')->name('doklapkrkhunian.show');

Route::get('/doklapkrkhuniancreate/{id}', [KrkController::class, 'doklapkrkhuniancreate'])->middleware('auth')->name('doklapkrkhuniancreate.create');
Route::post('/doklapkrkhuniancreatenew', [KrkController::class, 'doklapkrkhuniancreatenew'])->middleware('auth')->name('create.doklapkrkhuniancreatenew');

Route::delete('/doklapkrkhuniancreatedelete/{id}', [KrkController::class, 'doklapkrkhuniancreatedelete'])->middleware('auth')->name('delete.doklapkrkhuniancreatedelete');

Route::put('/valberkashunian2/{id}', [KrkController::class, 'valberkashunian2'])->name('valberkashunian2.update');
Route::post('/berkashunianval/{id}/validate', [KrkController::class, 'berkashunianval'])->name('berkashunianval.validate');

Route::get('/perpengesahanhunian/{id}', [KrkController::class, 'perpengesahanhunian'])->name('permohonan.perpengesahanhunian');
Route::post('/perpengesahanhuniancreate/{id}', [KrkController::class, 'perpengesahanhuniancreate'])->name('permohonan.pengesahanhuniancreate');

Route::get('/perpengesahanhunianber/{id}', [KrkController::class, 'perpengesahanhunianber'])->name('berkas.perpengesahanhunianber');
Route::delete('/krkhuniansuratdelete/{id}', [KrkController::class, 'krkhuniansuratdelete'])->name('krkusahasuratsurat.destroy');


Route::put('/valberkashunian3/{id}', [KrkController::class, 'valberkashunian3'])->name('valberkashunian3.update');

Route::get('/permohonankrkhunianfinal/{id}', [KrkController::class, 'permohonankrkhunianfinal'])->name('permohonan.permohonankrkhunianfinal');

Route::get('/krkhuniannoterbit/{id}', [KrkController::class, 'krkhuniannoterbit'])->middleware('auth')->name('krkhuniannoterbit.create');
Route::post('/krkhuniannoterbitnew/{id}', [KrkController::class, 'krkhuniannoterbitnew'])->middleware('auth')->name('create.krkhuniannoterbitnew');

Route::put('/valberkashunian4/{id}', [KrkController::class, 'valberkashunian4'])->name('valberkashunian4.update');


Route::get('/bekrkhunianperbaikan/{id}', [KrkController::class, 'bekrkhunianperbaikan'])->middleware('auth')->name('bekrkhunianperbaikan.perbaikan');
Route::post('/bekrkhunianperbaikannew/{id}', [KrkController::class, 'bekrkhunianperbaikannewupdate'])->middleware('auth')->name('bekrkhunianperbaikannewupdate');

Route::delete('/dokbekrkhuniandelete/{id}', [KrkController::class, 'dokbekrkhuniandelete'])->middleware('auth')->name('delete.dokbekrkhuniandelete');

// -------
// MENU KRK KEAGAMAAN
Route::get('/bekrkkeagamaan', [KrkController::class, 'bekrkkeagamaan'])->name('bekrkkeagamaanindex');

Route::get('/bekrkkeagamaanpermohonan/{id}', [KrkController::class, 'bekrkkeagamaanpermohonan'])->middleware('auth')->name('bekrkkeagamaanpermohonan.show');
Route::put('/validasikrkkeagamaan/{id}', [KrkController::class, 'validasikrkkeagamaan'])->middleware('auth')->name('validasikrkkeagamaan');
Route::put('/valberkasagama1/{id}', [KrkController::class, 'valberkasagama1'])->name('valberkasagama1.update');
Route::get('/doklapkrkkeagamaan/{id}', [KrkController::class, 'doklapkrkkeagamaan'])->middleware('auth')->name('doklapkrkkeagamaan.show');

Route::get('/doklapkrkkeagamaancreate/{id}', [KrkController::class, 'doklapkrkkeagamaancreate'])->middleware('auth')->name('doklapkrkkeagamaancreate.create');
Route::post('/doklapkrkkeagamaancreatenew', [KrkController::class, 'doklapkrkkeagamaancreatenew'])->middleware('auth')->name('create.doklapkrkkeagamaancreatenew');

Route::delete('/doklapkrkkeagamaancreatedelete/{id}', [KrkController::class, 'doklapkrkkeagamaandelete'])->middleware('auth')->name('delete.doklapkrkkeagamaancreatedelete');

Route::put('/valberkasagama2/{id}', [KrkController::class, 'valberkasagama2'])->name('valberkasagama2.update');
Route::post('/berkaskeagamaanval/{id}/validate', [KrkController::class, 'berkaskeagamaanval'])->name('berkaskeagamaanval.validate');

Route::get('/perpengesahanagama/{id}', [KrkController::class, 'perpengesahanagama'])->name('permohonan.perpengesahanagama');
Route::post('/perpengesahanagamacreate/{id}', [KrkController::class, 'perpengesahanagamacreate'])->name('permohonan.perpengesahanagamacreate');

Route::get('/perpengesahanagamaber/{id}', [KrkController::class, 'perpengesahanagamaber'])->name('berkas.perpengesahanagamaber');
Route::delete('/krkagamasuratdelete/{id}', [KrkController::class, 'krkagamasuratdelete'])->name('krkagamasuratdelete.destroy');


Route::put('/valberkasagama3/{id}', [KrkController::class, 'valberkasagama3'])->name('valberkasagama3.update');

Route::get('/permohonankrkkeagamaanfinal/{id}', [KrkController::class, 'permohonankrkkeagamaanfinal'])->name('permohonan.permohonankrkkeagamaanfinal');

Route::get('/krkagamanoterbit/{id}', [KrkController::class, 'krkagamanoterbit'])->middleware('auth')->name('krkagamanoterbit.create');
Route::post('/krkagamanoterbitnew/{id}', [KrkController::class, 'krkagamanoterbitnew'])->middleware('auth')->name('create.krkagamanoterbitnew');

Route::put('/valberkasagama4/{id}', [KrkController::class, 'valberkasagama4'])->name('valberkasagama4.update');

Route::get('/bekrkkeagamaanperbaikan/{id}', [KrkController::class, 'bekrkkeagamaanperbaikan'])->middleware('auth')->name('bekrkkeagamaanperbaikan.perbaikan');
Route::post('/bekrkkeagamaanperbaikannew/{id}', [KrkController::class, 'bekrkkeagamaanperbaikannew'])->middleware('auth')->name('bekrkkeagamaanperbaikannewupdate');

Route::delete('/dokbekrkkeagamaandelete/{id}', [KrkController::class, 'dokbekrkkeagamaandelete'])->middleware('auth')->name('delete.dokbekrkkeagamaandelete');


// -------
// MENU KRK SOSIAL BUDAYA
Route::get('/bekrksosbud', [KrkController::class, 'bekrksosbud'])->name('bekrksosbudindex');

Route::get('/bekrksosbudpermohonan/{id}', [KrkController::class, 'bekrksosbudpermohonan'])->middleware('auth')->name('bekrksosbudpermohonan.show');
Route::put('/validasikrksosbud/{id}', [KrkController::class, 'validasikrksosbud'])->middleware('auth')->name('validasikrksosbud');
Route::put('/valberkassosbud1/{id}', [KrkController::class, 'valberkassosbud1'])->name('valberkassosbud1.update');
Route::get('/doklapkrksosbud/{id}', [KrkController::class, 'doklapkrksosbud'])->middleware('auth')->name('doklapkrksosbud.show');

Route::get('/doklapkrksosbudcreate/{id}', [KrkController::class, 'doklapkrksosbudcreate'])->middleware('auth')->name('ddoklapkrksosbudcreate.create');
Route::post('/doklapkrksosbudcreatenew', [KrkController::class, 'doklapkrksosbudcreatenew'])->middleware('auth')->name('create.doklapkrksosbudcreatenew');

Route::delete('/doklapkrksosbudcreatedelete/{id}', [KrkController::class, 'doklapkrksosbudcreatedelete'])->middleware('auth')->name('delete.doklapkrksosbudcreatedelete');

Route::put('/valberkassosbud2/{id}', [KrkController::class, 'valberkassosbud2'])->name('valberkassosbud2.update');
Route::post('/berkassosbudval/{id}/validate', [KrkController::class, 'berkassosbudval'])->name('berkassosbudval.validate');

Route::get('/perpengesahansosbud/{id}', [KrkController::class, 'perpengesahansosbud'])->name('permohonan.perpengesahansosbud');
Route::post('/perpengesahansosbudcreate/{id}', [KrkController::class, 'perpengesahansosbudcreate'])->name('permohonan.perpengesahansosbudcreate');

Route::get('/perpengesahansosbudber/{id}', [KrkController::class, 'perpengesahansosbudber'])->name('berkas.perpengesahansosbudber');
Route::delete('/krksosbudsuratdelete/{id}', [KrkController::class, 'krksosbudsuratdelete'])->name('krksosbudsuratdelete.destroy');


Route::put('/valberkassosbud3/{id}', [KrkController::class, 'valberkassosbud3'])->name('valberkassosbud3.update');

Route::get('/permohonankrksosbudfinal/{id}', [KrkController::class, 'permohonankrksosbudfinal'])->name('permohonan.permohonankrksosbudfinal');

Route::get('/krksosbufnoterbit/{id}', [KrkController::class, 'krksosbufnoterbit'])->middleware('auth')->name('krksosbufnoterbit.create');
Route::post('/krksosbufnoterbitnew/{id}', [KrkController::class, 'krksosbufnoterbitnew'])->middleware('auth')->name('create.krksosbufnoterbitnew');

Route::put('/valberkassosbud4/{id}', [KrkController::class, 'valberkassosbud4'])->name('valberkassosbud3.update');


Route::get('/bekrksosbudperbaikan/{id}', [KrkController::class, 'bekrksosbudperbaikan'])->middleware('auth')->name('bekrksosbudperbaikan.perbaikan');
Route::post('/bekrksosbudperbaikannew/{id}', [KrkController::class, 'bekrksosbudperbaikannew'])->middleware('auth')->name('bekrksosbudperbaikannewupdate');

// Route::delete('/dokbekrkkeagamaandelete/{id}', [KrkController::class, 'dokbekrkkeagamaandelete'])->middleware('auth')->name('delete.dokbekrkkeagamaandelete');


// MENU 04 BANTUAN TEKNIS
Route::get('/bebantuanteknisindex', [BantuanteknisController::class, 'bebantuanteknisindex'])->middleware('auth')->name('bebantuanteknisindexmenu');
Route::get('/bebantuanteknis', [BantuanteknisController::class, 'bebantuanteknisberkas'])->middleware('auth')->name('bebantuanteknissemua');
// Route::delete('/bebantuanteknisdelete/{id}', [AdministratorController::class, 'bebantuanteknisdelete'])->middleware('auth')->name('delete.bantuanteknis');
Route::delete('/bebantuanteknisdelete/{id}', [BantuanteknisController::class, 'bebantuanteknisdelete'])->middleware('auth')->name('delete.bantuanteknis');


// DAFTAR SURAT PERMOHONAN BERKAS 1
Route::get('/bebantuanteknisassistensi', [BantuanteknisController::class, 'bebantuanteknisassistensi'])->middleware('auth')->name('bebantuanteknisassistensiindex');
Route::get('/beasistensishow/{id}', [BantuanteknisController::class, 'beasistensishow'])->middleware('auth')->name('beasistensishowberkas1.show');
Route::put('/validasidokumenbantek/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek'])->middleware('auth')->name('validasidokumenbantek');
Route::get('/bebantekpemohondinasperbaikan/{id}', [BantuanteknisController::class, 'bebantekpemohondinasperbaikan'])->middleware('auth')->name('bebantekpemohondinasperbaikan.perbaikan');
Route::post('/bebantekpemohondinasperbaikans/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganberkasbaru'])->middleware('auth')->name('bebantekpemohondinasperbaikan.uploads');


// DAFTAR SURAT PERMOHONAN BERKAS 2
Route::get('/bepenelitikontrak', [BantuanteknisController::class, 'bepenelitikontrak'])->middleware('auth')->name('bepenelitikontrakindex');
Route::get('/bebantuanteknisshow/{id}', [BantuanteknisController::class, 'bebantuanteknisberkasshow'])->middleware('auth')->name('bebantuanteknis.show');
Route::put('/validasidokumenbantek2/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek2'])->middleware('auth')->name('validasidokumenbantek2');
Route::get('/bebantekperpeneliti/{id}', [BantuanteknisController::class, 'bebantekperpeneliti'])->middleware('auth')->name('bebantekperpeneliti.perbaikan');
Route::post('/bebantekperpenelitiperbaikan/{id}', [BantuanteknisController::class, 'bebantekperpenelitiperbaikan'])->middleware('auth')->name('bebantekperpenelitiperbaikan');


// DAFTAR SURAT PERMOHONAN BERKAS 3
Route::get('/beperhitunganpenyusutan', [BantuanteknisController::class, 'beperhitunganpenyusutan'])->middleware('auth')->name('beperhitunganpenyusutanindex');
Route::get('/beperhitunganpenyusutanshow/{id}', [BantuanteknisController::class, 'beperhitunganpenyusutanshow'])->middleware('auth')->name('beperhitunganpenyusutan.show');
Route::put('/validasidokumenbantek3/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek3'])->middleware('auth')->name('validasidokumenbantek3');
Route::get('/beperhitunganpenyusutanper/{id}', [BantuanteknisController::class, 'beperhitunganpenyusutanper'])->middleware('auth')->name('beperhitunganpenyusutanper.perbaikan');
Route::post('/beperhitunganpenyusutanpernew/{id}', [BantuanteknisController::class, 'beperhitunganpenyusutanpernew'])->middleware('auth')->name('beperhitunganpenyusutanpernew');


// DAFTAR SURAT PERMOHONAN BERKAS 4
Route::get('/beperhitungankerusakan', [BantuanteknisController::class, 'beperhitungankerusakan'])->middleware('auth')->name('beperhitungankerusakanindex');
Route::get('/beperhitungankerusakanshow/{id}', [BantuanteknisController::class, 'beperhitungankerusakanshow'])->middleware('auth')->name('beperhitungankerusakan.show');
Route::put('/validasidokumenbantek4/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek4'])->middleware('auth')->name('validasidokumenbantek4');
Route::get('/beperhitungankerusakanper/{id}', [BantuanteknisController::class, 'beperhitungankerusakanper'])->middleware('auth')->name('beperhitungankerusakanper.perbaikan');
Route::post('/beperhitungankerusakanpernew/{id}', [BantuanteknisController::class, 'beperhitungankerusakanpernew'])->middleware('auth')->name('beperhitungankerusakanpernew');



// DAFTAR SURAT PERMOHONAN BERKAS 5
Route::get('/beperhitunganbgn', [BantuanteknisController::class, 'beperhitunganbgn'])->middleware('auth')->name('beperhitunganbgnindex');
Route::get('/beperhitunganbgnshow/{id}', [BantuanteknisController::class, 'beperhitunganbgnshow'])->middleware('auth')->name('beperhitunganbgnshow.show');
Route::put('/validasidokumenbantek5/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek5'])->middleware('auth')->name('validasidokumenbantek5');
Route::get('/beperhitunganbgnper/{id}', [BantuanteknisController::class, 'beperhitunganbgnper'])->middleware('auth')->name('beperhitunganbgnper.perbaikan');
Route::post('/beperhitunganbgnpernew/{id}', [BantuanteknisController::class, 'beperhitunganbgnpernew'])->middleware('auth')->name('beperhitunganbgnpernew');

// DAFTAR SURAT PERMOHONAN BERKAS 6
Route::get('/bekonstruksiperhitunganbgn', [BantuanteknisController::class, 'bekonstruksiperhitunganbgn'])->middleware('auth')->name('bekonstruksiperhitunganbgnindex');
Route::get('/bekonstruksiperhitunganbgnshow/{id}', [BantuanteknisController::class, 'bekonstruksiperhitunganbgnshow'])->middleware('auth')->name('bekonstruksiperhitunganbgn.show');
Route::put('/validasidokumenbantek6/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek6'])->middleware('auth')->name('validasidokumenbantek6');
Route::get('/bekonstruksiperhitunganbgnper/{id}', [BantuanteknisController::class, 'bekonstruksiperhitunganbgnper'])->middleware('auth')->name('bekonstruksiperhitunganbgnper.perbaikan');
Route::post('/bekonstruksiperhitunganbgnnew/{id}', [BantuanteknisController::class, 'bekonstruksiperhitunganbgnnew'])->middleware('auth')->name('bekonstruksiperhitunganbgnnew');

// DAFTAR SURAT PERMOHONAN BERKAS 7
Route::get('/beserahterima', [BantuanteknisController::class, 'beserahterima'])->middleware('auth')->name('beserahterimaindex');
Route::get('/beserahterimashow/{id}', [BantuanteknisController::class, 'beserahterimashow'])->middleware('auth')->name('beserahterima.show');
Route::put('/validasidokumenbantek7/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek7'])->middleware('auth')->name('validasidokumenbantek7');
Route::get('/beserahterimaper/{id}', [BantuanteknisController::class, 'beserahterimaper'])->middleware('auth')->name('beserahterimaper.perbaikan');
Route::post('/beserahterimapernew/{id}', [BantuanteknisController::class, 'beserahterimapernew'])->middleware('auth')->name('beserahterimapernew');

// SIGIT SURAT

// DAFTAR SURAT PERMOHONAN BERKAS 8
Route::get('/bepersontimteknis', [BantuanteknisController::class, 'bepersontimteknis'])->middleware('auth')->name('bepersontimteknisindex');
Route::get('/bepersontimteknisshow/{id}', [BantuanteknisController::class, 'bepersontimteknisshow'])->middleware('auth')->name('bepersontimteknis.show');
Route::put('/validasidokumenbantek8/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek8'])->middleware('auth')->name('validasidokumenbantek8');
Route::get('/bepersontimteknisper/{id}', [BantuanteknisController::class, 'bepersontimteknisper'])->middleware('auth')->name('bepersontimteknisper.perbaikan');
Route::post('/bepersontimteknispernew/{id}', [BantuanteknisController::class, 'bepersontimteknispernew'])->middleware('auth')->name('bepersontimteknispernew');

// SIGIT
// DAFTAR SURAT PERMOHONAN BERKAS 2

// Route::get('/bebantuanteknisshowvalidasi/{id}', [BantuanteknisController::class, 'bebantuanteknisberkasshow'])->middleware('auth')->name('validasidokumenbantek');
// VERIFIKASI BANTUAN TEKNIS


Route::put('/validasiberkas1permohonan1/{id}', [BantuanteknisController::class, 'valsuratpermohonan1'])->name('validasiberkas1.update');
Route::put('/validasiberkas1permohonan2/{id}', [BantuanteknisController::class, 'valsuratpermohonan2'])->name('validasiberkas2.update');
Route::put('/validasiberkas1permohonan3/{id}', [BantuanteknisController::class, 'valsuratpermohonan3'])->name('validasiberkas3.update');
Route::put('/validasiberkas1permohonan4/{id}', [BantuanteknisController::class, 'valsuratpermohonan4'])->name('validasiberkas4.update');

// SURAT PERMOHONAN 2

Route::put('/validasiberkas2permohonan1/{id}', [BantuanteknisController::class, 'valsurat2permohonan1'])->name('valsurat2permohonan1.update');
Route::put('/validasiberkas2permohonan2/{id}', [BantuanteknisController::class, 'valsurat2permohonan2'])->name('valsurat2permohonan2.update');
Route::put('/validasiberkas2permohonan3/{id}', [BantuanteknisController::class, 'valsurat2permohonan3'])->name('valsurat2permohonan3.update');
Route::put('/validasiberkas2permohonan4/{id}', [BantuanteknisController::class, 'valsurat2permohonan4'])->name('valsurat2permohonan4.update');

// SURAT PERMOHONAN 3

Route::put('/validasiberkas3permohonan1/{id}', [BantuanteknisController::class, 'valsurat3permohonan1'])->name('valsurat3permohonan1.update');
Route::put('/validasiberkas3permohonan2/{id}', [BantuanteknisController::class, 'valsurat3permohonan2'])->name('valsurat3permohonan2.update');
Route::put('/validasiberkas3permohonan3/{id}', [BantuanteknisController::class, 'valsurat3permohonan3'])->name('valsurat3permohonan3.update');
Route::put('/validasiberkas3permohonan4/{id}', [BantuanteknisController::class, 'valsurat3permohonan4'])->name('valsurat3permohonan4.update');

// SURAT PERMOHONAN 4

Route::put('/validasiberkas4permohonan1/{id}', [BantuanteknisController::class, 'valsurat4permohonan1'])->name('valsurat4permohonan1.update');
Route::put('/validasiberkas4permohonan2/{id}', [BantuanteknisController::class, 'valsurat4permohonan2'])->name('valsurat4permohonan2.update');
Route::put('/validasiberkas4permohonan3/{id}', [BantuanteknisController::class, 'valsurat4permohonan3'])->name('valsurat4permohonan3.update');
Route::put('/validasiberkas4permohonan4/{id}', [BantuanteknisController::class, 'valsurat4permohonan4'])->name('valsurat4permohonan4.update');

// SURAT PERMOHONAN 5

Route::put('/validasiberkas5permohonan1/{id}', [BantuanteknisController::class, 'valsurat5permohonan1'])->name('valsurat5permohonan1.update');
Route::put('/validasiberkas5permohonan2/{id}', [BantuanteknisController::class, 'valsurat5permohonan2'])->name('valsurat5permohonan2.update');
Route::put('/validasiberkas5permohonan3/{id}', [BantuanteknisController::class, 'valsurat5permohonan3'])->name('valsurat5permohonan3.update');
Route::put('/validasiberkas5permohonan4/{id}', [BantuanteknisController::class, 'valsurat5permohonan4'])->name('valsurat5permohonan4.update');

// SURAT PERMOHONAN 6
Route::put('/validasiberkas6permohonan1/{id}', [BantuanteknisController::class, 'valsurat6permohonan1'])->name('valsurat6permohonan1.update');
Route::put('/validasiberkas6permohonan2/{id}', [BantuanteknisController::class, 'valsurat6permohonan2'])->name('valsurat6permohonan2.update');
Route::put('/validasiberkas6permohonan3/{id}', [BantuanteknisController::class, 'valsurat6permohonan3'])->name('valsurat6permohonan3.update');
Route::put('/validasiberkas6permohonan4/{id}', [BantuanteknisController::class, 'valsurat6permohonan4'])->name('valsurat6permohonan4.update');


// SURAT PERMOHONAN 7

Route::put('/validasiberkas7permohonan1/{id}', [BantuanteknisController::class, 'valsurat7permohonan1'])->name('valsurat7permohonan1.update');
Route::put('/validasiberkas7permohonan2/{id}', [BantuanteknisController::class, 'valsurat7permohonan2'])->name('valsurat7permohonan2.update');
Route::put('/validasiberkas7permohonan3/{id}', [BantuanteknisController::class, 'valsurat7permohonan3'])->name('valsurat7permohonan3.update');
Route::put('/validasiberkas7permohonan4/{id}', [BantuanteknisController::class, 'valsurat7permohonan4'])->name('valsurat7permohonan4.update');


// SURAT PERMOHONAN 8
Route::put('/validasiberkas8permohonan1/{id}', [BantuanteknisController::class, 'valsurat8permohonan1'])->name('valsurat8permohonan1.update');
Route::put('/validasiberkas8permohonan2/{id}', [BantuanteknisController::class, 'valsurat8permohonan2'])->name('valsurat8permohonan2.update');
Route::put('/validasiberkas8permohonan3/{id}', [BantuanteknisController::class, 'valsurat8permohonan3'])->name('valsurat8permohonan3.update');
Route::put('/validasiberkas8permohonan4/{id}', [BantuanteknisController::class, 'valsurat8permohonan4'])->name('valsurat8permohonan4.update');


Route::get('/bebanteklap/{id}', [BantuanteknisController::class, 'bebanteklap'])->middleware('auth')->name('bebantuanteknislapa.show');

// UPLOAD CEK LAPANGAN KE SURAT KE 3
Route::get('/bebanteklapper3/{id}', [BantuanteknisController::class, 'bebanteklapper3'])->middleware('auth')->name('bebanteklapper3.show');
Route::get('/bebanteklapper3create/{id}', [BantuanteknisController::class, 'bebanteklapper3create'])->middleware('auth')->name('bebanteklapper3create.create');
Route::post('/bebanteklapper3createnew', [BantuanteknisController::class, 'bebanteklapper3createnew'])->middleware('auth')->name('create.bebanteklapper3create');
Route::delete('/bebanteklapper3delete/{id}', [BantuanteknisController::class, 'bebanteklapper3delete'])->middleware('auth')->name('delete.bebanteklapper3delete');

// UPLOAD CEK LAPANGAN KE SURAT KE 4
Route::get('/bebanteklapper4/{id}', [BantuanteknisController::class, 'bebanteklapper4'])->middleware('auth')->name('bebanteklapper4.show');
Route::get('/bebanteklapper4create/{id}', [BantuanteknisController::class, 'bebanteklapper4create'])->middleware('auth')->name('bebanteklapper4create.create');
Route::post('/bebanteklapper4createnew', [BantuanteknisController::class, 'bebanteklapper4createnew'])->middleware('auth')->name('create.bebanteklapper4create');
Route::delete('/bebanteklapper4delete/{id}', [BantuanteknisController::class, 'bebanteklapper4delete'])->middleware('auth')->name('delete.bebanteklapper4delete');

// UPLOAD CEK LAPANGAN KE SURAT KE 5
Route::get('/bebanteklapper5/{id}', [BantuanteknisController::class, 'bebanteklapper5'])->middleware('auth')->name('bebanteklapper5.show');
Route::get('/bebanteklapper5create/{id}', [BantuanteknisController::class, 'bebanteklapper5create'])->middleware('auth')->name('bebanteklapper5create.create');
Route::post('/bebanteklapper5createnew', [BantuanteknisController::class, 'bebanteklapper5createnew'])->middleware('auth')->name('create.bebanteklapper5create');
Route::delete('/bebanteklapper5delete/{id}', [BantuanteknisController::class, 'bebanteklapper5delete'])->middleware('auth')->name('delete.bebanteklapper5delete');

// UPLOAD CEK LAPANGAN KE SURAT KE 6
Route::get('/bebanteklapper6/{id}', [BantuanteknisController::class, 'bebanteklapper6'])->middleware('auth')->name('bebanteklapper6.show');
Route::get('/bebanteklapper6create/{id}', [BantuanteknisController::class, 'bebanteklapper6create'])->middleware('auth')->name('bebanteklapper6create.create');
Route::post('/bebanteklapper6createnew', [BantuanteknisController::class, 'bebanteklapper6createnew'])->middleware('auth')->name('create.bebanteklapper6create');
Route::delete('/bebanteklapper6delete/{id}', [BantuanteknisController::class, 'bebanteklapper6delete'])->middleware('auth')->name('delete.bebanteklapper6delete');

// UPLOAD CEK LAPANGAN KE SURAT KE 7
Route::get('/bebanteklapper7/{id}', [BantuanteknisController::class, 'bebanteklapper7'])->middleware('auth')->name('bebanteklapper7.show');
Route::get('/bebanteklapper7create/{id}', [BantuanteknisController::class, 'bebanteklapper7create'])->middleware('auth')->name('bebanteklapper7create.create');
Route::post('/bebanteklapper7createnew', [BantuanteknisController::class, 'bebanteklapper7createnew'])->middleware('auth')->name('create.bebanteklapper7create');
Route::delete('/bebanteklapper7delete/{id}', [BantuanteknisController::class, 'bebanteklapper7delete'])->middleware('auth')->name('delete.bebanteklapper7delete');
// SIGIT LAPANGAN

// UPLOAD CEK LAPANGAN KE SURAT KE 8
Route::get('/bebanteklapper8/{id}', [BantuanteknisController::class, 'bebanteklapper8'])->middleware('auth')->name('bebanteklapper8.show');
Route::get('/bebanteklapper8create/{id}', [BantuanteknisController::class, 'bebanteklapper8create'])->middleware('auth')->name('bebanteklapper8create.create');
Route::post('/bebanteklapper8createnew', [BantuanteknisController::class, 'bebanteklapper8createnew'])->middleware('auth')->name('create.bebanteklapper8create');
Route::delete('/bebanteklapper8delete/{id}', [BantuanteknisController::class, 'bebanteklapper8delete'])->middleware('auth')->name('delete.bebanteklapper8delete');



// VERIFIKASI DOKUMENTASI CEK LAPANGAN
Route::get('/bebantuanteknislapangan/{id}', [BantuanteknisController::class, 'bebantuanteknisceklapangan'])->middleware('auth')->name('bebantuanteknislapangan.show');
Route::get('/bebantuanteknislapangancreate/{id}', [BantuanteknisController::class, 'bebantuanteknislapangancreate'])->middleware('auth')->name('bebantuanteknislapangancreate.create');
Route::post('/bebantuanteknislapangancreate', [BantuanteknisController::class, 'bebantuanteknislapangancreatenew'])->middleware('auth')->name('create.ceklapanganbantektambah');

Route::delete('/bebantuanteknislapangandelete/{id}', [BantuanteknisController::class, 'bebantuanteknislapangandelete'])->middleware('auth')->name('delete.bebantuanteknislapangandelete');

Route::get('/bebantuanasistensilap/{id}', [BantuanteknisController::class, 'bebantuanasistensilap'])->middleware('auth')->name('bebantuanasistensilap.show');


Route::get('/bebantuanteknislapanganupload/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganuploadnew'])->middleware('auth')->name('bebantuanteknislapangan.uploadberkas');
Route::get('/bebantuanteknislapanganuploads/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganuploadnews'])->middleware('auth')->name('bebantuanteknislapangan.uploadberkasnew');


// UPLOAD SURAT BANTEK 2
Route::get('/bebantekupload2/{id}', [BantuanteknisController::class, 'bebantekupload2berkas'])->middleware('auth')->name('bebantuanteknislapangan.uploadberkasnew2');
Route::post('/bebantekupload2new/{id}', [BantuanteknisController::class, 'bebantekupload2new'])->middleware('auth')->name('upload.bebantekupload2new');

// UPLOAD SURAT BANTEK 3
Route::get('/bebantekupload3/{id}', [BantuanteknisController::class, 'bebantekupload3berkas'])->middleware('auth')->name('bebantek3.uploadberkasnew3');
Route::post('/bebantekupload3new/{id}', [BantuanteknisController::class, 'bebantekupload3new'])->middleware('auth')->name('upload.bebantekupload3new');

// UPLOAD SURAT BANTEK 4
Route::get('/bebantekupload4/{id}', [BantuanteknisController::class, 'bebantekupload4berkas'])->middleware('auth')->name('bebantek4.uploadberkasnew4');
Route::post('/bebantekupload4new/{id}', [BantuanteknisController::class, 'bebantekupload4new'])->middleware('auth')->name('upload.bebantekupload4new');

// UPLOAD SURAT BANTEK 5
Route::get('/bebantekupload5/{id}', [BantuanteknisController::class, 'bebantekupload5berkas'])->middleware('auth')->name('bebantek5.uploadberkasnew5');
Route::post('/bebantekupload5new/{id}', [BantuanteknisController::class, 'bebantekupload5new'])->middleware('auth')->name('upload.bebantekupload5new');

// UPLOAD SURAT BANTEK 6
Route::get('/bebantekupload6/{id}', [BantuanteknisController::class, 'bebantekupload6berkas'])->middleware('auth')->name('bebantek6.uploadberkasnew6');
Route::post('/bebantekupload6new/{id}', [BantuanteknisController::class, 'bebantekupload6new'])->middleware('auth')->name('upload.bebantekupload6new');

// UPLOAD SURAT BANTEK 7
Route::get('/bebantekupload7/{id}', [BantuanteknisController::class, 'bebantekupload7berkas'])->middleware('auth')->name('bebantek7.uploadberkasnew7');
Route::post('/bebantekupload7new/{id}', [BantuanteknisController::class, 'bebantekupload7new'])->middleware('auth')->name('upload.bebantekupload7new');

// UPLOAD SURAT BANTEK 8
Route::get('/bebantekupload8/{id}', [BantuanteknisController::class, 'bebantekupload8berkas'])->middleware('auth')->name('bebantek8.uploadberkasnew8');
Route::post('/bebantekupload7new/{id}', [BantuanteknisController::class, 'bebantekupload7new'])->middleware('auth')->name('upload.bebantekupload7new');


// BANTUAN TEKNIS TERBITKAN SERTIFIKAT
// Route::get('/bebantuanteknissertifikat/{id}', [BantuanteknisController::class, 'bebantuanteknislapangancreate'])->middleware('auth')->name('bebantuanteknissertifikat.upload');
Route::post('/bebantuanteknislapanganuploadnew/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganberkas'])->middleware('auth')->name('upload.bebantuanteknislapanganuploadnew');

// AKUN PEMOHON BANTEK
Route::get('/bebantekpemohondinas', [BantuanteknisController::class, 'bebantekpemohondinas'])->middleware('auth')->name('bebantekpemohondinasindex');
Route::get('/bebantekpemohonasistensi', [BantuanteknisController::class, 'bebantekpemohonasistensi'])->middleware('auth')->name('bebantekpemohonasistensiindex');
// PERBAIKAN DATA BERKAS

Route::get('/bebantekceklapangan/{id}', [BantuanteknisController::class, 'bebantekceklapangandok'])->middleware('auth')->name('bebantekceklapangan.show');

// AKUN DINAS BANTUAN TEKNIS
Route::get('/bebantekakundinas', [BantuanteknisController::class, 'bebantekakundinasistensi'])->middleware('auth')->name('bebantekakundinasindex');
Route::get('/bebantekakunkonsultan', [BantuanteknisController::class, 'bebantekakunkonsultan'])->middleware('auth')->name('bebantekakunkonsultanindex');


// SIGIT DINAS
Route::get('/bebantekdinasasistensi', [BantuanteknisController::class, 'bebantekdinasasistensi'])->middleware('auth')->name('bebantekdinasasistensiindex');
Route::get('/bebantekakundinasberkas', [BantuanteknisController::class, 'bebantekakundinasberkas'])->middleware('auth')->name('bebantekakundinasberkasindex');
Route::get('/bebantekdinaspenyusutan', [BantuanteknisController::class, 'bebantekdinaspenyusutan'])->middleware('auth')->name('bebantekdinaspenyusutanindex');
Route::get('/bebantekdinaskerusakan', [BantuanteknisController::class, 'bebantekdinaskerusakan'])->middleware('auth')->name('bebantekdinaskerusakanindex');
Route::get('/bebantekdinaspemeliharaan', [BantuanteknisController::class, 'bebantekdinaspemeliharaan'])->middleware('auth')->name('bebantekdinaspemeliharaanindex');
Route::get('/bebantekdinasperhibgn', [BantuanteknisController::class, 'bebantekdinasperhibgn'])->middleware('auth')->name('bebantekdinasperhibgnindex');
Route::get('/bebantekdinasserahterima', [BantuanteknisController::class, 'bebantekdinasserahterima'])->middleware('auth')->name('bebantekdinasserahterimaindex');
Route::get('/bebantekdinaspersonil', [BantuanteknisController::class, 'bebantekdinaspersonil'])->middleware('auth')->name('bebantekdinaspersonilindex');

Route::get('/datapermohonandinas', [AdminDashboardController::class, 'dashboarddinas']);
Route::get('/beakunkonsultanasistensi', [BantuanteknisController::class, 'bebantekkonsultandataakun'])->middleware('auth')->name('bebantekkonsultanindex');

// AKUN JASA KONSULTAN ASISTENSI

Route::get('/bebantekdaftarkonsultan', [BantuanteknisController::class, 'bebantekdaftarkonsultan'])->middleware('auth')->name('bebantekdaftarkonsultanindex');
Route::get('/bebantekdaftarkonsultapilih/{id}', [BantuanteknisController::class, 'bebantekdaftarkonsultapilih'])->middleware('auth')->name('bebantekdaftarkonsultapilih.show');

Route::post('/bebantekdaftarkonsultapilihnew/{id}', [BantuanteknisController::class, 'bebantekdaftarkonsultapilihnew'])->middleware('auth')->name('update.bebantekdaftarkonsultapilihnew');
Route::get('/bebantekdaftarkonsultanproses', [BantuanteknisController::class, 'bebantekdaftarkonsultanproses'])->middleware('auth')->name('bebantekdaftarkonsultanproses');

Route::get('/bebantekdaftarkonsultanproses', [BantuanteknisController::class, 'bebantekdaftarkonsultanproses'])->middleware('auth')->name('bebantekdaftarceklapangan');

Route::get('/bebantekkonsultan', [BantuanteknisController::class, 'bebantekkonsultandata'])->middleware('auth')->name('bebantekkonsultanindex');
Route::get('/bebantekkonsultannew', [BantuanteknisController::class, 'bebantekkonsultannew'])->middleware('auth')->name('bebantekkonsultannew.create');
Route::post('/bebantekkonsultannewjasa', [BantuanteknisController::class, 'bebantekkonsultannewjasa'])->middleware('auth')->name('create.bebantekkonsultannewjasa');

Route::get('/bebanteklapcekdokcreate/{id}', [BantuanteknisController::class, 'bebanteklapcekdokcreate'])->middleware('auth')->name('bebanteklapcekdokcreate.create');
Route::post('/bebanteklapcekdokcreatenew', [BantuanteknisController::class, 'bebanteklapcekdokcreatenew'])->middleware('auth')->name('create.bebanteklapcekdokcreate');
Route::delete('/bebanteklapcekdokcredelete/{id}', [BantuanteknisController::class, 'bebanteklapcekdokcredelete'])->middleware('auth')->name('delete.bebanteklapcekdokcredelete');


Route::get('/allakun', [akuncontroller::class, 'allakun'])->middleware('auth')->name('allakun.showdata');
Route::delete('/allakundelete/{id}', [akuncontroller::class, 'allakundelete'])->middleware('auth')->name('delete.allakundelete');

Route::get('/allakundinas', [akuncontroller::class, 'allakundinas'])->middleware('auth')->name('allakundinas.showdata');
Route::get('/allakunkonsultan', [akuncontroller::class, 'allakunkonsultan'])->middleware('auth')->name('allakunkonsultan.showdata');

Route::get('/allakuncreate', [akuncontroller::class, 'allakuncreate'])->middleware('auth')->name('allakuncreate.create');
Route::post('/allakuncreatenew', [akuncontroller::class, 'allakuncreatenew'])->middleware('auth')->name('create.allakuncreatenew');
// MENU AKUN SEMUA

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


// -------------------------------------------------------------------------------------------------------------------------------------------
// MENU FRONTEND WEB ---------------------------------
// -------------------------------------------------------------------------------------------------------------------------------------------

// 04. MENU BANTUAN TEKNIS

Route::get('/febantuanteknis', [BantuanteknisController::class, 'index'])->middleware('auth');
Route::post('/febantuanteknis/create', [BantuanteknisController::class, 'febantuantekniscreatepermohonan'])->name('permohonan.bantekcreate');

Route::get('/infobantek', [BantuanteknisController::class, 'infobantek']);
Route::get('/infobanteklampiran', [BantuanteknisController::class, 'infobanteklampiran']);
Route::get('/infobantekpetunjuk', [BantuanteknisController::class, 'infobantekpetunjuk']);
Route::get('/infobantekasistensi', [BantuanteknisController::class, 'infobantekasistensi']);
Route::get('/infobantekpeneliti', [BantuanteknisController::class, 'infobantekpeneliti']);
Route::get('/infobantekperhitungan', [BantuanteknisController::class, 'infobantekperhitungan']);
Route::get('/infobantekpemeliharaan', [BantuanteknisController::class, 'infobantekpemeliharaan']);
Route::get('/infobantekpendampingan', [BantuanteknisController::class, 'infobantekpendampingan']);
Route::get('/infobantektimteknis', [BantuanteknisController::class, 'infobantektimteknis']);

// DATABASE ABG BLORA ---------------------------------------------
Route::get('/datagsbblora', [DatabaseAbgController::class, 'datagsbblora'])->middleware('auth')->name('datagsbbloraindex');
Route::delete('/bedatagsbbloradelete/{id}', [DatabaseAbgController::class, 'bedatagsbbloradelete'])->middleware('auth')->name('delete.bedatagsbbloradelete');

Route::get('/datagsbbloraupdate/{id}', [DatabaseAbgController::class, 'datagsbbloraupdate'])->middleware('auth')->name('datagsbbloraupdate.perbaikan');
Route::post('/datagsbbloraupdatenew/{id}', [DatabaseAbgController::class, 'datagsbbloraupdatenew'])->middleware('auth')->name('datagsbbloraupdatenew.update');

// DATA KECAMATAN DAN DESA
Route::get('/datakecblora', [DatabaseAbgController::class, 'datakecblora'])->middleware('auth')->name('datakecbloraindex');
Route::delete('/datakecbloradelete/{id}', [DatabaseAbgController::class, 'datakecbloradelete'])->middleware('auth')->name('delete.datakecbloradelete');

// Route::get('/datagsbbloraupdate/{id}', [DatabaseAbgController::class, 'datagsbbloraupdate'])->middleware('auth')->name('datagsbbloraupdate.perbaikan');
// Route::post('/datagsbbloraupdatenew/{id}', [DatabaseAbgController::class, 'datagsbbloraupdatenew'])->middleware('auth')->name('datagsbbloraupdatenew.update');

// MENU 07 PENILIK BANGUNAN
Route::get('/datanewpenilik', [PenilikbangunanController::class, 'datanewpenilik'])->middleware('auth')->name('datanewpenilik.create');
Route::post('/datanewpeniliknew', [PenilikbangunanController::class, 'datanewpeniliknew'])->middleware('auth')->name('datanewpeniliknew.create');

Route::get('/dataallpenilikbg', [PenilikbangunanController::class, 'dataallpenilikbg'])->name('dataallpenilikbg.index');

Route::get('/bedatadasarpenilik/{id}', [PenilikbangunanController::class, 'bedatadasarpenilik'])->middleware('auth')->name('bedatadasarpenilik.show');
// Route::get('/bedatadasarpenilikberkas/{id}', [PenilikbangunanController::class, 'bedatadasarpenilikberkas'])->middleware('auth')->name('bedatadasarpenilikberkas.show');

Route::get('/bedatapeniliksurvey/{id}', [PenilikbangunanController::class, 'bedatapeniliksurvey'])->middleware('auth')->name('bedatapeniliksurvey.show');

// MENU 10 BACKEND DANA BANTUAN HIBAH

Route::get('/datanewhibah', [BantuanhibahbgController::class, 'hibahdokcreate'])->middleware('auth')->name('hibahdok.create');
Route::post('/datanewhibahnew', [BantuanhibahbgController::class, 'datanewhibahnew'])->middleware('auth')->name('dokhibahnew.create');
Route::get('/dataallhibahbangunan', [BantuanhibahbgController::class, 'dataallhibahbangunan'])->name('dataallhibahbangunan.index');
Route::get('/banhibahpermohonan/{id}', [BantuanhibahbgController::class, 'banhibahpermohonan'])->middleware('auth')->name('banhibahpermohonan.show');

Route::put('/valhibahbantuan1/{id}', [BantuanhibahbgController::class, 'valhibahbantuan1'])->name('valhibahbantuan1.update');
Route::get('/dokhibahbantuanberkas/{id}', [BantuanhibahbgController::class, 'dokhibahbantuanberkas'])->middleware('auth')->name('dokhibahbantuanberkas.show');

Route::get('/dokberkashibah/{id}', [BantuanhibahbgController::class, 'dokberkashibah'])->middleware('auth')->name('dokberkashibah.create');
Route::post('/dokberkashibahcreatenew', [BantuanhibahbgController::class, 'dokberkashibahcreatenew'])->middleware('auth')->name('create.dokberkashibahcreatenew');

Route::delete('/dokberkashibahcreatedelete/{id}', [BantuanhibahbgController::class, 'dokberkashibahcreatedelete'])->middleware('auth')->name('delete.dokberkashibahcreatedelete');

Route::get('/doklapbanhibah/{id}', [BantuanhibahbgController::class, 'doklapbanhibah'])->middleware('auth')->name('doklapbanhibah.show');

Route::get('/doklapbanhibahcreate/{id}', [BantuanhibahbgController::class, 'doklapbanhibahcreate'])->middleware('auth')->name('doklapbanhibahcreate.create');
Route::post('/doklapbanhibahcreatenew', [BantuanhibahbgController::class, 'doklapbanhibahcreatenew'])->middleware('auth')->name('create.doklapbanhibahcreatenew');

Route::delete('/doklapbanhibahcreatenewdelete/{id}', [BantuanhibahbgController::class, 'doklapbanhibahcreatenewdelete'])->middleware('auth')->name('delete.doklapbanhibahcreatenewdelete');
Route::put('/valberkashibah2/{id}', [BantuanhibahbgController::class, 'valberkashibah2'])->name('valberkashibah2.update');

Route::get('/dokuploadskhibah/{id}', [BantuanhibahbgController::class, 'dokuploadskhibah'])->middleware('auth')->name('dokuploadskhibah.show');

Route::get('/dokuploadhibahskcreate/{id}', [BantuanhibahbgController::class, 'dokuploadhibahskcreate'])->middleware('auth')->name('dokuploadhibahskcreate.create');
Route::post('/dokuploadhibahskcreatenew', [BantuanhibahbgController::class, 'dokuploadhibahskcreatenew'])->middleware('auth')->name('create.dokuploadhibahskcreatenew');

Route::delete('/dokuploadhibahskcrdelete/{id}', [BantuanhibahbgController::class, 'dokuploadhibahskcrdelete'])->middleware('auth')->name('delete.dokuploadhibahskcrdelete');

Route::put('/valberkashibah3/{id}', [BantuanhibahbgController::class, 'valberkashibah3'])->name('valberkashibah3.update');
Route::put('/valberkashibah4/{id}', [BantuanhibahbgController::class, 'valberkashibah4'])->name('valberkashibah4.update');

Route::get('/bestatistikhibah', [BantuanhibahbgController::class, 'bestatistikhibah']);

Route::delete('/dokbebanhibahdelete/{id}', [BantuanhibahbgController::class, 'dokbebanhibahdelete'])->middleware('auth')->name('delete.dokbebanhibahdelete');

// -----------------------------------------------------------------
// MENU 01 PBG SLF
Route::get('/bepbgslfindex', [PbgslfController::class, 'bepbgslfindexmenu'])->middleware('auth')->name('bepbgslfindexindexmenu');
Route::get('/bepbgslfindexslf', [PbgslfController::class, 'bepbgslfindexslf'])->middleware('auth')->name('bepbgslfindexslfindex');

Route::delete('/bepbgslfindexslfdelete/{id}', [PbgslfController::class, 'bepbgslfindexslfdelete'])->middleware('auth')->name('delete.bepbgslfindexslfdelete');

Route::get('/bepbgslflihatper/{id}', [PbgslfController::class, 'bepbgslflihatper'])->middleware('auth')->name('bepbgslflihatper.show');

// TAHAP INDUK ----------------
Route::get('/createdatapbgslf', [PbgslfController::class, 'createdatapbgslf'])->middleware('auth')->name('createdatapbgslf.create');
Route::post('/createdatapbgslfnew', [PbgslfController::class, 'createdatapbgslfnew'])->middleware('auth')->name('createdatapbgslf.create');

// DATA PEMILIK
Route::get('/bepbgdatapemilik/{id}', [PbgslfController::class, 'bepbgdatapemilik'])->middleware('auth')->name('bepbgdatapemilik');

Route::get('/bepbgdatapemilikcreate/{id}', [PbgslfController::class, 'bepbgdatapemilikcreate'])->middleware('auth')->name('datapemilik.create');
Route::post('/bepbgdatapemilikcreatenew', [PbgslfController::class, 'bepbgdatapemilikcreatenew'])->middleware('auth')->name('bepbgdatapemilikcreatenew');

Route::delete('/bepbgdatapemilikdelete/{id}', [PbgslfController::class, 'bepbgdatapemilikdelete'])->middleware('auth')->name('bepbgdatapemilikdelete');

// DATA BANGUNAN
Route::get('/bepbgdatabangunan/{id}', [PbgslfController::class, 'bepbgdatabangunan'])->middleware('auth')->name('bepbgdatabangunan');

Route::get('/bepbgdatabangunancreate/{id}', [PbgslfController::class, 'bepbgdatabangunancreate'])->middleware('auth')->name('bepbgdatabangunancreate');
Route::post('/bepbgdatabangunancreatenew', [PbgslfController::class, 'bepbgdatabangunancreatenew'])->middleware('auth')->name('bepbgdatabangunancreatenew');
Route::delete('/bepbgdatabangunandelete/{id}', [PbgslfController::class, 'bepbgdatabangunandelete'])->middleware('auth')->name('bepbgdatabangunandelete');

// DATA TANAH
Route::get('/bepbgdatatanah/{id}', [PbgslfController::class, 'bepbgdatatanah'])->middleware('auth')->name('bepbgdatatanah');
Route::get('/bepbgdatatanahcreate/{id}', [PbgslfController::class, 'bepbgdatatanahcreate'])->middleware('auth')->name('bepbgdatatanahcreate');
Route::post('/bepbgdatatanahcreatenew', [PbgslfController::class, 'bepbgdatatanahcreatenew'])->middleware('auth')->name('bepbgdatatanahnew');
Route::delete('/bepbgdatatanahdelete/{id}', [PbgslfController::class, 'bepbgdatatanahdelete'])->middleware('auth')->name('bepbgdatatanahdelete');

// DATA UMUM
Route::get('/bepbgdataumum/{id}', [PbgslfController::class, 'bepbgdataumum'])->middleware('auth')->name('bepbgdataumum');
Route::get('/bepbgdataumumcreate/{id}', [PbgslfController::class, 'bepbgdataumumcreate'])->middleware('auth')->name('bepbgdataumumcreate');
Route::post('/bepbgdataumumcreatenew', [PbgslfController::class, 'bepbgdataumumcreatenew'])->middleware('auth')->name('bepbgdataumumcreatenew');
Route::delete('/bepbgdataumumdelete/{id}', [PbgslfController::class, 'bepbgdataumumdelete'])->middleware('auth')->name('bepbgdataumumdelete');

// DATA TEKNIS ARSITEKTUR
Route::get('/bepbgdokumeteknisars/{id}', [PbgslfController::class, 'bepbgdokumeteknisars'])->middleware('auth')->name('bepbgdokumeteknisars');
Route::get('/bepbgdokumeteknisarscreate/{id}', [PbgslfController::class, 'bepbgdokumeteknisarscreate'])->middleware('auth')->name('bepbgdokumeteknisarscreate');
Route::post('/bepbgdokumeteknisarscreatenew', [PbgslfController::class, 'bepbgdokumeteknisarscreatenew'])->middleware('auth')->name('bepbgdokumeteknisarscreatenew');

// Route::delete('/bepbgdokumearsidelete/{id}', [PbgslfController::class, 'bepbgdokumearsidelete'])->middleware('auth')->name('bepbgdokumearsidelete');
Route::delete('/bepbgdokumearsidelete/{id}', [PbgslfController::class, 'bepbgdokumearsidelete'])->middleware('auth')->name('bepbgdokumearsidelete');

// DATA TEKNIS ARSITEKTUR
Route::get('/bepbgdokumeteknisstrk/{id}', [PbgslfController::class, 'bepbgdokumeteknisstrk'])->middleware('auth')->name('bepbgdokumeteknisstrk');
Route::get('/bepbgdokumeteknisstrkcreate/{id}', [PbgslfController::class, 'bepbgdokumeteknisstrkcreate'])->middleware('auth')->name('bepbgdokumeteknisstrkcreate');
Route::post('/bepbgdokumeteknisstrkcreatenew', [PbgslfController::class, 'bepbgdokumeteknisstrkcreatenew'])->middleware('auth')->name('bepbgdokumeteknisstrkcreatenew');
Route::delete('/bepbgdokumeteknisstrkdelete/{id}', [PbgslfController::class, 'bepbgdokumeteknisstrkdelete'])->middleware('auth')->name('bepbgdokumeteknisstrkdelete');

// DATA TEKNIS MEKANIKAL DAN ELEKTRIKAL
Route::get('/bepbgdokumeteknismep/{id}', [PbgslfController::class, 'bepbgdokumeteknismep'])->middleware('auth')->name('bepbgdokumeteknismep');
Route::get('/bepbgdokumeteknismepcreate/{id}', [PbgslfController::class, 'bepbgdokumeteknismepcreate'])->middleware('auth')->name('bepbgdokumeteknismepcreate');
Route::post('/bepbgdokumeteknismepcreatenew', [PbgslfController::class, 'bepbgdokumeteknismepcreatenew'])->middleware('auth')->name('bepbgdokumeteknismepcreatenew');
Route::delete('/bepbgdokumeteknismepdelete/{id}', [PbgslfController::class, 'bepbgdokumeteknismepdelete'])->middleware('auth')->name('bepbgdokumeteknismepdelete');

// DATA DOKUMEN TEKNIS JIKA DATA BANGUNAN SKL
Route::get('/dokumenteknisslf/{id}', [PbgslfController::class, 'dokumenteknisslf'])->middleware('auth')->name('dokumenteknisslf');
Route::get('/dokumenteknisslfcreate/{id}', [PbgslfController::class, 'dokumenteknisslfcreate'])->middleware('auth')->name('dokumenteknisslfcreate');
Route::post('/dokumenteknisslfcreatenew', [PbgslfController::class, 'dokumenteknisslfcreatenew'])->middleware('auth')->name('dokumenteknisslfcreatenew');
Route::delete('/dokumenteknisslfdelete/{id}', [PbgslfController::class, 'dokumenteknisslfdelete'])->middleware('auth')->name('dokumenteknisslfdelete');

// DATA VALIDASI
// Route::put('/datanewhibahnew/validasipbgslf1/{id}', [PbgslfController::class, 'validasipbgslf1'])
//     ->name('validasipbgslf1.update');

Route::put('/validasipbgslf1/{id}', [PbgslfController::class, 'validasipbgslf1'])->name('validasipbgslf1.update');
Route::put('/validasipbgslf2/{id}', [PbgslfController::class, 'validasipbgslf2'])->name('validasipbgslf2.update');
Route::put('/validasipbgslf3/{id}', [PbgslfController::class, 'validasipbgslf3'])->name('validasipbgslf3.update');
Route::put('/validasipbgslf4/{id}', [PbgslfController::class, 'validasipbgslf4'])->name('validasipbgslf4.update');
Route::put('/validasipbgslf5/{id}', [PbgslfController::class, 'validasipbgslf5'])->name('validasipbgslf5.update');
Route::put('/validasipbgslf6/{id}', [PbgslfController::class, 'validasipbgslf6'])->name('validasipbgslf6.update');
Route::put('/validasipbgslf7/{id}', [PbgslfController::class, 'validasipbgslf7'])->name('validasipbgslf7.update');

// PENGATURAN MENU TPA TPT
Route::get('/betpatpt', [PbgslfController::class, 'betpatpt'])->middleware('auth')->name('betpatpt');
Route::delete('/betpatptdelete/{id}', [PbgslfController::class, 'betpatptdelete'])->middleware('auth')->name('betpatptdelete');
Route::get('/betpatptcreate', [PbgslfController::class, 'betpatptcreate'])->middleware('auth')->name('betpatptcreate');
Route::post('/betpatptcreatenew', [PbgslfController::class, 'betpatptcreatenew'])->middleware('auth')->name('create.betpatptcreatenew');

// PENGATURAN MENU TEMPAT KONSULTASI
Route::get('/betempatkonsultasi', [PbgslfController::class, 'betempatkonsultasi'])->middleware('auth')->name('betempatkonsultasi');
Route::delete('/betempatkonsultasidelete/{id}', [PbgslfController::class, 'betempatkonsultasidelete'])->middleware('auth')->name('betempatkonsultasidelete');
Route::get('/betempatcreate', [PbgslfController::class, 'betempatcreate'])->middleware('auth')->name('betempatcreate');
Route::post('/betempatcreatenew', [PbgslfController::class, 'betempatcreatenew'])->middleware('auth')->name('create.betempatcreatenew');

// KONSULTASI TEKNIS
Route::get('/bepbgslfkonsultasi', [PbgslfController::class, 'bepbgslfkonsultasi'])->middleware('auth')->name('bepbgslfkonsultasi');
Route::put('/validasipbgslfbukti/{id}', [PbgslfController::class, 'validasipbgslfbukti'])->name('validasipbgslfbukti.update');


// SKRD
Route::get('/bepbgslfskrd', [PbgslfController::class, 'bepbgslfskrd'])->middleware('auth')->name('bepbgslfskrd');

Route::get('/bepbgslfskrdcreate/{id}', [PbgslfController::class, 'bepbgslfskrdcreate'])->middleware('auth')->name('bepbgslfskrdcreate');
Route::post('/bepbgslfskrdcreatenew/{id}', [PbgslfController::class, 'bepbgslfskrdcreatenew'])->middleware('auth')->name('create.bepbgslfskrdcreatenew');

// RETRIBUSI
Route::get('/bepbgslfretribusi', [PbgslfController::class, 'bepbgslfretribusi'])->middleware('auth')->name('bepbgslfretribusi');

// ------------------------------------------------------
// MENU BANTUAN GAMBAR
Route::get('/bebantuangambar', [GambarbantuanController::class, 'bebantuangambar'])->name('bebantuangambar.index');
Route::get('/bebantuangambarshow/{id}', [GambarbantuanController::class, 'bebantuangambarshow'])->middleware('auth')->name('bebantuangambar.show');
Route::put('/bebantuangambarvalidasi/{id}', [GambarbantuanController::class, 'bebantuangambarvalidasi'])->middleware('auth')->name('bebantuangambarvalidasi');

// SURAT TUGAS
Route::get('/bepbgsurattugasgambar/{id}', [GambarbantuanController::class, 'bepbgsurattugasgambar'])->middleware('auth')->name('bepbgsurattugasgambar');




// Route::put('/valberkasusaha/{id}', [KrkController::class, 'valberkasusaha1'])->name('valberkasusaha.update');
// Route::get('/doklapkrkusaha/{id}', [KrkController::class, 'doklapkrkusaha'])->middleware('auth')->name('doklapkrkusaha.show');

// Route::get('/doklapkrkusahacreate/{id}', [KrkController::class, 'doklapkrkusahacreate'])->middleware('auth')->name('doklapkrkusahacreate.create');
// Route::post('/doklapkrkusahacreatenew', [KrkController::class, 'doklapkrkusahacreatenew'])->middleware('auth')->name('create.doklapkrkusahacreatenew');

// Route::delete('/doklapkrkusahacreatedelete/{id}', [KrkController::class, 'doklapkrkusahacreatedelete'])->middleware('auth')->name('delete.doklapkrkusahacreatedelete');

// VALIDASI PERMOHONAN PROSES

Route::put('/verifikasi1permohonan/{id}', [GambarbantuanController::class, 'verifikasi1permohonan'])->name('verifikasi1permohonan.update');
// Route::put('/validasiberkas1permohonan2/{id}', [BantuanteknisController::class, 'valsuratpermohonan2'])->name('validasiberkas2.update');
// Route::put('/validasiberkas1permohonan3/{id}', [BantuanteknisController::class, 'valsuratpermohonan3'])->name('validasiberkas3.update');
// Route::put('/validasiberkas1permohonan4/{id}', [BantuanteknisController::class, 'valsuratpermohonan4'])->name('validasiberkas4.update');


// Route::put('/valberkasusaha2/{id}', [KrkController::class, 'valberkasusaha2'])->name('valberkasusaha2.update');
// Route::put('/valberkasusaha3/{id}', [KrkController::class, 'valberkasusaha3'])->name('valberkasusaha3.update');
// Route::put('/valberkasusaha4/{id}', [KrkController::class, 'valberkasusaha4'])->name('valberkasusaha4.update');

// Route::get('/permohonankrkusahafinal/{id}', [KrkController::class, 'permohonankrkusahafinal'])->name('permohonan.permohonankrkusahafinal');

// Route::get('/krkusahanoterbit/{id}', [KrkController::class, 'krkusahanoterbit'])->middleware('auth')->name('krkusahanoterbit.create');
// Route::post('/krkusahanoterbitnew/{id}', [KrkController::class, 'krkusahanoterbitnew'])->middleware('auth')->name('create.krkusahanoterbitnew');


Route::get('/bebantuangambarperbaikan/{id}', [GambarbantuanController::class, 'bebantuangambarperbaikan'])->middleware('auth')->name('bebantuangambarperbaikan.perbaikan');
Route::post('/bebantuangambarperbaikannew/{id}', [GambarbantuanController::class, 'bebantuangambarperbaikannew'])->middleware('auth')->name('bebantuangambarperbaikannew');

// Route::delete('/dokbekrkusahadelete/{id}', [KrkController::class, 'dokbekrkusahadelete'])->middleware('auth')->name('delete.dokbekrkusahadelete');



// saat ini git



// DATA DOKUMEN SURAT PEMBERITAHUAN
Route::get('/bepbgsuratpemberitahuan/{id}', [PbgslfController::class, 'bepbgsuratpemberitahuan'])->middleware('auth')->name('bepbgsuratpemberitahuan');
Route::delete('/bepbgsuratpemberitahuandel/{id}', [PbgslfController::class, 'bepbgsuratpemberitahuandel'])->middleware('auth')->name('bepbgsuratpemberitahuandel');
Route::get('/bepbgsuratpemberitahuancreate/{id}', [PbgslfController::class, 'bepbgsuratpemberitahuancreate'])->middleware('auth')->name('bepbgsuratpemberitahuancreate');
Route::post('/bepbgsuratnew', [PbgslfController::class, 'bepbgsuratnew'])->middleware('auth')->name('bepbgsuratnew');

Route::get('/bepbgsuratpemberitahuanshow/{id}', [PbgslfController::class, 'bepbgsuratpemberitahuanshow'])->middleware('auth')->name('suratpemberitahuan.detail');

// DATA SURAT TUGAS
Route::get('/bepbgsurattugas/{id}', [PbgslfController::class, 'bepbgsurattugas'])->middleware('auth')->name('bepbgsurattugas');
Route::get('/bepbgsurattugascreate/{id}', [PbgslfController::class, 'bepbgsurattugascreate'])->middleware('auth')->name('bepbgsurattugascreate');

Route::get('/bepbgsurattugasshow/{id}', [PbgslfController::class, 'bepbgsurattugasshow'])->middleware('auth')->name('bepbgsurattugasshow.detail');
Route::post('/bepbgsurattugasnew', [PbgslfController::class, 'bepbgsurattugasnew'])->middleware('auth')->name('bepbgsurattugasnew');

Route::delete('/bepbgsurattugasnewdelete/{id}', [PbgslfController::class, 'bepbgsurattugasnewdelete'])->middleware('auth')->name('bepbgsurattugasnewdelete');

// DATA SURAT TPA TPT
Route::get('/bepbgtpatpt/{id}', [PbgslfController::class, 'bepbgtpatpt'])->middleware('auth')->name('bepbgtpatpt');
Route::get('/bepbgtpatptcreate/{id}', [PbgslfController::class, 'bepbgtpatptcreate'])->middleware('auth')->name('bepbgtpatptcreate');
Route::post('/bepbgtpatptcreatenew', [PbgslfController::class, 'bepbgtpatptcreatenew'])->middleware('auth')->name('bepbgtpatptcreatenew');

Route::delete('/bepbgtpatptdelete/{id}', [PbgslfController::class, 'bepbgtpatptdelete'])->middleware('auth')->name('bepbgtpatptdelete');

// DATA DOKUMEN SURAT PEMBERITAHUAN
Route::get('/bepbgsuratundangan/{id}', [PbgslfController::class, 'bepbgsuratundangan'])->middleware('auth')->name('bepbgsuratundangan');
Route::get('/bepbgsuratundangancreate/{id}', [PbgslfController::class, 'bepbgsuratundangancreate'])->middleware('auth')->name('bepbgsuratundangancreate');
Route::post('/bepbgsuratundangannew', [PbgslfController::class, 'bepbgsuratundangannew'])->middleware('auth')->name('bepbgsuratundangannew');

Route::get('/bepbgsuratundanganshow/{id}', [PbgslfController::class, 'bepbgsuratundanganshow'])->middleware('auth')->name('bepbgsuratundanganshow.detail');
Route::delete('/bepbgsuratundangandelete/{id}', [PbgslfController::class, 'bepbgsuratundangandelete'])->middleware('auth')->name('bepbgsuratundangandelete');
// Route::get('/bepbgsuratpemberitahuanshow/{id}', [PbgslfController::class, 'bepbgsuratpemberitahuanshow'])->middleware('auth')->name('suratpemberitahuan.detail');

// DATA DOKUMEN SURAT PEMBERITAHUAN
Route::get('/bepbgberitaacaraslf/{id}', [PbgslfController::class, 'bepbgberitaacaraslf'])->middleware('auth')->name('bepbgberitaacaraslf');
Route::get('/bepbgberitaacaraslfshow/{id}', [PbgslfController::class, 'bepbgberitaacaraslfshow'])->middleware('auth')->name('bepbgberitaacaraslf.detail');
// Route::get('/bepbgsuratundangancreate/{id}', [PbgslfController::class, 'bepbgsuratundangancreate'])->middleware('auth')->name('bepbgsuratundangancreate');
// Route::post('/bepbgsuratundangannew', [PbgslfController::class, 'bepbgsuratundangannew'])->middleware('auth')->name('bepbgsuratundangannew');

// Route::delete('/bepbgsuratundangandelete/{id}', [PbgslfController::class, 'bepbgsuratundangandelete'])->middleware('auth')->name('bepbgsuratundangandelete');

// TAHAP 1---------------
// Route::get('/bekrkusahaperbaikan/{id}', [KrkController::class, 'bekrkusahaperbaikan'])->middleware('auth')->name('bekrkusahaperbaikan.perbaikan');

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
Route::get('/perlombaan/daftartim', [DaftartimController::class, 'daftartim'])->middleware('auth')->name('daftartimindex');
Route::delete('/daftartimdelete/{id}', [DaftartimController::class, 'deletedaftartim'])->middleware('auth')->name('daftartim.destroy');
// Route::get('/daftartim/create/{id}', [DaftartimController::class, 'daftartimcreate'])->middleware('auth')->name('tambahtim');
Route::get('/daftartim/create/{userId}', [DaftarTimController::class, 'daftartimcreate'])->name('daftartim.create');
Route::post('/daftartim/createnew', [DaftarTimController::class, 'daftartimcreatenew'])->name('daftartim.tambah');
Route::get('/daftartimupdateupdate/{id}', [DaftarTimController::class, 'daftartimupdateupdate'])->name('daftartimupdateupdate');
Route::put('/daftartim/updatenew/{id}', [DaftarTimController::class, 'daftartimupdatenew'])->name('daftartim.update');
// Route::put('/daftartim/update/{id}', [DaftarTimController::class, 'daftartimupdatenew'])->name('daftartim.update');

// DAFTAR LOMBA
Route::get('/daftarlomba', [DaftartimController::class, 'daftarlomba'])->middleware('auth')->name('daftarlombaindex');
Route::get('/daftarlomba/create/{userId}/{perlombaanId}', [DaftartimController::class, 'daftarlombanew'])
->name('daftarlomba.create');
Route::post('/daftarlombatim/createnew', [DaftarTimController::class, 'daftarlombatimnew'])->name('daftarlombatim');

Route::get('/informasitim/{id}', [DaftartimController::class, 'informasitim'])->middleware('auth')->name('informasitim.show');
Route::get('/informasitimadmin/{id}', [DaftartimController::class, 'informasitimadmin'])->middleware('auth')->name('informasitimadmin');

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
Route::get('/katumumputera', [DaftartimController::class, 'katumumputera'])->middleware('auth')->name('katumumputeraindex');
Route::get('/katumumputeri', [DaftartimController::class, 'katumumputeri'])->middleware('auth')->name('katumumputeriindex');
Route::get('/katpelajarputera', [DaftartimController::class, 'katpelajarputera'])->middleware('auth')->name('katpelajarputeraindex');
Route::get('/katpelajarputeri', [DaftartimController::class, 'katpelajarputeri'])->middleware('auth')->name('katpelajarputeraindex');
// Route::get('/katpelajarputeri', [DaftartimController::class, 'katpelajarputeri'])->middleware('auth')->name('katpelajarputeraindex');


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
