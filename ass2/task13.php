<?php
$num = 12345;

$last = $num % 10;

$first = $num;
while ($first >= 10) {
    $first = (int)($first / 10);
}

$sum = $first + $last;

echo "Sum: $sum";
