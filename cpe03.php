<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:login.php");
		}
		
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
			echo "<li ><a href='index.php'>Home</a></li>";
			echo "<li ><a href='more.php'>Detail Project</a></li>";
			echo "<li ><a href='loginsuccess.php'>View</a></li>";
			echo "<li ><a href='logout.php'>Logout</a></li>";
			echo "<li ><a href='about.php'>About</a></li>";
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
		
		echo "<li><a href='ALLCPE.php'>CPE01</a></li>";
		echo "<li><a href='cpe02.php'>CPE02</a></li>";
		echo "<li class='active'><a href='#'>CPE03</a></li>";
		echo "<li><a href='cpe04.php'>CPE04</a></li>";
		echo "<li><a href='cpe05.php'>CPE05</a></li>";
		echo "<li><a href='cpe06.php'>CPE06</a></li>";
		echo "<li><a href='cpe07.php'>CPE07</a></li>";
		
	}

	 	
	?>
</ul>
</div>
	
	<br>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;รหัสโครงงาน	 </a1>
		<form name="form1" method="post" action="#####">	
		
		<div class="cpe03_ID_project">
			<input class="form-control" name="ID_project" type="text" id="ID_project" placeholder=" รหัสโครงงาน">
		
		</div>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อโครงงาน	 </a1>
		<div class="cpe03_name">
				<input class="form-control" name="project_thai_name" type="text" id="project_thai_name" placeholder="ชื่อภาษาไทย">
				
		<br>
				<input class="form-control" name="project_eng_name" type="text" id="project_eng_name" placeholder="ชื่อภาษาอังกฤษ">
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
				<input class="form-control" name="std_name1" type="text" id="std_name1" placeholder="ชื่อ-สกุล 1">
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_id">
				<input class="form-control" name="std_name_id1" type="text" id="std_name_id1" placeholder="รหัสนิสิต">
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_phone">
				<input class="form-control" name="std_name_phone1" type="text" id="std_name_phone1" placeholder="เบอร์โทรศัพท์">
		</div>
		</td>
		<td>
		<div class="cpe03_name_student_email">
				<input class="form-control" name="std_name_email1" type="text" id="std_name_email1" placeholder="e-mail">
		</div>
		</td>
      </tr>
      <tr >
        <td>
		<div class="cpe03_name_student">
				<input class="form-control" name="std_name2" type="text" id="std_name2" placeholder="ชื่อ-สกุล 2">
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_id">
				<input class="form-control" name="std_name_id2" type="text" id="std_name_id2" placeholder="รหัสนิสิต">
		</div>
		</td>
        <td>
		<div class="cpe03_name_student_phone">
				<input class="form-control" name="std_name_phone2" type="text" id="std_name_phone2" placeholder="เบอร์โทรศัพท์">
		</div>
		</td>
		<td>
		<div class="cpe03_name_student_email">
				<input class="form-control" name="std_name_email2" type="text" id="std_name_email2" placeholder="e-mail">
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
		
				<div class="cpe03_save">
				<input class="btn btn-default" type="submit" name="cpe03_save" value="Save">
		</div>
			
  
		</form>
		</div>
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	
	</html>