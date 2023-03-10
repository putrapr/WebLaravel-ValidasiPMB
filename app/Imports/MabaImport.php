<?php

namespace App\Imports;

use App\Models\MabaNilai;
use App\Models\MabaDataDiri;
use App\Models\MabaNonAkademik;
use Illuminate\Support\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithValidation;

class MabaImport implements ToCollection
{    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection (Collection $rows){
        $idPengguna = session()->get('id');
        $no = 0;

        Validator::make($rows->toArray(), [
            '*.NIK' => 'unique:nik'
        ])->validate();
        try {
            foreach ($rows as $row){
                if ($no<2){
                    $no++;
                    continue;
                }
                $nilai = MabaNilai::create([
                    'mtk' => $row[3],
                    'bi'    => $row[4],
                    'bing' => $row[5],
                    'peminatan' => $row[6],
                    'non_akademik' => 0,
                    'jumlah' => 0,
                ]);
    
                $nonAka = MabaNonAkademik::create([
                    'mapel_peminatan' => $row[7],
                    'organisasi'    => $row[8],
                    'jabatan' => $row[9],
                    'penghargaan' => $row[10],
                    'cita_cita' => $row[11],
                    'asal_sekolah' => $row[12],
                ]);
    
                MabaDataDiri::create([
                    'nama' => $row[1],
                    'nik'    => $row[2],
                    'pengguna_id' => $idPengguna,
                    'nilai_id' => $nilai->id,
                    'non_akademik_id' => $nonAka->id,
                    'status' => 'diajukan-tu',
                ]);
            }
        } catch (QueryException $e) {
            $errorInfo = $e->errorInfo;
            return redirect('/pmb-tu')->with('error', $errorInfo[2]);
        }                
    }
}
