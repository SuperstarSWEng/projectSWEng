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
	
	
	
	if($objResult_SQL_progress["count"] > 0)
	{
		$check  = 1;
		$SQL_progress = "SELECT COUNT(ID_Project) as count FROM implemeting WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
		$objQuery_SQL_progress = mysql_query($SQL_progress);
		$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
		
		
		
		if($objResult_SQL_progress["count"] > 0)
		{
			$check  = 2;
			$SQL_progress = "SELECT COUNT(ID_Project) as count FROM scope_project WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
			$objQuery_SQL_progress = mysql_query($SQL_progress);
			$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
			
			
			
			if($objResult_SQL_progress["count"] > 0)
			{
				$check  = 3;
				$SQL_progress = "SELECT COUNT(ID_Project) as count FROM proposal_eveluation WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
				$objQuery_SQL_progress = mysql_query($SQL_progress);
				$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
				
				
				
				if($$objResult_SQL_progress["count"] > 0)
				{
					$check  = 4;
					$SQL_progress = "SELECT COUNT(ID_Project) as count FROM progress_evalution WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
					$objQuery_SQL_progress = mysql_query($SQL_progress);
					$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
					
					
					
					if($$objResult_SQL_progress["count"] > 0)
					{
						$check  = 5;
						$SQL_progress = "SELECT COUNT(ID_Project) as count FROM comment_adviser WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
						$objQuery_SQL_progress = mysql_query($SQL_progress);
						$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
						
						
						
						if($$objResult_SQL_progress["count"] > 0)
						{
							$check  = 6;
							$SQL_progress = "SELECT COUNT(ID_Project) as count FROM test_eveluation WHERE ID_Project = '".$objResult_SQL_std1["ID_Project"]."'";
							$objQuery_SQL_progress = mysql_query($SQL_progress);
							$objResult_SQL_progress = mysql_fetch_array($objQuery_SQL_progress);
							
							
							
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
		   <link rel="stylesheet" type="text/css" href="css/cpe05.css">
		  
		   
		  
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
		<div class="body_page_cpe05"><br>
	
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
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		
		
	}
	else
	{
		if($check == 1)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li><a href='cpe02.php'>CPE02</a></li>";
			echo "<li><a href='cpe03.php'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 2)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li><a href='cpe03.php'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 3)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 4)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 5)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 6)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li class = 'box-1'><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		else if($check == 7)
		{
			echo "<li class = 'box-1'><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li class = 'box-1'><a href='cpe02.php'>CPE02</a></li>";
			echo "<li class = 'box-1'><a href='cpe03.php'>CPE03</a></li>";
			echo "<li class = 'box-1'><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li class = 'box-1'><a href='cpe06.php'>CPE06</a></li>";
			echo "<li class = 'box-1'><a href='cpe07.php'>CPE07</a></li>";
		}
		else
		{
			echo "<li><a href='ALLCPE.php'>CPE01</a></li>";
			echo "<li><a href='cpe02.php'>CPE02</a></li>";
			echo "<li><a href='cpe03.php'>CPE03</a></li>";
			echo "<li><a href='cpe04.php'>CPE04</a></li>";
			echo "<li class = 'active'><a href='#'>CPE05</a></li>";
			echo "<li><a href='cpe06.php'>CPE06</a></li>";
			echo "<li><a href='cpe07.php'>CPE07</a></li>";
		}
		
	}

	 	
	?>
</ul>
</div>
	
	<br>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;รหัสโครงงาน	 </a1>
		<form name="form1" method="post" action="save_cpe05.php">	
		
		<div class="cpe05_ID_project">
			<input class="form-control" name="ID_project" type="text" id="ID_project" placeholder=" รหัสโครงงาน"
			value = "<?php 
			
				//echo $objResult_SQL_std1["ID_Project"];
			
			?>"
			>
		</div>
		
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อโครงงาน	 </a1>
		<div class="cpe05_name">
				<input class="form-control" name="project_thai_name" type="text" id="project_thai_name" placeholder="ชื่อภาษาไทย"
					value = "<?php 
			
				//echo $objResult_SQL_status["ProjectName_TH"];
			
			?>"
				>
				
		<br>
				<input class="form-control" name="project_eng_name" type="text" id="project_eng_name" placeholder="ชื่อภาษาอังกฤษ"
					value = "<?php 
			
				//echo $objResult_SQL_status["ProjectName_EN"];
			
			?>"
				>
			</div>	
		<br><br><br>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;รายชื่อนิสิตผู้ทำโครงงาน	 </a1>
		
			<table class="table">
    <thead>
      <tr >
        <th ><center>ที่ </center></th>
        <th><center>1</center></th>
        <th><center>2</center></th>
		<th><center>3</center></th>
      </tr>
    </thead>
	 <tbody>
	  <tr >
        <td>
		<center> รหัสนิสิต</center>
		</td>
        <td>
		<div class="cpe05_name_student_id">
				<input class="form-control" name="std_name_id1" type="text" id="std_name_id1" placeholder="รหัสนิสิต"
				value = "<?php //echo $objResult_SQL_std1["Student_ID"]; 
				
				?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe05_name_student_id">
				<input class="form-control" name="std_name_id2" type="text" id="std_name_id2" placeholder="รหัสนิสิต"
				value = "<?php //echo $member2result["Student_ID"]; 
				
				?>"
				>
		</div>
		</td>
		<td>
		<div class="cpe05_name_student_id">
				<input class="form-control" name="std_id3" type="text" id="std_id3" placeholder="รหัสนิสิต">
		</div>
		</td>
      </tr>
	  <tr >
        <td>
		<center>ชื่อ-นามสกุล</center>
		</td>
        <td>
		<div class="cpe05_name_student_id">
				<input class="form-control" name="std_name1" type="text" id="std_name1" placeholder="ชื่อ-สกุล 1"
				value = "<?php //echo $objResult_SQL_std1["StudentFirstName"] , " ", $objResult_SQL_std1["StudentLastName"]; 
				
				?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe05_name_student_id">
				<input class="form-control" name="std_name2" type="text" id="std_name2" placeholder="ชื่อ-สกุล 2"
				value = "<?php //echo $member2result["StudentFirstName"] , " ", $member2result["StudentLastName"]; 
				
				?>"
				>
		</div>
		</td>
		<td>
		<div class="cpe05_name_student_id">
				<input class="form-control" name="std_name3" type="text" id="std_name3" placeholder="ชื่อ-นามสกุล">
		</div>
		</td>
      </tr>
	 <td></td><td></td><td></td><td></td>
	  </tbody>
		
	</table>	
	<br>	
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ผลการประเมิน	 </a1>
		
		<table class="table">
	<thead>
      <tr >
        <th><center>หัวข้อการประเมิน</center></th>
        <th><center>เหมาะสม</center></th>
		<th><center>ไม่เหมาะสม</center></th>
      </tr>
    </thead>
	<tbody>
	
		<tr ><td> 1. ความก้าวหน้าของการดำเนินงานเทียบกับแผน</td><td><span style="padding-left:4em">
		<input type="radio" name="progress" value="1"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="progress" value="0"></span></td></tr>
		<tr ><td>2. ความสมบรูณ์ของรายงานความก้าวหน้า</td><td><span style="padding-left:4em">
		<input type="radio" name="report" value="1"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="report" value="0"></span></td></tr>
		<tr ><td>3. ความรู้ความเข้าใจของนิสิตเกี่ยวกับโครงงาาน</td><td><span style="padding-left:4em">
		<input type="radio" name="knowledge" value="1"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="knowledge" value="0"></span></td></tr>
		<tr ><td>4. การแบ่งงานและการทำงานเป็นทีม (กรณีมีนิสิตทำงานมากกว่า 1 คน)</td><td><span style="padding-left:4em">
		<input type="radio" name="division" value="1"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="division" value="0"></span></td></tr>
		<td></td><td></td><td></td>
		
	 </tbody>
	 </table >
	 
	 <br>
	 <a1>&nbsp;&nbsp;&nbsp;&nbsp;ข้อเสนอแนะ </a1>
		<div class="cpe05_guide">
			<textarea class="form-control" rows="8" cols="80" name="cpe05_guide" type="text" id="cpe05_guide" placeholder="ข้อเสนอแนะ "></textarea>
		</div>
		
	<br><br>	
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;สรุป</a1>
		
	<table class="table">
	<thead>
      <tr >
        <th><center>ความเห็นของอาจารย์ที่ปรึกษา</center></th>
		
      </tr>
    </thead>
	<tbody>
	
		<tr ><td>
		<span style="padding-left:20em"><input type="radio" name="opinion_teacher" value="1">ผ่าน</span>
		<span style="padding-left:13em"><input type="radio" name="opinion_teacher" value="0">ไม่ผ่าน</span></td></tr>
		<tr ><td></td></tr>
		
	 </tbody>
	 </table >
	 <br>
	 &nbsp;&nbsp;&nbsp;&nbsp;หมายเหตุ  ผ่าน = สมควรดำเนินโครงงานต่อไป , ไม่ผ่าน = ไม่สมควรดำเนินโครงงานในหัวข้อนี้ต่อไป
	
	 <br><br><br>
	 <div class="cpe05_save">
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
				echo "<input class='btn btn-default' type='submit' name='cpe05_save' value='Save'>";
			}	
		}
		?>
	</div>
	</form>
	 <br><br>
		</div>
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	<footer>
		<div style='text-align:right'>Page SS11</div>
	</footer>
	</html>