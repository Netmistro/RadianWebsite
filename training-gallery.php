<?php
// Created by Arnold Bradshaw
// 11th April, 2019
session_start();
require 'header.php';
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photo Gallery</title>
    <meta name="RADIAN H.A. Limited" content="Everything Scaffolding, Sale & Rental of Materials, Tools & Training">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/training-gallery.css">
</head>

<body>
    <section class="gallery-links">
        <div class="wrapper">
            <h2>Gallery</h2>
            <div class="gallery-container">
                <a href="#">
                    <div></div>
                    <h3>This is a title</h3>
                    <p>This is a paragraph</p>
                </a>

                <a href="#">
                    <div></div>
                    <h3>This is a title</h3>
                    <p>This is a paragraph</p>
                </a>

                <a href="#">
                    <div></div>
                    <h3>This is a title</h3>
                    <p>This is a paragraph</p>
                </a>

                <a href="#">
                    <div></div>
                    <h3>This is a title</h3>
                    <p>This is a paragraph</p>
                </a>

                <a href="#">
                    <div></div>
                    <h3>This is a title</h3>
                    <p>This is a paragraph</p>
                </a>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '< div class ="gallery-upload ">
                    <form action ="./includes/gallery-upload.inc.php" method ="POST" enctype ="multipart/form-data ">
                     <input type ="text" name ="filename" placeholder ="File Name ... ">
                     <input type ="text" name ="filetitle" placeholder ="Image Title ... ">
                     <input type ="text" name ="filedesc" placeholder ="Image Description ... ">
                     <input type ="file" name ="filename ">
                     <button type ="submit" name =submit >UPLOA D < /butto n>
                     < /form>
                     < /div>';
                }
                ?>
            </div>

        </div>
    </section>

</body>
<footer>
    <?php require 'footer.php'; ?>
</footer>

</html>