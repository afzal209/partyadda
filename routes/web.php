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
    return view('home');
});

Route::get('/overview', function () {
    return view('overview');
});


Route::get('/select-occasion', function () {
    return view('select-occasion');
});

Route::get('/select-cake', function () {
    return view('select-cake');
});

Route::get('/select-decoration', function () {
    return view('select-decoration');
});


