<?php

namespace Project\providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
class  ViewProvider extends ServiceProvider
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
        // $this->loadViewsFrom(__DIR__ . "/../view", 'view_admin');  
        $this->publishes([
            __DIR__.'/../view' => base_path('resource/views/admin'),
        ]);


        Route::prefix('admin')
        // ->namespace('Admin\Http\Controllers')
        // ->middleware('admin')
        // ->group(__DIR__."/../../.project/admin/routes.php");
        ->group(__DIR__ . "/../routes.php");


    }
}
