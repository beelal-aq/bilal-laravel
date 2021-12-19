<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaCon;
use App\Http\Controllers\dosenCon;
use App\Http\Controllers\jadwalCon;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistCon;
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
    return view('home', [
        "title" => "home"
    ]);
});


Route::resource('mahasiswa', mahasiswaCon::class);
Route::resource('dosen', dosenCon::class);
Route::resource('jadwal', jadwalCon::class);

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'auth']);
Route::get('/register',[RegistCon::class, 'index']);
Route::post('/register',[RegistCon::class, 'store']);