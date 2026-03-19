<?php
$user = 'root';
$password = 'password';

try {
    $databaseHost = new PDO('mysql:host=localhost;dbname=intro_php_crud', $user, $password, array(
        PDO::ATTR_PERSISTENT => true
    ));

    echo "Connection successful";
} catch (PDOException $e) {
    die("Unable to connect: " . $e->getMessage());
}
