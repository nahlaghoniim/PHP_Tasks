<form method="post">
    Enter a: <input type="number" name="a" step="any" required><br>
    Enter b: <input type="number" name="b" step="any" required><br>
    Enter c: <input type="number" name="c" step="any" required><br>
    <input type="submit" value="Find Roots">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a == 0) {
        echo "not a quadratic equation";
        exit;
    }
    $discriminant = $b * $b - 4 * $a * $c;
    if ($discriminant > 0) {
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "Two distinct real roots Root1 = $root1, Root2 = $root2";
    } elseif ($discriminant == 0) {
        $root = -$b / (2 * $a);
        echo "One repeated real root = $root";
    } else {
        $realPart = -$b / (2 * $a);
        $imagPart = sqrt(-$discriminant) / (2 * $a);
        echo "Two complex roots Root1 = {$realPart} + {$imagPart}i, Root2 = {$realPart} - {$imagPart}i";
    }
}
?>

