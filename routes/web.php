<?php

// use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
use App\Models\Poly;
use Illuminate\Support\Facades\DB;
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
require __DIR__.'/auth.php';

Route::get('/', function () {
    // return Poly::with('doctors')->get();
    return view('welcome');
})->name('home');

// Authentication
Route::post('/guest/login', [UserController::class, 'authenticate']);

// Client
Route::get('/summary', [ClientController::class, 'index'])->middleware(['auth'])->name('summary');
Route::get('/data', [PasienController::class, 'detail_data'])->middleware(['auth', 'role:user'])->name('detail_data');
Route::post('/data', [PasienController::class, 'store_data'])->middleware(['auth', 'role:user'])->name('store-data');
Route::get('/data/get-doctor', [PasienController::class, 'getDoctor'])->name('get-doctor');
