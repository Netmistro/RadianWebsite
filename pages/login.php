<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/4/18
 * Time: 11:14 PM
 */
//  Page Header
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $user_password = $_POST["user_password"];

    //    Include database connection string from file
    require 'db-connect.php';
    // SQL statement for selecting data from the table and verifying
    $sql = "SELECT * from users WHERE email_address='$email' AND user_password = sha1('$user_password')";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["first_name"] = $row["first_name"];
            $_SESSION["last_name"] = $row ["last_name"];
            header("location:../index.php");
        }
    } else {
        echo "0 results";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RADIAN Login</title>
    <link rel="stylesheet" href="../css/main-style.css">
    <link rel="stylesheet" href="../css/product-page.css">
</head>
<body>
<br>
<h1>Login</h1><br>
<!-- Form Code-->
<form action="login.php" method="post">
    Email <br>
    <input type="email" name="email"><br><br>
    Password <br>
    <input type="password" name="user_password"><br><br>
    <input type="submit" name="Login">
    <br><br>
</form>
</body>
<footer>
    <!--    Page Footer     -->
    <?php
    include 'footer.php';
    ?>
</footer>
</html>