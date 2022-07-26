<?php

define('DB_NAME', 'php-dev');
define('DB_USER', 'George');
define('DB_PASS', '1945');
define('DB_HOST', 'localhost');

//creating connection
$conn = new mysqli(DB_HOST, DB_NAME, DB_PASS, DB_USER);

if ($conn->connect_error){
    die('connection failed '.$conn->connect_error);
} else {
    echo 'connected !!';
}

