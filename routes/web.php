<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});


// Authentication
Route::post('/user/login', [UserController::class, 'authenticate']);

// Client
Route::get('/summary', [ClientController::class, 'index'])->middleware(['auth', 'role:user'])->name('dashboard');
Route::get('/data', [PasienController::class, 'detail_data'])->middleware(['auth', 'role:user'])->name('detail_data');
Route::post('/data', [PasienController::class, 'store_data'])->middleware(['auth', 'role:user'])->name('store-data');

// Officer
Route::get('/dashboard/superadmin', [AdminController::class, 'hotel'])->middleware(['auth', 'role:super admin'])->name('hotel');
Route::get('/dashboard/admin', [AdminController::class, 'hometown'])->middleware(['auth', 'role:admin'])->name('hometown');
