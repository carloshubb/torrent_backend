<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // endpoints to allow CORS

    'allowed_methods' => ['*'], // allow all HTTP methods
    'allowed_origins' => ['http://127.0.0.1:3000'], // your frontend URL
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // allow all headers
    'exposed_headers' => ['Authorization'], // headers exposed to frontend
    'max_age' => 0,
    'supports_credentials' => false, // set true if using cookies/session
];
