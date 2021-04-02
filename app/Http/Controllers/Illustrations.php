<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Illustrations extends Controller
{
    public function index()
    {
        return view('illustrations.index');
    }
}