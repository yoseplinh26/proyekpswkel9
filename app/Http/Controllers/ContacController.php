<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContacController extends Controller
{
    public function contac()
    {
        return view('contac', [
            'title' => 'Shop',
            // 'active' => 'login'
        ]);
    }
}
