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
            <br>
            <h4>You have a new RFQ made from www.rhatt.com/contact-us.php. Please see details below FYA.</h4>
            <p><b>From: </b> $name</p>
            <p><b>E-mail: </b> $email</p>
            <p><b>Telephone: </b> $telephone</p>
            <p><b>Reference: </b> $reference</p>
            <p><b>Company: </b> $company</p>
            <p><b>RFQ Details: </b> $RFQ</p>
            <br><br>
            <p>Please do not respond to this email as it is not monitored.</p>
            <br><br><br>
            <h4>RADIAN H.A. Limited</h4>
            <p>187 Helen Street, Marabella</p>
            <p>+1(868) 658-0293, +1(868) 223-8823/4</p>
            <p>Web: www.rhatt.com</p>
            <p>info@rhatt.com</p>
        </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: RADIAN Website <info@rhatt.com>' . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";
    
    if(mail($to, $subject, $message, $headers)){

        header('Location:thank-you.php');
        exit;

    }else{

        echo 'Error sending email.' ;
    }
    // Send email
   // mail($to, $subject, $message, $headers);
}
