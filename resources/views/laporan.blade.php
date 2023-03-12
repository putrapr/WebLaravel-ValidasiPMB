@if (session()->missing('jabatan'))
    {{  header("Location: login") }}
@endif


@extends('layouts/main')

@section('container')
  <br>
  <h4>
    Laporan Penerimaan Mahasiswa Baru 
  </h4>
  <br>
  <!--isi -->
	<div class="container-fluid">
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
      <input type="radio" class="btn-check" name="btnradio" id="rb-terima" autocomplete="off" checked>
      <label class="btn btn-outline-primary" for="rb-terima">Diterima</label>

      <input type="radio" class="btn-check" name="btnradio" id="rb-proses" autocomplete="off">
      <label class="btn btn-outline-primary" for="rb-proses">Sedang Diproses</label>
    
      <input type="radio" class="btn-check" name="btnradio" id="rb-tolak" autocomplete="off">
      <label class="btn btn-outline-primary" for="rb-tolak">Ditolak</label>
    </div> <br> <br>

    <div style="width:50%;" id="terima">
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap" width="1%">No</th>
            <th class="col text-center">Nama</th>
            <th class="col text-center" width="15%">NIK</th>
          </tr>
        </thead>            
        <tbody>
          @php $no=1; @endphp
          @foreach ($terima_mabas as $maba)          
          <tr>
            <th class="align-middle text-center">{{ $no++ }}</th>
            <td class="align-middle">{{ $maba->nama }}</td>
            <td class="align-middle">{{ $maba->nik }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div style="width:50%; display:none;" id="proses">
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap" width="1%">No</th>
            <th class="col text-center">Nama</th>
            <th class="col text-center" width="15%">NIK</th>
          </tr>
        </thead>            
          @php $no=1; @endphp
          @foreach ($proses_mabas as $maba)          
          <tr>
            <th class="align-middle text-center">{{ $no++ }}</th>
            <td class="align-middle">{{ $maba->nama }}</td>
            <td class="align-middle">{{ $maba->nik }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div  style="width:50%; display:none;" id="tolak">
      <table class="table table-bordered border-dark table-striped">
        <thead class="table-warning table-bordered border-dark">
          <tr>
            <th class="text-nowrap" width="1%">No</th>
            <th class="col text-center">Nama</th>
            <th class="col text-center" width="15%">NIK</th>
          </tr>
        </thead>            
        <tbody>
          @php $no=1; @endphp
          @foreach ($tolak_mabas as $maba)          
          <tr>
            <th class="align-middle text-center">{{ $no++ }}</th>
            <td class="align-middle">{{ $maba->nama }}</td>
            <td class="align-middle">{{ $maba->nik }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>


@endsection
