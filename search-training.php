<?php
/**
 * Created by PhpStorm.
 * User: Arnold Bradshaw
 * Date: 05/22/19
 * Time: 2:42 PM
 */
include('header.php');
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
    <!-- Display a table with the search results -->
    <br>
    <div class="training-container">
        <?php
        if (isset($_POST['scaffolder-search'])) {
            $searchScaff = ($_POST['search-training']);

            include_once('./includes/db-connect.php');

            $sql = "SELECT students.firstName, students.lastName, studenttraining.certNo, studenttraining.courseName,
            studenttraining.startDate,studenttraining.endDate
            FROM students
            INNER JOIN studenttraining ON students.studentID=studenttraining.fkStudentID WHERE 
            lastName ='$searchScaff' OR firstName ='$searchScaff' OR certNo='$searchScaff'
            ORDER BY lastName, firstName, startDate";

            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "<h3>Scaffolder Search Results ($queryResult)</h3>";

            if ($queryResult > 0) {
                echo "<br><br>";
                echo "
                <table class = 'training-search-table' style='float: left'>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Certificate No.</th>
                        <th>Scaffold Course</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['firstName'] . "</td>";
                    echo "<td>" . $row['lastName'] . "</td>";
                    echo "<td>" . $row['certNo'] . "</td>";
                    echo "<td>" . $row['courseName'] . "</td>";
                    echo "<td>" . $row['startDate'] . "</td>";
                    echo "<td>" . $row['endDate'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<p> There are no results that match your query </p>";
                echo "<br>";
            }
            mysqli_close($conn);
        }
        ?>
        </table>
    </div>
</div>
</body>
<br>
<footer>
    <?php include('footer.php'); ?>
</footer>
</html>