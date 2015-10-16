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
		  <link rel="stylesheet" type="text/css" href="css/menu.css">
		  <link rel="stylesheet" type="text/css" href="css/jaidee-style.css">
		   <link rel="stylesheet" href="css/bootstrap.min.css">
		  
		  
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
		echo "<li class='active'><a href='#'>Detail Project</a></li>";
		echo "<li ><a href='loginsuccess.php'>View</a></li>";
		echo "<li ><a href='logout.php'>Logout</a></li>";
		echo "<li ><a href='about.php'>About</a></li>";
		}
		
		
	}
	else
	{
		
		echo "<li ><a href='index.php'>Home</a></li>";
		echo "<li class='active'><a href='#'>Detail Project</a></li>";
		echo "<li ><a href='ALLCPE.php'>CPE</a></li>";
		echo "<li ><a href='loginsuccess.php'>View</a></li>";
		echo "<li ><a href='logout.php'>Logout</a></li>";
		echo "<li ><a href='about.php'>About</a></li>";
		
	}

	 	
	?>
				
				
		
		
		</ul>
		
		</div>
		
		
			
		</div>
	
		<div class="body_page_detail"><br>
		
		<div class="bg_detail">
								
		
			
			<fieldset>
				<legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a1>Detail Project</a1></legend>
    
					<h3>การดำเนินงานวิชาโครงงานวิศวกรรมคอมพิวเตอร์</h3>
					<a1>1. กรรมการสอบโครงงาน</a1><br>
						&nbsp;&nbsp;&nbsp;&nbsp- แต่ละโครงงานมีกรรมการสอบอย่างน้อย 3 คน (รวมอาจารย์ที่ปรึกษา) <br>
						&nbsp;&nbsp;&nbsp;&nbsp- อาจารย์ที่ปรึกษาเสนอรายชื่อกรรมการ 1 ท่าน (ผ่านแบบ CPE01) และผู้ประสานงานรายวิชาโครงงานเสนอรายชื่อกรรมการอีก 1 ท่าน <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp(จะประกาศรายชื่อให้ทราบ)<br>
						&nbsp;&nbsp;&nbsp;&nbsp- แต่ละโครงงานต้องส่งแบบ CPE03 ซึ่งมีกรรมการลงนามครบทั้ง 3 คน เพื่อยืนยันรายชื่อกรรมการ <br><br>
					<a1>2. การดำเนินงานโครงงาน และ การเขียนรายงานโครงงาน</a1><br>
						&nbsp;&nbsp;&nbsp;&nbsp- ระหว่างดำเนินโครงงาน แต่ละกลุ่มจะต้องส่ง logbook (แบบ CPE02) ให้กับผู้ประสานงานรายวิชาตามกำหนดการ<br>
						&nbsp;&nbsp;&nbsp;&nbsp- ใช้รูปแบบตามที่คู่มือกำหนด (คู่มือการเขียนปริญญานิพนธ์) แต่ให้ใช้ฟอนต์ Th Sarabun<br><br>
					<a1>3. การสอบข้อเสนอโครงงาน</a1><br>
						&nbsp;&nbsp;&nbsp;&nbsp- ใช้แบบฟอร์ม CPE04 โดยนิสิตกรอกข้อมูลให้เรียบร้อยแล้วส่งให้ผู้ประสานงานรายวิชาตามเวลาที่กำหนด<br>
						&nbsp;&nbsp;&nbsp;&nbsp- ผลการสอบหัวข้อโครงงานจะยึดตามมติกรรมการโดยมี 3 กรณีคือ<br>
						&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp;- ผ่าน คือ สามารถดำเนินโครงงานต่อไปได้<br>
						&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp;- สมควรแก้ไข แบ่งเป็น 2 กรณี คือ<br>
						&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp;- สมควรแก้ไขโดยต้องสอบใหม่ คือ ให้แก้ไขตามคำแนะนำของกรรมการแล้วนัดสอบหัวข้อใหม่อีกครั้ง<br>
						&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp;- สมควรแก้ไขโดยไม่ต้องสอบใหม่ คือ ให้แก้ไขรายงานและรายละเอียดโครงงานตามคำแนะนำของกรรมการแต่ไม่ต้องสอบหัวข้อใหม่<br>
						&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp&nbsp;- ไม่ผ่าน คือ ให้เปลี่ยนหัวข้อ และ นัดสอบหัวข้อใหม่อีกครั้ง<br><br>
					<a1>4. การสอบโครงงาน (สอบจบ)</a1><br>
						&nbsp;&nbsp;&nbsp;&nbsp- ผู้ประสานงานรายวิชาจะทำการจัดตารางสอบเฉพาะกลุ่มที่ส่งแบบขอสอบโครงงานวิศวกรรมภายในเวลาที่กำหนด (CPE06)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp และอาจารย์ที่ปรึกษาให้ความเห็นว่าสมควรให้สอบได้ โดยจะจัดสอบ 2 รอบ <br><br>
					<a1>5. การเปลี่ยนแปลงรายละเอียดโครงงาน</a1><br>
						&nbsp;&nbsp;&nbsp;&nbsp 5.1 การเปลี่ยนกรรมการ<br>
						&nbsp;&nbsp;&nbsp;&nbsp 5.2 การเปลี่ยนอาจารย์ที่ปรึกษา<br>
						&nbsp;&nbsp;&nbsp;&nbsp 5.3 การเปลี่ยนหัวข้อโครงงาน<br>
						&nbsp;&nbsp;&nbsp;&nbsp 5.4 การเปลี่ยนชื่อหัวข้อโครงงานโดยไม่เปลี่ยนแปลงรายละเอียด<br><br>
					<a1>6. การแก้ P</a1><br>
	
			</fieldset>
			
			
			
			
			
		</div> 
		
	</div> 

	</body>
	 
	<script type="text/javascript" src="js/jaidee.js"></script>
	
	</html>