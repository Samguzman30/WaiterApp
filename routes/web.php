<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;



Route::get('/', function () {
    return view('auth.session');
});

Route::get('/register', [RegisterController::class, 'create'])
             ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
             ->name('register.store');             

Route::get('/login', [SessionController::class, 'create'])
            ->name('login.index');

 Route::post('/login', [SessionController::class, 'store'])
            ->name('login.store');            
