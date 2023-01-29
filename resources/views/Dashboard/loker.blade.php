@extends('Layouts.main')

@section('container')
    <div class="row mt-4">
      @foreach ($lokers as $loker)
        <div class="col-md-3">
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $loker->perusahaan->perusahaan }}</h5>
                </div>
                <img src="https://source.unsplash.com/1500x800" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Backend Developer</h6>
                  <p class="card-text">{!! $loker->deskripsi !!}</p>
                  <a href="#" class="badge bg-primary text-decoration-none">Selengkapnya</a>
                </div>
              </div>
        </div>
      @endforeach
    </div>
@endsection