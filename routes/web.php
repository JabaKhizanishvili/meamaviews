<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FrontEndController;

Route::get('', [RoutingController::class, 'index'])->name('root');
Route::get('/home', fn() => view('index'))->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login',[RegisterController::class,'loginIndex'])->name('login.index');
Route::post('login',[RegisterController::class,'LoginAction'])->name('login.action');
Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [FrontEndController::class,'dashboard'])->name('dashboard');
});


Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'root'])->name('any');
