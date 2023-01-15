@extends('layouts/main')

@section('container')
<!-- Modal Tombol Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel"><strong> Silahkan Login </strong></h5>
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

 <div class="container-lg mt-5">
    {{-- searching bar --}}
   <div class="row justify-content-center">
       <div class="col-md-6">
         <form action="/homestay" method="GET">
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
               <h4>Kategori Wilayah: {{ $category }}</h4>
               <p>Cari yang sesuai dengan keinginanmu</p>
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
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay/"> Jakarta</a></li>
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay/"> Bandung</a></li>
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay/"> Yogyakarta</a></li>
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay/"> Semarang</a></li>
                           <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay/"> Surabaya</a></li>
                            <li class="list-group-item"><span class="class=bi bi-geo-alt"><a class="text-decoration-none text-dark" href="/homestay/"> Malang</a></li>                        
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
                           <li class="list-group-item"><span class="bi bi-hospital"><a class="text-decoration-none text-dark" href="/homestay/"> Deluxe</a></li>
                           <li class="list-group-item"><span class="bi bi-hospital"><a class="text-decoration-none text-dark" href="/homestay/"> Premium</a></li>
                           <li class="list-group-item"><span class="bi bi-hospital"><a class="text-decoration-none text-dark" href="/homestay/"> Standard</a></li>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <h4 class="mt-5">Promo:</h4>
             </div>

             {{-- kolom kanan card --}}
             <div class="col-xl-10">
               {{-- Lainnya --}}
               <div class="row">
                 @foreach ($posts as $post)
                 <div class="col cols-sm-2 cols-md-3 mb-4">
                      <div class="card shadow border-0" style="width: 15em;">
                             <img src="img/homestay.jpg" class="card-img-top" alt="...">
                             <div class="card-body">
                               <h5 class="card-title py-2">{{ $post->title }}</h5>
                               <h6 class="card-title py-2">Rp{{ $post->price }}/Malam</h6>
                               <p class="card-text"><span class="class=bi bi-geo-alt"><a class="text-dark" href="/homestay/category/{{ $post->category->slug }}">{{$post->category->name }}</a></span></p>
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
             {{-- @else
               <p class="text-center fs-4">Homestay Not Found</p>
             @endif --}}
           </div>
       </div>
       {{-- div container --}}
   </section>
@endsection    

