<form method = "post">
    Enter the first angle :
    <input type = "number" name = "angle1">
    Enter the second angle :
    <input type = "number" name = "angle2">         
    Enter the third angle :
    <input type = "number" name = "angle3">
    <input type = "submit" value = "Check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angle1 = $_POST['angle1'];
    $angle2 = $_POST['angle2'];
    $angle3 = $_POST['angle3'];
$sum = $angle1 + $angle2 + $angle3;
if ($sum == 180) {
    echo "The triangle is valid";
} else {
    echo "The triangle is not valid";
}
}