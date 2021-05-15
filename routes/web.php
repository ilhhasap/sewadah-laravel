<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Uikits;
use App\Http\Controllers\Illustrations;
use App\Http\Controllers\Pricing;
use App\Http\Controllers\Ourteam;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Admin;


Route::get('/', [Home::class, 'index']);
Route::get('/detail/{judul:slug}', [Home::class, 'detail']);
Route::get('/ui-kits', [Uikits::class, 'index']);
Route::get('/illustrations', [Illustrations::class, 'index']);
Route::get('/pricing', [Pricing::class, 'index']);
Route::get('/our-team', [Ourteam::class, 'index']);
Route::get('/wadah_saya', [Admin::class, 'index']);
Route::get('/wadah_saya/ui-kits', [Admin::class, 'uikits']);

Route::get('/auth', [Auth::class, 'index']);
Route::get('/auth/login', [Auth::class, 'login']);
Route::get('/auth/signup', [Auth::class, 'signup']);
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');