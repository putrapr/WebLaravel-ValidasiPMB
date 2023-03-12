<?php

namespace App\Http\Controllers;

use App\Models\MabaNilai;
use App\Models\MabaDataDiri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PTUController extends Controller{

    public function index(){
        $maba_tu = MabaDataDiri::with(['pengguna','nilai'])
            ->where('status','diajukan-tu')
            ->orderBy('nama','asc')
            ->get();
            
        return view('pengajuan-tu',[
            'title' => 'Pengajuan TU',
            'mabas' => $maba_tu
        ]);
    }

    public function tolakTerimaAjuan(Request $request){   
        if (isset($request->btnTerima)){
            return $this->statusMaba('proses-baak','diterima');
        } else {            
            return $this->statusMaba('ditolak','ditolak');
        }
    }

    public function statusMaba($status, $pesan){
        MabaDataDiri::where('status', 'diajukan-tu')
            ->update(['status'=>$status]);
        session()->put('sukses','Pengajuan TU berhasil '.$pesan);
        return $this->index();
    }
}
