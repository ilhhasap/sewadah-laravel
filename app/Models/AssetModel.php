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

    public function joinUikitsAndUser()
    {
        return DB::table('aset')
        ->join('user', 'user.idUser', '=', 'aset.userID')
        ->where('kategori', 'UI Kits')
        ->get();
    }

    public function allDataUikits()
    {
        return DB::table('aset')->where('kategori', 'UI Kits')->get();
    }

    public function listAllAsset()
    {
        return DB::table('aset')
        ->count();
    }

    public function listUikits()
    {
        return DB::table('aset')
        ->where('kategori', 'UI Kits')
        ->count();
    }
    
    public function allDataIllustrations()
    {
        return DB::table('aset')->where('kategori', 'Illustrations')->get();
    }

    public function listIllustrations()
    {
        return DB::table('aset')
            ->where('kategori', 'Illustrations')
            ->count();
    }

    // public function detailAsset()
    // {
    //     return DB::table('aset')
    //         ->where('name', 'John')
    //         ->first();

    // }



}