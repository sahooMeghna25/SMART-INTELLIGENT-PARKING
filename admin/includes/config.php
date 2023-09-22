<?php 
// DB credentials.
	session_start();
	error_reporting(E_ALL); 
	ini_set('display_errors', 1);
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "smartparking";
	try{
		$con = mysqli_connect($host,$user,$password);
		if($con){
			mysqli_select_db($con,$db);
			//print_r($con);
		}else{
			echo "not";
		}
	}catch(Exception $ex){
		echo $ex->getMessage();
	}