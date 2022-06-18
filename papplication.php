<?php
include("connection.php");
session_start();

$activity_no = $_POST['activity_no'];//activity - activity_no
$activity_name = $_POST['activity_name'];//activity - activity_name
$organization_id = $_POST['organization_id'];//activity - organization_code
$level_name = $_POST['level_name'];//activity - level_id
$organizer_name = $_POST['organizer_name'];//activity - organizer_name
$coorganizer_name = $_POST['coorganizer_name'];//activity - coorganizer
$objective = $_POST['objective'];//category - objective
$purpose = $_POST['purpose'];//activity - purpose
$activity_background = $_POST['activity_background'];//activity - activity_background
$category_id = $_POST['category_id'];//activity_category - category_id                        +(activity_category_id,     activity_no,     category_id)                                       3
$reservationdate = $_POST['date'];//activity - activity_date
$position = $_POST['position'];//activity - committee                                             5
$cgpa = $_POST['cgpa'];//activity - currentcgpa
$club_advisor_name = $_SESSION['studentname'];//activity - club_advisor_name
$club_advicor_email = $_SESSION['studentemail'];//activity - club_advisor_email
$escort_officer = $_POST['escort_officer'];//activity - escort_officer
$maleparticipant = $_POST['maleparticipant'];//activity - total_men
$femaleparticipant = $_POST['femaleparticipant'];//activity - total_women
$organizergoal = $_POST['organizergoal'];//activity - KI_organizer
$participantgoal = $_POST['participantgoal'];//activity - KI_participant
$closing = $_POST['closing'];//activity - activity_conclusion

//$studentphonenumber = $_SESSION['studentphoneno'];//FFDB
//$studentname = $_SESSION['studentname'];//FFDB
//$studentemail = $_SESSION['studentemail'];//FFDB


$studno =  $_SESSION['studentno'];
$applicationstatus = 'processing';
$user_id=NULL;


$sql = "INSERT INTO activity (activity_no, activity_name, objective, purpose, activity_date, activity_background, organization_name, organization_code, total_men, total_women, club_advisor_name, club_advisor_email, escort_officer, committee, application_status, studentno, USER_ID, currentcgpa, level_id, KI_organizer, KI_participant, activity_conclusion, coorganizer) VALUES('".$activity_no."','".$activity_name."','".$objective."','".$purpose."','".$reservationdate."','".$activity_background."','".$organizer_name."','".$organization_id."','".$maleparticipant."','".$femaleparticipant."','".$club_advisor_name."','".$club_advicor_email."','".$escort_officer."','".$position."','".$applicationstatus."','".$studno."','".$user_id."','".$cgpa."','".$level_name."','".$organizergoal."','".$participantgoal."','".$closing."','".$coorganizer_name."')";
mysqli_query($conn,$sql);

// echo "<script language='javascript'>alert(Application is successful.');window.location='general.php';</script>";
header('Location: pages/forms/general.php');

?>