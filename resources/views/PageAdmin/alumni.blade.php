@extends('Layouts.dashboard')

@section('container')
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">BKK Syafii Akrom</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button class="d-flex btn btn-dark" type="submit">Logout</button>
       </form>
      </div>
    </div>
  </header>
  
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ url('/pageadmin') }}">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="file" class="align-text-bottom"></span>
                Data Alumni
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                Data Loker
              </a>
            </li>
          </ul>
  
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Last quarter
              </a>
            </li>
          </ul>
        </div>
      </nav>
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Data Alumni</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
             <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Alumni</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="">
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
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
  
        <h2>Data Alumni Terbaru</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Tahun Lulus</th>
                <th scope="col">Status</th>
                <th scope="col">Dibuat Pada</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($alumnis as $alumni)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $alumni->nama_alumni }}</td>
                    <td>{{ $alumni->jurusan }}</td>
                    <td>{{ $alumni->thn_lulus }}</td>
                    <td>{{ $alumni->status }}</td>
                    <td>{{ $alumni->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="" class="badge bg-warning text-decoration-none">ed</a>
                        <form action="" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="badge bg-danger border-0">del</button>
                        </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
@endsection