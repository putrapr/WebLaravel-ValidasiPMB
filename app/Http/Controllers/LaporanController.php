<?php

namespace App\Http\Controllers;

use App\Models\MabaDataDiri;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $maba = MabaDataDiri::orderBy('nama')->get();
        $maba_terima = $maba->where('status', 'diterima');
        $maba_tolak = $maba->where('status', 'ditolak');
        $maba_proses = $maba->diff($maba_terima)->diff($maba_tolak);
        return view('laporan',[
            'title' => 'Laporan',
            'terima_mabas' => $maba_terima,
            'tolak_mabas' => $maba_tolak,
            'proses_mabas' => $maba_proses
        ]);
    }
}
