<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// --- Solution: Specified kew  was too long: max  key length is 767 bytes
use Illuminate\Support\facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // --- Solution: Specified kew  was too long: max  key length is 767 bytes
        Schema::defaultStringLength(191);
    }
}
