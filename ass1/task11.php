<form method = "post">
    Enter Month number :
    <input type = "number" name = "monthnum" >
    <input type = "submit" value = "Check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monthnum = $_POST['monthnum'];

if ($monthnum == 1 || $monthnum == 3 || $monthnum == 5 || $monthnum == 7 || $monthnum == 8 || $monthnum == 10 || $monthnum == 12) {
    echo "31 days";
} elseif ($monthnum == 4 || $monthnum == 6 || $monthnum == 9 || $monthnum == 11) {
    echo "30 days";
} elseif ($monthnum == 2) {
    echo "28 or 29 days";   
} else { 
    echo "Invalid month number";
}
}