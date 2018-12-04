<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-11-26
 * Time: 23:03
 */
// Function to display twitter link
function SocialIcon($SocialIcon)
{
    if (empty(scandir('images')) == true) {
        echo '../images/'.$SocialIcon.'.png';
    } else {
        echo 'images/'.$SocialIcon.'.png';
    }
}

function ContactImages($image)
{
    if (empty(scandir('css')) == true) {
        echo '../images/'.$image.'.png';
    } else {
        echo 'images/'.$image.'.png';
    }
}
//Function will create all the links for the pages by passing the page name as a variable
function productsLink($Page){
    if (empty(scandir('pages')) == true) {
        echo $Page.'.php';
    } else {
        echo 'pages/'.$Page.'.php';
    }
}

//Function will link to home page
function HomePage($HomePage){
    if (empty(scandir('pages')) == true) {
        echo '../'.$HomePage.'.php';
    } else {
        echo $HomePage.'.php';
    }
}

function StyleSheet($styleSheet)
{
    if (empty(scandir('css')) == true) {
        echo '../css/'.$styleSheet.'.css';
    } else {
        echo 'css/'.$styleSheet.'.css';
    }
}