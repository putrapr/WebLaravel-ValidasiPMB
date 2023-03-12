@if (session()->missing('jabatan') || session('jabatan') != 'baak')
    {{  header("Location: login") }}
@endif
@php
  $no=1;
@endphp

@extends('layouts/main')

@section('container')
  <h1>Penerimaan Mahasiswa Baru</h1>
  <h4>Prodi: Teknik Informatika</h3>
  <hr>
  <div class="subcontainer mt-3">    
    <a class="btn btn-info mb-3" href="/pmb-baak/pengajuan-tu"  role="button">Pengajuan Maba dari TU</a> <br>
    <div class="alert alert-success {{ (session()->has('sukses')) ? 'd-block' : 'd-none' }}" role="alert">
      {{ session('sukses') }}
    </div>
    <form action="/pmb-baak" method="POST" enctype="multipart/form-data">
      @csrf
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap align-middle" width="1%">No</th>
            <th class="col align-middle text-center">NIK</th>
            <th class="col align-middle text-center">Mapel Peminatan</th>
            <th class="col align-middle text-center">Nilai (+)</th>
            <th class="col align-middle text-center">Organisasi</th>
            <th class="col align-middle text-center">Jabatan</th>
            <th class="col align-middle text-center">Penghargaan</th>
            <th class="col align-middle text-center">Cita-cita</th>
            <th class="col align-middle text-center">Non Akademik</th>
          </tr>
        </thead>            
        <tbody>
          @foreach ($mabas as $maba)
            <tr>
              <th class="align-middle text-center">{{ $no++ }}</th>
              <td class="align-middle">{{ $maba->nik }}</td>
              <td class="align-middle">{{ $maba->non_akademik->mapel_peminatan }}</td>
              <td class="align-middle text-center">
                <input class="form-check-input" type="checkbox" name="nilai_plus[]">
              </td>
              <td class="align-middle">{{ $maba->non_akademik->organisasi }}</td>
              <td class="align-middle">{{ $maba->non_akademik->jabatan }}</td>
              <td class="align-middle">{{ $maba->non_akademik->penghargaan }}</td>
              <td class="align-middle">{{ $maba->non_akademik->cita_cita }}</td>
              <td class="align-middle text-center" >
                <input type="number" style="width:60px" class="text-center" value="0" name="non_akademik[]">
              </td>
            </tr>
            <input type="hidden" name="id_maba[]" value="{{ $maba->id }}">
          @endforeach
        </tbody>
      </table>
      <div class="text-end">
        <button type="submit" class="btn btn-primary">Ajukan ke Wakil Rektor</button>
      </div>
      <br><br>      
    </form>  
  </div>
@endsection

@php
    session()->forget('sukses');
@endphp