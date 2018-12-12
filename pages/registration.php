<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/4/18
 * Time: 12:01 AM
 */
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $company_name = $_POST["company_name"];
    $email_address = $_POST["email_address"];
    $business_phone = $_POST["business_phone"];
    $mobile_phone = $_POST["mobile_phone"];
    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];
    $password_Verify = $_POST["password_Verify"];

    require 'db-connect.php';
    $check = mysqli_query($conn, "select * from users where email_address='$email_address'");
    $checkrows = mysqli_num_rows($check);
    if ($checkrows > 0) {
        echo "<br>" . "Your Account already exists. Please choose a different e-mail address to sign up.";
    } else {
        //    SQL Statement
        $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_address`, `company_name`,
 `phone_business`, `phone_mobile`, `username`, `user_password`) VALUES (NULL, '$first_name', '$last_name', 
 '$email_address', '$company_name', '$business_phone', '$mobile_phone', '$user_name', sha1('$user_password'));";
        if (mysqli_query($conn, $sql)) {
            //    database connection string required
            echo "New Record Created";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
if (isset($_POST['submit'])) {
    $email_address = $_POST["email_address"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RADIAN Registration</title>
    <link rel="stylesheet" href="<?php echo StyleSheet('main-style') ?>">
</head>
<body>
<div class="main-page">
    <div class="content-wrap">
        <h1>Register your Account</h1>
        <br>
    </div>
    <div class="registration-form">
        <form action="registration.php" method="post">
            First Name <br>
            <input type="text" name="first_name" placeholder="First Name" required> <br>
            Last Name <br>
            <input type="text" name="last_name" placeholder="Last Name" required> <br>
            Company <br>
            <input type="text" name="company_name" placeholder="Company Name"> <br>
            E-mail <br>
            <input type="email" name="email_address" placeholder="E-Mail" required> <br>
            Business Phone <br>
            <input type="tel" name="business_phone" placeholder="Business Phone"> <br>
            Mobile Phone <br>
            <input type="tel" name="mobile_phone" placeholder="Mobile Phone" required> <br>
            Password <br>
            <input type="password" name="user_password" placeholder="Password" required> <br>
            Verify Password <br>
            <input type="password" name="passwordVerify" placeholder="Verify Password" required> <br>
            <br>
            <input type="submit" name="Register" value="Register">
        </form>
        <br><br>
    </div>
</div>
</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>