<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer(['frontend.partials.header'], function ($view) {

            $view->with('categories', \App\Category::all())->with('posts', \App\Post::all())->with('ads', \App\Ad::all());
        });

        view()->composer(['frontend.index'], function ($view) {

            $view->with('ads', \App\Ad::all());
        });

        view()->composer(['frontend.partials.slider'], function ($view) {

            $view->with('slider', \App\Post::latest()->take(2)->get());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
