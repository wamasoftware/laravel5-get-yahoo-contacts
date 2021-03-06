<?php

namespace wamasoftware\YahooContact;

use Illuminate\Support\ServiceProvider;

class YahoogetContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
 	$this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('laravel5-yahoo-contact-library.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //register our controller

          $this->app['yahoo'] = $this->app->share(function ($app)
        {
            // create oAuth instance
            $yahoo = new YahooContact();
            // return oAuth instance
            return $yahoo;
        });
    }
}
