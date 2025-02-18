<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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


Route::get('jobs/{id}', function ($id) {

    $jobs =[
        [
            'id' => 1,
            'title'=> 'Teacher',
            'salary' => '50000€',
        ],
        [
            'id' => 2,
            'title'=> 'Developper',
            'salary' => '40000€',
        ],
        [
            'id' => 3,
            'title'=> 'Waiter',
            'salary' => '20000€',
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] === $id);

    return view('job', ['job' => $job] );

});
