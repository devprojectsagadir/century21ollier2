<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('landing');;
});

Route::get('/login', function () {
    return view('auth.login');
 })->name('login');


 Route::get('/register', function () {
    return view('auth.register');
 })->name('register');


Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {

    Route::get('/home', function(){
        dd(\Illuminate\Support\Facades\Auth::user());
    })->middleware(['auth']);
});


