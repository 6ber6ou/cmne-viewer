<?php namespace CV\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
    {

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies =
        [

        'CV\Model' => 'CV\Policies\ModelPolicy'

        ];

    // ------------------------------------------------------------

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
        {

        $this->registerPolicies();

        //

        }

    }
