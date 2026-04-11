<?php 
$family = ["Nour", "Nada", "Nahla", "Ahmed"];
unset($family[1]); 
print_r($family); 
echo "</br>";
// Resetting the array indexes
$family = array_values($family);
print_r($family); 
?>
