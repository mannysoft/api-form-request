<?php 

namespace Mannysoft\ApiFormRequest;

class Facade extends \Illuminate\Support\Facades\Facade {
    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'api-form-request';
    }
}