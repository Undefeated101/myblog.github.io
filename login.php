<?php
session_start();
include'connection.php';
if (isset($_SESSION['uname'])) {
		$c = '1';
}
if (isset($_POST['login'])) {
	$name = $_POST['txtUname'];
	$pass = $_POST['txtPassword'];
	$quer = sprintf("SELECT * FROM users");
	$result = mysqli_query($conn,$quer);
	while ($row = mysqli_fetch_array($result)) {
		$id = $row['id'];
		$nam = $row['username'];
		$pas = $row['password'];
		$phot = $row['image'];
		if(($nam == $name) && ($pass = $pas))
		{
			$_SESSION['uname'] = $nam;
			$_SESSION['id'] = $id;
			$_SESSION['photo'] = $phot;
			mysqli_close($conn);
			header("location:index.php");
		}
		else
		{
		print"<script>alert('credentials didnot matched')</script>";
		mysqli_close($conn);
		}
	}
}

$title="Login Page";
$content='<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				
				<div style="padding-left:100px;padding-top:100px;">
				<div class="row">
					<div class="col-md-4">
						<h3>Login to continue your journey</h3>
						<h4>Journey will start when you log in</h4>
					</div>
				</div>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>User Name:</label>
										<input type="text" class="form-control" placeholder="User Name" name="txtUname">
									</div>
									<div class="form-group">
										<label>Password:</label>
										<input type="Password" class="form-control" placeholder="Password" name="txtPassword">
									</div>
									<br>
									<a href="register.php">Don\'t have an account ? Register Now</a>
									<hr><br>
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" value="Login" name="login">
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