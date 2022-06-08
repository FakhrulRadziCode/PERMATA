<?php

session_start();
if(isset($_SESSION['studentno']))
{
    include("connection.php");
    $studentno = $_SESSION['studentno'];
    $studentname = $_SESSION['studentname'];
    $studenticno = $_SESSION['studenticno'];
    $sql = "select * from dbstudentsphg.vw_student_phg where studentno = '".$studentno."' and studenticno = '".$studenticno."'";
    $qry = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($qry); 
    if($row > 0)
    {
        $d = mysqli_fetch_assoc($qry);
        $studentno = isset($d['studentno']) ? $d['studentno'] : '';
        $studenticno = isset($d['studenticno']) ? $d['studenticno'] : '';
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $date1 = date('Y/m/d H:i:s');
        if($_SESSION['studentno']=$studentno)
        {
            $sqlNewLogin = "INSERT INTO group_aizat.application_detail (appID,studentno,studenticno,studentname,programBM,programBI,fakultiBM,fakultiBI,kampus,studymodeBM,studymodeBI,studentemail,lettertype,appstatus,apptime,reason,studentemailadd) VALUES ('".$appid."','".$studentno."','".$studenticno."','".$studentname."','".$programmetitlemalay."','".$programmetitleenglish."','".$facultytitlemalay."','".$facultytitleenglish."','".$campustitlemalay."','".$modetitlemalay."','".$modetitleenglish."','".$studentemail."','".$surat."','".$appstatus."','".$date1."','".$reason."','".$studentemailadd."')";
            $queryNewLogin=mysqli_query($conn3,$sqlNewLogin) or die ("Error: ". mysqli_error($conn3));
            $_SESSION['apptime']=$date1;
        }       
        echo"<script language = 'javascript'>alert('The student confirmation letter has been successfully updated');window.location='emailHEA2.php?appid=$appid';</script>";
        header("Location: emailnotification.php?appid=$appid");      
    }
}
?>