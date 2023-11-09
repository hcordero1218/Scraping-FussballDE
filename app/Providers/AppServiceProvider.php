<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
    }
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
}
