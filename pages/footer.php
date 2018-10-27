<?php
/**
 * Created by PhpStorm.
 * User: Brad
 * Date: 10/9/2018
 * Time: 3:12 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RADIAN H.A. Limited</title>
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
<div class="row">
    <div class="column">
        <h5>About</h5>
        <p>The leading scaffolding training provider in Trinidad & Tobago and the Caribbean.</p>
        <p> &copy; <?php echo date(Y); ?> RADIAN H.A. Limited. All Rights Reserved.</p>
    </div>
    <div class="column">
        <h5>Contacts</h5>
        <dl class="contact-list">
            <dt>Address: #187 Helen Street, Marabella, Trinidad</dt>
            <dt>email: <a href="mailto:#">radianhaltd@gmail.com</a></dt>
            <dt>TSTT/BMobile: <a href="tel:#">+1 868 658-0293 </a><span>or</span> <a href="tel:#">+1 868 658-5946</a>
            </dt>
            <dt>FLOW: <a href="tel:#">+1 868 658-8294 </a><span>or</span> <a href="tel:#">+1 868 223-0293</a></dt>
            <dt>Digicel: <a href="tel:#">+1 868 387-0293 </a></dt>
        </dl>
    </div>
    <div class="column">
        <h5>Quick Links</h5>
        <ul class="nav-list">

            <!--  Code for About Hyperlink  -->
            <?php
            if (empty(scandir('pages')) == true) {
                $About = 'profile.php';
            } else {
                $About = 'pages/profile.php';
            }
            ?>
            <li><a href="<?php echo $About; ?>">About Us</a></li>

            <!--  Code for Contacts Hyperlink  -->
            <?php
            if (empty(scandir('pages')) == true) {
                $Contacts = 'contact-us.php';
            } else {
                $Contacts = 'pages/contact-us.php';
            }
            ?>
            <li><a href="<?php echo $Contacts; ?>">Contact Us</a></li>
            <!--  Facebook Link  -->
            <li><a href="http://www.facebook.com/radianhaltd/">Facebook</a></li>
        </ul>
    </div>
</div>
</body>
<footer>
</footer>
</html>