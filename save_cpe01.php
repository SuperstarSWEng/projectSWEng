<?php
header("Content-Type: text/html; charset=UTF-8");
	$project_thai_name = $_POST['project_thai_name'];
    $project_eng_name = $_POST['project_eng_name'];
	$std_name1 = $_POST['std_name1'];
	$std_name2 = $_POST['std_name2'];
	$std_name3 = $_POST['std_name3'];
	$std_lastname1 = $_POST['std_lastname1'];
	$std_lastname2 = $_POST['std_lastname2'];
	$std_lastname3 = $_POST['std_lastname3'];
	$std_name_id1 = $_POST['std_name_id1'];
	$std_name_id2 = $_POST['std_name_id2'];
	$std_name_id3 = $_POST['std_name_id3'];
	$std_name_phone1 = $_POST['std_name_phone1'];
	$std_name_phone2 = $_POST['std_name_phone2'];
	$std_name_phone3 = $_POST['std_name_phone3'];
	$std_name_email1 = $_POST['std_name_email1'];
	$std_name_email2 = $_POST['std_name_email2'];
	$std_name_email3 = $_POST['std_name_email3'];
	$std_teacher1 = $_POST['std_teacher1'];
	$std_teacher2 = $_POST['std_teacher2'];
	$std_teacher3 = $_POST['std_teacher3'];
	
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "cpe_db";

	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	

	

	
$strSQL2 = "SELECT ID_Project FROM project ORDER BY ID_Project DESC LIMIT 1";
$objQuery2 = mysql_query($strSQL2);
$objResult2 = mysql_fetch_array($objQuery2);

$strSQL_teacher1 = "SELECT ID_Teacher FROM teacher WHERE TeacherName ='".$std_teacher1."'";
$objQuery_teacher1 = mysql_query($strSQL_teacher1);
$objResult_teacher1 = mysql_fetch_array($objQuery_teacher1);

if($std_teacher2!="")
{
	$strSQL_teacher2 = "SELECT ID_Teacher FROM teacher WHERE TeacherName ='".$std_teacher2."'";
	$objQuery_teacher2 = mysql_query($strSQL_teacher2);
	$objResult_teacher2 = mysql_fetch_array($objQuery_teacher2);
}
else
{
	$objResult_teacher2["ID_Teacher"] = NULL;
}

$strSQL_teacher3 = "SELECT ID_Teacher FROM teacher WHERE TeacherName ='".$std_teacher3."'";
	$objQuery_teacher3 = mysql_query($strSQL_teacher3);
	$objResult_teacher3 = mysql_fetch_array($objQuery_teacher3);

//echo $project_thai_name;

	$last_id = substr($objResult2["ID_Project"], 2);
	$last_id = intval($last_id);
	$last_id = $last_id+1;

	$strSQL_find = "SELECT ID_Project FROM project ";
	$objQuery_find = mysql_query($strSQL_find);
	$objResult_find = mysql_fetch_array($objQuery_find);

$sql_insert = "INSERT INTO project (ID_Project, ProjectName_TH,ProjectName_EN,Status_Project,ID_Teacher,ID_Teacher2,ID_Teacher3) 
						VALUES ('PJ0000000".$last_id."','".$project_thai_name."','".$project_eng_name."','0','".$objResult_teacher1["ID_Teacher"]."'
						,'".$objResult_teacher2["ID_Teacher"]."','".$objResult_teacher3["ID_Teacher"]."')";
 $check = false;
	while($objResult_find = mysql_fetch_array($objQuery_find))
	{
		$last_id2 = substr($objResult_find["ID_Project"], 2);
		$last_id2 = intval($last_id2);
		//echo $last_id2 , $last_id;
		if($last_id2 == $last_id)
		{
			$check = true;
			break;
		}
		
	}
						
	if($check == true)
	{
			if($std_name1!="")
	{
		$sql_name1 = "UPDATE student SET ID_Project = '".$objResult2["ID_Project"]."' WHERE StudentFirstName = '".$std_name1."' AND StudentLastName = '".$std_lastname1."' ";
		mysql_query($sql_name1);
		//echo "UPDATE student SET ID_Project = '".$objResult2["ID_Project"]."' WHERE StudentFirstName = '".$std_name1."' AND StudentLastName = '".$std_lastname1."' ";
	
	}

	if($std_name2!="")
	{
		$sql_name2 = "UPDATE student SET ID_Project = '".$objResult2["ID_Project"]."' WHERE StudentFirstName = '".$std_name2."' AND StudentLastName = '".$std_lastname2."' ";
		mysql_query($sql_name2);
	
	}

	if($std_name3!="")
	{
		$sql_name3 = "UPDATE student SET ID_Project = '".$objResult2["ID_Project"]."' WHERE StudentFirstName = '".$std_name3."' AND StudentLastName = '".$std_lastname3."' ";
		mysql_query($sql_name3);
	}
	
	
	}
	else
	{
	
	mysql_query($sql_insert);
		if($std_name1!="")
	{
		$sql_name1 = "UPDATE student SET ID_Project = 'PJ0000000".$last_id."' WHERE StudentFirstName = '".$std_name1."' AND StudentLastName = '".$std_lastname1."' ";
		mysql_query($sql_name1);
		//echo "UPDATE student SET ID_Project = 'PJ0000000".$last_id."' WHERE StudentFirstName = '".$std_name1."' AND StudentLastName = '".$std_lastname1."' ";
	
	}

	if($std_name2!="")
	{
		$sql_name2 = "UPDATE student SET ID_Project = 'PJ0000000".$last_id."' WHERE StudentFirstName = '".$std_name2."' AND StudentLastName = '".$std_lastname2."' ";
		mysql_query($sql_name2);
	
	}

	if($std_name3!="")
	{
		$sql_name3 = "UPDATE student SET ID_Project = 'PJ0000000".$last_id."' WHERE StudentFirstName = '".$std_name3."' AND StudentLastName = '".$std_lastname3."' ";
		mysql_query($sql_name3);
	}
	}


	
header("location:loginsuccess.php");



?>