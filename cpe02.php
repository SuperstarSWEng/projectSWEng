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
	
	$SQL_progress = "SELECT COUNT(ID_Project) as count FROM project WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
	$objQuery_SQL_progress = mysql_query($SQL_progress);
	$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
	
	echo $objResult_SQL_progress["count"];
	
	if($objResult_SQL_progress["count"] > 0)
	{
		$check  = 1;
		$SQL_progress = "SELECT COUNT(ID_Project) as count FROM implemeting WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
		$objQuery_SQL_progress = mysql_query($SQL_progress);
		$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
		
		echo $objResult_SQL_progress["count"];
		
		if($objResult_SQL_progress["count"] > 0)
		{
			$check  = 2;
			$SQL_progress = "SELECT COUNT(ID_Project) as count FROM scope_project WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
			$objQuery_SQL_progress = mysql_query($SQL_progress);
			$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
			
			echo $objResult_SQL_progress["count"];
			
			if($objResult_SQL_progress["count"] > 0)
			{
				$check  = 3;
				$SQL_progress = "SELECT COUNT(ID_Project) as count FROM proposal_eveluation WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
				$objQuery_SQL_progress = mysql_query($SQL_progress);
				$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
				
				echo $objResult_SQL_progress["count"];
				
				if($$objResult_SQL_progress["count"] > 0)
				{
					$check  = 4;
					$SQL_progress = "SELECT COUNT(ID_Project) as count FROM progress_evalution WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
					$objQuery_SQL_progress = mysql_query($SQL_progress);
					$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
					
					echo $objResult_SQL_progress["count"];
					
					if($$objResult_SQL_progress["count"] > 0)
					{
						$check  = 5;
						$SQL_progress = "SELECT COUNT(ID_Project) as count FROM comment_adviser WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
						$objQuery_SQL_progress = mysql_query($SQL_progress);
						$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
						
						echo $objResult_SQL_progress["count"];
						
						if($$objResult_SQL_progress["count"] > 0)
						{
							$check  = 6;
							$SQL_progress = "SELECT COUNT(ID_Project) as count FROM test_eveluation WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
							$objQuery_SQL_progress = mysql_query($SQL_progress);
							$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
							
							echo $objResult_SQL_progress["count"];
							
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
		   <link rel="stylesheet" type="text/css" href="css/cpe02.css">
		   
		   
		  
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
			echo "<li ><a href='index.php'>Home</a></li>";
			echo "<li ><a href='more.php'>Detail Project</a></li>";
			echo "<li ><a href='loginsuccess.php'>View</a></li>";
			echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
			echo "<li ><a href='about.php'>About</a></li>";
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
		<div class="body_page_cpe02"><br>
	
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
			echo "<li class = 'active'><a href='#'>CPE02</a></li>";
			echo "<li><a href='cpe03.php'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 2)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'active'><a href='#'>CPE02</a></li>";
			echo "<li><a href='cpe03.php'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 3)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'active'><a href='#'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 4)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'active'><a href='#'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 5)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'active'><a href='#'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'box-1'><a href='cpe05.php'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 6)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'active'><a href='#'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'box-1'><a href='cpe05.php'>CPE05</a></li>";
			echo "<li class = 'box-1'><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 7)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'active'><a href='#'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'box-1'><a href='cpe05.php'>CPE05</a></li>";
			echo "<li class = 'box-1'><a href='cpe06.php'>CPE06</a></li>";
			echo "<li class = 'box-1'><a href='cpe07.php'>CPE07</a></li>";
		}
		else
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'active'><a href='#'>CPE02</a></li>";
			echo "<li><a href='cpe03.php'>CPE03</a></li>";
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
		<form name="form1" method="post" action="save_cpe02.php">	
		
		<div class="cpe02_ID_project">
			<input class="form-control" name="ID_project" type="text" id="ID_project" placeholder=" รหัสโครงงาน"
			value = "<?php 
			
				echo $objResult_SQL_std1["ID_Project"];
			
			?>"
			>
		
		</div>
	
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อโครงงาน	 </a1>
		<div class="cpe02_ID_project">
			<input class="form-control" name="cpe02_name_project" type="text" id="cpe02_name_project" placeholder=" ชื่อโครงงาน"
			value = "<?php 
			
				echo $objResult_SQL_status["ProjectName_TH"];
			
			?>"
			>
		
		</div>
		
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;วันที่	 </a1>
		<div class="cpe02_DATE">
			<input class="form-control" name="cpe02_DATE" type="text" id="cpe02_DATE" placeholder="ปปปป-ดด-วว"
			value="<?php echo date("Y-m-d");?>
			"
			>
		
		</div>
		
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ประเด็น/หัวข้อ/งานที่มอบหมาย  </a1>
		<div class="cpe02_HEAD">
			<textarea class="form-control" rows="4" cols="80" name="cpe02_HEAD_WORK" type="text" id="cpe02_HEAD_WORK" placeholder="ประเด็น/หัวข้อ/งานที่มอบหมาย "></textarea>
		</div>
		
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ข้อสรุป/ความคืบหน้าของงาน  </a1>
		<div class="cpe02_Conclusion">
			<textarea class="form-control" rows="8" cols="80" name="cpe02_Conclusion" type="text" id="cpe02_Conclusion" placeholder="ข้อสรุป/ความคืบหน้าของงาน "></textarea>
		</div>
		
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;หมายเหตุ  </a1>
		<div class="cpe02_note">
			<textarea class="form-control" rows="4" cols="80" name="cpe02_note" type="text" id="cpe02_note" placeholder="หมายเหตุ"></textarea>
		</div>
		
		
		
		 <div class="cpe02_save">
		
			<input class="btn btn-default" type="submit" name="cpe02_save" value="Save">
				
		</div>
		
		
		</form>
		
		</div>
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	<footer>
		<div style='text-align:right'>Page SS08</div>
	</footer>
	</html>