<?php

try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'php-db';
    $dbname = 'php_database';
    $user = 'root';
    $pass = '123';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Exception $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}

