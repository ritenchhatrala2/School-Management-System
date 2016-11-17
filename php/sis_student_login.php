<?php

include('connectionwad.php');

$username=$_POST['username'];
$password=$_POST['password'];
$login = mysql_query("SELECT * FROM student WHERE username='$username' and password='$password'");
$row=mysql_fetch_array($login);
$count=0;
if (mysql_num_rows($login) == 1)
 {
		 session_start();
		$_SESSION['username']=$_POST['username'];
		$_SESSION['password']=$_POST['password'];
		
		for($i=0;$i<18;$i++)
		{
			if($row[$i]=="")      
			{
			$count++;
 				
			}
		}
		if($count==0)
		{
			header('Location: ../pages/sis_student_home.html');
		}
		else
		{
			header('Location: ../pages/student_form.html');
		}
} 
	else
	{
 		include("../alert/alert1.html");

	}



?>