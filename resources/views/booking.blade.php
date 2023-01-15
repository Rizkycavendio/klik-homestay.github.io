@extends('layouts/main')

@section('container')
{{-- body detail produk homestay --}}
<div class="container mb-5">
    <div class="row justify-content-center mt-5">
      {{-- bagian kiri --}}
      <div class="col-md-4">
        <div class="card border-0 shadow">
          <div class="card-body">
            <div class="judul">
              <h2 class="text-center">Detail Booking: </h2>
              <hr>
              <div class="col mt-3">
                <h6 class="text-muted">Check-in: </h6>
                <p><b>11 September 2022</b><a class="fw-lighter text-dark text-decoration-none"> 14:00-19:00</a></p>
              </div>
              <div class="col mt-3">
                <h6 class="text-muted">Check-out: </h6>
                <p><b>13 September 2022</b><a class="fw-lighter text-dark text-decoration-none"> 10:00-12:00</a></p>
              </div>
            </div>
            <hr style="height:2px;border-width:0;background-color:#ad9f9f">
            <div class="spesifikasi">
              <h5 class="">Pilihan Homestay: </h5>
              <p>{{ $post->title }}</p>
              <div class="rounded" style="max-height: 150px; max-width:200px; overflow:hidden">
                @if ($post->image)
                  <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">  
                @else
                  <img src="img/homestay.jpg" class="card-img-top" alt="">
                @endif
              </div>
              <br>
              <h6 class="text-dark" href="/homestay?category={{ $post->category->slug }}">Lokasi: <span class="class=bi bi-geo-alt"></span>{{ $post->category->name }}</h6>
              <h6 class="card-text">Kategori Kamar<a class="text-dark text-muted text-decoration-none" href="/homestay?room={{ $post->room->slug }}">: {{$post->room->name }}</a></span></h6><br>
              <h6 class="text-muted"><i class="bi bi-house"></i> Ukuran Kamar: <b>{{ $post->ukuranKamar }}  m</b></h6>
              <h6 class="text-muted"><i class="bi bi-layout-sidebar"></i> Jumlah Kasur: <b> {{ $post->jumlahKasur }}</b></h6>
              <h6 class="text-muted"><i class="bi bi-door-open"></i> Kamar Mandi: <b> {{ $post->kamarMandi }}</b></h6>
              <h6 class="text-muted"><i class="bi bi-rss"></i> WiFi: <b>{{ $post->wifi }}</b></h6>
              <h6 class="text-muted"><i class="bi bi-snow"></i> AC: <b>{{ $post->ac }}</b></h6>
              <h6 class="text-muted"><i class="bi bi-tv"></i> Hiburan: <b>{{ $post->hiburan }}</b></h6>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow mt-3">
          <div class="card-body">
            <div class="judul">
              <h2 class="text-center">Detail Pembayaran: </h2>
              <hr>
              <div class="container">
                <div class="row">
                  <div class="col mt-3">
                    <h6 class="text-muted">Biaya per-malam: <h6></h6>
                  </div>
                  <div class="col mt-3">
                    <h6><b>Rp. {{ $post->price }}</b> </h6> 
                  </div>
                </div>
                <div class="row">
                  <div class="col mt-3">
                    <h6 class="text-muted">Biaya Layanan: <h6></h6>
                  </div>
                  <div class="col mt-3">
                    <h6> <b>Rp. 10.000</b> </h6> 
                  </div>
                </div>
                <div class="row">
                  <div class="col mt-3">
                    <h6 class="text-muted">Total: <h6></h6>
                  </div>
                  <div class="col mt-3">
                    <h6><b>Rp. 260.000</b> </h6> 
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="row">
                <div class="col mt-3">
                  <h5>Kode Pembayaran: </h5>
                </div>
                <div class="col mt-3">
                  <b><a class="text-dark text-decoration-none"> KHS-6732734KW6 </a></b>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow mt-3">
          <div class="card-body">
            <div class="judul">
              <h2 class="text-center">Upload Bukti: </h2>
              <hr>
              <div class="container">
                <div class="row">
                  <div class="col mt-3">
                    <p>Upload di sini</p>
                    <input class="form-control" type="file">
                    <br>
                    <a class="btn btn-danger">Kirim</a>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection