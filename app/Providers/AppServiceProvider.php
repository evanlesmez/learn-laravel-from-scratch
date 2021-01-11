<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Example;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Models\Example', function () {
            $foo = config('services.foo');
            return new Example($foo);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
