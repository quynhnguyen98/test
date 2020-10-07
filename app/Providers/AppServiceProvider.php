<?php

namespace App\Providers;

use App\Repositories\Contracts\CoSoCcRepositoryInterface;
use App\Repositories\Eloquent\CoSoCcRepository;
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
        $this->app->bind(CoSoCcRepositoryInterface::class,CoSoCcRepository::class);
    }
}
