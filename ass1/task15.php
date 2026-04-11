<?php
$cost_price = 200;
$selling_price = 300;

if ($selling_price > $cost_price) {
    $profit = $selling_price - $cost_price;
    echo "Profit = " . $profit;
} elseif ($cost_price > $selling_price) {
    $loss = $cost_price - $selling_price;
    echo "Loss = " . $loss;
} else {
    echo "No Profit No Loss";
}
?>