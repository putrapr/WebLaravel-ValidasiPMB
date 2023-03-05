@extends('layouts/main')

    @section('container')
    <section class="vh-100" style="background-color: #508bfc;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
    
                <h3 class="mb-5">PMB SNMPTN <br> Universitas Mampang</h3>    
                <div class="form-outline mb-4">
                  <input type="text" id="username" class="form-control form-control-lg" placeholder="Username"/>
                </div>    
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
                </div>
                <hr class="my-4">
                <div class="d-grid">
                  <a href="/dashboard" class="btn btn-primary btn-lg" type="submit">Login</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection