<?php 
	include_once("../includes/config.php");
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM admin WHERE username='$username'AND password='$password'";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count){
			$_SESSION['alogin'] = $username;
			
			header("Location:../dashboard.php");
		}else{
			$msg = "Invalid username / password";
			$_SESSION['msg'] = $msg;
			header('Location:../index.php');
		}
	}
?>