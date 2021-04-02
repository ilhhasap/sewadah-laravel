<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pricing extends Controller
{
    public function index()
    {
        return view('pricing.index');
    }
}
