<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			//header("location:login.php");
		}
		else
		{
			header("location:about_login.php");
		}
		
	}
	else
	{
		header("location:about_login.php");
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
		  <script src="http://code.jquery.com/jquery-lacpe_db.min.js" type="text/javascript"></script>
		   
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
				
				<li ><a href='index.php'>Home</a></li>
				<li ><a href='more.php'>Detail Project</a></li>
				<li ><a href='login.php'>Login</a></li>
				<li class='active'><a href='#'>About</a></li>
				
		</ul>
		</div>
			
		</div>
		<div class="body_page_about"><br>
		<div class="member_student">
		
		<div class="pic1">
		<div id='panel_pic'>
				<div id='csspic1'>
		
				</div>
				
		</div>
		</div>
		<div id='det_pic1'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55361281
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Mr.Assanee Saksiritantawan
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: assanepoi@hotmail.com
					</div>
			</div>
			
		<div class="pic2">
		<div id='panel_pic'>
				<div id='csspic2'>
		
				</div>
				
		</div>
		</div>
		<div id='det_pic2'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55361878
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Miss.Chalitta Khampachua
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: chalittak55@email.nu.ac.th
					</div>
			</div>
			
		<div class="pic3">
		<div id='panel_pic'>
				<div id='csspic3'>
		
				</div>
				
		</div>
		</div>
		<div id='det_pic3'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55361953
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Mr.Danusorn Salabsee
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: danusorns55@email.nu.ac.th
					</div>
			</div>
			
		<div class="pic4">
		<div id='panel_pic'>
				<div id='csspic4'>
		
				</div>
				
		</div>
		</div>
		<div id='det_pic4'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55362059
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Mr.Theeraphong Seefong
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: theeraphongs55@email.nu.ac.th
					</div>
			</div>
			
		<div class="pic5">
		<div id='panel_pic'>
				<div id='csspic5'>
		
				</div>
				
		</div>
		</div>	
		<div id='det_pic5'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55362103
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Miss.Nitipat Thadsanapoom
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: nitipatt55@email.nu.ac.th
					</div>
			</div>	
		
		
		
		</div> 
		</div>
		
		
		<div class="more_detail">
		<br>
		<center><a1>เว็บไซต์นี้เป็นส่วนหนึ่งของ รายวิชา 305351 Computer System Engineering</a1></center>
		<br>
		<center><a1>อาจารย์ผู้สอน ดร.สุรเดช จิตประไพกุลศาล</a1></center>
		<br>
		<center><a1>2015 © Copyright nu.ac.th . All rights reserved.</a1></center>
		</div> 
	
	
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	
	</html>