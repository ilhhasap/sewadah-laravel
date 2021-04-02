<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('/ui-kits', function () {
    return view('uikits.index');
});
Route::get('/illustrations', function () {
    return view('illustrations.index');
});
Route::get('/pricing', function () {
    return view('pricing.index');
});
Route::get('/our-team', function () {
    return view('ourteam.index');
});