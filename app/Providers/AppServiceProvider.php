<?php

namespace App\Providers;

use Illuminate\Support\Lottery;
use Illuminate\Support\ServiceProvider;
use Laravel\Pennant\Feature;
use App\Models\User;

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

        Feature::define('business', fn (User $user) => match (true) {
            $user->isInternalTeamMember() => false,
            $user->isHighTrafficCustomer() => true,
            default => Lottery:: odds(1/100),
        });

        Feature::define('random', Lottery:: odds(1/2));
    }
}
