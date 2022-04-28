<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'home',
            'active' => 'home'
        ]);
    }
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }    

    // public function index(){

    //     $data['categories']=Category::inRandomOrder()->get();
 
    //    return view('front.layouts.homepage',$data);
    //  }

    // public function home(){

    //     $data['home']=Category::inRandomOrder()->get();
 
    //    return view('home',$data);
    //  }

    // public function home(){

    //     $data['categories']=Category::inRandomOrder()->get();
 
    //    return view('/home',$data);
    //  }

    // public function index(){

    //     $data['categories']=Category::inRandomOrder()->get();
 
    //    return view('front.layouts.homepage',$data);
    //  }

}
