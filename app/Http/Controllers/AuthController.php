<?php

namespace App\Http\Controllers;
class AuthController extends Controller
{
    public function login(){

        return view('pages..login');
    }

    public function register(){

        return view('pages..register');
    }
}
