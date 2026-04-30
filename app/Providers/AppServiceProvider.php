<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Schema::defaultStringLength(191);
        // $settings=Setting::pluck('value','key')->toArray();
        // View::share('settings',$settings);


        Schema::defaultStringLength(191);

    $settings = [];

    if (Schema::hasTable('settings')) {
        try {
            $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        } catch (\Exception $e) {
            $settings = [];
        }
    }

    View::share('settings', $settings);
     }
}
