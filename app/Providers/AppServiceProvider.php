<?php

namespace App\Providers;

use App\Interfaces\Feature\FeatureInterface;
use App\Interfaces\Permission\PermissionInterface;
use App\Interfaces\Role\RoleInterface;
use App\Interfaces\User\UserInterface;
use App\Repositories\Feature\FeaturesRepository;
use App\Repositories\Permission\PermissionRepository;
use App\Repositories\Role\RoleRepository;
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
        $this->app->bind(
            PermissionInterface::class , PermissionRepository::class
        );
        $this->app->bind(
            RoleInterface::class , RoleRepository::class
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
