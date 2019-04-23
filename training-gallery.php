<?php
// Created by Arnold Bradshaw
// 11th April, 2019
session_start();
require 'header.php';
include_once('includes/db-connect.php');
$sql = "SELECT * FROM training_gallery";
$gallery_Data = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photo Gallery</title>
    <meta name="RADIAN H.A. Limited" content="Everything Scaffolding, Sale & Rental of Materials, Tools & Training">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/training-gallery.css">
</head>

<body>
<div class=training-gallery>
    <div class=training-block>
    <?php
        while ($row = mysqli_fetch_assoc($gallery_Data)) {
            echo '<div class="training-images">';
            $image_Path = 'trainingGallery/' . $row['desc_Gallery'] .'/'.$row['image_Name']. '.jpg';
            echo "<img src= '$image_Path' alt='Training' width='25%'>" . "<br>";
            echo'</div>';
            
            echo'<div class=gallery-text>';
            echo $row['title_Gallery'].'<br>';
            echo 'Start Date:'.$row['train_Start_Date'].'<br>';
            echo 'End Date:'.$row['train_End_Date'].'<br>';
            echo'</div>';
                }
        mysqli_close($conn);
    ?>
    </div>
</div>
</body>
<footer>
    <?php require 'footer.php';?>
</footer>

</html>