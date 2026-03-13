<?php
function connectDB()
{
    $connect = new mysqli("localhost", "root", "1234", "mystore");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    return $connect;
}
