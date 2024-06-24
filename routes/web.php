<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('landing');;
});

Route::get('/home', function(){
    dd(\Illuminate\Support\Facades\Auth::user());
});
