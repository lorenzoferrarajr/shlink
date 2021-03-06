<?php
return [

    'entity_manager' => [
        'orm' => [
            'proxies_dir' => 'data/proxies',
        ],
        'connection' => [
            'driver' => 'pdo_mysql',
            'user' => env('DB_USER'),
            'password' => env('DB_PASSWORD'),
            'dbname' => env('DB_NAME', 'shlink'),
            'charset' => 'utf8',
            'driverOptions' => [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            ],
        ],
    ],

];
