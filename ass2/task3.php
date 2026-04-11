<?php 
$name = "Nahla";
$result = "";

for ($i = 0; $i < strlen($name); $i++) {
    $upper = $name[$i];

    if ($upper >= 'a' && $upper <= 'z') {
        $upper = chr(ord($upper) - 32);    //ascii value of 'a' is 97 and 'A' is 65, so we subtract 32 to convert to uppercasse
    }

    $result .= $upper;
}

echo "name in uppercase is $result <br>";
