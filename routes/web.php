<?php

use Illuminate\Support\Facades\Route;

app()->bind('contoh', function (){
    return new \App\Data\Tabungan();
});

Route::get('/', function () {
     return view('welcome');
    //dd(app('contoh'),app('contoh') );
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
