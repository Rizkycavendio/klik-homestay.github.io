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

 <div class="container-lg mt-5">
    {{-- searching bar --}}
   <div class="row justify-content-center">
       <div class="col-md-6">
         <form action="/homestay" method="GET">
           @if (request('category'))
           <input type="hidden" name="category" value="{{ request('category') }}">
           @endif
           <div class="input-group">
             <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
             <button class="btn btn-warning" type="submit" >Search</button>
           </div>
         </form>
       </div>
   </div>
 </div>

 {{-- card produk homestay --}}
   <section>
       <div class="container-lg">
           <div class="mb-5">
               <h4>Tentukan tempat menginapmu!</h4>
               <p>Cari yang sesuai dengan keinginanmu</p>
               <h5>{{ $title }}</h5>
           </div>
           <div class="row justify-content-around">
             {{-- kolom kiri mini menu --}}
             <div class="col-xl-2">
               {{-- filter menu --}}
               <div class="card">
                 <h5 class="p-2 text-center">Filter <i class="bi bi-funnel"></i></h5>
                 <div class="accordion" id="accordionPanelsStayOpenExample">
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                         Wilayah
                       </button>
                     </h2>
                     <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body p-0">
                         <ul class="list-group rounded-0">
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay?category=lokasi-jakarta"> Jakarta</a></li>
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay?category=lokasi-bandung"> Bandung</a></li>
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay?category=lokasi-yogyakarta"> Yogyakarta</a></li>
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay?category=lokasi-semarang"> Semarang</a></li>
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay?category=lokasi-surabaya"> Surabaya</a></li>
                            <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay?category=lokasi-malang"> Malang</a></li>                        
                         </ul>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                         Jenis Kamar
                       </button>
                     </h2>
                     <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                       <div class="accordion-body p-0">
                         <ul class="list-group rounded-0">
                           <li class="list-group-item"><span class="bi bi-hospital"><a class="text-decoration-none text-dark" href="/homestay?room=deluxe"> Deluxe</a></li>
                           <li class="list-group-item"><span class="bi bi-hospital"><a class="text-decoration-none text-dark" href="/homestay?room=premium"> Premium</a></li>
                           <li class="list-group-item"><span class="bi bi-hospital"><a class="text-decoration-none text-dark" href="/homestay?room=standard"> Standard</a></li>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <h4 class="mt-5">Promo:</h4>
               <div class="card border-0">
                <img src="/img/banner_promo.jpg" alt="">
               </div>
             </div>

             {{-- kolom kanan card --}}
             <div class="col-xl-10">
               {{-- Lainnya --}}
               <div class="row">
                 @if ($posts->count())
                 <div class="col cols-sm-2 cols-md-3 mb-4">
                   <div class="card shadow border-0 " style="width: 15em;">
                    @if ($posts[0]->image)
                    <div style="max-height: 400px; max-width:400px; overflow:hidden">
                      <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="" class="img-fluid rounded-top">  
                    </div>
                    @else
                    <img src="img/homestay.jpg" class="card-img-top" alt="">
                    @endif
                          <div class="card-body">
                            <h5 class="card-title py-2">{{ $posts[0]->title }}</h5>
                            <h6 class="card-title py-2">Rp{{ $posts[0]->price }}/Malam</h6>
                            <h6 class="card-text"><span class="class=bi bi-geo-alt"><a class="text-dark text-muted text-decoration-none" href="/homestay?category={{ $posts[0]->category->slug }}">: {{$posts[0]->category->name }}</a></span></h6>
                            <h6 class="card-text"><span class="class=bi bi-house"><a class="text-dark text-muted text-decoration-none" href="/homestay?room={{ $posts[0]->room->slug }}">: {{ $posts[0]->room->name }}</a></span></h6>
                            <a class="text-warning" href=""><span class="bi bi-star-fill"></span></a>
                            <a class="text-warning" href=""><span class="bi bi-star-fill"></span></a>
                            <a class="text-warning" href=""><span class="bi bi-star-fill"></span></a>
                            <a class="text-warning" href=""><span class="bi bi-star-fill"></span></a>
                            <a class="text-warning" href=""><span class="bi bi-star-half"></span></a><br>
                            <div class="d-grid justify-content-end">
                              <a href="/homestay/detail/{{ $posts[0]->slug }}">
                                <button class="btn btn-danger">Detail</button>
                              </a>
                            </div>
                         </div>
                     </div>
                 </div> 
                 @foreach ($posts->skip(1) as $post)
                 <div class="col cols-sm-2 cols-md-3 mb-4">
                      <div class="card shadow border-0" style="width: 15em;">
                        @if ($post->image)
                        <div style="max-height: 400px; max-width:400px; overflow:hidden">
                          <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid rounded-top">  
                        </div>
                        @else
                        <img src="img/homestay.jpg" class="card-img-top" alt="">
                        @endif
                             <div class="card-body">
                               <h5 class="card-title py-2">{{ $post->title }}</h5>
                               <h6 class="card-title py-2">Rp{{ $post->price }}/Malam</h6>
                               <h6 class="card-text"><span class="class=bi bi-geo-alt"><a class="text-dark text-muted text-decoration-none" href="/homestay?category={{ $post->category->slug }}">: {{$post->category->name }}</a></span></h6>
                               <h6 class="card-text"><span class="class=bi bi-house"><a class="text-dark text-muted text-decoration-none" href="/homestay?room={{ $post->room->slug }}">: {{$post->room->name }}</a></span></h6>
                               <a class="text-warning" href=""><span class="bi bi-star-fill"></span></a>
                               <a class="text-warning" href=""><span class="bi bi-star-fill"></span></a>
                               <a class="text-warning" href=""><span class="bi bi-star-fill"></span></a>
                               <a class="text-warning" href=""><span class="bi bi-star-fill"></span></a>
                               <a class="text-warning" href=""><span class="bi bi-star-half"></span></a><br>
                               <div class="d-grid justify-content-end">
                                 <a href="/homestay/detail/{{ $post->slug }}">
                                   <button class="btn btn-danger">Detail</button>
                                 </a>
                               </div>
                            </div>
                        </div>
                 </div> 
                @endforeach
               </div>
             </div>
            @else
              <h5 class="text-center">Homestay Not Found</h5>
            @endif
            <div class="d-flex justify-content-end mt-3">
             {{ $posts->links() }}
            </div>
           </div>
       </div>
   </section>
@endsection    

