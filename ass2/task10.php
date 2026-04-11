<?php
$string = 'Burch Jr, Philip H., The American Es';

$array = [];

for ($i = 0; $i < strlen($string); $i++) {
    $array[] = $string[$i];
}

print_r($array);
