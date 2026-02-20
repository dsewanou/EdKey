<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Stancl\Tenancy\Events\DatabaseCreated; // Utilise DatabaseCreated
use Stancl\Tenancy\Events\TenantHasMigrated;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateTenantAdmin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TenantHasMigrated $event): void
    {
        $tenant = $event->tenant;

        // On bascule sur la nouvelle base de données du client
        tenancy()->initialize($tenant);

        // On crée l'utilisateur admin dans la table 'users' du Tenant
        User::create([
            'name' => 'Admin ' . $tenant->id,
            'email' => 'admin@' . $tenant->id . '.com',
            'password' => Hash::make('password_secret'), // Utilise Hash par sécurité
        ]);

        // On revient à la base de données centrale
        tenancy()->end();
    }
}
