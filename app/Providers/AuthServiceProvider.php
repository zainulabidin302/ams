<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
<<<<<<< HEAD
use Laravel\Passport\Passport;
=======
>>>>>>> 6320fa133e4d7a17e9e39145663d6b55f2083a46

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
<<<<<<< HEAD
        Passport::routes();
=======

>>>>>>> 6320fa133e4d7a17e9e39145663d6b55f2083a46
        //
    }
}
