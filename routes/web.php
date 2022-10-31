<?php

use App\Http\Controllers\logincontroller;
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

/*Route::get('/', function () {
    return view('pengguna.login');
});

Route::post('/postlogin','logincontroller@postlogin')->name('postlogin');
*/
Route::get('/', function () {
    return view('layout.home');
});

Route::get('/home', function () {
  return view('layout.home');
});

Route::get('/sejarah', function () {
    return view('layout.sejarah');
});

Route::get('/Visimisi', function () {
    return view('layout.VM');
});

Route::get('/Aparatur', function () {
    return view('layout.Aparatur');
});

Route::get('/kontak', function () {
    return view('layout.kontak');
});

Route::get('/login',[logincontroller::class,'login']);
Route::post('/postlogin', [logincontroller::class, 'authenticate']);
Route::post('/logout', [logincontroller::class, 'logout']);
