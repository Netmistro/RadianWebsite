<?php
/**
 * Created by PhpStorm.
 * User: said
 * Date: 2018-11-22
 * Time: 22:55
 */

?>
<form >
<input type="text" name="num1">
<input type="text" name="num2">
<input type="submit" name="result">
</form>

<?php
if (isset($_GET['result'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $result = $num1 + $num2;
    echo "The answer is: $result";
}