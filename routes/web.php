<?php

use Illuminate\Support\Facades\Route;

app()->bind('contoh', function (){
    return new \App\Data\Tabungan();
});

Route::get('/', function () {
    // return view('welcome');
    dd(app('contoh'),app('contoh') );
});
