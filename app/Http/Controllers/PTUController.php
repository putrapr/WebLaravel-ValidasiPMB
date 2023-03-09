<?php

namespace App\Http\Controllers;

use App\Models\MabaNilai;
use App\Models\MabaDataDiri;
use Illuminate\Http\Request;

class PTUController extends Controller
{
    public function index(){
        // $maba_tu = MabaDataDiri::with('id','nama','nik','id_user','id_nilai','id_non_akademik')
        //                        ->where('status', 'diajukan')->get();
        
        $maba_tu = MabaDataDiri::where('status', 'diajukan')->get();
        // $maba_tu = MabaDataDiri
        return view('pengajuan-tu',[
            'title' => 'Pengajuan TU',
            'diri_maba' => $maba_tu,
            'nilai_maba' => $maba_tu->tb_maba_nilai           
        ]);
    }
}
