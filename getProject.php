<?php

	//header('Content-type: text/plain; charset=utf-8');
	session_start();
	
	$ID = $_REQUEST['id'];
	//$ID = "55361281";
	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	//echo $ID."\n";
	$SQL_status2 = "SELECT * FROM project WHERE ID_Project = ".$ID;
	$objQuery_SQL_status2 = mysql_query("SELECT * FROM project WHERE ID_Project = '".$ID."' ");
	$objQuery_SQL_status2DATA = mysql_fetch_array($objQuery_SQL_status2);
/* 	
	$query_Student_USER = mysql_query ("SELECT * FROM `USER` WHERE ID_USER = '".$ID."' AND ID_project = '' ");
	$Student_USER = mysql_fetch_array($query_Student_USER);
	$emtry = true;
	if($Student_USER)
	{
		$emtry = false;
	}
	else
	{
		$emtry = true;
	} */
	
	$var = array('ID_Project'=>$objQuery_SQL_status2DATA[0],'ProjectName_TH'=>$objQuery_SQL_status2DATA[1],'ProjectName_EN'=>$objQuery_SQL_status2DATA[2],'Status_Project'=>$objQuery_SQL_status2DATA[3],'ID_Teacher'=>$objQuery_SQL_status2DATA[4],'ID_Teacher2'=>$objQuery_SQL_status2DATA[5],'ID_Teacher3'=>$objQuery_SQL_status2DATA[6]);
	
	echo json_encode($var);	
	

	
?>
