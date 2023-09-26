<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

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
    public function boot(): void
    {
        Gate::define('udpate-data', function (User $user) {
            return ($user->hasRole('ROLE_CONTRIBUTOR') or $user->hasRole('ROLE_ADMIN'))
                ? Response::allow()
                : Response::deny('You must have contributor role to perform this action.');
        });

        Gate::define('udpate-user', function (User $user) {
            return $user->hasRole('ROLE_ADMIN')
                ? Response::allow()
                : Response::deny('You must have administrator role to perform this action.');
        });
    }
}
