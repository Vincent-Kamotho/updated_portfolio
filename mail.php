<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "vinsentwambugu@gmail.com";
    $headers = "From: $email";


    if(mail($to, $subject, $message, $headers)){
        echo "Message sent successfully";
    }else{
        echo "Message sending failed";
    }
}
?>