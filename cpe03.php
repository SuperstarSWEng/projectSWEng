<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:login.php");
		}
		
	}

	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "cpe_db";

	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	$SQL_std1 = "SELECT * FROM student WHERE Student_ID='".$_SESSION['Student_ID']."'";
	$objQuery_SQL_std1 = mysql_query($SQL_std1);
	$objResult_SQL_std1 = mysql_fetch_array($objQuery_SQL_std1);
	
	$SQL_status = "SELECT * FROM project WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
	$objQuery_SQL_status = mysql_query($SQL_status);
	$objResult_SQL_status = mysql_fetch_array($objQuery_SQL_status); 	
	
	$member2 = "select * from student where ID_Project = '".$objResult_SQL_std1["ID_Project"]."' and Student_ID!='".$_SESSION['Student_ID']."' ";
	$member2query = mysql_query($member2);
	$member2result = mysql_fetch_array($member2query);
	
	$SQL_progress = "SELECT COUNT(ID_Project) as count FROM project WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
	$objQuery_SQL_progress = mysql_query($SQL_progress);
	$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
	
	//////////echo $objResult_SQL_progress["count"];
	
	if($objResult_SQL_progress["count"] > 0)
	{
		$check  = 1;
		$SQL_progress = "SELECT COUNT(ID_Project) as count FROM implemeting WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
		$objQuery_SQL_progress = mysql_query($SQL_progress);
		$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
		
		//////////echo $objResult_SQL_progress["count"];
		
		if($objResult_SQL_progress["count"] > 0)
		{
			$check  = 2;
			$SQL_progress = "SELECT COUNT(ID_Project) as count FROM scope_project WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
			$objQuery_SQL_progress = mysql_query($SQL_progress);
			$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
			
			//////////echo $objResult_SQL_progress["count"];
			
			if($objResult_SQL_progress["count"] > 0)
			{
				$check  = 3;
				$SQL_progress = "SELECT COUNT(ID_Project) as count FROM proposal_eveluation WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
				$objQuery_SQL_progress = mysql_query($SQL_progress);
				$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
				
				//////////echo $objResult_SQL_progress["count"];
				
				if($$objResult_SQL_progress["count"] > 0)
				{
					$check  = 4;
					$SQL_progress = "SELECT COUNT(ID_Project) as count FROM progress_evalution WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
					$objQuery_SQL_progress = mysql_query($SQL_progress);
					$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
					
					//////////echo $objResult_SQL_progress["count"];
					
					if($$objResult_SQL_progress["count"] > 0)
					{
						$check  = 5;
						$SQL_progress = "SELECT COUNT(ID_Project) as count FROM comment_adviser WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
						$objQuery_SQL_progress = mysql_query($SQL_progress);
						$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
						
						//////////echo $objResult_SQL_progress["count"];
						
						if($$objResult_SQL_progress["count"] > 0)
						{
							$check  = 6;
							$SQL_progress = "SELECT COUNT(ID_Project) as count FROM test_eveluation WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
							$objQuery_SQL_progress = mysql_query($SQL_progress);
							$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
							
							//////////echo $objResult_SQL_progress["count"];
							
							if($$objResult_SQL_progress["count"] > 0)
							{
								$check  = 7;
							}
						}
					}
				}
			}
		}	
	}
	else if($SQL_progress == 0)
	{
		$check  = 0;
	}
		
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
		<title>CPE </title>
		<link rel="shortcut icon" href="img/icon.png" />
		  <link rel="stylesheet" type="text/css" href="css/style.css">
		  <link rel="stylesheet" type="text/css" href="css/cpe.css">
		  <link rel="stylesheet" type="text/css" href="css/menu.css">
		  <link rel="stylesheet" type="text/css" href="css/jaidee-style.css">
		   <link rel="stylesheet" href="css/bootstrap.min.css">
		   <link rel="stylesheet" type="text/css" href="css/cpe03.css">
		  
		   
		  
		  <script src="js/script.js"></script>
	</head>
	<body>

		<div class="top_pic_page">
		<div id='csstop'>
		
		</div>
		</div>
		<div class="menu_bar">
			
		<div id='cssmenu'>
		<ul>
				
				<?php
  
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:login.php");
		}
		else
		{
			$status = "SELECT COUNT(Status_Project) as count FROM project WHERE Status_Project = 0 and ID_Teacher = '".$_SESSION['ID_Teacher']."'";
			$objQuery_SQL_status = mysql_query($status);
			$objResult_SQL_status = mysql_fetch_array($objQuery_SQL_status);
			
			//<span style="color:blue">blue</span>
			
			if($objResult_SQL_status["count"] == 0)
			{
				echo "<li ><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li class='active'><a href='cpe04.php'>CPE</a></li>";
				echo "<li ><a href='loginsuccess.php'>View</a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li ><a href='about.php'>About</a></li>";
			}
			else
			{
				echo "<li ><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li class='active'><a href='cpe04.php'>CPE</a></li>";
				echo "<li ><a href='loginsuccess.php'>View<sup style='padding:5px; color:red'>".$objResult_SQL_status["count"]."</sup></a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li ><a href='about.php'>About</a></li>";
			}
		}
		
	}
	else
	{
		
		echo "<li ><a href='index.php'>Home</a></li>";
		echo "<li ><a href='more.php'>Detail Project</a></li>";
		echo "<li class='active'><a href='#'>CPE</a></li>";
		echo "<li ><a href='loginsuccess.php'>View</a></li>";
		echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
		echo "<li ><a href='about.php'>About</a></li>";
		
	
	}

	 	
	?>
				
		</ul>
		</div>
			
		</div>
		<div class="body_page_cpe03"><br>
	
		<div id='cssmenucpe'>
