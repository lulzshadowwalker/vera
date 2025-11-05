<?php

namespace App\Providers;

use App\Contracts\ProfanityFilter;
use App\Models\Supplier;
use App\Observers\SupplierObserver;
use App\Services\BlaspProfanityFilter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProfanityFilter::class, BlaspProfanityFilter::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Supplier::observe(SupplierObserver::class);
    }
}
