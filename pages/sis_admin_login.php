<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
	//echo $_SESSION['username'];
      header('Location: ../pages/sis_student_home.html');
}

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
.style1 {
	font-size: 36px;
	color: #0000FF;
}
.style3 {font-size: 36px; color: #0000FF; font-weight: bold; }
.style4 {font-size: 24px}
.style5 {
	font-size: 18px;
	font-weight: bold;
}
.style6 {font-size: 18px; font-weight: bold; color: #FFFFFF; }
.style7 {color: #FFFFFF}
-->
</style>
<link href="../sis.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<div id="globalheader">
<ul id="globalnav">
<li><a href="#">riten</a></li>
<li><a href="#">riten</a></li>
<li><a href="#">riten</a></li>
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
<li ><a href="../home.php">Home&nbsp;&nbsp;<span>&nbsp;</span></a></li>

<li>
  <a href="result.php" class="global-contactus">Result&nbsp;&nbsp;<span>&nbsp;</span></a></li>
<li>
  <a href="facility.php" class="global-contactus">Facilities&nbsp;&nbsp;<span>&nbsp;</span></a></li>
<li>
 <a href="faculty.php" class="global-contactus">Faculties&nbsp;&nbsp;<span>&nbsp;</span></a></li>
 <li><a href="contactus.php" class="global-contactus">Contact Us&nbsp;&nbsp;<span>&nbsp;</span></a></li>
<li><a href="sis.php" class="global-contactus">SIS&nbsp;&nbsp;<span>&nbsp;</span></a></li>


</ul>
<div class="content">
<div class="student_login">
<center><h3>Admin Login</h3></center>
<hr />
<br />
<form action="../php/sis_student_login.php" method="post">
<table height="87" align="center" cellspacing="10">
<tr>
<td>Username</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
</table>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="css3button11" value="Submit" />&nbsp;&nbsp;&nbsp;
  <input type="reset" class="css3button11" >
  <p>&nbsp;</p>
</center>
</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>

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
