@if (session()->missing('jabatan') || session('jabatan') != 'warek')
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
    <a class="btn btn-info mb-3" href="/pmb-warek/pengajuan-baak"  role="button">Pengajuan Maba dari BAAK</a> <br>
    <div class="alert alert-success {{ (session()->has('sukses')) ? 'd-block' : 'd-none' }}" role="alert">
      {{ session('sukses') }}
    </div>
    <form action="/pmb-warek" method="POST" enctype="multipart/form-data">
      @csrf
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
          @foreach ($mabas as $maba)
            <tr>
              <th class="align-middle text-center">{{ $no++ }}</th>
              <td class="align-middle">{{ $maba->nama }}</td>
              <td class="align-middle text-center">{{ $maba->nilai->jumlah }} | <a href="/" 
                data-bs-toggle="modal" data-bs-target="#nilai{{ $maba->nilai->id }}">Detail</a></td>
              <td class="align-middle">{{ $maba->non_akademik->penghargaan }}</td>
              <td class="align-middle">{{ $maba->non_akademik->asal_sekolah }}</td>
              <td class="align-middle text-center">
                <input class="form-check-input" type="checkbox" name="cb_terima[]">
              </td>
            </tr>
            <input type="hidden" name="id_maba[]" value="{{ $maba->id }}">

            <!-- Modal -->
            <div class="modal fade" id="nilai{{ $maba->nilai->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $maba->nama }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <p>
                        Matematika: {{ $maba->nilai->mtk }} <br>
                        Bahasa Indonesia: {{ $maba->nilai->bi }} <br>
                        Bahasa Inggris: {{ $maba->nilai->bing }} <br>
                        Peminatan: {{ $maba->nilai->peminatan }} <br>
                        Non Akademik: {{ $maba->nilai->non_akademik }}
                      </p>
                    </div>        
                  </div>
                </div>
              </div>
            </div>         
          @endforeach
        </tbody>
      </table>
      <div class="text-end">
        <button type="submit" class="btn btn-primary">Terima Mahasiswa Baru</button>
      </div>
    </form>    
  </div>
@endsection

@php
    session()->forget('sukses');
@endphp