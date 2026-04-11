<?php 
$count = 0;
$string = "techstudy";
for ($i=0; $i<strlen ($string); $i++){
    if ($string[$i] == "t"){
        $count++;
    }
}
echo "number of 't' in the string is $count <br>";