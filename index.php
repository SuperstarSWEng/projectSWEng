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
			header("location:index_login.php");
		}
		
	}
	else
	{
		header("location:index_login.php");
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
		   <link rel="stylesheet" href="css/news.css">
		   
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		  
		  
		  
		
		  <script src="js/script.js"></script>
	</head>
	<body>
		 
		
		<div class="menu_bar">
			
		<div id='cssmenu'>
		<ul>
				
				<li class='active'><a href='#'>Home</a></li>
				<li ><a href='more.php'>Detail Project</a></li>
				<li ><a href='login.php'>Login</a></li>
				<li ><a href='about.php'>About</a></li>
				
		
		
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
		<div style='text-align:right'>Page SS01</div>
	</footer>
	</html>