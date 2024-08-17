<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        img {
            max-width: 100px;
            border-radius: 5px;
        }

        .error {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>User Details</h1>

    <?php
    session_start();

    $id = isset($_GET['id']) ? $_GET['id'] : null;  // Check if 'id' is set
    $users = isset($_SESSION['array']) ? $_SESSION['array'] : [];

    if ($id !== null && isset($users[$id])) {
        $user = $users[$id];
    } else {
        echo "<p class='error'>Invalid User ID.</p>";
        exit;  // Stop further processing if ID is invalid
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Track</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['age'] ?></td>
                <td><?= $user['track'] ?></td>
                <td><img src="<?= $user['img'] ?>" alt="User Image"></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
