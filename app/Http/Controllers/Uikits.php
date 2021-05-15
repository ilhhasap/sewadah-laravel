<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetModel as AssetModel;

class Uikits extends Controller
{
    public function __construct()
    {
        $this->AssetModel = new AssetModel();
    }

    public function index()
    {
        $data = [
            'aset' => $this->AssetModel->allDataUikits(),
            'listUikits' => $this->AssetModel->listUikits(),
        ];
        return view('uikits.index', $data);
    }
}