<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return view('Test');
});


Route::get('/accueil', function(){
    return view('accueil');
});

Route::get('contact', function (){
    return view('contact');
});

Route::get('about', function (){
    return view('about');
});
