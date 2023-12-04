<?php
CONST BASE_DIR = __DIR__;

$config = [
    'base_dir' => __DIR__,
    'base_url' => $_ENV['BASE_URL'] ?? '/',
    'db_connection' => $_ENV['DB_DSN'] ?? 'mysql',
    'db_host' => $_ENV['DB_HOST'] ?? '127.0.0.1',
    'db_port' => $_ENV['DB_PORT'] ?? '3306',
    'db_database' => $_ENV['DB_DATABASE'],
    'db_username' => $_ENV['DB_USERNAME'],
    'db_password' => $_ENV['DB_PASSWORD'],
];
