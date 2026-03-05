<?php
    $YOUR_DATABASE_NAME = "web_program"; 
    function connectDB(){
        $connect = new mysqli("localhost", "root", "1234", $YOUR_DATABASE_NAME);
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        } 
        return $connect ;
    }
?>