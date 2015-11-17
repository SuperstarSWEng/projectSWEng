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
	
	$strSQL2 = "SELECT * FROM teacher WHERE ID_Teacher = '".$_SESSION['ID_Teacher']."' ";
	$objQuery2 = mysql_query($strSQL2);
	$objResult2 = mysql_fetch_array($objQuery2);
	
	$strSQL3 = "SELECT * FROM project WHERE ID_Teacher = '".$_SESSION['ID_Teacher']."'";
	$objQuery3 = mysql_query($strSQL3) or die ("Error Query [".$strSQL3."]");
	
	
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
				echo "<li class='active'><a href='loginsuccess.php'>View</a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li ><a href='about.php'>About</a></li>";
			}
			else
			{
				echo "<li ><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li ><a href='cpe04.php'>CPE</a></li>";
				echo "<li class='active'><a href='loginsuccess.php'>View<sup style='padding:5px; color:red'>".$objResult_SQL_status["count"]."</sup></a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li ><a href='about.php'>About</a></li>";
			}
		}
		
		
	}
	else
	{
		
		echo "<li ><a href='index.php'>Home</a></li>";
		echo "<li ><a href='more.php'>Detail Project</a></li>";
		echo "<li ><a href='ALLCPE.php'>CPE</a></li>";
		echo "<li class='active'><a href='loginsuccess.php'>View</a></li>";
		echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
		echo "<li ><a href='about.php'>About</a></li>";
		
	}

	 	
	?>
				
				
		</ul>
		</div>
			
		</div>
		<div class="body_page_login"><br>
		
			
		ยินดีต้อนรับ คุณ<?php echo $objResult2["TeacherName"];?>  <?php echo $objResult2["TeacherLastName"];?><br><br><br><br><br>
		
		<table class="table">
    <thead>
      <tr>
        <th>Name TH </th>
        <th>Name EN</th>
		<th>Status</th>
		<th>Confirm</th>
		<th>View</th>
      </tr>
    </thead>	
	<tbody>
	
 <?php
		while($objResult3 = mysql_fetch_array($objQuery3))
		{
?>
		<tr>
			<td><div align="left"><?php echo $objResult3["ProjectName_TH"];?></div></td>
    
			<td><div align="left"><?php echo $objResult3["ProjectName_EN"];?></div></td>
			<td><div align="left">
			<?php
			
			if($objResult3["Status_Project"]=="0")
			{
				echo "รออนุมัติ";
			}
			else if($objResult3["Status_Project"]=="1")
			{
				echo "อนุมัติแล้ว";
			}
			
			?>
			
			</div></td>
			<td><div align="left">
			<form name="form1" method="post" action="confrim.php?idp=<?=$objResult3["ID_Project"]?>">
				<?php
				if($objResult3["Status_Project"]=="0")
				{
					echo "<input class='btn btn-default' type='submit' name='Confirm' value='Confirm'>";
				}
				else if($objResult3["Status_Project"]=="1")
				{
					echo "<input class='btn btn-default' disabled='disabled' type='submit' name='Confirm' value='Confirm'>";
				}?>
			</form>
			</div></td>
			
			<td><div align="left">
			<form name="form1" method="post" action="Viewcpe01.php?idpv=<?=$objResult3["ID_Project"]?>">
				<input class="btn btn-default" type="submit" name="View" value="View">
			</form>	
			</div></td>
			
		</tr>
<?php
		}
?>

		</tbody>
		</table>


		
		</div>
	</body>
	
	<script type="text/javascript" src="js/jaidee.js"></script>
	<footer>
		<div style='text-align:right'>Page SS17</div>
	</footer>
	</html>