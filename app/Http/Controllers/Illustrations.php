<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetModel as AssetModel;

class Illustrations extends Controller
{
    public function __construct()
    {
        $this->AssetModel = new AssetModel();
    }

    public function index()
    {
        $data = [
            'aset' => $this->AssetModel->allDataIllustrations(),
            'listIllustrations' => $this->AssetModel->listIllustrations(),
        ];
        return view('illustrations.index', $data);
    }
}