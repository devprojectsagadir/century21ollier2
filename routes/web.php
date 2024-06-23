<?php
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

Route::get('/login', function () {
    return view('auth/login');;
});
