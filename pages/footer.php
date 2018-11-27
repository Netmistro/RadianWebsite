<?php
/**
 * Created by PhpStorm.
 * User: Brad
 * Date: 10/9/2018
 * Time: 3:12 PM
 */
include('functions.php');
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
        <h5>Social Links</h5><br>
        <a href="http://www.twitter.com"> <img src=<?php Twitter() ?> alt="Twitter" width="30"> </a>
        <a href="http://www.facebook.com/radianhaltd"><img src=<?php Facebook() ?> alt="Facebook" width="30"></a>
        <a href="http://www.youtube.com"><img src=<?php YouTube() ?> alt="Youtube" width="30"></a>
        <a href="http://www.instagram.com"><img src=<?php Instagram() ?> alt="Instagram" width="30"></a>
        <br><br>
        <p> &copy; <?php echo date(Y); ?> RADIAN H.A. Limited. All Rights Reserved.</p>
    </div>
    <div class="column">
        <h5>Contacts</h5><br>
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
        <h5>Quick Links</h5><br>
        <ul class="nav-list">
            <li><a href="<?php aboutUs(); ?>">About Us</a></li>
            <li><a href="<?php echo contactUs(); ?>">Contact Us</a></li>
        </ul>
    </div>
</div>
</body>
<footer>
</footer>
</html>