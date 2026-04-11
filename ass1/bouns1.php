<form method = "post">
    Enter Year number:
    <input type="number" name="year">
    <input type="submit" value="Check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'];
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a leap year";
    } else {
        echo "$year is not a leap year";
    }
}