<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {
    public function index() {
        session()->forget('jabatan');
        return view('login',[
            "title" => "Login"
        ]);
    }

    public function authenticate2(Request $request){
        $cekAkun = Pengguna::where('nama', $request->nama)->where('sandi', $request->sandi);
        $exist = $cekAkun->exists();
        if ($exist) {
            $jabatan = $cekAkun->first()->jabatan;
            $id = $cekAkun->first()->id;
            $request->session()->put('jabatan',$jabatan);
            $request->session()->put('id',$id);
            return redirect('/');
            // return view('dashboard',[
            //     'title' => 'Dashboard'
            // ]);
        } else {            
            return view('login',[
                'title' => 'Login',
                'error' => 'salah'
            ]);
        }        
    }  
    
    public function authenticate(Request $request){
        $cekAkun = Pengguna::where('nama', $request->nama)->first();
        if (!$cekAkun == null) {
            if (Hash::check($request->sandi, $cekAkun->sandi)) {
                $request->session()->put('jabatan',$cekAkun->jabatan);
                $request->session()->put('id',$cekAkun->id);
                return redirect('/');
            }    
        }
        return view('login',[
            'title' => 'Login',
            'error' => 'salah'
        ]);     
    } 
}
