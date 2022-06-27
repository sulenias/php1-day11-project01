<?php
include('connection.php');


$sql = "DROP TABLE user";

$connectDB->query($sql);
$connectDB->close();
?>