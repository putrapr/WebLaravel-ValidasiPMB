<?php

namespace App\Http\Controllers;

use App\Models\MabaNilai;
use App\Models\MabaDataDiri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PTUController extends Controller
{
    public function index(){
        $maba_tu = MabaDataDiri::with(['pengguna','nilai','non_akademik'])->get();
        // $penggunas = DB::table('data_diri')->distinct('pengguna_id')->get();
        // @dd($pengguna[1]->pengguna_id);
        // $maba = MabaDataDiri::all();
        // $jml_pengguna = $maba->countBy('pengguna_id');
        // @dd($jml_pengguna);
        return view('pengajuan-tu',[
            'title' => 'Pengajuan TU',
            'datas' => $maba_tu
        ]);
    }
}
