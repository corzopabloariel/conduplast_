<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Empresa;

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
        $section = Empresa::first()->sections[0];
        view()->composer('*', function ($view) use ($section) {
            $view->with('section', $section);
        });
    }
}
