<?php
header("Content-Type: text/html; charset=UTF-8");
	
	$ID_project = $_POST['ID_project'];
	$cpe07_1 = $_POST['output'];
	$cpe07_2 = $_POST['report_complet'];
	$cpe07_3 = $_POST['knowledge'];
	$cpe07sug = $_POST['cpe07_guide'];
	$cpe07teacher = $_POST['opinion_teacher'];
	$cpe07committee = $_POST['board_resolution'];
	
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "cpe_db";

	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	$strSQL2_cpe07= "SELECT ID_project FROM project ORDER BY ID_project DESC LIMIT 1";
	$objQuery2_cpe07 = mysql_query($strSQL2_cpe07);
	$objResult2_cpe07 = mysql_fetch_array($objQuery2_cpe07);
		
	
	$last_id = intval($objResult2_cpe07["ID_project"]);
	$last_id = $last_id+1;
	

	
	$sql_insert_cpe07 = "INSERT INTO test_eveluation (ID_Test_Eveluation,TestEveluation_Num1,TestEveluation_Num2,TestEveluation_Num3,ID_Project) 
									VALUES ('".$last_id."','".$cpe07_1."','".$cpe07_2."','".$cpe07_3."','".$ID_project."')";

	
	$qry = mysql_query($sql_insert_cpe07);
	
	if($qry){
	$sql_insert_cpe07_02 = "INSERT INTO test_suggestion (ID_Suggestion,Test_Suggestion,ID_Test_Eveluation) 
									VALUES ('".$last_id."','".$cpe07sug."','".$last_id."')";

	
	$qry2 = mysql_query($sql_insert_cpe07_02);
	}
	
	if($qry){
	$sql_insert_cpe07_03 = "INSERT INTO conclude_test (ID_Conclude_Test,Teacher_TestEvaluation,Teacher_TestCommittee,ID_Test_Eveluation) 
									VALUES ('".$last_id."','".$cpe07teacher."','".$cpe07committee."','".$last_id."')";

	
	$qry3 = mysql_query($sql_insert_cpe07_03);
	}
header("location:loginsuccess.php");

?>