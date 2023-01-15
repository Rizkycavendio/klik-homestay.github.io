@extends('dashboard/layouts/main')

@section('container')
{{-- body detail produk homestay --}}
<div class="container mb-5">
   <div class="row justify-content-center">
        <div class="col-lg-10">
          {{-- judul --}}
          <h1 class="mb-3 mt-5">{{ $post->title }}</h1>
          {{-- gambar --}}
          <div class="rounded" style="max-height: 350px; overflow:hidden">
            @if ($post->image)
            <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">  
            @else
            <img src="https://source.unsplash.com/1200x400?" alt="" class="img-fluid">  
            @endif
          </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
      {{-- bagian kiri --}}
      <div class="col-lg-6">
        <div class="card border-0 shadow">
          <div class="card-body">
            <div class="judul">
              <h2>{{ $post->title }}</h2>
              <h6>Kategori kamar: <a href="" class="text-dark">Deluxe</a></h6>
               <a class="text-dark" href="/homestay?category={{ $post->category->slug }}"><span class="class=bi bi-geo-alt"></span>{{ $post->category->name }}</a>
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
              <h3 class="">Deskripsi: </h3>
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
                <h6>Tanggal Booking: </h6>
                <input type="datetime-local"><br><br>
              </div>
              <div class="col mt-3">
                <h6>Metode pembayaran: </h6>
                <p class="text-muted">Metode pembayaran dengan cara transfer lalu upload bukti pembayarannya</p>
              </div>
            </div>
            <a href="#" class="btn btn-primary">Booking!</a>
          </div>
        </div>
      </div>
    </div>
 </div>
@endsection