@if (session()->missing('jabatan') || session('jabatan') != 'warek')
    {{  header("Location: login") }}
@endif

@extends('layouts/main')

@section('container')
  <h1>Pengajuan Calon Mahasiswa Baru</h1>
  <h4>Prodi: Teknik Informatika</h3>
  <hr>
  <div class="subcontainer mt-3">
    <form>
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap" width="1%">No</th>
            <th class="col text-center">Nama</th>
            <th class="col text-center">NIK</th>
          </tr>
        </thead>            
        <tbody>
          <tr>
            <th class="align-middle text-center">1</th>
            <td class="align-middle">Nama</td>
            <td class="align-middle">NIK</td>
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
    <a class="btn btn-secondary" href="/pmb-warek"  role="button">&lt;&lt; Kembali</a>
  </div>
@endsection