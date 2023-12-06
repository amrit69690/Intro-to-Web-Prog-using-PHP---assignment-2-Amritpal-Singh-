<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'shop_db');

// Check connection
if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} else {
    echo 'Connected successfully';
}

?>
