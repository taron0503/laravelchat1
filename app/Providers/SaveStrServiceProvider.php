<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\SaveEloquent;
use App;

class SaveStrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Helpers\Contracts\SaveStr', function(){
            return new SaveEloquent();
        });

        App::singleton('save', function(){
            return new SaveEloquent();
        });
    }
}
