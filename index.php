<?php
/**
 * Created by PhpStorm.
 * User: Brad
 * Date: 10/8/2018
 * Time: 10:36 AM
 */
include 'pages/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to RADIAN H.A. Limited</title>
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/slideshow.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<main>
    <section class="main">
        <div class="slide-show">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/radian-img1.jpg" style="width:100%" height="500">
                    <div class="text">Caption Text</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/radian-img2.jpg" style="width:100%" height="500">
                    <div class="text">Caption Two</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/radian-img3.jpg" style="width:100%" height="500">
                    <div class="text">Caption Three</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <script type="text/javascript" src="js/slideshow.js"></script>
        </div>
        <div class="content-wrap">
            <h2>The leading scaffolding training provider in Trinidad & Tobago and the Caribbean</h2><br>
            <p>Radian H.A. Ltd. is a dynamic, customer driven business established in 2000, we primarily
                engage in the provision of comprehensive training programs in Scaffolding & Form Work.
                We work in conjunction with Safety & Access Ltd.(UK) the leading scaffolding & form work
                training agency in the United Kingdom. We also provide a widest range of scaffolding,
                Scaffolding Tools, Scaffolding Accessories and Safety Equipment in Trinidad & Tobago
                for both hire and sale. Radian H.A. Ltd also has a truly unique market position as we
                never undertake any contract work, which we would consider to be direct competition
                with on-site contractors, many of whom are our customers.</p><br>
        </div>
    </section>
</main>
</body>
<footer>
    <?php
    include 'pages/footer.php';
    ?>
</footer>
</html>