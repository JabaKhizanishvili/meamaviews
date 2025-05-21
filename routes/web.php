<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ExternalAuthController;
use App\Http\Controllers\AdminLogoutController;
use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;

// admin routes

//logs
Route::post('/admin/logout', AdminLogoutController::class)
    ->name('filament.admin.auth.logout');


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
Route::get('/themes{search?}', [FrontEndController::class,'Themes'])->name('themes');
Route::get('/themes/{slug}', [FrontEndController::class,'SingleTheme'])->name('single.theme');
Route::get('/privacy_policy', [FrontEndController::class,'PrivacyPolicy'])->name('privacy.policy');
Route::get('/terms-of-service', [FrontEndController::class,'Terms'])->name('terms.service');


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
//    Route::get('/dashboard', [FrontEndController::class, 'dashboard'])->name('dashboard');

//    Route::get('/dashboard', [FrontEndController::class,'dashboard'])->name('dashboard');
//    Route::get('/billing', [FrontEndController::class, 'billing'])->name('billing');
//    Route::get('/profile', [FrontEndController::class,'profile'])->name('profile');
//    Route::get('/tables', [FrontEndController::class,'tables'])->name('tables');
//    Route::get('/laravel-user-profile', [FrontEndController::class,'user_profile'])->name('user-profile');
//    Route::get('/laravel-user-management', [FrontEndController::class, 'user_management'])->name('user-management');

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});

//for wrong route

Route::fallback(function () {
    return redirect()->route('custom.404');
});

Route::get('/not-found', function () {
    return view('pages.error-404');
})->name('custom.404');

Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'root'])->name('any');
