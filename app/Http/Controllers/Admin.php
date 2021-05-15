<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel as UserModel;
use App\Models\AssetModel as AssetModel;

class Admin extends Controller
{

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->AssetModel = new AssetModel();
    }

    public function index()
    {
        $data = [
            'listAllAsset' => $this->AssetModel->listAllAsset(),
            'listUikits' => $this->AssetModel->listUikits(),
            'listIllustrations' => $this->AssetModel->listIllustrations(),
        ];
        return view('admin.index', $data);
    }

    public function uikits()
    {
        $data = [
            'allDataUikits' => $this->AssetModel->allDataUikits(),
            'joinUikitsAndUser' => $this->AssetModel->joinUikitsAndUser(),
        ];

        return view('admin.uikits', $data);
    }

    // public function detail($judul)
    // {
    //     $data = [
    //         'detailAsset' => $this->AssetModel->detailAsset($judul),
    //     ];
    //     return view('detailAsset.index', $data);
    // }
}
