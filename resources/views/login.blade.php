@extends('layouts/main')

    @section('container')
    <section class="vh-100" style="background-color: #508bfc;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="alert alert-danger {{ (isset($error)) ? 'd-block' : 'd-none' }}" role="alert">
                  Nama Pengguna atau Sandi Salah !
                </div>

                <form action="/dashboard" method="POST">
                  @csrf
                  <h3 class="mb-5">PMB SNMPTN <br> Universitas Mampang</h3>    
                  <div class="form-outline mb-4">
                    <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama Pengguna" required/>
                  </div>                  
                  <div class="form-outline mb-4">
                    <input type="password" name="sandi" class="form-control form-control-lg" placeholder="Sandi" required/>
                  </div>
                  <hr class="my-4">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                    {{-- <a href="/dashboard" class="btn btn-primary btn-lg" type="submit">Login</a> --}}
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection