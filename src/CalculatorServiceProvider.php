<?php
/**
 * Created by PhpStorm.
 * Author: Amit Shrestha.
 * Date: 2/8/18
 * Time: 12:01 PM
 */

namespace Amitshrestha\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Amitshrestha\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
