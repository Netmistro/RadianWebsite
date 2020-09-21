<?php

/**
 * Created by PhpStorm.
 * User: Brad
 * Date: 10/8/2018
 * Time: 11:03 AM
 */
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact-Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main-style.css">
        <link rel="stylesheet" href="css/test.css">
    </head>

    <body>
        <div class="main-page">
            <br>
            <div class="container">
                <form id="contact" action="includes/testmail.php" method="POST">
                    <h3>Request a Quotation</h3>
                    <h4>Contact us today, and get reply with in 24 hours!</h4>
                    <fieldset>
                        <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Email Address" name="email" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Phone Number" name="telephone" type="tel" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Reference" name="reference" type="text" tabindex="4" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Quotation Required for what items?" name="RFQ" tabindex="5"
                            required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
    <footer>
        <?php include "footer.php"; ?>
    </footer>

</html>