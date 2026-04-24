<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PrediksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'migrate sukses';
});

// Halaman Awal
Route::get('/', function () {
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('welcome');
});

// Auth
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/logout',[AuthController::class,'logout']);

// HARUS LOGIN
Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function(){
        return view('dashboard');
    });

    Route::get('/klasifikasi', function(){
    return view('klasifikasi.biodata');
});

Route::get('/klasifikasi/form',[PrediksiController::class,'form']);
Route::post('/prediksi',[PrediksiController::class,'prediksi']);

    // Edukasi
    Route::get('/penjelasan-lansia', function () {
        return view('edukasi.lansia');
    });

    Route::get('/penjelasan-gizi', function () {
        return view('edukasi.gizi');
    });

    Route::get('/cara-penggunaan', function () {
        return view('edukasi.panduan');
    });
    Route::get('/riwayat',[PrediksiController::class,'riwayat']);

});
