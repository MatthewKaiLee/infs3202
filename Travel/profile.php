<?php
	session_start();
	require("connectDatabaseObject.php");
	require("logout.php");
	if(isset($_SESSION["username"])) {
		$username = $_SESSION["username"];
		$sql_query = "SELECT Firstname, LastName, Username, Email FROM customer Where username = ?";
		$stmt_object = $db_link -> prepare($sql_query);
		$stmt_object -> bind_param("s", $username);
		$stmt_object -> execute();
		$result = $stmt_object -> get_result();
		$row_result = $result -> fetch_row();
	} else {
		header("Location: index.php");
	}

	if(isset($_POST["action"]) && $_POST["action"] == "update") {
		$username = $_SESSION["username"];
		$sql_query = "SELECT Firstname, LastName, Username, Password, Email FROM customer Where Username = ?";
		$stmt_object = $db_link -> prepare($sql_query);
		$stmt_object -> bind_param("s", $username);
		$stmt_object -> execute();
		$result = $stmt_object -> get_result();
		$row_result = $result -> fetch_row();
		$firstname = $row_result[0];
		$lastName = $row_result[1];
		$password = $row_result[3];
		$email = $row_result[4];
		$stmt_object -> close();
		
		if(isset($_POST["fname"]) && $_POST["fname"] != "") {
			$firstname = $_POST["fname"];
		}
		if(isset($_POST["lname"]) && $_POST["lname"] != "") {
			$lastname = $_POST["lname"];
		}
		if(isset($_POST["password"]) && isset($_POST["ckpassword"]) && $_POST["password"] == $_POST["ckpassword"] && $_POST["password"] != ""  && $_POST["ckpassword"] != "") {
			$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
		}
		if(isset($_POST["email"]) && $_POST["email"] != "") {
			$email = $_POST["email"];
		}
		$update_query = "UPDATE customer SET Firstname=?, LastName=?,Password=?,Email=? Where Username=?";
		$stmt_object = $db_link -> prepare($update_query);
		$stmt_object -> bind_param("sssss",$firstname, $lastname, $password, $email, $username);
		$stmt_object -> execute();
		$stmt_object -> close();
		header("Location: index.php");
	}

	if(isset($_GET["delete"]) && $_GET["delete"]=="true" && isset($_SESSION["username"])) {
		$delete_query = "DELETE FROM customer WHERE username=".$_SESSION["username"];
		$stmt_object = $db_link -> prepare($delete_query);
		$stmt_object -> execute();
		$stmt_object -> close();
		unset($_SESSION["username"]);
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>register</title>
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

<!--<link href="css/register.css" rel="stylesheet" type="text/css"/>-->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script src="js/register.js" type="text/javascript"></script>

<script type="text/javascript">
	function changepw() {
		document.getElementById("changepassword").innerHTML = "<h4 class=\"col-md-4\">Comfirm Password:</h4><input class=\"col-md-4\" type=\"password\" name=\"newpassword\" placeholder=\"New Password\">";
		document.getElementById("changepwbutton").style.display = "none";
	}

</script>


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


<div class="container register-form">
			<ol class="breadcrumb breadco">
				<li><a href="index.php">Home</a></li>
				<li class="active">Profile</li>
			</ol>
				<div class="row">
					<form method="POST" class="col-md-12 col-xs-12" name="profile" id="profile" onSubmit="return checkValidEdition()">
						<h3>Edit Profile</h3>
						<hr>
						<p>Please fill in the information that you want to update</p>
						<div class="col-md-12">
							<h4 class="col-md-4">First Name:</h4>
							<input class="col-md-4" name="fname" placeholder=<?php echo "\"".$row_result[0]."\"";?>>
							<div class="col-md-4" id="errfnamemsg"></div>
						</div>
						<div class="col-md-12">
							<h4 class="col-md-4">Last Name:</h4>
							<input class="col-md-4" name="lname" placeholder=<?php echo "\"".$row_result[1]."\"";?>>
							<div class="col-md-4" id="errlnamemsg"></div>
						</div>
						<div class="col-md-12">
							<h4 class="col-md-4">Userame:</h4>
							<div class="col-md-4"><?php echo $row_result[2];?></div>
						</div>
						<div class="col-md-12">
							<h4 class="col-md-4">Email:</h4>
							<input class="col-md-4" name="email" placeholder=<?php echo "\"".$row_result[3]."\"";?>>
							<div class="col-md-4" id="erremailmsg"></div>
						</div>
						<div class="col-md-12">
							<h4 class="col-md-4">New Password:</h4>
							<input class="col-md-4" name="password" type="password" placeholder="Password">
							<div class="col-md-4" id="errpwmsg"></div>
						</div>
						<div class="col-md-12">
							<h4 class="col-md-4">Confirm Password:</h4>
							<input class="col-md-4" name="ckpassword" type="password" placeholder="Password">
							<div class="col-md-4" id="errckpwmsg"></div>
						</div>
						
						<button type="submit" name="action" value="update" class="col-md-4 col-md-offset-4">Update</button>
					</form>
					<div class="row">
						<a href="profile.php?delete=true" class="col-lg-4">Delete Account</a>
					</div>
				</div>
</div>


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