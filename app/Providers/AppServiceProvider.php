<?php

namespace App\Providers;

use App\Models\User;
use App\Events\ClassCanceled;
use App\Listeners\NotifyClassCanceled;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Event;
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
        Gate::define('schedule-class', function (User $user) {
            return $user->role === 'instructor';
        });

        Gate::define('book-class', function (User $user) {
            return $user->role === 'member';
        });

        Event::listen(
            ClassCanceled::class,
            NotifyClassCanceled::class,
        );
    }
}
