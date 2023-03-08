<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SessionController;
use Session;

class DashboardController extends Controller {
    public function index(){
        // if (Session::has('YOUR_SESSION_KEY')){
        //     // do some thing if the key is exist
        //   }else{
        //     //the key does not exist in the session
        //   }
        return view('dashboard',[
            "title" => "Dashboard"
        ]);
    }
}
