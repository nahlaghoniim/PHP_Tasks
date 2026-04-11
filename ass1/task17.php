<form method = "post">
    Enter your salray:
    <input type = "number" name = "salary">
    <input type = "submit" value = "Check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salary = $_POST['salary'];
   if ($salary <= 10000) {
    $hra=0.2 * $salary;
    $da=0.8 * $salary;
   }
   elseif ($salary <= 20000) {
    $hra=0.25 * $salary;
    $da=0.9 * $salary;
   }
   else {
    $hra=0.3 * $salary;
    $da=0.95 * $salary;
   }
}

$total_salary = $salary + $hra + $da;
echo "Total Salary: " . $total_salary;