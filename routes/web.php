<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Models\Berita;

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
    return view('home.index');
});

#routes profile
Route::get('/profil/struktur-organisasi', function () {
    return view('profil.struktur-organisasi');
})->name('profil.struktur-organisasi');

Route::get('/profil/maklumat-pelayanan', function () {
    return view('profil.maklumat-pelayanan');
})->name('profil.maklumat-pelayanan');

Route::get('/profil/profil-penyelenggara', function () {
    return view('profil.profil-penyelenggara');
})->name('profil.profil-penyelenggara');

Route::get('/profil/pelaksana-layanan', function () {
    return view('profil.pelaksana-layanan');
})->name('profil.pelaksana-layanan');

Route::get('/profil/motto-visi-misi', function () {
    return view('profil.mvm');
})->name('profil.mvm');

#route berita
Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
Route::get('/berita/detail/{id}', [NewsController::class, 'detail'])->name('berita.detail');
