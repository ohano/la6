<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

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
        //
        if(env('APP_DEBUG')){
            DB::listen(function($data) {
                $pdo = DB::connection()->getPdo();
                foreach ($data->bindings as $binding){
                    $sql = preg_replace('/\?/', $pdo->quote($binding), $data->sql, 1);
                }
                logger($sql ?? $data->sql, ['time'=>$data->time]);
            });
        }
    }
}
