<?php
if ($c == 1) {
	$logout = '<li><a href="logout.php">Log Out</a></li>
	<li><a href="cblog.php">Create Blog</a></li>';
}
else
{
	$d = 'Guest';
	$logout ="";
}
?>
<!DOCTYPE html>
	 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title;?></title>
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<div class="bg-info text-white">
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php">Undefeated</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li <?php if ($title == 'index') { echo 'class="fh5co-active"';}?>><a href="index.php">Home</a></li>
					<li <?php if ($title == 'View Blog') { echo 'class="fh5co-active"';}?>><a href="vblog.php">All Blog</a></li>
					<li <?php if ($title == 'about me') { echo 'class="fh5co-active"';}?>><a href="about.php">About Me</a></li>
					<?php echo $logout;?>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<h2></h2><span><a href="" target="_blank">Welcome to my project website</a> </span></h2>
				<h3><small>This is a fully dynamic bloging project</span><br> <br>  <span>Designed by <a href="" target="_blank">Bipul Poudel</a> </span></small></h3>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>
		</aside>

		</div>

		<div id="fh5co-main">
		<?php echo $content?>	
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

