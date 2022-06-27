<?php
    include('connection.php');

    $sql = "CREATE DATABASE php_day11";

    $connect->query($sql);
    $connect->close();
?>