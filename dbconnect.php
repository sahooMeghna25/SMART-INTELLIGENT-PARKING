<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "smartparking";
	try{
		$con = mysqli_connect($host,$user,$password);
		if($con){
			$db = mysqli_select_db($con,$db);
			//echo $db;
			//print_r($con);exit;
		}else{
			echo "error";
		}
	}catch(Exception $ex){
		echo $ex->getMessage();
	}
?>