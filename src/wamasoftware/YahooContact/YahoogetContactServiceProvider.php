<?php

namespace Yahoocontact\Contact;

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
        //
//         include __DIR__.'/routes.php';
          $this->publishes([
            __DIR__ . '/config/config.php' => config_path('yahoo-Conatct-library.php'),
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
             $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'yahoo-Conatct-library.php');

             $this->app['yahoo'] = $this->app->share(function ($app)
        {
            // create oAuth instance
            $yahoo = new YahooContact();
            // return oAuth instance
            return $yahoo;
        });
    }
}
