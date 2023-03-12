@if (session()->missing('jabatan'))
    {{  header("Location: login") }}
@endif
@extends('layouts/main')

@section('container')
<div class="gradient-custom">
  <br><h4 class="text-center">
    Selamat Datang Di Website PMB (Penerimaan Mahasiswa Baru) <br>
    Jalur SNBP (Seleksi Nasional Berdasarkan Prestasi) Universitas Mampang<br><br>    
  </h4>
  <div class="content ms-5">    
    <h5>Prodi: Teknik Informatika</h5>
    <table>
      <tr>
        <td>Jumlah Pendaftar</td>
        <td>: {{ $mabas[0] }}</td>
      </tr>
      <tr>
        <td>Jumlah Sedang Diproses&nbsp;</td>
        <td>: {{ $mabas[1] }}</td>
      </tr>
      <tr>
        <td>Jumlah Diterima</td>
        <td>: {{ $mabas[2] }}</td>
      </tr>
      <tr>
        <td>Jumlah Ditolak</td>
        <td>: {{ $mabas[3] }}</td>
      </tr>
    </table>
    <p>Detail : <a href="laporan">Klik disini</a></p>
    <br>
  </div>  
</div>
@endsection
