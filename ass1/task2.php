<?php 
$num1=10;
$num2=20;
$num3=30;
// if ($num1 > $num2 && $num1 > $num3) {
//     echo " $num1 is greater than $num2 and $num3";
// } elseif ($num2 > $num1 && $num2 > $num3) {
//     echo " $num2 is greater than $num1 and $num3";
// } else {
//     echo " $num3 is greater than $num1 and $num2";
// }

// $max = max($num1, $num2, $num3);
// echo "maximum is $max";

$max = $num1 > $num2 ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);
echo "maximum is $max";