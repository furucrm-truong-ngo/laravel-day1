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

Route::get('foo', function () {
    return 'Hello World';
});


Route::get('{number}', function ($number) {
    return 'Your lucky number: ' . $number;
})->where('number', '[0-9]');

Route::get('/user1', function () {
    return view('user');
});
Route::post('/user1', 'UserRegistration@postRegister');

Route::get('/get-fibonacci-sequence', function (){
    return view('fibonacci');
});

Route::post('/get-fibonacci-sequence', 'FibonacciController@postFibonacci');

