<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="file:///C|/Users/Sunil Lakkad/Desktop/project_wed/homepage.css" rel="stylesheet" type="text/css" />
<link href="file:///S|/project_wed/pages/cssv2/slides.css" rel="stylesheet" type="text/css" />
   <script language="javaScript" type="text/javascript" src="file:///C|/Users/Sunil Lakkad/Desktop/project_wed/js/calendar.js" ></script>

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
</head>

<body bgcolor="#CCCCCC" style="z-index:0">
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
<div class="content" id="fo">
<form action="submit.htm" name="frm1" onSubmit="return validate_required()" method="post">
    <fieldset> <legend>
Student Info:</legend>
<table width="100%">

<tr>
<td width="15%">  
Name:</td><td width="18%">  
<input type="text" id="f_name" size="25" value="First Name"></td><td width="18%"><input type="text" id="m_name" size="20"value="Middle Name"></td><td width="49%"><input type="text" id="l_name" size="20" value="Sur Name"></td>
</tr>
<tr>
<td>
Date Of Birth: </td><td><input id="dob" type="date" name="dob" ></td></tr>
<tr>
<td>
Phone No:</td><td><input type="text" id="ph_no" size="20"></td></tr>

<tr>
<td>Mobile No:</td><td><input type="text" id="mb_no" name="mb_no" size="20"></td></tr>

<tr>
<td>Email Id:</td><td><input type="text" id="email" size="20"></td></tr>
<tr>
<td>Medium:</td><td> <select>
<option id="english" value="english">English</option>
<option id="Gujarati" value="gujarati">Gujarati</option> </select></td><td>
Standard:&nbsp;&nbsp;<select>
<option id="eleventh" value="eleventh">11</option>
<option id="twelth" value="twelth">12</option> </select></td></tr>
<tr>
<td>
10<sup>th</sup>Percentage:</td><td><input type="text" id="per" size="20"></td></tr>
<tr>
<td>
Age: </td><td><input type="text" id="age" name="age" size="20"></td></tr>
<tr>
<td>
Address:</td><td><textarea id="add"></textarea><br/></td></tr>
<tr>
<td>
City:</td><td> <input type="text" id="city" size="20"></td></tr>
<tr>
<td>
Blood group:</td><td> <select>
<option id="A+" value="A+">A+</option>
<option id="A-" value="A-">A-</option>
<option id="B+" value="B+">B+</option>
<option id="B-" value="B-">B-</option>
<option id="AB+" value="AB+">AB+</option>
<option id="AB-" value="AB-">Ab-</option>
<option id="O+" value="O+">O+</option>
<option id="O-" value="O-">O-</option>
</select></td></tr>
</table>




<center><input type="submit" value="Submit">
<input type="reset" value="reset"></center></fieldset></form>

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
