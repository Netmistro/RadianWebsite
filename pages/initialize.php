<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 10/13/18
 * Time: 10:42 AM
 */
// Assign file paths to PHP constants
// __FILE__ returns the current path of this file
// dirname() returns the path of the parent directory

//define("PAGES_PATH", dirname(__FILE__));

function products(){
        if (empty(scandir('pages')) == true) {
            $link_name = 'products.php';
        } else {
            $products = 'pages/products.php';
        }
}

