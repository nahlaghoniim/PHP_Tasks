<?php
$string = "the good place";
$result = "";
for ($i = strlen($string) - 11; $i < strlen($string); $i++) {
    $result .= $string[$i];
}
//removed "the"
echo $result;