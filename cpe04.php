<?php
	session_start();
	if($_SESSION['Student_ID'] == "")
	{
		if($_SESSION['ID_Teacher'] == "")
		{
		
			header("location:login.php");
		}
		
	}

	 	
	$check  = 4;
	$pass = "padding:0.7vw;display:inline;background-color:33FF99";
	$not = "padding:0.7vw;display:inline;background-color:write";
	if($check == 1)
	{
		$state1 = $pass;
		$state2 = $not;
		$state3 = $not;
		$state4 = $not;
		$state5 = $not;
		$state6 = $not;
		$state7 = $not;
	}
	else if($check == 2)
	{
		$state1 = $pass;
		$state2 = $pass;
		$state3 = $not;
		$state4 = $not;
		$state5 = $not;
		$state6 = $not;
		$state7 = $not;
	}
	else if($check == 3)
	{
		$state1 = $pass;
		$state2 = $pass;
		$state3 = $pass;
		$state4 = $not;
		$state5 = $not;
		$state6 = $not;
		$state7 = $not;
	}
	else if($check == 4)
	{
		$state1 = $pass;
		$state2 = $pass;
		$state3 = $pass;
		$state4 = $pass;
		$state5 = $not;
		$state6 = $not;
		$state7 = $not;
	}
	else if($check == 5)
	{
		$state1 = $pass;
		$state2 = $pass;
		$state3 = $pass;
		$state4 = $pass;
		$state5 = $pass;
		$state6 = $not;
		$state7 = $not;
	}
	else if($check == 6)
	{
		$state1 = $pass;
		$state2 = $pass;
		$state3 = $pass;
		$state4 = $pass;
		$state5 = $pass;
		$state6 = $pass;
		$state7 = $not;
	}
	else if($check == 7)
	{
		$state1 = $pass;
		$state2 = $pass;
		$state3 = $pass;
		$state4 = $pass;
		$state5 = $pass;
		$state6 = $pass;
		$state7 = $pass;
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
		   <link rel="stylesheet" type="text/css" href="css/cpe04.css">
		  
		   
		  
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
		<div class="body_page_cpe04"><br>
	
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
		echo "<div style=";echo $state1; echo ">------CPE01------</div>";echo "&nbsp";
		echo "<div style=";echo $state2; echo ">------CPE02------</div>";echo "&nbsp";
		echo "<div style=";echo $state3; echo ">------CPE03------</div>";echo "&nbsp";
		echo "<div style=";echo $state4; echo ">------CPE04------</div>";echo "&nbsp";
		echo "<div style=";echo $state5; echo ">------CPE05------</div>";echo "&nbsp";
		echo "<div style=";echo $state6; echo ">------CPE06------</div>";echo "&nbsp";
		echo "<div style=";echo $state7; echo ">------CPE07------</div>";echo "&nbsp";
		echo "</nav>";
		
		echo "<br>_____________________________________________________________________________________________________________________________________________________________________";
		
		echo "<li><a href='ALLCPE.php'>CPE01</a></li>";
		echo "<li><a href='cpe02.php'>CPE02</a></li>";
		echo "<li><a href='cpe03.php'>CPE03</a></li>";
		echo "<li class='active'><a href='#'>CPE04</a></li>";
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
		
		<div class="cpe04_ID_project">
			<input class="form-control" name="ID_project" type="text" id="ID_project" placeholder=" รหัสโครงงาน">
		
		</div>
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อโครงงาน	 </a1>
		<div class="cpe04_name">
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
		<div class="cpe04_name_student_id">
				<input class="form-control" name="std_id1" type="text" id="std_id1" placeholder="รหัสนิสิต">
		</div>
		</td>
        <td>
		<div class="cpe04_name_student_id">
				<input class="form-control" name="std_id2" type="text" id="std_id2" placeholder="รหัสนิสิต">
		</div>
		</td>
		<td>
		<div class="cpe04_name_student_id">
				<input class="form-control" name="std_id3" type="text" id="std_id3" placeholder="รหัสนิสิต">
		</div>
		</td>
      </tr>
	  <tr >
        <td>
		<center>ชื่อ-นามสกุล</center>
		</td>
        <td>
		<div class="cpe04_name_student_id">
				<input class="form-control" name="std_name1" type="text" id="std_name1" placeholder="ชื่อ-นามสกุล">
		</div>
		</td>
        <td>
		<div class="cpe04_name_student_id">
				<input class="form-control" name="std_name2" type="text" id="std_name2" placeholder="ชื่อ-นามสกุล">
		</div>
		</td>
		<td>
		<div class="cpe04_name_student_id">
				<input class="form-control" name="std_name3" type="text" id="std_name3" placeholder="ชื่อ-นามสกุล">
		</div>
		</td>
      </tr>
	 <td></td><td></td><td></td><td></td>
	 
	  </tbody>
	
	
		
	</table>	
	<br>	
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;ผลการประเมิน</a1>
		
	<table class="table">
	<thead>
      <tr >
        <th><center>หัวข้อการประเมิน</center></th>
        <th><center>เหมาะสม</center></th>
		<th><center>ไม่เหมาะสม</center></th>
      </tr>
    </thead>
	<tbody>
	
		<tr ><td> 1. จำนวนนิสิตที่ทำโครงงาน</td><td><span style="padding-left:4em">
		<input type="radio" name="number_student" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="number_student" value="false"></span></td></tr>
		<tr ><td>2. ที่มาและความสำคัญของปัญหา</td><td><span style="padding-left:4em">
		<input type="radio" name="origin_significance" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="origin_significance" value="false"></span></td></tr>
		<tr ><td>3. วัตถุประสงค์ของโครงงาน</td><td><span style="padding-left:4em">
		<input type="radio" name="purpose" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="purpose" value="false"></span></td></tr>
		<tr ><td>4. การศึกษาเกี่ยวกับหลักการและทฤษฎีที่เกี่ยวข้อง</td><td><span style="padding-left:4em">
		<input type="radio" name="theory" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="theory" value="false"></span></td></tr>
		<tr ><td>5. ความเหมาะสมของวิธีการดำเนินงานที่นำเสนอ</td><td><span style="padding-left:4em">
		<input type="radio" name="present" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="present" value="false"></span></td></tr>
		<tr ><td>6. ขอบเขตของโครงงาน</td><td><span style="padding-left:4em"><input type="radio" name="scope" value="true"></span></td><td>
		<span style="padding-left:4em"><input type="radio" name="scope" value="false"></span></td></tr>
		<td></td><td></td><td></td>
		
	 </tbody>
	 </table >
	 
	 <br>
	 <a1>&nbsp;&nbsp;&nbsp;&nbsp;ข้อเสนอแนะ </a1>
		<div class="cpe04_guide">
			<textarea class="form-control" rows="8" cols="80" name="cpe04_guide" type="text" id="cpe04_guide" placeholder="ข้อเสนอแนะ "></textarea>
		</div>
	

		
	<br><br>	
		<a1>&nbsp;&nbsp;&nbsp;&nbsp;สรุป</a1>
		
	<table class="table">
	<thead>
      <tr >
        <th><center>หัวข้อ</center></th>
        <th><center>ผ่าน</center></th>
		<th><center>ไม่ผ่าน</center></th>
		<th><center>สมควรแก้ไข</center></th>
		
      </tr>
    </thead>
	<tbody>
	
		<tr ><td> &nbsp;&nbsp;&nbsp;&nbsp;ความเห็นของอาจารย์ผู้ประเมิน</td><td><span style="padding-left:5em">
		<input type="radio" name="opinion_teacher" value="true"></span></td><td>
		<span style="padding-left:5em"><input type="radio" name="opinion_teacher" value="false"></span></td><td>
		<span style="padding-left:5em"><input type="radio" name="opinion_teacher" value="re-examine">สอบใหม่</span><br>
		<span style="padding-left:5em"><input type="radio" name="opinion_teacher" value="not examine">ไม่ต้องสอบใหม่</span></td></tr>
		
		<tr ><td>&nbsp;&nbsp;&nbsp;&nbsp;มติกรรมการ</td><td><span style="padding-left:5em">
		<input type="radio" name="board_resolution" value="true"></span></td><td>
		<span style="padding-left:5em"><input type="radio" name="board_resolution" value="false"></span></td><td>
		<span style="padding-left:5em"><input type="radio" name="board_resolution" value="re-examine">สอบใหม่</span><br>
		<span style="padding-left:5em"><input type="radio" name="board_resolution" value="not examine">ไม่ต้องสอบใหม่</span></td></tr>
		<td></td><td></td><td></td><td></td>
		
	 </tbody>
	 </table >
	 <br>
	 &nbsp;&nbsp;&nbsp;&nbsp;หมายเหตุ  ผ่าน = สมควรดำเนินโครงงานโดยไม่ต้องแก้ไข , สมควรแก้ไข = สมควรดำเนินโครงงานแต่ต้องแก้ไขตามที่กรรมการแนะนำ ,<span style="padding-left:12em">&nbsp;&nbsp;&nbsp;&nbsp;
	 ไม่ผ่าน = ไม่ควรดำเนินโครงงานในหัวข้อนี้</span>
	
	 <br><br><br>
	 <div class="cpe04_save">
		<input class="btn btn-default" type="submit" name="cpe04_save" value="Save">
	</div>
	 <br><br>
		</div>
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	
	</html>