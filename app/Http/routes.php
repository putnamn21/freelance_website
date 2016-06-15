<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/animate3d', function() {
   return view('animate3d');
});

Route::get('/animate3d/download', function() {
   $path = public_path() . '/assets/animate3d.zip';
   return response()->download($path);
});

Route::get('hello/{name}', function($name){
   echo 'Hello There $name';
});