<?php
$string = "Hello World";
$result= "";
for ($i = strlen($string) - 3; $i < strlen($string); $i++) {
    $result .= $string[$i];
}
echo $result;