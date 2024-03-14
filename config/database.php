<?php
// MySQLi setup
define('DB_HOST', 'localhost');
define('DB_USER', 'epiphany');
define('DB_PASS', 'admin_epiphany');
define('DB_NAME', 'epiphany');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully';
