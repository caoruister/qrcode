<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function signup() {
        return view('signup');
    }

    public function signin() {
        return view('signin');
    }
}
