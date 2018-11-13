<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/12/18
 * Time: 9:19 PM
 */
include('header.php');
include('db-connect.php');
$sql = "SELECT * FROM training";
$training_data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RADIAN Training</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main-style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/training-page.css"
</head>
<body>

<!--    Display a table caption with the current year    -->
<caption>Training for <?php echo date(Y); ?></caption>
<br>
<table>
    <div class="training-table">
        <tr>
            <th>Course Code</th>
            <th>Title</th>
            <th>Price (TTD)</th>
            <th>Course Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Instructor</th>
            <th>Spaces</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($training_data)) {
            echo "<tr>";
            echo "<td>" . $row['train_id'] . "</td>";
            echo "<td>" . $row['train_title'] . "</td>";
            echo "<td>" . $row['train_cost'] . "</td>";
            echo "<td>" . $row['short_description'] . "</td>";
            echo "<td>" . $row['train_start_date'] . "</td>";
            echo "<td>" . $row['train_end_date'] . "</td>";
            echo "<td>" . $row['train_instructor'] . "</td>";
            echo "<td>" . $row['train_spaces'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($conn);
        ?>
    </div>
</table>
</body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>
