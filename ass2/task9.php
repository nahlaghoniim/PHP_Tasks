<?php
$sentence = "the good place";
$result = "";
for ($i = 0; $i < strlen($sentence); $i++) {
if ($sentence[$i] == " ") {
    break;
}  
$result .= $sentence[$i];

}
    echo "the first word is $result <br>";



