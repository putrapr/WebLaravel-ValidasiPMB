<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'tb_pengguna';
    protected $guarded = ['id'];

    public function tb_maba_data_diri() {
        return $this->hasMany(MabaDataDiri::class, 'id_user', 'id');
    }
}
