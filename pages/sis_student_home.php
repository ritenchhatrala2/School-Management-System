<?php
	include("../php/connectionwad.php");
	session_start();
	$username=$_SESSION['username'];
	$sql= "select * from student where username='$username'";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../homepage.css" rel="stylesheet" type="text/css" />
<link href="cssv2/slides.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style5 {
	font-size: 18px;
	font-weight: bold;
}
.style6 {font-size: 18px; font-weight: bold; color: #FFFFFF; }
-->
</style>
<link href="../sis.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style8 {font-size: 12px}
-->
</style></head>

<body>
<div id="container">
<div id="globalheader">
<ul id="globalnav">
<li><a href="#">riten</a></li>
<li><a href="#">riten</a></li>
<li><a href="../php/logout.php">logout</a></li>
</ul>
</div>
<div class="header"> 
<div id="logo">  
  <div align="center">
    <p class="style5">&nbsp;</p>
    <p class="style6">Logo</p>
  </div>
</div>
</div>
<ul id="mainnav">
<li ><a href="pages/home.php">Home&nbsp;&nbsp;<span>&nbsp;</span></a></li>

<li>
  <a href="sis_student_viewmaterial.php" class="global-contactus">View Material<span>&nbsp;</span></a></li>
<li>
  <a href="pages/facility.php" class="global-contactus">Result&nbsp;&nbsp;<span>&nbsp;</span></a></li>
<li>
 <a href="pages/faculty.php" class="global-contactus">Quiz&nbsp;&nbsp;<span>&nbsp;</span></a></li>
 <li><a href="pages/contact.php" class="global-contactus">Attendence<span>&nbsp;</span></a></li>
<li><a href="pages/sis.php" class="global-contactus">Change Password<span>&nbsp;</span></a></li>

</ul>
<div class="content">
<div class="studenthome">
<center><h3>Student profile</h3></center>
<hr />

<table width="70%" cellpadding="0">

  <tr>
  <td width="54%">Name</td>
  <td width="46%">:<?php echo $row['name'];?></td>
  </tr>
  <tr>
  <td>Batch</td>
  <td>:<?php echo $row['batch'];?></td>
  </tr>
  <tr>
  <td>Date Of Birth</td>
  <td>:<?php echo $row['dob'];?></td>
  </tr>
  <tr>
  <td>Address</td>
  <td>:<?php echo $row['address'];?></td>
  </tr>
  <tr>
  <td>Mobile No</td>
  <td>:<?php echo $row['mobno'];?></td>
  </tr>
  <tr>
  <td>Phn No</td>
  <td>:<?php echo $row['phneno'];?></td>
  </tr>
  <tr>
  <td>Email Id</td>
  <td>:<?php echo $row['emailid'];?></td>
  </tr>
  <tr>
  <td>Standard</td>
  <td>:<?php echo $row['std'];?></td>
  </tr>
  <tr>
  <td>Gr No</td>
  <td>:<?php echo $row['grno'];?></td>
  </tr>
  <tr>
  <td>Blood Group</td>
  <td>:<?php echo $row['bgroup'];?></td>
  </tr>
  <tr>
  <td>Age</td>
  <td>:<?php echo $row['age'];?></td>
  </tr>
  <tr>
  <td>10th Percentage</td>
  <td>:<?php echo $row['p10'];?></td>
  </tr>
  
  
  
</table>

</div>
</div>

<div class="f1">
<ul>
<center><a href="../home.php"><li id="foot"><font color="#FFFFFF">Home</font></li></a>


 &nbsp;&nbsp;|&nbsp;&nbsp; <a href="result.php"><li id="foot"><font color="#FFFFFF">Result</font></li></a>

  &nbsp;&nbsp;|&nbsp;&nbsp;<a href="facility.php" ><li id="foot"><font color="#FFFFFF">Facilities</font></li></a>
 &nbsp;&nbsp;|&nbsp;&nbsp;<a href="faculty.php"><li id="foot"><font color="#FFFFFF">Faculties</font></li></a>  
&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contactus.php"><li id="foot"><font color="#FFFFFF">Contact Us</font></li></a>             
&nbsp;&nbsp;|&nbsp;&nbsp;<a href="sis.php"><li id="foot"><font color="#FFFFFF">SIS</font></li></a></center></ul>
<center>

  <font color="#fffff" face="Comic Sans MS, cursive">copyright © 2013 All Right Reserved</font>
  </center>
</div>
</div>
</body>
</html>
