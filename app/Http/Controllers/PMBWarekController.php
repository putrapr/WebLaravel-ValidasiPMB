<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PMBWarekController extends Controller{
    public function index(){
        return view('pmb-warek',[
            "title" => "PMB"
        ]);
    }

    public function indexDetail(){
        return view('pengajuan-baak',[
            "title" => "PMB"
        ]);
    }
}
