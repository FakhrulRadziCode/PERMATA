<?php

include('connection.php');
$username = $_POST['studentno'];
$password = $_POST['studenticno'];

$query = mysqli_query($conn, "SELECT * FROM student WHERE studentno='$username' AND studenticno = '$password'");

if(mysqli_num_rows($query) == 1) {
    $_SESSION['userlogged'] = 1;
    header('Location:index.php');
}
else {
    header('Location:login.php?error=1');
}
?>