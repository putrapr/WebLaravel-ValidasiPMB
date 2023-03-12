<?php

namespace App\Http\Controllers;

use App\Models\MabaDataDiri;
use Illuminate\Http\Request;

class PMBWarekController extends Controller{
    public function index(){
        $maba_tu = MabaDataDiri::with(['nilai','non_akademik'])
            ->where('status','proses-warek')
            ->get();
        $maba_tu = $maba_tu->sortBy(function($eventSort){return $eventSort->nilai->jumlah;})->reverse();

        return view('pmb-warek',[
            'title' => 'PMB',
            'mabas' => $maba_tu
        ]);
    }

    public function tolakTerimaMaba(Request $request){
        for($i=0;$i<count($request->id_maba);$i++){            
            if (isset($request->cb_terima[$i])){
                MabaDataDiri::where('id', $request->id_maba[$i])
                    ->update(['status'=>'diterima']);                            
            } else {
                MabaDataDiri::where('id', $request->id_maba[$i])
                    ->update(['status'=>'ditolak']);
            }
        }
        return redirect('/pmb-warek')->with('sukses','Berhasil Menerima Mahasiswa Baru');
    }
}
