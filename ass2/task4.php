<?php
$email = "nahlaghoniimm@gmail.com";
$username = "";

for ($i = 0; $i < strlen($email); $i++) {
    if ($email[$i] == '@') {
        break;
    }
    
    $username .= $email[$i]; 
}

echo $username;
