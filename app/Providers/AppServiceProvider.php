<?php

namespace App\Providers;

use App\Models\ApplicationSetting;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::share('categories', $categories=Category::where('status',1)->get());

        function generalSetting(){
            $setting = ApplicationSetting::latest()->first();
            return $setting;
        }
    }
}
