<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        // Create roles
        Role::firstOrCreate(['name' => 'parent']);
        Role::firstOrCreate(['name' => 'user']);
        Role::firstOrCreate(['name' => 'admin']);

        // Define permissions if needed
        // Permission::create(['name' => 'create user']);
        // Permission::create(['name' => 'edit user']);
        // ...

        // Assign permissions to roles
        $parentRole = Role::findByName('parent');
        // $parentRole->givePermissionTo('create user');
        // ...

        // Assign roles to users (You can do this when a user registers as a parent or regular user)
        // $user = User::find(1);
        // $user->assignRole('parent');
    }
}
