<?php
$envPath = __DIR__ . '/..';
if (!is_readable($envPath . '/.env')) {
    die('The .env file is not readable or does not exist');
}

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($envPath);
$dotenv->load();

// MySQLi setup
$env = parse_ini_file($envPath . '/.env');
define('DB_HOST', $env['DB_HOST']);
define('DB_USER', $env['DB_USER']);
define('DB_PASS', $env['DB_PASS']);
define('DB_NAME', $env['DB_NAME']);

// define('DB_HOST', getenv('DB_HOST'));
// define('DB_USER', getenv('DB_USER'));
// define('DB_PASS', getenv('DB_PASS'));
// define('DB_NAME', getenv('DB_NAME'));

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully';
