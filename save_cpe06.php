<?php
header("Content-Type: text/html; charset=UTF-8");
	
	$ID_project = $_POST['ID_project'];
	$cpe06_OP = $_POST['cpe06_opinion'];
	$cpe06_opteacher = $_POST['opinion_teacher'];
	
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "cpe_db";

	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	$strSQL2_cpe06= "SELECT ID_project FROM project ORDER BY ID_project DESC LIMIT 1";
	$objQuery2_cpe06 = mysql_query($strSQL2_cpe06);
	$objResult2_cpe06 = mysql_fetch_array($objQuery2_cpe06);
		
	
	$last_id = intval($objResult2_cpe06["ID_project"]);
	$last_id = $last_id+1;
	

	
	$sql_insert_cpe06 = "INSERT INTO comment_adviser (ID_Comment,Comment,ID_Project) 
									VALUES ('".$last_id."','".$cpe06_OP."','".$ID_project."')";

	
	$qry = mysql_query($sql_insert_cpe06);
	
	if($qry){
	$sql_insert_cpe06_02 = "INSERT INTO conclude_comment (ID_ConclusionOfComment,ConclusionOfComment,ID_Comment) 
									VALUES ('".$last_id."','".$cpe06_opteacher."','".$last_id."')";

	
	$qry2 = mysql_query($sql_insert_cpe06_02);
	}
header("location:loginsuccess.php");

?>