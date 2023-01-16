<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('guest.home');
    }

    public function news() {
        return view('guest.news');
    }

    public function contacts() {
        return view('guest.contacts');
    }
}
