<?php

namespace App\Providers;


use App\Services\ExpedienteService;
use Illuminate\Support\ServiceProvider;

class ExpedienteProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $this->app->singleton(ExpedienteService::class,function( $app){
            return new ExpedienteService();
        });
    }

    public function provides(){
        return [ExpedienteService::class];
    }
}
