<form method="post">
    Enter an alphabet:
    <input type="text" name="letter" maxlength="1">
    <input type="submit" value="Check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// makes the input case-insensetive
    $letter = strtolower($_POST['letter']);

    if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u') {
        echo "It is a Vowel";
    } else {
        echo "It is a Consonant";
    }
}

?>