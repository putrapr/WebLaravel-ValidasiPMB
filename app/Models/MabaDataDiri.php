<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MabaDataDiri extends Model {
    use HasFactory;

    protected $table = 'data_diri';
    protected $guarded = ['id'];    

    public function nilai() {
        return $this->belongsTo(MabaNilai::class);
    }

    public function non_akademik() {
        return $this->belongsTo(MabaNonAkademik::class);
    }

    public function pengguna() {
        return $this->belongsTo(Pengguna::class);
    }    
}
