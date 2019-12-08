<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\schema;
use Illuminate\Support\Facades\View;
use App\Sitesetting;
use App\Service;
use App\TimeDesc;

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
        schema::defaultStringLength(191);
        $time_desc = TimeDesc::first();
        $services = Service::all();
        $settings = Sitesetting::first();
        View::share('services',$services);
        View::share('settings',$settings);
        View::share('time_desc',$time_desc);
        // $settings = Setting::first();
        // view()->share('settings', $settings);
    }
}
