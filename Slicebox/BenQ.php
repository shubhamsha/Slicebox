<html>
    <head>
        <title>BenQ GH-650</title>
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	</head>
	<body>
		
			<h1 style="font-size:90px;"><i>BenQ GH-650</i><span></span></h1>
			
			<div class="more">
				<ul id="sb-examples">
					<li><h3><u>Camera's</u>&nbsp;&nbsp;&nbsp;</h3></li>
					<li><a href="Canon.php">Canon 6D</a></li>
					<li><a href="Nikon.php">Nikon D300s</a></li>
					<li><a href="Sony.php">Sony RX-10</a></li>
					<li class="selected"><a href="BenQ.php">BenQ GH-650</a></li>
                    <li><a href="Pentax.php">Pentax K-3</a></li>
				</ul>
			</div>

			<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="BenQ/1.jpg" target="_blank"><img src="BenQ/1.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>BenQ GH650</h3>
						</div>
					</li>
					<li>
						<a href="BenQ/2.jpg" target="_blank"><img src="BenQ/2.jpg" alt="image2"/></a>
						<div class="sb-description">
							<h3>Reviews for BenQ GH650</h3>
						</div>
					</li>
					<li>
						<a href="BenQ/3.jpg" target="_blank"><img src="BenQ/3.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Benq GH650 Digital Camera</h3>
						</div>
					</li>
					<li>
						<a href="BenQ/4.jpg" target="_blank"><img src="BenQ/4.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>the bottom panel is equipped battery compartment and memory card slot SD. In addition, there is also a metal insert with rez</h3>
						</div>
					</li>
					<li>
						<a href="BenQ/5.jpg" target="_blank"><img src="BenQ/5.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3> the latest BenQ GH650 1600 million pixels 26 times optical zoom ...</h3>
						</div>
					</li>
					<li>
						<a href="BenQ/6.jpg" target="_blank"><img src="BenQ/6.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Despite the fact that the dominant material plastic housing serves no other elements of the inserts is also not done. Thus , the lens Benq GH650 received ...</h3>
						</div>
					</li>
					<li>
						<a href="BenQ/7.jpg" target="_blank"><img src="BenQ/7.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>BenQ</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

			</div><!-- /wrapper -->
			<p class="info"><strong><h1>BenQ GH-650:</h1></strong><br/><h3><center>
<br/>MRP: Rs 11,990
<br/>Other than megapixels, what is one camera parameter that is wowed by the layman? 
<br/>The optical zoom! This feature is valued because it brings far off objects within the 
<br/>photographer's reach, and especially useful for nature photography. However, 
<br/>the price of such cameras has been on the higher side. BenQ attempts to break the price 
<br/>barrier with the recently introduced GH650, which is a bridge camera camera 
<br/>(a camera segment that aims to bridge the gap between point-and-shoots and SLRs) 
<br/>with a 26x optical zoom. With a 16 mp image sensor, it features OIS to take care 
<br/>of jitters during photography. While it does look good on paper, 
<br/>we'll try to find out if it can really deliver.
 
                                                                  </center></h3></p>
            <p class="info"><strong><h1>BENQ DIG CAM GH650 16 MP-BLACK:</h1></strong><h2 style="color:#000000"><center><br/>Design And Features</h2></center><h3><br/><center>The BenQ GH350 that we received was of slate-grey colour with a slight 
<br/>lustre rather than black as mentioned on the website. 
<br/>The such a long zoom lens, the camera's on the heavier 
<br/>side at around half a kilogram. However, it is almost 
<br/>as large as an entry-level D-SLR camera that takes away some of its portability. 
<br/>The build is very chunky and strong for a camera in this 
<br/>price range and it even looks good.</h3></center></p>

<a href="Home Page/Homepage.php"><h2 class="h"><center>Home</center></h2></a>                                                                  

		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
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

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
	</body>
</html>	