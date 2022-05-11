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

    public function eventsadmin()
    {
        return view('eventsadmin', [
            'title' => 'Events Admin',
            // 'active' => 'index'
        ]);
    }

    public function tiketadmin()
    {
        return view('tiketadmin', [
            'title' => 'Tiket Admin',
            // 'active' => 'index'
        ]);
    }

    public function podcast()
    {
        return view('podcast', [
            'title' => 'Podcast',
            // 'active' => 'index'
        ]);
    }

    public function notifkopi()
    {
        return view('notifkopi', [
            'title' => 'Notif Kopi',
            // 'active' => 'index'
        ]);
    }

}
