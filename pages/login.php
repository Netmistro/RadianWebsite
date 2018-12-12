<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/4/18
 * Time: 11:14 PM
 */
//  Page Header
include_once('header.php');
include_once ('functions.php');
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
    <link rel="stylesheet" href="<?php echo StyleSheet('login') ?>">
</head>
<body>
<div class="login-page">
    <h2>Please Login</h2><br>
    <!-- Form Code Here-->
    <form action="login.php" name="login-page" method="post">
        <div class="container">
            <label for="uname"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-Mail" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="user_password" required>
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
        <div class="container">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="reset-password.php">Password?</a></span>
            <span class="register">Don't have an Account <a href="<?php ProductsLink('registration')?>">Register?</a></span>
        </div>
    </form>
</div>
</body>
<footer>
    <!--    Page Footer     -->
    <?php
    include('footer.php');
    ?>
</footer>
</html>