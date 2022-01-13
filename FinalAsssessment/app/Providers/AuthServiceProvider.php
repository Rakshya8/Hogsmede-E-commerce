<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //Define gates to check login/role of user
        Gate::define('logged-in', function ($user){
            return $user;
        });

        Gate::define('is-admin', function ($user){
            return $user->hasAnyRole('Admin');
            /**
             * return $user->hasAnyRole(['admin','trader]);
             */
        });
        
        Gate::define('is-Trader', function ($user){
            return $user->hasAnyRole('Trader');
            /**
             * return $user->hasAnyRole(['admin','trader]);
             */
        });

        Gate::define('is-User', function ($user){
            return $user->hasAnyRole('User');
            /**
             * return $user->hasAnyRole(['admin','trader]);
             */
        });
        

        //
    }
}
