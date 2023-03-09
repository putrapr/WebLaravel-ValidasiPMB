<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MabaNonAkademik extends Model
{
    use HasFactory;

    protected $table = 'non_akademik';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function data_diri() {
        return $this->hasOne(MabaDataDiri::class);
    }
}
