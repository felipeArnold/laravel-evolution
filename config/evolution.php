<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Key e URL da API Evolution
    |--------------------------------------------------------------------------
    */
    'key' => env('EVOLUTION_API_KEY'),
    'url' => env('EVOLUTION_API_URL'),

    /*
    |--------------------------------------------------------------------------
    | Prefix instance for Evolution
    */
    'instance_prefix' => env('EVOLUTION_INSTANCE_PREFIX', 'laravel-evolution'),

    /*
    |--------------------------------------------------------------------------
    | Timeout for requests to Evolution API
    |--------------------------------------------------------------------------
    */
    'timeout' => env('EVOLUTION_TIMEOUT', 30),
];
