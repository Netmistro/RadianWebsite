<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-11-28
 * Time: 15:45
 */
session_start();
include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo StyleSheet('header') ?>">
    <link rel="icon" href="<?php echo ContactImages('radian-logo') ?>">
    <script type="text/javascript" src="../js/drop-menus.js"></script>
</head>
<body>
<div class="navbar" id="main-navbar">
    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='<?php echo HomePage('index') ?>'">Home</button>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Products</button>
        <div class="dropdown-content">
            <a href="<?php echo productsLink('scaffold-materials') ?>">Scaffold Materials</a>
            <a href="<?php echo productsLink('tagging-systems') ?>">Tagging Systems</a>
            <a href="<?php echo productsLink('drop-object-prevention') ?>">Drop Object Prevention</a>
            <a href="<?php echo productsLink('scaffold-consumables') ?>">Scaffold Consumables</a>
            <a href="<?php echo productsLink('rescue-equipment') ?>">Rescue Equipment</a>
            <a href="<?php echo productsLink('formwork') ?>">Formwork</a>
            <a href="<?php echo productsLink('rope-access') ?>">Rope Access</a>
            <a href="<?php echo productsLink('ppe') ?>">P.P.E.</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Services</button>
        <div class="dropdown-content">
            <a href="<?php echo productsLink('engineering-design') ?>">Engineering Design</a>
            <a href="<?php echo productsLink('scaffold-inspection') ?>">Scaffold Inspection</a>
            <a href="<?php echo productsLink('scaffold-training') ?>">CITB Scaffold Training</a>
            <a href="<?php echo productsLink('rescue-training') ?>">Rescue Training</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Technical</button>
        <div class="dropdown-content">
            <a href="<?php echo productsLink('cuplock-scaffolding') ?>">Cuplock Scaffold</a>
            <a href="<?php echo productsLink('conventional-scaffolding') ?>">Conventional Scaffolding</a>
            <a href="<?php echo productsLink('scaffold-calculator') ?>">Scaffold Calculator</a>
            <a href="<?php echo productsLink('useful-links') ?>">Useful Links</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='<?php echo ProductsLink('profile') ?>'">About</button>
    </div>
    <div class="topnav-right">
        <div class="dropdown">
            <?php if (isset($_SESSION['first_name'])): ?>
                Welcome<?php echo $_SESSION['first_name'] ?>
                <button class="dropbtn" onclick="window.location.href='<?php echo ProductsLink('logout') ?>'">Logout
                </button>
            <?php else: ?>
                <button class="dropbtn" onclick="window.location.href='<?php echo ProductsLink('login') ?>'">Login
                </button>
            <?php endif; ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="../js/nav-bar-sticky.js"></script>
</body>
</html>