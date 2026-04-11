<?php 
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
?>
<form method="POST">
    <input type="number" name="number" placeholder="Enter a number" required>
    <button type="submit">Calculate</button>
</form>

<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];

    $result = factorial($number);

    echo "Factorial of $number is $result";
}
?>

