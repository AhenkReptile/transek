<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function home(){

        return view('pages.home');
    }

    public function checkout(){

        return view('pages.checkout');
    }
}
