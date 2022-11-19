<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ChatController;
use Illuminate\Support\Facades\Auth;

// Registration Routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

// Log in Log Out
Route::get('/log-in', [LoginController::class, 'index'])->name('login');
Route::post('/log-in', [LoginController::class, 'store'])->name('login');
Route::get('/log-out', [LoginController::class, 'logout'])->name('logout');

// User Routes
Route::middleware('user')->group(function () {
    Route::get('/Chatroom', [ChatController::class, 'index'])->name('chat');
    Route::post('/Chatroom', [ChatController::class, 'send'])->name('chat');
});


// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/test', function() {
    
// });