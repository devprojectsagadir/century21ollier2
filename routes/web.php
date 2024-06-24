<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('landing');;
});

Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {

    // with fortify guest middleware
    Route::get('/login', function () {
       return 'Foo';
    })->middleware(['guest']);

    // with fortify auth middleware
    Route::get('/regiser', function () {
       return 'bar';
    }) ->middleware(['guest']); // fortify auth middleware

});

Route::get('/home', function(){
    dd(\Illuminate\Support\Facades\Auth::user());
});
