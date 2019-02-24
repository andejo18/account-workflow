<?php

namespace App\Providers;

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
        $navItems = [
            'accounts' => [
                'title' => 'Accounts',
                'route' => 'accounts.index'
            ]
        ];

        view()->share('navItems', $navItems);
    }
}
