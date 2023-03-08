<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MabaNilai extends Model
{
    use HasFactory;

    protected $table = 'tb_maba_nilai';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function tb_maba_data_diri() {
        return $this->hasOne(MabaDataDiri::class, 'id_nilai', 'id');
    }
}
