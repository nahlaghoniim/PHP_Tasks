<?php
$num = 12345;
$last = $num % 10;
$first = $num;
while ($first >= 10) {
    $first = (int)($first / 10);
}
$middle = (int)(($num % 10000) / 10);
$swapped = $last * 10000 + $middle * 10 + $first
;
echo "Swapped number: $swapped";