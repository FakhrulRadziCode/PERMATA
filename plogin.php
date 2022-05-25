<?php

include('connection.php');
$username = mysqli_real_escape_string($conn,$_POST['studentno']);
$password = mysqli_real_escape_string($conn,$_POST['studenticno']);

$sql = "SELECT * FROM students WHERE studentno='".$username."' AND studenticno = '".$password."'";

$qry = mysqli_query($conn,$sql);
$row = mysqli_num_rows($qry);

if($row > 0) {
    $r = mysqli_fetch_assoc($qry);
    session_start();
    $_SESSION['userlogged'] = 1;
    header('Location: dashboard.php');
}
else {
    echo "<script language='javascript'>alert('User does not exist.');window.location='index.php';</script>";
}
?>