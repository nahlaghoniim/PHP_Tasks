<form method="post">
    Enter the first side :
    <input type="number" name="side1">

    Enter the second side :
    <input type="number" name="side2">

    Enter the third side :
    <input type="number" name="side3">

    <input type="submit" value="Check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];

    if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {

        if ($side1 == $side2 && $side2 == $side3) {
            echo "The triangle is equilateral";
        }
        elseif ($side1 == $side2 || $side1 == $side3 || $side2 == $side3) {
            echo "The triangle is isosceles";
        }
        else {
            echo "The triangle is scalene";
        }

    } else {
        echo "This is not a valid triangle";
    }

}
?>