<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
//use Filament\Http\Responses\Auth\Contracts\LogoutResponse;
//use App\Filament\Responses\CustomLogoutResponse;
use Illuminate\Support\Facades\Event;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
//        $this->app->bind(LogoutResponse::class, CustomLogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('tiktok', \SocialiteProviders\TikTok\Provider::class);
        });

        Filament::serving(function () {
            Filament::registerNavigationItems([
                NavigationItem::make('System Logs')
                    ->url(route('filament.logs'), shouldOpenInNewTab: true)
                    ->icon('heroicon-o-presentation-chart-line')
                    ->activeIcon('heroicon-s-presentation-chart-line')
                    ->group('Reports')
                    ->sort(3),
            ]);
        });
    }
}
