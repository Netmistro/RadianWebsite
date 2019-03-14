<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/4/18
 * Time: 12:01 AM
 */

// Include header file
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="RADIAN H.A. Limited" content="Everything Scaffolding, Sale & Rental of Materials, Tools & Training">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RADIAN Registration</title>
    <link rel="stylesheet" href="css/main-style.css">
</head>
<body>
<div class="main-page">
    <h1>Register your Account</h1><br>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyfields') {
            echo '<p class = "signuperror"> Please fill in all fields!</p>';
        } elseif ($_GET['error'] == 'usertaken') {
            echo '<p class = "signuperror"> Sorry a user with the same email address already exists!</p>';
        } elseif ($_GET['error'] == 'sqlerror') {
            echo '<p class = "signuperror"> Sorry there was an error with your information!</p>';
        } elseif ($_GET['error'] == 'invalidpassword') {
            echo '<p class = "signuperror"> Please recheck your passwords, both passwords are different!</p>';
        } else {
            ($_GET['error'] == 'invalidemail');
            echo '<p class = "signuperror"> Your email address is invalid!</p>';
        }
    }
    ?> <br>
    <div class="register-form">
        <form action="includes/register.inc.php" method="post">
            First Name <br>
            <input type="text" name="firstName" placeholder="First Name"> <br>
            Last Name <br>
            <input type="text" name="lastName" placeholder="Family Name"> <br>
            E-mail <br>
            <input type="email" name="emailAddress" placeholder="E-Mail"> <br>
            Company <br>
            <input type="text" name="companyName" placeholder="Company"> <br>
            Business Phone <br>
            <input type="tel" name="businessPhone" placeholder="Business Phone"> <br>
            Mobile Phone <br>
            <input type="tel" name="mobilePhone" placeholder="Mobile Phone"> <br>
            Password <br>
            <input type="password" name="userPassword" placeholder="Password"> <br>
            Re-enter Password <br>
            <input type="password" name="verifyPassword" placeholder="Verify Password"> <br>
            <br>
            <button type="submit" name="register-submit">Register</button>
        </form>
        <br><br>
    </div>
</div>
</body>
<footer>
    <?php include('footer.php'); ?>
</footer>
</html>