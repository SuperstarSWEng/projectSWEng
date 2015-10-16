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
		}
		
		
	}
	else
	{
		
		echo "<li><a href='ALLCPE.php'>CPE01</a></li>";
		echo "<li><a href='cpe02.php'>CPE02</a></li>";
		echo "<li><a href='cpe03.php'>CPE03</a></li>";
		echo "<li><a href='cpe04.php'>CPE04</a></li>";
		echo "<li class='active'><a href='#'>CPE05</a></li>";
		echo "<li><a href='cpe06.php'>CPE06</a></li>";
		echo "<li><a href='cpe07.php'>CPE07</a></li>";
		
	}

	 	
	?>
</ul>
</div>
	
	<br>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;รหัสโครงงาน	 </a1>
		<form name="form1" method="post" action="#####">	
		
		<div class="cpe05_ID_project">
			<input class="form-control" name="ID_project" type="text" id="ID_project" placeholder=" รหัสโครงงาน">
		</div>
		
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อโครงงาน	 </a1>
		<div class="cpe05_name">
				<input class="form-control" name="project_thai_name" type="text" id="project_thai_name" placeholder="ชื่อภาษาไทย">
				
		<br>
				<input class="form-control" name="project_eng_name" type="text" id="project_eng_name" placeholder="ชื่อภาษาอังกฤษ">
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
				<input class="form-control" name="std_id1" type="text" id="std_id1" placeholder="รหัสนิสิต">
		</div>
		</td>
        <td>
		<div class="cpe05_name_student_id">
				<input class="form-control" name="std_id2" type="text" id="std_id2" placeholder="รหัสนิสิต">
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
				<input class="form-control" name="std_name1" type="text" id="std_name1" placeholder="ชื่อ-นามสกุล">
		</div>
		</td>
        <td>
		<div class="cpe05_name_student_id">
				<input class="form-control" name="std_name2" type="text" id="std_name2" placeholder="ชื่อ-นามสกุล">
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
		<input type="radio" name="progress" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="progress" value="false"></span></td></tr>
		<tr ><td>2. ความสมบรูณ์ของรายงานความก้าวหน้า</td><td><span style="padding-left:4em">
		<input type="radio" name="report" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="report" value="false"></span></td></tr>
		<tr ><td>3. ความรู้ความเข้าใจของนิสิตเกี่ยวกับโครงงาาน</td><td><span style="padding-left:4em">
		<input type="radio" name="knowledge" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="knowledge" value="false"></span></td></tr>
		<tr ><td>4. การแบ่งงานและการทำงานเป็นทีม (กรณีมีนิสิตทำงานมากกว่า 1 คน)</td><td><span style="padding-left:4em">
		<input type="radio" name="division" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="division" value="false"></span></td></tr>
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
		<span style="padding-left:20em"><input type="radio" name="opinion_teacher" value="true">ผ่าน</span>
		<span style="padding-left:13em"><input type="radio" name="opinion_teacher" value="false">ไม่ผ่าน</span></td></tr>
		<tr ><td></td></tr>
		
	 </tbody>
	 </table >
	 <br>
	 &nbsp;&nbsp;&nbsp;&nbsp;หมายเหตุ  ผ่าน = สมควรดำเนินโครงงานต่อไป , ไม่ผ่าน = ไม่สมควรดำเนินโครงงานในหัวข้อนี้ต่อไป
	
	 <br><br><br>
	 <div class="cpe05_save">
		<input class="btn btn-default" type="submit" name="cpe05_save" value="Save">
	</div>
	 <br><br>
		</div>
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	
	</html>