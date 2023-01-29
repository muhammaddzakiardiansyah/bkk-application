<?php

use App\Models\Alumni;
use App\Models\Loker;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Dashboard.index', [
        'active' => 'home'
    ]);
});

Route::get('/alumni', function () {
    return view('Dashboard.alumni', [
        'active' => 'alumni',
        'alumnis' => Alumni::all()
    ]);
});

Route::get('/loker', function () {
    return view('Dashboard.loker', [
        'active' => 'loker',
        'lokers' => Loker::all()
    ]);
});
