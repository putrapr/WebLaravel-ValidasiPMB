<?php

namespace App\Imports;

use App\Models\MabaNilai;
use App\Models\MabaDataDiri;
use App\Models\MabaNonAkademik;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MabaImport implements ToCollection
{    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function collection (Collection $rows){
    //     $idPengguna = session()->get('id');
    //     foreach ($rows as $row){
    //         $nilai = MabaNilai::create([
    //             'mtk' => $row['Matematika'],
    //             'bi'    => $row['Bahasa Indonesia'],
    //             'bing' => $row['Bahasa Inggris'],
    //             'peminatan' => $row['Peminatan'],
    //             'non_akademik' => 0,
    //         ]);

    //         $nonAka = MabaNonAkademik::create([
    //             'mapel_peminatan' => $row['Nama Mapel Peminatan'],
    //             'organisasi'    => $row['Organisasi'],
    //             'jabatan' => $row['Jabatan'],
    //             'penghargaan' => $row['Penghargaan'],
    //             'cita_cita' => $row['Cita-cita'],
    //             'asal_sekolah' => $row['Asal Sekolah'],
    //         ]);

    //         MabaDataDiri::create([
    //             'nama' => $row['Nama'],
    //             'nik'    => $row['NIK'],
    //             'id_user' => $idPengguna,
    //             'id_nilai' => $nilai->id(),
    //             'id_non_akademik' => $nonAka->id(),
    //             'status' => 'diajukan',
    //         ]);
    //     }        
    // }

    public function collection (Collection $rows){
        $idPengguna = session()->get('id');
        $no = 0;
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
                'id_user' => $idPengguna,
                'id_nilai' => $nilai->id,
                'id_non_akademik' => $nonAka->id,
                'status' => 'diajukan',
            ]);
        }        
    }
}
