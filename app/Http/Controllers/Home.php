<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel as UserModel;

class Home extends Controller
{

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'user' => $this->UserModel->allData(),
        ];
        return view('home.index', $data);
    }
}