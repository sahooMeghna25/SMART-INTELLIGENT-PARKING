<?php
    include("../dbconnect.php");
   	$fname = $_POST['fname'];
   	$lname = $_POST['lname'];
	$emailid = $_POST['emailid'];
	$phnno = $_POST['phnno'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$conpass = $_POST['conpass'];

	if($password == $conpass){
		$sql_email = "SELECT emailid FROM resigtration WHERE emailid = '$emailid' ";
		$result  = mysqli_query($con,$sql_email);
		$email_count = mysqli_num_rows($result);
		if($email_count){
			$msg = "Dupalicate Email Id";
			$_SESSION['msg'] = $msg;
			header("Location:../register.php");
		}else{
			$sql = "insert into resigtration(fname,lname,emailid,phnno,address,password) values('$fname','$lname','$emailid','$phnno','$address','$password')";
			$status = mysqli_query($con,$sql);
			if($status){
				header("Location:../login.php");
			}
			else{
				$msg = "fail : try again".mysqli_error($con);
				$_SESSION['msg'] = $msg;
				header("Location:../register.php");
			}
	    	mysqli_close($con);
		}
		
	}else{
		$msg = "Password do not match";
		$_SESSION['msg'] = $msg;
		header("Location:../register.php");
	}
?>