<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Idea;
use App\Observers\CategoryObserver;
use App\Observers\IdeaObserver;
use Horizon;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Horizon::auth(function ($request) {
            // Always show admin if local development
            if (env('APP_ENV') == 'local') {
                return true;
            }
        });
        Resource::withoutWrapping();
        ResourceCollection::withoutWrapping();
        Category::observe(CategoryObserver::class);
        Idea::observe(IdeaObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
