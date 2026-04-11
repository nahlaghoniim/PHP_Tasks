<form method="post">
    Enter amount:
    <input type="number" name="amount">
    <input type="submit" value="Count Notes">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $amount = $_POST['amount'];
//floor function is used to round down the number to the nearest integer

    $note200 = floor($amount / 200);
    $amount = $amount % 200;

    $note100 = floor($amount / 100);
    $amount = $amount % 100;

    $note50 = floor($amount / 50);
    $amount = $amount % 50;

    $note20 = floor($amount / 20);
    $amount = $amount % 20;

    $note10 = floor($amount / 10);
    $amount = $amount % 10;

    $note5 = floor($amount / 5);
    $amount = $amount % 5;

    $note1 = $amount;

    echo "200 notes: $note200 <br>";
    echo "100 notes: $note100 <br>";
    echo "50 notes: $note50 <br>";
    echo "20 notes: $note20 <br>";
    echo "10 notes: $note10 <br>";
    echo "5 notes: $note5 <br>";
    echo "1 notes: $note1 <br>";
}

?>