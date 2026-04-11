<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>

<h2>Add New Product</h2>

<form method="POST" action="handle-add-product.php">
    
    <label>Product Name:</label><br>
    <input type="text" name="name" placeholder="Enter product name"><br><br>

    <label>Description:</label><br>
    <textarea name="description" placeholder="Enter description (optional)"></textarea><br><br>

    <label>Price:</label><br>
    <input type="number" name="price" placeholder="Enter price"><br><br>

    <button type="submit">Add Product</button>
</form>

</body>
</html>