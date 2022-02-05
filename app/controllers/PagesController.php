<?php

namespace App\Controllers;
use Core\Database\App;
// use App\Models\Post;

class PagesController
{
    public function index()
    {
        return view('homepage');
    }

    public function family()
    {
        return view('family');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function calendar()
    {
        return view('calendar');
    }
}