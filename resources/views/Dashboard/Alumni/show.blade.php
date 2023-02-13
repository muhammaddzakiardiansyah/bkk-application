@extends('Layouts.main')

@section('container')
    <div class="card mb-3 mt-5" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('storage/'.$alumni->images) }}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Nama : {{ $alumni->nama_alumni }}</h5>
            <h5 class="card-text">Jurusan : {{ $alumni->jurusan }}</h5>
            <h5 class="card-text">Lulusan :{{ $alumni->thn_lulus }}</h5>
            <h5 class="card-text">Status : {{ $alumni->status }}</h5>
            <p class="card-text"><small class="text-muted">{{ $alumni->created_at->diffForHumans() }}</small></p>
            <a href="{{ url('/alumni') }}" class="badge bg-warning mt-2 text-decoration-none">Kembali</a>
            </div>
        </div>
        </div>
    </div>
@endsection