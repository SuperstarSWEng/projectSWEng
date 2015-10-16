<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:loginnew.php");
		}
		else
		{
			header("location:loginsuccess_techer.php");
		}
		
	}
	else
	{
		header("location:loginsuccess.php");
	}

	 	
	
?>