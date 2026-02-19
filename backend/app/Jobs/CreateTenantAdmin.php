<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class CreateTenantAdmin implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // On est déjà dans le scope du tenant grâce au package
        User::create([
            'name' => 'Admin ' . $this->tenant->id,
            'email' => 'admin@' . $this->tenant->id . '.com',
            'password' => bcrypt('password_par_defaut'),
        ]);
    }
}
