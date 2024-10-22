<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return response('<h1>Hello</h1>')
    ->header('Content-type','text/plain')
    ->header('foo','bar');
});

Route::get('/item/{id}',function($id){
    return response("<h1>Item's id: {$id}</h1>");
})->where('id','[0-9]+');