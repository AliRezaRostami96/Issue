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
    return view('pages/home');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/all-cards', function () {
    return view('pages/all-cards');
});

Route::get('/add-card', function () {
    return view('pages/add-card');
});

Route::get('/all-groups', function () {
    return view('pages/all-groups');
});

Route::get('/add-group', function () {
    return view('pages/add-group');
});

Route::get('/all-users', function () {
    return view('pages/all-users');
});

Route::get('/issue-cards', function () {
    return view('pages/issue-cards');
});

Route::get('/bulk-group', function () {
    return view('pages/bulk-group');
});
