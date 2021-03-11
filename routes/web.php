<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
});

route::get('/about-us', function(){
    return view('pages/about-us');
});
