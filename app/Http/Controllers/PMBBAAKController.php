<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PMBBAAKController extends Controller{
    public function index(){
        return view('pmb-baak',[
            "title" => "PMB"
        ]);
    }

    public function indexDetail(){
        return view('pengajuan-tu',[
            "title" => "Pengajuan TU"
        ]);
    }
}
