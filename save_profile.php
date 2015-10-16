<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:login.php");
		}
		
	}
	mysql_connect("localhost","root","4007like");
	mysql_select_db("cpe_db");
	
	if($_POST["txtPassword_Student"] != $_POST["txtConPassword_Student"])
	{
		echo "Password_Student not Match!";
		exit();
	}
	$strSQL = "UPDATE member_student SET Password_Student = '".trim($_POST['txtPassword_Student'])."' 
	,Name = '".trim($_POST['txtName'])."' WHERE Student_ID = '".$_SESSION["Student_ID"]."' ";
	$objQuery = mysql_query($strSQL);
	
	echo "Save Completed!<br>";		
	
	if($_SESSION["Status"] == "ADMIN")
	{
		echo "<br> Go to <a href='admin_page.php'>Admin page</a>";
	}
	else
	{
		echo "<br> Go to <a href='user_page.php'>User page</a>";
	}
	
	mysql_close();
?>