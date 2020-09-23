<?php

/**
 * Created by VSCODE.
 * User: Arnold Bradshaw
 * Date: 2020-10-22
 * Time: 09:19
 */

include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/test.css">
    </head>

    <!--Changing the number in the column_# class changes the number of columns-->

    <body>
        <div id="wrap">
            <h1>Scaffmart - H-Frames</h1><br>
            <div id="columns" class="columns_4">
                <figure>
                    <img src="images/scaff-mart/scaff-mart-5x3x7.png" alt="Scaffoldmart Set" width="300">
                    <figcaption>Scaffmart 5'x 3' Set w/ 7' Bracing</figcaption>
                    <span class="sku">SKU: SMP-0001</span>
                    <a class="button" href="#">More</a>
                </figure>
            </div>

            <div id="columns" class="columns_4">
                <figure>
                    <img src="images/scaff-mart/scaff-mart-5x5x7.png" alt="Scaffoldmart Set" width="300">
                    <figcaption>Scaffmart 5' X 5' Set w/ 7' Bracing</figcaption>
                    <span class="sku">SKU: SMP-0002</span>
                    <a class="button" href="#">More</a>
                </figure>
            </div>
    </body>
    <footer>
        <?php include('footer.php'); ?>
    </footer>

</html>