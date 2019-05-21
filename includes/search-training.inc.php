<?php
if (isset($_POST['submit'])) {
//
    include('./db-connect.php');
    $sql = "SELECT students.firstName, students.lastName, studenttraining.certNo, studenttraining.courseName,
    studenttraining.startDate,studenttraining.endDate
    FROM students
    INNER JOIN studenttraining ON students.studentID=studenttraining.fkStudentID where firstName='scaffolder-name';";

    //Data array for Students
    $studentTraining = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($studentTraining)) {
        echo $row['firstName'] . ' ' . $row['lastName'] . ' ' . $row['certNo'] . ' ' . $row['courseName'] . ' ' . $row['startDate'] . ' ' . $row['endDate'] . "<br>";
    }
    mysqli_close($conn);
} else {
    echo "<p> Please enter a valid search query </p>";
}
