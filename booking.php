<?php
error_reporting(0);
 //echo "<pre>";print_r($_POST);exit;
 include('header.php');

 $vehicle_type = $_POST['vehicle_type'];
 $location_id = $_POST['location_id'];
 $slot_details_id = $_POST['slot_details_id'];
 $customer_id = $_POST['customer_id'];
 $capacity_id = $_POST['capacity_id'];

 $sql = "SELECT * FROM area WHERE area_id=".$location_id;
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result);
 $area_name = '';
 if(!empty($row)){
  $area_name = $row['area_name'];
 }
/*GET SLOT DERAILS*/
$sql_c = "SELECT * FROM slot_capacity WHERE slot_capacity_id=".$capacity_id;
$result_c = mysqli_query($con,$sql_c);
 $row_c = mysqli_fetch_array($result_c);
 $slot_capacity_name = '';
 if(!empty($row_c)){
  $slot_capacity_name = $row_c['slot_capacity_name'];
 }

 ?>

<body style="background-image: url(b.jpg); height: 100%; background-position: center; background-repeat: no-repeat;
           background-size: cover ;">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Booking Information</h5>
            <form class="form-signin" method="post" action="payment.php">
            	 <input type="hidden" name="location_id" value="<?php echo $location_id; ?>">
                <input type="hidden" name="capacity_id" value="<?php echo $capacity_id;?>">
                <input type="hidden" name="customer_id" value="<?php echo $customer_id;?>">
                <input type="hidden" name="vehicle_type" value="<?php echo $vehicle_type;?>">
                <input type="hidden" name="slot_details_id" value="<?php echo $slot_details_id;?>">
              <div class="form-label-group">
                <label for="inputEmail">Enter the Area name <font color="red">*</font></label>
                <br/>
                <input type="text" id="inputEmail" name="area_name" class="form-control" value="<?php echo $area_name; ?>" placeholder="Enter the Area name" required autofocus>
                
              </div>

              <div class="form-label-group">

                <label for="inputEmail">Slot<font color="red">*</font></label>
                <input type="text" id="inputEmail" name="slot_name" class="form-control" value="<?php echo $slot_capacity_name; ?>" placeholder="Slot name" required autofocus>

                
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Enter your Vehicle No<font color="red">*</font></label>
                <input type="text" id="inputPassword" name="vehicle_no" class="form-control" placeholder="Enter your Vehicle No" required>
                
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Check In<font color="red">*</font></label>
                <input type="date" id="inputPassword" name="entrydate" class="form-control" placeholder="Check In" required>
                 
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Check Out<font color="red">*</font></label>
                <input type="date" name="exitdate" id="inputPassword" class="form-control" placeholder="Check Out" required>
              </div>
                <div class="form-label-group">
                <label for="inputPassword">Check In time<font color="red">*</font></label>
                <input type="time" id="inputPassword" name="entrytime" class="form-control" placeholder="Check In time" required>
                
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Check Out time<font color="red">*</font></label>
                <input type="time" id="inputPassword" name="exittime" class="form-control" placeholder="Check Out time"required>
                
              </div>
              <br>
             
              <input type="submit" name="" class="btn btn-lg btn-primary btn-block text-uppercase radius" value="Pay now">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
<!-- <?php include('footer.php'); ?>-->