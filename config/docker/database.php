<?php

return [
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('MARIADB_HOST', 'localhost'),
            'port' => 3306,
            'database' => env('SITE_DB_NAME', 'site_db'),
            'username' => env('SITE_DB_USER', 'user'),
            'password' => env('SITE_DB_PASSWORD', 'userpass'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
        ]
    ]
];
