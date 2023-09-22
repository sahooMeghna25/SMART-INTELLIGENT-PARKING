<?php include_once('dbconnect.php');

    
 // echo "<pre>";print_r($_POST);exit;
   $location_id = $_POST['location_id'];
   $slot_details_id = $_POST['slot_details_id'];
   $vehicle_no = $_POST['vehicle_no'];
   $vehicle_type = $_POST['vehicle_type'];
   $entrydate = $_POST['entrydate'];
   $exitdate = $_POST['exitdate'];
   $entrytime = $_POST['entrytime'];
   $exittime = $_POST['exittime'];
   $capacity_id = $_POST['capacity_id'];
   $customer_id = $_POST['customer_id'];
    $sql = "INSERT INTO booking (area_id,slot_details_id,vehicle_no,vehicle_id,entrydate,exitdate,entrytime,exittime,slot_capacity_id,user_id) VALUES ('$location_id','$slot_details_id', '$vehicle_no','$vehicle_type', '$entrydate','$exitdate' ,'$entrytime', '$exittime', '$capacity_id', '$customer_id')";
    mysqli_query($con,$sql);
    $last_insert_id = mysqli_insert_id($con);
    if($last_insert_id){
    	$card_name = $_POST['card_name'];
	     $card_no = $_POST['card_no'];
	     $expiry_date = $_POST['expiry_date'];
	     $cc = $_POST['cc'];
	     $status = mysqli_query($con,"INSERT INTO payment (card_name,card_no,expiry_date,cc,booking_id) VALUES ('$card_name','$card_no', '$expiry_date', '$cc','$last_insert_id')");
	     if($status){
	     	echo "payment Successfull";
	     }else{
	     	echo "payment unsuccessfull";

	     }

	 }else{
	 	echo "";
	 }

   header('refresh: 5; index.php');

    
     ?>