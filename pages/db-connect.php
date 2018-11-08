<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/4/18
 * Time: 12:03 AM
 */

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "radian";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";