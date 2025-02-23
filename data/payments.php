<?php


include 'connection.php';


function getPaymentData()
{


    $conn = connectDB();

    $sql = "select * from outsource_payments";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
