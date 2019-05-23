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
        <h3>Scaffolder Search Results</h3>
        <table>
            <?php
            if (isset($_POST['search-scaffolder'])) {
            $searchScaffolders = mysqli_real_escape_string($conn, $_POST['scaffolder-name']);
            //
            include('./includes/db-connect.php');
            $sql = "SELECT students.firstName, students.lastName, studenttraining.certNo, studenttraining.courseName,
            studenttraining.startDate,studenttraining.endDate
            FROM students
            INNER JOIN studenttraining ON students.studentID=studenttraining.fkStudentID  WHERE firstName = 'Arnold'";

            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            ?>
            <table style="float: left">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Certificate No.</th>
                    <th>Scaffold Course</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
                <?php
                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>";
                        echo $row['firstName'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['lastName'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['certNo'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['courseName'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['startDate'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['endDate'];
                        echo "</td>";

                        echo "</tr>";

                        echo "<br>";

                    }


                } else {
                    echo "<p> Please enter a valid search query </p>";
                }

                mysqli_close($conn);

                }
                ?>

            </table>
    </div>
</div>
</body>
<footer>
    <?php include('footer.php'); ?>
</footer>
</html>