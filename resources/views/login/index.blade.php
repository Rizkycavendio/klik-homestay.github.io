@extends('layouts/main')

@section('container')
{{-- slider gambar --}}
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/slider5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/slider3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/slider2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div>

<div class="row justify-content-center m-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        {{-- Jika berhasil  --}}
        {{-- jika di dalam session terdapat success maka jalankan yg di bawah ini --}}
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

         {{-- Jika gagal--}}
         {{-- jika di dalam session terdapat success maka jalankan yg di bawah ini --}}
         @if (session()->has('loginError'))
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
         @endif
      </div>
      </div>
    </div>
    <div class="col-md-4 card shadow bg-dark">
        <main class="form-signin w-100 m-auto">
            <img class="mb-2 d-flex" style="margin-left: 38%" src="/img/logo_homestay.png" alt="" width="100" height="80">
            <h1 class="h3 mb-3 fw-normal text-center text-white">Please Login</h1>
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username123" autofocus required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-warning" type="submit">Login</button>
            </form>
            <small class="text-white d-block text-center mt-3">Not Registered?<a href="/register">Register Now!</a></small>
            <div class="form-floating text-white mt-3">
                <h5 class="text-center">Login with: </h5>
                 <a style="margin-left: 48%" href="#"><span><i class="bi bi-google"></i></span></a>
            </div>
        </main>  
    </div>
</div>

  
@endsection