<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/4/18
 * Time: 12:03 AM
 */

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "root";
$dbName = "Radian";

// Create connection
$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";