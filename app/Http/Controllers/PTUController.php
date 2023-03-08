<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PTUController extends Controller
{
    public function index(){
        return view('pengajuan-tu',[
            "title" => "Pengajuan TU"
        ]);
    }
}
