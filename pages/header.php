<?php
/**
 * Created by PhpStorm.
 * User: Brad
 * Date: 10/9/2018
 * Time: 3:12 PM
 */
include 'initialize.php';
?>
<link rel="stylesheet" href="../css/header.css">
<div class="header-row">
    <div class="radian-logo">
        <?php
        if (empty(scandir('pages')) == true) {
            $radian_logo = '../images/radian-logo.png';
        } else {
            $radian_logo = 'images/radian-logo.png';
        }
        ?>
        <img src="<?php echo $radian_logo; ?>" alt="Radian" width="120">
    </div>
    <div class="header-name">
        <h1>RADIAN H.A. Limited</h1>
        <p>187 Helen Street, Marabella, Trinidad</p>
        <p>TSTT: +1(868) 658-0293/8294/5946</p>
        <p>Others: +1(868) 223-8823/8824</p>
    </div>
    <div class="header-right">

        <!--  Code for Home Page Hyperlink  -->
        <?php
        if (empty(scandir('pages')) == true) {
            $Home = '../index.php';
        } else {
            $Home = 'index.php';
        }
        ?>
        <a class="active" href=<?php echo $Home; ?>>Home</a>

        <!--  Code for Products Hyperlink  -->
        <?php
        if (empty(scandir('pages')) == true) {
            $Products = 'products.php';
        } else {
            $Products = 'pages/products.php';
        }
        ?>
        <a href="<?php echo $Products; ?>">Products</a>

        <!--  Code for Services Hyperlink  -->
        <?php
        if (empty(scandir('pages')) == true) {
            $Services = 'services.php';
        } else {
            $Services = 'pages/services.php';
        }
        ?>
        <a href="<?php echo $Services; ?>">Services</a>

        <!--  Code for Our Clients Hyperlink  -->
        <?php
        if (empty(scandir('pages')) == true) {
            $OurClients = 'our-clients.php';
        } else {
            $OurClients = 'pages/our-clients.php';
        }
        ?>
        <a href="<?php echo $OurClients; ?>">Our Clients</a>

        <!--  Code for Contact Us Hyperlink  -->
        <?php
        if (empty(scandir('pages')) == true) {
            $ContactUs = 'contact-us.php';
        } else {
            $ContactUs = 'pages/contact-us.php';
        }
        ?>
        <a href="<?php echo $ContactUs; ?>">Contact</a>

        <!--  Code for Profile Hyperlink  -->
        <?php
        if (empty(scandir('pages')) == true) {
            $Profile = 'profile.php';
        } else {
            $Profile = 'pages/profile.php';
        }
        ?>
        <a href="<?php echo $Profile; ?>">About Us</a>
    </div>
</div>