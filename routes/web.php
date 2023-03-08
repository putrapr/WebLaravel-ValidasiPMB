<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PMBTUController;
use App\Http\Controllers\PMBBAAKController;
use App\Http\Controllers\PMBWarekController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [LoginController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/pmb-tu', [PMBTUController::class, 'index']);

Route::get('/pmb-baak', [PMBBAAKController::class, 'index']);

Route::get('/pmb/pengajuan-tu', [PMBBAAKController::class, 'indexDetail']);

Route::get('/pmb-warek', [PMBWarekController::class, 'index']);

Route::get('/pmb/pengajuan-baak', [PMBWarekController::class, 'indexDetail']);