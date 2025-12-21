<?php

use Illuminate\Support\Str;

return [

    'default' => 'array',

    'stores' => [

        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

    ],

    'prefix' => Str::slug((string) env('APP_NAME', 'laravel')).'-cache-',

];
