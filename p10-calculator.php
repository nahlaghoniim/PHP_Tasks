<form method = "POST">
    <input type="number" name="num1" placeholder="Number 1" required>
    <input type="number" name="num2" placeholder="Number 2" required>
    <select name="operation" required>
        <option value="">Select Operation</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">×</option>
        <option value="÷">÷</option>
    </select>
    <button type="submit">Calculate</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '÷':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "<p style='color:red;'>Division by zero is not allowed.</p>";
                exit;
            }
            break;
        default:
            echo "<p style='color:red;'>Invalid operation selected.</p>";
            exit;
    }

    echo "<p style='color:green;'>Result: " . $result . "</p>";
}