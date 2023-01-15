@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Homestay</h1>
</div> 
{{-- menampilkan alert berhasil buat post baru --}}
@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="col-lg-8 mb-3">
  <a class="btn btn-primary" href="/dashboard/posts/create">Tambah Data</a>
</div>
<div class="card shadow border-0 col-lg-8">
  <div class="table-responsive">
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Homestay:</th>
            <th scope="col">Lokasi:</th>
            <th scope="col">Jenis Kamar:</th>
            <th scope="col">Harga Sewa:</th>
            <th scope="col">Tanggal dibuat:</th>
            <th scope="col">Action:</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)    
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td>{{ $post->room->name }}</td>
              <td>{{ $post->price }}</td>
              <td>{{ $post->created_at }}</td>
              <td>
                  <a class="badge bg-white text-info" href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye" class="align-text-bottom"></span></a>
                  <a class="badge bg-white text-success" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit" class="align-text-bottom"></span></a>
                  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="border-0 text-danger bg-white" onclick="return confirm('Yakin ingin dihapus?')"><span data-feather="trash-2" class="align-text-bottom"></span></button>
                  </form>
              </td>
              </td>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
  </div>
</div>
@endsection

