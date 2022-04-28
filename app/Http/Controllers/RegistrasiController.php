<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

// use App\Models\User;
class RegistrasiController extends Controller
{   
    public function index()
    {
        return view('registrasi.registrasi', [
            'title' => 'Registrasi',
        ]);
    }
    public function forgot()
    {
        return view('registrasi.forgot', [
            'title' => 'Forgot Password',
        ]);
    }

    // public function postregistrasi()
    // {
    //     return view('registrasi',[
    //         'title' => 'Registrasi',
    //         'active' => 'register',
    //     ])
    // }
    public function postregistrasi(Request $request){
        $messages = [
            'name' => ':attribute harus diisi minimal :min karakter!!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            // 'required' => ':attribute wajib diisi cuy!!!',
            // 'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            // 'password' => 'password wajib di isi!!',
            
            'email' => 'email telah di gunakan :masukkan email yang baru'
        ];
        $this->validate($request,[
            'name' => 'required|min:5|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => ['required',  Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols()
            ->uncompromised()],

            // 'passwword' => 'required',
        ],$messages);

        // $request->validate([
        //     'nama' => 'required|min:5|max:20',
        //     'email' => 'required|email:dns|unique:users',
        //     'passwword' => 'required',
           
        // ],$messages);
            // ...
        user::create([
            'name' => $request->name,
            'level' => 'karyawan',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => str::random(60),
        ]);
        return redirect('/login')->with('success', 'Registration successful! Please Login');

    }
}
