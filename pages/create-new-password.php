<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-12-12
 * Time: 09:18
 */
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create new Password</title>
    <link rel="stylesheet" href="<?php echo StyleSheet('main-style') ?>">
</head>
<body>
<div class="main-page">
    <br>
    <h1>Create New Password</h1>
    <?php
    $selector = $_GET[$selector];
    $validator = $_GET[$validator];
    if (empty($selector) || empty($validator)) {
        echo "Could not validate your request!";
    } else {
//        Check if the tokens are of hexadecimal format
        if (ctype_xdigit($selector) != false && ctype_xdigit($validator) != false) {
            ?>
            <form action="reset-password.php" method="post">
                <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                <input type="password" name="pwd" placeholder="Enter new Password...">
                <input type="password" name="pwd-repeat" placeholder="Repeat new Password...">
                <button type="submit" name="reset-password-submit">Reset Password</button>
            </form>
            <?php
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