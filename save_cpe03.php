<?php
header("Content-Type: text/html; charset=UTF-8");

	$ID_project = $_POST['ID_project'];
	$scope = $_POST['cpe03_scope'];

	
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "cpe_db";

	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	
	$strSQL_cpe03= "SELECT ID_Scope FROM scope_project ORDER BY ID_Scope DESC LIMIT 1";
	$objQuery_cpe03 = mysql_query($strSQL_cpe03);
	$objResult_cpe03 = mysql_fetch_array($objQuery_cpe03);
	
	//$last_id = substr($objResult2_cpe02["ID_Implementing"], 2);
	$last_id = intval($objResult_cpe03["ID_Scope"]);
	$last_id = $last_id+1;
	
	
	$sql_insert_cpe03 = "INSERT INTO scope_project (ID_Scope,Scope,ID_project) 
									VALUES ('".$last_id."','".$scope."' , '".$ID_project."')";

	
	mysql_query($sql_insert_cpe03);


header("location:loginsuccess.php");

?>