<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/email/verify', function() {
    return Redirect::route('login')
    ->with('status', '登録したメールアドレスを確認してください。');
})->name('verification.notice');

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware(['auth', 'verified']);