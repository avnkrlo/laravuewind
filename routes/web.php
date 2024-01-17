<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::get('/', function(){
        return Inertia::render('Login');
    });

    Route::get('/register', function(){
        return Inertia::render('Register');
    });

    Route::post('/submit-register-form', [RegisterController::class, 'registerForm'])->name('registerForm');

    // Route::get('/register', function () {
    //     return Inertia::render('Register');
    // });

    Route::get('/dashboard', function(){
        return Inertia::render('Dashboard');
    });



// Route::resource('user', 'UserController');
