<?php
header("Content-Type: text/html; charset=UTF-8");

	$ID_project = $_POST['ID_project'];
	$progress = $_POST['progress'];
	$report = $_POST['report'];
	$knowledge = $_POST['knowledge'];
	$division = $_POST['division'];
	
	$cpe05_guide = $_POST['cpe05_guide'];
	$opinion_teacher = $_POST['opinion_teacher'];
	
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "cpe_db";

	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	$strSQL_cpe05= "SELECT ID_ProEveluation FROM progress_evalution ORDER BY ID_ProEveluation DESC LIMIT 1";
	$objQuery_cpe05 = mysql_query($strSQL_cpe05);
	$objResult_cpe05 = mysql_fetch_array($objQuery_cpe05);
	
	//$last_id = substr($objResult2_cpe02["ID_Implementing"], 2);
	$last_id = intval($objResult_cpe05["ID_ProEveluation"]);
	$last_id = $last_id+1;
	
	$sql_insert_cpe05 = "INSERT INTO progress_evalution (ID_ProEveluation,ProEveluation_Num1,ProEveluation_Num2,ProEveluation_Num3,ProEveluation_Num4,ID_Project) 
								VALUES ('".$last_id."' , '".$progress."', '".$report."', '".$knowledge."', '".$division."', '".$ID_project."')";
	mysql_query($sql_insert_cpe05);
	
	//-------------------------------------------------------------------------------
	$strSQL_cpe05= "SELECT ID_ProSuggestion FROM prograss_suggestion ORDER BY ID_ProSuggestion DESC LIMIT 1";
	$objQuery_cpe05 = mysql_query($strSQL_cpe05);
	$objResult_cpe05 = mysql_fetch_array($objQuery_cpe05);
	
	$last_id_ProSuggestion = intval($objResult_cpe05["ID_ProSuggestion"]);
	$last_id_ProSuggestion = $last_id_ProSuggestion+1;
	
	$sql_insert_cpe05 = "INSERT INTO prograss_suggestion (ID_ProSuggestion,Progress_Suggestion,ID_ProEveluation)
								VALUES ('".$last_id_ProSuggestion."' , '".$cpe05_guide."', '".$last_id."')";
	mysql_query($sql_insert_cpe05);
	
	//-------------------------------------------------------------------------------
	$strSQL_cpe05= "SELECT ID_Conclude FROM conclude_prograss ORDER BY ID_Conclude DESC LIMIT 1";
	$objQuery_cpe05 = mysql_query($strSQL_cpe05);
	$objResult_cpe05 = mysql_fetch_array($objQuery_cpe05);
	
	$last_id_Conclude = intval($objResult_cpe05["ID_Conclude"]);
	$last_id_Conclude = $last_id_Conclude+1;
	
	$sql_insert_cpe05 = "INSERT INTO conclude_prograss (ID_Conclude,ConcludePro,ID_ProEveluation)
								VALUES ('".$last_id_Conclude."' , '".$opinion_teacher."', '".$last_id."')";
	mysql_query($sql_insert_cpe05);
								
header("location:loginsuccess.php");

?>