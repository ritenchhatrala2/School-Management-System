<?php
error_reporting();
require("connectionwad.php");
?>
<?php
session_start();
$firstname=$_POST['fname'];
$middlename=$_POST['mname'];
$lastname=$_POST['lname'];
$name=$firstname.$middlename.$lastname;
$dob=$_POST['dob'];
$phneno=$_POST['phneno'];
$mobno=$_POST['mobno'];
$emailid=$_POST['emailid'];
$medium=$_POST['medium'];
$std=$_POST['std'];
$p10=$_POST['p10'];
$age=$_POST['age'];
$address=$_POST['address'];
$city=$_POST['city'];
$bgroup=$_POST['bgroup'];
$username=$_SESSION['username'];
$sql = "UPDATE student SET `name` = '$name', `dob` = '$dob', `address` = '$address', `mobno` = '$mobno', `phneno` = '$phneno', `emailid` = '$emailid', `std` = '$std', `bgroup` = '$bgroup', `city` = '$city', `p10` = '$p10', `medium` = '$medium', `age` = '$age' WHERE `student`.`username` = '$username'";


$r=mysql_query($sql);
if($r)
{
	header('Location: ../pages/sis_student_home.html');
	exit();
}
else
{
	echo "not success";
	//include("../alert/alert_volunteer.html");
}
?>