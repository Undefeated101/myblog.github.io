<?php
session_start();
$title = "View Blog";
if (isset($_SESSION['uname'])) {
		$c = '1';
		$na = $_SESSION['uname'];
}
include'connection.php';
$quer = sprintf("SELECT * FROM blogs");
$result = mysqli_query($conn,$quer);
$blog = "";
while ($row = mysqli_fetch_array($result)) {
	$id = $row['id'];
	$titl = $row['title'];
	$image = $row['photo'];
	$user = $row['user'];
	$cat = $row['cate'];
	$con = $row['content'];
	$dat = $row['dat'];
	$blog = $blog.'<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="'.$image.'" class="img-responsive"></a>
							<div class="desc">
								<h3><a href="#">'.$titl.'</a></h3>
								<span><small>by '.$user.' </small> / <small> '.$cat.' </small> / <small>'.$dat.'</small></span>
								<p>'.$con.'</p>
								<a href="read.php?id='.$id.'" class="lead">Read More <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>';
}
$que = sprintf("SELECT * FROM blogs WHERE user='$na'");
$resul = mysqli_query($conn,$que);
$mblog="";
while ($ro = mysqli_fetch_array($resul)) {
	$titl = $ro['title'];
	$imag = $ro['photo'];
	$use = $ro['user'];
	$ca = $ro['cate'];
	$co = $ro['content'];
	$da = $row['dat'];
	$mblog = $mblog.'<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="'.$imag.'" class="img-responsive"></a>
							<div class="desc">
								<h3><a href="#">'.$titl.'</a></h3>
								<span><small>by '.$use.' </small> / <small> '.$ca.' </small> / <small>'.$da.'</small></span>
								<p>'.$co.'</p>
								<a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>';
}
if ($mblog == '') {
	$mblog = $mblog.'You Havenot create a blog yet..Create today';
}
$content='<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Read Our Blog</h2>
				<div class="row row-bottom-padded-md">
					'.$blog.'
				</div>
			</div><br><hr>
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Your Blog</h2>
				<div class="row row-bottom-padded-md">
					'.$mblog.'
				</div>
			</div>';
include'master.php';
?>