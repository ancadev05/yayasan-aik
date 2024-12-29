<?php

use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesContrller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/kariango', function () {
    return view('admin.dashboard');
});



Route::resource('/program', ProgramController::class);
Route::resource('/galery', GaleryController::class);
Route::resource('/photo', PhotoController::class);


Route::get('/about', [PagesContrller::class, 'about']);
Route::get('/donasi', [PagesContrller::class, 'donasi']);
// Route::get('/galery', [PagesContrller::class, 'galery']);
Route::get('/daftar-program', [PagesContrller::class, 'daftarProgram']);
Route::get('/daftar-program/{slug}', [PagesContrller::class, 'programShow']);

// Route::get('/program-swho', [PagesContrller::class, 'programShow']);

Route::get('/ck', function () {
    return view('pages.ck');
});
Route::get('/trix', function () {
    return view('pages.trix');
});
Route::get('/jadi', function () {
    return view('pages.jadi');
});