<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uikits extends Controller
{
    public function index()
    {
        return view('uikits.index');
    }
}