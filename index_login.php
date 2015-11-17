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
		  
		 <link rel="stylesheet" href="css/news.css">
		   
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		  
		  
		  
		
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
				echo "<li class='active'><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li ><a href='cpe04.php'>CPE</a></li>";
				echo "<li ><a href='loginsuccess.php'>View</a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li ><a href='about.php'>About</a></li>";
			}
			else
			{
				echo "<li class='active'><a href='index.php'>Home</a></li>";
				echo "<li ><a href='more.php'>Detail Project</a></li>";
				echo "<li ><a href='cpe04.php'>CPE</a></li>";
				echo "<li ><a href='loginsuccess.php'>View<sup style='padding:5px; color:red'>".$objResult_SQL_status["count"]."</sup></a></li>";
				echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
				echo "<li ><a href='about.php'>About</a></li>";
			}
		}
		
		
	}
	else
	{
		
		echo "<li class='active'><a href='#'>Home</a></li>";
		echo "<li ><a href='more.php'>Detail Project</a></li>";
		echo "<li ><a href='ALLCPE.php'>CPE</a></li>";
		echo "<li ><a href='loginsuccess.php'>View</a></li>";
		echo "<li class='box-2'><a href='logout.php'>Logout</a></li>";
		echo "<li ><a href='about.php'>About</a></li>";
		
	}

	 	
	?>
				
				
				
		
		
		</ul>
		
		</div>
		
		
			
		</div>
	
		<div class="body_page"><br>
		
		<div class="bg_home">
								
		
			
			<div class="wrapper">
		<br><a1>-ข่าวประชาสัมพันธ์...</a1><br>
				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="#" target="_blank"><img src="img/all3.png" /></a>
						
					</li>
					<li>
						<a href="#" target="_blank"><img src="img/NU Award 2015.jpg" /></a>
						
					</li><li>
						<a href="#" target="_blank"><img src="img/icesit2015.png" /></a>
						
					</li><li>
						<a href="#" target="_blank"><img src="img/PromotionYecc2015.jpg" /></a>
						
					</li><li>
						<a href="#" target="_blank"><img src="img/027.jpg" /></a>
						
					</li>
					
					
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

			

			</div><!-- /wrapper -->
			
			
			
			
			
		</div> 
		
	</div> 

	</body>
	 
	<script type="text/javascript" src="js/jaidee.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slicebox.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
	
	<footer>
		<div style='text-align:right'>Page SS05</div>
	</footer>
	</html>