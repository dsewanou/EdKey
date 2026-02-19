<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider; 
use Illuminate\Support\Facades\Event; // Importe la façade Event
use Stancl\Tenancy\Events\TenantCreated; // L'événement du package
use App\Listeners\CreateTenantAdmin; // Ton futur 
use Stancl\Tenancy\Events\DatabaseCreated;
use Stancl\Tenancy\Events\TenantHasMigrated; // Import correct

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
    public function boot(): void
    {
        // On lie l'événement de création du tenant à notre Listener
        Event::listen(
            // TenantCreated::class,
            // DatabaseCreated::class, // On attend que la DB soit réellement là
            TenantHasMigrated::class,
            CreateTenantAdmin::class,
        );
    }
}
