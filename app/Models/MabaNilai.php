<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MabaNilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function data_diri() {
        return $this->hasOne(MabaDataDiri::class);
    }
}