<ul>
   <?php
  
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:login.php");
		}
		else
		{
			//header("location:loginsuccess_techer.php");
		}
		
		
	}
	else
	{
		if($check == 1)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'active'><a href='#'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 2)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'active'><a href='#'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 3)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'active'><a href='#'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 4)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'active'><a href='#'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 5)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'active'><a href='#'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'box-1'><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 6)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'active'><a href='#'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'box-1'><a href='cpe05.php'>CPE05</a></li>";
			echo "<li class = 'box-1'><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 7)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'active'><a href='#'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'box-1'><a href='cpe05.php'>CPE05</a></li>";
			echo "<li class = 'box-1'><a href='cpe06.php'>CPE06</a></li>";
			echo "<li class = 'box-1'><a href='cpe07.php'>CPE07</a></li>";
		}
		else
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'active'><a href='#'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
	}

	 	
	?>
</ul>
</div>
	
	<br>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;รหัสโครงงาน	 </a1>
		<form name="form1" method="post" action="save_cpe03.php">	
		
		<div class="cpe03_ID_project">
			<input class="form-control" name="ID_project" type="text" id="ID_project" placeholder=" รหัสโครงงาน"
			value = "<?php 
			
				echo $objResult_SQL_std1["ID_Project"];
			
			?>"
			>
		
		</div>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อโครงงาน	 </a1>
		<div class="cpe03_name">
				<input class="form-control" name="project_thai_name" type="text" id="project_thai_name" placeholder="ชื่อภาษาไทย"
					value = "<?php 
			
				echo $objResult_SQL_status["ProjectName_TH"];
			
			?>"
				>
				
		<br>
				<input class="form-control" name="project_eng_name" type="text" id="project_eng_name" placeholder="ชื่อภาษาอังกฤษ"
					value = "<?php 
			
				echo $objResult_SQL_status["ProjectName_EN"];
			
			?>"
				>
			</div>	
			<br><br><br>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;รายชื่อนิสิตผู้ทำโครงงาน	 </a1>
  
  
		<table class="table">
    <thead>
      <tr>
        <th>ชื่อ-สกุล </th>
        <th>รหัสนิสิต</th>
        <th>เบอร์โทรศัพท์</th>
		<th>E-mail</th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <td>
		<div class="cpe03_name_student">
				<input class="form-control" name="std_name1" type="text" id="std_name1" placeholder="ชื่อ-สกุล 1"
				value = "<?php echo $objResult_SQL_std1["StudentFirstName"] , " ", $objResult_SQL_std1["StudentLastName"]; 
				
				?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_id">
				<input class="form-control" name="std_name_id1" type="text" id="std_name_id1" placeholder="รหัสนิสิต"
				value = "<?php echo $objResult_SQL_std1["Student_ID"]; 
				
				?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_phone">
				<input class="form-control" name="std_name_phone1" type="text" id="std_name_phone1" placeholder="เบอร์โทรศัพท์"
				value = "<?php echo $objResult_SQL_std1["Student_Tel"]; 
				
				?>"
				>
		</div>
		</td>
		<td>
		<div class="cpe03_name_student_email">
				<input class="form-control" name="std_name_email1" type="text" id="std_name_email1" placeholder="e-mail"
				value = "<?php echo $objResult_SQL_std1["Student_Email"]; 
				
				?>"
				>
		</div>
		</td>
      </tr>
      <tr >
        <td>
		<div class="cpe03_name_student">
				<input class="form-control" name="std_name2" type="text" id="std_name2" placeholder="ชื่อ-สกุล 2"
				value = "<?php echo $member2result["StudentFirstName"] , " ", $member2result["StudentLastName"]; 
				
				?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_id">
				<input class="form-control" name="std_name_id2" type="text" id="std_name_id2" placeholder="รหัสนิสิต"
				value = "<?php echo $member2result["Student_ID"]; 
				
				?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_phone">
				<input class="form-control" name="std_name_phone2" type="text" id="std_name_phone2" placeholder="เบอร์โทรศัพท์"
				value = "<?php echo $member2result["Student_Tel"]; 
				
				?>"
				>
		</div>
		</td>
		<td>
		<div class="cpe03_name_student_email">
				<input class="form-control" name="std_name_email2" type="text" id="std_name_email2" placeholder="e-mail"
				value = "<?php echo $member2result["Student_Email"]; 
				
				?>"
				>
		</div>
		</td>
      </tr>
      <tr >
        <td>
		<div class="cpe03_name_student">
				<input class="form-control" name="std_name3" type="text" id="std_name3" placeholder="ชื่อ-สกุล 3">
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_id">
				<input class="form-control" name="std_name_id3" type="text" id="std_name_id3" placeholder="รหัสนิสิต">
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_phone">
				<input class="form-control" name="std_name_phone3" type="text" id="std_name_phone3" placeholder="เบอร์โทรศัพท์">
		</div>
		</td>
		<td>
		<div class="cpe03_name_student_email">
				<input class="form-control" name="std_name_email3" type="text" id="std_name_email3" placeholder="e-mail">
		</div>
		</td>
      </tr>
	  <td></td><td></td><td></td><td></td>
    </tbody>
  </table>	
  
  <a1>&nbsp;&nbsp;&nbsp;&nbsp;ประเด็นปัญหาและขอบเขตของโครงงานโดยย่อ  </a1>
		<div class="cpe03_scope">
			<textarea class="form-control" rows="8" cols="80" name="cpe03_scope" type="text" id="cpe03_scope" placeholder="ประเด็นปัญหาและขอบเขตของโครงงานโดยย่อ "></textarea>
		</div>
  <br>
  <!--
  <a1>&nbsp;&nbsp;&nbsp;&nbsp;กรรมการสอบโครงงาน  </a1>
		<table class="table">
    <thead>
      <tr>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;อาจารย์ท่านที่ 1</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;อาจารย์ท่านที่  2</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;อาจารย์ท่านที่  3</th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <td>
		<div class="cpe03_name_student">
				<input class="form-control" name="id_teacher1" type="text" id="id_teacher1" placeholder="Teacher ID 1">
		</div>
		</td>
        <td>
		<div class="cpe03_name_student">
				<input class="form-control" name="id_teacher2" type="text" id="id_teacher2" placeholder="Teacher ID 2">
		</div>
		</td>
		<td>
		<div class="cpe03_name_student">
				<input class="form-control" name="id_teacher3" type="text" id="id_teacher3" placeholder="Teacher ID 3">
		</div>
		</td>
        
      </tr>
	  <tr >
        <td>
		<div class="cpe03_name_student">
				<input class="form-control" name="pass_teacher1" type="text" id="pass_teacher1" placeholder="Teacher PASS 1">
		</div>
		</td>
        <td>
		<div class="cpe03_name_student">
				<input class="form-control" name="pass_teacher2" type="text" id="pass_teacher2" placeholder="Teacher PASS 2">
		</div>
		</td>
		<td>
		<div class="cpe03_name_student">
				<input class="form-control" name="pass_teacher3" type="text" id="pass_teacher3" placeholder="Teacher PASS 3">
		</div>
		</td>
      </tr>
	  <td></td><td></td><td></td>
      
    </tbody>	
			
		</table>	
		-->
		<div class="cpe03_save">
				<input class="btn btn-default" type="submit" name="cpe03_save" value="Save">
		</div>
			
  
		</form>
		</div>
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	<footer>
		<div style='text-align:right'>Page SS09</div>
	</footer>
	</html>