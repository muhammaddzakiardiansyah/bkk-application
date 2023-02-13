@extends('Layouts.main')

@section('container')
<div class="col-md-4 mt-5">
    <div class="card mb-3" style="width: 21rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $loker->perusahaan->perusahaan }}</h5><small> create at {{ $loker->created_at->diffForHumans() }}</small>
        </div>
        <img src="{{ asset('storage/'.$loker->image) }}" class="card-img-top" alt="foto loker">
        <div class="card-body">
          <h6 class="card-title">{{ $loker->judul_loker }}</h6>
          <p class="card-text">{!! $loker->slug !!}</p>
          <p class="card-text">{!! $loker->deskripsi !!}</p>
          <a href="{{ url('/loker') }}" class="badge bg-warning text-decoration-none">Kembali</a>
        </div>
      </div>
</div>
@endsection