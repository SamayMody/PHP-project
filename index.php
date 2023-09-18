<?php include 'connection.php'; ?>
<?php
if (isset($_POST['Activate'])) {
    $cname = $_POST['Court Name'];
    $uname = $_POST['Username'];
    $pass = $_POST['Password'];
    $role = $_POST['Role'];

    $query = "INSERT INTO user_details (Court Name,Username,Password,Role ) VALUES ('$cname', '$uname','$pass','$role')";

    $data = mysqli_query($con , $query);
}
?>
