<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PemesananHotelController;

// use App\Http\Controllers\PengumumanController;

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

Auth::routes();
Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reload-captcha', [App\Http\Controllers\Auth\LoginController::class, 'reloadCaptcha']);
Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    
    Route::resource('hotel', HotelController::class);
    Route::get('/hotel/delete/{id}', [HotelController::class, 'destroy'])->name('hotel.destroy');
    Route::post('hotel', [HotelController::class, 'sort'])->name('hotel.sort');
    Route::post('hotel-store', [HotelController::class, 'store'])->name('hotel.store');
    
    Route::resource('wisata', WisataController::class);
    Route::get('/wisata/delete/{id}', [WisataController::class, 'destroy'])->name('wisata.destroy');
    Route::post('wisata', [WisataController::class, 'filter'])->name('wisata.filter');
    Route::post('wisata-store', [WisataController::class, 'store'])->name('wisata.store');
    
    Route::resource('cs', CsController::class); 
    Route::get('/cs/delete/{id}', [CsController::class, 'destroy'])->name('cs.destroy');
    Route::get('cs-export',[CsController::class, 'export'])->name('cs.export');
    Route::post('cs-store', [CsController::class, 'store'])->name('cs.store');

    Route::resource('pemesanan', PemesananHotelController::class);
    Route::post('pemesanan-kamar/{id}', [PemesananHotelController::class, 'store'])->name('pemesanan.store');

    Route::get('chart-penjualan', [HotelController::class, 'chart'])->name('hotel.chart');
});

