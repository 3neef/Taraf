<?php

namespace App\Providers;
use App\Models\Setting;
use App\Providers\DB;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $locale = app()->getLocale();
        // \View::composer('cms/header', function ($view) {
        //     $setting= DB::table('settings')->select(['id', 'site_name_' . $locale, 'slogan_' . $locale])
        //     ->whereNotNull('site_name_' . $locale)
        //     ->where('site_name_' . $locale, '!=', '')
        //     ->first();
        //     $view->with(['setting'=>$setting]);
        // });
    }
}
