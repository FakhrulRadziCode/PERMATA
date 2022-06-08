<?php

include('connection.php');
$username = mysqli_real_escape_string($conn,$_POST['user_id']);
$password = mysqli_real_escape_string($conn,$_POST['user_icno']);

$sql = "SELECT * FROM vw_staff_phg WHERE user_id ='".$username."' AND USER_ICNO = '".$password."'";

$qry = mysqli_query($conn,$sql);
$row = mysqli_num_rows($qry);

if($row > 0) {
    $r = mysqli_fetch_assoc($qry);
    session_start();
    $_SESSION['userlogged'] = 1;
    $_SESSION['user_id'] = $r['user_id'];
    $_SESSION['user_icno'] = $r['user_icno'];
    $_SESSION['user_name'] = $r['user_name'];

    header('Location: dashboard_admin.php');
}
else {
    echo "<script language='javascript'>alert('User does not exist.');window.location='index.php';</script>";
}
?>