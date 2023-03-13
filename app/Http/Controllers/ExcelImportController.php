<?php

namespace App\Http\Controllers;

use App\Imports\MabaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException;

class ExcelImportController extends Controller
{
    public function excelImport (Request $request){
        // Validasi ekstensi file
        $this->validate($request, [
            'file' => 'mimes: csv,xls,xlsx'
        ]);

        $file = $request->file('file-import');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_siswa', $nama_file);
        Excel::import(new MabaImport, public_path('/file_siswa/'.$nama_file));
        if (session()->has('error')) return redirect('/pmb-tu');
        return redirect('/pmb-tu')->with('sukses','Berhasil Mengajukan Data Ke BAAK');
    }
}
