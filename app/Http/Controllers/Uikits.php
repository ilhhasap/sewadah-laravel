<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetModel as AsetModel;

class Uikits extends Controller
{
    public function __construct()
    {
        $this->AsetModel = new AsetModel();
    }

    public function index()
    {
        $data = [
            'aset' => $this->AsetModel->allDataUikits(),
        ];
        return view('uikits.index', $data);
    }
}