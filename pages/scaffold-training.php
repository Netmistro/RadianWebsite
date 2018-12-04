<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/16/18
 * Time: 9:42 PM
 */
include('header.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["train_id"] = $_POST["train_id"];
    header("location:confirmation.php");
}
include('db-connect.php');
$sql = "SELECT * FROM training";
$training_data = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RADIAN Training</title>
    <link rel="stylesheet" href="<?php echo StyleSheet('main-style') ?>">
    <link rel="stylesheet" href="<?php echo StyleSheet('training-page') ?>">
</head>
<body>
<div class="main-page">
    <!--    Display a table caption with the current year    -->
    <h1>
        <br>
        <caption>Training lineup for <?php echo date(Y); ?></caption>
        <br>
    </h1>
    <div class="training-container">
        <table>
            <?php
            while ($row = mysqli_fetch_assoc($training_data)) {
                echo "<tr>";
                echo "<td>";
                $image_path = '../images/training/' . $row['image'] . '.jpeg';
                echo "<img src= $image_path alt='Training' width='300'>" . "<br>";
                echo "</td>";
                echo "<td>";
                echo "Course Code: " . $row['course_code'] . "<br>";
                echo "Course Title: " . $row['train_title'] . "<br>";
                setlocale(LC_MONETARY, "en_US");
                echo "Cost (TTD): " . money_format("%.2n", $row['train_cost']) . "<br>";
                echo "Course Description: " . $row['short_description'] . "<br>";
                echo "Start Date: " . $row['train_start_date'] . "<br>";
                echo "End Date: " . $row['train_end_date'] . "<br>";
                echo "Instructor: " . $row['train_instructor'] . "<br>";
                echo "Spaces Available: " . $row['train_spaces'] . "<br>";
                echo "<form action='scaffold-training.php' method='post'>";
                echo "<button type='submit' class='btn-book-now' >" . "Book Now" . "</button>" . "<br>";
                $train_id = $row['train_id'];
                echo "<input type='hidden' name='train_id' value = $train_id >";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>
</div>
</body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>
