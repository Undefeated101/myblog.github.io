<?php
session_start();
$bar = "Undefeated &mdash; My Blog Project";
$btn = "";
if (isset($_SESSION['uname'])) {
	$d = $_SESSION['uname'];
	$c = '1';
	$uname = $_SESSION['uname'];
	$phot = $_SESSION['photo'];
	$btn = $btn.'<p><a href="account.php"><button type="button" class="btn btn-primary" style="border-radius:12px;text-transform: none;"><div align="right"><img src="'.$phot.'" style="width:30px;height:30px;border-radius:50%;"></div>'.$uname.'</button></a></p>';
}
else
{
	
	$btn=' <p><a href="login.php"><button type="button" class="btn btn-primary" style="border-radius:12px">Login/Register</button></a></p>';

	$d = 'GUEST';
	$c = '0';
}
include'connection.php';
$quer = sprintf("SELECT * FROM blogs ORDER BY id DESC");
$result = mysqli_query($conn,$quer);
$blog = "";
while ($row = mysqli_fetch_array($result)) {
	$id = $row['id'];
	$title = $row['title'];
	$image = $row['photo'];
	$user = $row['user'];
	$cat = $row['cate'];
	$con = $row['content'];
	$dat = $row['dat'];
	$blog = $blog.'<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="'.$image.'" class="img-responsive"></a>
							<div class="desc">
								<h3><a href="#">'.$title.'</a></h3>
								<span><small>by '.$user.' </small> / <small> '.$cat.' </small> / <small>'.$dat.'</small></span>
								<p>'.$con.'</p>
								<a href="read.php?id='.$id.'" class="lead">Read More <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>';
}
$title = "index";
$content = '<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_1.jpg);">
				   		<div class="container-fluid">
				   		<div class="overlay" align="right" style="padding-right: 30px;padding-top:30px;">
				   			'.$btn.'
				   		</div>
				   			<div class="row">
				   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
										<div class="slider-text-inner">
					   					<h1><strong>Welcome '.$d.', To my Website</strong></h1>
					   					<h2>This is a sample project blogging website</h2>
											<p><a href=" "><button type="button" class="btn btn-primary btn-demo popup-vimeo" style="border-radius:12px">View Blogs</button></a>&nbsp &nbsp<a href=" "><button type="button" class="btn btn-primary btn-learn">create blog<i class="icon-arrow-right3"></i></button></a></p>
					   					</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="container-fluid">
				   		<div class="overlay" align="right" style="padding-right: 30px;padding-top:30px;">
				   			'.$btn.'
				   		</div>
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1><strong>You can write and share your content to us</strong></h1>
											<h2>We are happy to announce that we have customer all across globe</h2>
											<p><a href=" "><button type="button" class="btn btn-primary btn-demo popup-vimeo" style="border-radius:12px">View Blogs</button></a>&nbsp &nbsp<a href=" "><button type="button" class="btn btn-primary btn-learn">create blog<i class="icon-arrow-right3"></i></button></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_3.jpg);">
				   		<div class="container-fluid">
				   		<div class="overlay" align="right" style="padding-right: 30px;padding-top:30px;">
				   			'.$btn.'
				   		</div>

				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1><strong>Enroll Yourself today by joining us</strong></h1>
											<h2>We will make you sure that your content will not be shared</a></h2>
											<p><a href=" "><button type="button" class="btn btn-primary btn-demo popup-vimeo" style="border-radius:12px">View Blogs</button></a>&nbsp &nbsp<a href=" "><button type="button" class="btn btn-primary btn-learn">create blog<i class="icon-arrow-right3"></i></button></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>
			
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Services</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-settings"></i>
							</div>
							<div class="fh5co-text">
								<h3>Strategy</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-search4"></i>
							</div>
							<div class="fh5co-text">
								<h3>Explore</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-paperplane"></i>
							</div>
							<div class="fh5co-text">
								<h3>Direction</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-params"></i>
							</div>
							<div class="fh5co-text">
								<h3>Expertise</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Recent Blog</h2>
				<div class="row row-bottom-padded-md">
					'.$blog.'
				</div>
			</div>';
include'master.php';
?>