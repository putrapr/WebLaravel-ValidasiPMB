@extends('layouts/main')

@section('container')
  <h1>Penerimaan Mahasiswa Baru</h1>
  <h4>Prodi: Teknik Informatika</h3>
  <hr>
  <div class="subcontainer mt-3">    
    <p class="fs-5"> 
      Langkah-langkah mengunggah data calon mahasiswa baru : <br>
      1. Unduh templat file excel ->  
        <a class="btn btn-info p-1" href="/xlsx/templat-pmb.xlsx" download role="button">Unduh Templat</a> <br>
      2. Isikan file tersebut dengan data calon mahasiswa baru <br>
      3. Unggah file yang telah berisi data calon mahasiswa baru <br>
      &emsp;dengan klik tombol di bawah ini <br>      
    </p>
    <a class="btn btn-primary ms-3" href="/xlsx/templat-pmb.xlsx" download role="button">Unggah Data Calon Maba</a>
  </div>
  
@endsection