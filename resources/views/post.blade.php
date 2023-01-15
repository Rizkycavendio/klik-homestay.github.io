@extends('layouts/main')

@section('container')
{{-- body detail produk homestay --}}
<div class="container mb-5">
   <div class="row justify-content-center">
        <div class="col-md-10">
          {{-- judul --}}
          <h1 class="mb-3 mt-5">{{ $post->title }}</h1>
          {{-- gambar --}}
          <div class="rounded" style="max-height: 500px; overflow:hidden">
            @if ($post->image)
              <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">  
            @else
              <img src="img/homestay.jpg" class="card-img-top" alt="">
            @endif
          </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
      {{-- bagian kiri --}}
      <div class="col-md-6">
        <div class="card border-0 shadow">
          <div class="card-body">
            <div class="judul">
              <h2>{{ $post->title }}</h2>
              <h6>Kategori kamar: <a href="/homestay?room={{ $post->room->slug }}" class="text-dark text-decoration-none">{{ $post->room->name }}</a></h6>
               <a class="text-dark text-decoration-none" href="/homestay?room={{ $post->category->slug }}"><span class="class=bi bi-geo-alt"></span>{{ $post->category->name }}</a>
              <a class="text-warning"><span class="bi bi-star-fill"></span></a>
              <a class="text-warning"><span class="bi bi-star-fill"></span></a>
              <a class="text-warning"><span class="bi bi-star-fill"></span></a>
              <a class="text-warning"><span class="bi bi-star-fill"></span></a>
              <a class="text-warning"><span class="bi bi-star-half"></span></a>
            </div>
            <hr style="height:2px;border-width:0;background-color:#ad9f9f">
            <div class="owner">
              <h4 class="text-muted">Homestay disewakan oleh <a class="text-decoration-none text-dark text-muted">{{ $post->user->name }}</a></h4>
              <p>Diposting pada tanggal: {{ $post->created_at }}</p>
            </div>
            <hr style="height:2px;border-width:0;background-color:#ad9f9f">
            <div class="spesifikasi">
              <h4 class="">Deskripsi: </h4>
              <p>{!! $post->body !!}</p>
            </div>
            <hr style="height:2px;border-width:0;background-color:#ad9f9f">
            <div class="spesifikasi">
              <h4 class="">Spesifikasi Homestay: </h4><br>
              <h5 class="text-muted"><i class="bi bi-house"></i> Ukuran Kamar: <b>{{ $post->ukuranKamar }}  m</b></h5>
              <h5 class="text-muted"><i class="bi bi-layout-sidebar"></i> Jumlah Kasur: <b> {{ $post->jumlahKasur }}</b></h5>
              <h5 class="text-muted"><i class="bi bi-door-open"></i> Kamar Mandi: <b> {{ $post->kamarMandi }}</b></h5>
              <h5 class="text-muted"><i class="bi bi-rss"></i> WiFi: <b>{{ $post->wifi }}</b></h5>
              <h5 class="text-muted"><i class="bi bi-snow"></i> AC: <b>{{ $post->ac }}</b></h5>
              <h5 class="text-muted"><i class="bi bi-tv"></i> Hiburan: <b>{{ $post->hiburan }}</b></h5>
            </div>
          </div>
        </div>
      </div>
      {{-- bagian kanan --}}
      <div class="col-md-auto">
        <div class="card border-0 shadow" style="width: 26rem;">
          <div class="card-body">
            <div class="row">
              <h5 class="card-title">{{ $post->price }}/Malam</h5><br>
              <div class="col mt-3">
                <h6>Check-in: </h6>
                <input type="datetime-local"><br><br>
              </div>
              <div class="col mt-3">
                <h6>Check-out: </h6>
                <input type="datetime-local"><br><br>
              </div>
              <div class="col mt-3">
                <h6>Metode pembayaran: </h6>
                <p class="text-muted">Metode pembayaran dengan cara transfer lalu upload bukti pembayarannya</p>
              </div>
            </div>
            <a href="/homestay/detail/booking/{{ $post->slug }}" class="btn btn-primary">Booking!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection