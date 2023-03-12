<?php

namespace App\Http\Controllers;

use App\Models\MabaDataDiri;
use Illuminate\Http\Request;

class PBAAKController extends Controller
{
    public function index(){
        $maba_tu = MabaDataDiri::where('status','diajukan-baak')
            ->orderBy('nama','asc')
            ->get();
            
        return view('pengajuan-baak',[
            'title' => 'Pengajuan BAAK',
            'mabas' => $maba_tu
        ]);
    }

    public function tolakTerimaAjuan(Request $request){
        if (isset($request->btnTerima)){
            return $this->statusMaba('proses-warek','diterima');
        } else {     
            return $this->statusMaba('ditolak','ditolak');
        }
    }

    public function statusMaba($status, $pesan){
        MabaDataDiri::where('status', 'diajukan-baak')
            ->update(['status'=>$status]);
        session()->put('sukses','Pengajuan BAAK berhasil '.$pesan);
        return $this->index();
    }
}
