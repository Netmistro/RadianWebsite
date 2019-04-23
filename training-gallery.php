<?php
// Created by Arnold Bradshaw
// 11th April, 2019
session_start();
require 'header.php';
// INIT
$dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
$tdir = __DIR__ . DIRECTORY_SEPARATOR . "thumbnail" . DIRECTORY_SEPARATOR;
$maxLong = 600; // maximum width or height, whichever is longer
$quality = 40;
$images = [];

// READ FILES FROM GALLERY FOLDER
$files = glob($dir . "*.{jpg,jpeg,gif,png}", GLOB_BRACE);

// CHECK AND GENERATE THUMBNAILS
foreach ($files as $f) {
    $img = basename($f);
    $images[] = $img;
    if (!file_exists($tdir . $img)) {
        list($width, $height) = getimagesize($dir . $img);
        $ratio = $width > $height ? $maxLong / $width : $maxLong / $height;
        $newWidth = ceil($width * $ratio);
        $newHeight = ceil($height * $ratio);
        $source = imagecreatefromjpeg($dir . $img);
        $destination = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($destination, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagejpeg($destination, $tdir . $img, $quality);
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photo Gallery</title>
    <meta name="RADIAN H.A. Limited" content="Everything Scaffolding, Sale & Rental of Materials, Tools & Training">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/training-gallery.css">
    <script src="./js/thumbnail.js"></script>
</head>

<body>
<div class=training-gallery>
<!-- Lightbox  -->
    <div id="lfront"></div>
    <div id="lback"></div>

<!-- The Gallery -->
    <div id="gallery">
    <?php
    foreach ($images as $i) {
        printf("<img src='thumbnail/%s' onclick='gallery.show(this)'/>", basename($i));
    }
    ?>
    </div>

</div>
</body>
<footer>
    <?php require 'footer.php';?>
</footer>

</html>