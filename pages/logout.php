<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/5/18
 * Time: 1:04 AM
 */
session_start();
$_SESSION = array();
session_unset();
session_destroy();
header("Location: login.php");
exit();