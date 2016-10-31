<?php

define("DB_HOST", 'localhost');
define("DB_DATABASE", 'library_cms');
define("DB_USER", 'root');
define("DB_PASSWORD", '');


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if(!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}