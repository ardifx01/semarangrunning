<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
// use Illuminate\Support\Facades\Gate;
// use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        Gate::define('super_admin', function (User $user) {
            return $user->statusadmin->statusadmin === 'super_admin';
        });

        Gate::define('admin', function (User $user) {
            return $user->statusadmin->statusadmin === 'admin';
        });

        Gate::define('peserta', function (User $user) {
            return $user->statusadmin->statusadmin === 'peserta';
        });

        Gate::define('official', function (User $user) {
            return $user->statusadmin->statusadmin === 'official';
        });

        // ------------------------------------------------------------------------
        Gate::define('pos1', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos1';
});
Gate::define('pos2', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos2';
});
Gate::define('pos3', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos3';
});
Gate::define('pos4', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos4';
});
Gate::define('pos5', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos5';
});
Gate::define('pos6', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos6';
});
Gate::define('pos7', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos7';
});
Gate::define('pos8', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos8';
});
Gate::define('pos9', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos9';
});
Gate::define('pos10', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos10';
});
Gate::define('pos11', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos11';
});
Gate::define('pos12', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos12';
});
Gate::define('pos13', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos13';
});
Gate::define('pos14', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos14';
});
Gate::define('pos15', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos15';
});
Gate::define('pos16', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos16';
});
Gate::define('pos17', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos17';
});
Gate::define('pos18', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos18';
});
Gate::define('pos19', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos19';
});
Gate::define('pos20', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos20';
});
Gate::define('pos21', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos21';
});
Gate::define('pos22', function (User $user) {
    return $user->statusadmin->statusadmin === 'pos22';
});


    }
}
