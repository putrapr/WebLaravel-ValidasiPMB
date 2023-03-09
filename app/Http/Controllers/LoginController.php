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
            $id = $cekAkun->first()->id;
            $request->session()->put('jabatan',$jabatan);
            $request->session()->put('id',$id);
            // header("Location: dashboard");
            return view('dashboard',[
                'title' => 'Dashboard'
            ]);
        } else {            
            return view('login',[
                'title' => 'Login',
                'error' => 'salah'
            ]);
        }        
    }    
}
