<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-11-26
 * Time: 23:03
 */
function ContactImages($image)
{
    if (empty(scandir('css')) == true) {
        echo '../images/' . $image . '.png';
    } else {
        echo 'images/' . $image . '.png';
    }
}

function StyleSheet($styleSheet)
{
    if (empty(scandir('css')) == true) {
        echo '../css/' . $styleSheet . '.css';
    } else {
        echo 'css/' . $styleSheet . '.css';
    }
}