<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Caching Type
    |--------------------------------------------------------------------------
    |
    | Type of caching
    | "all" - cache all pages besides listed in the "blacklist"
    | "list" - cache pages listed in the "whitelist"
    |
    */
    'type' => 'list', // "all" or "list"

    /*
    |--------------------------------------------------------------------------
    | Black List
    |--------------------------------------------------------------------------
    |
    | Array of page paths that should not be cached
    | Can be: "/", "/news", ...
    |
    */
    'blacklist' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | White List
    |--------------------------------------------------------------------------
    |
    | Array of page paths that should be cached
    | Can be: "/", "/news", ...
    |
    */
    'whitelist' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime of cache file in seconds
    |
    */
    'lifetime' => 60 * 60 * 24,

    /*
    |--------------------------------------------------------------------------
    | Driver
    |--------------------------------------------------------------------------
    |
    | Method of storing cache files
    | Can be: "file"
    | TODO: "memcached", "redis"
    |
    */
    'driver' => 'file',
];
