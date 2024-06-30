<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ResetPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset-permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset all roles and permissions';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Create Roles
        $adminRole = Role::create(['name' => 'admin']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'user']);

        // Assign admin role to first user
        $user = User::first();
        if($user){
            $user->assignRole($adminRole);
            $this->info('Roles and permissions have been reset and admin role assigned to the first user.');
        }else{
            $this->error('User any user found to assign role please create user!');
        }
        

    }
}
