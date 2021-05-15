<?php

namespace Ecoflow\Access;

use Illuminate\Support\ServiceProvider;
// use Laravel\Sanctum as Sanctum;

class AccessServiceProvider extends ServiceProvider
{
    /**
     * register
     *
     * @return void
     */
    public function register()
    {
        $this->mergeGuards();
        $this->mergeProviders();
        $this->setDefaultAuth();
    }

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }

    /**
     * Merge new guards with application default guards.
     *
     * @return void
     */
    protected function mergeGuards(): void
    {
        // Create a new 'ecoflow' guard (for the moment it's just a regular guard)
        $this->mergeConfigFrom(
            __DIR__ . '/config/guards.php',
            'auth.guards'
        );
    }

    /**
     * Merge Ecoflow Providers
     */
    public function mergeProviders(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/providers.php',
            'auth.providers'
        );
    }

    /**
     * Set the default authentication to Ecoflow guard!
     *
     * @return void
     */
    public function setDefaultAuth()
    {
        // TODO: Write me better
        config()->set('auth.defaults', [
            'guard' => 'ecoflow',
            'passwords' => 'users',
        ]);
    }

}
