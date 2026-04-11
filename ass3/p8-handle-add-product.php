<?php
function getPriceWithDiscount($price) {
    if ($price > 1000) {
        return $price - ($price * 0.10); 
    } else {
        return $price - ($price * 0.05); 
    }
}

// Store errors
$errors = [];

$name = $_POST['name'] ?? '';
$description = $_POST['description'] ?? '';
$price = $_POST['price'] ?? '';

if (empty($name)) {
    $errors[] = "Name is required.";
} elseif (!is_string($name)) {
    $errors[] = "Name must be a string.";
} elseif (strlen($name) < 5) {
    $errors[] = "Name must be at least 5 characters.";
} elseif (strlen($name) > 255) {
    $errors[] = "Name must not exceed 255 characters.";
}

if (!empty($description) && !is_string($description)) {
    $errors[] = "Description must be a string.";
}

if ($price === '') {
    $errors[] = "Price is required.";
} elseif (!is_numeric($price)) {
    $errors[] = "Price must be a number.";
} elseif ($price < 0) {
    $errors[] = "Price must be greater than or equal to 0.";
}

if (!empty($errors)) {
    echo "<h3>Errors:</h3>";
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
} else {

    $finalPrice = getPriceWithDiscount($price);

    echo "<h3>Product Added Successfully</h3>";
    echo "Name: " . htmlspecialchars($name) . "<br>";

    if (!empty($description)) {
        echo "Description: " . htmlspecialchars($description) . "<br>";
    }

    echo "Price: $price <br>";
    echo "Price after discount: $finalPrice <br>";
}
?>