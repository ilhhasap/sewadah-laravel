<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;
use App\Models\UserModel as ModelsUserModel;

class Home extends Controller
{

    public function __construct()
    {
        $this->UserModel = new ModelsUserModel();
    }

    public function index()
    {
        $data = [
            'user' => $this->UserModel->allData(),
        ];
        return view('home.index', $data);
    }
}