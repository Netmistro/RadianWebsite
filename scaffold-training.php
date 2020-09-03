<?php
/**
 * Created by PhpStorm.
 * User: Arnold Bradshaw
 * Date: 11/16/18
 * Time: 9:42 PM
 */
session_start();
include('header.php');
if (($_SERVER["REQUEST_METHOD"] == "POST") && ($_SESSION['userID'] == true)) {
    $_SESSION["train_id"] = $_POST["train_id"];
    header('Location: confirmation.php');
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Location: login.php');
}
include_once('includes/db-connect.php');
$sql = "SELECT * FROM training";
// Trainign data array
$training_data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="RADIAN H.A. Limited" content="Everything Scaffolding, Sale & Rental of Materials, Tools & Training">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scaffold Training</title>
    <link rel="stylesheet" href="./css/training.css">
</head>
<body>
<div class="main-page">
    <!--    Display a table caption with the current year    -->
    <br>
    <div class="training-container">
    <h2>Upcoming Training - <?php echo date(Y); ?></h2>

        <table>
            <?php
            while ($row = mysqli_fetch_assoc($training_data)) {
                echo "<tr>";
                echo "<td>";
                $image_path = 'images/training/' . $row['image'] . '.jpeg';
                echo "<img src= $image_path alt='Training' width='300'>" . "<br>";
                echo "</td>";
                echo "<td>";
                echo "<b>" . "Course Code: " . $row['course_code'] . "</b>" . "<br>";
                echo "<b>" . "Course Title: " . "<span style='color: blue'>".$row['train_title'] . "</b>" . "</span>"."<br>";
                echo "<b>"."Cost (TTD): " ."</b>"."$".  $row['train_cost'] . " + VAT"."<br>";
                
                echo "<b>"."Course Description: "."</b>" . $row['short_description'] . "<br>";
                if ($row['train_start_date'] > date("Y-m-d")) {
                    echo "<span style='color: #cd0a0a'>" . "Start Date: " . $row['train_start_date'] . "</span>" . "<br>";
                    echo "<span style='color: #cd0a0a'>" . "End Date: " . $row['train_end_date'] . "</span>" . "<br>";
                    echo "<b>"."Instructor: " ."</b>". $row['train_instructor'] . "<br>";
                    echo "<b>" . "Spaces Available: " . $row['train_spaces'] . "</b>" . "<br>";
                    echo "<form action='scaffold-training.php' method='post'>";
                    echo "<button type='submit' class='btn-book-now' >" . "Book Now" . "</button>" . "<br>";
                    $train_id = $row['train_id'];
                    echo "<input type='hidden' name='train_id' value = $train_id >";
                    echo "</form>";
                }
                echo "</td>";
                echo "</tr>";
            }
            mysqli_close($conn);
            ?>
        </table>
        <br>
    </div>
</div>
</body>
<footer>
    <?php include('footer.php'); ?>
</footer>
</html>
