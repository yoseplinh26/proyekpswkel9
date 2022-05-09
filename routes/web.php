<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\UserController;

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
// Route::get('/home', function () {
//     return view('/home');
// });

// Route::get('/', function () {
//     return view('/beranda');
// });



// Route::get('/login', function () {
//     return view('login', ["title"=>"Login"]);
// });

// Route::get('/registrasi', function () {
//     return view('registrasi', ["title"=>"Registrasi"]);
// });


// Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');

Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

    
// // });
// route::get('/home',[HomeController::class,'index']) -> name('home');

// Route::post('/postregistrasi',[RegistrasiController::class,'store'])->name('postregistrasi');
Route::get('/registrasi',[RegistrasiController::class,'index'])->name('registrasi')->middleware('guest');
Route::post('/postregistrasi',[RegistrasiController::class,'postregistrasi'])->name('postregistrasi');

Route::get('/forgot',[RegistrasiController::class,'forgot'])->name('forgot');
// Route::get('/registrasi',[RegistrasiController::class,'registrasi'])->name('registrasi');
// Route::post('/simpanregistrasi',[RegistrasiController::class,'simpanregistrasi'])->name('simpanregistrasi');

// Route::get('/home',[HomeController::class,'home'])->name('home');

// Route::get('/',[BerandaController::class,'beranda'])->name('beranda')->middleware('auth');



Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/tiket',[IndexController::class,'ticket'])->name('tiket');
Route::get('/events',[IndexController::class,'events'])->name('events');
Route::get('/team',[IndexController::class,'team'])->name('team');