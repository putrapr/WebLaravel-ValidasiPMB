<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PBAAKController extends Controller
{
    public function index(){
        return view('pengajuan-baak',[
            "title" => "Pengajuan BAAK"
        ]);
    }
}
