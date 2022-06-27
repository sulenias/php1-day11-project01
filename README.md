# php1-day11-project01
MYSQL in PHP

## CREATE CONNECTION 
    <?php
        $connect = new mysqli('localhost', 'root', '');
    ?>

## CREATE DATABASE
    <?php
        include('connection.php');

        $sql = "CREATE DATABASE php_day11";

        $connect->query($sql);
        $connect->close();
    ?>

## DROP DATABASE
    <?php
        include('connection.php');

        $sql = "CREATE DATABASE php_day11";

        $connect->query($sql);
        $connect->close();
    ?>

## CREATE TABLE
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
            email_name VARCHAR(50) NOT NULL)";


        $connectDB->query($sqlUsers);
        $connectDB->close();
    ?>

## INSERT DATA
    <?php
        include('connection.php');

        $sql = "INSERT INTO `product`(`product_name`) VALUES ('Black Coffee')";

        $connectDB->query($sql);
        $connectDB->close();
    ?>