@extends('Layouts.main')

@section('container')
<div class="row mt-5">
  @foreach ($alumnis as $alumni)
    <div class="col-md-3">
        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><strong>Nama :</strong> {{$alumni->nama_alumni }}</h5>
              <h5 class="card-title"><strong>Jurusan :</strong> {{ $alumni->jurusan }}</h5>
              <h5 class="card-title"><strong>Lulus :</strong> {{ $alumni->thn_lulus }}</h5>
              <h5 class="card-title mb-3"><strong>Status :</strong> {{ $alumni->status }}</h5>
              <a href="#" class="card-link text-decoration-none badge bg-info ">Show detail</a>
            </div>
        </div>
    </div>
  @endforeach
</div>
  
@endsection