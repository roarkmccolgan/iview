<?php

return [

    /*
<<<<<<< HEAD
	|--------------------------------------------------------------------------
	| Default Cache Store
	|--------------------------------------------------------------------------
	|
	| This option controls the default cache connection that gets used while
	| using this caching library. This connection is used when another is
	| not explicitly specified when executing a given caching function.
	|
	*/
=======
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache connection that gets used while
    | using this caching library. This connection is used when another is
    | not explicitly specified when executing a given caching function.
    |
    | Supported: "apc", "array", "database", "file", "memcached", "redis"
    |
    */
>>>>>>> master

    'default' => env('CACHE_DRIVER', 'file'),

    /*
<<<<<<< HEAD
	|--------------------------------------------------------------------------
	| Cache Stores
	|--------------------------------------------------------------------------
	|
	| Here you may define all of the cache "stores" for your application as
	| well as their drivers. You may even define multiple stores for the
	| same cache driver to group types of items stored in your caches.
	|
	*/
=======
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
    */
>>>>>>> master

    'stores' => [

        'apc' => [
<<<<<<< HEAD
            'driver' => 'apc'
        ],

        'array' => [
            'driver' => 'array'
=======
            'driver' => 'apc',
        ],

        'array' => [
            'driver' => 'array',
>>>>>>> master
        ],

        'database' => [
            'driver' => 'database',
<<<<<<< HEAD
            'table'  => 'cache',
=======
            'table' => 'cache',
>>>>>>> master
            'connection' => null,
        ],

        'file' => [
            'driver' => 'file',
<<<<<<< HEAD
            'path'   => storage_path().'/framework/cache',
        ],

        'memcached' => [
            'driver'  => 'memcached',
            'servers' => [
                [
                    'host' => '127.0.0.1', 'port' => 11211, 'weight' => 100
=======
            'path' => storage_path('framework/cache'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
>>>>>>> master
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

    ],

    /*
<<<<<<< HEAD
	|--------------------------------------------------------------------------
	| Cache Key Prefix
	|--------------------------------------------------------------------------
	|
	| When utilizing a RAM based store such as APC or Memcached, there might
	| be other applications utilizing the same cache. So, we'll specify a
	| value to get prefixed to all our keys so we can avoid collisions.
	|
	*/
=======
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same cache. So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    |
    */
>>>>>>> master

    'prefix' => 'laravel',

];