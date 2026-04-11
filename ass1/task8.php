<form method="post">
    Enter an character:
    <input type="text" name="char" maxlength="1">
    <input type="submit" value="Check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $char = $_POST['char'];
if ($char >= 'a' && $char <= 'z' || $char >= 'A' && $char <= 'Z') {
    echo "$char is an alphabet";
} elseif ($char >= '0' && $char <= '9') {
    echo "$char is digit";
}
else {
    echo "$char is a special character";
}
}
