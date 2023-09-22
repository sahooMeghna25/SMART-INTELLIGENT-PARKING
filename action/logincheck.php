<?php 
	include("../dbconnect.php");
	if(isset($_POST['btnLogin'])){
		$emailid = $_POST['emailid'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM resigtration WHERE emailid = '$emailid' AND password = '$password'";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count){
			
			
			$_SESSION['login_session'] = $emailid;
			header("Location:../home.php");
		}else{
			$msg = "Invalid login";
			$_SESSION['msg'] = $msg;
			header("Location:../login.php");
		}
	}