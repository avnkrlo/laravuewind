<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
// use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    Route::middleware('guest')->group(function(){
        // Route::get('/', function(){
        // return Inertia::render('Login');
        // });
        Route::get('/', [LoginController::class, 'Login'])->name('login');

        Route::get('/register', function(){
            return Inertia::render('Register');
        });

        Route::post('/submit-register-form', [RegisterController::class, 'registerForm'])->name('registerForm');
    });

    Route::middleware('auth')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->middleware(['auth'])->name('dashboard');
    });
    // Route::get('/register', function () {
    //     return Inertia::render('Register');
    // });





// Route::resource('user', 'UserController');
