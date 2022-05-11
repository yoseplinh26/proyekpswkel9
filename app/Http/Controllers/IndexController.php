<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Home',
            // 'active' => 'index'
        ]);
    }

    public function ticket()
    {
        return view('tiket', [
            'title' => 'Ticket',
            // 'active' => 'index'
        ]);
    }
    public function events()
    {
        return view('events', [
            'title' => 'Events',
            // 'active' => 'index'
        ]);
    }
    public function team()
    {
        return view('team', [
            'title' => 'Team',
            // 'active' => 'index'
        ]);
    }

    public function muscor()
    {
        return view('muscor', [
            'title' => 'Muscor',
            // 'active' => 'index'
        ]);
    }
}
