<?php
/**
 * Created by PhpStorm.
 * User: Brad
 * Date: 10/8/2018
 * Time: 10:36 AM
 */
require('pages/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RADIAN H.A. Limited</title>
    <link rel="stylesheet" href="<?php echo StyleSheet('main-style')?>">
    <link rel="stylesheet" href="<?php echo StyleSheet('slideshow')?>">
</head>
<body>
<div class="main-page">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <img src="images/radian-img1.jpg" style="width:100%" height="500">
            <div class="text">Caption One</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <img src="images/radian-img2.jpg" style="width:100%" height="500">
            <div class="text">Caption Two</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <img src="images/radian-img3.jpg" style="width:100%" height="500">
            <div class="text">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <img src="images/radian-img4.jpg" style="width:100%" height="500">
            <div class="text">Caption Four</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img src="images/radian-img5.jpg" style="width:100%" height="500">
            <div class="text">Caption Five</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
            <img src="images/radian-img6.jpg" style="width:100%" height="500">
            <div class="text">Caption Six</div>
            <br>
        </div>
        <br>
            <div style="text-align: center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <script type="text/javascript" src="js/slideshow.js"></script>
            <div class="content-wrap">
                <h2>The leading scaffolding training provider in Trinidad & Tobago and the Caribbean</h2><br>
                <p>Radian H.A. Ltd. is a dynamic, customer-driven business established in 2001; we primarily engage in
                    the
                    provision of comprehensive training programs in Scaffolding & Form Work. We work in conjunction
                    with Safety & Access Ltd.(UK) the leading scaffolding & formwork training agency in the United
                    Kingdom.
                    We also provide the widest range of scaffolding, Scaffolding Tools, Scaffolding Accessories and
                    Safety
                    Equipment in Trinidad & Tobago for both hire and sale. Radian H.A. Ltd also has a truly unique
                    market
                    position as we never undertake any contract work, which we would consider to be direct competition
                    with on-site contractors, many of whom are our customers.</p>
            </div>
        </div>
</body>
<footer>
    <?php
    require('pages/footer.php');
    ?>
</footer>
</html>