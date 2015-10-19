<?php
header("Content-Type: text/html; charset=UTF-8");

	$ID_project = $_POST['ID_project'];
	$cpe02_name_project = $_POST['cpe02_name_project'];
	$cpe02_DATE = $_POST['cpe02_DATE'];
	$cpe02_HEAD_WORK = $_POST['cpe02_HEAD_WORK'];
	$cpe02_Conclusion = $_POST['cpe02_Conclusion'];
	$cpe02_note = $_POST['cpe02_note'];

	
	$servername = "localhost";
	$username = "root";
	$password = "12345";
	$dbname = "cpe_db";

	mysql_connect("localhost","root","12345");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	$strSQL2_cpe02= "SELECT ID_Implementing FROM implemeting ORDER BY ID_Implementing DESC LIMIT 1";
	$objQuery2_cpe02 = mysql_query($strSQL2_cpe02);
	$objResult2_cpe02 = mysql_fetch_array($objQuery2_cpe02);
	
	//$last_id = substr($objResult2_cpe02["ID_Implementing"], 2);
	$last_id = intval($objResult2_cpe02["ID_Implementing"]);
	$last_id = $last_id+1;
	
	/*
	$sql_insert_cpe02 = "INSERT INTO implemeting (ID_Implementing,Date_Implementing,Assignment_Im,Progress_Im,Note_Im,ID_Project) 
									VALUES ('".$last_id."','".$cpe02_DATE."','".$cpe02_HEAD_WORK."','".$cpe02_Conclusion."'
									,'".$cpe02_note."','PJ00000001')";
*/
	//echo $last_id;
	/**/
	$sql_insert_cpe02 = "INSERT INTO implemeting (ID_Implementing,Date_Implementing,Assignment_Im,Progress_Im,Note_Im,ID_Project) 
									VALUES ('".$last_id."','".$cpe02_DATE."','".$cpe02_HEAD_WORK."','".$cpe02_Conclusion."'
									,'".$cpe02_note."','".$ID_project."')";

	
	mysql_query($sql_insert_cpe02);


header("location:loginsuccess.php");

?>