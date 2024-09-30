<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home','home');

Route::view('/ZZZZ','arif');

// for pass the value in url
Route::get('/about/{name}', function($name) {

    // echo $name;
    return view('about', ['name' => $name]);
});






