<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Uikits;
use App\Http\Controllers\Illustrations;
use App\Http\Controllers\Pricing;
use App\Http\Controllers\Ourteam;


Route::get('/', [Home::class, 'index']);
Route::get('/ui-kits', [Uikits::class, 'index']);
Route::get('/illustrations', [Illustrations::class, 'index']);
Route::get('/pricing', [Pricing::class, 'index']);
Route::get('/our-team', [Ourteam::class, 'index']);
Route::get('/auth', [Ourteam::class, 'index']);
Route::get('/auth/login', [Auth::class, 'login']);
Route::get('/auth/signup', [Auth::class, 'index.signup']);