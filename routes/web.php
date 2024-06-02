<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BerandaController;

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

Route::get('/', [BerandaController::class, 'index'])->name('index');


#routes profile
Route::prefix('/profil')->group(function () {
    Route::get('/struktur-organisasi', function () {
        return view('profil.struktur-organisasi');
    })->name('profil.struktur-organisasi');

    Route::get('/maklumat-pelayanan', function () {
        return view('profil.maklumat-pelayanan');
    })->name('profil.maklumat-pelayanan');

    Route::get('/profil-penyelenggara', function () {
        return view('profil.profil-penyelenggara');
    })->name('profil.profil-penyelenggara');

    Route::get('/pelaksana-layanan', function () {
        return view('profil.pelaksana-layanan');
    })->name('profil.pelaksana-layanan');

    Route::get('/motto-visi-misi', function () {
        return view('profil.mvm');
    })->name('profil.mvm');
});


// #routes berita
// Route::prefix('/berita')->group(function () {
//     Route::get('/', function () {
//     return view('berita.berita');
// })->name('berita');
// });


#routes layanan
Route::prefix('/layanan')->group(function () {
    Route::get('/', function () {
        return view('layanan.index');
    })->name('layanan');
});


#routes publikasi
Route::prefix('/publikasi')->group(function () {
    Route::get('/', function () {
        return view('publikasi.index');
    })->name('publikasi');
});


#routes statistik
Route::prefix('/statistik')->group(function () {
    Route::get('/', function () {
        return view('statistik.index');
    })->name('statistik');
});


#routes FAQ
Route::prefix('/faq')->group(function () {
    Route::get('/', function () {
        return view('faq.index');
    })->name('faq');
});


#routes pengaduan
Route::prefix('/pengaduan')->group(function () {
    Route::get('/', function () {
        return view('pengaduan.index');
    })->name('pengaduan');
});


#routes kontak
Route::prefix('/kontak')->group(function () {
    Route::get('/', function () {
        return view('kontak.index');
    })->name('kontak');
});

#route berita
Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
Route::get('/berita/detail/{id}', [NewsController::class, 'detail'])->name('berita.detail');
Route::get('/search', [NewsController::class, 'search'])->name('news.search');


//Route::get('/berita/search', [NewsController::class, 'search'])->name('berita.search');
