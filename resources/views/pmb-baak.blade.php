@extends('layouts/main')

@section('container')
  <h1>Penerimaan Mahasiswa Baru</h1>
  <h4>Prodi: Teknik Informatika</h3>
  <hr>
  <div class="subcontainer mt-3">    
    <a class="btn btn-info mb-3" href="/pmb/pengajuan-tu"  role="button">Pengajuan Maba dari TU</a> <br>
        
    <form>
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap" width="1%">No</th>
            <th class="col text-center">NIK</th>
            <th class="col text-center">Mapel Peminatan</th>
            <th class="col text-center">Nilai (+)</th>
            <th class="col text-center">Organisasi</th>
            <th class="col text-center">Jabatan</th>
            <th class="col text-center">Penghargaan</th>
            <th class="col text-center">Cita-cita</th>
            <th class="col text-center">Non Akademik</th>
          </tr>
        </thead>            
        <tbody>
          <tr>
            <th class="align-middle text-center">1</th>
            <td class="align-middle">nik</td>
            <td class="align-middle">Mapel Peminatan</td>
            <td class="align-middle text-center">
              <input class="form-check-input" type="checkbox">
            </td>
            <td class="align-middle">Organisasi</td>
            <td class="align-middle">Jabatan</td>
            <td class="align-middle">Penghargaan</td>
            <td class="align-middle">Cita-cita</td>
            <td class="align-middle text-center" >
              <input type="number" style="width:60px" class="text-center" value="0">
            </td>
          </tr>
          <tr>
            <th class="align-middle text-center">2</th>
            <td class="align-middle">nik</td>
            <td class="align-middle">Mapel Peminatan</td>
            <td class="align-middle text-center">
              <input class="form-check-input" type="checkbox">
            </td>
            <td class="align-middle">Organisasi</td>
            <td class="align-middle">Jabatan</td>
            <td class="align-middle">Penghargaan</td>
            <td class="align-middle">Cita-cita</td>
            <td class="align-middle text-center" >
              <input type="number" style="width:60px" class="text-center" value="0">
            </td>
          </tr>
        </tbody>
      </table>
      <div class="text-end">
        <button type="submit" class="btn btn-primary">Ajukan ke Wakil Rektor</button>
      </div>
    </form>    
  </div>
@endsection