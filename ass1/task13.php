<form method = "post" >
    Enter the fisrt side :
    <input type = "number" name = "side1">
    Enter the second side :
    <input type = "number" name = "side2">
    Enter the third side :
    <input type = "number" name = "side3">
    <input type = "submit" value = "Check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];
    if ( $side1+$side2 > $side3 && $side1+$side3 > $side2 && $side2+$side3 > $side1) {
        echo "The triangle is valid";
    } else {
        echo "The triangle is not valid";
    }   
}