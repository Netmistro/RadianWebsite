<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/18/18
 * Time: 2:32 PM
 */
include('header.php');
if (isset($_POST['confirm-training']) && $_SESSION['userID'] == true) {
    require('includes/db-connect.php');
    $train_id = $_SESSION['train_id'];
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO `bookings` (`booking_id`, `user_id`, `training_code`) VALUES (NULL, '$user_id', '$train_id');";
    $updateBbookingSpaces = "UPDATE training SET train_spaces = train_spaces-1 WHERE train_id=$train_id";
    if (mysqli_query($conn, $sql)) {
        header("Location: thank-you.php?success=true");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    if ($conn->query($updateBbookingSpaces) === TRUE) {
        echo "Your training has been booked. Thank You!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$train_id = $_SESSION['train_id'];
require('includes/db-connect.php');
$sql = "SELECT * FROM training where train_id = $train_id";
//Echo SQL statement for testing purposes only
//echo $sql;
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
    echo "There was an error booking your training. We apologize for any inconvenience";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Training</title>
    <link rel="stylesheet" href="css/main-style.css">
</head>
<body>
<div class="main-page">
    <h1>Training Confirmation</h1><br>
    <form action="confirmation.php" method="post">
        <p><input type="submit" name="confirm-training" value="Confirm"></p>
    </form>
    <div class="training-container"><br>
        <p>Please confirm your training details below...</p>
        <br>
        <p>Please review the information below of your training details and click the confirm button to book.
            You are now on your way to success. Thank you for choosing RADIAN H.A. Limited to build your career.</p>
        <br>
        <p><img src="<?php echo "images/training/" . "$training_image" . ".jpeg"; ?>" alt="Training Image"></p>
        <br>
        <b><p style="font-size: larger">Course Code: <?php echo "$course_code"; ?> </p></b>
        <p>Course Title: <?php echo "$train_title"; ?></p>
        <?php setlocale(LC_MONETARY, "en_US") ?>
        <p>Cost (TTD): <?php echo money_format("%.2n", $train_cost) ?></p>
        <p>Course Description: <?php echo "$course_description"; ?></p>
        <p>Start Date: <?php echo "$start_date"; ?></p>
        <p>End Date: <?php echo "$end_date"; ?></p>
        <p>Course Instructor: <?php echo "$instructor"; ?></p>
        <p style="font-size: larger">Open Spaces: <span style="color: red"><b><?php echo "$spaces_available"; ?></span></b></p>
        <br>
    </div>
</div>
</body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>