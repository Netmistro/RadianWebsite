<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-12-12
 * Time: 08:58
 */
if (isset($_POST['reset-request-submit'])) {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "https://www.rhatt.com/pages/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
    $expires = date("U") + 1800;
    require('db-connect.php');

//    Variable from the previous form hence the POST method
    $userEmail = $_POST['email'];

//        SQL Statement or String to make s secure system
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";

//        Prepared Statement
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 's', $userEmail);
        mysqli_stmt_execute($stmt);
    }
    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
//    Prepared Statement
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, 'ssss', $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close();

//   Email format to user with lost/forgotten password
    $to = $userEmail;
// Subject
    $subject = 'Password Reset Request RADIAN';
// Message content
    $message = '
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Password Reset Link is below</title>
  <link rel="icon" href="../images/radian-logo.png">
</head>
<body>
  <p>We received a password reset request. The link to reset your password is below. If you did not make this request,
   you can ignore this email</p>
   <p>Here is your password reset link below: </p>
   <p><a href=' . $url . ' >' . $url . ' </a></p>
</body>
<footer>
RADIAN H.A. Limited<br>
Address - <a href="https://www.google.com/maps/place/Radian+H.A.+limited/@10.3037774,-61.4547841,17z/data=!4m13!1m7!3m6!1s0x8c358cc5a9dffbe5:0x496a3ddd896df7f3!2sHelen+St,+San+Fernando,+Trinidad+and+Tobago!3b1!8m2!3d10.3037721!4d-61.4525954!3m4!1s0x0:0x302ca17cabf912b5!8m2!3d10.304268!4d-61.4515167">187 Helen Street Marabella, San Fernando, Trinidad and Tobago</a><br>
Office - +1 868 658-0293<br>
E-mail - radianhaltd@gmail.com<br>
</footer>
</html>
';

// To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
    $headers[] = 'To: ' . $userEmail;
    $headers[] = 'From: RADIAN H.A. Limited <arnold.bradshaw@rhatt.com>';
    $headers[] = 'Cc: arnold.bradshaw@rhatt.com';
    $headers[] = 'Bcc: arnoldbradshaw@hotmail.com';

// Mail it
    mail($to, $subject, $message, implode("\r\n", $headers));

    header("Location: reset-password.php?reset=success");
} else {
    header('Location:../index.php');
}