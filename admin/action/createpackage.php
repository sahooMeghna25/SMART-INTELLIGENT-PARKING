<?php
	include_once("../includes/config.php");
	if(isset($_POST['submit'])){
		$pname=$_POST['packagename'];
		$ptype=$_POST['packagetype'];	
		$plocation=$_POST['packagelocation'];
		$pprice=$_POST['packageprice'];	
		$pfeatures=$_POST['packagefeatures'];
		$pdetails=$_POST['packagedetails'];	
		$pimage=$_FILES["packageimage"]["name"];
		$file_name = $_FILES['packageimage']['name'];
		$sql = "INSERT INTO package(name,type,location,price,features,details,image)VALUES('$pname','$ptype','$plocation','$pprice','$pfeatures','$pdetails','$file_name')";
		$status = mysqli_query($con,$sql);
		if($status){
			$upload = move_uploaded_file($_FILES["packageimage"]["tmp_name"],"../pacakgeimages/".$_FILES["packageimage"]["name"]);
			if($upload){
				$msg = "Package Created Successfully";
				$_SESSION['msg'] = $msg;
				header('Location:../create-package.php');
			}else{
				$msg = "image upload error";
				$_SESSION['msg'] = $msg;
				header('Location:../create-package.php');
			}
		}else{
			$msg = "Package Created Successfully".mysqli_error($con);
			$_SESSION['msg'] = $msg;
			header('Location:../create-package.php');
		}
		
	}