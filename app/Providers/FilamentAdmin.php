<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;

class FilamentAdmin extends ServiceProvider
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
        Filament::registerViteTheme('resources/css/filament.css');

        Filament::registerScripts([]);
        Filament::registerScripts([app(Vite::class)('resources/js/filament-turbo.js')]);

        Filament::registerStyles([]);
    }
}
