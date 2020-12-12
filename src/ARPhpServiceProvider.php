<?php

namespace Okasha\Arabic;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;
use Okasha\Arabic\Arabic;

class ARPhpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('okasha.arabic', function (Container $app) {
            return new Arabic( 'Numbers' );
        });

        $this->app->alias('Arabic', Arabic::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
