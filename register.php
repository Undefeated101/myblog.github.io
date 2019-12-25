<?php
$title="Register Page";
if (isset($_SESSION['uname'])) {
		$c = '1';
}
if (isset($_POST['register'])) {
$name = $_POST['txtName'];
$uname = $_POST['txtUname'];
$email = $_POST['txtEmail'];
$pass = $_POST['txtPassword'];
$cpass = $_POST['txtCpassword'];
$file = $_FILES['txtPhoto'];
$nam = $file['name'];
$tnam = $file['tmp_name'];
$folder = "images/".$nam;
move_uploaded_file($tnam,$folder);
if ($pass == $cpass) {
	include'connection.php';
	$quer = sprintf("INSERT INTO users(name,email,password,image,username) VALUES ('%s','%s','%s','%s','%s')",$name,$email,$pass,$folder,$uname);
	mysqli_query($conn,$quer);
	mysqli_close($conn);
	header("location:login.php");
}
else
{
	print"<script>alert('credentials didnt matched')</script>";
}
}
$content='<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				
				<div style="padding-left:100px;padding-top:100px;">
				<div class="row">
					<div class="col-md-4">
						<h3>Register Yourself Today!!</h3>
						<h4>Don\'t worry your details will be in safe hands</h4>
					</div>
				</div>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Full Name:</label>
										<input type="text" class="form-control" placeholder="Name" name="txtName">
									</div>
									<div class="form-group">
										<label>User Name:</label>
										<input type="text" class="form-control" placeholder="User Name" name="txtUname">
									</div>
									<div class="form-group">
										<label>Email:</label>
										<input type="text" class="form-control" placeholder="Email" name="txtEmail">
									</div>
									<div class="form-group">
										<label>Password:</label>
										<input type="Password" class="form-control" placeholder="Password" name="txtPassword">
									</div>
									<div class="form-group">
										<label>Confirm Password:</label>
										<input type="Password" class="form-control" placeholder="Confirm Password" name="txtCpassword">
									</div>
									<div class="form-group">
										<label>Your Photo</label>
										<input type="file" class="form-control" placeholder="Phone" name="txtPhoto">
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