<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('mahasiswa', function (User $user) {
            return $user->roles === 'mahasiswa';
        });
        Gate::define('admin', function (User $user) {
            return $user->roles === 'admin';
        });
        Gate::define('KProdiIF', function (User $user) {
            return $user->roles === 'KProdiIF';
        });
        Gate::define('KProdiSP', function (User $user) {
            return $user->roles === 'KProdiSP';
        });
        Gate::define('KProdiIS', function (User $user) {
            return $user->roles === 'KProdiIS';
        });
        Gate::define('WDekan1', function (User $user) {
            return $user->roles === 'WDekan1';
        });
    }
}
