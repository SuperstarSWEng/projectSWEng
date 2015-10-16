<?php
	session_start();
	mysql_connect("localhost","root","4007like");
	mysql_select_db("cpe_db");
	$strSQL = "SELECT * FROM member_student WHERE Student_ID = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password_Student = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			//header("location:loginfail.html");
			//header("location:check_login_Techer.php");
			$strSQL1 = "SELECT * FROM member_teacher WHERE ID_Teacher = '".mysql_real_escape_string($_POST['txtUsername'])."' 
			and Password_Teacher = '".mysql_real_escape_string($_POST['txtPassword'])."'";
			$objQuery1 = mysql_query($strSQL1);
			$objResult1 = mysql_fetch_array($objQuery1);
			if(!$objResult1)
			{
			
			header("location:loginfail.html");
			
			}
			else
			{
			$_SESSION["ID_Teacher"] = $objResult1["ID_Teacher"];

			session_write_close();
			header("location:loginsuccess_techer.php");
			
			}
	}
	else
	{
			$_SESSION["Student_ID"] = $objResult["Student_ID"];

			session_write_close();
			header("location:loginsuccess.php");
			
	}
	mysql_close();
?>