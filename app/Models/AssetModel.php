<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AssetModel extends Model
{
    public function allDataAsset()
    {
        return DB::table('aset')
            ->join('user', 'user.idUser', '=', 'aset.userID')
            ->get();
    }
    public function allDataUikits()
    {
        return DB::table('aset')->where('kategori', 'UI Kits')->get();
    }

    public function allDataIllustrations()
    {
        return DB::table('aset')->where('kategori', 'Illustrations')->get();
    }
}