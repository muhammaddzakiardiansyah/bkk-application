@extends('Layouts.main')

@section('container')
  <div class="row mt-5">
    <div class="head">
      <h1 class="text-center mb-5">Alumni Smk Syafii Akrom</h1>
      <div class="col-md-12">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      </div>
      <a href="{{ url('alumni/create') }}" class="btn btn-success mt-5">Form Alumni</a>
      <form action="{{ url('/alumni') }}" method="get" class="mt-3">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-dark" type="submit">Cari!!</button>
        </div>
      </form>
    </div>
  </div>
  <div class="card mt-5">
      <div class="row">
        @foreach ($alumnis as $alumni)
        <div class="col-lg-6">
          <div class="card mb-3 mt-5" style="max-width: 540px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/1500x1800" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Nama : {{ $alumni->nama_alumni }}</h5>
                <h5 class="card-text">Jurusan : {{ $alumni->jurusan }}</h5>
                <h5 class="card-text">Lulusan :{{ $alumni->thn_lulus }}</h5>
                <h5 class="card-text">Status : {{ $alumni->status }}</h5>
                <a href="{{ url('/alumni/' . $alumni->id) }}" class="badge bg-info text-decoration-none">Lihat Profil</a>
                </div>
            </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
  
@endsection