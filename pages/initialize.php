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

define("PAGES_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PAGES_PATH));

define("MY_PATH", dirname('radian-logo.png'));
echo PAGES_PATH;
