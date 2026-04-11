<form method="post">
    Enter a week number :
    <input type="number" name="weeknum" >
    <input type="submit" value="Check">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weeknum = $_POST['weeknum'];
}
switch ($weeknum) {
    case 1;
    echo "Saturday";
    break;
    case 2;
    echo "Sunday";          
    break;
    case 3;
    echo "Monday";
    break;
    case 4;
    echo "Tuesday";
    break;
    case 5;
    echo "Wednesday";
    break;
    case 6;
    echo "Thursday";
    break;
    case 7;
    echo "Friday";
    break;
    default;
    echo "Invalid week number";
}