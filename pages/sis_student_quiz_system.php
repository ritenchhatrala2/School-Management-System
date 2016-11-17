<?php
session_start();

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
<script>
function showUser(str)
{
	/*var next = document.getElementById("b2");
	var bk = document.getElementById("b1");*/

	
	var count=0;
	var xmlhttp;
	if(str=="b2")
	{
		 //document.write("ha bhai ha2111"); 

		count++;
	}
	else
	{
	 //document.write("ha bhai ha2111"); 

	count--;
	}
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
   //document.write("ha bhai ha24444"); 

  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   //document.write("ha bhai ha24444"); 

  }
	xmlhttp.onreadystatechange=function()
  {
//console.log ('xmlhttp : ' + xmlhttp.readyState + ', ' + xmlhttp.status);
  	if (xmlhttp.readyState==4)
    {
    document.getElementById("q1").innerHTML=xmlhttp.responseText;
 //document.write("ha bhai ha2888"); 

    }
  }
 //document.write("ha bhai ha2"); 
xmlhttp.open("GET","../php/quiz.php?q="+count,true);
xmlhttp.send();

}

</script>
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
<li ><a href="pages/home.php">Home&nbsp;&nbsp;<span>&nbsp;</span></a></li>

<li>
  <a href="pages/result.php" class="global-contactus">View Material<span>&nbsp;</span></a></li>
<li>
  <a href="pages/facility.php" class="global-contactus">Result&nbsp;&nbsp;<span>&nbsp;</span></a></li>
<li>
 <a href="pages/faculty.php" class="global-contactus">Quiz&nbsp;&nbsp;<span>&nbsp;</span></a></li>
 <li><a href="pages/contact.php" class="global-contactus">Attendence<span>&nbsp;</span></a></li>
<li><a href="pages/sis.php" class="global-contactus">Change Password<span>&nbsp;</span></a></li>
</ul>
<div class="content">
<center><h2>Quiz: SUbject</h2></center>
<br />
<p align="right"><font color="#000000">TIME  :  11:00:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></p>
<hr />
<form method="get">
<div class="student_quiz_sys" id="q1">
<h3>Question - $no</h3>
<p class="bk">gchfdchsgchjvhsh hjvsdhj hjjgjhvcjhs b jhvbhjbsc bhjcvvbsdjcv bjv hvchvc jshvhsvhvhvscvjvshvjvs hjvsjvcsjc</p>
<table width="100%" cellspacing="15">
<tr>
<td width="5%"><input type="radio" name="q1" /></td>
<td width="45%">Option -1</td>
<td width="5%"><input type="radio" name="q1" /></td>
<td width="45%">Option -1</td>
</tr>
<tr>
<td><input type="radio" name="q1" /></td>
<td>Option -1</td>
<td><input type="radio" name="q1" /></td>
<td>Option -1</td>
</tr>
</table>
<center><input type="submit" class="css3button11" value="Submit" /></center><br />
</div>
<br /></form>
<table width="90%" align="center">
<tr>
  <td width="50%">
    <div align="left">
  <button id="b1" type="button" value="b1" onclick="showUser(this.value)"></button>
  </div></td>
  <td width="50%"><div align="right">

  <div align="right">
  <button id="b2" type="button" value="b2" onclick="showUser(this.value)"></button>
  </div>
</td>
</tr>
</table>
</div>

<div class="f1">
<br />
<br />
</div>
</div>
</body>
</html>
