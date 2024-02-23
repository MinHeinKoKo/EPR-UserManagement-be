<?php

namespace App\Providers;

use App\Interfaces\Feature\FeatureInterface;
use App\Interfaces\User\UserInterface;
use App\Repositories\Feature\FeaturesRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserInterface::class , UserRepository::class
        );
        $this->app->bind(
            FeatureInterface::class , FeaturesRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();
    }
}
