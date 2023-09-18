<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "user creation";  // Database name with a space (if intentional)

$con = mysqli_connect($host, $user, $pass, $db);

if ($con) {
    echo "Database is connected";
} else {
    echo "Failed connection with the database";
}
?>


