<?php

if(isset($_POST['submit'])){
    // Define all variables here
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $reference = $_POST['reference'];
    $company = $_POST['company'];
    $RFQ = $_POST['RFQ'];

    $to = "arnold.bradshaw@rhatt.com";
    $subject = "RFQ - RADIAN H.A. Limited Website";
    
    $message = "
    <html>
    <head>
    <title>RADIAN H.A. Limited Website Responder</title>
    </head>
        <body>
        <h1>You have a new RFQ made from www.rhatt.com. Please see details below for your action.</h1>
        <p>From:</p>.$name;
        <h3>Please do not respond to this email, it is not monitored</h3>
            
        </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: RADIAN Website <info@rhatt.com>' . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";
    
    if(!@mail($to, $subject, $message, $headers)){

        echo 'Error sending email.' ;

    }else{

        header('Location:index.php');
        exit;
    }
    // Send email
   // mail($to, $subject, $message, $headers);
}
