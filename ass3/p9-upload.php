<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Image</title>
</head>
<body>

<h2>Upload Image</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/*" required><br><br>
    <input type="text" name="image_name" placeholder="Enter image name (optional)"><br><br>
    <button type="submit">Upload</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $image = $_FILES['image'];
    $imageName = $_POST['image_name'] ?? '';

    if ($image['error'] === UPLOAD_ERR_OK) {

        $uploadDir = 'uploads/';

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        $originalName = basename($image['name']);
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);

        if (empty($imageName)) {
            $imageName = pathinfo($originalName, PATHINFO_FILENAME);
        }

        $newFileName = $uploadDir . $imageName . '.' . $extension;

        if (file_exists($newFileName)) {
            $imageName .= '_' . time();
            $newFileName = $uploadDir . $imageName . '.' . $extension;
        }

        if (move_uploaded_file($image['tmp_name'], $newFileName)) {
            echo "<p style='color:green;'>Image uploaded successfully!</p>";
        } else {
            echo "<p style='color:red;'>Failed to upload image.</p>";
        }

    } else {
        echo "<p style='color:red;'>Error uploading image.</p>";
    }
}
?>

</body>
</html>



