<html>
    <head>
        <title>(Digital) DSLR</title>
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	</head>
	<body>
		<h1 style="font-size:90px;"><i>Pentax K-3</i><span></span></h1>
			
			<div class="more">
				<ul id="sb-examples">
					<li><h3><u>Camera's</u>&nbsp;&nbsp;&nbsp;</h3></li>
					<li><a href="Canon.php">Canon 6D</a></li>
					<li><a href="Nikon.php">Nikon D300s</a></li>
					<li><a href="Sony.php">Sony RX-10</a></li>
					<li><a href="BenQ.php">BenQ GH-650</a></li>
                    <li class="selected"><a href="pentax.php">Pentax K-3</a></li>
				</ul>
			</div>

			<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="Pentax/1.jpg" target="_blank"><img src="Pentax/1.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Pentax K-3</h3>
						</div>
					</li>
					<li>
						<a href="pentax/2.jpg" target="_blank"><img src="pentax/2.jpg" alt="image2"/></a>
						<div class="sb-description">
							<h3>Pentax K-3 ISO 1001-200 sec at f - 2.5</h3>
						</div>
					</li>
					<li>
						<a href="pentax/3.jpg" target="_blank"><img src="pentax/3.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Pentax K-3 ISO 1001-50 sec at f - 4.0</h3>
						</div>
					</li>
					<li>
						<a href="pentax/4.jpg" target="_blank"><img src="pentax/4.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Pentax K-3 DSLR - 24-Megapixel APS-C CMOS Sensor</h3>
						</div>
					</li>
					<li>
						<a href="pentax/5.jpg" target="_blank"><img src="pentax/5.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3></h3>
						</div>
					</li>
					<li>
						<a href="pentax/6.jpg" target="_blank"><img src="pentax/6.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3></h3>
						</div>
					</li>
					<li>
						<a href="pentax/7.jpg" target="_blank"><img src="pentax/7.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Unlock your creative vision with the 20.2 Megapixel, Full Frame</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

				<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

			</div><!-- /wrapper -->
            <p class="info"><strong><h1>Pentax K-3 The New Standard of Performance</h1></strong></p>
			<p><h3><center><br/>Benchmarked as the most advanced enthusiast DSLR available, 
<br/>featuring unparalleled technology and specifications, the 
<br/>PENTAX K-3 will set your photography free with the new 
<br/>standard of imaging performance and unsurpassed user-flexibility.  
<br/>The K-3 touts 24 effective mega-pixels in an APS-C sensor, 
<br/>continuous shooting at an incredible 8.3 frames per second, 
<br/>and champions the world’s first selectable anti-aliasing filter, 
<br/>giving the user the ability to easily toggle anti-aliasing 
<br/>functionality on or off, for supreme resolution and zero 
<br/>limitation. Power your pictures using the new top-tier 
<br/>SAFOX11 autofocus module, and go beyond wireless functionality 
<br/>with the new FLU card SDHC technology for complete remote camera 
<br/>control, and image transfer. Complete, and capable for every serious 
<br/>photographer, also enjoy professional H.264 video capture, dual 
<br/>memory card slots, and the distinguished PENTAX weather sealing 
<br/>in a stunning magnesium alloy body. Harness the summit of the 
<br/>K-mount with the PENTAX K-3.</center></h3></p>
<p><h1><center> 24 effective mega-pixels</center></h1></p>
<p><h3><center><br/>24 effective mega-pixels in an APS-C sized CMOS sensor
<br/>Designed for the demanding photographer, the K-3 features 
<br/>24 effective megapixels in an APS-C sized CMOS sensor 
<br/>for outstanding high resolution imagery.</center></h3></p>
<p><h1><center>Fastest continuous shooting at 8.3FPS</center></h1></p>
<p><h3><center><br/>Never miss a single moment with an incredibly fast frame 
<br/>rate of 8.3 FPS, for extreme action capture and demanding 
<br/>high performance shooting.</center></h3></p> 
<p><h1><center>SAFOX11 Autofocus Module</center></h1></p>
<p><h3><center><br/>The newly designed SAFOX11 autofocus module maximizes 27 AF sensors 
<br/>and a vast light sensitivity range of –3EV to +18EV.</center></h3></p>

<a href="Home Page/Homepage.php"><h2 class="h"><center>Home</center></h2></a>


		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
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
	</body>
</html>	
