<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PostController;
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


Route::get('/', [HomeController::class, 'page']);
Route::prefix('kegiatan')->group(function () {

    Route::get('/{slug}', function ($slug) {
        return KegiatanController::category_page($slug);
    });
    // Route::get('/nonpelayanandasar', function () {
    //     return view('post.kegiatan.nonpelayanandasar');
    // });
    // Route::get('/csr', function () {
    //     return view('post.kegiatan.csr');
    // })->name('csr');
    // Route::get('/informasikomunikasipublik', function () {
    //     return view('post.kegiatan.informasikomunikasipublik');
    // })->name('informasikomunikasipublik');
    // Route::get('/covid19', function () {
    //     return view('post.kegiatan.covid19');
    // })->name('covid19');
});

Route::get('/article/{slug}', function ($slug) {
    return PostController::page($slug);
});

Route::get('/sotk', function () {
    return view('/sotk');
});

Route::get('/kabagsatu', function () {
    return view('/kabagsatu');
});


Route::get('/kabiro', function () {
    return view('/kabiro');
});

Route::get('/kabagdua', function () {
    return view('/kabagdua');
});

Route::get('/tatausaha', function () {
    return view('/tatausaha');
});


Route::get('/kabagtiga', function () {
    return view('/kabagtiga');
});

Route::get('/yangama', function () {
    return view('/yangama');
});

Route::get('/sardik', function () {
    return view('/sardik');
});

Route::get('/pendidikan', function () {
    return view('/pendidikan');
});

Route::get('/kesehatan', function () {
    return view('/kesehatan');
});

Route::get('/dukcapil', function () {
    return view('/dukcapil');
});

Route::get('/pora', function () {
    return view('/pora');
});

Route::get('/pppakb', function () {
    return view('/ppakb');
});

Route::get('/contact', function () {
    return view('/contact');
});

Route::get('/pencairanhibah', function () {
    return view('/pencairanhibah');
});

Route::get('/hibahrule', function () {
    return view('/hibahrule');
});
