<?php

namespace App\Modules\Manage\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('manage', 'Resources/Lang', 'app'), 'manage');
        $this->loadViewsFrom(module_path('manage', 'Resources/Views', 'app'), 'manage');
        $this->loadMigrationsFrom(module_path('manage', 'Database/Migrations', 'app'));
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('manage', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('manage', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
