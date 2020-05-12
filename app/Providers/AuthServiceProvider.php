<?php

namespace App\Providers;

use DebugBar\DebugBar;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
        Gate::before(function ($user, $ability) {
            \Barryvdh\Debugbar\Facade::info($user->name);
            return $user->hasRole('Super-Admin') ? true : null;
        });
    }
}
