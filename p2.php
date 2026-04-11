<?php
function getPriceWithDiscount($price) {
    if ($price > 1000) {
        return $price - ($price * 0.10); 
    } else {
        return $price - ($price * 0.05); 
    }
}
?>
<form method="POST">
    <input type="number" name="price" placeholder="Enter price" required>
    <button type="submit">Calculate</button>
</form>

<?php
if (isset($_POST['price'])) {
    $price = $_POST['price'];

    $finalPrice = getPriceWithDiscount($price);

    echo "Final Price: " . $finalPrice;
}
?>

</body>
</html>