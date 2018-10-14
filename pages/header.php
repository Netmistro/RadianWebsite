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
        <img src="<?php echo PROJECT_PATH.'/images/radian-logo.png';?>" alt="Radian" width="120">
        <?php echo PROJECT_PATH;?>
    </div>
    <div class="header-name">
        <h1>RADIAN H.A. Limited</h1>
        <p>187 Helen Street, Marabella, Trinidad</p>
        <p>TSTT: +1(868) 658-0293/8294/5946</p>
        <p>Others: +1(868) 223-8823/8824</p>
    </div>
    <div class="header-right">
        <a class="active" href="../index.php">Home</a>
        <a href="<?php echo '../pages/products.php';?>">Products</a>
        <a href="<?php echo 'services.php';?>">Services</a>
        <a href="<?php echo 'our-clients.php';?>">Our Clients</a>
        <a href="<?php echo 'contact-us.php';?>">Contact</a>
        <a href="<?php echo 'profile.php';?>">About Us</a>
    </div>
</div>