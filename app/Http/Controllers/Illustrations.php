<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetModel as AsetModel;

class Illustrations extends Controller
{
    public function __construct()
    {
        $this->AsetModel = new AsetModel();
    }

    public function index()
    {
        $data = [
            'aset' => $this->AsetModel->allDataIllustrations(),
        ];
        return view('illustrations.index', $data);
    }
}