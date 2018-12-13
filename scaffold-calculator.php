<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 11/20/18
 * Time: 10:37 PM
 * Scaffold Calculator Page
 */
include('header.php');
include('includes/db-connect.php');
$sql = "SELECT * FROM scaffold_weight";
$scaffold_weight_data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scaffold Weight Calculator</title>
    <link rel="stylesheet" href="css/calculator.css">
</head>
<body>
<div class="calculator-page">
    <br>
    <h2>Scaffold Weight Calculator Ver.1.0</h2>
    <br>
    <form name="form1" method="post" action="scaffold-calculator.php">
        <input type="submit" name="calculate" value="Calculate">
        <input type="submit" name="clear" value="Clear"><br>
        <table>
            <tr>
                <th>Material Description</th>
                <th>Category</th>
                <th style="text-align: center">Qty.</th>
                <th style="text-align: center">Unit Weight (Kg)</th>
                <th style="text-align: center">Weight (Kg)</th>
                <th style="text-align: center">Weight (lbs)</th>
                <th style="text-align: center">Weight (tons)</th>
            </tr>
            <?php
            while ($row_material = mysqli_fetch_assoc($scaffold_weight_data)) {
                $material_description = $row_material['description'];
                $category = $row_material['category'];
                $unit_weight = $row_material['unit_weight_kg'];
                echo "<tr>";
                echo "<td>" . $material_description . "</td>";
                echo "<td>" . $category . "</td>";
                echo "<td style='text-align: center'>" . "<input type='text' name = '$material_id'
                    value = '$_POST[$material_id]' size='15' placeholder='Qty.'>" . "</td>";
                echo "<td style='text-align: right'>" . number_format($unit_weight, 2) . "</td>";
                if (isset($_POST['calculate'])) {
                    $weight_in_kg = $_POST[$material_id] * $unit_weight;
                    $total_weight_kg = $weight_in_kg + $total_weight_kg;
                    $weight_in_lbs = $weight_in_kg * 2.20462;
                    $weight_in_tons = $weight_in_kg / 1000;
                }

                if (isset($_POST['clear'])) {
                    header('location:scaffold-calculator.php');
                }

                echo "<td style='text-align: right'>" . number_format($weight_in_kg, 2) . "</td>";
                echo "<td style='text-align: right'>" . number_format($weight_in_lbs, 2) . "</td>";
                echo "<td style='text-align: right'>" . number_format($weight_in_tons, 2) . "</td>";
                echo "</tr>";
            }
            echo "<div class='head-calculations'>";
            echo "Total Weight in Kg: - " . number_format($total_weight_kg, 2) . "<br>";
            echo "Total Weight in lbs: - " . number_format($total_weight_kg * 2.20462, 2) . "<br>";
            echo "<b>" . "Total Weight in Tons: - " . number_format($total_weight_kg / 1000, 2) . "</b>" . "<br>";
            echo "<br>";
            echo "</div>";
            ?>
    </form>
    </table>
</div>
</body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>