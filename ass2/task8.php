<?php
//string with comma
$string = "apple,banana,orange";

for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] == ",") {
        echo "";
    } else {
        echo $string[$i];
    }
}
