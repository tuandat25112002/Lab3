<?php
    $dsn = 'mysql:host=localhost;dbname=shopshoes';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        // include('database_error.php');
        echo "Connet Database Error";
        exit();
    }
?>