<?php

use App\Http\Controllers\PagesContrller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bismillah', function () {
    return view('admin.dashboard');
});



Route::resource('/program', ProgramController::class);

Route::get('/about', [PagesContrller::class, 'about']);
Route::get('/donatur', [PagesContrller::class, 'donatur']);
Route::get('/galery', [PagesContrller::class, 'galery']);
Route::get('/daftar-program', [PagesContrller::class, 'daftarProgram']);

Route::get('/program-swho', [PagesContrller::class, 'programShow']);