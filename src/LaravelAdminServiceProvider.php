<?php

namespace Bitsoftsol\LaravelAdministration;

use Database\Seeders\UserSeeder;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Controllers web.php
        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\DashboardController');

        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\UserController');

        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\AuthGroupController');

        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\AuthUserGroupController');

        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\ProfileController');

        // Controllers used in api.php
        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\Api\Auth\AuthController');

        // Controllers used in api_laravel_admin.php
        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\Api\LaravelAdmin\LaravelAdminApiController');

        // Controllers used in laravel_admin.php file
        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\LaravelAdmin\CrudSchemaController');

        $this->app->make('Bitsoftsol\LaravelAdministration\Http\Controllers\LaravelAdmin\LaravelAdminController');

        // $this->app->make('Bitsoftsol\LaravelAdministration\database\seeders\DatabaseSeeder');

        $this->loadViewsFrom(__DIR__.'/resources/views/', 'laravel-admin');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load routes folder
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        // Load public folder and publish to access static files
        $this->publishes([
            __DIR__.'/public' => public_path('Bitsoftsol/LaravelAdministration'),
        ], 'public');

        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'migrations');


        $this->publishes([
            __DIR__.'/database/seeders' => database_path('seeders'),
        ], 'seeders');

        $this->publishes([
            __DIR__.'/Http/Controllers/Auth' => app_path('Http/Controllers/Auth'),
        ], 'seeders');


        $seed_list = ['/database/seeders/UserSeeder.php'];

        $this->loadSeeders($seed_list);


        Route::middleware('laravel_admin')
            ->prefix('admin')
            ->namespace('BitsoftSol\\LaravelAdministration')
            ->group((__DIR__.'\routes/laravel_admin.php'));


        Route::middleware('api_laravel_admin')
            ->prefix('api/admin')
            ->namespace('BitsoftSol\\LaravelAdministration')
            ->group((__DIR__.'\routes/api_laravel_admin.php'));

    }

    protected function loadSeeders($seed_list)
    {
        $this->callAfterResolving(DatabaseSeeder::class, function ($seeder) use ($seed_list) {
            $seeder->call(UserSeeder::class);
        });
    }
}
