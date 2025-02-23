<?php


function connectDB()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ebpearls_asgmt";


    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("connection failed" . $conn->connect_error);
        return false;
    }

    return $conn;
};



