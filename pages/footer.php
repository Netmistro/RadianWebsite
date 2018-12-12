<?php
/**
 * Created by PhpStorm.
 * User: Brad
 * Date: 10/9/2018
 * Time: 3:12 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RADIAN H.A. Limited</title>
    <link rel="stylesheet" href="<?php echo StyleSheet('footer') ?>">
</head>
<body>
<div class="row">
    <div class="column">
        <h5>Social Links</h5><br>
        <a href="http://www.twitter.com"><img src="<?php echo SocialIcon('twitter-icon') ?>"
                                              alt="Twitter" width="30"></a>
        <a href="http://www.facebook.com/radianhaltd"><img src="<?php echo SocialIcon('facebook-icon') ?>"
                                                           alt="Facebook" width="30"></a>
        <a href="http://www.youtube.com"><img src="<?php echo SocialIcon('youtube-icon') ?>"
                                              alt="Youtube" width="30"></a>
        <a href="http://www.instagram.com"><img src="<?php echo SocialIcon('instagram-icon') ?>"
                                                alt="Instagram" width="30"></a>
        <br><br><br>
        <p> <?php echo "&copy " . date(Y); ?> RADIAN H.A. Limited. All Rights Reserved.</p>
        <span id="siteseal"><script async type="text/javascript"
                                    src="https://seal.godaddy.com/getSeal?sealID=5r3sdbsYbQL2KGHfg0dAkpE07QBMg4lypkTJJ2pk2AON3HTtadydx4bg6kFJ"></script></span>
    </div>
    <div class="column">
        <h5>Contact Information</h5><br>
        <dl class="contact-list">
            <dt><img src="<?php echo ContactImages('address') ?>" alt="Address" width="25">:
                #187 Helen Street, Marabella, Trinidad
            </dt>
            <dt><img src="<?php echo ContactImages('email') ?>" alt="E-Mail" width="25">:
                <a href="mailto:#">radianhaltd@gmail.com</a></dt>
            <dt><img src="<?php echo ContactImages('phone') ?>" alt="Telephone" width="25">:
                <a href="tel:#">+1 868 658-0293 </a><span>or</span> <a href="tel:#">+1 868 658-5946</a>
            </dt>
            <dt><img src="<?php echo ContactImages('phone') ?>" alt="Telephone" width="25">:
                <a href="tel:#">+1 868 223-8823 </a><span>or</span> <a href="tel:#">+1 868 223-8824</a></dt>
            <dt><img src="<?php echo ContactImages('phone') ?>" alt="Telephone" width="25">:
                <a href="tel:#">+1 868 387-0293 </a>
            </dt>
        </dl>
    </div>
</div>
</body>
<footer>

</footer>
</html>