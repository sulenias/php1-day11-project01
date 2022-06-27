<?php
    include('connection.php');

    $sql = "CREATE DATABASE php1_day11";

    $connect->query($sql);
    $connect->close();
?>