<form method = "POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder= "name" required>
    <input type= "number" name="phone" placeholder= "phone" required>
    <input type= "email" name="email" placeholder= "email" required>
        <input type= "number" name="age" placeholder= "age" required>
        <input type = "password" name = "password" placeholder = "password" required>

    <button type="submit">Submit</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = [
        "name" => $_POST['name'],
        "phone" => $_POST['phone'],
        "email" => $_POST['email'],
        "age" => $_POST['age'],
        "password" => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ];

    foreach ($user as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br>";
    }
}
?>