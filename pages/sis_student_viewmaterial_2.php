<?php
	include('../php/connectionwad.php');
	session_start();
	$ch=$_POST['ch'];
	$phy=$_POST['phy'];
	$mat=$_POST['mat'];
	$com=$_POST['com'];
	$english=$_POST['eng'];
	$bio=$_POST['bio'];
	echo $ch;
	$ans;
	if($ch!='')
	$ans=$ch;
	if($phy!='')
	$ans=$phy;
	if($mat!='')
	$ans=$mat;
	if($com!='')
	$ans=$com;
	if($bio!='')
	$ans=$bio;
	if($eng!='')
	$ans=$eng;
	
		
	$sql= "SELECT * FROM material WHERE subject='$ans'";
	$query=mysql_query($sql);
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
<center><h2>Attendence</h2></center>
<hr />
<div class="student_attendence">
<table width="100%" border="1">
<tr>
<th width="5%">Sr No</th>
<th width="14%">Category</th>
<th width="19%">Faculty</th>
<th width="19%">Subject</th>
<th width="19%">Update On</th>
<th width="24%">Download</th>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($query))
{
	$i++;
	if($i%2!=0)
	{
	echo "<tr>";
	echo "<td>" .$i. "</td>";
	echo "<td>" .$row[1]. "</td>";
	echo "<td>" .$row[2]. "</td>";
	echo "<td>" .$row[3]. "</td>";
	echo "<td>" .$row[4]. "</td>";
	echo "<td><a href='$row[5]'>" ."Download". "</a></td>";
	echo "</tr>";
	}
	else
	{
	echo "<tr class='th1'>";
	echo "<td>" .$i. "</td>";
	echo "<td>" .$row[1]. "</td>";
	echo "<td>" .$row[2]. "</td>";
	echo "<td>" .$row[3]. "</td>";
	echo "<td>" .$row[4]. "</td>";
	echo "<td><a href='$row[5]'>" ."Download". "</a></td>";
	echo "</tr>";
	}
}

?>
</table>
</div>
<p>&nbsp;</p>
</div>

<div class="f1">
<ul>
<center><a href="#"><li id="foot"><font color="#FFFFFF">Home</font></li></a>


 &nbsp;&nbsp;|&nbsp;&nbsp; <a href="pages/result.php"><li id="foot"><font color="#FFFFFF">Result</font></li></a>

  &nbsp;&nbsp;|&nbsp;&nbsp;<a href="pages/facility.php" ><li id="foot"><font color="#FFFFFF">Facilities</font></li></a>
 &nbsp;&nbsp;|&nbsp;&nbsp;<a href="pages/faculty.php"><li id="foot"><font color="#FFFFFF">Faculties</font></li></a> 
&nbsp;&nbsp;|&nbsp;&nbsp;<a href="pages/contact.php"><li id="foot"><font color="#FFFFFF">Contact Us</font></li></a>             
&nbsp;&nbsp;|&nbsp;&nbsp;<a href="pages/sis.php"><li id="foot"><font color="#FFFFFF">SIS</font></li></a></center>
</ul>
<center>

  <font color="#fffff" face="Comic Sans MS, cursive">copyright � 2013 All Right Reserved</font>
  </center>
</div>
</div>
</body>
</html>
