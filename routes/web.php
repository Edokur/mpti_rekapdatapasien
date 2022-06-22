<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KJiwaController;
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

Route::resource('note', NoteController::class);
Route::resource('kesehatan-jiwa', KJiwaController::class);
Route::get('login', [LoginController::class, 'halamanlogin'])->name('login');
Route::POST('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

# Sendy
Route::resource('identitas-pasien', IdentitasController::class);
