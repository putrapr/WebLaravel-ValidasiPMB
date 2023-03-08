@if (session()->missing('jabatan') || session('jabatan') != 'warek')
    {{  header("Location: login") }}
@endif

@extends('layouts/main')

@section('container')
  <h1>Penerimaan Mahasiswa Baru</h1>
  <h4>Prodi: Teknik Informatika</h3>
  <hr>
  <div class="subcontainer mt-3">    
    <a class="btn btn-info mb-3" href="/pmb-warek/pengajuan-baak"  role="button">Pengajuan Maba dari BAAK</a> <br>
        
    <form>
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap" width="1%">No</th>
            <th class="col text-center">Nama</th>
            <th class="col text-center">Total Nilai</th>
            <th class="col text-center">Penghargaan</th>
            <th class="col text-center">Asal Sekolah</th>
            <th class="col text-center">Diterima ?</th>
          </tr>
        </thead>            
        <tbody>
          <tr>
            <th class="align-middle text-center">1</th>
            <td class="align-middle">Nama</td>
            <td class="align-middle text-center">Total Nilai | <a href="/">Detail</a></td>
            <td class="align-middle">Penghargaan</td>
            <td class="align-middle">Asal Sekolah</td>
            <td class="align-middle text-center">
              <input class="form-check-input" type="checkbox">
            </td>
          </tr>
        </tbody>
      </table>
      <div class="text-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>    
  </div>
@endsection