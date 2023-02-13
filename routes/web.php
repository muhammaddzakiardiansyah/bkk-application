<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PageAdminController;
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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/pageadmin', [PageAdminController::class, 'index'])->middleware('auth');

Route::get('/pageadmin/alumni', [PageAdminController::class, 'alumni'])->middleware('auth');

Route::resource('/alumni', AlumniController::class);

Route::resource('/loker', LokerController::class);
