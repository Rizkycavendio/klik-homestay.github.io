<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Klik Homestay | Home</title>
    <style>
        section {
            padding: 60px 0;
        }
    </style>
</head>
<body>
{{-- Nav bar Menu 1 --}}
<nav class="navbar sticky-top navbar-expand-lg" style="background-color: #ffffff;">
    <div class="container-lg">
      <a class="navbar-brand text-warning" href="#">
        <img src="/img/logo_homestay.png" alt="" width="40" height="35" class="d-inline-block">
        Klik Homestay
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#fitur">Layanan & Fitur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tk">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/homestay">Cari Homestay!</a>
          </li>
        </ul>
    </div>
  </nav>
    <!-- Modal Tombol Login -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong> Silahkan Login </strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
      <div class="modal-body">
         <div class="container">
             <div class="row">
                 <div class="d-grid gap-2 mx-auto">
                     <p> Ingin login sebagai...</p>
                     <button class="btn btn-light shadow p-3" >Penyewa Homestay<i class="bi bi-currency-exchange"></i></button>
                     <button class="btn btn-light shadow p-3" >Pemilik Homestay <i class="bi bi-house-fill"></i></button>
                 </div>
             </div>
         </div>
      </div>
  </div>
</div>
</div>
  {{-- Gambar utama & text utama --}}
  <section id="intro" class="mb-5 mt-5">
      <div class="container-lg mt-5">
          <div class="row justify-content-center align-items-center">
              <div class="col-md-5 text-center text-md-start">
                <h1>
                    <div class="display-5"> Butuh tempat menginap? yang rasanya seperti di rumah sendiri?</div>
                </h1>
                <p class="lead my-4 text-muted"> Klik Homestay menawarkan kepada Anda layanan booking/reservasi homestay. Selain itu, jika Anda memiliki homestay dan ingin dipromosikan Anda dapat mempromosikannya melalui Klik Homestay secara GRATIS!!
                </p>
                <div class="spinner-grow spinner-grow-sm text-danger position-absolute" role="status">
                  <span class="visually-hidden" style="">Loading...</span>
                </div>
                <a href="/homestay" class="btn btn-warning btn-lg mb-2">Cari Homestay!</a>
              </div>
              <div class="col-md-5 text-center d-none d-md-block">
                 <!-- gambar -->
                 <span class="gambar" data-bs-placement="bottom" title="Net Ninja Book Cover">
                    <img class="img-fluid rounded" src="img/homestay.jpg" alt="ebook cover">
                </span>
            </div>
          </div>
      </div>
  </section>

  {{-- fitur & layanan --}}
  <section id="fitur" class="bg-warning mt-5">
      <div class="container-lg">
        <div class="text-center mt-4">
            <h2>Layanan & Fitur</h2>
            <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:#000000">
            <p class="lead text-muted">Fitur dan Layanan terbaik kami berikan untuk Anda</p>
        </div>
          <div class="row  my-5 align-items-center justify-content-center">
              <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0 shadow" style="width: 18rem;">
                    <img src="img/fitur3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center">
                            <h4><i class="bi bi-check2-circle"></i> Booking Langsung</h4>  
                            <p class="card-text">Booking langsung melalui website Klik Homestay dengan mudah dan cepat.</p>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0 shadow" style="width: 18rem;">
                    <img src="img/fitur1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center">
                            <h4><i class="bi bi-check2-circle"></i> Gampang Nyarinya</h4>  
                            <p class="card-text">Dibekali dengan fitur Filter dan Searching untuk memudahkan pengguna dalam mencari Homestay</p>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0 shadow" style="width: 18rem;">
                    <img src="img/fitur2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center">
                            <h4><i class="bi bi-check2-circle"></i> Banyak pilihannya</h4>  
                            <p class="card-text">Pilihan homestay yang banyak dan beragam, disesuaikan dengan kebutuhan dan keinginan Anda</p>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  {{-- Tentang Kami --}}
  <section id="tk" class="mt-4">
      <div class="container-lg">
          <div class="text-center mt-3">
              <h2>Tentang Kami</h2>
              <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:#000000">
              <p class="lead text-muted">Informasi mengenai Klik Homestay</p>
          </div>
          <div class="row mt-5">
              <div class="col-md-6">
                  <div class="left-image">
                      <img class="rounded" src="img/homestay.jpg" alt="">
                  </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                    <h4>Tentang Klik Homestay...</h4>
                    <br>
                    <p>Sistem informasi administrasi homestay berbasis web ini merupakan sebuah sistem yang memberikan informasi lengkap mengenai homestay. Informasi yang diberikan berupa info pemesanan, pembayaran, dan info mengenai fasilitas-fasilitas apa saja yang terdapat di masing-masing homestay. Pemesanan homestay dilakukan secara online, hal ini sangat memudahkan bagi calon pelanggan dimana pelanggan tidak perlu datang ke tempat secara langsung. <br> <br> Dengan adanya sistem informasi ini akan sangat memudahkan pelanggan dan pemilik homestay, karena pemesanan dan pelayanan jauh lebih efisien, efektif, dan terbarukan. Tujuan dari pembuatannya adalah menjadikan homestay yang ada di tempat wisata menjadi satu tempat, dimana para pemesan dapat melihat daftar seluruh homestay yang ada di kawasan wisata tersebut hanya dengan satu aplikasi website.</p>
                </div>
            </div>
          </div>
      </div>
  </section>
  {{-- footer --}}
 <section id="footer" class="bg-dark">
    <div class="container-lg mt-4 text-center text-white">
        <div class="row justify-content-around">
          <div class="col-lg-3 py-3">
                  <h4>Klik Homestay</h4>
                  <div class="container">
                    <a class="navbar-brand" href="#">
                      <img src="/img/logo_homestay.png" alt="" width="200" height="160" class="d-inline-block">
                    </a>
                  </div>
          </div>
            <div class="col-lg-3 py-3">
                    <h4 class="pb-4">Informasi Kontak</h4>
                    <p>Surabaya, Jawa Timur</p>
                    <p>Email: example@mail.com</p>
                    <p>Phone: +00 xxxxxxxx</p>
            </div>
        </div>

        <hr style="height:2px;border-width:0;color:rgb(255, 255, 255);background-color:#ffffff">
        
        <div class="row mt-4 justify-content-center text-center">
            <div class="col-md-6">
                <h6>
                  Copyright © 2022 Klik Homestay. All Rights Reserved.
                </h6>
            </div>
            <div class="col-md-6">
                    <a class="text-white" href=""><span class="bi bi-facebook"></span></a>
                    <a class="text-white" href=""><span class="bi bi-instagram"></span></a>
                    <a class="text-white" href=""><span class="bi bi-twitter"></span></a>
                    <a class="text-white" href=""><span class="bi bi-whatsapp"></span></a>
             </div>
        </div>
    </div>
</section>
   
{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
 
 
      

