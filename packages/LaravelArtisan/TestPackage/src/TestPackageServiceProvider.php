<?php

namespace LaravelArtisan\TestPackage;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadRoutesFrom(__DIR__.'/Http/web.php');
          $this->loadViewsFrom(__DIR__.'/resources/views/', 'TestPackage');
    

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
      
    }
}