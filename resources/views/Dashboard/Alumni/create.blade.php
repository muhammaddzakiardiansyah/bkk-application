@extends('Layouts.main2')

@section('container')
    <div class="row">
      <div class="col-md-8">
        <div class="alert bg-success">Form Alumni</div>
        <form action="{{ url('/alumni') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="nama_alumni" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_alumni" placeholder="Masukan nama" name="nama_alumni">
          </div>
          <div class="mb-3">
            <label for="images" class="form-label">Image</label>
            <input type="file" class="form-control" id="images" name="images">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
              <option selected>Pilih Jurusan</option>
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
              <option selected>Pilih Tahun Lulus</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
              <option selected>Pilih Status</option>
              <option value="Bekerja">Bekerja</option>
              <option value="Belum Bekerja">Belum Bekerja</option>
              <option value="Kuliah">Kuliah</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
@endsection