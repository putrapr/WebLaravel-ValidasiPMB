@extends('layouts/main')

@section('container')
  <h1>Pengajuan Calon Mahasiswa Baru</h1>
  <h4>Prodi: Teknik Informatika</h3>
  <hr>
  <div class="subcontainer mt-3">
    <p>Diajukan oleh nama_user </p>
    <form>
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap" width="1%">Id</th>
            <th class="col text-center">Nama</th>
            <th class="col text-center">NIK</th>
            <th class="col text-center">Matematika</th>
            <th class="col text-center">Bahasa Indonesia</th>
            <th class="col text-center">Bahasa Inggris</th>
            <th class="col text-center">Mapel Peminatan</th>
            <th class="col text-center">Aksi</th>
          </tr>
        </thead>            
        <tbody>
          <tr>
            <th class="align-middle text-center">1</th>
            <td class="align-middle">Nama</td>
            <td class="align-middle">NIK</td>
            <td class="align-middle text-center">Matematika</td>
            <td class="align-middle text-center">Bahasa Indonesia</td>
            <td class="align-middle text-center">Bahasa Inggris</td>
            <td class="align-middle text-center">Mapel Peminatan</td>
            <td class="text-center">
              <a href="../proses/hapus-laptop.php?id=<?php //getId($nama_laptop) ?>" width="60px" 
                 onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')">
                 <i class="bi bi-x-square-fill  text-danger"></i></a>
            </td>    
          </tr>
        </tbody>
      </table>
      <div class="d-flex flex-row-reverse ">
        <div class="p-2">
          <button type="submit" class="btn btn-primary" name="btnTerima" style="width:100px">Terima</button>
        </div>
        <div class="p-2">
          <button type="submit" class="btn btn-danger" name="btnTolak" style="width:100px">Tolak</button>
        </div>
      </div>
      <hr>
    </form>
    <a class="btn btn-secondary" href="/pmb-baak"  role="button">&lt;&lt; Kembali</a>  
  </div>
@endsection