<?php
if (isset($_FILES['image'])) {
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) { // Limit file size to 5MB
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;

                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    echo "File uploaded successfully!";
                } else {
                    echo "Error: Failed to upload file.";
                }
            } else {
                echo "Error: Your file is too large.";
            }
        } else {
            echo "Error: There was an error uploading your file.";
        }
    } else {
        echo "Error: You cannot upload files of this type.";
    }
} else {
    echo "No file was uploaded.";
}
?>
