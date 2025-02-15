<?php

namespace App\Providers;

use App\Models\Tag;
use Illuminate\Support\Facades\Session;
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

    public function boot()
    {
        if (!Session::has('tags')) {
            Session::put('tags', Tag::all());
        }
    
        // Compartir los tags con todas las vistas
        View::share('tags', Session::get('tags'));
    }
    /*
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }*/
    
}

