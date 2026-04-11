
<form method = "
GET">
    <input type="text" name="name" placeholder= "name" required>
    <input type= "text" name="type" placeholder= "type" required>
    <input type= "number" name="price" placeholder= "price" required>
    <button type="submit">Submit</button>""
</form>
<?php
if (isset($_GET['name']) && isset($_GET['type']) && isset($_GET['price'])) {
    $name = $_GET['name'];
    $type = $_GET['type'];
    $price = $_GET['price'];

    echo "Name: " . $name . "<br>";
    echo "Type: " . $type . "<br>";
    echo "Price: " . $price;
}