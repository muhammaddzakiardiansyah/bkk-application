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
       <form action="{{ url('/logout') }}" method="post">
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
             <a class="nav-link active" aria-current="page" href="{{ url('/pageadmin') }}">
               <span data-feather="home" class="align-text-bottom"></span>
               Dashboard
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/pageadmin/alumni') }}">
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
         <h1 class="h2">Selamat datang {{ auth()->user()->username }}</h1>
         <div class="btn-toolbar mb-2 mb-md-0">
           <div class="btn-group me-2">
             <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
             <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
           </div>
           <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
             <span data-feather="calendar" class="align-text-bottom"></span>
             This week
           </button>
         </div>
       </div>
 
       <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
 
       <h2>Section title</h2>
       <div class="table-responsive">
         <table class="table table-striped table-sm">
           <thead>
             <tr>
               <th scope="col">#</th>
               <th scope="col">Header</th>
               <th scope="col">Header</th>
               <th scope="col">Header</th>
               <th scope="col">Header</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1,001</td>
               <td>random</td>
               <td>data</td>
               <td>placeholder</td>
               <td>text</td>
             </tr>
             <tr>
               <td>1,002</td>
               <td>placeholder</td>
               <td>irrelevant</td>
               <td>visual</td>
               <td>layout</td>
             </tr>
           </tbody>
         </table>
       </div>
     </main>
   </div>
 </div>
@endsection