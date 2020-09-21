<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'vendor/autoload.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['telephone'];
    $reference = $_POST['reference'];
    $company = $_POST['company'];
    $RFQ = $_POST['RFQ'];


    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPKeepAlive = true; // add it to keep SMTP connection open after each email sent

    $mail->SMTPAuth = true;
    $mail->Username = "arnold.bradshaw@rhatt.com";
    $mail->Password = "Radian1234*";
    $mail->setFrom('arnold.bradshaw@rhatt.com', 'RADIAN Webpage - RFQ');
    $mail->addAddress('arnoldbradshaw@gmail.com', 'Arnold Bradshaw');
    $mail->addReplyTo('arnold.bradshaw@rhatt.com', 'Arnold Bradshaw');

    // $mail->addAddress('example@email.com', 'Receiver Name');
    $mail->Subject = 'RFQ: ' . $reference;
    $mail->isHTML(true);
    $body = '<h1>New RFQ from RADIAN website</h1><br>
    From: ' . $name . '<br>' . '
    E-mail: ' . $email . '<br>' . '
    Company: ' . $company . '<br>' . '
    Reference: ' . $reference . '<br>' . '
    RFQ: ' . $RFQ . '<br>' . '
    ';
    $mail->Body = $body;

    //$mail->addAttachment('test.txt');
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        //header('Location: index.php');
        exit;

        echo 'The email message was sent.';
    }

    $mail->smtpClose();
}