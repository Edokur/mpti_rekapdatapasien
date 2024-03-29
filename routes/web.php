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
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Surveilans1Controller;
use App\Http\Controllers\Surveilans2Controller;

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

//Setting
Route::middleware('auth')->group(function () {
    Route::get('/settings', [SettingController::class, 'index']);
    Route::get('/settings/editSetting/{id_setting}', [SettingController::class, 'editSetting']);
    Route::post('/settings/updateSettings', [SettingController::class, 'updateSettings']);
    Route::post('/updatePassword', [SettingController::class, 'updatePassword']);
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

// Route Kesehatan Jiwa
Route::middleware('auth')->group(function () {
    Route::get('/kesehatan_jiwa', [KJiwaController::class, 'index']);
    Route::get('/kesehatan_jiwa/create', [KJiwaController::class, 'create']);
    Route::post('/kesehatan_jiwa/insertKJiwa', [KJiwaController::class, 'insertKJiwa']);
    Route::get('/kesehatan_jiwa/detailKJiwa/{id_kesehatan_jiwa}', [KJiwaController::class, 'detailKJiwa']);
    Route::get('/kesehatan_jiwa/hapusKJiwa/{id_kesehatan_jiwa}', [KJiwaController::class, 'hapusKJiwa']);
    Route::get('/get_pasien/{id}', [KJiwaController::class, 'get_pasien']);
    Route::get('/kesehatan_jiwa/editKJiwa/{id_kesehatan_jiwa}', [KJiwaController::class, 'editKJiwa']);
    Route::post('/kesehatan_jiwa/updateKJiwa', [KJiwaController::class, 'updateKJiwa']);
    Route::get('/kesehatan_jiwa/cari', [KJiwaController::class, 'SearchKJiwa']);
});


//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout']);

//reset password
Route::get('/resetpass', [LoginController::class, 'resetpass']);
Route::post('/cek_pass', [LoginController::class, 'cek_pass']);
Route::get('/change_pass', [LoginController::class, 'change_pass']);
Route::post('/update_pass', [LoginController::class, 'update_pass']);



//dalam proses
// Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
// Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);

//  START SENDY

// Identitas Pasien
Route::middleware('auth')->group(function () {
    Route::get('/identitas_pasien', [IdentitasController::class, 'index']);
    Route::get('/identitas_pasien/create', [IdentitasController::class, 'create']);
    Route::post('/identitas_pasien/insertIdentitas', [IdentitasController::class, 'insertIdentitas']);
    Route::get('/identitas_pasien/editIdentitas/{id}', [IdentitasController::class, 'editIdentitas']);
    Route::post('/identitas_pasien/updateIdentitas', [IdentitasController::class, 'updateIdentitas']);
    Route::get('/identitas_pasien/hapusIdentitas/{id}', [IdentitasController::class, 'hapusIdentitas']);
    Route::get('/identitas_pasien/detailIdentitas/{id}', [IdentitasController::class, 'detailIdentitas']);
    Route::get('/identitas_pasien/cari', [IdentitasController::class, 'searchIdentitas']);
});

// Activity
Route::middleware('auth')->group(function () {
    Route::get('activity', [ActivityController::class, 'index']);
});

// Surveilans 1
Route::middleware('auth')->group(function () {
    Route::get('/surveilans_1', [Surveilans1Controller::class, 'index']);
    Route::get('/surveilans_1/create', [Surveilans1Controller::class, 'create']);
    Route::post('/surveilans_1/insertSurveilans1', [Surveilans1Controller::class, 'insertSurveilans1']);
    Route::get('/surveilans_1/editSurveilans1/{id}', [Surveilans1Controller::class, 'editSurveilans1']);
    Route::post('/surveilans_1/updateSurveilans1', [Surveilans1Controller::class, 'updateSurveilans1']);
    Route::get('/surveilans_1/hapusSurveilans1/{id}', [Surveilans1Controller::class, 'hapusSurveilans1']);
    Route::get('/surveilans_1/detailSurveilans1/{id}', [Surveilans1Controller::class, 'detailSurveilans1']);
    Route::get('/surveilans_1/cari', [Surveilans1Controller::class, 'searchSurveilans1']);
    Route::get('/surveilans_1/get_pasien/{id}', [Surveilans1Controller::class, 'get_pasien']);
});

// Surveilans 2
Route::middleware('auth')->group(function () {
    Route::get('/surveilans_2', [Surveilans2Controller::class, 'index']);
    Route::get('/surveilans_2/create', [Surveilans2Controller::class, 'create']);
    Route::post('/surveilans_2/insertSurveilans2', [Surveilans2Controller::class, 'insertSurveilans2']);
    Route::get('/surveilans_2/editSurveilans2/{id}', [Surveilans2Controller::class, 'editSurveilans2']);
    Route::post('/surveilans_2/updateSurveilans2', [Surveilans2Controller::class, 'updateSurveilans2']);
    Route::get('/surveilans_2/hapusSurveilans2/{id}', [Surveilans2Controller::class, 'hapusSurveilans2']);
    Route::get('/surveilans_2/detailSurveilans2/{id}', [Surveilans2Controller::class, 'detailSurveilans2']);
    Route::get('/surveilans_2/cari', [Surveilans2Controller::class, 'searchSurveilans2']);
    Route::get('/surveilans_2/get_pasien/{id}', [Surveilans2Controller::class, 'get_pasien']);
});

// Penyakit
Route::middleware('auth')->group(function () {
    Route::get('/penyakit', [PenyakitController::class, 'index']);
    Route::get('/penyakit/create', [PenyakitController::class, 'create']);
    Route::post('/penyakit/insertPenyakit', [PenyakitController::class, 'insertPenyakit']);
    Route::get('/penyakit/editPenyakit/{id}', [PenyakitController::class, 'editPenyakit']);
    Route::post('/penyakit/updatePenyakit', [PenyakitController::class, 'updatePenyakit']);
    Route::get('/penyakit/hapusPenyakit/{id}', [PenyakitController::class, 'hapusPenyakit']);
    Route::get('/penyakit/detailPenyakit/{id}', [PenyakitController::class, 'detailPenyakit']);
    Route::get('/penyakit/cari', [PenyakitController::class, 'searchPenyakit']);
    Route::get('/penyakit/get_pasien/{id}', [PenyakitController::class, 'get_pasien']);
});

// END SENDY
