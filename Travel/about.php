<?php
	session_start();
	require("logout.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>About</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Queensland Travel Agency"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/login.css" rel="stylesheet" type="text/css"/>
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>

<!-- //js -->

<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!--Calendar-->
<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
		<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
		<script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/jqx-all.js"></script>
		<script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/globalization/globalize.js"></script>
		<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.arctic.css" type="text/css" />
		<script type="text/javascript" src="./js/app.js"></script>
		<link rel="stylesheet" href="./css/app.css" type="text/css" />

<!--Calendar-->

</head>
	
<body>
	<!-- header -->
	<div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4">
			<a href="index.php" class="logo-image"><img class="logo-image-size" src="images/logo.jpg" alt="logo"></a>
		</div>
			<?php
			if(isset($_SESSION["username"])) {
				echo "<div class=\"logo-right\">
							<ul>
								<li><a>".$_SESSION["username"]."</a></li>
							</ul>
						</div>";
			}
		?>
	</div>
		<div class="clearfix"> </div>

	<div class="container-fluid header-navigation" style="margin-bottom: 10px;">
		<div class="navigationbar navigationbar-default">
			<div class="row navigation navigationbar-nav">
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4 top-nav"><a href="index.php">Home</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4 top-nav"><a href="services.php">Services</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4 top-nav"><a href="gallery.php">Gallery</a></div>
				<div class="col-md-4 col-lg-2 col-xs-12 col-sm-4 bot-nav"><a href="about.php">About</a></div>
				<?php
				if(!isset($_SESSION["username"])) {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4 bot-nav\"><a href=\"login.php\">Login</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4 bot-nav\"><a href=\"register.php\">Register</a></div>";
				} else {
					echo "<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"profile.php\">Profile</a></div>
					<div class=\"col-md-4 col-lg-2 col-xs-12 col-sm-4\"><a href=\"index.php?logout=true\">Logout</a></div>";
				}
				?>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner1">
	</div>
<!-- //banner -->
<!-- about -->
	<div class="about">
		<div class="container">
			<ol class="breadcrumb breadco">
			  <li><a href="index.php">Home</a></li>
			  <li class="active">About Us</li>
			</ol>


			<div class="about-grids">
				<div class="col-md-12 about-grid">
					<h3>About Us</h3>
					<img src="images/bnelogo.jpg" alt="Brisbane Sign " class="img-responsive" />
					<h4>Queensland Travel Agency (QTA)</h4>
					<p>Queensland Travel Agency is a local tourist service company which focus on creating affordable advaentures for awesome humans in Queensland State. We've crossed borders to push boundaries, walked unfamiliar paths to find new friends, and got lost to discover the places we love.</p>
				</div>
			</div>
		</div>
	</div>
<!-- //about -->

<!-- about -->
	<div class="about">
		<div class="container">
			<div class="about-grids">
				<div class="col-md-12 about-grid">
					<h3>Our History</h3>
					<div class="about-gd">
						<div class="about-gd-left">
							<h4>2010 -</h4>
						</div>
						<div class="about-gd-right">
							<p>Three university students who loves travel and adventure, they decide to share their experience for more people.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-gd">
						<div class="about-gd-left">
							<h4>2012 -</h4>
						</div>
						<div class="about-gd-right">
							<p>Queensland Travel Agency formed, early focus on Brisbane and nearby travel experiences. </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-gd">
						<div class="about-gd-left">
							<h4>2014 -</h4>
						</div>
						<div class="about-gd-right">
							<p>Queensland Travel Agency had designed more choices of the travel package for better customize services.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-gd">
						<div class="about-gd-left">
							<h4>Today -</h4>
						</div>
						<div class="about-gd-right">
							<p>Queenslad Travel Agency had been set up 4 cities services within Birsbane, Gold Coast, Sunshine Coast, Cairns and their nearby areas. </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-gd">
						<div class="about-gd-left">
							<h4>Future</h4>
						</div>
						<div class="about-gd-right">
							<p>Queenslad Travel Agency will be set up more package and day trip in more areas on Queensland State and building more services for customers.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- events -->
	<div class="events">
		<div class="container">
			<h3>Upcoming Services</h3>
			<div class="events-grids">
				<div class="col-lg-4 col-md-12 events-grid">
					<div class="mnth-date">
						<div class="col-xs-12 mnth-date-left">
							<h4>Flight Booking</h4>
						</div>
						<div class="clearfix"> </div>
						<p class="quasi">Queensland Travel Agency will provide discount flight booking service, people from other states can plan their tourist within few steps.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 events-grid">
					<div class="mnth-date">
						<div class="col-xs-12 mnth-date-left">
							<h4>Car Rental</h4>
						</div>
						<div class="clearfix"> </div>
						<p class="quasi">Want to have a self-drive tour in Queensland? Queensland Travel Agency will supply car rental services support from our parter, enjoy your own self-drive advantures if you own a legal lisences.</p>
						</div>
					</div>
				<div class="col-lg-4 col-md-12 events-grid">
					<div class="mnth-date">
						<div class="col-xs-12 mnth-date-left">
							<h4>Accommodation</h4>
						</div>
						<div class="clearfix"> </div>
						<p class="quasi">Happy to stay night in Queensland? Queensland Travel Agency will provide discount hotel/host accommodation service, which can suit for people with different burgets.</p>
						</div>
					</div>
				</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //events -->
<!-- history -->
	<div class="history">
		<div class="container">
			<div class="col-lg-6 col-md-12 history-left">	
				<h3>Our Standards</h3>
				<div class="history-left-grid">
					<h4>Consummate Customer Services</h4>
					<p class="aut">Our customer service department would supply a completed customer services
					from before purchase till after sales. We offer package research & recommend, customize package & special events design, multi-payment acceptance, date change & package alternative and other after-sales services.
					</p>
				</div>
				<div class="history-left-grid">
					<h4>Customize Package Design & Special Events</h4>
					<p class="aut">Feeling bored about the normal package? We offer the customize travel package which can satisfy what you actually need and give you a great deal of it. Going to have a travel party or honeymoon holiday? We also offer some 2 peoples or few peoples package with only little price increased.</p>
				</div>
				<div class="history-left-grid">
					<h4>Flexible time & more frequently Package Events</h4>
					<p class="aut">Flexible time & more frequently Package Events
					Are you quite busy and without many available time but still love travelling? Choose us, our packages especially short term packages have flexible time with more frequently happen date which mean you can have more available date to start with.
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 history-right">
				<h3>What We Offer</h3>
				<h4>Special services and offers</h4>
				<p>Life has travel, travel always belong to life. People may encounter many difficulties in their life, why not just escape and have a memorable experience travel, and keep your happiness.</p>
				<ul style="color:#66D5DE;">
					<li>Travel Insurance</li>
					<li>Group Tickets Discount</li>
					<li>Membership Loyalty System</li>
					<li>Customise Package Design</li>
					<li>Gifts Card and voucher</li>
					<li>Memorable Souvenir</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //history -->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<h3>Queensland Travel Agency</h3>
					<ul style="color: #868686;font-size:14px;text-decoration: none;font-family: 'Open Sans', sans-serif;list-style-type:none;">
            			<li>mail@qta.com.au</li>
            			<li>(07) 3456 7890</li>
          			</ul>
					<h3>Find out more</h3>					
					<ul>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="https://blog.queensland.com/">Blog</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
					<div id="calendar">
         
        </div>
				</div>
        <div class="col-md-4 col-sm-12 col-xs-12 footer-grids">
          <h3>Destination</h3>
          <ul>
            <li><a href="destination.php?destination=Brisbane">Brisbane</a></li>
            <li><a href="destination.php?destination=Gold Coast">Gold Coast</a></li>
            <li><a href="destination.php?destination=Sunshine Coast">Sunshine Coast</a></li>
            <li><a href="destination.php?destination=Cairns">Cairns<a/></li>
          </ul>
        </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">		
			<p>Queensland Travel Agency &copy; QTA 2018. All rights reserved.</p>					
		</div>
	</div>
<!--//footer-->	
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>

<!-- //for bootstrap working -->
</body>
</html>