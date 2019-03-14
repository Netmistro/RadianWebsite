<?php
/**
 * Created by PhpStorm.
 * User: Brad
 * Date: 10/8/2018
 * Time: 11:03 AM
 */
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="RADIAN H.A. Limited" content="Welcome to RADIAN H.A. Limited, we sell and rent scaffolding materials.
     We also provide CITB Scaffolding Training">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/main-style.css">
</head>
<body>
<div class="main-page">
    <div class="content-wrap">
        <br>
        <h2>Contact us using the form below.</h2><br>
        <p> We would very much like to hear from you. Visit us, call, or email, our friendly and knowledgeable
            staff members are ready to be of service.</p>
    </div>
    <div class="radian-form">
        <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $company = $_POST["company"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        ?>
        <form name="contact" action="contact-us.php" method="post">
            Name <br>
            <input type="text" name="name"><br><br>
            E-mail <br>
            <input type="text" name="email"><br><br>
            Subject <br>
            <input type="text" name="subject"><br><br>
            Company <br>
            <input type="text" name="company"><br><br>
            Phone <br>
            <input type="text" name="phone"><br><br>
            Message <br><br>
            <textarea rows="10" cols="62" name="message"></textarea><br><br>
            <input type="submit" name="submit" value="Submit"> <br><br>

        </form>
    </div>
</div>
</body>
<footer>
    <?php
    include "footer.php";
    ?>
</footer>
</html>
