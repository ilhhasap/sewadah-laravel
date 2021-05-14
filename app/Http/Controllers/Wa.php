<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\AsetModel as AsetModel;

class Wa extends Controller
{

    public function index()
    {
        return view('login.index');
    }
    public function login()
    {
        return view('login.index');
    }
    public function signup()
    {
        return view('signup.index');
    }
}