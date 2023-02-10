@extends('Layouts.main2')

@section('container')
    <div class="row">
      <div class="col-md-8">
        <div class="alert bg-success">Form Alumni</div>
        <form action="{{ url('/alumni') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="nama_alumni" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_alumni" name="nama_alumni">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
              <option selected>Open this select menu</option>
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
              <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
              <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
              <option value="Tata Busana">Tata Busana</option>
              <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="thn_lulus" class="form-label">Lulusan</label>
            <select class="form-select" id="jurusan" name="thn_lulus">
              <option selected>Open this select menu</option>
              <option value="2021">2019</option>
              <option value="2021">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
@endsection