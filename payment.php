<?php
 //echo "<pre>";print_r($_POST);exit;
 include_once('dbconnect.php');
   //print_r($con);exit;
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
?>
 <?php include('header.php'); ?>

<body style="background-image: url(a.jpg); height: 100%; background-position: center; background-repeat: no-repeat;
           background-size: cover ;">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Payment Information </h5>
              <div class="form-label-group">
                <form action="success.php" method="post">
                
                
                  <input type="hidden" name="location_id" value="<?php echo $location_id; ?>">
                  <input type="hidden" name="slot_details_id" value="<?php echo $slot_details_id; ?>">
                  <input type="hidden" name="vehicle_no" value="<?php echo $vehicle_no; ?>">
                  <input type="hidden" name="vehicle_type" value="<?php echo $vehicle_type; ?>">
                  <input type="hidden" name="entrydate" value="<?php echo $entrydate; ?>">
                  <input type="hidden" name="exitdate" value="<?php echo $exitdate; ?>">
                  <input type="hidden" name="entrytime" value="<?php echo $entrytime; ?>">
                  <input type="hidden" name="exittime" value="<?php echo $exittime; ?>">
                  <input type="hidden" name="capacity_id" value="<?php echo $capacity_id; ?>">
                  <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">

                <label for="inputEmail">Credit Card Name <font color="red">*</font></label>
                <br/>
                <input type="text" id="inputEmail" name="card_name" class="form-control" placeholder="Credit Card Name" required autofocus>
                
              </div>

              <div class="form-label-group">

                <label for="inputEmail">Credit Card No<font color="red">*</font></label>
                <input type="text" id="inputEmail" name="card_no" class="form-control" placeholder="Credit Card No" required autofocus>
                
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Expiry Date <font color="red">*</font></label>
                <input type="date" id="inputPassword" name="expiry_date" class="form-control" placeholder="Expiry Date" required>
                
              </div>
               <div class="form-label-group">
                <label for="inputPassword">CC <font color="red">*</font></label>
                <input type="text" id="inputPassword" name="cc" class="form-control" placeholder="CC" required>
                
              </div>

              <br>
              
              <input type="submit" name="" class="btn btn-lg btn-primary btn-block text-uppercase radius" value="submit">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--<?php
      include('footer.php');
?>