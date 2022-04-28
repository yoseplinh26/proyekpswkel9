<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\ObatIkanController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChekoutController;
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

// Route::get('/forgot', function () {
//     return view('forgot');
// });

// Route::get('/serjarah', function () {
//     return view('forgot');
// });

// Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');

Route::post('/logout',[LogoutController::class,'logout'])->name('logout');
// // Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
// Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// // Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    
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

// Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/home',[HomeController::class,'home'])->name('home')->middleware('auth');;


Route::get('/sejarah',[SejarahController::class,'sejarah'])->name('sejarah');

Route::get('/obatikan',[ObatIkanController::class,'obatikan'])->name('obatikan');

Route::get('/',[IndexController::class,'index'])->name('index');

Route::get('/shop',[ShopController::class,'shop'])->name('shop');

Route::get('/detail',[DetailController::class,'detail'])->name('detail');


Route::get('/cart',[CartController::class,'cart'])->name('cart');


Route::get('/chekout',[ChekoutController::class,'chekout'])->name('chekout');

Route::get('/contac',[ContacController::class,'contac'])->name('contac');