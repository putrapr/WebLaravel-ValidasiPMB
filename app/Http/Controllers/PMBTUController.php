<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MabaImport;

class PMBTUController extends Controller{
    public function index(){
        return view('pmb-tu',[
            "title" => "PMB"
        ]);
    }

    public function excelImport (Request $request){
        // Validasi ekstensi file
        $this->validate($request, [
            'file' => 'mimes: csv,xls,xlsx'
        ]);

        $file = $request->file('file-import');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_siswa', $nama_file);
        Excel::import(new MabaImport, public_path('/file_siswa/'.$nama_file));
        return redirect('/pmb-tu');
        // Excel::import(new MabaImport(), $request->file('import_file'));
        // return back()->with('success', 'Excel Data Imported successfully.');
    }
}
