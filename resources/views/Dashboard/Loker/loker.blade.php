@extends('Layouts.main')

@section('container')
    <div class="head">
      <h1 class="text-center mt-5">Lowongan Pekerjaan</h1>
    </div>
    <div class="search">
       <form action="{{ url('/loker') }}" method="get" class="mt-5">
        <div class="input-group mb-3">
          <input type="search" placeholder="Cari Loker" class="form-control" name="search" value="{{ request('search') }}">
          <button class="btn btn-dark" type="submit">Cari</button>
        </div>
      </form>
    </div>
    <div class="card">
        <div class="row mt-4">
          @foreach ($lokers as $loker)
            <div class="col-md-3">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $loker->perusahaan->perusahaan }}</h5><small> create at {{ $loker->created_at->diffForHumans() }}</small>
                    </div>
                    <img src="https://source.unsplash.com/1500x800" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title">{{ $loker->judul_loker }}</h6>
                      <p class="card-text">{!! $loker->deskripsi !!}</p>
                      <a href="{{ url('/loker/' . $loker->id) }}" class="badge bg-primary text-decoration-none">Selengkapnya</a>
                    </div>
                  </div>
            </div>
          @endforeach
        </div>
    </div>
@endsection