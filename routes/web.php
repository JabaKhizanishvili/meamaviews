<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ExternalAuthController;


// admin routes

//logs


Route::middleware(['auth:admin'])
    ->prefix('admin/logs')
    ->group(function () {
        Route::get('/', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])
            ->name('filament.logs');
    });



Route::get('', [RoutingController::class, 'index'])->name('root');
Route::get('/home', fn() => view('index'))->name('home');
Route::get('/about', [FrontEndController::class,'About'])->name('about');
Route::get('/contact', [FrontEndController::class,'Contact'])->name('contact');


Route::middleware('guest')->group(function () {

    // Socialite
    Route::get('auth/google', [ExternalAuthController::class, 'redirectToProvider'])->name('external.social.redirect');
//        Route::get('auth/{provider}/callback', [ExternalAuthController::class, 'handleProviderCallback'])->name('external.social.callback');
    Route::get('auth/google/callback', [ExternalAuthController::class, 'callback'])->name('external.social.callback');

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
//    Route::get('/login', [RegisterController::class, 'loginIndex'])->name('login');
    Route::get('/login', [RegisterController::class, 'loginIndex'])->name('login');
    Route::post('/login', [RegisterController::class, 'LoginAction'])->name('login.action');

//    forget password
    Route::get('/forgot-password', [RegisterController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [RegisterController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [RegisterController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [RegisterController::class, 'reset'])->name('password.update');


});

Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', [FrontEndController::class,'dashboard'])->name('dashboard');
//});


Route::middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [FrontEndController::class, 'dashboard'])->name('dashboard');
});

Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'root'])->name('any');
