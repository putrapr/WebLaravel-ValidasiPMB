
@if (session()->missing('jabatan') || session('jabatan') != 'baak')
    {{  header("Location: login") }}
@endif
@php
  $no=1;
@endphp

@extends('layouts/main')

@section('container')
  <h1>Pengajuan Calon Mahasiswa Baru</h1>
  <h4>Prodi: Teknik Informatika</h3>
  <hr>
  <div class="subcontainer mt-3">
    <div class="alert alert-success {{ (session()->has('sukses')) ? 'd-block' : 'd-none' }}" role="alert">
      {{ session('sukses') }}
    </div>    
    <form action="/pmb-baak/pengajuan-tu" method="POST" enctype="multipart/form-data">
      @csrf
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap" width="1%">No</th>
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
          @foreach ($mabas as $maba)
            <tr>            
              <th class="align-middle text-center">{{ $no++ }}</th>
              <td class="align-middle">{{ $maba->nama }}</td>
              <td class="align-middle">{{ $maba->nik }}</td>
              <td class="align-middle text-center">{{ $maba->nilai->mtk }}</td>
              <td class="align-middle text-center">{{ $maba->nilai->bi }}</td>
              <td class="align-middle text-center">{{ $maba->nilai->bing }}</td>
              <td class="align-middle text-center">{{ $maba->nilai->peminatan }}</td>
              <td class="text-center">
                <a href="/pmb-baak/pengajuan-tu/tolak={{ $maba->id }}" width="60px" 
                  onclick = "return confirm ('Apakah Anda Yakin Akan Menolak Calon Mahasiswa Ini?')">
                  <i class="bi bi-x-square-fill  text-danger"></i></a>
              </td>    
            </tr>
          @endforeach
        </tbody>
      </table>      
      <div class="d-flex flex-row-reverse ">
        <div class="p-2">
          <button type="submit" class="btn btn-primary" name="btnTerima" value="terimaSemua" style="width:100px">Terima</button>
        </div>
        <div class="p-2">
          <button type="submit" class="btn btn-danger" name="btnTolak" value="tolakSemua" style="width:100px">Tolak</button>
        </div>
      </div>   
    </form>
    <hr>
    <a class="btn btn-secondary" href="/pmb-baak"  role="button">&lt;&lt; Kembali</a>  
  </div>
@endsection

@php
    session()->forget('sukses');
@endphp