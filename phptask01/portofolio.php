<?php
require "scnd.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Management</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h1>Project Portfolio</h1>
    <table>
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $project1_name; ?></td>
                <td><?php echo $project1_description; ?></td>
                <td><img src="<?php echo $project1_image; ?>" alt="<?php echo $project1_name; ?>" width="150"></td>
            </tr>
            <tr>
                <td><?php echo $project2_name; ?></td>
                <td><?php echo $project2_description; ?></td>
                <td><img src="<?php echo $project2_image; ?>" alt="<?php echo $project2_name; ?>" width="150"></td>
            </tr>
            <tr>
                <td><?php echo $project3_name; ?></td>
                <td><?php echo $project3_description; ?></td>
                <td><img src="<?php echo $project3_image; ?>" alt="<?php echo $project3_name; ?>" width="150"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
