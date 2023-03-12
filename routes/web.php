<?php

use App\Models\MabaNilai;
use App\Models\MabaDataDiri;
use App\Models\MabaNonAkademik;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PTUController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PBAAKController;
use App\Http\Controllers\PMBTUController;
use App\Http\Controllers\PMBBAAKController;
use App\Http\Controllers\PMBWarekController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcelImportController;
use App\Http\Controllers\LaporanController;

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
Route::post('/', [LoginController::class, 'authenticate']);

Route::get('/', [DashboardController::class, 'index']);

Route::get('/pmb-tu', [PMBTUController::class, 'index']);
Route::post('/pmb-tu/excelimport', [ExcelImportController::class, 'excelImport']);

Route::get('/pmb-baak/pengajuan-tu', [PTUController::class, 'index']);
Route::get('/pmb-baak/pengajuan-tu/tolak={id}', function($id){
  MabaDataDiri::where('id', $id)
              ->update(['status'=>'ditolak']);
  return redirect('/pmb-baak/pengajuan-tu');
});
Route::post('/pmb-baak/pengajuan-tu', [PTUController::class, 'tolakTerimaAjuan']);
Route::get('/pmb-baak', [PMBBAAKController::class, 'index']);
Route::post('/pmb-baak', [PMBBAAKController::class, 'ajukanKeWarek']);

Route::get('/pmb-warek/pengajuan-baak', [PBAAKController::class, 'index']);
Route::post('/pmb-warek/pengajuan-baak', [PBAAKController::class, 'tolakTerimaAjuan']);
Route::get('/pmb-warek', [PMBWarekController::class, 'index']);
Route::post('/pmb-warek', [PMBWarekController::class, 'tolakTerimaMaba']);

Route::get('/laporan', [LaporanController::class,'index']);