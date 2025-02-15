<?php

namespace App\Providers;

use App\Models\Tag;
use Illuminate\Support\Facades\Cache as FacadesCache;
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
        $tags = FacadesCache::remember('tags', now()->addHours(6), function () {
            return Tag::where('status', 1)->inRandomOrder()->get();
        });

        View::share('tags', $tags);
    }
    /*
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }*/
    
}

