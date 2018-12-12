<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-12-11
 * Time: 23:06
 */
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="<?php echo StyleSheet('main-style') ?>">
</head>
<body>
<div class="main-page">
    <br>
    <h1>Reset Password</h1>
    <p>An email will be sent to you with instructions on how to reset your password.</p>
    <form action="reset-request.php" method="post">
        <input type="text" name="email" placeholder="Enter your e-mail address...">
        <button type="submit" name="reset-request-submit">Receive new Password by e-mail</button>
    </form>

    <?php
    if (isset($_GET['reset'])) {
        if ($_GET['reset'] == "success") {
            echo '<p class = "signupsuccess"> Check your email!</p>';
        }
    }
    ?>
</div>
</body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>
