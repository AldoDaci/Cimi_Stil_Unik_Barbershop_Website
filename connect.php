<?php
if (!defined('TEST_ENVIRONMENT')) {
    $dsn = 'mysql:host=localhost;dbname=barbershop';
    $user = 'root';
    $pass = '';
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

    try {
        $con = new PDO($dsn, $user, $pass, $option);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Connection is successful
    } catch (PDOException $ex) {
        echo "Failed to connect with database ! " . $ex->getMessage();
        die();
    }
}
?>
