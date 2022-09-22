<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CowController;
use App\Http\Controllers\MilkController;
use App\Http\Controllers\CalfController;
use App\Http\Controllers\PregnancyController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\Catalog\VaccineCatalogController;

Route::group(['middleware'=>'auth'], function () {
    Route::get('/', [HomeController::class , 'index'])->name('home');
});


// Auth Controller Working

Route::controller(AuthController::class)->group(
    function () {
        Route::get('/login', 'login')->middleware('guest')->name('login');
        Route::post('loginstore', 'loginstore')->name('loginstore');
        Route::get('/register', 'register')->name('register');
        Route::post('regstore', 'store')->name('regstore');
        Route::get('/logout', 'logout')->name('logout');
    }
);

// Cow management
Route::resource('cow', CowController::class);
Route::resource('milk', MilkController::class);
Route::resource('calf', CalfController::class);
Route::resource('pregnancy', PregnancyController::class);
Route::resource('vaccine', VaccineController::class);
Route::resource('catalogs/vaccines', VaccineCatalogController::class);
// Route::get('/notify', [CowController::class, 'notify']);
