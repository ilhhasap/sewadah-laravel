<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel as UserModel;
use App\Models\AssetModel as AssetModel;

class Home extends Controller
{

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->AssetModel = new AssetModel();
    }

    public function index()
    {
        $data = [
            'allAsset' => $this->AssetModel->allDataAsset(),
        ];
        return view('home.index', $data);
    }

    public function detail($judul)
    {
        $data = [
            'detailAsset' => $this->AssetModel->detailAsset($judul),
        ];
        return view('detailAsset.index', $data);
    }



}