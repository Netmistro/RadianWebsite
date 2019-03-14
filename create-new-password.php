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
    <meta name="RADIAN H.A. Limited" content="Welcome to RADIAN H.A. Limited, we sell and rent scaffolding materials.
     We also provide CITB Scaffolding Training">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create new Password</title>
    <link rel="stylesheet" href="css/main-style.css">
</head>
<body>
<div class="main-page">
    <br>
    <h1>Create New Password</h1>
    <?php
    $selector = $_GET["selector"];
    $validator = $_GET["validator"];
    if (empty($selector) || empty($validator)) {
        echo "Could not validate your request!";
    } else {
//        Check if the tokens are of hexadecimal format
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
            ?>
            <form action="includes/reset-password.inc.php" method="post">
                <input type="hidden" name="selector" value="<?php echo $selector; ?>" width="200">
                <input type="hidden" name="validator" value="<?php echo $validator; ?>" width="300">
                New Password <br>
                <input type="password" name="pwd" placeholder="Enter new Password..."><br>
                Re-Enter New Password<br>
                <input type="password" name="pwd-repeat" placeholder="Repeat new Password..."><br>
                <button type="submit" name="reset-password-submit">Reset</button>
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