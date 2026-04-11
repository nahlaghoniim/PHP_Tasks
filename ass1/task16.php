<form method = "post">
    Enter Physicis grade :
    <input type = "number" name = "physics">
    Enter Chemistry grade :
    <input type = "number" name = "chemistry">
    Enter Mathematics grade :
    <input type = "number" name = "math">
    Enter Biology grade :
    <input type = "number" name = "biology">
    Enter Computer grade :
    <input type = "number" name = "computer">
    <input type = "submit" value = "Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $math = $_POST['math'];
    $biology = $_POST['biology'];
    $computer = $_POST['computer'];

    $total = $physics + $chemistry + $math + $biology + $computer;
    $percentage = ($total / 500) * 100;
    echo "Total Marks: $total <br>";
    echo "Percentage: $percentage% <br>";
    switch (true) {
        case ($percentage >= 90):
            echo "Grade: A";
            break;
        case ($percentage >= 80):
            echo "Grade: B";
            break;
        case ($percentage >= 70):
            echo "Grade: C";
            break;
        case ($percentage >= 60):
            echo "Grade: D";
            break;
        default:
            echo "Grade: F";
    }
}