<?php
header("Content-Type: text/html; charset=UTF-8");

	$ID_project = $idp;
	

	
	$servername = "localhost";
	$username = "root";
	$password = "12345";
	$dbname = "cpe_db";

	mysql_connect("localhost","root","12345");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	//echo $ID_project;
	$strSQL2_confrimcpe02= "SELECT Status_Project FROM project WHERE ID_Project = '".$ID_project."'";
	$objQuery2_confrimcpe02 = mysql_query($strSQL2_confrimcpe02);
	$objResult2_confrimcpe02 = mysql_fetch_array($objQuery2_confrimcpe02);
	
	//echo $ID_project;
	$last_id = intval($objResult2_confrimcpe02["Status_Project"]);
	$last_id = $last_id+1;

	$sql_confrim_cpe02 = "UPDATE project SET Status_Project = '".$last_id."' WHERE ID_Project = '".$ID_project."' ";
		
	mysql_query($sql_confrim_cpe02);
	
	header("location:loginsuccess.php");

?>