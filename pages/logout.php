<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/5/18
 * Time: 1:04 AM
 */
session_start();
include ('functions.php');
$_SESSION = array();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
header('location:../index.php');
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>

</body>
<footer>

</footer>
</html>