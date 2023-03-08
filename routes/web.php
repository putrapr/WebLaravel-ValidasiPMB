<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PMBTUController;
use App\Http\Controllers\PMBBAAKController;
use App\Http\Controllers\PMBWarekController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PBAAKController;
use App\Http\Controllers\PTUController;

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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/dashboard', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/pmb-tu', [PMBTUController::class, 'index']);

Route::get('/pmb-baak', [PMBBAAKController::class, 'index']);

Route::get('/pmb-baak/pengajuan-tu', [PTUController::class, 'index']);

Route::get('/pmb-warek', [PMBWarekController::class, 'index']);

Route::get('/pmb-warek/pengajuan-baak', [PBAAKController::class, 'index']);