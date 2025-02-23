<?php

include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = $_POST['message'];



    $conn =  connectDB();
    $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();

    // $headers = "From: $abc@mail.com";
    // $headers .= "Reply-To: $email\r\n";
    // $subject = "New Contact Form Submission";
    // $body = "Someone Ping you";

    //SMTP Service not available
    // mail($email, $subject, $body, $headers);
    echo "<script> alert('Message Sent Successfully!!')  </script>";


    header("Location: /assiagnment/");
}
