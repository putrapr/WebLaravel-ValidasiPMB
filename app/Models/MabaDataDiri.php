<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MabaDataDiri extends Model {
    use HasFactory;

    protected $table = 'tb_maba_data_diri';
    protected $guarded = ['id'];    

    public function tb_maba_nilai() {
        return $this->belongsTo(MabaNilai::class,'id');
    }

    public function tb_maba_non_akademik() {
        return $this->belongsTo(MabaNonAkademik::class,'id');
    }

    public function tb_pengguna() {
        return $this->belongsTo(Pengguna::class,'id');
    }    
}
