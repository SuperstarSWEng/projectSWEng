<?php

	//header('Content-type: text/plain; charset=utf-8');
	session_start();
	
	$ID = $_REQUEST['id'];
	//$ID = "55361281";
	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	//echo $ID."\n";
	$SQL_status2 = "SELECT * FROM student WHERE ID_Project = '".$ID."'";
	$objQuery_SQL_status2 = mysql_query($SQL_status2);
	$objQuery_SQL_status2DATA = mysql_fetch_array($objQuery_SQL_status2);
	$objQuery_SQL_status2DATA2 = mysql_fetch_array($objQuery_SQL_status2);
	$objQuery_SQL_status2DATA3 = mysql_fetch_array($objQuery_SQL_status2);
	
	$var = array(
	 'Student_ID'=>$objQuery_SQL_status2DATA[0],'StudentFirstName'=>$objQuery_SQL_status2DATA[1],'StudentLastName'=>$objQuery_SQL_status2DATA[2]
	,'Student_ID2'=>$objQuery_SQL_status2DATA2[0],'StudentFirstName2'=>$objQuery_SQL_status2DATA2[1],'StudentLastName2'=>$objQuery_SQL_status2DATA2[2]
	,'Student_ID3'=>$objQuery_SQL_status2DATA3[0],'StudentFirstName3'=>$objQuery_SQL_status2DATA3[1],'StudentLastName3'=>$objQuery_SQL_status2DATA3[2]);
	
	echo json_encode($var);	
		
?>
