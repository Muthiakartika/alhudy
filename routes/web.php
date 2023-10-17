<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MuridController;
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
    });
});

## ADMINISTRATOR DAN ORTU