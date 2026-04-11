<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Images Drive</title>
</head>
<body>

<h2>Images Drive</h2>

<?php

$uploadDir = 'uploads/';

if (is_dir($uploadDir)) {

    $files = scandir($uploadDir);

    foreach ($files as $file) {

        if ($file != '.' && $file != '..') {

            $filePath = $uploadDir . $file;

            echo "<div style='margin-bottom:20px;'>";

            echo "<img src='$filePath' width='200'><br>";

            echo "<a href='$filePath' download>Download</a>";

            echo "</div>";
        }
    }

} else {
    echo "No images uploaded yet.";
}
?>

</body>
</html>