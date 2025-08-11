<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Repositories\DataRepository;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Comparte $catalogs con todas las vistas
        View::composer('*', function ($view) {
            $catalogs = app(DataRepository::class)->getActiveCatalogs();
            $view->with('catalogs', $catalogs);
        });
    }
}
