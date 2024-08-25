<?php
if (isset($_POST['Copy'])) {
    $fileToCopy = "uploads/" . basename($_POST["image"]);
    $destination = "backup/" . basename($_POST["image"]);

    if (file_exists($fileToCopy)) {
        if (copy($fileToCopy, $destination)) {
            echo "The file has been copied successfully";
        } else {
            echo "Error: The file could not be copied";
        }
    } else {
        echo "Error: The file does not exist";
    }
} else {
    echo "Copy button not clicked";
}
?>
