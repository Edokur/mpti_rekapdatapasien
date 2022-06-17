<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\IdentitasController;
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

Route::get('/kesehatan-jiwa', function () {
    return view('partial/kesehatan-jiwa/kesehatan-jiwa');
});

Route::get('/tambahdata-kesehatan-jiwa', function () {
    return view('partial/kesehatan-jiwa/tambah-data');
});

Route::get('/identitas-pasien', function () {
    return view('partial/identitas-pasien/identitas-pasien');
});

// Route::get('/note', function () {
//     return view('partial/catatan/note');
// });

Route::get('/perkesmas', function () {
    return view('partial/perkesmas/perkesmas');
});

Route::get('/surveilans-2', function () {
    return view('partial/surveilans-2/surveilans-2');
});

Route::resource('note', NoteController::class);
Route::resource('identitas-pasien', IdentitasController::class);
