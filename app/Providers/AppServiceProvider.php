<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function(User $user) {
            return $user->role_id === 1;
        });

        Gate::define('ppns', function(User $user) {
            return $user->role_id === 2;
        });

        Gate::define('penguji', function(User $user) {
            return $user->role_id = 3;
        });

        Gate::define('post', function(User $user) {
            return $user->role_id = 4;
        });
    }
}
