<?php
session_start();
include'connection.php';
$id = $_GET['id'];
if (isset($_SESSION['uname'])) {
	$name = $_SESSION['uname'];
	$cmt = $_POST['txtCmt'];
	$dat = date("Y/m/d");
	$quer = sprintf("INSERT INTO comments(name,comment,pid,dat) VALUES ('%s','%s','%s','%s')",$name,$cmt,$id,$dat);
	mysqli_query($conn,$quer);
	mysqli_close($conn);
	header('location:read.php?id='.$id.'');
}
else
{
	print "<script>alert('Please login to comment')</script>";
}
?>