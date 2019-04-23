<?php
/*
 * Created by PhpStorm.
 * User: Arnold Bradshaw
 * Date: 11/4/18
 * Time: 12:03 AM
 */

$host = "localhost";
$user = "root";
$password = "root";
$db = "radian";
$port = 8900;

// Create connection
$conn = mysqli_connect($host, $user, $password, $db, $port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";