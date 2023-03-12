<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoTambahan extends Model
{
    use HasFactory;

    protected $table = 'info_tambahan';
    protected $guarded = ['id'];
    public $timestamps = false;  
}
