@if (session()->missing('jabatan') || session('jabatan') != 'tu')
    {{  header("Location: login") }}
@endif

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
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary ms-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Unggah Data Calon Maba
    </button>
    <br><br>

    <div class="alert alert-success {{ (session()->has('sukses')) ? 'd-block' : 'd-none' }}" role="alert">
      {{ session('sukses') }}
    </div>

    <div class="alert alert-danger {{ (session()->has('error')) ? 'd-block' : 'd-none' }}" role="alert">
      {{ session('error') }}
    </div>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Data Calon Maba</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/pmb-tu/excelimport" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="file" name="file-import" required>
            </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
          <button type="submit" class="btn btn-primary">Ajukan ke BAAK</button>
        </div>
      </div>
    </form>
    </div>
  </div>
@endsection