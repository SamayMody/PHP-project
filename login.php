<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$mysqli = require __DIR__ . "/database.php";
$sql = sprintf("SELECT * FROM user
               WHERE username = '%s'" ,
               $_POST["username"]);

$result = $mysqli->query($sql);

$user = $result->fetch_assoc();

if ($user){
    if (password_verify($_POST["password"], $user["password_hash"])) {
        die("Login Successful");

        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php");
        exit;
    }
}

$is_invalid = true;
}













































?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>

</head>

<body>
<h1>Login</h1>

<?php if ($is_invalid): ?>
<em>Invalid credentials</em>
<?php endif; ?>

<form method="post">

    <label for="username">Username</label>
    <input type="text" name="username" id="username">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <button>Log In</button>

</form>

</body>
</html>
