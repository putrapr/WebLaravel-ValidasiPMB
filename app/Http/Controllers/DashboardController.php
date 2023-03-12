<?php

namespace App\Http\Controllers;

use App\Models\MabaDataDiri;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index() {
        $maba = MabaDataDiri::get();
        $jml_semua = $maba->count();
        $jml_terima = $maba->where('status', 'diterima')->count();
        $jml_tolak = $maba->where('status', 'ditolak')->count();
        $jml_proses = $jml_semua - $jml_terima - $jml_tolak;
        $maba = [$jml_semua, $jml_proses, $jml_terima, $jml_tolak];
        return view('dashboard',[
            'title' => 'Dashboard',
            'mabas' => $maba
        ]);
    }
}
