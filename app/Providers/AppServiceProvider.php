<?php

namespace BauTRADE\Providers;

use Illuminate\Http\Request;
use Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @param Request $request
     *
     * @return void
     */
    public function boot(Request $request)
    {
        Schema::defaultStringLength(191);

        // Set the app locale according to the URL
        app()->setLocale($request->segment(1));
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
