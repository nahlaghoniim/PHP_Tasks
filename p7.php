login system
<form method = "POST" enctype="multipart/form-data">
    <input type= "email" name="email" placeholder= "email" required>
    <input type = "password" name = "password" placeholder = "password" required>

    <button type="submit">Submit</button>

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $storedEmail = "user@example.com";
    $storedPassword = password_hash("password", PASSWORD_DEFAULT);

    if ($email === $storedEmail && password_verify($password, $storedPassword)) {
        echo "welcome!";
    } else {
        echo "error!";
    }
}
?>