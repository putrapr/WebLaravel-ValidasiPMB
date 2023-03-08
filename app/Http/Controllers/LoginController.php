<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class LoginController extends Controller {
    public function index() {
        session()->forget('jabatan');
        return view('login',[
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request){
        $cekAkun = Pengguna::where('nama', $request->nama)->where('sandi', $request->sandi);
        $exist = $cekAkun->exists();
        if ($exist) {
            $jabatan = $cekAkun->first()->jabatan;
            $request->session()->put('jabatan',$jabatan);
            // header("Location: dashboard");
            return view('dashboard',[
                'title' => 'Dashboard',
                'pengguna' => $jabatan
            ]);
        } else {            
            return view('login',[
                'title' => 'Login',
                'error' => 'salah'
            ]);
        }        
    }    
}
