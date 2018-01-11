<?php

if (!function_exists('api_validate')) {
    /**
     * Get the ApiFormRequest instance
     *
     * @return \Mannysoft\ApiFormRequest\ApiFormRequest
     */
    function api_validate()
    {
        return app(\Mannysoft\ApiFormRequest\ApiFormRequest::class);
    }
}