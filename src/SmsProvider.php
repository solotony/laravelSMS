<?php
namespace solotony\laravelsms;

use Illuminate\Support\ServiceProvider;
use solotony\laravelsms\Sms;
use Config;

class SmsProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!file_exists(base_path('config').'/sms.php'))
        {
            $this->publishes([
                __DIR__.'/config' => base_path('config'),
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['Sms'] = $this->app->singleton('Sms',function($app)
        {
            return new Sms();
        });
    }
}
