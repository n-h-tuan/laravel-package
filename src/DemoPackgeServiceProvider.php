<?php

namespace Tuanhoang\Demopackage;

use Illuminate\Support\ServiceProvider;

class DemoPackgeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('tuanhoang\demopackage\TaskController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/Models' => base_path('app/Http/Models'),
            __DIR__.'/Http/controllers' => base_path('app/Http/Controllers'),
            __DIR__.'/database/migrations' => base_path('database/migrations'),
        ]);
    }
}
