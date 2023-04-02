<?php

/**
 * @Author Tuantq - quoctuanit2018@gmail.com
 * Add filament provider to customize something or add some logic, macro here
 */

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
        /**
         * If you want to customize theme and use this
         * uncomment this line
         */
        // Filament::registerViteTheme('resources/css/filament.css');


        /**
         * If you want to add some script or style to filament
         * uncomment this line which you want
         */
        // Filament::registerScripts([]);
        // Filament::registerStyles([]);

        /**
         * Add turbo js to this admin filament
         */
        Filament::registerScripts([app(Vite::class)('resources/js/filament-turbo.js')]);
    }
}
