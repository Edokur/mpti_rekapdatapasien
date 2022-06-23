<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\Surveilans1Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KJiwaController;
use App\Http\Controllers\PerkesmasController;
use Illuminate\Support\Facades\Route;

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

// Indentitas Pasien
Route::get('/identitas-pasien', function () {
    return view('partial/identitas-pasien/identitas-pasien');
});

Route::get('/tambahdata-identitas-pasien', function () {
    return view('partial/identitas-pasien/create');
});

// Perkesmas
Route::get('/perkesmas', function () {
    return view('partial/perkesmas/perkesmas');
});

Route::get('/tambahdata-perkesmas', function () {
    return view('partial/perkesmas/create');
});

Route::get('/edit-perkesmas', function () {
    return view('partial/perkesmas/edit');
});

Route::get('/show-perkesmas', function () {
    return view('partial/perkesmas/show');
});

// Surveilans 1
Route::get('/surveilans-1', function () {
    return view('partial/surveilans-1/surveilans-1');
});

Route::get('/detaildata-surveilans-1', function () {
    return view('partial/surveilans-1/show');
});

Route::get('/edit-surveilans-1', function () {
    return view('partial/surveilans-1/edit');
});

// Surveilans 2
Route::get('/surveilans-2', function () {
    return view('partial/surveilans-2/surveilans-2');
});

Route::get('/detaildata-surveilans-2', function () {
    return view('partial/surveilans-2/show');
});

Route::get('/edit-surveilans-2', function () {
    return view('partial/surveilans-2/edit');
});

// Route Catatan
Route::get('/note', [NoteController::class, 'index']);
Route::get('/note/create', [NoteController::class, 'create']);
Route::post('/note/insertNote', [NoteController::class, 'insertNote']);
Route::get('/note/editNote/{id}', [NoteController::class, 'editNote']);
Route::post('/note/updateNote', [NoteController::class, 'updateNote']);
Route::get('/note/hapusNote/{id}', [NoteController::class, 'hapusNote']);
Route::get('/note/detailNote/{id}', [NoteController::class, 'detailNote']);

// Route Perkesmas
Route::get('/perkesmas', [PerkesmasController::class, 'index']);
Route::get('/perkesmas/create', [PerkesmasController::class, 'create']);
Route::post('/perkesmas/insertPerkesmas', [PerkesmasController::class, 'insertPerkesmas']);


Route::resource('kesehatan-jiwa', KJiwaController::class);
Route::get('login', [LoginController::class, 'halamanlogin'])->name('login');
Route::POST('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

//  Sendy
// Route::resource('identitas-pasien', IdentitasController::class);
// Identitas Pasien
Route::get('/identitas-pasien', [IdentitasController::class, 'index']);
Route::get('/identitas-pasien/create', [IdentitasController::class, 'create']);
Route::post('/identitas-pasien/insertIdentitas', [IdentitasController::class, 'insertIdentitas']);
Route::get('/identitas-pasien/editIdentitas/{id}', [IdentitasController::class, 'editIdentitas']);
Route::post('/identitas-pasien/updateIdentitas', [IdentitasController::class, 'updateIdentitas']);
Route::get('/identitas-pasien/hapusIdentitas/{id}', [IdentitasController::class, 'hapusIdentitas']);
Route::get('/identitas-pasien/detailIdentitas/{id}', [IdentitasController::class, 'detailIdentitas']);

// Surveilans 1
Route::get('/surveilans-1', [Surveilans1Controller::class, 'index']);
Route::get('/surveilans-1/create', [Surveilans1Controller::class, 'create']);
Route::post('/surveilans-1/insertSur', [Surveilans1Controller::class, 'insertSur']);
Route::get('/surveilans-1/editSurveilans1/{id}', [Surveilans1Controller::class, 'editSurveilans1']);
Route::post('/surveilans-1/updateSurveilans1', [Surveilans1Controller::class, 'updateSurveilans1']);
Route::get('/surveilans-1/hapusSurveilans1/{id}', [Surveilans1Controller::class, 'hapusSurveilans1']);
Route::get('/surveilans-1/detailSurveilans1/{id}', [Surveilans1Controller::class, 'detailSurveilans1']);
