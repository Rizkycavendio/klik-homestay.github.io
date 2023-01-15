@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Data Homestay</h1>
  </div>

  <div class="col-lg-8 card shadow p-3 border-0">
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="">
        <label for="title" class="form-label">Nama Homestay: </label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label"></label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Foto Homestay: </label>
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block rounded">
        @else
        <img class="img-preview img-fluid mb-3 col-sm-5 rounded">
        @endif
        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Biaya sewa per-malam: </label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $post->price) }}">
        @error('price')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="ukuranKamar" class="form-label">Ukuran Kamar: </label>
        <input type="text" class="form-control @error('ukuranKamar') is-invalid @enderror" id="ukuranKamar" name="ukuranKamar" value="{{ old('ukuranKamar', $post->ukuranKamar) }}">
        @error('ukuranKamar')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlahKasur" class="form-label">Jumlah Kasur: </label>
        <input type="text" class="form-control @error('jumlahKasur') is-invalid @enderror" id="jumlahKasur" name="jumlahKasur" value="{{ old('jumlahKasur', $post->jumlahKasur) }}">
        @error('jumlahKasur')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="kamarMandi" class="form-label">Kamar Mandi: </label>
        <input type="text" class="form-control @error('kamarMandi') is-invalid @enderror" id="kamarMandi" name="kamarMandi" value="{{ old('kamarMandi', $post->kamarMandi) }}">
        @error('kamarMandi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="wifi" class="form-label">Wifi: </label>
        <input type="text" class="form-control @error('wifi') is-invalid @enderror" id="wifi" name="wifi" value="{{ old('wifi', $post->wifi) }}">
        @error('wifi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="ac" class="form-label">AC: </label>
        <input type="text" class="form-control @error('ac') is-invalid @enderror" id="ac" name="ac" value="{{ old('ac', $post->ac) }}">
        @error('ac')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="hiburan" class="form-label">Hiburan: </label>
        <input type="text" class="form-control @error('hiburan') is-invalid @enderror" id="hiburan" name="hiburan" value="{{ old('hiburan', $post->hiburan) }}">
        @error('hiburan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="room" class="form-label">Pilih Jenis Kamar: </label>
        <select class="form-select" name="room_id">
          @foreach ($rooms as $room)
            @if (old('room_id')==$room->id)
             <option value="{{ $room->id }}" selected>{{ $room->name }}</option>   
            @else    
             <option value="{{ $room->id }}">{{ $room->name }}</option>    
            @endif
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Pilih Lokasi Homestay: </label>
        <select class="form-select" name="category_id">
          @foreach ($categories as $category)
            @if (old('category_id', $post->category_id)==$category->id)
             <option value="{{ $category->id }}" selected>{{ $category->name }}</option>   
            @else    
             <option value="{{ $category->id }}">{{ $category->name }}</option>    
            @endif
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Deskripsi Homestay: </label>
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
        <p class="text-danger"> {{ $message }}</p>
        @enderror
      </div>
     
      <button type="submit" class="btn btn-success">Update Homestay</button>
    </form>
  </div>

  <script>
     const title = document.querySelector('#title');
     const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
         .then(response => response.json())
         .then(data => slug.value = data.slug)
    });

    //untuk logic dari preview gambar image
    function previewImage(){

     const image = document.querySelector('#image');
     const imgPreview = document.querySelector('.img-preview'); 

     imgPreview.style.display = 'block';

     const oFReader = new FileReader();
     oFReader.readAsDataURL(image.files[0]);

     oFReader.onload = function(oFREvent){
       imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection
