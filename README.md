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