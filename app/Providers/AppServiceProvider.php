<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\LicenceRepository\LicenceRepository;
use App\Repository\LicenceRepository\LicenceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LicenceInterface::class, LicenceRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
