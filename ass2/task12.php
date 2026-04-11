<?php
$num = 12345;
$last = $num % 10;
$first = $num;
while ($first >= 10) {
    $first = (int)($first / 10);
}

echo "First digit: $first <br>";
echo "Last digit: $last";
