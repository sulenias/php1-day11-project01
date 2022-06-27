<?php
    include('connection.php');

    // CREATE TABLE PRODUCT
    $sql = "CREATE TABLE product(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(50) NOT NULL)";

// CREATE TABLE USER
$sqlUsers = "CREATE TABLE user(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email_name VARCHAR(50) NOT NULL,
        phone VARCHAR(50) NOT NULL,
        gender VARCHAR(50) NOT NULL)";


    $connectDB->query($sqlUsers);
    $connectDB->close();
?>
