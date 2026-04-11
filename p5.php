<form method="POST">

    <h3>Product 1</h3>
    <input type="text" name="p1_name" placeholder="Name" required>
    <input type="text" name="p1_type" placeholder="Type" required>
    <input type="number" name="p1_price" placeholder="Price" required>

    <h3>Product 2</h3>
    <input type="text" name="p2_name" placeholder="Name" required>
    <input type="text" name="p2_type" placeholder="Type" required>
    <input type="number" name="p2_price" placeholder="Price" required>
    <input type="text" name="p2_offer" placeholder="Offer">

    <button type="submit">Submit</button>

</form>
<?php
if (isset($_POST['p1_name']) && isset($_POST['p1_type']) && isset($_POST['p1_price']) &&
    isset($_POST['p2_name']) && isset($_POST['p2_type']) && isset($_POST['p2_price'])) {
    
    $product1 = [
        'name' => $_POST['p1_name'],
        'type' => $_POST['p1_type'],
        'price' => $_POST['p1_price']
    ];

    $product2 = [
        'name' => $_POST['p2_name'],
        'type' => $_POST['p2_type'],
        'price' => $_POST['p2_price'],
        'offer' => isset($_POST['p2_offer']) ? $_POST['p2_offer'] : null
    ];

    $products = [$product1, $product2];

    foreach ($products as $index => $product) {
        echo "<h3>Product " . ($index + 1) . "</h3>";

        foreach ($product as $key => $value) {
            if ($value !== null && $value !== '') {
                echo ucfirst($key) . ": $value <br>";
            }
        }

        echo "<br>";
    }
}
?>