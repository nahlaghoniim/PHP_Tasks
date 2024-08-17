<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
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

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>User List</h1>

    <?php
    session_start();

    $users = [
        [
            "name" => "Ali",
            "age" => 25,
            "track" => "FrontEnd",
            "img" => "img/Ali.jpeg"
        ],
        [
            "name" => "Lina",
            "age" => 22,
            "track" => "FullStack",
            "img" => "img/Lina.jpeg"
        ],
        [
            "name" => "Sara",
            "age" => 23,
            "track" => "DevOps",
            "img" => "img/Sara.jpeg"
        ]
    ];

    $_SESSION['array'] = $users;
    ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Track</th>
                <th>Image</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through each user and generate table rows -->
            <?php foreach ($users as $index => $user): ?>
            <tr>
                <td><?= $user["name"] ?></td>
                <td><?= $user["age"] ?></td>
                <td><?= $user["track"] ?></td>
                <td><img src="<?= $user["img"] ?>" alt="User Image"></td>
                <td><a href="index1.php?id=<?= $index ?>"><button>Details</button></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
