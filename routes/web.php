<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PrediksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// ================= HALAMAN AWAL =================
Route::get('/', function () {
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('welcome');
});


// ================= AUTH =================
Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');


// ================= DASHBOARD (USER & ADMIN) =================
Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard',[AdminController::class,'redirectDashboard']);

    // ================= USER =================
    Route::get('/klasifikasi', function(){
        return view('klasifikasi.biodata');
    });

    Route::get('/klasifikasi/form',[PrediksiController::class,'form']);
    Route::post('/prediksi',[PrediksiController::class,'prediksi']);

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


// ================= ADMIN =================
Route::middleware(['auth','admin'])->group(function(){

    Route::get('/admin/users',[AdminController::class,'users']);
    Route::post('/admin/users/update/{id}',[AdminController::class,'updateUser']);
    Route::get('/admin/users/delete/{id}',[AdminController::class,'deleteUser']);

    Route::get('/admin/riwayat',[AdminController::class,'riwayat']);
    Route::get('/admin/riwayat/delete/{id}',[AdminController::class,'deleteRiwayat']);

});
