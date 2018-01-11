<?php

if (!function_exists('hanap')) {
    /**
     * Get the Hanap instance
     *
     * @return \Mannysoft\Hanap\Hanap
     */
    function hanap()
    {
        return app(\Mannysoft\Hanap\Hanap::class);
    }
}

if (!function_exists('search')) {
    
    function search()
    {
        return hanap()->search();
    }
}

if (!function_exists('show_fields')) {
    
    function show_fields($array)
    {
        return hanap()->showFields($array);
    }
}