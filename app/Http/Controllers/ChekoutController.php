<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChekoutController extends Controller
{
    public function chekout()
    {
        return view('chekout', [
            'title' => 'chekout',
            // 'active' => 'login'
        ]);
    }
}
