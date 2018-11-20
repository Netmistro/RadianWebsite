<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/18/18
 * Time: 2:32 PM
 */
include('header.php');
$train_id = $_SESSION['train_id'];

require('db-connect.php');
$sql = "SELECT * FROM training where train_id =$train_id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $train_id = $row["train_id"];
        $course_code = $row["course_code"];
        $train_title = $row["train_title"];
        $train_cost = $row["train_cost"];
        $course_description = $row["short_description"];
        $start_date = $row["train_start_date"];
        $end_date = $row["train_end_date"];
        $instructor = $row["train_instructor"];
        $spaces_available = $row["train_spaces"];
        $training_image = $row["image"];
    }
} else {
    echo "0 results";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Training</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/main-style.css">
    <link rel="stylesheet" href="../css/training-page.css">
</head>
<body>
<h1>Confirm your training below...</h1><br>
<p>Please review the information below for your training and click the confirm button to book. You are on your way to
    success as a scaffolder. Thank you for choosing RADIAN H.A. Limited to build your career.</p>
<div class="training-container">
    <p><img src="<?php echo "../images/training/" . "$training_image" . ".jpeg"; ?>" alt="Training Image"></p>
    <p>Course Code: <?php echo "$course_code"; ?> </p>
    <p>Course Title: <?php echo "$train_title"; ?></p>
    <?php setlocale(LC_MONETARY, "en_US") ?>
    <p>Cost (TTD): <?php echo money_format("%.2n", $train_cost) ?></p>
    <p>Course Description: <?php echo "$course_description"; ?></p>
    <p>Start Date: <?php echo "$start_date"; ?></p>
    <p>End Date: <?php echo "$end_date"; ?></p>
    <p>Course Instructor: <?php echo "$instructor"; ?></p>
    <p>Spaces Available Now: <?php echo "$spaces_available"; ?></p>
    <form action="confirmation.php" method="post">
        <p><input type="submit" name="confirm" value="Book Now"></p>
    </form>
</div>

</body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>
