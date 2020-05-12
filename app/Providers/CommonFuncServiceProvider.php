<?php

namespace App\Providers;

use App\Utils\CommonFunc;
use Illuminate\Support\ServiceProvider;

class CommonFuncServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('CommonFunc', function ($app) {
            return new CommonFunc($app);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
