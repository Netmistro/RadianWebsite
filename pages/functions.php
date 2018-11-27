<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-11-26
 * Time: 23:03
 */
// Function to display twitter link
function Twitter()
{
    if (empty(scandir('images')) == true) {
        echo '../images/twitter-icon.png';
    } else {
        echo 'images/twitter-icon.png';
    }
}

// Function to display Youtube link
function YouTube()
{
    if (empty(scandir('images')) == true) {
        echo '../images/youtube-icon.png';
    } else {
        echo 'images/youtube-icon.png';
    }
}

// Function to display Instagram link
function Instagram()
{
    if (empty(scandir('images')) == true) {
        echo '../images/instagram-icon.png';
    } else {
        echo 'images/instagram-icon.png';
    }
}

// Function to display Facebook link
function Facebook()
{
    if (empty(scandir('images')) == true) {
        echo '../images/facebook-icon.png';
    } else {
        echo 'images/facebook-icon.png';
    }
}

// Function for About link
function aboutUs()
{
    if (empty(scandir('pages')) == true) {
        echo 'profile.php';
    } else {
        echo 'pages/profile.php';
    }
}

// Function for Contact Us link
function contactUs()
{
    if (empty(scandir('pages')) == true) {
        echo 'contact-us.php';
    } else {
        echo 'pages/contact-us.php';
    }
}

