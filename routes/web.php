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
use App\Http\Controllers\BelajarController;


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
Route::get('/tiketadmin',[IndexController::class,'tiketadmin'])->name('tiketadmin');
Route::get('/notifkopi',[IndexController::class,'notifkopi'])->name('notifkopi');
Route::get('/events',[IndexController::class,'events'])->name('events');
Route::get('/eventsadmin',[IndexController::class,'eventsadmin'])->name('eventsadmin');
Route::get('/team',[IndexController::class,'team'])->name('team');
Route::get('/podcast',[IndexController::class,'podcast'])->name('podcast');

// unutk menampilkan dan mengirim data lewat url 
// contoh : /aktivitas?kodePemda=2&key=yerivbrebvuiberui
Route::get('/test', [BelajarController::class, 'index']);
//untuk menampilkan dan mengirim data lewat form-body
Route::post('/test', [BelajarController::class, 'store']);

// // untuk edit data
// Route::put();

// // untuk menghapus data
// Route::delete();

 // role untuk admin 
            // klo misalnya dicek role == 'admin'
            // bawa ke route->redirect('/admin/dashboard')
            
            //role untuk mahasiswa
            // klo misalnya dicek role == 'mahasiswa'
            // bawa ke route->redirect('/dashboard')

            // buat 2 halaman loginn
            // untuk user
            // nama route : /login
            // untuk admin
            // nama route : /admin/login

Route::prefix('admin')->group(function () {
    
//  Route::get('/dashboard', AdminController::index);
// ke rount /admin/dashboard

//  Route::get('/login', AdminController::login);
// ke rount /admin/login

});

// bkin table baru untuk akun admin





