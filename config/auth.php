<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'administrator' => [
            'driver' => 'session',
            'provider' => 'administrators',
        ],

        'developer' => [
            'driver' => 'session',
            'provider' => 'developers',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'administrators' => [
            'driver' => 'eloquent',
            'model' => App\Models\Administrator::class,
        ],

        'developers' => [
            'driver' => 'eloquent',
            'model' => App\Models\Developer::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
