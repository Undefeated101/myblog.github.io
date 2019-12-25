<?php
session_start();
$title="Create Blog Page";
if (isset($_SESSION['uname'])) {
		$c = '1';
}
if (isset($_SESSION['uname'])) {
	$logout = '<li><a href="logout.php">Log Out</a></li>
	<li class="fh5co-active"><a href="cblog.php" >Create Blog</a></li>';
if (isset($_POST['register'])) {
	include 'connection.php';
	$name = $_SESSION['uname'];
	$title = $_POST['txtTitle'];
	$cont = $_POST['txtContent'];
	$file = $_FILES['txtPhoto'];
	$nam = $file['name'];
	$tname = $file['tmp_name'];
	$folder = "images/blog/".$nam;
	$dat = date("Y/m/d");
	$cat = $_POST['txtCat'];
	move_uploaded_file($tname, $folder);
	$quer = "INSERT INTO `blogs` ( `title`, `user`, `content`, `photo`, `dat`, `cate`) VALUES ('$title', '$name', '$cont', '$folder', '$dat', '$cat')";
	mysqli_query($conn,$quer);
	mysqli_close($conn);
}
}
else
{
	header("location:login.php");
}
$content='<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				<div style="padding-left:100px;padding-top:100px;">
				<div class="row">
					<div class="col-md-4">
						<h3>Create your blog Today!!</h3>
						<h4>It will be displayed all over world.Isn\'t that great thing??</h4>
					</div>
				</div>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Title:</label>
										<input type="text" class="form-control" placeholder="Title of blog" name="txtTitle">
									</div>
									<div class="form-group">
										<label>Categories:</label>
										<input type="text" class="form-control" placeholder="Categories of blog" name="txtCat">
									</div>
									<div class="form-group">
										<label>Photo of blog:</label>
										<input type="file" class="form-control" placeholder="Phone" name="txtPhoto">
									</div>
									<div class="form-group">
										<label>Content:</label>
										<textarea name="txtContent" cols="30" rows="7" class="form-control" placeholder="content"></textarea>
									</div>
									<hr><br>
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" name="register">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
			<div id="map"></div>';
include'master.php';
?>