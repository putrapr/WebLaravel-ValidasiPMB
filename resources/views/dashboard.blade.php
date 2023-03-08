@if (session()->missing('jabatan'))
    {{  header("Location: login") }}
@endif
@extends('layouts/main')

@section('container')
  <h1>Dashboard</h1>
@endsection
