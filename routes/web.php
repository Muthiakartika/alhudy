<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PpdbController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/galeri', [GaleriController::class, 'showData'])->name('galeri');
Route::get('/tenaga-kependidikan', [GuruController::class, 'showData'])->name('tenaga-pendidik');
Route::view('/visi-misi', 'visi_misi')->name('visi-misi');
Route::view('/kontak-kami', 'kontak')->name('kontak-kami');

##ADMINISTRATOR
Route::group(['middleware' => 'admin'], function () {
    Route::group(['middleware' => ['verified']], function (){
        //LOGIN
        Route::get('/admin-dashboard', [HomeController::class, 'adminIndex'])
        ->name('admin.index');

        //DAFTAR GURU
        Route::resource('/guru', GuruController::class);

        //DAFTAR SISWA
        Route::resource('/murid', MuridController::class);

        //DATA KEGIATAN
        Route::resource('/kegiatan', GaleriController::class);
        Route::delete('/delete-image/{imagePath}', [GaleriController::class, 'deleteImage'])->name('delete.image');
    });
});

## ORTU
Route::group(['middleware' => ['ortu', 'verified']], function (){
        //LOGIN
        Route::get('/ppdb-dashboard', [HomeController::class, 'ppdbIndex'])
        ->name('ortu.index');
});


## ADMINISTRATOR DAN ORTU
Route::group(['middleware' => 'auth'], function (){
    Route::group(['middleware' => ['verified']], function() {
        //PPDB
        Route::resource('/ppdb', PpdbController::class);
        Route::get('ppdb/{ppdb}/export',[PpdbController::class, 'export'])->name('ppdb.export');
    });
});
