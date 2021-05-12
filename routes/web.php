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

Route::post('/paymentes/pay', 'PaymentController@pay')->name('pay');
Route::get('/paymentes/approval', 'PaymentController@approval')->name('approval');
Route::get('/paymentes/cancelled', 'PaymentController@cancelled')->name('cancelled');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
