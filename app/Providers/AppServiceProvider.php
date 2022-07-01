<?php

namespace App\Providers;

use App\Strategy\SmsChannels\Drivers\kavengar;
use App\Strategy\SmsChannels\Drivers\Smsir;
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
        $this->app->bind('App\Strategy\SmsChannels\SmsChannelsInterface', function() {
            return new kavengar;
            //return new Smsir;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
