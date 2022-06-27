<?php
    include('connection.php');

    $sql = "INSERT INTO `product`(`product_name`) VALUES ('Black Coffee')";

    $connectDB->query($sql);
    $connectDB->close();
?>