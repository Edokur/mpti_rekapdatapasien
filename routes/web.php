<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\KJiwaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\PerkesmasController;
use App\Http\Controllers\Surveilans1Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('partial/home');
});

Route::get('/activity', function () {
    return view('partial/activity');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/resetpw', function () {
    return view('resetpw');
});

Route::get('/ubahpw', function () {
    return view('ubahpw');
});

// Route::get('/penyakit', function () {
//     return view('partial/penyakit/penyakit');
// });
// Indentitas Pasien
Route::get('/identitas_pasien', function () {
    return view('partial/identitas_pasien/identitas_pasien');
});

Route::get('/tambahdata_identitas_pasien', function () {
    return view('partial/identitas_pasien/create');
});

// // Surveilans 1
// Route::get('/surveilans_1', function () {
//     return view('partial/surveilans_1/surveilans_1');
// });

// Route::get('/detaildata_surveilans_1', function () {
//     return view('partial/surveilans_1/show');
// });

// Route::get('/edit_surveilans_1', function () {
//     return view('partial/surveilans_1/edit');
// });

// Surveilans 2
Route::get('/surveilans_2', function () {
    return view('partial/surveilans_2/surveilans_2');
});

Route::get('/detaildata-surveilans-2', function () {
    return view('partial/surveilans-2/show');
});

Route::get('/edit-surveilans-2', function () {
    return view('partial/surveilans-2/edit');
});

// Route Catatan
Route::middleware('auth')->group(function () {
    Route::get('/note', [NoteController::class, 'index']);
    Route::get('/note/create', [NoteController::class, 'create']);
    Route::post('/note/insertNote', [NoteController::class, 'insertNote']);
    Route::get('/note/editNote/{id_note}', [NoteController::class, 'editNote']);
    Route::post('/note/updateNote', [NoteController::class, 'updateNote']);
    Route::get('/note/hapusNote/{id_note}', [NoteController::class, 'hapusNote']);
    Route::get('/note/detailNote/{id_note}', [NoteController::class, 'detailNote']);
});

// Route Perkesmas
Route::middleware('auth')->group(function () {
    Route::get('/perkesmas', [PerkesmasController::class, 'index']);
    Route::get('/perkesmas/create', [PerkesmasController::class, 'create']);
    Route::post('/perkesmas/insertPerkesmas', [PerkesmasController::class, 'insertPerkesmas']);
    Route::get('/perkesmas/show_perkesmas/{id_perkesmas}', [PerkesmasController::class, 'detailPerkesmas']);
    Route::get('/perkesmas/hapusPerkesmas/{id_perkesmas}', [PerkesmasController::class, 'hapusPerkesmas']);
    Route::get('/get_pasien/{id}', [PerkesmasController::class, 'get_pasien']);
    Route::get('/perkesmas/edit_perkesmas/{id_perkesmas}', [PerkesmasController::class, 'editPerkesmas']);
    Route::post('/perkesmas/updatePerkesmas', [PerkesmasController::class, 'updatePerkesmas']);
    Route::get('/perkesmas/cari', [PerkesmasController::class, 'SearchPerkesmas']);
});



Route::resource('kesehatan_jiwa', KJiwaController::class);

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout']);

//  Sendy
// Route::resource('identitas-pasien', IdentitasController::class);
// Identitas Pasien
Route::get('/identitas_pasien', [IdentitasController::class, 'index']);
Route::get('/identitas_pasien/create', [IdentitasController::class, 'create']);
Route::post('/identitas_pasien/insertIdentitas', [IdentitasController::class, 'insertIdentitas']);
Route::get('/identitas_pasien/editIdentitas/{id}', [IdentitasController::class, 'editIdentitas']);
Route::post('/identitas_pasien/updateIdentitas', [IdentitasController::class, 'updateIdentitas']);
Route::get('/identitas_pasien/hapusIdentitas/{id}', [IdentitasController::class, 'hapusIdentitas']);
Route::get('/identitas_pasien/detailIdentitas/{id}', [IdentitasController::class, 'detailIdentitas']);
Route::get('/identitas_pasien/cari', [IdentitasController::class, 'searchIdentitas']);

// Activity
Route::get('activity', [ActivityController::class, 'index']);
// Route::get('/identitas_pasien/create', [IdentitasController::class, 'create']);
// Route::post('/identitas_pasien/insertIdentitas', [IdentitasController::class, 'insertIdentitas']);
// Route::get('/identitas_pasien/editIdentitas/{id}', [IdentitasController::class, 'editIdentitas']);
// Route::post('/identitas_pasien/updateIdentitas', [IdentitasController::class, 'updateIdentitas']);
// Route::get('/identitas_pasien/hapusIdentitas/{id}', [IdentitasController::class, 'hapusIdentitas']);
// Route::get('/identitas_pasien/detailIdentitas/{id}', [IdentitasController::class, 'detailIdentitas']);

// Surveilans 1
Route::get('/surveilans_1', [Surveilans1Controller::class, 'index']);
Route::get('/surveilans_1/create', [Surveilans1Controller::class, 'create']);
Route::post('/surveilans_1/insertSurveilans1', [Surveilans1Controller::class, 'insertSurveilans1']);
Route::get('/surveilans_1/editSurveilans1/{id}', [Surveilans1Controller::class, 'editSurveilans1']);
Route::post('/surveilans_1/updateSurveilans1', [Surveilans1Controller::class, 'updateSurveilans1']);
Route::get('/surveilans_1/hapusSurveilans1/{id}', [Surveilans1Controller::class, 'hapusSurveilans1']);
Route::get('/surveilans_1/detailSurveilans1/{id}', [Surveilans1Controller::class, 'detailSurveilans1']);
Route::get('/surveilans_1/cari', [Surveilans1Controller::class, 'searchSurveilans1']);
Route::get('/surveilans_1/get_pasien/{id}', [Surveilens1Controller::class, 'get_pasien']);

// Route Kesehatan Jiwa
Route::get('/kesehatan_jiwa', [KJiwaController::class, 'index']);
Route::get('/kesehatan_jiwa/create', [KJiwaController::class, 'create']);
Route::post('/kesehatan_jiwa/insertKJiwa', [KJiwaController::class, 'insertKJiwa']);
Route::get('/kesehatan_jiwa/hapusKJiwa/{id_kesehatan_jiwa}', [KJiwaController::class, 'hapusKJiwa']);
Route::get('/kesehatan_jiwa/detailKJiwa/{id_kesehatan_jiwa}', [KJiwaController::class, 'detailKJiwa']);
Route::get('/kesehatan_jiwa/editKJiwa/{id_kesehatan_jiwa}', [KJiwaController::class, 'editKJiwa']);
Route::post('/kesehatan_jiwa/updateKJiwa', [KJiwaController::class, 'updateKJiwa']);

//Penyakit
Route::get('/penyakit', [PenyakitController::class, 'penyakit']);
Route::get('/penyakit/create', [PenyakitController::class, 'create']);
Route::post('/penyakit/insertPenyakit', [PenyakitController::class, 'insertPenyakit']);
Route::post('/penyakit/editPenyakit/{id_identitas_penyakit}', [PenyakitController::class, 'editPenyakit']);
Route::post('/penyakit/updatePenyakit', [PenyakitController::class, 'updatePenyakit']);
Route::get('/penyakit/hapusPenyakit/{id_identitas_penyakit}', [PenyakitController::class, 'hapusPenyakit']);
