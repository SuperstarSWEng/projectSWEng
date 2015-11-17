<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:login.php");
		}
		
	}

		mysql_connect("localhost","root","1234");
		mysql_select_db("cpe_db");
		mysql_query("SET NAMES UTF8");
	
	
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
			
			if($objResult_SQL_status["count"] == 0)
			{
				echo "<li ><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li ><a href='cpe04.php'>CPE</a></li>";
				echo "<li ><a href='loginsuccess.php'>View</a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li class='active'><a href='about.php'>About</a></li>";
			}
			else
			{
				echo "<li ><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li ><a href='cpe04.php'>CPE</a></li>";
				echo "<li ><a href='loginsuccess.php'>View<sup style='padding:5px; color:red'>".$objResult_SQL_status["count"]."</sup></a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li class='active'><a href='about.php'>About</a></li>";
			}
		}
		
		
	}
	else
	{
		
		echo "<li ><a href='index.php'>Home</a></li>";
		echo "<li ><a href='more.php'>Detail Project</a></li>";
		echo "<li ><a href='ALLCPE.php'>CPE</a></li>";
		echo "<li ><a href='loginsuccess.php'>View</a></li>";
		echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
		echo "<li class='active'><a href='#'>About</a></li>";
		
	}

	 	
	?>
				
				
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
		
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		

		<center><h1>ผู้พัฒนาต่อ</h1></center>

			
		<div class="picD1">
		<div id='panel_pic'>
				<div id='csspicD1'>
		
				</div>

		</div>
		</div>
		<div id='det_picD1'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55362028
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Mr.Tarawee Plubplatong
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: p.tarawee@gmail.com
					</div>
			</div>
			
		<div class="picD2">
		<div id='panel_pic'>
				<div id='csspicD2'>
		
				</div>
				
		</div>
		</div>
		<div id='det_picD2'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55362394
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Mr.Sarayut Ruangsaeng
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: sarayutr55@email.nu.ac.th
					</div>
			</div>
			
		<div class="picD3">
		<div id='panel_pic'>
				<div id='csspicD3'>
		
				</div>
				
		</div>
		</div>
		<div id='det_picD3'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55361922
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Mr.Nattapoom  Kamhanghan
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: nattapoom.kajom@gmail.com
					</div>
			</div>
			
		<div class="picD4">
		<div id='panel_pic'>
				<div id='csspicD4'>
		
				</div>
				
		</div>
		</div>
		<div id='det_picD4'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55362363
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Miss.Wijitra Rattanason
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: wijitrar55@email.nu.ac.th
					</div>
			</div>
			
		<div class="picD5">
		<div id='panel_pic'>
				<div id='csspicD5'>
		
				</div>
				
		</div>
		</div>	
		<div id='det_picD5'>
					<div id='cssdet_pic'>
					 &nbsp;&nbsp;&nbsp;ID: 55362295
					<br><br>
					  &nbsp;&nbsp;&nbsp;Name: Miss.Malulee Pota
					<br><br>
					 &nbsp;&nbsp;&nbsp;E-mail: maluleep55@emai..nu.ac.th
					</div>
			</div>
		
		</div> 
		</div>
		
		
		
		<div class="more_detail">
		<br>
		<center><a1>เว็บไซต์นี้เป็นส่วนหนึ่งของ รายวิชา 305351 Computer System Engineering , 305471 Software Engineering</a1></center>
		<br>
		<center><a1>อาจารย์ผู้สอน ดร.สุรเดช จิตประไพกุลศาล</a1></center>
		<br>
		<center><a1>Copyright © 2015 by nu.ac.th,SuperStar . All rights reserved.</a1></center>
		</div 
	
	
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	<footer>
		<div style='text-align:right'>Page SS15</div>
	</footer>
	</html>