<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:login.php");
		}
		
	}
	$ID_project = $idpv;
	

	mysql_connect("localhost","root","1234");
	mysql_select_db("cpe_db");
	mysql_query("SET NAMES UTF8");
	
	$SQL_std1 = "SELECT * FROM student WHERE ID_Project = '".$ID_project."'";
	$objQuery_SQL_std1 = mysql_query($SQL_std1);
	$objResult_SQL_std1 = mysql_fetch_array($objQuery_SQL_std1);
	
	$SQL_status = "SELECT * FROM project WHERE ID_Project = '".$ID_project."'";
	$objQuery_SQL_status = mysql_query($SQL_status);
	$objResult_SQL_status = mysql_fetch_array($objQuery_SQL_status);
	
	$sql_tc1 = "select * from teacher where ID_Teacher = '".$objResult_SQL_status["ID_Teacher"]."'";
	$obj_tc1 = mysql_query($sql_tc1);
	$relsult_tc1 = mysql_fetch_array($obj_tc1);
	
	$sql_tc3 = "select * from teacher where ID_Teacher = '".$objResult_SQL_status["ID_Teacher3"]."'";
	$obj_tc3 = mysql_query($sql_tc3);
	$relsult_tc3 = mysql_fetch_array($obj_tc3);
		
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
		   <link rel="stylesheet" type="text/css" href="css/cpe01.css">
		
		   
		  
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
			$nontification = "SELECT COUNT(Status_Project) as count FROM project WHERE Status_Project = 0 and ID_Teacher = '".$_SESSION['ID_Teacher']."'";
			$objQuery_SQL_nontification = mysql_query($nontification);
			$objResult_SQL_nontification = mysql_fetch_array($objQuery_SQL_nontification);
			
			if($objResult_SQL_nontification["count"] == 0)
			{
				echo "<li ><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li ><a href='cpe04.php'>CPE</a></li>";
				echo "<li class='active'><a href='loginsuccess.php'>View</a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li ><a href='about.php'>About</a></li>";
			}
			else
			{
				echo "<li ><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li ><a href='cpe04.php'>CPE</a></li>";
				echo "<li class='active'><a href='loginsuccess.php'>View<sup style='padding:5px; color:red'>".$objResult_SQL_nontification["count"]."</sup></a></li>";
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
		echo "<li ><a href='logout.php'>Logout</a></li>";
		echo "<li ><a href='about.php'>About</a></li>";
		
	
	}

	 	
	?>
				
		</ul>
		</div>
			
		</div>
		<div class="body_page_cpe01"><br>
	
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
		echo "<br>";
		echo "<nav >";
		echo "<div style=";echo $state1; echo ">CPE01</div>";echo "&nbsp";
		echo "<div style=";echo $state2; echo ">CPE02</div>";echo "&nbsp";
		echo "<div style=";echo $state3; echo ">CPE03</div>";echo "&nbsp";
		echo "<div style=";echo $state4; echo ">CPE04</div>";echo "&nbsp";
		echo "<div style=";echo $state5; echo ">CPE05</div>";echo "&nbsp";
		echo "<div style=";echo $state6; echo ">CPE06</div>";echo "&nbsp";
		echo "<div style=";echo $state7; echo ">CPE07</div>";echo "&nbsp";
		echo "</nav>";
		
		echo "<br>_____________________________________________________________________________________________________________________________________________________________________";
		
		echo "<li class='active'><a href='#'>CPE01</a></li>";
		echo "<li><a href='cpe02.php'>CPE02</a></li>";
		echo "<li><a href='cpe03.php'>CPE03</a></li>";
		echo "<li><a href='cpe04.php'>CPE04</a></li>";
		echo "<li><a href='cpe05.php'>CPE05</a></li>";
		echo "<li><a href='cpe06.php'>CPE06</a></li>";
		echo "<li><a href='cpe07.php'>CPE07</a></li>";
		
	}

	 	
	?>
				
		</ul>
		</div>
		<br>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อโครงงาน	 </a1>
		
		<form name="form1" method="post">	
		
			<div class="cpe01_name">
				<input class="form-control" name="project_thai_name" type="text" id="project_thai_name" placeholder="ชื่อภาษาไทย"
				value = "<?php echo $objResult_SQL_status["ProjectName_TH"]; ?>"
				>
				
		<br>
				<input class="form-control" name="project_eng_name" type="text" id="project_eng_name" placeholder="ชื่อภาษาอังกฤษ"
				value = "<?php echo $objResult_SQL_status["ProjectName_EN"]; ?>"
				>
			</div>	
		<br><br><br>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;รายชื่อนิสิตผู้ทำโครงงาน	 </a1>

		
		<table class="table">
    <thead>
      <tr>
        <th>ชื่อ </th>
		<th>สกุล </th>
        <th>รหัสนิสิต</th>
        <th>เบอร์โทรศัพท์</th>
		<th>E-mail</th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_name1" type="text" id="std_name1"  placeholder="ชื่อ 1" 
				value = "<?php echo $objResult_SQL_std1["StudentFirstName"]; ?>"
				>
		</div>
		</td>
		<td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_lastname1" type="text" id="std_lastname1" placeholder="สกุล 1 "
				value = "<?php echo $objResult_SQL_std1["StudentLastName"]; ?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe01_name_student_id">
				<input class="form-control" name="std_name_id1" type="text" id="std_name_id1" placeholder="รหัสนิสิต"
				value = "<?php echo $objResult_SQL_std1["Student_ID"]; ?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe01_name_student_phone">
				<input class="form-control" name="std_name_phone1" type="text" id="std_name_phone1" placeholder="เบอร์โทรศัพท์"
				value = "<?php echo $objResult_SQL_std1["Student_Tel"]; ?>"
				>
		</div>
		</td>
		<td>
		<div class="cpe01_name_student_email">
				<input class="form-control" name="std_name_email1" type="text" id="std_name_email1" placeholder="อีเมล"
				value = "<?php echo $objResult_SQL_std1["Student_Email"]; ?>"
				>
		</div>
		</td>
      </tr>
      <tr >
        <td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_name2" type="text" id="std_name2" placeholder="ชื่อ 2">
		</div>
		</td>
		<td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_lastname2" type="text" id="std_lastname2" placeholder="สกุล 2 ">
		</div>
		</td>
        <td>
		<div class="cpe01_name_student_id">
				<input class="form-control" name="std_name_id2" type="text" id="std_name_id2" placeholder="รหัสนิสิต">
		</div>
		</td>
        <td>
		<div class="cpe01_name_student_phone">
				<input class="form-control" name="std_name_phone2" type="text" id="std_name_phone2" placeholder="เบอร์โทรศัพท์">
		</div>
		</td>
		<td>
		<div class="cpe01_name_student_email">
				<input class="form-control" name="std_name_email2" type="text" id="std_name_email2" placeholder="อีเมล">
		</div>
		</td>
      </tr>
      <tr >
        <td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_name3" type="text" id="std_name3" placeholder="ชื่อ 3">
		</div>
		</td>
		<td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_lastname3" type="text" id="std_lastname3" placeholder="สกุล 3 ">
		</div>
		</td>
        <td>
		<div class="cpe01_name_student_id">
				<input class="form-control" name="std_name_id3" type="text" id="std_name_id3" placeholder="รหัสนิสิต">
		</div>
		</td>
        <td>
		<div class="cpe01_name_student_phone">
				<input class="form-control" name="std_name_phone3" type="text" id="std_name_phone3" placeholder="เบอร์โทรศัพท์">
		</div>
		</td>
		<td>
		<div class="cpe01_name_student_email">
				<input class="form-control" name="std_name_email3" type="text" id="std_name_email3" placeholder="อีเมล">
		</div>
		</td>
      </tr>
	  <td></td><td></td><td></td><td></td>
    </tbody>
  </table>	
  
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;อาจารย์ที่ปรึกษาและกรรมการ	 </a1>
		
		<table class="table">
    <thead>
      <tr>
        <th>อาจารย์ที่ปรึกษา</th>
        <th>อาจารย์ที่ปรึกษาร่วม (ถ้ามี)</th>
        <th>เสนอรายชื่อกรรมการ 1 ท่าน</th>
      </tr>
    </thead>
    <tbody>
      <tr >
        <td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_teacher1" type="text" id="std_teacher1" placeholder="อาจารย์ที่ปรึกษา"
				value = "<?php echo $relsult_tc1["TeacherName"]; ?>"
				>
		</div>
		</td>
        <td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_teacher2" type="text" id="std_teacher2" placeholder="อาจารย์ที่ปรึกษาร่วม (ถ้ามี)">
		</div>
		</td>
        <td>
		<div class="cpe01_name_student">
				<input class="form-control" name="std_teacher3" type="text" id="std_teacher3" placeholder="เสนอรายชื่อกรรมการ 1 ท่าน"
				value = "<?php echo $relsult_tc3["TeacherName"]; ?>"
				>
		</div>
		</td>
      </tr>
      <td></td><td></td><td></td>
    </tbody>
  </table>

		</form>
		</div>
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	<footer>
		<div style='text-align:right'>Page SS07</div>
	</footer>
	</html>