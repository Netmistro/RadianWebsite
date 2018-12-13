<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/4/18
 * Time: 12:01 AM
 */
include("header.php");
if (isset($_POST['Register'])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $company_name = $_POST["company_name"];
    $email_address = $_POST["email_address"];
    $business_phone = $_POST["business_phone"];
    $mobile_phone = $_POST["mobile_phone"];
    $user_password = $_POST("user_password");

    //    Database connection string
    require('includes/db-connect.php');

//    $check = mysqli_query($conn, "SELECT * FROM users WHERE email_address = '$email_address'");
//    $checkRows = mysqli_num_rows($check);
//    if ($checkRows > 0) {
//        echo "<br>" . "Your Account already exists. Please choose a different e-mail address to sign up.";
//    } else {
//      SQL Statement
    $sql = "INSERT INTO users(first_name, last_name, email_address, company_name, phone_business, phone_mobile, user_password)
 VALUES ('$first_name','$last_name', '$email_address', '$company_name', '$business_phone', '$mobile_phone','$pser_password');";

    if (mysqli_query($conn, $sql)) {
        //    database connection string required
        header("Location:../login.php");
        echo "New Record Created";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

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
        <form action="register.php" method="post">
            First Name <br>
            <input type="text" name="first_name" placeholder="First Name" required> <br>
            Last Name <br>
            <input type="text" name="last_name" placeholder="Family Name" required> <br>
            Company <br>
            <input type="text" name="company_name" placeholder="Company"> <br>
            E-mail <br>
            <input type="email" name="email_address" placeholder="E-Mail" required> <br>
            Business Phone <br>
            <input type="tel" name="business_phone" placeholder="Business Phone"> <br>
            Mobile Phone <br>
            <input type="tel" name="mobile_phone" placeholder="Mobile Phone" required> <br>
            Password <br>
            <input type="password" name="user_password" placeholder="Password" required> <br>
            Verify Password <br>
            <input type="password" name="passwordVerify" placeholder="Re-enter Password" required> <br>
            <br>
            <button type="submit" name="Register" value="Register"></button>
        </form>
        <br><br>
    </div>
</div>
</body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>