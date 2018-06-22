<?php

namespace panaseo\csvSeeder;

use Illuminate\Support\ServiceProvider;

class csvSeederServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(Helper::PackBase("routes/routes.php"));
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
}