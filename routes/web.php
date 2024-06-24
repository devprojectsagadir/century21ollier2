<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('landing');;
});


Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {

    /*Route::get('/login', function () {
        return view('auth.login');
     })->name('login')->middleware(['guest']);


     Route::get('/register', function () {
        return view('auth.register');
     })->name('register')->middleware(['guest']);

     Route::post('/register',function(){
        return redirect('/home');
     })->name('register')->middleware(['guest']);
*/
    Route::get('/home', function(){
        dd(\Illuminate\Support\Facades\Auth::user());
    })->middleware(['auth']);
});


