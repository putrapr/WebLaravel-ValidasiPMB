<?php

namespace App\Http\Controllers;

use App\Models\InfoTambahan;
use App\Models\MabaNilai;
use App\Models\MabaDataDiri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PMBBAAKController extends Controller {
    public function index(){
        $maba_tu = MabaDataDiri::with(['non_akademik'])
            ->where('status','proses-baak')
            ->orderBy('nik','asc')
            ->get();
        return view('pmb-baak',[
            "title" => "PMB",
            'mabas' => $maba_tu
        ]);
    }

    public function ajukanKeWarek(Request $request){
        // Perbarui nilai peminatan dan nilai non akademik
        $this->tambahNilai($request);
       
        // Hitung dan perbarui jumlah nilai
        $this->hitungPerbaruiNilai();

        // Urutkan dari jumlah nilai tertinggi lalu ambil sejumlah n untuk diajukan ke warek
        $jml = InfoTambahan::orderBy('id','desc')->first();
        $jml = $jml->jml_pengajuan_baak;
        $this->nilaiDiterima($jml);
        $this->nilaiDitolak($jml);
        return redirect('/pmb-baak')->with('sukses','Berhasil Mengajukan Data Calon Mahasiswa');
    }

    private function tambahNilai(Request $request){
        for($i=0;$i<count($request->id_maba);$i++){            
            $non_akademik = isset($request->non_akademik[$i]) ? $request->non_akademik[$i] : "0";
            if (isset($request->nilai_plus[$i])){
                MabaNilai::where('id', $request->id_maba[$i])
                    ->update([
                        'peminatan'=>DB::raw('peminatan+10'),
                        'non_akademik'=>$non_akademik]
                    );                            
            } else {
                MabaNilai::where('id', $request->id_maba[$i])
                    ->update(['non_akademik'=>$non_akademik]);
            }
        }
    }

    private function hitungPerbaruiNilai(){
        $maba_nilai = MabaNilai::get();
        foreach($maba_nilai as $nilai){
            $jumlah = $nilai->mtk + $nilai->bi + $nilai->bing + $nilai->peminatan + $nilai->non_akademik;
            MabaNilai::where('id', $nilai->id)
                ->update(['jumlah'=>$jumlah]);
        }
    }

    private function nilaiDiterima($jml){
        $calonDiterima = MabaDataDiri::select('data_diri.*')
            ->join('nilai', 'nilai.id','=','data_diri.nilai_id')
            ->orderBy('nilai.jumlah','desc')
            ->take($jml)
            ->get();

        foreach ($calonDiterima as $maba){
            MabaDataDiri::where('id', $maba->id)
                ->update(['status'=>'diajukan-baak']);
        }
    }

    private function nilaiDitolak($jml){
        $calonDitolak = MabaDataDiri::select('data_diri.*')
            ->join('nilai', 'nilai.id','=','data_diri.nilai_id')
            ->orderBy('nilai.jumlah','desc')
            ->skip($jml)
            ->get();
        
        foreach ($calonDitolak as $maba){
            MabaDataDiri::where('id', $maba->id)
                ->update(['status'=>'ditolak']);
        }
    }
}

