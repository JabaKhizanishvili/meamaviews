<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Social;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
//        View::composer('*', function ($view) {});
        View::composer('layouts.partials.footer', function ($view) {
            $view->with('socials', Social::where('is_active', true)->get());
        });
    }
}
