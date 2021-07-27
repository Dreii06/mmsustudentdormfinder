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
    return view('welcome');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/profilestudent', function () {
    return view('profilestudent');
});

Route::get('/dorm', function () {
    return view('dorm');
});
Route::get('/oncampus', function () {
    return view('oncampus');
});

Route::get('/offcampus', function () {
    return view('offcampus');
});

Route::get('/applicationlist', function () {
    return view('applicationlist');
});

Route::get('/home', function () {
    return view('home');
});