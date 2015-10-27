<?php
header("Content-Type: text/html; charset=UTF-8");

	$ID_project = $_POST['ID_project'];
	$number_student = $_POST['number_student'];
	$origin_significance = $_POST['origin_significance'];
	$purpose = $_POST['purpose'];
	$theory = $_POST['theory'];
	$present = $_POST['present'];
	$scope = $_POST['scope'];
	$cpe04_guide = $_POST['cpe04_guide'];
	$opinion_teacher = $_POST['opinion_teacher'];
	$board_resolution = $_POST['board_resolution'];
	
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "cpe_db";

	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	$strSQL_cpe04= "SELECT ID_Proposal_Eveluation FROM proposal_eveluation ORDER BY ID_Proposal_Eveluation DESC LIMIT 1";
	$objQuery_cpe04 = mysql_query($strSQL_cpe04);
	$objResult_cpe04 = mysql_fetch_array($objQuery_cpe04);
	
	//$last_id = substr($objResult2_cpe02["ID_Implementing"], 2);
	$last_id = intval($objResult_cpe04["ID_Proposal_Eveluation"]);
	$last_id = $last_id+1;
	
	$sql_insert_cpe04 = "INSERT INTO proposal_eveluation (ID_Proposal_Eveluation,Eveluation_Num1,Eveluation_Num2,Eveluation_Num3,Eveluation_Num4,Eveluation_Num5,Eveluation_Num6,ID_Project) 
								VALUES ('".$last_id."' , '".$number_student."', '".$origin_significance."', '".$purpose."', '".$theory."', '".$present."', '".$scope."', '".$ID_project."')";
	mysql_query($sql_insert_cpe04);
	
	//-------------------------------------------------------------------------------
	$strSQL_cpe04= "SELECT ID_Proposal_Suggestion FROM proposal_suggestion ORDER BY ID_Proposal_Suggestion DESC LIMIT 1";
	$objQuery_cpe04 = mysql_query($strSQL_cpe04);
	$objResult_cpe04 = mysql_fetch_array($objQuery_cpe04);
	
	$last_id_Suggestion = intval($objResult_cpe04["ID_Proposal_Suggestion"]);
	$last_id_Suggestion = $last_id_Suggestion+1;
	
	$sql_insert_cpe04 = "INSERT INTO proposal_suggestion (ID_Proposal_Suggestion,Proposal_Suggestion,ID_Proposal_Eveluation)
								VALUES ('".$last_id_Suggestion."' , '".$cpe04_guide."', '".$last_id."')";
	mysql_query($sql_insert_cpe04);
	
	//-------------------------------------------------------------------------------
	$strSQL_cpe04= "SELECT ID_Conclude_Proposal FROM conclude_proposal ORDER BY ID_Conclude_Proposal DESC LIMIT 1";
	$objQuery_cpe04 = mysql_query($strSQL_cpe04);
	$objResult_cpe04 = mysql_fetch_array($objQuery_cpe04);
	
	$last_id_Conclude = intval($objResult_cpe04["ID_Conclude_Proposal"]);
	$last_id_Conclude = $last_id_Conclude+1;
	
	$sql_insert_cpe04 = "INSERT INTO conclude_proposal (ID_Conclude_Proposal,Teacher_evaluation,Teacher_committee,ID_Proposal_Eveluation)
								VALUES ('".$last_id_Conclude."' , '".$opinion_teacher."', '".$board_resolution."', '".$last_id."')";
	mysql_query($sql_insert_cpe04);
								
header("location:loginsuccess.php");

?>