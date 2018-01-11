<?php 

namespace Mannysoft\ApiFormRequest;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Mannysoft\ApiFormRequest\ApiFormRequest;

class ServiceProvider extends BaseServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Credits
        // https://medium.com/@Sirolad/laravel-5-5-api-form-request-validation-errors-d49a85cd29f2
        // http://cwhite.me/laravel-api-form-request-validation-errors/
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('api-form-request', function() {
            return new ApiFormRequest();
        });
    }

}
