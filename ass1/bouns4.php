<form method="post">
    Enter the units number:
    <input type="number" name="units" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = $_POST['units'];
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 0.50;
    } elseif ($units <= 150) {
        $bill = (50 * 0.50) + (($units - 50) * 0.75);
    } elseif ($units <= 250) {
        $bill = (50 * 0.50) + (100 * 0.75) + (($units - 150) * 1.20);
    } else {
        $bill = (50 * 0.50) + (100 * 0.75) + (100 * 1.20) + (($units - 250) * 1.50);
    }

    $total_bill = $bill + ($bill * 0.20);

echo "electricity bill: " . number_format($total_bill, 2) . " currency units";
}
?>