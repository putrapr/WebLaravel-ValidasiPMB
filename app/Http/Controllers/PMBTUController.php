<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PMBTUController extends Controller{
    public function index(){
        return view('pmb-tu',[
            "title" => "PMB"
        ]);
    }
}
