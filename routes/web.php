<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listings',function(){
    return view('listings',[
        'header'=>'Latest Heading',
        'listings'=>[
            [
                'name' => 'John Wikes Booth',
                'age'=>42
            ],
            [
                'name' => 'John Wikes Booth 2',
                'age'=>30
            ]
        ]
    ]);
});
