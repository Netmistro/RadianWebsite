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

    //    database connection string required
    require 'db-connect.php';
    $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_address`, `company_name`,
 `phone_business`, `phone_mobile`, `username`, `user_password`) VALUES (NULL, '$first_name', '$last_name', 
 '$email_address', '$company_name', '$business_phone', '$mobile_phone', '$user_name', sha1('$user_password'));";
    if (mysqli_query($conn, $sql)) {
        echo "New Record Created";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
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
        <h1>New User Registration</h1>
    </div>
    <div class="radian-form">
        <form action="registration.php" method="post">
            First Name <br>
            <input type="text" name="first_name"> <br>
            Last Name <br>
            <input type="text" name="last_name"> <br>
            Company <br>
            <input type="text" name="company_name"> <br>
            email <br>
            <input type="email" name="email_address"> <br>
            Business Phone <br>
            <input type="tel" name="business_phone"> <br>
            Mobile Phone <br>
            <input type="tel" name="mobile_phone"> <br>
            Username <br>
            <input type="text" name="user_name"> <br>
            Password <br>
            <input type="password" name="user_password"> <br>
            <br>
            <input type="submit" name="Register">
        </form>
    </div>
</div>
</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>