<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>

</head>

<body>
<h1>Home</h1>

<?php if (isset($_SESSION["user_id"])): ?>
<p> You are logged in </p>

<?php else: ?>
<p> <a href="login.php"> Login </a> or <a href="signup.php"> Sign up </a> </p>

<?php endif; ?>

</body>
</html>
