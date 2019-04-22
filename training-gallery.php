<?php
// Created by Arnold Bradshaw
// 11th April, 2019
session_start();
require 'header.php';
$_SESSION['username'] = "Admin";
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
                <?php
                include_once('includes/db-connect.php');
                $sql = "SELECT * FROM traininggallery ORDER BY orderGallery DESC";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL Statement Failed!";
                } else {
                    mysqli_stment_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<a href="#">
                    <div style="background-image: url(traning-pics/'.$row["imageFullNameGallery"].');"></div>
                    <h3>' . $row['titleGallery'] . '</h3>
                    <p>' . $row['descGallery'] . '</p>
                    </a>';
                    }
                }
                ?>
            </div>
            <?php
            if (isset($_SESSION['username'])) {
                echo '
                    <div class ="gallery-upload">
                    <h2>Upload</h2>
                    <form action ="includes/gallery-upload.inc.php" method ="POST" enctype ="multipart/form-data">
                     <input type ="text" name ="filename" placeholder ="File Name ...">
                     <input type ="text" name ="filetitle" placeholder ="Image Title ...">
                     <input type ="text" name ="filedesc" placeholder ="Image Description ...">
                     <input type ="file" name ="filename">
                     <button type ="submit" name=submit> UPLOAD </button>
                    </form>
                    </div>';
            }
            ?>
        </div>
    </section>

</body>
<footer>
    <?php require 'footer.php'; ?>
</footer>

</html>