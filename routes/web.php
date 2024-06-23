<?php
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return "sqd";
});

Route::get('/login', function () {
    return view('auth/login');;
});
