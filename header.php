<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-11-28
 * Time: 15:45
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header.css">
    <link rel="icon" href="images/radian-logo.png">
    <script type="text/javascript" src="js/drop-menus.js"></script>
</head>
<body>
<div class="navbar" id="main-navbar">
    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='index.php'">Home</button>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Products</button>
        <div class="dropdown-content">
            <a href="scaffold-materials.php">Scaffold Materials</a>
            <a href="tagging-systems.php">Tagging Systems</a>
            <a href="drop-object-prevention.php">Drop Object Prevention</a>
            <a href="scaffold-consumables.php">Scaffold Consumables</a>
            <a href="rescue-equipment.php">Rescue Equipment</a>
            <a href="formwork.php">Formwork</a>
            <a href="rope-access.php">Rope Access</a>
            <a href="ppe.php">P.P.E.</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Services</button>
        <div class="dropdown-content">
            <a href="engineering-design.php">Engineering Design</a>
            <a href="scaffold-inspection.php">Scaffold Inspection</a>
            <a href="scaffold-training.php">CITB Scaffold Training</a>
            <a href="rescue-training.php">Rescue Training</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Technical</button>
        <div class="dropdown-content">
            <a href="cuplock-scaffolding.php">Cuplock Scaffold</a>
            <a href="conventional-scaffolding.php">Conventional Scaffolding</a>
            <a href="scaffold-calculator.php">Scaffold Calculator</a>
            <a href="useful-links.php">Useful Links</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='profile.php'">About</button>
    </div>
    <div class="topnav-right">
        <div class="dropdown">
            <?php if (isset($_SESSION['first_name'])): ?>
                Welcome<?php echo $_SESSION['first_name'] ?>
                <button class="dropbtn" onclick="window.location.href='logout.php'">Logout</button>
            <?php else: ?>
                <button class="dropbtn" onclick="window.location.href='login.php'">Login</button>
            <?php endif; ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/nav-bar-sticky.js"></script>
</body>
</html>