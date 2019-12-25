<?php
session_start();
$title="Read blogs";
$id = $_GET['id'];
include'connection.php';
$quer = sprintf("SELECT * FROM blogs WHERE id='$id'");
$res = mysqli_query($conn,$quer);
while ($row = mysqli_fetch_array($res)) {
	$title = $row['title'];
	$image = $row['photo'];
	$user = $row['user'];
	$cat = $row['cate'];
	$con = $row['content'];
	$dat = $row['dat'];
}
$quer = sprintf("SELECT * FROM comments WHERE pid='$id'");
$comm = '';
$res = mysqli_query($conn,$quer);
while ($row = mysqli_fetch_array($res)) {
	$user = $row['user'];
	$com = $row['comment'];
	$date = $row['dat'];
	$q = sprintf("SELECT * FROM users WHERE username='$user'");
	$res1 = mysqli_query($conn,$q);
	while($r1 = mysqli_fetch_array($res1))
	{
		$im = $r1['image'];
	}
	$comm = $comm.'<div class="row">
        	    <div class="col-md-2">
        	        <img src="'.$im.'" width = 50px height = 60px class="img img-rounded img-fluid"/>
        	        <p class="text-secondary text-center">'.$date.'</p>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>'.$user.'</strong></a>
        	       </p>
        	       <div class="clearfix"></div>
        	        <p>'.$com.'</p>
        	        <p>
        	            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
        	            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
        	       </p>
        	    </div>
	        </div>
	        <hr>
	        <hr>';
}
if (isset($_POST['comment'])) {
	if (isset($_SESSION['uname'])) {
	$c = '1';
	$name = $_SESSION['uname'];
	$cmt = $_POST['txtCmt'];
	$dat = date("Y/m/d");
	$quer = "INSERT INTO `comments` ( `user`, `comment`, `pid`, `dat`) VALUES ('$name', '$cmt', '$id', '$dat')";
	mysqli_query($conn,$quer);
	mysqli_close($conn);
	header('location:read.php?id='.$id.'');
	}
	else
	{
	print "<script>alert('Please login to comment')</script>";
	}
}
$content='<div class="fh5co-narrow-content">
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<img class="img-responsive" src="'.$image.'" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="fh5co-heading">'.$title.'</h2>
						<p>Written by:  '.$user.'</p>
						<p>Categories:  '.$cat.'</p>
						<p>Written on :  '.$dat.'</p>
					</div>
				</div>
			</div>

			<div class="fh5co-narrow-content">
					<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Content</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-text">
									<p>'.$con.' </p>
								</div>
							</div>
						</div>	
				</div>
			</div>
			<div class="fh5co-narrow-content">
					<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Comments:</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="container">
									<div class="card">
	    								<div class="card-body">
	    								'.$comm.'
	   									 </div>
									</div>
									<form action=" " method="post" enctype="multipart/form-data">
									<div class="row">
									<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
									<div class="form-group">
										<label>Comment:</label>
										<input type="text" class="form-control" placeholder="comment" name="txtCmt">
									</div>
									<div class="form-group">
									<input type="submit" class="btn btn-primary btn-md" value="Comment" name="comment">
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</form>
							</div>
							</div>
						</div>	
				</div>
			</div>
	    </div>';
include'master.php';
?>