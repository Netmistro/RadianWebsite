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
    <meta name="RADIAN H.A. Limited" content="Everything Scaffolding, Sale & Rental of Materials, Tools & Training">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/header.css">
    <link rel="icon" href="images/radian-logo.png">
    <!--    <script type="text/javascript" src="js/drop-menus.js"></script>-->
</head>
<body>
<div id="main-navbar" class="nav-bar">
    <ul>
        <!--        Home Page -->
        <li><a href="index.php">Home</a>
            <!--        Products Menu -->
        <li><a href="#">Products &#9660;</a>
            <ul class="dropdown">
                <!--        Scaffolding Sub Menu -->
                <li><a href="#">Scaffolding &#9656;</a>
                    <ul class="sec-drop">
                        <li><a href="scaffold-materials.php">Scaffold Materials</a></li>
                        <li><a href="scaffold-mart.php">Scaffmart H-Frame</a></li>
                        <li><a href="cuplock.php">Cuplock Scaffold</a></li>
                        <li><a href="ringlock.php">Ringlock Scaffold</a></li>
                        <li><a href="boss-towers.php">Boss Towers</a></li>
                    </ul>
                </li>
                <!--                Working At Heights Menu -->
                <li><a href="#">Working at Heights &#9656;</a>
                    <ul class="sec-drop">
                        <ul>
                            <li><a href="drop-object.php">Drop Object Prevention</a></li>
                            <li><a href="rescue-equipment.php">Rescue Equipment</a></li>
                            <li><a href="rope-access.php">Rope Access</a></li>
                        </ul>
                    </ul>
                </li>
                <!--                Formwork Menu/Link -->
                <li><a href="formwork.php">Formwork</a></li>
                <!--                Scaffold Tools Menu -->
                <li><a href="#">Scaffold Tools &#9656;</a>
                    <ul class="sec-drop">
                        <ul>
                            <li><a href="scaffold-spanners.php">Spanners</a></li>
                            <li><a href="scaffold-levels.php">Levels & Tapes</a></li>
                            <!--                            <li><a href="#">Hammers & Mallets</a></li>-->
                            <li><a href="tool-belts.php">Tool Belts</a></li>
                            <li><a href="tagging-systems.php">Tagging Systems</a></li>
                        </ul>
                    </ul>
                </li>
                <!-- Scaffold Consumables -->
                <li><a href="scaffold-consumables.php">Scaffold Consumables</a></li>
                <!-- Leather Products Menu -->
                <li><a href="#">Leather Products &#9656;</a>
                    <ul class="sec-drop">
                        <ul>
                            <li><a href="leather-tool-belts.php">Leather Tool-Belts</a></li>
                            <li><a href="spanner-frogs.php">Spanner Frogs</a></li>
                            <li><a href="level-holders.php">Level Holders</a></li>
                            <li><a href="tape-holders.php">Tape Holders</a></li>
<!--                            <li><a href="hammers-mallet-holders.php">Hammer Holders</a></li>-->
                        </ul>
                    </ul>
                </li>
                <!--                Safety Equipment Menu -->
                <li><a href="#">Safety Equipment &#9656;</a>
                    <ul class="sec-drop">
                        <ul>
                            <li><a href="safety-helmets.php">Helmets</a></li>
                            <li><a href="high-viz-vests.php">High-Viz Vests</a></li>
                            <li><a href="eye-protection.php">Eye Protection</a></li>
                            <li><a href="hand-knee-protection.php">Hand & Knee Protection</a></li>
                            <li><a href="harness-and-lanyards.php">Harnesses & Lanyards</a></li>
                            <li><a href="inertia-blocks.php">Inertia Blocks</a></li>
                        </ul>
                    </ul>
                </li>
            </ul>
        </li>
        <!--        Services Menu -->
        <li><a href="#">Services &#9660;</a>
            <ul class="dropdown">
                <ul>
                    <li><a href="engineering-design.php">Engineering Design</a></li>
                    <li><a href="scaffold-inspection.php">Scaffold Inspection</a></li>
                    <li><a href="scaffold-training.php">CITB Scaffold Training</a></li>
                    <li><a href="rescue-training.php">Rescue Training</a></li>
                </ul>
            </ul>
        </li>
        <!--        Technical Menu -->
        <li><a href="#">Technical &#9660;</a>
            <ul class="dropdown">
                <ul>
                    <li><a href="cuplock-scaffolding.php">Cuplock Scaffold</a></li>
                    <li><a href="conventional-scaffolding.php">Conventional Scaffold</a></li>
                    <li><a href="scaffold-calculator.php">Scaffold Calculator</a></li>
                    <li><a href="useful-links.php">Useful Links</a></li>
                </ul>
            </ul>
        </li>
        <li><a href="profile.php">About</a></li>
        <!--        <div class="login-register">-->
        <!--            <li><a href="#">Login/Register</a></li>-->
        <!--        </div>-->
    </ul>
</div>

<!--<script type="text/javascript" src="js/nav-bar-sticky.js"></script>-->
</body>
</html>